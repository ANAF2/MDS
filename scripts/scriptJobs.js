function Job(jobId, employer, job_title, description, skills) {
    this.jobId = jobId;
    this.employer = employer;
    this.job_title = job_title;
    this.description = description;
    this.skills = skills;
}

function getCommonSkillsNumber(user, job) {
    return {
        score: user.filter(x => job.skills.includes(x)).length,
        job: job
    }
}

function sortJobsBasedOnSkills(jobs) {
    jobs.sort(function(a, b){return b.score - a.score});
    return jobs;
}

function startJobSearching(user, jobs) {
    let jobsList = [];
    for (let i = 0; i < jobs.length; ++i) {
        jobs[i].skills = jobs[i].skills.split("; ");
        jobsList.push(getCommonSkillsNumber(user, jobs[i]));
    }
    jobsList = sortJobsBasedOnSkills(jobsList);
    return jobsList;
}

function showJobs(jobs) {
    let domAppend = '';
    for (let i = 0; i < jobs.length; ++i) {
        const job = jobs[i];
        const domEmployer = "Employer: " + job.employer + "<br>";
        const domTitle = "Title: " + job.job_title + "<br>";
        const domDescription = "Description: " + job.description; + "<br>";
        const domSkills = "Skills: " + job.skills + "<br>";
        const domMatchingScore = "Matching Score: " + job.score + "<br>";
        domAppend += "<div>" + domEmployer + domTitle + domDescription + domSkills + domMatchingScore + "</div>";
    }
    document.getElementById("main-content").innerHTML = domAppend;
}
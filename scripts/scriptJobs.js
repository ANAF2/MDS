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
    let domAppend = '<hr>';
    for (let i = 0; i < jobs.length; ++i) {
        const job = jobs[i].job;
        const score = jobs[i].score;
        let skills = "";
        for (let j = 0; j < job.skills.length; ++j) {
            skills += job.skills[j] + " ";
        }
        const domEmployer = "<p><b>Employer:</b> " + job.employer + "</p>";
        const domTitle = "<p><b>Title:</b> " + job.job_title + "</p>";
        const domDescription = "<p><b>Description:</b> " + job.description; + "</p>";
        const domSkills = "<p><b>Skills:</b> " + skills + "</p>";
        const domMatchingScore = "<p><b>Matching Score:</b> " + score + "</p>";
       
        domAppend += "<div class='job-listing'> " + domEmployer + domTitle + domDescription + domSkills + domMatchingScore + "<hr> </div>";
    }
    return domAppend;
}
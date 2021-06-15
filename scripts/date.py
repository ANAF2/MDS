import random

iesire = open("iesire.txt", "w")


filler_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placerat in, faucibus eu tortor. Nulla ipsum diam, ultrices eget nisl sit amet, porta volutpat nulla. Sed ac urna vel mauris accumsan varius. Etiam eu posuere mauris, scelerisque egestas magna. Curabitur scelerisque turpis vel odio efficitur sagittis. Sed viverra placerat porttitor. Quisque fermentum vehicula felis ac iaculis."

employer = ["Google", "Facebook", "Tremend", "Twitter", "Oracle", "Adobe", "Bloomberg", "HP", "Amazon", "Uber"]
title = ["Software engineer", "Python developer", "Java developer", "Front-end engineer", "Tehnical supprt", "SQL database developer", "Web developer"]
skills = ["PHP", "HTML", "Java", "Python", "SQL", "NodeJS", "C#", "Haskell", "Linux", "GIT", "CSS"]
stack = []

iesire.write("")

for i in range(0, 31):
    elem = random.choice(employer)
    elem2 = random.choice(title)
    stack.append(elem)
    if elem2 == "Software engineer":
        s1, s2, s3, s4, s5 = skills[2], skills[3], skills[4], skills[8], skills[9]
        iesire.write(f"INSERT INTO `jobs`(`jobId`, `employer`, `job_title`, `description`, `skills`) VALUES ('NULL','{elem}','{elem2}','{filler_text}','{s1}; {s2}; {s3}; {s4}; {s5}')\n")
    elif elem2 == "Front-end engineer" or elem2 == "Web developer":
        s1, s2, s3, s4, s5, s6 = skills[0], skills[1], skills[4], skills[5], skills[9], skills[10]
        iesire.write(f"INSERT INTO `jobs`(`jobId`, `employer`, `job_title`, `description`, `skills`) VALUES ('NULL','{elem}','{elem2}','{filler_text}','{s1}; {s2}; {s3}; {s4}; {s5}; {s6}')\n")
    elif elem2 == "Python developer":
        s1, s2, s3, s4 = skills[3], skills[4], skills[8], skills[9]
        iesire.write(f"INSERT INTO `jobs`(`jobId`, `employer`, `job_title`, `description`, `skills`) VALUES ('NULL','{elem}','{elem2}','{filler_text}','{s1}; {s2}; {s3}; {s4}')\n")
    elif elem2 == "Java developer":
        s1, s2, s3, s4 = skills[2], skills[4], skills[8], skills[9]
        iesire.write(f"INSERT INTO `jobs`(`jobId`, `employer`, `job_title`, `description`, `skills`) VALUES ('NULL','{elem}','{elem2}','{filler_text}','{s1}; {s2}; {s3}; {s4}')\n")
    elif elem2 == "SQL database developer":
        s1, s2, s3, s4 = skills[4], skills[5], skills[8], skills[9]
        iesire.write(f"INSERT INTO `jobs`(`jobId`, `employer`, `job_title`, `description`, `skills`) VALUES ('NULL','{elem}','{elem2}','{filler_text}','{s1}; {s2}; {s3}; {s4}')\n")
    else:
        s1, s2, s3, s4 = skills[1], skills[7], skills[8], skills[9]
        iesire.write(f"INSERT INTO `jobs`(`jobId`, `employer`, `job_title`, `description`, `skills`) VALUES ('NULL','{elem}','{elem2}','{filler_text}','{s1}; {s2}; {s3}; {s4}')\n")
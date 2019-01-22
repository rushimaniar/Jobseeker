--Candidate Tab
--Who are the candidates with undergraduate degree, GPA between 2.5 and 3.0, work experience between 12 to 36 months and accounting skills?
SELECT DISTINCT c.candId, c.candName, c.candLocation, c.candGPA, c.candExpMonths, c.candQualification,s.candSkill 
FROM [Jobseeker.Candidate] c, [Jobseeker.Candidate_Skills] s 
WHERE c.candId = s.candId AND c.candQualification='undergraduate' AND s.candSkill LIKE '%Accounting%' AND (c.candGPA >= 2.5 AND c.candGPA <= 3) AND (c.candExpMonths >= 12 AND c.candExpMonths <= 36);

--Comapny Tab
--What are all the companies in Finance industry located in New York?
SELECT compName, industry, compLocation, noOfEmployees, compDesc 
FROM [Jobseeker.Company] 
WHERE industry = 'Consulting' AND compLocation LIKE '%NY%' AND compName LIKE '%%' ;

--Job Tab
--What are all the full-time jobs with Job Role as Application Analyst, sorted by date when it is posted?
SELECT j.jType, j.jRole, j.postDate, j.deadline, j.reqDocs, j.salary, j.minGPA, j.minExp, j.salary, c.compName 
FROM [Jobseeker.Job] j, [Jobseeker.Company] c 
WHERE j.compId = c.compId AND j.jType = 'Full time' AND j.jRole = 'Application Analyst' AND j.minGPA >= 0 AND j.minExp >= 0 
ORDER BY 'postDate' ASC;

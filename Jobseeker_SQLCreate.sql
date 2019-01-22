CREATE TABLE [Jobseeker.Company] (
compId VARCHAR(20) NOT NULL,
compName VARCHAR(20),
industry VARCHAR(50),
compLocation VARCHAR(100),
noOfEmployees BIGINT,
compDesc VARCHAR(8000),
CONSTRAINT pk_Company_compId PRIMARY KEY (compId));

CREATE TABLE [Jobseeker.Job] (
jId VARCHAR(20) NOT NULL,
jDesc VARCHAR(8000),
postDate DATE,
deadline DATE,
reqDocs VARCHAR(1000),
jType VARCHAR(100),
jRole VARCHAR(100),
salary FLOAT,
minGPA FLOAT,
minExp INTEGER,
compId VARCHAR(20),
CONSTRAINT pk_Job_jId PRIMARY KEY (jId),
CONSTRAINT fk_Job_compId FOREIGN KEY (compId)
	REFERENCES [Jobseeker.Company] (compId)
	ON DELETE CASCADE ON UPDATE CASCADE);

CREATE TABLE [Jobseeker.Required_Skills] (
skill VARCHAR(500) NOT NULL,
jId VARCHAR(20) NOT NULL,
CONSTRAINT pk_Required_Skills_skill_jId PRIMARY KEY (skill, jId),
CONSTRAINT fk_Required_Skills_jId FOREIGN KEY (jId)
	REFERENCES [Jobseeker.Job] (jId)
	ON DELETE CASCADE ON UPDATE CASCADE);

CREATE TABLE [Jobseeker.Location] (
locId VARCHAR(20) NOT NULL,
city VARCHAR(50),
state VARCHAR(50),
zip INTEGER,
CONSTRAINT pk_Location_locId PRIMARY KEY(locId));

CREATE TABLE [Jobseeker.University] (
uId VARCHAR(20) NOT NULL,
uName VARCHAR(100),
uLocation VARCHAR(100),
CONSTRAINT pk_University_uId PRIMARY KEY (uId));

CREATE TABLE [Jobseeker.Candidate] (
candId VARCHAR(20) NOT NULL,
candName VARCHAR(50),
candLocation VARCHAR(100),
candGPA FLOAT,
candExpMonths INT,
candQualification VARCHAR(100),
uId VARCHAR(20),
CONSTRAINT pk_Candidate_candId PRIMARY KEY (candId),
CONSTRAINT fk_Candidate_uId FOREIGN KEY (uId)
	REFERENCES [Jobseeker.University] (uId)
	ON DELETE NO ACTION ON UPDATE CASCADE );

CREATE TABLE [Jobseeker.Candidate_Skills] (
candSkill VARCHAR(500) NOT NULL,
candId VARCHAR(20) NOT NULL,
CONSTRAINT pk_Candidate_Skills_candSkill_candId PRIMARY KEY (candSkill,candId),
CONSTRAINT fk_Candidate_Skills_candId FOREIGN KEY (candId)
	REFERENCES [Jobseeker.Candidate] (candId)
	ON DELETE CASCADE ON UPDATE CASCADE);

CREATE TABLE [JobSeeker.Hires_From] (
compId VARCHAR(20) NOT NULL,
uId VARCHAR(20) NOT NULL,
CONSTRAINT pk_Hires_From_compId_uId PRIMARY KEY(compId, uId),
CONSTRAINT fk_Hires_From_compId FOREIGN KEY (compId)
	REFERENCES [JobSeeker.Company] (compId)
	ON DELETE NO ACTION ON UPDATE CASCADE,
CONSTRAINT fk_Hires_From_uId FOREIGN KEY (uId)
	REFERENCES [Jobseeker.University] (uId)
	ON DELETE NO ACTION ON UPDATE CASCADE);

CREATE TABLE [Jobseeker.Applies] (
jId VARCHAR(20) NOT NULL,
candId VARCHAR(20) NOT NULL,
appDate DATE,
CONSTRAINT pk_Applies_jId_candId PRIMARY KEY (jId, candId),
CONSTRAINT fk_Applies_jId FOREIGN KEY (jId)
	REFERENCES [Jobseeker.Job] (jId)
	ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT fk_Applies_candId FOREIGN KEY (candId)
	REFERENCES [Jobseeker.Candidate] (candId)
	ON DELETE CASCADE ON UPDATE CASCADE);

CREATE TABLE [Jobseeker.Available_at] (
jId VARCHAR(20) NOT NULL,
locId VARCHAR(20) NOT NULL,
CONSTRAINT pk_Available_at_jId_locId PRIMARY KEY(jId, locId),
CONSTRAINT fk_Available_at_jId FOREIGN KEY (jId)
	REFERENCES [Jobseeker.Job] (jId)
	ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT fk_Available_at_locId FOREIGN KEY (locId)
	REFERENCES [Jobseeker.Location] (locId)
	ON DELETE CASCADE ON UPDATE CASCADE);

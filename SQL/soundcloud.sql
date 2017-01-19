DROP TABLE IF EXISTS upload;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileUser VARCHAR(35) NOT NULL,
	profileLocation VARCHAR(40),
	profileUrl VARCHAR(25),
	profileBio VARCHAR(1500),
	UNIQUE(profileUrl)
	PRIMARY KEY(profileId)
)

CREATE TABLE upload (

)

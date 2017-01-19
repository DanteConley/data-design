DROP TABLE IF EXISTS upload;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileUser VARCHAR(35) NOT NULL,
	profileLocation VARCHAR(45),
	profileUrl VARCHAR(30),
	profileBio VARCHAR(1500),
	UNIQUE(profileUrl),
	PRIMARY KEY(profileId)
);

CREATE TABLE upload (
	uploadId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	uploadTrackFileName VARCHAR(150) NOT NULL,
	uploadTitle VARCHAR(50) NOT NULL,
	uploadCoverArtFileName VARCHAR(150),
	uploadGenre VARCHAR(20),
	uploadDescription VARCHAR(1000),
	PRIMARY KEY(uploadId)
);

DROP DATABASE IF EXISTS schema;
CREATE DATABASE schema;
USE schema;


DROP TABLE IF EXISTS 'users';
CREATE TABLE 'users' (
	'id' int(10) PRIMARY KEY NOT NULL auto_increment,
	'firstname' varchar(35) NOT NULL default '',
	'lastname' varchar(35) NOT NULL default '',
	'password' varchar(12) NOT NULL default '',
	'email' varchar(40) NOT NULL default '',
	'date_joined' date NO_ZERO_DATE default'0000-00-00'
);

INSERT INTO 'users' VALUES('1000000001','Monique','Parker','password123','admin@bugme.com','2019-01-01');

DROP TABLE IF EXISTS 'issues';
CREATE TABLE 'issues' (
	'id' int(10) PRIMARY KEY NOT NULL auto_increment,
	'title' varchar(45) NOT NULL default '',
	'description' varchar(100) NOT NULL default '',
	'type' varchar(12) NOT NULL default '',
	'priority' varchar(35) NOT NULL default '',
	'status' varchar(35) NOT NULL default '',
	'assigned_to' int(10) NOT NULL default '',
	'created_by' int(10) NOT NULL default '',
	'created' date NOT NULL;
	'updated' date NOT NULL
);
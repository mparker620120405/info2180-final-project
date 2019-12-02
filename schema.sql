DROP DATABASE IF EXISTS schema;
CREATE DATABASE schema;
USE schema;

DROP TABLE IF EXISTS 'users';
CREATE TABLE users (
	id int(10) PRIMARY NOT NULL auto_increment,
	firstname varchar(25) NOT NULL,
	lastname varchar(25) NOT NULL,
	password varchar(10) NOT NULL,
	email varchar(50) NOT NULL,
	date_joined date NOT NULL
);

INSERT INTO users (id, email, password) VALUES (1, 'admin@bugme.com', 'password123');

DROP TABLE IF EXISTS 'issues';
CREATE TABLE 'issues' (
	id int(10) PRIMARY KEY NOT NULL auto_increment,
	title varchar(45) NOT NULL,
	description varchar(100) NOT NULL,
	type varchar(12) NOT NULL,
	priority varchar(35) NOT NULL,
	status varchar(35) NOT NULL,
	assigned_to int(10) NOT NULL,
	created_by int(10) NOT NULL,
	created date NOT NULL,
	updated date NOT NULL
);
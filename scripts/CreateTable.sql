CREATE TABLE user (fname varchar(20) NOT NULL, lname varchar(20) NOT NULL,dp varchar(30),gender varchar(11),agegroup varchar(20),email varchar(30) NOT NULL,contact varchar(15) NOT NULL,pword varchar(30) NOT NULL, PRIMARY KEY (email));

CREATE TABLE admin (fname varchar(10) NOT NULL, lname varchar(10) NOT NULL,dp varchar(30),gender varchar(11),agegroup varchar(20),email varchar(30) NOT NULL,contact varchar(15) NOT NULL, pword varchar(20) NOT NULL, PRIMARY KEY (email));

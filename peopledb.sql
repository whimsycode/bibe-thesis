BEGIN;
CREATE DATABASE peopledb;

CREATE TABLE PeopleCountTable(
	peopleCount1 int,
    peopleCount2 int
);


INSERT INTO peopleCountTable (peopleCount1, peopleCount2) VALUES (5,6);

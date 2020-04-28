CREATE DATABASE IF NOT EXISTS sample CHARACTER SET utf8 COLLATE utf8_general_ci;

USE sample;

CREATE TABLE IF NOT EXISTS todos (
    id INT,
    name VARCHAR(256),
    description VARCHAR(1024),
    duedate DATE,
    startdate DATE,
    PRIMARY KEY (id)
) ENGINE=INNODB;

CREATE DATABASE upf_crms ;

USE DATABASE `upf_crms` ;

CREATE TABLE suspects (1
`suspect_id` INTEGER PRIMARY KEY AUTO_INCREMENT,
`first_name` VARCHAR(255),
`last_name` VARCHAR(255),
`date_of_birth` DATE,
`address` VARCHAR(255),
`charges` VARCHAR(255),
`convictions` VARCHAR(255)
);

CREATE TABLE victims (
`victim_id` INTEGER PRIMARY KEY AUTO_INCREMENT,
`first_name` VARCHAR(255),
`last_name` VARCHAR(255),
`date_of_birth` DATE,
`address` VARCHAR(255),
`support_services` VARCHAR(255)
);

CREATE TABLE crimes (
`crime_id` INTEGER PRIMARY KEY AUTO_INCREMENT,
`crime_type` VARCHAR(255),
`date_of_crime` DATE,
`location` VARCHAR(255),
`description` VARCHAR(255),
`suspect_id` INTEGER,
FOREIGN KEY (suspect_id) REFERENCES suspects(suspect_id)
);

CREATE TABLE investigations (
`investigation_id` INTEGER PRIMARY KEY AUTO_INCREMENT,
`crime_id` INTEGER,
`status` VARCHAR(255),
`officer_id` INTEGER,
FOREIGN KEY (crime_id) REFERENCES crimes(crime_id),
FOREIGN KEY (officer_id) REFERENCES officers(officer_id)
);

CREATE TABLE officers (
`officer_id` INTEGER PRIMARY KEY AUTO_INCREMENT,
`first_name` VARCHAR(255),
`last_name` VARCHAR(255),
`rank` VARCHAR(255),
`contact_details` VARCHAR(255)
);
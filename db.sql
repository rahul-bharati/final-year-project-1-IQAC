-- create schema for iqac
create schema if not exists `iqac`;

use iqac;
-- create table for faculty login
create table if not exists `iqac`.`facultyDept`(
id int primary key auto_increment,
`Department_name` varchar(40) unique,
`Password` varchar(32)
);

-- create table for admin login
create table if not exists `iqac`.`adminDept`(
id int primary key auto_increment,
`Department_name` varchar(40) unique,
`Password` varchar(32)
);

-- create table to record report log
create table if not exists `iqac`.`report`(id int primary key auto_increment,
ref_id int,
department varchar(100),
event_type varchar(50),
dateOfCreation datetime, status varchar(20));

-- create workshop table
create table if not exists `iqac`.`workshop`(
    id int primary key auto_increment,
    title varchar(40),
    subtitle varchar(40),
    description varchar(1000),
    dateOfConduct date,
    report varchar(1000),
    img1 varchar(1000),
    img2 varchar(1000),
    img3 varchar(1000),
    img4 varchar(1000)
);

-- create seminar table
create table if not exists `iqac`.`seminars`(
    id int primary key auto_increment,
    title varchar(40),
    subtitle varchar(40),
    description varchar(40),
    dateOfConduct date,
    lecturerName varchar(40),
    topic varchar(100),
    contact numeric(12),
    report varchar(1000),
    img1 varchar(1000),
    img2 varchar(1000),
    img3 varchar(1000),
    img4 varchar(1000)
);


-- create Guest Lectures table
create table if not exists `iqac`.`guest_lectures`(
    id int primary key auto_increment,
    title varchar(40),
    subtitle varchar(40),
    description varchar(40),
    dateOfConduct date,
    lecturerName varchar(40),
    topic varchar(100),
    contact numeric(12),
    report varchar(1000),
    img1 varchar(1000),
    img2 varchar(1000),
    img3 varchar(1000),
    img4 varchar(1000)
);


-- create Industrial visit table
create table if not exists `iqac`.`iv`(
    id int primary key auto_increment,
    title varchar(40),
    subtitle varchar(40),
    description varchar(40),
    dateOfConduct date,
    industryName varchar(40),
    topic varchar(100),
    guide varchar(100),
    contact numeric(12),
    report varchar(1000),
    img1 varchar(1000),
    img2 varchar(1000),
    img3 varchar(1000),
    img4 varchar(1000)
);

-- create Events table
create table if not exists `iqac`.`events`(
    id int primary key auto_increment,
    title varchar(40),
    subtitle varchar(40),
    description varchar(1000),
    dateOfConduct date,
    report varchar(1000),
    img1 varchar(1000),
    img2 varchar(1000),
    img3 varchar(1000),
    img4 varchar(1000)
);

-- create table for events type
create table if not exists `iqac`.`events_type`(
id int primary key auto_increment,
event_type varchar(50)
);

-- Populating the table
insert into `iqac`.`facultyDept` values
("","History",md5(123456)),
("","Business Economics",md5(123456)),
("","Economics",md5(123456)),
("","Psychology",md5(123456)),
("","English",md5(123456)),
("","Political Science",md5(123456)),
("","Hindi",md5(123456)),
("","Accountancy",md5(123456)),
("","Environmental Studies",md5(123456)),
("","Commerce",md5(123456)),
("","Chemistry",md5(123456)),
("","Physics",md5(123456)),
("","Botany",md5(123456)),
("","Zoology",md5(123456)),
("","Mathematics and Statistics",md5(123456)),
("","Librarian",md5(123456)),
("","Computer Science",md5(123456)),
("","Information technology",md5(123456)),
("","Bio-Technology",md5(123456)),
("","B.M.M",md5(123456)),
("","B.M.S & B.A.F",md5(123456)),
("","M.A. English Literature",md5(123456)),
("","M.A. Psychology",md5(123456)),
("","MA (Entertainment, Media & Advertising)",md5(123456)),
("","Sports Co-ordinator",md5(123456));

insert into `iqac`.`adminDept` values
("","Admin",md5(123456));

insert into `iqac`.`events_type` values
("","Workshops"),
("","Seminars"),
("","Guest Lectures"),
("","Industrial Visit"),
("","Events");
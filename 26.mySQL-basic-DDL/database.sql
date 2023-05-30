
create database test;
drop database test;
create database if not exists test;
drop database if exists test;


DROP TABLE user;

create TABLE test.user (
id int not null auto_increment,
user_name varchar(255) not null,
email varchar(255),
phone varchar(11),

primary key(id),
unique(email)
);

ALTER TABLE test.user ADD address varchar(255);
ALTER TABLE test.user DROP address;

ALTER TABLE test.user Modify address varchar(255) not null default 'Multan';






drop database if exists social;
create database if not exists social;

create TABLE social.user (
id int not null auto_increment, 
name varchar(255) not null,
username varchar(255) not null,
email varchar(255) not null,
phone varchar(255) not null,
website varchar(255),

primary key(id)
);


create TABLE social.post (
id int not null auto_increment,
userId int not null,
title varchar(255) not null,
body varchar(255) not null,
primary key(id)
);

INSERT INTO social.user (`name`, `username`, `email`, `phone`) 
VALUES ('test3', 'test3.test', 'email3', '12345678903'),
('test4', 'test4.test', 'email4', '12345678904'),
('test4', 'test4.test', 'email4', '12345678904'),
('test4', 'test4.test', 'email4', '12345678904');


SELECT * FROM `user` where id="4";
Delete FROM `user` where id="4";

create database test;
use test;

create table users(
                      user_id int auto_increment primary key,
                      name varchar(250)
);

create table advertisements(
                               advertisement_id int auto_increment primary key,
                               user_id int,
                               title varchar(250),
                               foreign key (user_id) references users(user_id)
);
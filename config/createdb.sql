drop database if exists restboard;
create database if not exists restboard default character set utf8 collate utf8_general_ci;
grant all privileges on restboard.* to 'restboard'@'localhost' identified by 'restboard' with grant option;
flush privileges;
quit

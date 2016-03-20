/*create database messhub;*/
use messhub;
/*
drop table refugees;
create table refugees (ID int (10), firstName varchar (20), lastName varchar(20), mealsLeft int, pass varchar (12));

insert into refugees values ('010529125', 'Din', 'Navin', 7, 'achhsh');
insert into refugees values ('16345957', 'Jin', 'Ahmed', 2, 'dkgj');
insert into refugees values ('44125', 'Ken', 'Hikari', 4, 'k75');*/

/*drop table log;
create table log (userID int(10), hubID int(5), accessDate date, accessTime time, quantity int);
insert into log values ('16345957', 00001, '2016-3-17', '08:40:00', '3');
insert into log values ('44125', 00001, '2016-3-17', '06:40:00', '4');
insert into log values ('16345957', 00001, '2016-3-17', '08:40:00', '2');
drop table hubs;
create table hubs (ID int(5), lattitude double, longtitude double, maxCapacity int, currentCapacity int);
insert into hubs values (00001, 2151.3200, 12512.4621, 100, 92);

drop table links;
create table links (masterID int(10), childID int(10));
insert into links values (16345957, 010529125);*/
/*
SET GLOBAL event_scheduler = ON;
/* /////////////////////MEALS RESET///////////////////// */
/*CREATE EVENT mealsReset
ON SCHEDULE EVERY 7 DAY 
DO 
 UPDATE refuges
 SET mealsLeft = 7;
    */
/* /////////////////////MEALS RESET///////////////////// */
select * from log;
select * from refugees;
select * from hubs;
select * from links; 


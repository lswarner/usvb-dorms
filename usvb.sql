
drop table if exists `students`;
drop table if exists `units`;
drop table if exists `dorms`;


create table dorms (
	dorm_id integer unsigned not null auto_increment,
	name varchar(100) not null,
	primary key(dorm_id),
	unique(name)
) engine= InnoDB;


create table units (
	unit_id integer unsigned not null auto_increment,
	dorm_id integer unsigned not null,
	gender enum("female", "male"),
	primary key(unit_id),
	foreign key(dorm_id) references dorms (dorm_id)
) engine= InnoDB;

create table students (
	student_id integer unsigned not null auto_increment,
	unit_id integer unsigned,
	name varchar(60),
	address varchar(100),
	gender enum("female", "male"),
	dob datetime,
	phone varchar(20),
	primary key (student_id),
	foreign key (unit_id) references units (unit_id)
) engine= InnoDB;

insert into dorms (name) values
('Tecumseh Hall'), ('Sandbridge Towers');

insert into units (dorm_id) values
(1), (1), (1), (1),
(1), (1), (1), (1),
(1), (1), (1), (1),
(1), (1), (1), (1),
(2), (2), (2), (2),
(2), (2), (2), (2),
(2), (2), (2), (2),
(2), (2), (2), (2);

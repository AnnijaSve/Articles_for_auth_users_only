create table Users
(
	id int auto_increment
		primary key,
	name varchar(255) null,
	email varchar(255) null,
	password varchar(255) null,
	hashed_email varchar(255) null,
	constraint Users_email_uindex
		unique (email)
);


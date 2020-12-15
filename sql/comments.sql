create table comments
(
	id int auto_increment
		primary key,
	articles_id int null,
	name varchar(255) null,
	comment varchar(255) null
);


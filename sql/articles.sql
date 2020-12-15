create table articles
(
	id int auto_increment
		primary key,
	title varchar(255) null,
	content varchar(255) null,
	created_at timestamp default CURRENT_TIMESTAMP not null,
	likes int default 0 null
);


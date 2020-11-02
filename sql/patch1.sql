
Create Table category(
	id int not null primary key auto_increment,
    catname varchar(250)
);

insert into permission(id, pername) values(null, "administrator");

insert into users(id, mail, fullname, username, pass, pertype) 
values(null, "admin@domain.com", "Administrator Name", "admin", "123456789", 0);

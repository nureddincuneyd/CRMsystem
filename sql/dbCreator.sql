use ttCRM;

Create Table users(

	id	int not null primary key auto_increment,
	mail varchar(250) not null,
    fullname varchar(250) not null,
    username varchar(100) not null,
    pass varchar(20) not null,
    avatar varchar(250) null,
    pertype int not null
);

Create Table permission(
	id int not null primary key auto_increment,
    pername varchar(250)
);

Create Table allProcess(
	id int not null primary key auto_increment,
    userid int not null,
    processlog text
);

Create Table seo(
	id int not null primary key auto_increment,
    tagtype varchar(50) not null,
    tagcontent varchar(250) not null
);

Create Table blog(
	id int not null primary key auto_increment,
    title varchar(250) not null,
    content text not null,
    fimage varchar(250) null,
    authorid int not null
);

Create Table products(
	id int not null primary key auto_increment,
    pdname varchar(250) not null,
    pdimages varchar(250) not null,
    pdspecs text not null,
    pdcategoryid int not null
);
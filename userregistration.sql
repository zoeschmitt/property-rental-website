CREATE TABLE userregistration (
	id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	firstname varchar(256) not null,
	midname varchar(2),
	lastname varchar(256) not null,
	email varchar(256) not null,
	DL bigint(8) not null,
	state varchar(2) not null;
	creditCard bigint(16) not null,
	cvv bigint(3) not null,
	username varchar(256) not null,
	password varchar(256) not null
);

INSERT INTO userregistration (firstname, midname, lastname, email, DL, state, creditCard, cvv, username, password)
	VALUES ('Todd', 'X', 'Smith', 'tsmith91@gmail.com', '12907667', 'AL', 'toddsmith', 'testing1234');
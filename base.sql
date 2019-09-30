CREATE TABLE claims (
	id INT AUTO_INCREMENT,
	name varchar(20) NOT NULL,
	address varchar(100) NOT NULL,
	email varchar(50) NOT NULL,
	phone varchar(12) NOT NULL,
	message TEXT,
	PRIMARY KEY (id)
);

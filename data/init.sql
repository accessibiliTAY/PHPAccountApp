CREATE DATABASE Accounts;

use Accounts;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	account_type_id INT(3),
	active BIT(50),
	date TIMESTAMP
);

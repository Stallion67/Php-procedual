CREATE TABLE users(
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
usersFirstName TINYTEXT NOT NULL,
usersLastName TINYTEXT NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
mobile TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL,
userType int NOT NULL,
userDateCreated datetime not null    
);
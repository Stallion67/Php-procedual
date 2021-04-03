CREATE TABLE posts (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  subject varchar(120) not null,
  content varchar(1000) not null,
  date datetime not null
);
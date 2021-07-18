CREATE TABLE users (
  user_id INT NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  afm INT NOT NULL,
  amka INT NOT NULL,
  age SMALLINT UNSIGNED NOT NULL,
  telephone VARCHAR(45) NOT NULL,
  email VARCHAR(50) DEFAULT NULL,
  pwd VARCHAR(50) NOT NULL,
  address VARCHAR(45) NOT NULL,
  PRIMARY KEY  (user_id),
  KEY idx_user_amka (amka)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE dates(
  hospital_name VARCHAR(60) NOT NULL,
  Vaccine_type VARCHAR(60) NOT NULL,
  day_month_year VARCHAR(80) NOT NULL,
  availability INT NOT NULL,
  PRIMARY KEY (hospital_name)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE hospitals(
  hos_name VARCHAR(60) NOT NULL,
  address VARCHAR(45) NOT NULL,
  city VARCHAR(45) NOT NULL,
  Vaccine_1 VARCHAR(60) NOT NULL,
  description TEXT,
  Vaccine_2 VARCHAR(60) NOT NULL,
  description TEXT,
  PRIMARY KEY (city)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


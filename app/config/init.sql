-- CREATE DATABASE test;

  -- use test;

  CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(200) UNIQUE NOT NULL,
    password VARCHAR(200) NOT NULL,
    avatar VARCHAR(200) NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
  );

  CREATE TABLE affiliates (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    picture VARCHAR(100) NOT NULL,
    link VARCHAR(150) NOT NULL,
    description TEXT(500) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
  );
CREATE DATABASE db_college;

CREATE TABLE tbl_users (
    user_id INT AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id)
);

CREATE TABLE tbl_categories (
    category_id INT AUTO_INCREMENT,
    category_name VARCHAR(50) NOT NULL,
    PRIMARY KEY (category_id)
);

CREATE TABLE tbl_articles (
    article_id INT AUTO_INCREMENT,
    user_id INT NOT NULL,
    category_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    PRIMARY KEY (article_id),
    FOREIGN KEY (user_id) REFERENCES tbl_users(user_id),
    FOREIGN KEY (category_id) REFERENCES tbl_categories(category_id)
);


INSERT INTO tbl_users (username, email, password) VALUES 
('Jenish', 'test2@example.com', 'test123'),
('test3', 'test3@example.com', 'test321');



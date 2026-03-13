DROP TABLE IF EXISTS customer;

CREATE TABLE customer (
    Customer_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    Customer_Name VARCHAR(50) NOT NULL,
    Customer_Lastname VARCHAR(100) NOT NULL,
    Gender VARCHAR(5),
    Age INT(11),
    Birthdate VARCHAR(10),
    Address VARCHAR(150),
    Province VARCHAR(50) NOT NULL,
    Zipcode VARCHAR(5),
    Telephone VARCHAR(20) NOT NULL,
    Customer_Description TEXT,
    username VARCHAR(50),
    password VARCHAR(250)
);

INSERT INTO customer (Customer_Name, Customer_Lastname, Province, Telephone) 
VALUES
('Peter', 'Parker', 'เชียงใหม่', '053999222'),
('John', 'Hancock', 'ลำปาง', '054229228') ;


/* 
 * MySQL Script - customer.sql
 */

CREATE DATABASE business CHARACTER SET utf8 COLLATE utf8_general_ci;      

/*CREATE DATABASE business;     */                           -- สร้างฐานข้อมูล business
USE business; 								 				 -- เรียกใช้ฐานข้อมูล business

CREATE TABLE country (                                       -- สร้างตาราง country
  CountryCode varchar(2) NOT NULL,
  CountryName varchar(20) NOT NULL,  
  PRIMARY KEY  (CountryCode)  
);  		
INSERT INTO country VALUES ('TH', 'ไทย');  
INSERT INTO country VALUES ('PK', 'ปากีสถาน'); 
INSERT INTO country VALUES ('BD', 'บังคลาเทศ');  
INSERT INTO country VALUES ('AT', 'ออสเตรีย');  
   

                                                      
CREATE TABLE customer (                                       -- สร้างตาราง customer
  CustomerID varchar(6) NOT NULL,
  Name varchar(40) NOT NULL,
  Birthdate date NOT NULL,
  Email varchar(40) NOT NULL,
  CountryCode varchar(2) NOT NULL,
  OutstandingDebt  float NOT NULL,
  PRIMARY KEY  (CustomerID),
  FOREIGN KEY (CountryCode) REFERENCES country(CountryCode)
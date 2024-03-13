CREATE TABLE `users` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(100) NOT NULL, 
    `email` varchar(100) NOT NULL,
    `mobile` int NOT NULL,
    `hash` varchar(100) NOT NULL
); 

CREATE TABLE `admins` (
    `name` varchar(100) NOT NULL,
    `hash` varchar(100) NOT NULL
); 

INSERT INTO `admins`(`name`, `hash`) VALUES ('admin', 'adminpassword')




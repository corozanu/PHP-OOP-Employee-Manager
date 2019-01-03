CREATE TABLE `users` (
    `username` VARCHAR(20) NULL,
    `first-name` TEXT NOT NULL,
    `last-name` TEXT NOT NULL,
    `email` TEXT NOT NULL,
    `password` PASSWORD NOT NULL,
    `secondary-email` TEXT NULL,
    `birthday` TEXT NULL,
    `position` TEXT NOT NULL,
    `age` INT NULL,
    `admin-approved` INT NOT NULL DEFAULT 0,
    
);
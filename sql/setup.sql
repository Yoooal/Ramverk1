CREATE DATABASE IF NOT EXISTS commentsection;

USE commentsection;

CREATE TABLE comments (
    `comment_id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `email` VARCHAR(128) NOT NULL,
    `message` TEXT NOT NULL,

    `published` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    `deleted` DATETIME DEFAULT NULL
);

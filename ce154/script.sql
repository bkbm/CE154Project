CREATE TABLE ce154_bb18115.project (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(120)
);

CREATE TABLE ce154_bb18115.task (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(120),
details VARCHAR(255),
priority ENUM('Low', 'Medium', 'High'),
deadline DATE,
project_id INT,
FOREIGN KEY (project_id) REFERENCES project(id),
done INT(1)
);
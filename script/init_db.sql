CREATE DATABASE IF NOT EXISTS keeping;

USE keeping;

CREATE TABLE IF NOT EXISTS entries (
        user_id varchar(256) NOT NULL,
        user_url varchar(1024) NOT NULL,
        status int default 0,
        last_check TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

        PRIMARY KEY(user_id)
);


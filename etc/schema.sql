CREATE DATABASE IF NOT EXISTS tutorial
DEFAULT CHARACTER SET 'utf8'
COLLATE 'utf8_general_ci';

CREATE TABLE IF NOT EXISTS news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);

INSERT INTO news (
    title,
    slug,
    text
) VALUES
('hello', 'hello', 'world'),
('こんにちは', 'konnichiwa', '世界')


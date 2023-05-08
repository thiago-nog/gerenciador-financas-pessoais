-- CREATE EXTENSION pgcrypto;

CREATE TABLE usuarios (
    id SERIAL,
    login VARCHAR (30) NOT NULL UNIQUE,
    password VARCHAR (256) NOT NULL,
    PRIMARY KEY (id)
	
);

INSERT INTO usuarios (login, password)
VALUES ('user', md5(digest('123', 'sha256')));
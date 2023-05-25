-- Nama tabel: boatdb

CREATE TABLE boats (
id INT NOT NULL PRIMARY KEY,
name VARCHAR(40),
type VARCHAR(10),
owner_id INT NOT NULL,
date_made DATE,
rental_price FLOAT
);


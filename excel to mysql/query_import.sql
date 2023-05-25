LOAD DATA LOCAL INFILE "/path/to/boats.csv" INTO TABLE boatdb.boats
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, name, type, owner_id, @datevar, rental_price)
set date_made = STR_TO_DATE(@datevar,'%m/%d/%Y');

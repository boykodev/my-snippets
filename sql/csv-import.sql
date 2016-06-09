LOAD DATA LOCAL INFILE '/path/to/file.csv'
INTO TABLE options_values
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(column_name_1, column_name_2, column_name_3);

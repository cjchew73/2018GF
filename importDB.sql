LOAD DATA INFILE 'c:\\temp\\testdate.csv'
INTO TABLE test_date
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(siteid, region, @date_time_variable) -- read one of the field to variable
SET CME = STR_TO_DATE(@date_time_variable, '%d-%b-%Y'); -- format this date-time variable
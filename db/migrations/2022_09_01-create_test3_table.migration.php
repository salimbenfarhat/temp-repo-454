<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Create TEST_3 table
DB::callInstance()::exec('CREATE TABLE TEST_3 (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	date_creation TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	date_updated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
)');

// Insert one row to TEST table
DB::callInstance()::exec("INSERT INTO TEST_3 (name, date_creation, date_updated) VALUES ('John Doe', '2022-09-01 08:00:00', '2022-09-01 08:00:00')");
?>
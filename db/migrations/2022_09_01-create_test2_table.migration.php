<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Create TEST_2 table
try {
	$db::callInstance()::exec('CREATE TABLE TEST_2 (
		id INT NOT NULL AUTO_INCREMENT,
		name VARCHAR(255) NOT NULL,
		date_creation TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		date_updated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY (id)
	)');
	echo "<blockquote style='background: lightgreen;'><pre style='color:green'>Création de la table <b>TEST_2</b> (si existante) : <b>OK</b></pre>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<blockquote style='background: lightsalmon;'><pre style='color:red'>Création de la table <b>TEST_2</b> (si existante) : <b>KO</b></pre>";
}

// Insert one row to TEST_2 table
try {
	$db::callInstance()::exec("INSERT INTO TEST_2 (name, date_creation, date_updated) VALUES ('John Doe', '2022-09-01 08:00:00', '2022-09-01 08:00:00')");
	echo "<pre style='color:green'>Insertion d'une ligne dans la table <b>TEST_2</b> (si existante) : <b>OK</b></pre></blockquote>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<pre style='color:red'>Insertion d'une ligne dans la table <b>TEST_2</b> (si existante) : <b>KO</b></pre></blockquote>";
}
?>
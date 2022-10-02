<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Create POST table
try {
	$db::callInstance()::exec('CREATE TABLE IF NOT EXISTS POST (
		ID INT NOT NULL AUTO_INCREMENT,
		TITLE VARCHAR(255) NOT NULL,
		CONTENT TEXT NOT NULL,
		USER_ID INT NOT NULL,
		DATE_CREATION TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		DATE_MAJ TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY (ID)
	)');
	echo "<blockquote style='background: lightgreen;'><pre style='color:green'>Création de la table <b>POST</b> (si existante) : <b>OK</b></pre>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<blockquote style='background: lightsalmon;'><pre style='color:red'>Création de la table <b>POST</b> (si existante) : <b>KO</b></pre>";
}

// Linking POST table to USER table
try {
	$db::callInstance()::exec('ALTER TABLE POST
		ADD CONSTRAINT POST_USER FOREIGN KEY (USER_ID) REFERENCES USER (ID);
		COMMIT');
	echo "<pre style='color:green'>Liaison table <b>USER</b> / <b>POST</b> : <b>OK</b></pre>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<pre style='color:red'>Liaison table <b>USER</b> / <b>POST</b> : <b>KO</b></pre>";
}

// Insert one row to POST table
try {
	$db::callInstance()::exec("INSERT INTO POST (TITLE, CONTENT, USER_ID, DATE_CREATION, DATE_MAJ) VALUES ('Sample post', 'This is the content of sample post', 1, '2022-09-01 08:00:00', '2022-09-01 08:00:00')");
	echo "<pre style='color:green'>Insertion d'une ligne dans la table <b>POST</b> (si existante) : <b>OK</b></pre></blockquote>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<pre style='color:red'>Insertion d'une ligne dans la table <b>POST</b> (si existante) : <b>KO</b></pre></blockquote>";
}
?>
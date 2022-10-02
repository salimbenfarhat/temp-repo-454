<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Delete/clean exisiting tables in order to reset database
try {
	$db::callInstance()::exec('DROP TABLE IF EXISTS TEST');
	echo "<blockquote style='background: lightgreen;'><pre style='color:green'>Nettoyage de la table <b>TEST</b> (si existante) : <b>OK</b></pre>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<blockquote style='background: lightsalmon;'><pre style='color:red'>Nettoyage de la table <b>TEST</b> (si existante) : <b>KO</b></pre>";
}
try {
	$db::callInstance()::exec('DROP TABLE IF EXISTS TEST_2');
	echo "<pre style='color:green'>Nettoyage de la table <b>TEST_2</b> (si existante) : <b>OK</b></pre>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<pre style='color:red'>Nettoyage de la table <b>TEST_2</b> (si existante) : <b>KO</b></pre>";
}
try {
	$db::callInstance()::exec('DROP TABLE IF EXISTS TEST_3');
	echo "<pre style='color:green'>Nettoyage de la table <b>TEST_3</b> (si existante) : <b>OK</b></pre></blockquote>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<pre style='color:red'>Nettoyage de la table <b>TEST_3</b> (si existante) : <b>KO</b></pre></blockquote>";
}
?>
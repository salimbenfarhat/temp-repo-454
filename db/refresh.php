<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Loading DB Class file
require_once(__DIR__ . '/../framework/DB.Class.php');
$db = new DB();
// Loading Crdential Config file
require_once(__DIR__ . '/../configs/credential.conf.php');
// Loading Alert Lib
require_once(__DIR__ . '/../libs/Alert.Lib.php');
$alert = new Alert();

if (isset($_COOKIE['PrivatePageLogin'])) {
    if ($_COOKIE['PrivatePageLogin'] == md5(PASSWORD.KEY)) {
		// Loading All Migrations
		$alert::message("Chargement des migrations", "info");
		require_once(__DIR__ . '/migrations/2022_09_01-drop_all_tables.migration.php');
		require_once(__DIR__ . '/migrations/2022_09_01-create_test_table.migration.php');
		require_once(__DIR__ . '/migrations/2022_09_01-create_test2_table.migration.php');
		require_once(__DIR__ . '/migrations/2022_09_01-create_test3_table.migration.php');
        exit;
    } else {
        $alert::message("Cookies expirées ou non valide", "danger");
        exit;
    }
}
?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
	<label><input type="text" name="ID" id="ID" /> ID</label><br />
	<label><input type="password" name="KEYPASS" id="KEYPASS" /> MDP</label><br />
	<input type="submit" name="cleanDatabaseForm" value="Nettoyer la BDD" />
</form>

<?php
if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST' && isset($_POST['cleanDatabaseForm'])) {
   if ($_POST['ID'] != ID) {
   	$alert::message("Cet ID n'existe pas !", "danger");
      exit;
   } else if ($_POST['KEYPASS'] != PASSWORD) {
   	$alert::message("Le MDP lié à cet ID ne correspond pas !", "danger");
      exit;
   } else if ($_POST['ID'] == ID && $_POST['KEYPASS'] == PASSWORD) {
      setcookie('PrivatePageLogin', md5($_POST['KEYPASS'].KEY));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
   	$alert::message("Accès refusé : Connexion impossible pour le moment !", "danger");
   }
}
?>


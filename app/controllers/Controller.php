<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

abstract class Controller {

    public static function globalVars() {
        require_once(ROOT_DIR.'/framework/DB.Class.php');
        require_once(ROOT_DIR.'/framework/View.Class.php');
        $variables = array(   
            'db' => new DB(),
            'view' => new View()
        );
        return $variables;
    }
    
}
?>
<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

class Alert { 
    
    public static function message($value, $type = null) {
        switch($type) {
            case 'success' :
                echo "<pre style='color:green'>" . $value . '</pre>';
                break;
            case 'info' :
                echo "<pre style='color:blue'>" . $value . '</pre>';
                break;
            case 'warning' :
                echo "<pre style='color:orange'>" . $value . '</pre>';
                break;
            case 'danger' :
                echo "<pre style='color:red'>" . $value . '</pre>';
                break;
            case 'default' :
                echo "<pre style='color:black'>" . $value . '</pre>';
                break;
        }
    }

}
?>
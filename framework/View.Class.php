<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

class View {   		
    
    private static $path;

    public static function getPath() {
        return View::$path;
    }
    public static function setPath($path) {
        View::$path = $path;
    }

    public static function render($view, $template = null,  $variables = null) {
        $path = str_replace('\\', '/', VIEW . '/');
        ob_start();
        require(VIEW . '/' . str_replace('.', '/', $view) . '.view.php');
        $content = ob_get_clean();
        if(isset($template)) {
            require(LAYOUT . '/' . $template . '.layout.php');
        }
    }

}
?>
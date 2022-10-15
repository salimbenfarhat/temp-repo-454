<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

class Generate { 

    private static $characters;
    public static function getCharacters() {
        return Generate::$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()+?';
    }
    public static function setCharacters($characters) {
        Generate::$characters = $characters;
    }

    public static function random($number) {
        return substr(str_shuffle(Generate::getCharacters()), 0, $number);
    }

}

?>
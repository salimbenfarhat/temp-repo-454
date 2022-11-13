<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

require_once(ROOT_DIR.'/app/controllers/Controller.php');

class FrontendController extends Controller {

    public function home() {
        $meta = array(
            'title' => 'Home',
            'description' => 'blah blah',
        );
        $data = array(
            'fk_name' => FrontendController::globalVars()['fk']->name,
            'msg_info' => FrontendController::globalVars()['alert']::message("Ceci est un message d'alerte Test", "h1", "info"),
            'random_num' => FrontendController::globalVars()['generate']::random(14, "numerical"),
            'random_alpha' => FrontendController::globalVars()['generate']::random(14, "alphabetical"),
            'random_alphanum' => FrontendController::globalVars()['generate']::random(14, "alphanumerical"),
            'random_full' => FrontendController::globalVars()['generate']::random(14)
        );
        FrontendController::globalVars()['view']::render('pages.frontend.home', 'default', compact(FrontendController::globalVars(), 'meta', 'data'));
    }
    public function about() {
        $meta = array(
            'title' => 'About',
            'description' => 'blah blah'
        );
        FrontendController::globalVars()['view']::render('pages.frontend.about', 'default', compact(FrontendController::globalVars(), 'meta'));
    }
    public function login() {
        $meta = array(
            'title' => 'Login',
            'description' => 'blah blah'
        );
        FrontendController::globalVars()['view']::render('pages.frontend.auth.login', 'default', compact(FrontendController::globalVars(), 'meta'));
    }
    public function signup() {
        $meta = array(
            'title' => 'Signup',
            'description' => 'blah blah'
        );
        $data = array(
            'fk_name' => FrontendController::globalVars()['fk']->name,
            'msg_info' => FrontendController::globalVars()['alert']::message("Ceci est un message d'alerte Test", "h1", "info"),
            'random_num' => FrontendController::globalVars()['generate']::random(4, "numerical"),
        );
        FrontendController::globalVars()['view']::render('pages.frontend.auth.signup', 'default', compact(FrontendController::globalVars(), 'meta', 'data'));
    }
    public function contact() {
        $meta = array(
            'title' => 'Contact',
            'description' => 'blah blah'
        );
        FrontendController::globalVars()['view']::render('pages.frontend.contact', 'default', compact(FrontendController::globalVars(), 'meta'));
    }
}
?>
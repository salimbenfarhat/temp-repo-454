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
            'title' => 'Accueil',
            'description' => 'blah blah'
        );
        FrontendController::globalVars()['view']::render('pages.frontend.home', 'default', compact(FrontendController::globalVars(), 'meta'));
    }
    public function about() {
        $meta = array(
            'title' => 'A Propos',
            'description' => 'blah blah'
        );
        FrontendController::globalVars()['view']::render('pages.frontend.about', 'default', compact(FrontendController::globalVars(), 'meta'));
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
<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

require_once(ROOT_DIR.'/app/controllers/Controller.php');
class FrontendController extends Controller {
	public function home() {
        require_once(VIEW.'/pages/frontend/home.view.php');
    }
    public function about() {
        require_once(VIEW.'/pages/frontend/about.view.php');
    }
    public function contact() {
        require_once(VIEW.'/pages/frontend/contact.view.php');
    }
}
?>
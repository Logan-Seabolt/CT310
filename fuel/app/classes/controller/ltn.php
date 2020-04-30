<?php
use \Model\LTNTables;
class Controller_ltn extends Controller_Template
{

	public function action_index()
	{
		$data = array();
		$this->template->title = 'Lets Talk Numbers';
		$this->template->content = View::forge('LetsTalkNumbers/index.php', $data);
	}
	public function action_about()
	{
		$data = array();
		$this->template->title = 'About';
		$this->template->content = View::forge('LetsTalkNumbers/about.php', $data);
	}
	public function action_hospitals()
	{
		$data = array('hospitals' => LTNTables::get_table('hospitals'));
		$this->template->title = 'Hospital List';
		$this->template->content = View::forge('LetsTalkNumbers/hospitals.php', $data);
	}
	public function action_drglist()
	{
		$data = array('drg_description' => LTNTables::get_table('drg_description'));
		$this->template->title = 'DRG List';
		$this->template->content = View::forge('LetsTalkNumbers/drglist.php', $data);
	}
	public function action_hospitaldetails()
	{
		if(isset($_GET['id'])){
			$data = LTNTables::get_HospitalDetails($_GET['id']);
			if(strlen($_GET['id']) > 6 || strlen($_GET['id']) < 6 || !ctype_digit($_GET['id']) || sizeof($data['hospitalsData']) == 0){
				$data = array();
				$this->template->title = 'Hospital Details';
				$this->template->content = View::forge('LetsTalkNumbers/hospitalERR.php', $data);
			}
			else{
				$this->template->title = 'Hospital Details';
				$this->template->content = View::forge('LetsTalkNumbers/hospitalDetails.php', $data);
			}
		}
		else{
			$data = LTNTables::get_HospitalDetails('010001');
			$this->template->title = 'Hospital Details';
			$this->template->content = View::forge('LetsTalkNumbers/hospitalDetails.php', $data);
		}
	}
	public function get_hospitaldetails(){
		if(isset($_GET['id'])){
			$data = LTNTables::get_HospitalDetails($_GET['id']);
			if(strlen($_GET['id']) > 6 || strlen($_GET['id']) < 6 || !ctype_digit($_GET['id']) || sizeof($data['hospitalsData']) == 0){
				$data = array();
				$this->template->title = 'Hospital Details';
				$this->template->content = View::forge('LetsTalkNumbers/hospitalERR.php', $data);
			}
			else{
				$this->template->title = 'Hospital Details';
				$this->template->content = View::forge('LetsTalkNumbers/hospitalDetails.php', $data);
			}
		}
		else{
			$data = LTNTables::get_HospitalDetails('010001');
			$this->template->title = 'Hospital Details';
			$this->template->content = View::forge('LetsTalkNumbers/hospitalDetails.php', $data);
		}
	}
	public function action_drgdetails()
	{
		if(isset($_GET['id'])){
			$data = array('drg_description' => LTNTables::get_DRG($_GET['id']));
			if(strlen($_GET['id']) > 3 || strlen($_GET['id']) < 3 || !ctype_digit($_GET['id']) || sizeof($data['drg_description'])==0){
				$data = array();
				$this->template->title = 'DRG Details';
				$this->template->content = View::forge('LetsTalkNumbers/drgERR.php', $data);
			}
			else{
				$this->template->title = 'DRG Details';
				$this->template->content = View::forge('LetsTalkNumbers/drg_description.php', $data);
			}
		}
		else{
			$data = array('drg_description' => LTNTables::get_DRG('001'));
			$this->template->title = 'DRG Details';
			$this->template->content = View::forge('LetsTalkNumbers/drg_description.php', $data);
		}
	}
	public function action_login() {
		session_start();
		if (Input::post()) {
			$username = Input::post('username');
			$pass = Input::post('password');
			// Set's the variable $_SESSION['username']
			$res = Auth::login($username, $pass);
			if ($res) {
				$_SESSION['username'] = $username;
				return Response::redirect('index.php/ltn');
			}
			else {
				return Response::forge(View::Forge('authviews/outline', array(
					'contents' => View::forge('authviews/login'),
					'alerts' => View::forge('authviews/failalert', array('message' => 'Login failed'))
				)));
			}
		}
		return Response::forge(View::Forge('authviews/outline', array(
			'contents' => View::forge('authviews/login')
		)));
	}
	public function get_drgdetails()
	{
		if(isset($_GET['id'])){
			$data = array('drg_description' => LTNTables::get_DRG($_GET['id']));
			if(strlen($_GET['id']) > 3 || strlen($_GET['id']) < 3 || !ctype_digit($_GET['id']) || sizeof($data['drg_description'])==0){
				$data = array();
				$this->template->title = 'DRG Details';
				$this->template->content = View::forge('LetsTalkNumbers/drgERR.php', $data);
			}
			else{
				$this->template->title = 'DRG Details';
				$this->template->content = View::forge('LetsTalkNumbers/drg_description.php', $data);
			}
		}
		else{
			$data = array('drg_description' => LTNTables::get_DRG('001'));
			$this->template->title = 'DRG Details';
			$this->template->content = View::forge('LetsTalkNumbers/drg_description.php', $data);
		}
	}
}

?>

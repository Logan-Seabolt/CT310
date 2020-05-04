<?php
use \Model\LTNTables;
use \DB;
class passwordException extends Exception { }

class Controller_ltn extends Controller_Template
{

	public function action_index()
	{
		session_start();
		$data = array();
		$this->template->title = 'Lets Talk Numbers';
		$this->template->content = View::forge('LetsTalkNumbers/index.php', $data);
	}
	public function action_about()
	{
		session_start();
		$data = array();
		$this->template->title = 'About';
		$this->template->content = View::forge('LetsTalkNumbers/about.php', $data);
	}
	public function action_hospitals()
	{
		session_start();
		$data = array('hospitals' => LTNTables::get_table('hospitals'));
		$this->template->title = 'Hospital List';
		$this->template->content = View::forge('LetsTalkNumbers/hospitals.php', $data);
	}
	public function action_drglist()
	{
		session_start();
		$data = array('drg_description' => LTNTables::get_table('drg_description'));
		$this->template->title = 'DRG List';
		$this->template->content = View::forge('LetsTalkNumbers/drglist.php', $data);
	}
	public function action_hospitaldetails()
	{
		session_start();
		if(Input::get()){
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
			}
		}
		else{
			$data = LTNTables::get_HospitalDetails('010001');
		}
		if(Input::post()){
			if(isset($_POST['commentSub'])){
				if(isset($_POST['commentText'])){
					if(isset($_GET['id'])){
						$id = $_GET['id'];
					}
					else{
						$id = '010001';
					}
					$query = DB::insert('comments');
					$date=date_create();
					$query->set(array(
						'username' => $_SESSION['username'],
						'text' => $_POST['commentText'],
						'dateCreated' => date_format($date, "Y-m-d H:i:s"),
						'lastEdit' => date_format($date, "Y-m-d H:i:s"),
						'providerID' => $id
					))->execute();
					$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Comment Success', 'alertType' => 'success'));
				}
			}
			elseif(isset($_POST['replySub'])){
				if(isset($_POST['replyText'])){
					if(isset($_GET['id'])){
						$id = $_GET['id'];
					}
					else{
						$id = '010001';
					}
					$query = DB::insert('comments');
					$date=date_create();
					$query->set(array(
						'username' => $_SESSION['username'],
						'text' => $_POST['replyText'],
						'dateCreated' => date_format($date, "Y-m-d H:i:s"),
						'lastEdit' => date_format($date, "Y-m-d H:i:s"),
						'replyTo' => $_POST['replyID'],
						'providerID' => $id
					))->execute();
					$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Reply Success', 'alertType' => 'success'));
				}
			}
			elseif(isset($_POST['editSub'])){
				if(isset($_POST['editText'])){
					$date=date_create();
					DB::query("UPDATE comments SET text='".$_POST['editText']."',lastEdit='".date_format($date,"Y-m-d H:i:s")."' WHERE id=".$_POST['editID'])->execute();
				}
			}
			elseif (isset($_POST['deleteSub'])){
				//delete code this is gonna suck
			}
		}
		$this->template->title = 'Hospital Details';
		$this->template->content = View::forge('LetsTalkNumbers/hospitalDetails.php', $data);
	}
	public function action_drgdetails()
	{
		session_start();
		if(Input::get()) {
			if (isset($_GET['id'])) {
				$data = array('drg_description' => LTNTables::get_DRG($_GET['id']));
				if (strlen($_GET['id']) > 3 || strlen($_GET['id']) < 3 || !ctype_digit($_GET['id']) || sizeof($data['drg_description']) == 0) {
					$data = array();
					$this->template->title = 'DRG Details';
					$this->template->content = View::forge('LetsTalkNumbers/drgERR.php', $data);
				} else {
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
				//failed login
				$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Login Failed', 'alertType' => 'failed'));
			}
		}
		//Default login page
		$this->template->title = "Login";
		$this->template->content = View::forge('LetsTalkNumbers/login');
	}
	public function action_logout() {
		session_start();
		$_SESSION["user_id"] = "";
		session_destroy();
		return Response::redirect('index.php/ltn');
	}
	public function action_register() {
		session_start();
		if (Input::post()) {
			// Validate the inputs using fuel validation
			$val = Validation::forge();
			$val->add_field('username', 'Your username', 'required');
			// Now add another field for password, and require it to contain at least 3 and at most 10 characters
			$val->add_field('password', 'Your password', 'required');
			$val->add_field('email', 'Your email', 'required|valid_email');
			if ($val->run()){
				try {
					if(Input::post('password')!= Input::post('passwordConfirm')){
						throw new passwordException();
					}
					Auth::create_user(
						Input::post('username'),
						Input::post('password'),
						Input::post('email')
					);
					$_SESSION['username'] = Input::post('username');
					return Response::redirect('index.php/ltn');
				}
				catch (passwordException $e){
					$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Registration Failed, Passwords did not match', 'alertType' => 'failed'));
				}
				catch (SimpleUserUpdateException $e) {
					//failed login
					$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Registration Failed, User already exists', 'alertType' => 'failed'));
				}

			} else {
				// input validation failed
				$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Registration Failed, Missing one or more field', 'alertType' => 'failed'));
			}
		}
		//Default Registration page
		$this->template->title = "Registration";
		$this->template->content = View::forge('LetsTalkNumbers/register');
		}
}
//Outdated code
/*
	public function get_drgdetails()
	{
		session_start();
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
	public function get_hospitaldetails(){
		session_start();
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
	}*/
?>

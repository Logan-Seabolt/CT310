<?php
use \Model\LTNTables;
use \DB;
class passwordException extends Exception { }
class BadAdminException extends Exception { }

class Controller_ltn extends Controller_Template
{
	public function action_index()
	{
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
		//$savepath = session_save_path();
		session_start();
		$data = array();
		$this->template->title = 'Lets Talk Numbers';
		$this->template->content = View::forge('LetsTalkNumbers/index.php', $data);
		//$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Savepath is: '.$savepath, 'alertType' => 'success'));
	}
	public function action_about()
	{
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
		session_start();
		$data = array();
		$this->template->title = 'About';
		$this->template->content = View::forge('LetsTalkNumbers/about.php', $data);
	}
	public function action_hospitals()
	{
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
		session_start();
		$data = array('hospitals' => LTNTables::get_table('hospitals'));
		$this->template->title = 'Hospital List';
		$this->template->content = View::forge('LetsTalkNumbers/hospitals.php', $data);
	}
	public function action_drglist()
	{
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
		session_start();
		$data = array('drg_description' => LTNTables::get_table('drg_description'));
		$this->template->title = 'DRG List';
		$this->template->content = View::forge('LetsTalkNumbers/drglist.php', $data);
	}
	public function action_hospitaldetails()
	{
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
		session_start();
		if(Input::post()){
			if (isset($_POST['commentSub'])){
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
			elseif (isset($_POST['replySub'])){
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
			elseif (isset($_POST['editSub'])){
				if(isset($_POST['editText'])){
					$date=date_create();
					DB::query("UPDATE comments SET text='".$_POST['editText']."',lastEdit='".date_format($date,"Y-m-d H:i:s")."' WHERE id=".$_POST['editID'], DB::UPDATE)->execute();
				}
			}
			elseif (isset($_POST['deleteSub'])){
				//if I am a reply
				if($_POST['deleteType'] == 'commentBlock'){
					$replies = DB::query("SELECT * FROM comments WHERE replyTo='".$_POST['deleteID']."'", DB::SELECT)->execute()->as_array();
					if(count($replies) == 0){
						DB::query("DELETE FROM comments WHERE id='".$_POST['deleteID']."'", DB::DELETE)->execute();
					}
					else{
						DB::query("UPDATE comments SET deleted=1 WHERE id=".$_POST['deleteID'], DB::UPDATE)->execute();
					}
				}
				else{
					$repliedTo = DB::query("SELECT * FROM comments WHERE id=".$_POST['deleteID'], DB::SELECT)->execute()->as_array()[0]['replyTo'];
					//find original comment, check if it is deleted.
					$isDeleted = DB::query("SELECT * FROM comments where id=$repliedTo", DB::SELECT)->execute()->as_array()[0]['deleted'];
					if($isDeleted == 1){
						$replies = DB::query("SELECT * FROM comments WHERE replyTo=$repliedTo", DB::SELECT)->execute()->as_array();
						if(count($replies)-1 == 0){
							DB::query("DELETE FROM comments WHERE id=$repliedTo", DB::DELETE)->execute();
						}
					}
					DB::query("DELETE FROM comments WHERE id=".$_POST['deleteID'], DB::DELETE)->execute();
				}
			}
			elseif (isset($_POST['upvoteSub'])){
				$currentValue = DB::query("SELECT * FROM comments WHERE id=".$_POST['upvoteID'],DB::SELECT)->execute()->as_array()[0]['upvotes'];
				DB::query("UPDATE comments SET upvotes=".($currentValue+1)." WHERE id=".$_POST['upvoteID'],DB::UPDATE)->execute();
			}
			elseif (isset($_POST['downvoteSub'])){
				$currentValue = DB::query("SELECT * FROM comments WHERE id=".$_POST['downvoteID'],DB::SELECT)->execute()->as_array()[0]['downvotes'];
				DB::query("UPDATE comments SET downvotes=".($currentValue+1)." WHERE id=".$_POST['downvoteID'],DB::UPDATE)->execute();
			}
		}
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
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
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
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
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
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
		session_start();
		$_SESSION["user_id"] = "";
		session_destroy();
		return Response::redirect('index.php/ltn');
	}
	public function action_register() {
		$currentAuthor = "seaboltl";
		session_save_path('/s/chopin/n/under/'.$currentAuthor.'/save_path');
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
					if(isset($_POST['adminCode'])){
						if($_POST['adminCode'] == "LetsTalkNumbersAdmin"){
							$groupvalue = 2;
						}
						elseif ($_POST['adminCode'] == "default"){
							$groupvalue = 1;
						}
						else{
							throw new BadAdminException();
						}
					}
					if(Input::post('password')!= Input::post('passwordConfirm')){
						throw new passwordException();
					}
					Auth::create_user(
						Input::post('username'),
						Input::post('password'),
						Input::post('email'),
						$groupvalue
					);
					$_SESSION['username'] = Input::post('username');
					return Response::redirect('index.php/ltn');
				}
				catch (BadAdminException $e){
					$this->template->alert = View::forge('LetsTalkNumbers/alert', array('message' => 'Registration Failed, Admin Code Incorrect', 'alertType' => 'failed'));
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

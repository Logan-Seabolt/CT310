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
		}
		else{
			$data = LTNTables::get_HospitalDetails('010001');
		}
		$this->template->title = 'Hospital Details';
		$this->template->content = View::forge('LetsTalkNumbers/hospitalDetails.php', $data);
	}
	public function action_drgdetails()
	{
		if(isset($_GET['id'])){
			$data = array('drg_description' => LTNTables::get_DRG($_GET['id']));
		}
		else{
			$data = array('drg_description' => LTNTables::get_DRG('001'));
		}
		$data = array('drg_description' => LTNTables::get_table('drg_description'));
		$this->template->title = 'DRG Detaila';
		$this->template->content = View::forge('LetsTalkNumbers/drg_description.php', $data);
	}
}

?>

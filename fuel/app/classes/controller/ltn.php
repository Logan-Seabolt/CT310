<?php
 
class Controller_ltn extends Controller_Template
{

	public function action_index()
	{
		$data = array();
		$this->template->title = 'Lets Talk Numbers';
		$this->template->content = View::forge('LetsTalkNumbers/index', $data);
	}
	public function action_about()
	{
		$data = array();
		$this->template->title = 'About';
		$this->template->content = View::forge('LetsTalkNumbers/about', $data);
	}
	public function action_hospitals()
	{
		$data = array();
		$this->template->title = 'Hospitals';
		$this->template->content = View::forge('LetsTalkNumbers/hospitals', $data);
	}
	
}

?>

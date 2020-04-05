<?php
 
class Controller_LetsTalkNumbers extends Controller_Template
{

	public function action_index()
	{
		$data = array();
		$this->template->title = 'Let\'s Talk Numbers';
		$this->template->content = View::forge('LetsTalkNumbersViews/index', $data);
	}
}

?>
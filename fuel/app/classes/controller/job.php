<?php
class Controller_Job extends Controller_Template
{
	public $template = 'template.twig';

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('job');

		$data['job'] = Model_Job::find_by_pk($id);
		$data['actions'] = [
			'back' => [
				'label' => 'Back',
				'url' => '/'
			]
		];

		$this->template->title = "Job";
		$this->template->content = View::forge('job/_details.twig', $data);

	}

}

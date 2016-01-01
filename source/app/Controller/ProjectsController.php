<?php
/**
 * Commits Controller
 *
 * PHP ≥5.4
 *
 * CHRISVOGT.me : Kildekoden
 * Copyright (c) Chris Vogt (http://www.chrisvogt.me)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) 2015 Chris Vogt (http://www.chrisvogt.me)
 * @link          https://github.com/chrisvogt/kildekoden
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Projects Controller
 *
 * @package		app.Controller.ProjectsController
 */
class ProjectsController extends AppController {

	/**
	 * List of controller components
	 *
	 * @var array
	 */
	public $components = [
		'RequestHandler',
		'GithubApiConsumer' => [
			'username' => 'Joyent',
			'repository' => 'node',
		],
	];

/**
 * Commit data
 *
 * @var array
 */
	public $commits = [];

/**
 * beforeFilter override
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
	}

	/**
	 * Project overview
	 *
	 * Displays an overview of the repository.
	 *
	 * @param $username
	 * @param $repository
	 * @throws NotFoundException when no commit data is available
	 * @return void
	 */
	public function overview($username, $repository) {
		// load the commit data
		$this->GithubApiConsumer->setUsername($username);
		$this->GithubApiConsumer->setRepository($repository);
		$this->commits = $this->GithubApiConsumer->getRecentCommits();

		// check to see if project is in the database
		$data = $this->Project->find('first', ['conditions' => [
			'username' 		=> $username,
			'repository' 	=> $repository
		]]);
		if (!$data && count($this->commits) >= 1) { // if not, store it
	    $saved = $this->Project->save(['Project' => [
	    	'provider' 		=> 'gh', // force GitHub, for now
	    	'username' 		=> $username,
  	    	'repository' 	=> $repository
      ]]);
		}

		// set the data
		$this->publishCommits();
		$this->set('title_for_layout', 'Details for ' . $username . '/' . $repository);
		$this->set(['endpoint' => Router::url() . '.json']);
		$this->set(compact(['username', 'repository', 'data']));
	}

/**
 * Lookup and return the project path.
 *
 * @param $userrepo The project to lookup
 * @throws InvalidArgumentException if $userrepo invalid format
 * @throws InvalidArgumentException if $userrepo not set
 */
	public function lookup($userrepo = null) {
		if (!isset($userrepo) && isset($this->request->data['lookup']['userrepo'])) {
			$userrepo = preg_replace('/\s+/', '', $this->request->data['lookup']['userrepo']); // trim whitespace
			if (preg_match('/^[A-Za-z0-9._-]+\/[[A-Za-z0-9._-]+$/', $userrepo)) {
				$q = explode('/', $userrepo);
				$this->redirect(Router::url('/', true) . 'gh' . DS . $q[0] . DS . $q[1]);
			} else {
				throw new InvalidArgumentException('Requires a string in the form of: username/repository.');
			}
		} else {
			throw new InvalidArgumentException('No repository set.');
		}
	}

/**
 * Set the commit data for the API endpoint.
 *
 * @throws NotFoundException if no commits were found.
 */
	protected function publishCommits() {
		if (isset($this->commits)) {
			$this->set(['commits' => $this->commits, '_serialize' => 'commits']);
			$this->response->header('Access-Control-Allow-Origin', '*'); # CORS workaround
		} else {
			throw new NotFoundException('Something went wrong and the commit data was not loaded.');
		}
	}
}

<?php
/**
 * Commits Controller
 *
 * PHP ≥5.4
 *
 * CHRISVOGT.me : ghrepo-info
 * Copyright (c) Chris Vogt (http://www.chrisvogt.me)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) 2015 Chris Vogt (http://www.chrisvogt.me)
 * @link          https://github.com/chrisvogt/example-php-challenge
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
	 * Recent Commits
	 *
	 * A placeholder action for displaying recent commits.
	 *
	 * @throws NotFoundException when no commit data is available
	 * @return void
	 */
	public function recent($username, $repository) {
		$this->handleCommits($username, $repository);
		if (isset($this->commits)) {
			$this->set(['commits' => $this->commits, '_serialize' => 'commits']);
			$this->response->header('Access-Control-Allow-Origin', '*'); # CORS workaround
		} else {
			throw new NotFoundException('Something went wrong and the commit data was not loaded.');
		}
		$this->set('title_for_layout', 'Details for ' . $username . '/' . $repository);
		$this->set(['endpoint' => Router::url() . '.json']);
		$this->set(compact(['username', 'repository']));
	}

/**
 * Lookup and return the project path.
 */
	public function lookup($userrepo = null) {
		if (!isset($userrepo) && isset($this->request->data['lookup']['userrepo'])) {
			$userrepo = preg_replace('/\s+/', '', $this->request->data['lookup']['userrepo']); // trim whitespace
			if (preg_match('/^[A-Za-z0-9._-]+\/[[A-Za-z0-9._-]+$/', $userrepo)) {
				$q = explode('/', $userrepo);
				$this->redirect(Router::url('/', true) . 'r' . DS . $q[0] . DS . $q[1]);
			} else {
				throw new InvalidArgumentException('Requires a string in the form of: username/repository.');
			}
		} else {
			throw new InvalidArgumentException('No repository set.');
		}
	}

	protected function handleCommits($username = null, $repository = null) {
		if ( isset($username) && isset($repository) ) {
			$this->GithubApiConsumer->setUsername($username);
			$this->GithubApiConsumer->setRepository($repository);
		}
		$this->commits = $this->GithubApiConsumer->getRecentCommits();
	}
}

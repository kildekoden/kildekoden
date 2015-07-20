<?php
/**
 * Commits Controller
 *
 * PHP ≥5.4
 *
 * CHRISVOGT.me : example-php-challenge
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
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller.CommitsController
 * @link			http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class CommitsController extends AppController {

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
		$this->commits = $this->GithubApiConsumer->getRecentCommits();
	}

	/**
	 * Recent Commits
	 *
	 * A placeholder action for displaying recent commits.
	 *
	 * @throws NotFoundException when no commit data is available
	 * @return void
	 */
	public function recent() {
		if (isset($this->commits)) {
			$this->set(['commits' => $this->commits, '_serialize' => 'commits']);
			$this->response->header('Access-Control-Allow-Origin', '*'); # CORS workaround
		} else {
			throw new NotFoundException('Something went wrong and the commit data was not loaded.');
		}
	}
}

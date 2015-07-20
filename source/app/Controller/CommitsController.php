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
	public $components = ['RequestHandler'];

	/**
	 * Recent Commits
	 *
	 * A placeholder action for displaying recent commits.
	 *
	 * @return void
	 */
	public function recent() {
		$this->set('test', 'This is a test.');
		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->set('_serialize', $this->Commit->find('all'));
	}
}

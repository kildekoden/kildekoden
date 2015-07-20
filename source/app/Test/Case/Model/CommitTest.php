<?php
App::uses('Commit', 'Model');

/**
 * Commit Test Case
 *
 */
class CommitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commit = ClassRegistry::init('Commit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commit);

		parent::tearDown();
	}

}

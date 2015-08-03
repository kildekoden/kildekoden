<?php
App::uses('ComponentCollection', 'Controller');
App::uses('Component', 'Controller');
App::uses('GithubApiConsumerComponent', 'Controller/Component');
/**
 * GitHub Api Consumer Component tests
 */
class GithubApiConsumerComponentTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$Collection = new ComponentCollection();
		$this->GithubApiConsumer = new GithubApiConsumerComponent($Collection);
		$this->init();
	}

/**
 * Initialize the component with default values for these tests.
 *
 * @return void
 */
	public function init() {
		$this->GithubApiConsumer->setUsername('Joyent');
		$this->GithubApiConsumer->setRepository('node');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GithubApiConsumer);
		parent::tearDown();
	}

/**
 * @expectedException InvalidArgumentException
 */
	public function testUsernameIsSet() {
		$this->GithubApiConsumer->setUsername(NULL);
		$result = $this->GithubApiConsumer->getRecentCommits();
	}

/**
 * @expectedException InvalidArgumentException
 */
	public function testRepositoryIsSet() {
		$this->GithubApiConsumer->setRepository(NULL);
		$result = $this->GithubApiConsumer->getRecentCommits();
	}

/**
 * Tests correct path is assembled for GET requests to the GitHub API.
 */
	public function testBuildQuery() {
		$result = $this->GithubApiConsumer->buildQuery();
		$this->assertEquals($result, 'https://api.github.com/repos/Joyent/node/commits?jsonp=');
	}

}

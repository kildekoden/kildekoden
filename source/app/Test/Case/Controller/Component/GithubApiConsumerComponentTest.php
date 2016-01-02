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
 * Tests correct path is assembled for GET requests to the GitHub API
 */
	public function testBuildQuery() {
		$result = $this->GithubApiConsumer->buildQuery();
		$this->assertEquals($result, 'https://api.github.com/repos/Joyent/node/commits?jsonp=');
	}

/**
 * Tests `username` setter returns bool
 */
	public function testSetUsernameReturnsBoolean() {
		$result = $this->GithubApiConsumer->setUsername('google');
		$this->assertInternalType('boolean', $result);
	}

/**
 * Tests `repository` setter returns bool
 */
	public function testSetRepositoryReturnsBoolean() {
		$result = $this->GithubApiConsumer->setRepository('material-design-lite');
		$this->assertInternalType('boolean', $result);
	}

/**
 * Test missing `username` and `repository` throws exception
 *
 * @expectedException InvalidArgumentException
 */
	public function testGetRecentCommits() {
		$this->GithubApiConsumer->setUsername(NULL);
		$this->GithubApiConsumer->setRepository(NULL);
		$result = $this->GithubApiConsumer->getRecentCommits();
	}

/**
 * Test missing `username` and `repository` throws exception
 *
 * @expectedException NotFoundException
 */
	public function testGetRecentCommitsFromInvalidProject() {
		$this->GithubApiConsumer->setUsername('chrisvogt');
		$this->GithubApiConsumer->setRepository('th1sw1lln3v3r3x1st');
		$result = $this->GithubApiConsumer->getRecentCommits();
	}

}

<?php
/**
 * GitHub API Consumer Component
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author     		Chris Vogt (http://www.chrisvogt.me)
 * @link          https://github.com/chrisvogt/example-php-challenge
 * @package       app.Component.GithubApiConsumer
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Component', 'Controller');
App::uses('HttpSocket', 'Network/Http');

/**
 * GitHub consumer component class
 *
 * Makes requests to the GitHub API.
 *
 * @package      app.Component.GithubApiConsumer
 * @link         https://github.com/chrisvogt/example-php-challenge
 */
class GithubApiConsumerComponent extends Component {

/**
 * Base url for the API call.
 *
 * @var string
 */
	public $baseUrl = 'https://api.github.com/repos/';

/**
 * Username associated with the repository.
 *
 * @var string
 */
	public $username = '';

/**
 * Repository name.
 *
 * @var string
 */
	public $repository = '';

/**
 * Response object container.
 *
 * @var array|object
 */
	public $response = [];

/**
 * Class constructor
 *
 * @param ComponentCollection $collection A ComponentCollection for this component
 * @param array $settings Array of settings.
 */
	public function __construct(ComponentCollection $collection, $settings = array()) {
		parent::__construct($collection, $settings);
		$this->username = $settings['username'];
		$this->repository = $settings['repository'];
	}

/**
 * Gets recent commits to a repository.
 *
 * @param string $username
 * @param string $repository
 * @throws InvalidArgumentException when a required parameter is not supplied
 * @return void
 */
	public function getRecentCommits() {
		if (isset($this->username) && isset($this->repository)) {
			$response = $this->makeRequest($this->buildQuery());
		} else {
			throw new InvalidArgumentException('Both username and repository name required to query the GitHub API.');
		}

		// continue here

	}

/**
 * Builds the API query url based on parameters
 *
 * @return string The assembed request url
 */
	public function buildQuery() {
		return $requestUrl = $this->baseUrl . $this->username . DS . $this->repository . DS . 'commits?jsonp=';
	}

/**
 * Makes the API call to GitHub.
 *
 * @param string $url
 * @return array|object Response data
 */
	public function makeRequest($url) {
		$HttpSocket = new HttpSocket();
		$HttpSocket->config['ssl_verify_peer'] = false;
		$results = $HttpSocket->get($requestUrl);
		if ($results->code == 404) {
			return $results;
		}
		return json_decode($results->body, true);
	}

}

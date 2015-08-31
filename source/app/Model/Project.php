<?php
App::uses('AppModel', 'Model');

/**
 * Project Model
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
class Project extends AppModel {

/**
 * Manually set the primary key for MongoDB.
 *
 * @var $primaryKey
 */
  var $primaryKey = '_id';

/**
 * MongoDB Schema
 *
 * @var array
 */
	var $mongoSchema = array(
		'provider' => array('type'=>'string'),
		'username' => array('type'=>'string'),
		'repository'=>array('type'=>'string'),
		'created'=>array('type'=>'datetime'),
	);

	public $actsAs = array(
	    'Sitemap.Sitemap' => array(
	        'primaryKey' => '_id',
	        'loc' => 'buildUrl',
	        'lastmod' => FALSE,
	        'changefreq' => 'daily',
	        'priority' => '0.5',
	        'conditions' => array(), // Conditions to limit or control the returned results for the sitemap
	    )
	);

	/**
	 * Override Sitemap behavior's buildUrl()
	 *
	 * @return string the url for a project
	 */
	public function buildUrl($primaryKey, $Model = null) {
		$data = $this->find('first', ['conditions' => ['_id' => $primaryKey]]);
		extract($data['Project']);
		return Router::url(Router::url(DS . $provider . DS . $username . DS . $repository), TRUE);
	}

	/**
	 * Returns the latest n projects.
	 *
	 * @param integer $limit
	 * @return array
	 */
	public function getLatest($limit = null) {
		return $this->find('all', [
			'limit' => $limit,
			'order' => ['created' => -1],
			'fields' => ['provider', 'username', 'repository']
		]);
	}

	/**
	 * Converts any MongoDB date object into a timestamp.
	 *
	 * @param array $results
	 * @param boolean $primary
	 * @return array
	 */
	public function afterFind($results, $primary = false) {
	    foreach ($results as $key => $val) {
	    		if (isset($val['Project']['_id'])) { // drop the _id
	    			unset($results[$key]['Project']['_id']);
	    		}
	        if (isset($val['Project']['created'])) { // format the date
	            $results[$key]['Project']['created'] = $this->dateFormatAfterFind(
	                $val['Project']['created']
	            );
	        }
	    }
	    return $results;
	}

	/**
	 * Extracts the timestamp.
	 *
	 * @return int
	*/
	public function dateFormatAfterFind(MongoDate $MongoDate) {
		return $MongoDate->sec;
	}

}

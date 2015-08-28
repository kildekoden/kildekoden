<?php
App::uses('AppModel', 'Model');

/**
 * Project Model
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
class Project extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sha';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'sha' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
			'maxLength' => array(
				'rule' => array('maxLength', 40),
			),
			'minLength' => array(
				'rule' => array('minLength', 40),
			),
		),
		'timestamp' => array(
			'datetime' => array(
				'rule' => array('datetime'),
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'url' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
		),
		'author_username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
		),
		'author_email' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
			'email' => array(
				'rule' => array('email'),
			),
		),
		'author_url' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
			'url' => array(
				'rule' => array('url'),
			),
		),
		'author_avatar' => array(
			'url' => array(
				'rule' => array('url'),
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'message' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
			'maxLength' => array(
				'rule' => array('maxLength', 255),
			),
		),
	);
}

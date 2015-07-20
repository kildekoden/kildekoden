<?php
App::uses('AppModel', 'Model');

/**
 * Commit Model
 *
 */
class Commit extends AppModel {

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

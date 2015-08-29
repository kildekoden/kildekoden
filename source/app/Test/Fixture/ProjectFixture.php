<?php
/**
 * CommitFixture
 *
 */
class CommitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'key' => 'primary',
		'provider' => array('type' => 'string', 'length' => 2, 'null' => false),
		'username' => array('type' => 'string', 'null' => false),
		'repository' => array('type' => 'string', 'null' => false),
		'created' => array('type' => 'datetime'),
		'indexes' => array(
			'PRIMARY' => array('column' => '_id', 'unique' => 1),
			'id_UNIQUE' => array('column' => 'id', 'unique' => 1),
			'sha_UNIQUE' => array('column' => 'sha', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'_id' => '55e1d6b2b292c910098b4567',
			'provider' 		=> 'gh',
			'username' 		=> 'Facebook',
			'repository' 	=> 'hhvm',
			'created'			=> '2015-08-29T15:58:43.002Z'
		),
		array(
			'_id' => '55e1c8bdb292c9e2088b4567',
			'provider' 		=> 'gh',
			'username' 		=> 'chrisvogt',
			'repository' 	=> 'projects',
			'created'			=> '2015-08-29T14:59:09.352Z'
		)
	);

}

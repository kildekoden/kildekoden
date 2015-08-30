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
}

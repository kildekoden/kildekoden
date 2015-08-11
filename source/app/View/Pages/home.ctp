<?php
/**
 * Home View for GHREPO.info
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author     		Chris Vogt (http://www.chrisvogt.me)
 * @link          https://github.com/chrisvogt/ghrepo-info
 * @package       app.Component.GithubApiConsumer
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// Scripts for this view
$this->Html->css('home', ['inline' => false]);
$this->Html->script([
	'http://www.marcoguglielmelli.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js',
	'http://www.marcoguglielmelli.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js',
	'http://www.marcoguglielmelli.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js',
	'animated-background'
], ['block' => 'scriptBottom']);

?>
<div id="large-header" class="large-header">
  <canvas id="demo-canvas"></canvas>
    <h1 class="main-title">Repository <span class="thin">Information</span></h1>
</div>

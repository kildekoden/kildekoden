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
$this->assign('title', 'GitHub Repository Viewer');
$this->Html->css([
	'home',
	'/components/remodal/dist/remodal.css',
	'/components/remodal/dist/remodal-default-theme.css',
	'https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.1.1/gh-fork-ribbon.min.css'
	],
	['inline' => false]);
$this->Html->script([
	'http://www.marcoguglielmelli.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js',
	'http://www.marcoguglielmelli.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js',
	'http://www.marcoguglielmelli.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js',
	'animated-background',
	'/components/remodal/dist/remodal.min.js'
], ['block' => 'scriptBottom']);
?>
<div id="large-header" class="large-header">
  <canvas id="demo-canvas"></canvas>
  <h1 class="main-title">Repository <span class="thin">Information</span></h1>
  <div class="github-fork-ribbon-wrapper right-bottom">
      <div class="github-fork-ribbon">
          <a href="https://github.com/chrisvogt/ghrepo-info">Fork me on GitHub</a>
      </div>
  </div>
</div>

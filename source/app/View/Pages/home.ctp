<?php
/**
 * Home view for Kildekoden
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author     		Chris Vogt (http://www.chrisvogt.me)
 * @link          https://github.com/chrisvogt/kildekoden
 * @package       app.Component.GithubApiConsumer
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$this->assign('title', 'Lookup Repository Information');
$this->Html->css([
	'home',
	'/components/remodal/dist/remodal.css',
	'/components/remodal/dist/remodal-default-theme.css',
	'https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.1.1/gh-fork-ribbon.min.css'
	],
	['inline' => false]);
$this->Html->script([
	'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/easing/EasePack.min.js',
	'/components/raf.js/raf.min.js',
	'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js',
	'animated-background',
	'https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js',
	'/components/remodal/dist/remodal.min.js'
], ['block' => 'scriptBottom']);
?>
<div id="large-header" class="large-header">
  <?php echo $this->Html->image('starthere.svg', [
  						'id' => 'starthere',
  						'class' => 'hidden-xs hidden-sm',
  						'alt' => 'Search here to get started',
  						'width' => 128]); ?>

  <canvas id="demo-canvas"></canvas>
  <h1 class="main-title">Repository <span class="thin">Information</span></h1>

	<?php echo $this->element('latest'); ?>
  </aside>
  <div class="github-fork-ribbon-wrapper right-bottom">
      <div class="github-fork-ribbon">
          <a href="https://github.com/chrisvogt/kildekoden">Fork me on GitHub</a>
      </div>
  </div>
</div>

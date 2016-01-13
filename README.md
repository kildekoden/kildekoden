[![Build status](https://img.shields.io/travis/kildekoden/kildekoden.svg?branch=master&style=flat-square)](https://travis-ci.org/kildekoden/kildekoden)
[![GitHub release](https://img.shields.io/github/release/kildekoden/kildekoden.svg?style=flat-square)](https://github.com/kildekoden/kildekoden/releases)
[![GitHub license](https://img.shields.io/github/license/kildekoden/kildekoden.svg?style=flat-square)](https://github.com/kildekoden/kildekoden/blob/master/LICENSE)


# kildekoden

Lookup and explore open source repositories.

* Home page @ [http://kildekoden.com](http://kildekoden.com).
* Results page @ [http://kildekoden.com/gh/Facebook/hhvm](http://kildekoden.com/gh/facebook/hhvm).

## Requirements

<img src="/kildekoden-cli.png" alt="Vagrant CLI example" align="right" style="width: 50%!important;" width="50%">

* Production: `php 5.4+` `MongoDB`
* Development: `Node.js`

Kildekoden requires a web server able to serve `PHP` with the `MongoDB PHP` driver installed.

A vagrant box and [provisioning script](bootstrap.sh) have been included to help you get started. Run `vagrant up` from the root folder then navigate to [http://192.168.33.10](http://192.168.33.10).

## Configure

Copy the [default configuration file](source/app/Config/.env.default) to `.env`. In this new file set _your_ app name, Google Analytics ID, CakePHP salt and cipher seed, debug level, database connection details, etc. Alternatively, these configuration settings may be set in environmental variables.

## Screenshots

[![Project Directory](/source/webroot/img/screenshot.home.png)](http://kildekoden.com)

[![Project Directory](/source/webroot/img/screenshot.result.png)](http://kildekode.com/gh/facebook/hhvm)

## License

[MIT](LICENSE) © [Chris Vogt](https://www.chrisvogt.me).

## Built with

<p align="left">
    <img src="https://cdn.rawgit.com/chrisvogt/wowchar-info/master/webroot/img/cake-logo-smaller.png" alt="CakePHP" height="48">
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/45/MongoDB-Logo.svg/527px-MongoDB-Logo.svg.png" alt="MongoDB" height="48">
    <img src="http://upload.wikimedia.org/wikipedia/en/9/9e/JQuery_logo.svg" alt="jQuery" height="48">
    <img src="http://bower.io/img/bower-logo.svg" alt="Bower.js" height="48">
    <img src="http://gruntjs.com/img/grunt-logo-no-wordmark.svg" alt="grunt.js" height="48">
    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/CSS3_and_HTML5_badges.svg" alt="HTML5 &amp; CSS3" height="48">
    <img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Boostrap_logo.svg" alt="Twitter Bootstrap" height="48">
</p>
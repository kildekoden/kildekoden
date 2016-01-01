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

[MIT License](LICENSE.md)

Copyright (c) 2015 Chris Vogt https://www.chrisvogt.me

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

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
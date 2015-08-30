# kildekoden

Kildekoden is a hobby project that helps users lookup information for their GitHub projects (soon to support Bitbucket). Created by @[C1V0](https://www.twitter.com/c1v0).

* Home page @ [http://kildekoden.com](http://kildekoden.com).
* Results page @ [http://kildekoden.com/gh/Facebook/hhvm](http://kildekoden.com/gh/Facebook/hhvm).

_(Formerly ghrepo-info, or http://ghrepo.info.)_

### Requirements

Required: `php 5.4+` `MongoDB` `Composer` `Bower`

Kildekoden requires a web server able to serve `PHP` with the `MongoDB PHP` driver installed. `Composer` and `Bower` are used for package management. `MongoDB` is used as the database, but you can easily switch to any [CakePHP-supported](http://book.cakephp.org/2.0/en/models/datasources.html#datasources) database without changing much code.

A vagrant box and [provisioning script](bootstrap.sh) have been included to help developers get setup quickly with a virtual development environment. Just run `vagrant up` from the root folder then navigate to [http://192.168.33.10](http://192.168.33.10).

### Configure

Copy the [default configuration file](source/app/Config/.env.default) to `.env`. In this new file set _your_ app name, Google Analytics ID, CakePHP salt and cipher seed, debug level, database connection details, etc. Alternatively, these configuration settings may be set in environmental variables.

### Screenshots

[![Project Directory](/source/webroot/img/screenshot.home.jpg)](http://kildekoden.com)

[![Project Directory](/source/webroot/img/screenshot.result.jpg)](http://kildekode.com/gh/chrisvogt/ghrepo-info)

### License

[MIT License](LICENSE.md)

Copyright (c) 2015 Chris Vogt https://www.chrisvogt.me

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

___

<img src="http://upload.wikimedia.org/wikipedia/en/9/9e/JQuery_logo.svg" alt="Made with jQuery" height="70" align="right"> <img src="http://bower.io/img/bower-logo.svg" alt="Made with Bower" height="70" align="right"> <img src="https://upload.wikimedia.org/wikipedia/commons/2/26/Logo-composer-transparent.png" alt="Made with Composer" height="70" align="right"> <img src="https://cdn.rawgit.com/chrisvogt/wowchar-info/master/webroot/img/cake-logo-smaller.png" alt="Made with CakePHP" height="70" align="right"> <img src="https://cdn.rawgit.com/chrisvogt/wowchar-info/master/webroot/img/php-med-trans.png" alt="Made with PHP" height="70" align="right">

# GHREPO.info » GitHub Repository Information

An example CakePHP app that displays repository information from the GitHub API. Created by @[C1V0](https://www.twitter.com/c1v0).

* Home page @ [http://ghrepo.info](http://ghrepo.info).
* Results page @ [http://ghrepo.info/r/chrisvogt/ghrepo-info](http://ghrepo.info/r/chrisvogt/ghrepo-info).

### Requirements

GHREPO.info requires a web server able to serve `php 5.4+`. `Composer` and `Bower` are used for package management.

As an alternative, a [shell script](bootstrap.sh) has been included to setup and configure this app in a virtual. Just run `vagrant up` and then navigate to [http://192.168.33.10](http://192.168.33.10).

### Configure

_If only demoing this project, you may skip this section._

The [default configuration file](source/app/Config/.env.default) should be copied to `.env`. This new file is where to set _your_ app name, Google Analytics ID, CakePHP salt and cipher seed, debug level, database connection details, etc. Alternatively, these configuration settings may be set in environmental variables.

### Screenshots

[![Project Directory](/source/webroot/img/screenshot.home.jpg)](http://ghrepo.info)
Home page

[![Project Directory](/source/webroot/img/screenshot.result.jpg)](http://ghrepo.info/r/chrisvogt/ghrepo-info)
Results Page

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

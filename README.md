## PHP Programming Task

In order to be considered for the PHP position, you must complete the following task. 

*Note: This task should take no longer than 1-3 hours at the most.*

### Prerequisites

- Experience with [PHP](http://www.php.net) frameworks (Laravel, Symfony, Fuel, Zend, Yii, etc.)
- Understanding of CSS frameworks and grid systems (Bootstrap, Pure, etc.)
- Database knowledge (MySQL, MongoDB, Postgres, etc.)

## Task

1. Fork this repository
2. Create a *source* folder to contain your code. 
3. In the *source* directory, please create a PHP web application using a framework (Laravel, Symfony, Fuel, Zend, Yii, etc.)
4. Your application should accomplish the following:
  - Connect to the [Github API](http://developer.github.com/)
  - Find the [joyent/node](https://github.com/joyent/node) repository
  - Find the 25 most recent commits
  - Create a model and store the 25 most recent commits in the database. Make sure to avoid any duplicates.
  - Create a basic template and utilize a CSS framework (Bootstrap, Pure, etc.)
  - Create a route and view which displays the recent commits by author from the database. 
  - If the commit hash ends in a number, color that row light blue (#E6F1F6).
  
### Once Complete
1. Create a SETUP.md in the base directory with setup instructions.
2. Send us a pull request, we will review your code and get back to you

## Key Points We Are Looking For
  - Demonstration of core MVC patterns
  - Quality commit history
  - Ability to use libraries
  - Ability to create basic model and retrieve information from the databse
  
## Bonus Points
While not required any of the following will add some major bonus points to your submission:
- Setup an asset pipeline with Gulp, Grunt, etc.
- Use Angular
- Use Bower
- Use Composer
- Utilize a vagrant box
- Create a set of provsioning scripts with Puppet, Chef, Ansible, etc.

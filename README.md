# Behat-Mink-BrowserStack
Run Behat + Mink tests on BrowserStack

## Steps to run 

Clone this repo:

`https://github.com/UmangSardesai/Behat-Mink-BrowserStack.git`


Now install Behat, Mink, MinkExtension and their dependencies with composer:

`curl http://getcomposer.org/installer | php`

`php composer.phar install`

Add BrowserStack Username and Automate-key to `behat.yml`


Now to launch Behat, just run:

`bin/behat`

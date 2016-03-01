# Behat-Mink-BrowserStack
Behat + Mink tests on BrowserStack

## Setup 

1. Clone this repo:

  `git clone https://github.com/browserstack/behat-mink-browserstack.git`

2. Install composer: 

  `curl http://getcomposer.org/installer | php`

3. Install Behat, Mink, MinkExtension and their dependencies with composer:

  `php composer.phar install`

## Configuration
Add BrowserStack Username and Automate-key to `behat.yml`

## Run Tests
Now to launch Behat, just run:

`bin/behat`

## Further Reading
- [Behat](http://mink.behat.org/en/latest/)
- [BrowserStack documentation for Automate](https://www.browserstack.com/automate/php)

Happy Testing! 

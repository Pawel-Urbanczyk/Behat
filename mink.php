<?php

require  __DIR__.'/vendor/autoload.php';

use Behat\Mink\Driver\GoutteDriver;
use Behat\Mink\Driver\Selenium2Driver;
use Behat\Mink\Session;

$driver = new GoutteDriver();

//if we want use selenium2
//$driver = new Selenium2Driver();

$session = new Session($driver);
$session->start();

$session->visit('http://jurassicpark.wikia.com');

var_dump($session->getCurrentUrl());

//Document Element
$page = $session->getPage();

var_dump(substr($page->getText(), 0, 75));

//NodeElement
$header = $page->find('css', '.wds-community-header__sitename a');
var_dump($header->getText());

$subNav = $page->find('css', '.wds-tabs');
$linkEl = $subNav->find('css', 'li a');
var_dump($linkEl->getText());

$selectorHandler = $session->getSelectorsHandler();

//name selector for fields, finding label matching to field
//$page->findField('Description')

//name selector for buttons, find a part of button name(<button>Save the changes</button>)
//$page->findButton('Save');

//name selector for link
$linkEl = $page->findLink('Books');
var_dump($linkEl->getAttribute('href'));

$linkEl->click();
var_dump($session->getCurrentUrl());

$session->stop();





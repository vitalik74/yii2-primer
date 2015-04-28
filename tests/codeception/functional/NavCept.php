<?php
use tests\codeception\_pages\NavPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that Nav widget works');

NavPage::openBy($I);

$I->seeElement('.menu');
$I->seeElement('.selected');
$I->seeElement('.menu-item');
$I->see('Account', '.selected');
$I->see('Profile', '.menu-item');
//$I->seeElement('[url="log/in"]');
//$I->seeElement('.menu.menu-item[url="log/out"]');
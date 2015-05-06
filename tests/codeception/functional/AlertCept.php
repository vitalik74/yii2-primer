<?php

use tests\codeception\_pages\AlertPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that alert works');
$buttonPage = AlertPage::openBy($I);

$I->seeElement('#simple_alert.flash');
$I->seeElement('#simple_alert.flash.flash-warn');

$I->seeElement('#simple_alert2.flash.flash-warn');

$I->seeElement('#simple_alert_icon.flash.flash-with-icon');
$I->seeElement('.octicon.octicon-alert');

$I->seeElement('#simple_alert_dismiss.flash.flash-warn');

$I->seeElement('#simple_alert_dismiss2.flash.flash-warn');
$I->seeElement('.octicon.octicon-x.flash-close.js-flash-close');


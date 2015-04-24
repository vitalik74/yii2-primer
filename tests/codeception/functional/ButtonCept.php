<?php

use tests\codeception\_pages\ButtonPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that button works');

$buttonPage = ButtonPage::openBy($I);
$I->see('simple button');
$I->seeElement('.btn');

$I->see('primary button');
$I->seeElement('#primary_button.btn-primary');

$I->see('smallPrimary button');
$I->seeElement('#smallPrimary_button.btn.btn-sm.btn-primary');

$I->see('small button');
$I->seeElement('#small_button.btn.btn-sm');

$I->see('smallDanger button');
$I->seeElement('#smallDanger_button.btn.btn-sm.btn-danger');

$I->see('danger button');
$I->seeElement('#danger_button.btn.btn-danger');

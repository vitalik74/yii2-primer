<?php

use tests\codeception\_pages\TooltipPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that tooltip works');

$buttonPage = TooltipPage::openBy($I);
$I->see('simple tooltip');
$I->seeElement('.tooltipped.tooltipped-n');
$I->seeElement('.tooltipped.tooltipped-ne');
$I->seeElement('.tooltipped.tooltipped-e');
$I->seeElement('.tooltipped.tooltipped-se');
$I->seeElement('.tooltipped.tooltipped-s');
$I->seeElement('.tooltipped.tooltipped-sw');
$I->seeElement('.tooltipped.tooltipped-w');
$I->seeElement('.tooltipped.tooltipped-nw');
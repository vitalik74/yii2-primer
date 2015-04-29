<?php

use tests\codeception\_pages\BlankslatePage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that blankslate works');

$buttonPage = BlankslatePage::openBy($I);

$I->seeElement('#blankslate.blankslate');
$I->seeElement('#spacious.blankslate.spacious');
$I->seeElement('#clean.blankslate.clean-background');
$I->seeElement('#capped.blankslate.capped');
$I->seeElement('#fixed.blankslate.has-fixed-width');
$I->seeElement('#no_set.blankslate');

$I->seeElement('.mega-octicon.octicon-git-commit');
$I->seeElement('.mega-octicon.octicon-tag');
$I->seeElement('.mega-octicon.octicon-git-branch');

$I->seeElement('.mega-octicon.octicon-git-commit');
$I->seeElement('.mega-octicon.octicon-git-branch');
$I->seeElement('.mega-octicon.octicon-tag');

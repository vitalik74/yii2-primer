<?php
use tests\codeception\_pages\FilterListPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that Nav widget works');

FilterListPage::openBy($I);

$I->seeElement('.filter-list');
$I->seeElement('.filter-item');
$I->seeElement('.filter-item.selected1');

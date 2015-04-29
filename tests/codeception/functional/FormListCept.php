<?php
use tests\codeception\_pages\FormPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that form works');

FormPage::openBy($I);

$I->see('lavanda');

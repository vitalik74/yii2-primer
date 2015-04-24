<?php

use tests\codeception\_pages\StatePage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that state works');

$buttonPage = StatePage::openBy($I);
$I->see('open');
$I->seeElement('#open.state.state-open');

$I->see('proposed');
$I->seeElement('#proposed.state.state-proposed');

$I->see('reopened');
$I->seeElement('#reopened.state.state-reopened');

$I->see('closed');
$I->seeElement('#closed.state.state-closed');

$I->see('merged');
$I->seeElement('#merged.state.state-merged');
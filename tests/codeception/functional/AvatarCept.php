<?php

use tests\codeception\_pages\AvatarPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that avatar works');

$buttonPage = AvatarPage::openBy($I);
$I->seeElement('.avatar');

$I->seeElement('.avatar.avatar-small');

$I->seeElement('.avatar-parent-child.left');

$I->seeElement('#parent_avatar.avatar');

$I->seeElement('.avatar.avatar-child');
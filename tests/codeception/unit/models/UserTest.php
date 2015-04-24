<?php

namespace tests\codeception\unit\models;

use app\models\User;
use app\models\User3;
use yii\codeception\TestCase;

class UserTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        // uncomment the following to load fixtures for user table
        //$this->loadFixtures(['user']);
    }

    public function testUser()
    {
        $aa = User3::findAll([]);
    }

    // TODO add test methods here
}

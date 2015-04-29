<?php
/**
 * Class User
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 29.04.2015 9:41
 */
namespace app\models;

use yii\base\Model;

class User extends Model
{
    public $username;
    public $password;
    public $checkbox;
    public $checkboxList;
    public $select;
    public $radio;
    public $radioList;
}
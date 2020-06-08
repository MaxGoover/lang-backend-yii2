<?php

namespace app\forms\auth;

use app\models\user\User;
use app\models\user\UserTokenDTO;
use Yii;
use yii\base\Exception;
use yii\base\Model;


class LoginForm extends Model
{
    public string $username;
    public string $password;
    public bool $rememberMe = false;

    private $_user;
    private $_tokenDto;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username'   => Yii::t('user', 'Username'),
            'password'   => Yii::t('user', 'Password'),
            'rememberMe' => Yii::t('user', 'Remember me'),
        ];
    }

    public function validatePassword($attribute)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, Yii::t('user','Incorrect username or password.'));
            }
        }
    }

    public function login(): bool
    {
        if ($this->validate()) {
            if ($user = $this->getUser()) {
                try {
                    $this->_tokenDto = $user->refreshToken();

                    if ($user->save()) {
                        return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);
                    }
                } catch (Exception $e) {
                }
            }
        }

        return false;
    }

    public function getUser(): ?User
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function getTokenDto(): ?UserTokenDTO
    {
        return $this->_tokenDto;
    }
}

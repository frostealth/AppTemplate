<?php

class UserIdentity extends CUserIdentity
{
    const ERROR_USER_BLOCKED = 4;

    protected $_id;
    protected $_login;

    public function __construct($login, $password)
    {
        $this->_login = ucfirst($login);
        $this->password = $password;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
        return $this->_login;
    }

    /**
     * Данный метод вызывается один раз при аутентификации пользователя
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        /** @var User $user */
        $user = User::model()->find('login=?', array($this->_login));

        if($user == null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif(!$user->validatePassword($this->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } elseif($user->isBanned) {
            $this->errorCode = self::ERROR_USER_BLOCKED;
        } else {
            $this->_id = $user->id;
            Yii::app()->user->update($user);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
}
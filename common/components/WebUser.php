<?php

class WebUser extends CWebUser
{
    public $modelName = 'User';

    /** @var CActiveRecord */
    protected static $userObject = null;

    public function getModel()
    {
        if (static::$userObject === null && $this->getState('__id') !== null) {
            $this->update(CActiveRecord::model($this->modelName)->findByPk($this->getState('__id')));
        }

        return static::$userObject;
    }

    public function update($model)
    {
        static::$userObject = $model;
        $this->loadIdentityStates($model->attributes);
    }
}

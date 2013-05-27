<?php

class DefaultController extends CommonDefaultController
{
    public function actions()
    {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'transparent' => true,
                'testLimit' => 2,
            ),
        );
    }
}

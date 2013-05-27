<?php

/**
 * @property    string  $pageHeader
 */
class Controller extends CController
{
    public $layout = '//layouts/column1';
    public $menu = array();
    public $breadcrumbs = array();
    public $meta = array();

    protected $_pageHeader;

    /**
     * Автоматически ограничиваем доступ к действиям, начинающимся с "ajax" только для ajax-запросов
     */
    public function run($actionID)
    {
        if (strtolower(substr($actionID, 0, 4)) == 'ajax') {
            $this->acceptAjaxOnly();
        }

        parent::run($actionID);
    }

    public function init()
    {
        if (!empty(Yii::app()->params['meta'])) {
            $this->meta = Yii::app()->params['meta'];
        }
    }

    public function setPageHeader($pageHeader, $updatePageTitle = true)
    {
        $this->_pageHeader = $pageHeader;
        if ($updatePageTitle) {
            $this->pageTitle = $pageHeader . ' - ' . Yii::app()->name;
        }
    }

    public function getPageHeader()
    {
        return $this->_pageHeader;
    }

    public function acceptAjaxOnly()
    {
        if (!Yii::app()->request->isAjaxRequest) {
            throw new CHttpException(404);
        }
    }

    protected function performAjaxValidation($model, $formId = null)
    {
        if (Yii::app()->request->isAjaxRequest && isset($_POST['ajax'])
            && ($formId == null || $_POST['ajax'] === $formId)
        ) {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
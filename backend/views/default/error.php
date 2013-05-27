<?
/**
 * @var DefaultController   $this
 * @var array               $error
 * @var string              $code
 */

$this->pageHeader = Yii::t('app', 'Error {code}', array('{code}' => $code));
?>

<div class="error">
    <p>
    <?
        switch ($code) {
            case '404':
                echo Yii::t('app', 'Page not found.');
                break;
            case '403':
                echo Yii::t('app', 'Access denied.');
                break;
            default:
                echo CHtml::encode($message);
        }
    ?>

    </p>
</div>

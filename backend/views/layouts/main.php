<? /** @var Controller  $this */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?
            // Meta
            foreach ($this->meta as $metaOptions) {
                CHtml::tag('meta', $metaOptions);
            }

            // Icon
            echo CHtml::linkTag('icon', 'image/x-icon', '/favicon.ico');
            echo CHtml::linkTag('shortcut  icon', 'image/x-icon', '/favicon.ico');
        ?>

        <title><?= CHtml::encode($this->pageTitle) ?></title>
    </head>
    <body>
        <?= $content ?>

    </body>
</html>

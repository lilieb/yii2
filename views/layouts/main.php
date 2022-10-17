<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use app\widgets\MainMenu;
use app\widgets\BottomMenu;
use app\widgets\SlideShow;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\widgets\Menu;
use app\assets\CMS;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100 bg-secondary">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100 p-4 bg-secondary">
<?php $this->beginBody() ?>

<div class="container bg-white rounded p-0">
    <header id="header">
        <div class="container border-bottom border-5 border-warning px-5 ml-0">
            <div class="d-flex justify-content-end">
            <?php
            NavBar::begin([
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class' => 'navbar navbar-expand-md']
            ]);
            echo \app\widgets\Languages::widget();
            NavBar::end();
            ?>
            </div>
            <?php
            NavBar::begin([
                'brandLabel' => 'MUSTERFIRMA',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class' => 'navbar navbar-expand-md']
            ]);
            echo MainMenu::widget();
            NavBar::end();
            ?>
        </div>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container px-5">
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-auto py-3">
        <div class="bg-warning px-5">
            <?= SlideShow::widget() ?>
        </div>
            <?php
            NavBar::begin([
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class' => 'navbar-expand bg-white']
            ]);
            echo BottomMenu::widget();
            NavBar::end();
            ?>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

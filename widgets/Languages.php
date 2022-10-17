<?php

namespace app\widgets;
use yii\helpers\Url;

class Languages extends \yii\bootstrap5\Widget {

    public function run() {
        echo \yii\bootstrap5\Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $this->getLanguagess(),
        ]);
    }

    protected function getLanguagess(): array
    {
        $items = [];
        foreach (\app\models\Languages::find()->orderBy(["languageOrder"=>SORT_ASC])->all() as $navItem) {
            $items[] = [
                'label' => $navItem->name,
                'url' => \yii\helpers\Url::to(['/site', 'lan' => $navItem->id]),
            ];
        }
        return $items;
    }
}
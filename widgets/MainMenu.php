<?php

namespace app\widgets;
use yii\helpers\Url;

class MainMenu extends \yii\bootstrap5\Widget {

    public function run() {
        echo \yii\bootstrap5\Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $this->getNavItems(),
        ]);
    }

    protected function getNavItems() {
        $items = [];
        foreach (\app\models\NavItem::find()->orderBy(["itemOrder"=>SORT_ASC])->all() as $navItem) {
            $items[] = [
                'label' => $navItem->title,
                //'url' => \yii\helpers\Url::to(['/site', 'id' => $navItem->id]),
                'url' => ["/site/$navItem->id"],
            ];
        }
        return $items;
    }
}
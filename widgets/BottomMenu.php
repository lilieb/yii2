<?php

namespace app\widgets;

use Yii;
use yii\bootstrap5\NavBar;

class BottomMenu extends \yii\bootstrap5\Widget {

    public function run() {
        NavBar::begin([
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar']
        ]);
        echo \yii\bootstrap5\Nav::widget([
            'options' => ['class' => 'navbar-item'],
            'encodeLabels' => false,
            'items' => $this->getNavItems(),
        ]);
        NavBar::end();

    }

    protected function getNavItems(): array
    {
        $items = [];
        foreach (\app\models\NavItem::find()->orderBy(["itemOrder"=>SORT_ASC])->all() as $navItem) {
            $subItems = $this->getSubItems($navItem->id);
            if (count($subItems) > 0){
                $items[] = [
                    'label' => $navItem->title, 'items' => $subItems
                ];
            }
        }
        return $items;
    }

    protected function getSubItems($navItem): array
    {
        $items = [];
        foreach (\app\models\NavSubItem::find()->where(["navItem"=>$navItem])->all() as $subItem) {
            $items[] = [
                'label' => $subItem->name,
            ];
        }
        return $items;
    }
}
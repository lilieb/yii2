<?php

namespace app\widgets;
use coderius\swiperslider\SwiperSlider;
use Yii;
use yii\helpers\Html;

class SlideShow extends \yii\bootstrap5\Widget {

    public function run()
    {
        echo \coderius\swiperslider\SwiperSlider::widget([
            'showScrollbar' => true,
            'slides' => $this->getImages(),
            'clientOptions' => [
                'slidesPerView' => 6,
                'spaceBetween'=> 30,
                'centeredSlides'=> false,
                "scrollbar" => [
                    "hide" => true,
                ],
                'pagination' => [
                    "hide" => true,
                ],
            ],

            //Global styles to elements. If create styles for all slides
            'options' => [
                'styles' => [
                    \coderius\swiperslider\SwiperSlider::CONTAINER => ["height" => "220px",],
                    \coderius\swiperslider\SwiperSlider::SLIDE => ["text-align" => "left"],
                ],
            ],

        ]);
    }

    protected function getImages() {
        $images = [];
        foreach (\app\models\Slider::find()->orderBy(["id"=>SORT_ASC])->all() as $slideItem) {
            $figure = '<figure class="bg-white p-2 mt-2 rounded shadow-sm">' . Html::img('@web/images/' . $slideItem->image, ['alt'=>$slideItem->name, 'width'=>'100%']) . '<figcaption>' . $slideItem->name .'</figcaption></figure>';
            $images[] = $figure;
        }
        return $images;
    }

}

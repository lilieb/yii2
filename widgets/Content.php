<?php

namespace app\widgets;
use yii\helpers\Html;

class Content extends \yii\bootstrap5\Widget {
    public string $site;

    public function init()
    {
        parent::init();
        if ($this->site === "") {
            $this->site = 'home';
        }
    }

    public function run()
    {
        $content = \app\models\Content::find()->where(["navitem"=>$this->site])->one();
        echo '<h5 class="font-weight-bold">' . $content->title . '</h5>
        <div class="row"><div class="col-lg-8 text-muted">'.$content->content.'</div>
        <div class="col-lg-4">' . Html::img('@web/images/' . $content->image, ["class"=>"w-100"]) .'</div>
        </div>';
    }

}

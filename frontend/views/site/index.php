<?php

/* @var $this yii\web\View */

$this->title = 'Halva202';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= $phrasebook['hi'] ?>!</h1>

        <p class="lead"><?= $phrasebook['introduction'] ?> <a href="https://github.com/halva202/test.halva202.by" target="_blank"><?= $phrasebook['here'] ?></a>.&nbsp;</p>

        <p><a class="btn btn-lg btn-success" href="http://www.halva202.by"><?= $phrasebook['mainSite'] ?></a></p>
    </div>

    <div class="body-content">
	
		<p><span style="color:#8B4513;"><em><?= $phrasebook['introduction2'] ?> </em></span><span style="color:#FF0000;"><em><?= $phrasebook['introduction3'] ?></em></span><span style="color:#8B4513;"><em>.</em></span>
		</p>

        <div class="row">
            <div class="col-lg-4">
                <h2><a href="/site/webdeveloper"><?= $phrasebook['web-developer'] ?></a></h2>

                <p><?= $phrasebook['web-developer2'] ?></p>

                <p><a class="btn btn-default" href="http://www.upwork.com/o/profiles/users/_~0106dc02a6699ca661/">Resume on upwork.com &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2><?= $phrasebook['tutor'] ?></h2>

                <p><?= $phrasebook['tutor2'] ?></p>

                <p><a class="btn btn-default" href="http://uchim.biz/board/0-0-11664-0-17"><?= $phrasebook['tutor3'] ?> &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2><h2><?= $phrasebook['lifestyle'] ?></h2></h2>

                <p><?= $phrasebook['lifestyle2'] ?></p>

                <p><a class="btn btn-default" href="https://www.facebook.com/halva202"><?= $phrasebook['lifestyle3'] ?> &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

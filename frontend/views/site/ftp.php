<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ftp';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
</div>

<?php 
/* use \gftp\FtpWidget;
use \gftp\FtpComponent;
 
echo FtpWidget::widget([
    'ftp' => new FtpComponent([
            'protocol' => \gftp\FtpProtocol::FTPS,
            'user' => 'a9113564',
            'pass' => 'Share123',
            'host' => 'share202.comli.com',
            'port' => 2121,
            'timeout' => 120,
            'passive' => false
    ]),
]); */

/* use \gftp\FtpWidget;
echo FtpWidget::widget([
    'ftp' => \Yii::$app->get('otrb')
]); */

$ftp = new \yii2mod\ftp\FtpClient();
/* $ftp->connect('share202.comli.com', true, 22);
$ftp->login('a9113564', 'Share123'); */
/* $ftp->connect('178.172.236.176', true, 22);
$ftp->login('halva202', 'mM8^fOOhR*~%'); */

$ftp_server = "share202.comli.com";

// устанавливает соединение или выходит
$open = ftp_connect($ftp_server) or die("Не удалось установить соединение с $ftp_server"); 
if (!ftp_login($open, "a9113564", "Share123")) exit("Не могу соединиться");
// ftp_mkdir($open,"test"); //Создали папку "test". 
$site = ftp_nlist($open,""); 
$d = 7;
for ($i = 0; $i < $d; $i++) echo $site[$i].'<br>'; 
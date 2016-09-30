<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'bootstrap';
$this->params['breadcrumbs'][] = $this->title;
?>

<link href="/css/dopstyle.css" rel="stylesheet" media="screen">


<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
</div>


<nav class="navbar navbar-default  navbar-fixed-top otstup" role="navigation">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Brand</a>
		</div>
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			<span class="sr-only">Toggle navigation2</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Brand2</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<button type="button" class="btn btn-default navbar-btn">Sign in</button>

		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		  
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
		
	  </div><!-- /.container-fluid -->
	</nav>
		
    <div class="container">
		<div class="row">		
			<div class="col-md-12 head-block"></div>
	
			<div class="col-md-12 top-menu">
				<ul>
					<li><a href="#">Цены</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Товары</a></li>
				</ul>
			</div>
			<div class="col-md-3 top-material">
				<h3>Шапки для сайта</h3>
				Если вы не дружите с фотошопом или у вас совсем нет времени на самостоятельное создание шапки, то лучше воспользоваться готовой.<br/>
			</div>
			<div class="col-md-3 top-material">
				<h3>Шапки для сайта</h3>
				Если вы не дружите с фотошопом или у вас совсем нет времени на самостоятельное создание шапки, то лучше воспользоваться готовой.<br/>
			</div>
			<div class="col-md-3 top-material">
				<h3>Шапки для сайта</h3>
				Если вы не дружите с фотошопом или у вас совсем нет времени на самостоятельное создание шапки, то лучше воспользоваться готовой.<br/>
			</div>
			<div class="col-md-3 top-material">
				<h3>Шапки для сайта</h3>
				Если вы не дружите с фотошопом или у вас совсем нет времени на самостоятельное создание шапки, то лучше воспользоваться готовой.<br/>
			</div>
			<div class="col-md-3 left-sidebar">test</div>
			<div class="col-md-9 content">
				<h3>Шапки для сайта</h3>
				Если вы не дружите с фотошопом или у вас совсем нет времени на самостоятельное создание шапки, то лучше воспользоваться готовой.<br/>
				<h3>Шапки для сайта</h3>
				Если вы не дружите с фотошопом или у вас совсем нет времени на самостоятельное создание шапки, то лучше воспользоваться готовой.<br/>
			</div>
		</div>
		
	</div>
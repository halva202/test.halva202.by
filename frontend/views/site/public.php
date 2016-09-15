<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Social networks';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-about">

<p> комменты к приложению halva202 </p>

<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<script type="text/javascript">
  VK.init({apiId: 5623423, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "665", attach: "*"});
</script>


<p> comments for fb </p>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.7&appId=1054663184653050";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://test.halva202.by.gh/site/public" data-numposts="5"></div>




<p> моя стена в вк </p>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<!-- VK Widget -->
<div id="vk_groups2"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups2", {mode: 4, wide: 1, width: "220", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, -5776476);
</script>


<p> стена в club_halva вк </p>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "220", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 128480649);
</script>


<p> запись со стены вк </p>
<div id="vk_post_-128480649_5"></div>
<script type="text/javascript">
  (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//vk.com/js/api/openapi.js?127"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'vk_openapi_js'));
  (function() {
    if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post('vk_post_-128480649_5', -128480649, 5, 'vrPClLKwhXV6cY4RJzRmS1KAYg', {width: 665})) setTimeout(arguments.callee, 50);
  }());
</script>


<p> поделиться в вк </p>
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="http://vk.com/js/api/share.js?94" charset="windows-1251"></script>

<!-- Put this script tag to the place, where the Share button will be -->
<script type="text/javascript"><!--
document.write(VK.Share.button(false,{type: "round", text: "Поделиться"}));
--></script>






<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1057626007685770',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>


</div>

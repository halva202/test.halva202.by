<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Go:)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    
<h1><?= Html::encode($this->title) ?></h1>
<p>Соц сетей много, а в этих соц сетях куча бесед, групп, поэтому чтоб сильно не бегать по вебу, решил все на одну страницу.</p>

<p style="line-height: 20.8px;"><a href="#comments-vk">Комментарии в контакте</a>
</p>
<p style="line-height: 20.8px;"><a href="#comments-fb">Comments on facebook</a>
</p>
<p style="line-height: 20.8px;"><a href="#comments-disqus">Comments on disqus</a>
</p>
<p style="line-height: 20.8px;"><a href="#comments-twitter">Comments on twitter</a>
</p>
<p style="line-height: 20.8px;"><a href="#wall-vk">Моя стена в вк</a>
</p>
<p style="line-height: 20.8px;"><a href="#like-share">Like / Share</a>
</p>


<h2><a id="comments-vk" name="comments-vk">Комментарии в контакте</a></h2>
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




<h2><a id="comments-fb" name="comments-fb">Comments on facebook</a></h2>
<!-- after создания (заведения) плагина comments for localhost на fb предлагают такой код -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1783472251933942";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://test.halva202.by.gh/site/go" data-numposts="5"></div>
<!-- /after создания (заведения) плагина comments for localhost на fb предлагают такой код -->



<!-- disqus -->
<h2><a id="comments-disqus" name="comments-disqus">Comments on disqus</a></h2>
<div id="disqus_thread"></div>
<script>

/**
 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
/*
var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = '//test-halva202-by-gh.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<script id="dsq-count-scr" src="//test-halva202-by-gh.disqus.com/count.js" async></script>

<!-- <a href="http://foo.com/bar.html#disqus_thread">Link</a> -->
<!-- /disqus -->


<h2><a id="comments-twitter" name="comments-twitter">Comments on twitter</a></h2>
<a class="twitter-timeline" href="https://twitter.com/halva202">Tweets by halva202</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    

									
<h2><a id="wall-vk" name="like-share">Моя стена в вк</a></h2>									
<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 4, width: "220", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, -5776476);
</script>




<h2><a id="like-share" name="like-share">Like / Share</a></h2>
<!-- vk мне нравится for localhost -->
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<script type="text/javascript">
  VK.init({apiId: 5623423, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Like block will be -->
<div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
<!-- vk мне нравится -->

<!-- рекомендация в вк -->
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="http://vk.com/js/api/share.js?94" charset="windows-1251"></script>

<!-- Put this script tag to the place, where the Share button will be -->
<script type="text/javascript"><!--
document.write(VK.Share.button(false,{type: "round", text: "Поделиться"}));
--></script>
<!-- /рекомендация в вк -->

<!-- after создания (заведения) нового application for localhost на fb предлагают такой код -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1783472251933942',
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
<!-- /after создания нового application for localhost на fb предлагают такой код -->


	
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http//www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<title> <?php wp_title(); ?> </title>
<?php wp_head(); ?>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript">

<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/allpage.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/top.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/page.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/orbit.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/skin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/common/css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/thickbox.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/font_m.css" id="fontcs" />
<?php if(is_page(2423)|| is_page(2429)): ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/contact.css" />
<?php endif; ?>
<?php if(is_post_type_archive('special')||is_singular( 'special' )): ?>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/special.css" media="all" />
<?php endif; ?>
<link rel="shortcut icon" href="/wp-content/themes/reform/images/favicon.ico">
<link rel="icon" href="/wp-content/themes/reform/images/favicon.ico">
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/rollover2.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/thickbox.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/heightLine.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/navi.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/top.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.wpcf7.confirm.js"></script>
<script type="text/javascript">
<!--
$(document).ready(function() {
    $('#jisseki_box').jcarousel({
    	scroll: 1,
    	auto: 1,
    	animation: "slow",
    	wrap: 'circular'
    });
});
//-->
</script>

<link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" />
<script type="text/javascript">
$(function(){
	$('#slider').orbit();
});
</script>

<!--▼　ク：08ステップ技建　アナリティクス　-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34164602-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http//www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--▲　ク：08ステップ技建　アナリティクス-->

<!-- Global site tag (gtag.js) - Google Ads: 796367629 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-796367629"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-796367629');
</script>

</head>

<body id="top">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=266780803425059&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- ======================ヘッダーここから======================= -->
<div class="header">
	<div class="clearfix">
		<h1 class="header_message">福岡県(福岡市(南区)、春日市)周辺でリフォームをお考えのかたは、ステップ技建にお任せください。</h1>
		<!--<div class="head_saiyo"><a href="/company/saiyo"><img src="https://www.stepgiken.jp/wp-content/themes/reform/images/common/new_head_saiyo.png" alt="採用案内" border="0"></a></div>-->
		<dl class="bt_font">
			<dt><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/moji.gif" width="62" height="19" alt="文字サイズ" /></dt>
			<dd id="font_s"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bt_s.gif" width="19" height="19" alt="小" /></dd>
			<dd id="font_m"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bt_m_on.gif" width="19" height="19" alt="中" /></dd>
			<dd id="font_l"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bt_l.gif" width="19" height="19" alt="大" /></dd>
		</dl>
	</div>
	<div class="clearfix">
		<p class="header_logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/new_logo.png" width="285" height="93" alt="住宅リフォームのステップ技建" /></a></p>
<p class="header_toi"><a href="<?php echo site_url(); ?>/contact#contact"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/head_toi.gif" width="152" height="88" alt="お問い合わせはこちら" /></a></p>
<p class="header_tel"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/new_head_tel.png" width="408" height="93" alt="お問い合わせはこちら" /></p>
</div>
</div>
<!-- ======================ヘッダーここまで======================= -->

<!-- ======================グローバルナビここから======================= -->
<ul class="globalnavi clearfix">
	<li><a href="<?php echo site_url(); ?>/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/gn_home_rollout.png" width="139" height="45" alt="Home" /></a></li>
	<li><a href="<?php echo site_url(); ?>/company/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/gn_company_rollout.png" width="135" height="45" alt="初めての方へ・会社概要" /></a><br />
		<ul>
			<li><a href="/company/">会社案内</a></li>
			<li><a href="<?php if($_SERVER["REQUEST_URI"]=='/company'){echo '#daihyo';}else{echo '/company#daihyo';} ?>">代表からのご挨拶</a></li>
			<li><a href="/company/area/">地元密着へのこだわり</a></li>
			<li><a href="<?php echo site_url(); ?>/voice/">お客様の声・インタビュー</a></li>
			<li><a href="/staff/">スタッフ紹介</a></li>
			<li><a href="/colum/">コラム</a></li>
			<!-- <li><a href="/company/saiyo">採用情報</a></li> -->

		</ul>
	</li>
	<li><a href="<?php echo site_url(); ?>/seko/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/gn_seko_rollout.png" width="135" height="45" alt="増改築・大型リフォーム" /></a><br />
		<ul>
<li><a href="/genbanikki/">現場日記(
	<?php $args = array(
			'post_type' => 'genbanikki', /* 投稿タイプを指定 */
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>件)</a>
</li>
<li><a href="/seko/">施工事例 一覧(
	<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)</a>
</li>
	 <?php wp_list_categories( array(
				'taxonomy' => 'seko_cat',
				'title_li' => '',
				'use_desc_for_title' => '0',
				'depth' => '2',
				'show_count' => '1',
			)); ?>
		</ul>
	</li>
     <li><a href="<?php echo site_url(); ?>/voice/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/gn_interview_rollout.png" width="135" height="45" alt="お客様インタビュー" /></a><br />
		<ul>
			<li><a href="<?php echo site_url(); ?>/interview/case6">case6　どんなことも嫌な顔ひとつぜすやってくれるので、すごく信頼しています！</a></li>
			<li><a href="<?php echo site_url(); ?>/interview/case5">case5　クリナップクリンレディでキッチンリフォーム</a></li>
			<li><a href="<?php echo site_url(); ?>/interview/case4">case4　システムキッチンの取り換えや、庭をコンクリートで固める</a></li>
			<li><a href="<?php echo site_url(); ?>/interview/case3">case3　介護保険で浴室リフォーム他</a></li>
			<li><a href="<?php echo site_url(); ?>/interview/case2">case2　水まわりリフォームとワンちゃんのためのサンルーム</a></li>
			<li><a href="<?php echo site_url(); ?>/interview/case1">case1　中古マンション全面リフォーム</a></li>
		</ul>
     </li>
	<li><a href="<?php echo site_url(); ?>/kaigo"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/gn_kaigo_rollout.png" width="135" height="45" alt="介護リフォーム" /></a></li>
	<li><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/gn_mizu_rollout.png" width="135" height="45" alt="水まわり" /></a><br />
		<ul>
			<li><a href="<?php echo site_url(); ?>/reformmenu/kitchen/">キッチン</a></li>
			<li><a href="<?php echo site_url(); ?>/reformmenu/ohuro/">お風呂</a></li>
			<li><a href="<?php echo site_url(); ?>/reformmenu/toilet/">トイレ</a></li>
		</ul>
	</li>
	<li><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/gn_interior_rollout.png" width="136" height="45" alt="内装・インテリア" /></a><br />
		<ul>
			<li><a href="<?php echo site_url(); ?>/reformmenu/kabegami/">クロス張替え</a></li>
			<li><a href="<?php echo site_url(); ?>/reformmenu/yuka/">床・フローリング</a></li>
			<li><a href="<?php echo site_url(); ?>/reformmenu/j2w/">和室から洋室</a></li>
		</ul>
	</li>
</ul>
<!-- ======================グローバルナビここまで======================= -->

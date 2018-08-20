<!DOCTYPE html>
<html lang="en" class="bg-red">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ステップ技建</title>

<link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/page.css" rel="stylesheet" type="text/css" />

<?php if ( is_home() || is_front_page() ) : ?>
<link href="<?php bloginfo('template_url'); ?>/css/top.css" rel="stylesheet" type="text/css" />
<?php endif; ?>

<link href="<?php bloginfo('template_url'); ?>/css/drawer.css" rel="stylesheet">

<?php wp_head(); ?>

<!--▼　ク：08ステップ技建　アナリティクス　-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34164602-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
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

<?php if(is_page('comp')): ?>
<!-- Event snippet for お問い合わせ conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-796367629/NsypCMWbqocBEI223vsC'});
</script>
<?php endif; ?>

</head>

<body class="drawer drawer--right" id="gotop">

<header id="header" role="banner">
<h1>
<a href="<?php bloginfo('url'); ?>" class="icon_rogo"><img src="<?php bloginfo('template_url'); ?>/images/header/header_rogo.png" alt="福岡県(福岡市(南区)、春日市)周辺でリフォームをお考えのかたは、ステップ技建にお任せください。" width="296" height="92" /></a></h1><a href="<?php bloginfo('url'); ?>/contact" class="icon_mail"><img src="<?php bloginfo('template_url'); ?>/images/header/header_mail.png" alt="ステップ技建" width="140" height="140" /></a><a href="tel:0120191938" onclick="ga('send', 'event', 'smartphone', 'phone-number-tap', 'header')" class="icon_tel"><img src="<?php bloginfo('template_url'); ?>/images/header/header_tel.png" alt="ステップ技建" width="140" height="140" /></a>

<button type="button" class="drawer-toggle drawer-hamburger">
<span class="sr-only"></span>
<span class="drawer-hamburger-icon"></span>
</button>

<nav class="drawer-nav" role="navigation">

<ul class="drawer-menu">
        <li><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php bloginfo('template_url'); ?>/images/header/drower_toi.png" alt="お問い合わせ" width="683" height="217" class="mb20 mt50" /></a></li>
<li class="drawer-dropdown">
<a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false" href="<?php bloginfo('url'); ?>/company">会社案内</a>
	<ul class="drawer-dropdown-menu">
            <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company">会社案内</a></li>
            <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company#daihyo">代表からのご挨拶</a></li>
            <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company/area/">地元密着へのこだわり</a></li>
            <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/voice">お客様の声・インタビュー</a></li>
            <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/staff">スタッフ紹介</a></li>
            <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/colum">コラム</a></li>
	</ul>
</li>
<li class="drawer-dropdown">
<a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false" href="<?php bloginfo('url'); ?>/seko">増改築・大型リフォーム</a>
	<ul class="drawer-dropdown-menu">
            <li><a class="drawer-dropdown-menu-item" href="/genbanikki/">現場日記(
	<?php $args = array(
			'post_type' => 'genbanikki', /* 投稿タイプを指定 */
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>件)</a></li>
            <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko">施工事例 一覧(
	<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)</a></li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/facility">設備(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'facility',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/kitchen">キッチン(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'kitchen',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/ohuro">お風呂(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'ohuro',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/toilet">トイレ(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'toilet',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/senmen">洗面室(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'senmen',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/living">リビング・居室(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'living',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/genkan">玄関(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'genkan',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/mado_sassi">窓・ドア・サッシ(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'mado_sassi',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/storage">収納(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'storage',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/exterior">エクステリア(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'exterior',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/bfree">介護(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'bfree',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>
            <li>
		<a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/ecocarat">エコカラット(
		<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプを指定 */
			'taxonomy' => 'seko_cat',
			'term' => 'ecocarat',
			'paged' => $paged,		/* ページ番号を指定 */
			);
			query_posts( $args );
			 echo gr_get_posts_count();
			 wp_reset_query();
			?>
			件)
		</a>
            </li>

	</ul>
</li>
        <li class="drawer-dropdown"><a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false" href="<?php echo site_url(); ?>/voice">お客様インタビュー</a>
		<ul class="drawer-dropdown-menu">
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/interview/case6">case6　どんなことも嫌な顔ひとつせずやってくれるので、すごく信頼しています！</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/interview/case5">case5　クリナップクリンレディでキッチンリフォーム</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/interview/case4">case4　システムキッチンの取り換えや、庭をコンクリートで固める</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/interview/case3">case3　介護保険で浴室リフォーム他</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/interview/case2">case2　水まわりリフォームとワンちゃんのためのサンルーム</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/interview/case1">case1　中古マンション全面リフォーム</a></li>
		</ul>
	</li>
	<li><a href="<?php bloginfo('url'); ?>/kaigo">介護リフォーム</a></li>
	<li class="drawer-dropdown"><a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false" href="">水まわり</a>
		<ul class="drawer-dropdown-menu">
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/reformmenu/kitchen/">キッチン</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/reformmenu/ohuro/">お風呂</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/reformmenu/toilet/">トイレ</a></li>
		</ul>
	</li>

<li class="drawer-dropdown"><a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false" href="">内装・インテリア</a>
		<ul class="drawer-dropdown-menu">
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/reformmenu/kabegami/">クロス張替え</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/reformmenu/yuka/">床・フローリング</a></li>
		　<li><a class="drawer-dropdown-menu-item" href="<?php echo site_url(); ?>/reformmenu/j2w/">和室から洋室</a></li>
		</ul>
	</li>
      </ul>
    </nav>
</header>

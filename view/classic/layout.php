<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php _($title);?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@0.4.1/dist/css/mdui.min.css" integrity="sha256-lCFxSSYsY5OMx6y8gp8/j6NVngvBh3ulMtrf4SX5Z5A=" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/mdui@0.4.1/dist/js/mdui.min.js" integrity="sha256-dZxrLDxoyEQADIAGrWhPtWqjDFvZZBigzArprSzkKgI=" crossorigin="anonymous"></script>
	<style>
		.mdui-appbar .mdui-toolbar{
			/*height:56px;*/
			font-size: 16px;
		}
		.mdui-toolbar>*{
			padding: 0 16px;
			margin: 0 2px;
			opacity:0.5;
		}
		.mdui-toolbar>.mdui-typo-headline{
			padding: 0 16px 0 0;
		}
		.mdui-toolbar>i{
			padding: 0;
		}
		.mdui-toolbar>a:hover,a.mdui-typo-headline,a.active{
			opacity:1;
		}
		.mdui-container{
			max-width:980px;
		}
	</style>

	<?php 	
		$baidu_analytics = getenv('BAIDU_ANALYTICS');
	?>
	<?php if($baidu_analytics){ ?>
		<!-- Global site tag (hm.js) - Baidu Analytics -->
		<script>
		var _hmt = _hmt || [];
		(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?<?php echo $baidu_analytics; ?>";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
		})();
		</script>
	<?php } ?>

	<?php 	
		$google_analytics = getenv('GOOGLE_ANALYTICS');
	?>
	<?php if($google_analytics){ ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $google_analytics; ?>"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', '<?php echo $google_analytics; ?>');
		</script>
	<?php } ?>

	<?php 	
		$google_adsense = getenv('GOOGLE_ADSENSE');
	?>
	<?php if($google_adsense){ ?>
		<!-- Global site tag (gtag.js) - Google AdSense -->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "<?php echo $google_adsense; ?>",
			enable_page_level_ads: true
		});
		</script>
	<?php } ?>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="mdui-appbar mdui-color-theme">
		<div class="mdui-toolbar mdui-container">
			<a href="/" class="mdui-typo-headline">oneindex</a>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="javascript:;" >admin</a>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="javascript:;" class="active">setpass</a>
			<div class="mdui-toolbar-spacer"></div>
			<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>
		</div>
	</header>
	
	<div class="mdui-container">
    	<?php view::section('content');?>
  	</div>

	<?php 	
		$cnzz_analytics = getenv('CNZZ_ANALYTICS');
	?>
	<?php if($cnzz_analytics){ ?>
		<!-- Global site tag - CNZZ Analytics -->
		<script type="text/javascript">
		var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cspan id='cnzz_stat_icon_<?php echo $cnzz_analytics; ?>' style='display:none;' %3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/z_stat.php%3Fid%3D<?php echo $cnzz_analytics; ?>%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
		</script>
	<?php } ?>
</body>
</html>
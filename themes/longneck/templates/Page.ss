<!DOCTYPE html>
<html lang="{$ContentLocale}">
<head>
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WNJKJ63');
		</script>
	<!-- End Google Tag Manager -->

	<% base_tag %>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	{$MetaTags(false)}

	<title><% if $MetaTitle %>{$MetaTitle}<% else %>{$Title}<% end_if %> &hyphen; {$SiteConfig.Title}</title>

	<link rel="preload" href="{$ThemeDir}/fonts/inter-v2-latin-300.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="{$ThemeDir}/fonts/inter-v2-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="{$ThemeDir}/fonts/inter-v2-latin-500.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="{$ThemeDir}/fonts/inter-v2-latin-700.woff2" as="font" type="font/woff2" crossorigin="anonymous">

	<link rel="preload" href="{$ThemeDir}/css/main.css" as="style">
  <link rel="preload" href="{$ThemeDir}/dist/app.js" as="script">

	<link rel="shortcut icon" href="{$ThemeDir}/images/favicon.ico" />
	<link rel="stylesheet" href="{$ThemeDir}/css/main.css">
</head>
<body class="{$ClassName.ShortName}">
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNJKJ63"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<% include Header %>
	<main class="content--main">
		{$Layout}
	</main>
	<% include Footer %>

	<script src="{$ThemeDir}/dist/app.js"></script>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5fda6d96a8a254155ab40837/1epmjo4rl';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
</body>
</html>

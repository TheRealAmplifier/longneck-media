<!DOCTYPE html>
<html lang="{$ContentLocale}">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-186907414-1">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-186907414-1');
	</script>

	<% base_tag %>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	{$MetaTags(false)}
	{$PageMetaTags}

    <title><% if $MetaTitle %>{$MetaTitle}<% else %>{$Title}<% end_if %> &hyphen; {$SiteConfig.Title}</title>

    <link rel="manifest" href="{$ThemeDir}/images/favicon/site.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="{$ThemeDir}/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{$ThemeDir}/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{$ThemeDir}/images/favicon/favicon-16x16.png">

	<link rel="preload" href="{$ThemeDir}/fonts/rubik/rubik-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="{$ThemeDir}/fonts/rubik/rubik-v14-latin-500.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="{$ThemeDir}/fonts/karla/karla-v15-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="{$ThemeDir}/fonts/karla/karla-v15-latin-500.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="{$ThemeDir}/fonts/karla/karla-v15-latin-700.woff2" as="font" type="font/woff2" crossorigin="anonymous">

	<link rel="prefetch" href="{$ThemeDir}/css/main.css" as="style">
    <link rel="prefetch" href="{$ThemeDir}/dist/app.js" as="script">

	<link rel="stylesheet" href="{$ThemeDir}/css/main.css">
</head>
<body class="{$ClassName.ShortName} preload">

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

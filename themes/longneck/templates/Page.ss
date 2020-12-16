<!DOCTYPE html>
<html lang="{$ContentLocale}">
<head>
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
	
	<% include Header %>
	<main class="content--main">
		{$Layout}
	</main>
	<% include Footer %>

	<script src="{$ThemeDir}/dist/app.js"></script>

	<script>
		function initFreshChat() {
			window.fcWidget.init({
				token: "bddc5f64-dcfc-43de-9a73-4b439734d3be",
				host: "https://wchat.eu.freshchat.com"
			});
		}
		function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.eu.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
	</script>
</body>
</html>

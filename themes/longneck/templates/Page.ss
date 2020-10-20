<!DOCTYPE html>
<html lang="{$ContentLocale}">
<head>
	<% base_tag %>

	<title><% if $MetaTitle %>{$MetaTitle}<% else %>{$Title}<% end_if %> &hyphen; {$SiteConfig.Title}</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	{$MetaTags(false)}

	<link rel="shortcut icon" href="{$ThemeDir}/images/favicon.ico" />

	<% require themedCSS('main') %>
</head>
<body class="{$ClassName.ShortName}">
	<!-- <div class="background">
		<img class="image--cover" src="{$ThemeDir}/images/shapes/background-hexagon.svg" alt="">
	</div> -->
	
	<% include Header %>
	<main class="content--main">
		{$Layout}
	</main>
	<% include Footer %>

	<% require themedJavascript('dist/app') %>
</body>
</html>

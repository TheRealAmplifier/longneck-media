<% if BannerFunction == 'image' %>
	<div class="banner banner--{$BannerLayout}">
		<div class="banner__content">
			<div class="content--boxed">
				<% if ClassName.ShortName == 'HomePage' %>
					<h1 class="heading-1 heading--background">{$Title}</h1>
				<% else %>
					<h1 class="heading-1 heading--background">{$MenuTitle}</h1>
				<% end_if %>
				{$BannerText}
			</div>
		</div>
		<div class="banner__image">
			<picture>
				<source media="(min-width:1024px)" srcset="{$BannerImage.ScaleHeight(1000).Link}">
				<source media="(min-width:768px)" srcset="{$BannerImage.ScaleHeight(800).Link}">
				<img class="image--cover" src="{$BannerImage.ScaleHeight(600).Link}" alt="Banner afbeelding" loading="lazy">
			</picture>
		</div>
	</div>
<% else_if BannerFunction == 'text' %>
	<div class="title {$ExtraClasses} <% if ShapesPosition %>{$ShapesPosition}<% end_if %>">
		<div class="title__wrapper">
			<div class="title__inner">
				<h1 class="heading-1">{$MenuTitle}</h1>
				<% if BannerText %>
					{$BannerText}
				<% end_if %>
			</div>
		</div>
	</div>
<% end_if %>
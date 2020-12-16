<div class="banner">
	<div class="banner__content">
		<div class="content--boxed">
			<h1 class="heading-1 heading--background">{$MenuTitle}</h1>
			{$BannerText}
		</div>
	</div>
	<div class="banner__image">
		<% with BannerImage %>
			<img class="image--cover" src="{$Link}" alt="Banner afbeelding">
		<% end_with %>
	</div>
</div>
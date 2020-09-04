<section class="banner">
	<div class="banner__wrapper">
		<div class="banner__image">
			<% with BannerImage %>
				<img class="image--cover" src="{$Link}" alt="Banner afbeelding">
			<% end_with %>
		</div>
		<div class="banner__content">
			<div class="content--boxed">
				<h1 class="heading-1">{$MenuTitle}</h1>
				{$BannerText}
			</div>
		</div>
	</div>
	<span class="banner__indicator">
		{$SVG('arrow-down').customBasePath('themes/longneck/images/svg/').extraClass('image--cover')}
	</span>
</section>
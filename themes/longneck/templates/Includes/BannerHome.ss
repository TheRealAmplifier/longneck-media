<div class="title">
	<div class="title__wrapper--wide">
		<div class="title__inner">
			<h1 class="heading-1 heading--margin-none">{$BannerTitle}</h1>

			<% if BannerText %>
				{$BannerText}
			<% end_if %>
		</div>
	</div>
</div>
<div class="banner banner__home" >
	<div class="banner__wrapper">
		<div class="banner__image">
			<picture>
				<source media="(min-width:1024px)" srcset="{$BannerImage.ScaleHeight(1000).Link}">
				<source media="(min-width:768px)" srcset="{$BannerImage.ScaleHeight(800).Link}">
				<img class="image--cover" src="{$BannerImage.ScaleHeight(600).Link}" alt="Banner afbeelding" loading="lazy">
			</picture>
		</div>
	</div>
</div>
<div class="banner banner__home">
	<div class="banner__left">
		<div class="banner__content">
			<div class="content__box">
				<h1 class="heading-1 heading--background heading--margin-none">{$Title}</h1>
				<div class="banner__text">
					<% if BannerText %>
						{$BannerText}
					<% end_if %>
				</div>
				<div class="banner__text--small">
					<% if BannerTextSecondary %>
						{$BannerTextSecondary}
					<% end_if %>
				</div>
			</div>
		</div>
	</div>
	<div class="banner__right">
		<div class="banner__image">
			<picture>
				<source media="(min-width:1024px)" srcset="{$BannerImage.ScaleHeight(1000).Link}">
				<source media="(min-width:768px)" srcset="{$BannerImage.ScaleHeight(800).Link}">
				<img class="image--cover" src="{$BannerImage.ScaleHeight(600).Link}" alt="Banner afbeelding" loading="lazy">
			</picture>
		</div>
	</div>
</div>

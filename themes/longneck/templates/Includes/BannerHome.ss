<div class="banner">
	<div class="banner__left">
		<div class="banner__content">
			<div class="content__box">
				<h1 class="heading-1 heading--background">{$Title}</h1>
				{$BannerText}
			</div>
		</div>
		<div class="banner__bar"></div>
	</div>
	<div class="banner__right">
		<div class="banner__image">
			<picture>
				<source media="(min-width:1024px)" srcset="{$BannerImage.ScaleHeight(1000).Link}">
				<source media="(min-width:768px)" srcset="{$BannerImage.ScaleHeight(800).Link}">
				<img class="image--cover" src="{$BannerImage.ScaleHeight(600).Link}" alt="Banner afbeelding" loading="lazy">
			</picture>
		</div>
		<div class="banner__actions">
			<a class="action__button action__button--colored" href="{$BaseHref}diensten">Bekijk diensten</a>
			<a class="action__button action__button--colored-dark" href="{$BaseHref}contact">Contact opnemen</a>
		</div>
	</div>
</div>

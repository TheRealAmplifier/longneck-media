<div class="banner">
	<div class="banner__left">
		<div class="banner__content">
			<div class="content__box">
				<h1 class="heading-1 heading--background">{$Title}</h1>
				{$BannerText}
			</div>
		</div>
		<div class="banner__bar">	
			<% if $SiteConfig.SocialAccounts %>
				<nav class="banner__socials">
					<% loop SiteConfig.SocialAccounts %>
						<a class="social__link social__link--small social__link--horizontal" href="{$AccountLink}" target="_blank" rel="noreferrer">
							{$SVG($Icon.Name).addSubfolder('Social')}
						</a>
					<% end_loop %>
				</nav>
			<% end_if %>

			<span class="banner__indicator">
				<span class="indicator__icon">
					{$SVG('arrow-down').customBasePath('themes/longneck/images/svg/')}
				</span>
			</span>
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
		<div class="banner__actions">
			<a class="action__button action__button--colored" href="{$BaseHref}diensten">Bekijk diensten</a>
			<a class="action__button action__button--colored-dark" href="{$BaseHref}contact">Contact opnemen</a>
		</div>
	</div>
</div>

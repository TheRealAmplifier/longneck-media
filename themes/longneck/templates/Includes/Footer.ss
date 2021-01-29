<footer class="footer">

	<div class="footer__box">
		<div class="footer__navigation">
			<% if $MenuSet('Footer1').MenuItems %>
				<div class="footer__menu">
					<span class="navigation__title">{$SiteConfig.FooterTitle1}</span>
					<nav class="navigation--column">
						<% loop $MenuSet('Footer1').MenuItems %>
							<a class="navigation__link {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
						<% end_loop %>
					</nav>
				</div>
			<% end_if %>
			<% if $MenuSet('Footer2').MenuItems %>
				<div class="footer__menu">
					<span class="navigation__title">{$SiteConfig.FooterTitle2}</span>
					<nav class="navigation--column">
						<% loop $MenuSet('Footer2').MenuItems %>
							<a class="navigation__link {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
						<% end_loop %>
					</nav>
				</div>
			<% end_if %>
			<% if $MenuSet('Footer3').MenuItems %>
				<div class="footer__menu">
					<span class="navigation__title">{$SiteConfig.FooterTitle3}</span>
					<nav class="navigation--column">
						<% loop $MenuSet('Footer3').MenuItems %>
							<a class="navigation__link {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
						<% end_loop %>
					</nav>
				</div>
			<% end_if %>
		</div>
		<div class="footer__contact">
			<a class="contact__author" href="mailto:info@longneckmedia.nl">info@longneckmedia.nl</a>

			<% if $SiteConfig.SocialAccounts %>
				<nav class="copyright__socials navigation__socials--row">
					<% loop SiteConfig.SocialAccounts %>
						<a class="social__link--small" href="{$AccountLink}" target="_blank" rel="noreferrer">
							{$SVG($Icon.Name).addSubfolder('Social')}
						</a>
					<% end_loop %>
				</nav>
			<% end_if %>
		</div>
	</div>
	<div class="footer__copyright">
		<div class="copyright__wrapper">
			<span class="copyright__author">Copyright &copy; {$Now.Format('Y')} - {$SiteConfig.Title}</span>
		</div>
	</div>
</footer>



<!-- <footer class="footer">
	<div class="footer__wrapper">
		<div class="footer__top">
			<div class="footer__brand">
				<a href="{$BaseHref}" aria-label="Terug naar home">
					{$SVG('logo-longneck-text-horizontal-v2').customBasePath('themes/longneck/images/logo/').extraClass('image--cover')}
				</a>
			</div>
			<div class="footer__navigation">
				<% if $MenuSet('Footer1').MenuItems %>
					<div class="footer__menu">
						<span class="navigation__title">{$SiteConfig.FooterTitle1}</span>
						<nav class="navigation--column">
							<% loop $MenuSet('Footer1').MenuItems %>
								<a class="navigation__link {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
							<% end_loop %>
						</nav>
					</div>
				<% end_if %>
				<% if $MenuSet('Footer2').MenuItems %>
					<div class="footer__menu">
						<span class="navigation__title">{$SiteConfig.FooterTitle2}</span>
						<nav class="navigation--column">
							<% loop $MenuSet('Footer2').MenuItems %>
								<a class="navigation__link {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
							<% end_loop %>
						</nav>
					</div>
				<% end_if %>
				<% if $MenuSet('Footer3').MenuItems %>
					<div class="footer__menu">
						<span class="navigation__title">{$SiteConfig.FooterTitle3}</span>
						<nav class="navigation--column">
							<% loop $MenuSet('Footer3').MenuItems %>
								<a class="navigation__link {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
							<% end_loop %>
						</nav>
					</div>
				<% end_if %>
			</div>
		</div>
		<div class="footer__bottom">
			<span class="footer__copyright">Copyright &copy; {$Now.Format('Y')} - {$SiteConfig.Title}</span>

			<% if $SiteConfig.SocialAccounts %>
				<nav class="footer__socials navigation__socials--row">
					<% loop SiteConfig.SocialAccounts %>
						<a class="social__link--small" href="{$AccountLink}" target="_blank" rel="noreferrer">
							{$SVG($Icon.Name).addSubfolder('Social')}
						</a>
					<% end_loop %>
				</nav>
			<% end_if %>
		</div>
	</div>
</footer> -->
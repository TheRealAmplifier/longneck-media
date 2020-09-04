<footer class="footer">
	<div class="footer__wrapper">
		<div class="footer__top">
			<div class="footer__title">
				<h2 class="heading-2 heading--margin-small text--yellow">{$SiteConfig.Title}</h2>
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
			</div>
		</div>
		<div class="footer__bottom">
			<span class="footer__copyright">Copyright &copy; {$Now.Format('Y')} - {$SiteConfig.Title}</span>
		</div>
	</div>
</footer>
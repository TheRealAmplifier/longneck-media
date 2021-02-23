
<footer class="footer">
	<div class="footer__left">
		<div class="footer__top">
			<h2 class="footer__contact">
				<a class="contact__link" href="{$BaseHref}contact">
					<span class="contact__title">Contact <br /> opnemen.</span>
					<span class="contact__icon">
						{$SVG('send').customBasePath('themes/longneck/images/svg/').extraClass('image--cover')}
					</span>
				</a>
			</h2>
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
			<div class="footer__actions">
				<div class="footer__copyright">
					<p>&copy; {$Now.Format('Y')} - Longneck Media</p>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__right">
		<div class="footer__scroll">
			<div class="scroll__icon">
				{$SVG('up').customBasePath('themes/longneck/images/svg/').extraClass('image--cover')}
			</div>	
		</div>
		<a class="contact__author" href="mailto:info@longneckmedia.nl">info@longneckmedia.nl</a>
	</div>
</footer> 
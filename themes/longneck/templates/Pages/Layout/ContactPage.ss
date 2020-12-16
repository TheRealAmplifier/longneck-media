<% include TitleSection %>

<div class="contact">
	<div class="contact__wrapper">
		<div class="form__socials">
			<% if $SiteConfig.SocialAccounts %>
				<nav class="navigation__socials">
					<% loop SiteConfig.SocialAccounts %>
						<a class="social__link" href="{$AccountLink}" target="_blank" rel="noreferrer">
							{$SVG($Icon.Name).addSubfolder('Social')}
						</a>
					<% end_loop %>
				</nav>
			<% end_if %>
		</div>		
		<div class="form__box">
			<div class="form__intro">
				<% if FormTitle %>
					<h2 class="heading-2 ">{$FormTitle}</h2>
				<% end_if %>
				<% if FormIntro %>
					{$FormIntro}
				<% end_if %>
			</div>
			{$ContactForm}
		</div>
	</div>
</div>
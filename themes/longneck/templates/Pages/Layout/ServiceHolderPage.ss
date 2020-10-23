<div class="title title--centered">
	<div class="title__wrapper">
		<div class="title__inner">
			<h1 class="heading-1">{$MenuTitle}</h1>
			<% if BannerText %>
				{$BannerText}
			<% end_if %>
		</div>
	</div>
</div>

<div class="services">
	<div class="services__wrapper">
		<div class="services__blocks">
			<div class="block__column">
				<% loop Children %>
					<div class="block">
						<a class="block__link" href="{$Link}"></a>
						<div class="block__icon">
							{$SVG($Icon.Name).addSubfolder('Service-Icons')}
						</div>
						<div class="block__content">
							<h3 class="heading-3"> <a class="link__title" href="{$Link}">{$Title}</a> </h3>
							<p>
								{$Summary}
							</p>
						</div>
					</div>

					<% if MultipleOf(2) %>
						</div>
						<div class="block__column">
					<% end_if %>
				<% end_loop %>
		</div>
	</div>
</div>
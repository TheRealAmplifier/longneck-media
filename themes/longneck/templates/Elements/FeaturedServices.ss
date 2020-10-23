<div class="services">
	<div class="services__wrapper">
		<% if ShowTitle %>
			<div class="services__title content--wide">
				<h2 class="heading-2">{$Title}</h2>
			</div>
		<% end_if %>

		<div class="services__content content--narrowed">
			<div class="services__text">
				<div class="text__intro text--accentuated">
					{$TextIntro}
				</div>
			</div>
		</div>

		<% if LinkedServices %>
		<div class="services__blocks--narrow">
			<% loop LinkedServices %>
				<div class="block block--centered">
					<a class="block__link" href="{$Link}" aria-label="{$Title}"></a>
					<div class="block__icon">
						{$SVG($Icon.Name).addSubfolder('Service-Icons')}
					</div>
					<div class="block__content">
						<h4 class="heading-4 heading--margin-none">{$Title} </h4>
					</div>
				</div>
			<% end_loop %>
		</div>
	<% end_if %>
	</div>
</div>

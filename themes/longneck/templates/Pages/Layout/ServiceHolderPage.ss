<% include Banner ExtraClasses='title--centered', ShapesPosition='title--shapes-both' %>

<div class="services services--spacer">
	<div class="services__wrapper">
		<div class="services__blocks">
			<div class="block__column">
				<% loop Children %>
					<div class="block card--border-green card--shadow-boxed">
						<a class="block__link" href="{$Link}"></a>
						<div class="block__icon">
							{$SVG($Icon.Name).addSubfolder('Service-Icons')}
						</div>
						<div class="block__content">
							<h3 class="heading-3"> <a class="link__title" href="{$Link}">{$Title}</a> </h3>
							<% if Summary %>
								<p>{$Summary}</p>
							<% end_if %>
							<span class="card__arrow">
								<span class="card__arrow--inner">
									{$SVG('arrow-right-white').customBasePath('themes/longneck/images/svg/').extraClass('image--cover')}
								</span>
							</span>
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
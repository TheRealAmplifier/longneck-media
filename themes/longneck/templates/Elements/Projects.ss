<div class="projects projects--latest">
	<div class="projects__wrapper">
		<div class="projects__title content--wide">
			<% if ShowTitle %>
				<h2 class="heading-2 heading--uppercase">{$Title}</h2>
			<% end_if %>
		</div>

		<div class="projects__content content--narrowed">
			<div class="text__main">
				{$TextMain}			
			</div>
		</div>

		<div class="projects__list--column">
			<% loop $FeatureProjects %>
				<div class="card card--column">
					<a class="card__link" href="{$Link}"></a>
					<div class="card__image">
						<% with ThumbnailImage %>
							<img class="image--cover image--animated" src="{$Link}" alt="Thumbnail voor project - {$MenuTitle}">
						<% end_with %>
					</div>
					<div class="card__content">
						<h4 class="heading-4">{$MenuTitle}</h4>
						{$Summary}

						<span class="button__arrow">
							{$SVG('forward').customBasePath('themes/longneck/images/svg/')}
						</span>
					</div>
				</div>
			<% end_loop %>
		</div>
	</div>
</div>
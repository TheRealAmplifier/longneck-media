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

		<div class="projects__list">
			<% loop $FeatureProjects %>
				<div class="project">
					<a class="project__link" href="{$Link}">
						<div class="project__image">
							<% with ThumbnailImage %>
								<img class="image--cover image--animated" src="{$Link}" alt="Thumbnail voor project - {$MenuTitle}">
							<% end_with %>
						</div>
						<div class="project__content">
							<h4 class="heading-4">{$MenuTitle}</h4>
							{$Summary}
						</div>
					</a>
				</div>
			<% end_loop %>
		</div>
	</div>
</div>
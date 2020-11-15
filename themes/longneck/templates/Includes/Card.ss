<div class="card {$Type} {$ExtraClasses}">
	<a class="card__link" href="{$Link}">
		<div class="card__image">
			<% with ThumbnailImage %>
				<img class="image--cover image--animated" src="{$Link}" alt="Thumbnail {$MenuTitle}">
			<% end_with %>
		</div>
		<div class="card__content">
			<h4 class="heading-4">{$MenuTitle}</h4>
			{$Summary}
		</div>

		<% if ShowButton %>
			<span class="card__arrow">
				<span class="card__arrow--inner">
					{$SVG('arrow-right-white').customBasePath('themes/longneck/images/svg/').extraClass('image--cover')}
				</span>
			</span>
		<% end_if %>
	</a>
</div>
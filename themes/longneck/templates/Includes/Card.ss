<div class="card {$Type} {$ExtraClasses} <% if $Even %>card--even<% end_if %>">
	<a class="card__link" href="{$Link}">
		<div class="card__image">
			<% with ThumbnailImage %>
				<img class="image--cover image--animated" src="{$Link}" alt="Thumbnail {$MenuTitle}">
			<% end_with %>
		</div>
		<div class="card__content">
			<div class="card__meta">
				<% if BlogTags %>
				<div class="meta__tags">
					<% loop BlogTags %>
						<span class="meta__tag" style="background-color: {$Color}">{$Title}</span>
					<% end_loop %>
				</div>
				<% end_if %>
				<span class="meta__date">
					{$PublicationDate.Long}
				</span>
			</div>
	
			<h3 class="heading-3">{$MenuTitle}</h3>
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
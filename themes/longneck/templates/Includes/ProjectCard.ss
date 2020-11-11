<div class="card card--column card--shadow-boxed">
	<a class="card__link" href="{$Link}"></a>
	<div class="card__image">
		<% with ThumbnailImage %>
			<img class="image--cover image--animated" src="{$Link}" alt="Thumbnail voor project - {$MenuTitle}">
		<% end_with %>
	</div>
	<div class="card__content">
		<h3 class="heading-3">{$MenuTitle}</h3>
		{$Summary}
	</div>
</div>
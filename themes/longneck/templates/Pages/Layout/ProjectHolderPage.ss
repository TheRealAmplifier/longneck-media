<div class="title">
	<div class="title__wrapper">
		<div class="title__inner">
			<h1 class="heading-1">{$MenuTitle}</h1>
		</div>
	</div>
</div>

<div class="projects projects--all">
	<div class="projects__wrapper">
		<div class="projects__list--row">
			<% loop $Children %>
				<div class="card card--row">
					<a class="card__link" href="{$Link}" aria-label="card {$Title}"></a>
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
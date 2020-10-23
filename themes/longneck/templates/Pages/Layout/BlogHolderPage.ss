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

<!-- https://docs.silverstripe.org/en/4/developer_guides/templates/how_tos/pagination/ -->
<div class="articles">
	<div class="articles__wrapper">
		<% if AllBlogs %>
			<div class="articles__list--column">
				<% loop AllBlogs %>
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
			<% include Pagination CurrentLoop=$AllBlogs %>
		<% else %>
			<p>Er zijn geen berichten geplaatst.</p>
		<% end_if %>
	</div>
</div>
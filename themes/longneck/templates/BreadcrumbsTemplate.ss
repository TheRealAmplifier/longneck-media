<% if $Pages %>
<nav class="breadcrumb__navigation">
	<li>
		<a class="breadcrumb__link breadcrumb__link--icon" href="{$BaseHref}">
			<span class="breadcrumb__icon">
				{$SVG('home').customBasePath('themes/longneck/images/svg/').extraClass('image--cover')}
			</span>
		</a>
	</li>

	<% loop $Pages %>
	<li>
		<% if $Last %>
		<span class="breadcrumb__link breadcrumb__current">{$Title.XML}</span>
		<% else %>
		<a class="breadcrumb__link" href="{$Link}">{$MenuTitle.XML}</a>
		<% end_if %>
	</li>
	<% end_loop %>
</nav>
<% end_if %>
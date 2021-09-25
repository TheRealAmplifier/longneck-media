<% include Banner %>

<div class="articles">
	<div class="articles__wrapper">
		<% if AllBlogs %>
			<div class="articles__list--column">
				<% loop AllBlogs %>
					<% include Card Type="card--column", ExtraClasses="card--rounded card--shadow-boxed card--border-blue", ShowButton="true" %>
				<% end_loop %>
			</div>
			<% include Pagination CurrentLoop=$AllBlogs %>
		<% else %>
			<p>Er zijn geen berichten geplaatst.</p>
		<% end_if %>
	</div>
</div>

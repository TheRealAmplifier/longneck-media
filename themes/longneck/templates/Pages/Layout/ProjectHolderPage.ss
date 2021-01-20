<% include Banner ShapesPosition='title--shapes-both' %>

<div class="projects projects--all">
	<div class="projects__wrapper--narrow">
		<div class="projects__list--row">
			<% loop $Children %>
				<% include Card Type="card--row", ExtraClasses="card--shadow-boxed card--border-blue", ShowButton=true %> 
			<% end_loop %>
		</div>
	</div>
</div>
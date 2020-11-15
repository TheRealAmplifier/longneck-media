<% include TitleSection %>

<div class="projects projects--all">
	<div class="projects__wrapper--narrow">
		<div class="projects__list--column">
			<% loop $Children %>
				<% include Card Type="card--column", ExtraClasses="card--shadow-boxed card--border-blue", ShowButton="true" %>
			<% end_loop %>
		</div>
	</div>
</div>
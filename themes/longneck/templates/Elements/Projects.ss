<div class="projects projects--latest">
	<div class="projects__wrapper--medium">
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

		<div class="projects__list--column">
			<% if ShowSelectedProjects %>
				<% loop ProjectPages %>
					<% include ProjectCard %>
				<% end_loop %>
			<% else %>
				<% loop FeaturedProjects %>
					<% include ProjectCard %>
				<% end_loop %>
			<% end_if %>
		</div>
	</div>
</div>
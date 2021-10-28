<% include Banner %>

<div class="details">
	<div class="details__wrapper">
		<div class="details__box">
			<div class="details__list">
				{$ElementalArea}
			</div>
		</div>
	</div>
</div>

<div class="projects projects--latest">
	<div class="projects__wrapper--narrow">
		<div class="projects__title content--wide">
			<h2 class="heading-2 heading--uppercase">Bekijk meer projecten</h2>
		</div>
		<div class="projects__list--column">
			<% if RelatedProjects %>
				<% loop RelatedProjects %>
					<% include Card Type="card--column", ExtraClasses="card--rounded card--shadow-boxed card--border-blue", ShowButton="true" %>
				<% end_loop %>
			<% end_if %>
		</div>
	</div>
</div>

<% if $Parent.ShowContact %>
    <% include CallToAction Parent=$Parent %>
<% end_if %>

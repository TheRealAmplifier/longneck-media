<div class="services__wrapper">
	<% if ShowTitle %>
		<div class="title--wide">
			<h2 class="heading-2 heading--margin-small">{$Title}</h2>
		</div>
	<% end_if %>

	<div class="services__content content--narrowed">
		<div class="services__text">
			<div class="text__intro text--accentuated">
				{$TextIntro}
			</div>
		</div>
	</div>

	<% if Services %>
		<div class="services__blocks--narrow">
			<% loop Services %>
				<% include ServiceCard %>
			<% end_loop %>
		</div>
	<% end_if %>
</div>

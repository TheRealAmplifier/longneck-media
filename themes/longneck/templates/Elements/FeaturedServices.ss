<div class="services">
	<div class="services__wrapper">
		<% if ShowTitle %>
			<div class="services__title content--wide">
				<h2 class="heading-2">{$Title}</h2>
			</div>
		<% end_if %>

		<div class="services__content content--narrowed">
			<div class="services__text">
				<div class="text__intro text--accentuated">
					{$TextIntro}
				</div>
			</div>
		</div>

		<% if LinkedServices %>
		<div class="services__blocks--narrow">
			<% loop LinkedServices %>
				<% include ServiceCard %>
			<% end_loop %>
		</div>
	<% end_if %>
	</div>
</div>

<% include TitleSection ShapesPosition='title--shapes-both' %>

<div class="pricing pricing--all">
	<div class="pricing__wrapper">
		<div class="pricing__list">
			<% loop $Children %>
				<% include PriceCard %> 
			<% end_loop %>
		</div>
	</div>
</div>
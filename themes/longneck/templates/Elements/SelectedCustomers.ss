<div class="customers">
	<div class="customers__wrapper">
		<div class="customers__title">
			<% if ShowTitle %>
				<h2 class="heading-2 heading--uppercase">{$Title}</h2>
			<% end_if %>
		</div>
		<% if Customers %>
			<div class="customers__list">
				<% loop Customers %>
					<div class="customer">
						{$SVG($Logo.Name).addSubfolder('Customer-Logo').extraClass('image--cover')}				
					</div>
				<% end_loop %>
			</div>
		<% else %>
			<p>Er zijn geen klanten </p>
		<% end_if %>
	</div>
</div>
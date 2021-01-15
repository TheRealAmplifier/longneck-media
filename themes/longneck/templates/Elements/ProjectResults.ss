<div class="box__results">
	<div class="details__results">
		<div class="results__left">
			<% loop LeftImages %>
				<div class="image">
					<% with Image %>
						<img class="image--cover" src="{$Link}" alt="Afbeelding {$Name}" loading="lazy">
					<% end_with %>
				</div>
			<% end_loop %>
		</div>
		<div class="results__right">
			<% loop RightImages %>
				<div class="image">
					<% with Image %>
						<img class="image--cover" src="{$Link}" alt="Afbeelding {$Name}" loading="lazy">
					<% end_with %>
				</div>
			<% end_loop %>
		</div>
	</div>
</div>
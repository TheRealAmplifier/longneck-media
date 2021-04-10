<div class="box__stats">
	<% if Year %>
		<div class="stats__year">
			<span class="year__label">Jaar:</span>
			<span class="year__number">{$Year}</span>
		</div>
	<% end_if %>

	<% if Services %>
		<div class="stats__tags">
			<span class="tags__label">Diensten:</span>
			<div class="tags__box">
				<% loop Services %>
					<a class="tag__item" href="{$Link}">{$Title}</a>
				<% end_loop %>
			</div>
		</div>
	<% end_if %>
</div>
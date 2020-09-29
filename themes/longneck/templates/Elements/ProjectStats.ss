<div class="box__stats">
	<% if Year %>
		<div class="stats__year">
			<span class="year__label">Jaar:</span>
			<span class="year__number">{$Year}</span>
		</div>
	<% end_if %>

	<% if ProjectTags %>
		<div class="stats__tags">
			<span class="tags__label">Diensten:</span>
			<div class="tags__box">
				<% loop ProjectTags %>
					<span class="tag__item">{$Title}</span>
				<% end_loop %>
			</div>
		</div>
	<% end_if %>
</div>
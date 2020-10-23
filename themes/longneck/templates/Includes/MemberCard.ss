<div class="member">
	<div class="member__image">
		<% with Image %>
			<img class="image--cover" src="{$Link}" alt="foto van {$Title}" style="transform-origin: {$Percentage}% {$PercentageY}%" loading="lazy">
		<% end_with %>
	</div>
	<div class="member__content">
		<h3 class="heading-3">{$FirstName} {$LastName}</h3>
		{$Function}
	</div>
</div>
<div class="member">
	<div class="member__image">
		<% with Image %>
			<img class="image--cover" src="{$Link}" alt="Foto van {$Title}" style="transform-origin: {$Percentage}% {$PercentageY}%" loading="lazy">
		<% end_with %>
	</div>
	<div class="member__content">
		<h4 class="heading-4">{$FirstName} {$LastName}</h4>
		{$Function}
	</div>
</div>
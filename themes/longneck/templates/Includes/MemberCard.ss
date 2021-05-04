<div class="member">
	<div class="member__image">
		<% with Image %>
			<img class="image--cover" src="{$Link}" alt="Foto van {$Title}" loading="lazy">
		<% end_with %>
	</div>
	<div class="member__content">
		<h3 class="heading-3">{$FirstName} {$LastName}</h3>
		<% if Function %>
			<span class="member__function">{$Function}</span>
		<% end_if %>
		<% if Email %>
			<a class="member__email" href="mailto:{$Email}">{$Email}</a>
		<% end_if %>
	</div>
</div>
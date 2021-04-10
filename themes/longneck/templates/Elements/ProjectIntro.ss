<div class="box__intro">
	<div class="detail__image">
		<% with IntroImage %>
		<img class="image--cover" src="{$Link}" alt="Afbeelding voor {$Top.MenuTitle}" loading="lazy">
		<% end_with %>
	</div>	
	<div class="detail__content">
		<% if ShowTitle %>
			<h2 class="heading-2 ">{$Title}</h2>
		<% end_if %>	
		
		<% if TextIntro %>
			<div class="text__intro text--accentuated">
				{$TextIntro}
			</div>
		<% end_if %>

		<% if TextMain %>
			<div class="text__main">
				{$TextMain}			
			</div>
		<% end_if %>
	</div>
</div>
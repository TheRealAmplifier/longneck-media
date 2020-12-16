<div class="box__intro">
	<div class="detail__image">
		<% with IntroImage %>
		<img class="image--cover" src="{$Link}" alt="Afbeelding voor {$Top.MenuTitle}">
		<% end_with %>
	</div>	
	<div class="detail__content">
		<% if ShowTitle %>
			<h2 class="heading-2 ">{$Title}</h2>
		<% end_if %>	
		<div class="text__intro text--accentuated">
			{$TextIntro}
		</div>
		<div class="text__main">
			{$TextMain}		
		</div>
	</div>
</div>
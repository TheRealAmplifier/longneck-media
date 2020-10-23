<div class="content">
	<div class="content__wrapper">
		<% if HasBackgroundColor %>
			<div class="content__box">
				<% if Image %>
					<div class="box__image">
						<% with Image %>
							<img class="image--cover" src="{$Link}" alt="About afbeelding">
						<% end_with %>
					</div>
				<% end_if %>
				<div class="box__content">
					<% if ShowTitle %>
						<div class="cta__title">
							<h2 class="heading-2">{$Title}</h2>
						</div>
					<% end_if %>
					<div class="text__intro text--accentuated">
						{$TextIntro}
					</div>
					<div class="text__main">
						{$TextMain}			
					</div>
				</div>
			</div>
		<% else %>
			<% if ShowTitle %>
				<div class="cta__title">
					<h2 class="heading-2">{$Title}</h2>
				</div>
			<% end_if %>
			
			<div class="text__intro text--accentuated">
				{$TextIntro}
			</div>
			<div class="text__main">
				{$TextMain}			
			</div>
		<% end_if %>
	</div>
</div>
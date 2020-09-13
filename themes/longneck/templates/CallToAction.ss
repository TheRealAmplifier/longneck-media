<div class="cta <% if Image %>cta--image<% else %>cta--content<% end_if %>">
	<div class="cta__wrapper">


		<% if Image %>
			<div class="cta__image">
				<% with Image %>
					<img class="image--cover" src="{$Link}" alt="Call to action afbeelding">
				<% end_with %>
			</div>
		<% end_if %>

		<div class="cta__content">
			<% if ShowTitle %>
				<div class="cta__title">
					<h2 class="heading-2 heading--yellow">{$Title}</h2>
				</div>
			<% end_if %>
			<div class="cta__text">
				<div class="text__intro text--accentuated">
					{$TextIntro}
				</div>
				<div class="text__main">
					{$TextMain}			
				</div>

				<% if LinkedPage %>
					<div class="button__box">
						<% with LinkedPage %>
							<a class="button button--solid-yellow" href="{$Link}">
								<span class="button__text">{$Up.ButtonText}</span>
							</a>
						<% end_with %>
					</div>
				<% end_if %>
			</div>
		</div>
	</div>
</div>

	<div class="content <% if HasBackgroundColor %>content--background<% end_if %>">
		<div class="content__wrapper--wide">
			<div class="content__boxed content__boxed--{$Layout}">
				<div class="content__image">
					<% with Image %>
						<img class="image--cover" src="{$Link}" alt="Banner afbeelding" loading="lazy">
					<% end_with %>
				</div>
				<div class="content__body">
					<% if ShowTitle %>
						<div class="cta__title">
							<h2 class="heading-2 ">{$Title}</h2>
						</div>
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
		</div>
	</div>
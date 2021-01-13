<div class="content <% if HasBackgroundColor %>content--background<% end_if %>">
	<div class="content__wrapper--{$SectionWidth}">
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
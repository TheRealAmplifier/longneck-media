<div class="team">
	<div class="team__wrapper">
		<div class="section__title">
			<% if ShowTitle %>
				<div class="method__title">
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
		<div class="team__list">
			<% if ShowAllMembers %>
				<% loop AllMembers %>
					<% include MemberCard %>
				<% end_loop %>
			<% else %>
				<% loop TeamMembers %>
					<% include MemberCard %>
				<% end_loop %>
			<% end_if %>
		</div>
	</div>
</div>
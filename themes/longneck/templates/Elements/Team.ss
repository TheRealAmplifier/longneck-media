<div class="team background__particles--default">
	<div class="team__wrapper">
		<div class="section__title">
			<% if ShowTitle %>
				<div class="method__title">
					<h2 class="heading-2 ">{$Title}</h2>
				</div>
			<% end_if %>
			<div class="method__left">
				<div class="text__intro text--accentuated">
					{$TextIntro}
				</div>
				<div class="text__main">
					{$TextMain}			
				</div>
			</div>
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
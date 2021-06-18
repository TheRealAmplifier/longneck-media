<% if ClassName.ShortName == 'HomePage' %>
	<% include BannerHome %>
<% else %>
	<% include Banner ShapesPosition='title__shapes-left' %>
<% end_if %>

<div class="content content--spacer">
	<div class="content__wrapper--default">
		{$Content}
		{$Form}
	</div>
</div>
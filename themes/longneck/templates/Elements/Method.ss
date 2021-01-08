<div class="method <% if HasShadow %>method--shadow<% end_if %>">
	<div class="method__left">
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
	<div class="method__right">
		<h3 class="heading-3 heading--margin text--accentuated">Hoe wij werken:</h3>
		<% if MethodSteps %>
			<div class="method__list">
				<% loop MethodSteps %>
					<span class="method__step">
						<span class="method__number">{$Pos}</span>
						<span class="method__text">
							<a class="method__link" href="{$Target.Link}">{$Title}</a>
						</span>
					</span>
				<% end_loop %>
			</div>
		<% end_if %>
	</div>		
</div>
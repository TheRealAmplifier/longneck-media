<div class="content">
	<div class="content__wrapper--default">
		<% if ShowTitle %>
			<div class="method__title">
				<h2 class="heading-2 ">{$Title}</h2>
			</div>
		<% end_if %>
		<% if MethodSteps %>
			<div class="method__steps">
				<% if MethodSteps %>
					<div class="method__list">
						<% loop MethodSteps %>
							<span class="method__step">
								<span class="method__number">{$Pos}.</span>
								<h4 class="heading-4">{$Title}</h4>
								<% if Text %>
									{$Text}
								<% end_if %>
							</span>
						<% end_loop %>
					</div>
				<% end_if %>
			</div>		
		<% end_if %>		
	</div>
</div>
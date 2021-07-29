<div class="content">
	<div class="content__wrapper--small">
		<% if ShowTitle %>
			<h2 class="heading-2 ">{$Title}</h2>
		<% end_if %>
		<% if MethodSteps %>
			<div class="method__steps">
				<% if MethodSteps %>
					<div class="method__list">
						<% loop MethodSteps %>
							<span class="method__step">
								<div class="method__title">
									<h3 class="heading-3 heading--margin-none">			
										<span class="method__number">{$Pos}.</span>
										{$Title}</h3>
								</div>
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
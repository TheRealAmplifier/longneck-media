<div class="method <% if HasShadow %>method--shadow<% end_if %>">
	<div class="method__wrapper">
		<div class="method__boxed">
			<% if ShowTitle %>
				<div class="method__title">
					<h2 class="heading-2">{$Title}</h2>
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
			<div class="method__right">
				<h4 class="heading-4 text--accentuated">Hoe wij werken:</h4>
				<% if MethodSteps %>
					<div class="method__list">
						<% loop MethodSteps %>
							<span class="method__step">
								<span class="method__number">
									{$Pos}
								</span>
								<span class="method__name">
									<a class="method__link" href="{$Target.Link}">{$Title}</a>
								</span>
							</span>
						<% end_loop %>
					</div>
				<% end_if %>
			</div>		
		</div>
	</div>
</div>
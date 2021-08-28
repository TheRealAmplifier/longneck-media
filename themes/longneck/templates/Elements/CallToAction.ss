<% if CTAType == 'simple' %>
	<div class="cta cta--contact">
		<div class="cta__wrapper">
			<div class="cta__inner">
				<% if ShowTitle %>
					<h2 class="headign-2">{$Title}</h2>
				<% end_if %>

				<% if LinkedPage %>
					<div class="button__box button__box--centered button__box--spacer">
						<% with LinkedPage %>
							<a class="button button__solid--red" href="{$Link}">
                                <span class="button__text">{$Up.ButtonText}</span>
                            </a>
						<% end_with %>
					</div>
				<% end_if %>
			</div>
		</div>
	</div>
<% else_if CTAType == 'bar' %>
	<div class="cta cta--bar">
		<div class="cta__wrapper cta__wrapper--no-padding">
			<div class="cta__left">
				<% if ShowTitle %>
					<h2 class="headign-2">{$Title}</h2>
				<% end_if %>
			</div>
			<div class="cta__right">
				<% if LinkedPage %>
					<div class="button__box">
						<% with LinkedPage %>
                            <a class="button button__solid--white" href="{$Link}">
                                <span class="button__text">{$Up.ButtonText}</span>
                            </a>
						<% end_with %>
					</div>
				<% end_if %>
			</div>
		</div>
	</div>
<% end_if %>

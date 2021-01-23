<% if CTAType == 'simple' %>
	<div class="cta cta--contact">
		<div class="cta__wrapper">
			<div class="cta__inner">
				<% if ShowTitle %>
					<h2 class="heading-2 ">{$Title}</h2>
				<% end_if %>

				<% if $TextMain %>
					<p>{$TextMain}</p>
				<% end_if %>

				<% if LinkedPage %>
					<div class="button__box button__box--spacer">
						<% with LinkedPage %>
							<a class="link link--icon" href="{Link}">
								<span class="link__text">{$Up.ButtonText}</span>
								<span class="link__icon">
									{$SVG('forward-dark').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
								</span>
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
					<h3 class="heading-3">{$Title}</h3>
				<% end_if %>

				<div class="text__intro text--accentuated">
					{$TextIntro}
				</div>
				<div class="text__main">
					{$TextMain}			
				</div>
			</div>
			<div class="cta__right">
				<% if LinkedPage %>
					<div class="button__box">
						<% with LinkedPage %>
							<a class="button button--icon button--solid-white" href="{Link}">
								<span class="link__text">{$Up.ButtonText}</span>
								<span class="link__icon">
									{$SVG('forward-dark').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
								</span>
							</a>
						<% end_with %>
					</div>
				<% end_if %>
			</div>
		</div>
	</div>
<% else %>
	<div class="cta <% if CTAType == 'image' %>cta--image<% else %>cta--colored<% end_if %>">
		<div class="cta__wrapper">

			<% if CTAType == 'image' %>
				<% if Image %>
					<div class="cta__image">
						<% with Image %>
							<img class="image--cover" src="{$Link}" alt="Call to action afbeelding" loading="lazy">
						<% end_with %>
					</div>
				<% end_if %>
			<% end_if %>

			<div class="cta__content">
				<% if ShowTitle %>
					<h2 class="heading-2 ">{$Title}</h2>
				<% end_if %>
				<div class="cta__text">
					<div class="text__intro text--accentuated">
						{$TextIntro}
					</div>
					<div class="text__main">
						{$TextMain}			
					</div>

					<% if LinkedPage %>
						<div class="button__box button__box--spacer">
							<% with LinkedPage %>
								<a class="button button--solid-blue" href="{$Link}">
									<span class="button__text">{$Up.ButtonText}</span>
								</a>
							<% end_with %>
						</div>
					<% end_if %>
				</div>
			</div>
		</div>
	</div>
<% end_if %>
<div class="links__wrapper">
	<% if ShowTitle %>
		<div class="links__title">
			<div class="title__inner--wide">
				<h2 class="heading-2 heading--margin-none">{$Title}</h2>
			</div>
		</div>
	<% end_if %>

	<div class="links__content">
		<div class="links__text">
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
		<% if LinkedPages %>
			<div class="links__buttons">
				<% loop LinkedPages %>
					<a class="button button--solid-green button--icon" href="{$Link}">
						<span class="button__icon">
							{$SVG('arrow-right-white').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
						</span>
						<span class="button__text">{$Title}</span>
					</a>
				<% end_loop %>
			</div>
		<% end_if %>
	</div>
</div>

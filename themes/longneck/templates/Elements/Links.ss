<div class="links__wrapper">
	<% if ShowTitle %>
		<div class="links__title">
			<div class="title__inner">
				<h3 class="heading-3 heading--green">{$Title}</h3>
			</div>
		</div>
	<% end_if %>

	<div class="links__content">
		<div class="links__text">
			<div class="text__intro text--accentuated">
				{$TextIntro}
			</div>
			<div class="text__main">
				{$TextMain}			
			</div>
		</div>
		<% if LinkedPages %>
			<div class="links__buttons">
				<% loop LinkedPages %>
					<a class="button button--solid-yellow button--icon" href="{$Link}">
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

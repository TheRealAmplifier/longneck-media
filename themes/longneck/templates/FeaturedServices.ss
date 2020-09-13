<div class="services__wrapper">
	<% if ShowTitle %>
		<div class="services__title content--wide">
			<h2 class="heading-2 heading--yellow">{$Title}</h2>
		</div>
	<% end_if %>

	<div class="services__content content--narrowed">
		<div class="services__text">
			<div class="text__intro text--accentuated">
				{$TextIntro}
			</div>
		</div>
	</div>

	<% if LinkedServices %>
	<div class="services__blocks">
		<% loop LinkedServices %>
			<div class="block">
				<h3 class="heading-3"> <a class="link__title" href="{$Link}">{$Title}</a> </h3>
				<p>
					{$Summary.LimitWordCount(30, ...)}
				</p>
				<a class="block__link button button--wide button--icon button--solid-yellow" href="{$Link}">
					<span class="button__icon">
						{$SVG('arrow-right-white').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
					</span>
					<span class="button__text">Lees meer</span>
				</a>
			</div>
		<% end_loop %>
	</div>
<% end_if %>
</div>

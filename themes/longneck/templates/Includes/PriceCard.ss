<div class="block card--shadow-boxed">
	<div class="block__content">
		<a class="block__link" href="{$Link}" aria-label="{$Title}"></a>
		<h3 class="heading-3 heading--margin-none">{$Title}</h3>
		<% if Summary %>
			$Summary
		<% end_if %>

		<% if SellingPoints %>
			<div class="card__points">
				<% loop SellingPoints %>
				<span class="point__item">> {$Title}</span>
				<% end_loop %>
			</div>
		<% end_if %>

		<% if Price %>
			<span class="card__price">€ {$Price}</span>
		<% end_if %>
		<div class="button__box button__box--spacer">
			<a class="button button--icon button--solid-blue" href="{$Link}">
				<span class="link__text">Bekijk pakket</span>
				<span class="link__icon">
					{$SVG('forward').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
				</span>
			</a>
		</div>
	</div>
</div>
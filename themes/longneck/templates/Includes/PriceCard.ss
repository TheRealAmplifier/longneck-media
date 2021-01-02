<div class="block block__pricing card--shadow-boxed">
	<div class="block__content">
		<h3 class="heading-3 heading--margin-none">
			<a href="{$Link}">{$Title}</a>
		</h3>
		<% if Summary %>
			<div class="text--accentuated-soft">
				{$Summary}
			</div>
		<% end_if %>

		<% if SellingPoints %>
			<ul class="card__points">
				<% loop SellingPoints %>
				<li class="point__item">{$Title}</li>
				<% end_loop %>
			</ul>
		<% end_if %>

		<% if Price %>
			<span class="card__price">Vanaf €{$Price}</span>
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
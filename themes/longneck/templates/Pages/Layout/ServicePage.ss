<% include TitleSection ShapesPosition='title--shapes-right' %>

<div class="details">
	<div class="details__wrapper">
		<% include BreadCrumbs %>
		
		<div class="details__box">
			<div class="details__list">
				{$ElementalArea}
			</div>
		</div>
	</div>
</div>

<div class="services services--related">
	<div class="services__wrapper">
		<div class="services__title content--wide">
			<h2 class="heading-2 heading--margin-none">Onze andere diensten</h2>
		</div>
		<% if RelatedServices %>
			<div class="services__blocks--narrow">
				<% loop RelatedServices %>
					<% include ServiceCard %>
				<% end_loop %>
			</div>
		<% end_if %>
	</div>
</div>

<div class="elements">
	{$ElementalArea}
</div>

<% if ShowContact %>
	<div class="cta cta--contact">
		<div class="cta__wrapper">
			<div class="cta__inner">
				<% if ContactTitle %>
					<h2 class="heading-2">{$ContactTitle}</h2>
				<% end_if %>
				<% if $ContactText %>
					<p>{$ContactText}</p>
				<% end_if %>

				<% if ContactLinkTarget %>
					<a class="link link--icon" href="{$ContactLinkTarget.Link}">
						<span class="link__text">{$ContactLinkText}</span>
						<span class="link__icon">
							{$SVG('forward-dark').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
						</span>
					</a>
				<% end_if %>
			</div>
		</div>
	</div>
<% end_if %>
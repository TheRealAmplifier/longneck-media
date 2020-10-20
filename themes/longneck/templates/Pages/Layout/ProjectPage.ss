<section class="title">
	<div class="title__wrapper">
		<h1 class="heading-1">{$MenuTitle}</h1>
	</div>
</section>

<section class="details">
	<div class="details__wrapper">
		<% include BreadCrumbs %>
		
		<div class="details__box">
			<div class="details__list">
				{$ElementalArea}
			</div>
		</div>
	</div>
</section>

<% if $Parent.ShowContact %>
	<% with Parent %>
		<section class="cta cta--contact">
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
		</section>
	<% end_with %>
<% end_if %>
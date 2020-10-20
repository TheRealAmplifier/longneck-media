<section class="title">
	<div class="title__wrapper">
		<div class="title__inner">
			<h1 class="heading-1">{$MenuTitle}</h1>
			<% if BannerText %>
				{$BannerText}
			<% end_if %>
		</div>
	</div>
</section>

<section class="about">
	<div class="about__wrapper">
		<div class="about__box">
			<div class="about__content">
				<% if AboutTitle %>
					<h2 class="heading-2">{$AboutTitle}</h2>
				<% end_if %>
				<% if AboutText %>
					{$AboutText}
				<% end_if %>
			</div>
		</div>
	</div>
</section>

<section class="team">
	<div class="team__wrapper">
		<div class="section__title">
			<h2 class="heading-2">{$TeamTitle}</h2>
			{$TeamText}
		</div>
		<div class="team__list">
			<% if AllMembers	%>
				<% loop AllMembers %>
				<div class="member">
					<div class="member__image">
						<% with Image %>
							<img class="image--cover" src="{$Link}" alt="foto van {$Title}" style="transform-origin: {$Percentage}% {$PercentageY}%" loading="lazy">
						<% end_with %>
					</div>
					<div class="member__content">
						<h3 class="heading-3">{$FirstName} {$LastName}</h3>
						{$Function}
					</div>
				</div>
				<% end_loop %>
			<% else %>
				<p>Er zijn geen teamleden gevonden</p>
			<% end_if %>
			
		</div>
	</div>
</section>
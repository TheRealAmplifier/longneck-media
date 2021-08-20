<header class="header">
	<div class="header__wrapper">
		<div class="header__brand">
			<div class="brand__image">
				<a href="{$BaseHref}" aria-label="Terug naar home">
					{$SVG('longneck-logo').customBasePath('themes/longneck/images/logo/').extraClass('image--cover')}
				</a>
			</div>
		</div>
		<!-- <div class="header__navigation">
			<nav class="navigation navigation--row">
				<% loop $MenuSet('Primary').MenuItems %>
					<a class="navigation__link navigation__link--main {$LinkingMode} <% if ButtonStyle %>navigation__link--button<% end_if %>" href="{$Link}">{$MenuTitle}</a>
				<% end_loop %>
			</nav>
        </div> -->
        <div class="header__toggle <% if not $SiteConfig.Phone %>action--spacer<% end_if %>">
            <div class="toggle__icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="toggle__text">
                Menu
            </div>
        </div>
	</div>
</header>

<header class="header">
	<div class="header__wrapper">
		<div class="header__brand">
			<div class="brand__image">
				<img src="" alt="">
			</div>
		</div>
		<div class="header__navigation">
			<nav class="navigation navigation--row">
				<% loop $MenuSet('Primary').MenuItems %>
					<a class="navigation__link {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
				<% end_loop %>
			</nav>
		</div>
	</div>	
</header>
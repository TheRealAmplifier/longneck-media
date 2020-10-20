<% if $CurrentLoop.MoreThanOnePage %>
	<div class="pagination">
		<a class="pagination__previous <% if not $CurrentLoop.NotFirstPage %>disabled<% end_if %>" href="{$CurrentLoop.PrevLink}">
			<div class="pagination__icon">
				{$SVG('chevron-left').customBasePath('themes/longneck/images/svg/')}
			</div>
		</a>
		<nav class="pagination__menu">
			<% loop $CurrentLoop.PaginationSummary %>
				<li class="pagination__item">
					<% if $CurrentBool %>
						<span class="pagination__current">
							{$PageNum}
						</span>
					<% else %>
						<% if $Link %>
							<a class="pagination__link" href="{$Link}">{$PageNum}</a>
						<% else %>
							<span class="pagination__inbetween">

							</span>...
						<% end_if %>
					<% end_if %>
				</li>
			<% end_loop %>
		</nav>
		<a class="pagination__next <% if not $CurrentLoop.NotLastPage %>disabled<% end_if %>" href="{$CurrentLoop.NextLink}">
			<div class="pagination__icon">
				{$SVG('chevron-right').customBasePath('themes/longneck/images/svg/')}
			</div>
		</a>
	</div>
<% end_if %>
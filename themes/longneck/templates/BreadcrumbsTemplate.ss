<% loop Pages %>
    <% if $First %>
        <span class="breadcrumb__link">
            <a href="{$AbsoluteURL}">Home</a>
            <span class="breadcrumb__separator">></span>
        </span>
    <% end_if %>
    <% if $Last %>
        <span class="breadcrumb__current"> {$MenuTitle.XML}</span>
    <% else %>
        <span class="breadcrumb__link">
            <a href="{$Link}">{$MenuTitle}</a>
            <span class="breadcrumb__separator">></span>
        </span>
    <% end_if %>
<% end_loop %>

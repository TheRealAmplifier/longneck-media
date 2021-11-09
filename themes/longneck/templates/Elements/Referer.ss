<div class="referer">
    <div class="referer__wrapper">
        <div class="referer__content">
            <% if ShowTitle %>
                <div class="title--wide">
                    <h2 class="heading-2 heading--margin-small">{$Title}</h2>
                </div>
            <% end_if %>
            <% if TextMain %>
                <div class="text__main text--small">
                    {$TextMain}
                </div>
            <% end_if %>
        </div>
        <div class="referer__list">
            <% if Pages %>
                <% loop Pages %>
                    <% include Target %>
                <% end_loop %>
            <% else %>
                <p>Er zijn geen pagina's beschikbaar.</p>
            <% end_if %>
        </div>
    </div>
</div>

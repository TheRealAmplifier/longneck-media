<div class="referer">
    <div class="referer__wrapper--wide">
        <div class="referer__content">
            <div class="referer__title">
                <h2 class="heading-2 heading--margin-none">{$Title}</h2>
            </div>
            <% if TextIntro %>
                <div class="referer__intro">
                    {$TextIntro}
                </div>
            <% end_if %>
        </div>
        <div class="referer__list--three">
            <% if Services %>
                <% loop Services %>
                    <% include Target %>
                <% end_loop %>
            <% else %>
                <p>Er zijn geen pagina's beschikbaar.</p>
            <% end_if %>
        </div>
    </div>
</div>

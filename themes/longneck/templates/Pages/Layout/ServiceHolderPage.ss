<% include Banner %>

<div class="referer">
    <div class="referer__wrapper--wide">
        <div class="referer__content">
            <div class="referer__title">
                <h2 class="heading-2 heading--margin-none">Bekijk wat wij voor je kunnen betekenen.</h2>
            </div>
            <div class="referer__intro">
                Overige diensten wie wij bieden om het maximale uit je website te halen.
            </div>
        </div>
        <div class="referer__list--three">
            <% if Children %>
                <% loop Children %>
                    <div class="target">
                        <a class="target__link" href="{$Link}">
                            <span class="target__title">{$Title}</span>
                            <% if Summary %>
                                <span class="target__description">
                                {$Summary}
                                </span>
                            <% end_if %>
                        </a>
                    </div>
                <% end_loop %>
            <% else %>
                <p>Er zijn geen pagina's beschikbaar.</p>
            <% end_if %>
        </div>
    </div>
</div>

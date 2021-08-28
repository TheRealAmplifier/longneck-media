<div class="referer">
    <div class="referer__wrapper">
        <div class="referer__content">
            <% if ShowTitle %>
                <div class="title--wide">
                    <h2 class="heading-2 heading--margin-none">{$Title}</h2>
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

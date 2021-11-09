<div class="title title--centered title--spacer-small">
    <div class="title__wrapper">
        <div class="title__inner">
            <h1 class="heading-1 heading--margin-none">{$MenuTitle}</h1>
            <div class="banner__content">
                <% if BannerText %>
                    {$BannerText}
                <% end_if %>

                <div class="title__meta">
                    <% if Date %>
                        <span class="meta__date meta--spacer">Gepubliceerd op {$Date.Long}</span>
                    <% end_if %>

                    <% if BlogTags %>
                        <div class="meta__tags">
                            <% loop BlogTags %>
                                <span class="meta__tag" style="background-color: {$Color}">{$Title}</span>
                            <% end_loop %>
                        </div>
                    <% end_if %>
                </div>

                <div class="title__indicator">
                    <div class="indicator__icon">
                        {$SVG('scroll-indicator-small').customBasePath('themes/longneck/images/svg/').extraClass('image--cover')}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner">
    <div class="banner__wrapper">
        <div class="banner__image">
            <picture>
                <source media="(min-width:1024px)" srcset="{$ThumbnailImage.ScaleHeight(1000).Link}">
                <source media="(min-width:768px)" srcset="{$ThumbnailImage.ScaleHeight(800).Link}">
                <img class="image--cover" src="{$ThumbnailImage.ScaleHeight(600).Link}" alt="Banner afbeelding" loading="lazy">
            </picture>
        </div>
    </div>
</div>

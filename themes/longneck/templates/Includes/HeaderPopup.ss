<div class="navigation__popup">
    <div class="popup__content">
        <div class="popup__brand">
            <img class="image--contain "src="{$ThemeDir}/images/logo/longneck-brand-blue.svg" alt="Longneck Media logo">
        </div>
        <div class="popup__navigation">
            <% if $MenuSet('Primary').MenuItems %>
                <nav class="navigation navigation--column">
                    <% loop $MenuSet('Primary').MenuItems %>
                        <a class="navigation__link navigation__link--big {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
                    <% end_loop %>
                </nav>
            <% end_if %>
            <% if $MenuSet('Secondary').MenuItems %>
                <nav class="navigation navigation--column navigation__spacer--top">
                    <% loop $MenuSet('Secondary').MenuItems %>
                        <a class="navigation__link navigation__link--medium {$LinkingMode}" href="{$Link}">{$MenuTitle}</a>
                    <% end_loop %>
                </nav>
            <% end_if %>
        </div>

        <% if $SiteConfig.SocialAccounts %>
            <nav class="popup__socials">
                <% loop SiteConfig.SocialAccounts %>
                    <a class="social__link social__link--small social__link--horizontal" href="{$AccountLink}" target="_blank" rel="noreferrer">
                        {$SVG($Icon.Name).addSubfolder('Social')}
                    </a>
                <% end_loop %>
            </nav>
        <% end_if %>
    </div>
</div>

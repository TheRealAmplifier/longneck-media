<% with Parent %>
    <div class="cta cta--bar bar--gray">
        <div class="cta__wrapper cta__wrapper--no-padding">
            <div class="cta__left">
                <% if ContactTitle %>
                    <h3 class="heading-3 heading--margin-small">{$ContactTitle}</h3>
                <% end_if %>
                <% if ContactText %>
                    <p>{$ContactText}</p>
                <% end_if %>
            </div>
            <div class="cta__right">
                <% if ContactLinkTarget %>
                    <div class="button__box button__box--centered">
                        <a class="button button__solid--blue" href="{$ContactLinkTarget.Link}">
                            <span class="button__text">{$ContactLinkText}</span>
                        </a>
                    </div>
                <% end_if %>
            </div>
        </div>
    </div>
<% end_with %>

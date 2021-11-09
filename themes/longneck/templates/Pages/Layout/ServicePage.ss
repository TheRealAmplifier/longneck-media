<% include Banner %>

<div class="details__list">
	{$ElementalArea}
</div>

<div class="referer">
    <div class="referer__wrapper--wide">
        <div class="referer__content">
            <div class="referer__title">
                <h2 class="heading-2 heading--margin-none">Overige diensten</h2>
            </div>
            <div class="referer__intro">
                Overige diensten wie wij bieden om het maximale uit je website te halen.
            </div>
        </div>
        <div class="referer__list--three">
            <% if RelatedServices %>
                <% loop RelatedServices %>
                   <% include Target %>
                <% end_loop %>
            <% else %>
                <p>Er zijn geen pagina's beschikbaar.</p>
            <% end_if %>
        </div>
    </div>
</div>

<% if $Parent.ShowContact %>
    <% include CallToAction Parent=$Parent %>
<% end_if %>

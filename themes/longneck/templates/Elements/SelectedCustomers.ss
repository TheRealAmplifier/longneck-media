<div class="customers">
	<div class="customers__wrapper">
        <div class="customers__content">
            <div class="customers__title">
                <span class="title__pretitle">Onze partners</span>
                <h2 class="heading-2 heading--margin-none">{$Title}</h2>
                <div class="button__box button__box--right button__box--spacer">
                    <a class="link link--icon link--small link--primary" href="#">
                        <span class="link__text">Bekijk projecten</span>
                        <span class="link__icon">
                            {$SVG('forward-blue').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="customers__body">
            <% if Customers %>
                <div class="customers__list">
                    <% loop Customers %>
                        <div class="customer">
                            <div class="customer__logo">
                                {$SVG($Logo.Name).addSubfolder('Customer-Logo').extraClass('image--fitted')}
                            </div>
                        </div>
                    <% end_loop %>
                </div>
            <% else %>
                <p>Er zijn geen klanten </p>
            <% end_if %>
        </div>
	</div>
</div>

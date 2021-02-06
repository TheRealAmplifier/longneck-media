<form class="form custom--validation" {$FormAttributes}>
	$Fields.dataFieldByName(SecurityID)
	
	<% if $Message %>
		<div class="form__message form__message--{$MessageType}">
			<p>{$Message}</p>
		</div>
	<% else %>
		<div class="form__fields">
			<div class="form__row">
				<div class="form__group form__group--half form__group--spacer">
					<label class="form__label">Type project</label>
					{$Fields.dataFieldByName(ProjectType)}
				</div>
				<div class="form__group form__group--half form__group--spacer">
					<label class="form__label">Gewenst CMS systeem</label>
					{$Fields.dataFieldByName(CMSType)}
				</div>
			</div>
			<div class="form__row">
				<div class="form__group form__group--half">
					<label class="form__label">Schatting van aantal pagina's</label>
					{$Fields.dataFieldByName(PageAmount)}
				</div>
			</div>
			<div class="form__row">
				<div class="form__group">
					<label class="form__label">Omschrijving van de opdracht</label>
					{$Fields.dataFieldByName(Description)}
				</div>
			</div>
			<div class="form__row">
				<div class="form__group">
					<label class="form__label">Gewenste diensten</label>
					{$Fields.dataFieldByName(ServicesType)}
				</div>
			</div>
			<div class="form__row form--spacer">
				<div class="form__group form__group--half form__group--spacer">
					<label class="form__label">Voornaam</label>
					{$Fields.dataFieldByName(FirstName)}
				</div>
				<div class="form__group form__group--half">
					<label class="form__label">Achternaam</label>
					{$Fields.dataFieldByName(LastName)}
				</div>
			</div>
			<div class="form__row">
				<div class="form__group">
					<label class="form__label">E-mailadres</label>
					{$Fields.dataFieldByName(Email)}
				</div>
			</div>
			<div class="form__row">
				<div class="form__group">
					<label class="form__label">Organisatie</label>
					{$Fields.dataFieldByName(Company)}
				</div>
			</div>
			<div class="form__row">
				<span>{$Fields.dataFieldByName(Captcha)}</span>
				<div class="form__protection text--gray">
					<span class="protection__icon">
						<a href="//www.google.com/recaptcha/about/" target="_blank" rel="noreferrer">
							{$SVG('recaptcha-logo').customBasePath('themes/longneck/images/svg/').extraClass('image--cover icon--arrow')}
						</a>
					</span>
					<span class="protection__text">
						<p>Lees de <a href="//policies.google.nl/privacy?hl=nl" target="_blank" rel="noreferrer">Privacy Verklaring</a> of de <a href="//policies.google.com/terms?hl=nl" target="_blank" rel="noreferrer">Algemene voorwaarden</a> van Google.</p>
					</span>
				</div>
			</div>
		</div>
		<div class="form__actions">
			<% loop $Actions %>
				{$Field}
			<% end_loop %>
		</div>
	<% end_if %>
</form>
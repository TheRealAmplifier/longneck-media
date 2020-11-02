<?php

namespace Pages;

use DataObject\ContactSubmission;
use PageController;
use SilverStripe\Control\Email\Email;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;

class QuotationPageController extends PageController {
	private static $allowed_actions = [
		'QuotationForm'
	];

	protected function init() {
		parent::init();
	}

	public function QuotationForm() {
		$fields = new FieldList(
			DropdownField::create('ProjectType', '', [
				'website'								=> 'Website',
				'webshop'								=> 'Webshop'
			]),
			DropdownField::create('ServicesType', '', [
				'ontwerp'								=> 'Ontwerp',
				'ontwikkeling'					=> 'Ontwikkeling',
				'ontwerp-ontwikkeling' 	=> 'Ontwerp ontwikkeling',
			]),
			DropdownField::create('CMSType', '', [
				'silverstripe'					=> 'Silverstripe',
				'wordpress'							=> 'Wordpress',
				'other' 								=> 'Geen voorkeur',
			]),	
			DropdownField::create('PageAmount', '', [
				'small' 			=> '1 - 10 pagina\'s', 
				'medium'			=> '10 - 20 pagina\'s', 
				'large'				=> '20 - 30 pagina\'s', 
				'other'				=> '30+ pagina\'s', 
			]),	
			TextareaField::create('Description'),
			TextField::create('FirstName'),
			TextField::create('LastName'),
			EmailField::create('Email'),
			TextField::create('Company'),
			TextField::create('Subject')
		);

		$actions = new FieldList(
			FormAction::create('sendMessage', 'Versturen')
		);

		$validator = new RequiredFields([
			'FirstName',
			'LastName',
			'Email',
			'Subject',
			'Message'
		]);

		$form = new Form($this, 'QuotationForm', $fields, $actions, $validator);
		$form->setTemplate('Form//QuotationForm');

		return $form;
	}

	// public function sendMessage($data, $form) {
	// 	// $contactName = "{$data['FirstName']} {$data['LastName']}";

	// 	// $newContact = new ContactSubmission();
	// 	// $newContact->Title = $contactName;
	// 	// $newContact->FirstName = $data['FirstName'];
	// 	// $newContact->LastName = $data['LastName'];
	// 	// $newContact->Email = $data['Email'];
	// 	// $newContact->Company = $data['Company'];
	// 	// $newContact->Subject = $data['Subject'];
	// 	// $newContact->Message = strip_tags($data['Message']);
	// 	// $newContact->write();

	// 	// if($newContact) {
	// 	// 	$emailSent = $this->sendEmail($contactName, $newContact);

	// 	// 	if( $emailSent == true ) {
	// 	// 		$form->sessionMessage('Je bericht is succesvol ontvangen!', 'success');
	// 	// 		return $this->redirectBack();
	// 	// 	}
	// 	// }

	// 	// $form->sessionMessage('Er is iets mis gegaan, probeer opnieuw', 'bad');
	// 	// return $this->redirectBack();
	// }

	public function sendEmail($contactName, $data) {
		$emailStatus = false;

		$emailAdmin = Email::create()
			->setData([
				'MailData' => $data
			])
			->setFrom('contact@longneckmedia.nl')
			->setTo('info@jeroenpielage.nl')
			->setSubject('Nieuw bericht van: ' . $contactName)
			->setHTMLTemplate('Email\\ContactSubmission');
		$emailAdmin->send();

		if( $emailAdmin ) {
			$emailStatus = true;
		}

		return $emailStatus;
	}
}

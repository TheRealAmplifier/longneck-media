<?php

namespace Pages;

use PageController;
use DataObject\QuotationSubmission;
use SilverStripe\Control\Email\Email;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;

class QuotationPageController extends PageController
{
    private static $allowed_actions = [
        'QuotationForm'
    ];

    protected function init()
    {
        parent::init();
    }

    public function QuotationForm()
    {
        $fields = new FieldList(
            DropdownField::create('ProjectType', '', [
                'website' => 'Website',
                'webshop' => 'Webshop'
            ]),
            CheckboxSetField::create('ServicesType', '', [
                'ontwerp' => 'Ontwerp',
                'ontwikkeling' => 'Ontwikkeling',
                'zoekmachineoptimalisatie' => 'Zoekmachineoptimalisatie',
                'onderhoud' => 'Onderhoud',
                'hosting' => 'Hosting'
            ], "ontwerp")->addExtraClass('form__checkboxes'),
            DropdownField::create('CMSType', '', [
                'silverstripe' => 'SilverStripe',
                'wordpress' => 'Wordpress',
                'anders' => 'Geen voorkeur'
            ]),
            DropdownField::create('PageAmount', '', [
                'small' => '1 - 10 pagina\'s',
                'medium' => '10 - 20 pagina\'s',
                'large' => '20 - 30 pagina\'s',
                'anders' => '30+ pagina\'s'
            ]),
            TextareaField::create('Description'),
            TextField::create('FirstName'),
            TextField::create('LastName'),
            EmailField::create('Email'),
            TextField::create('Company')
        );

        $actions = new FieldList(
            FormAction::create('sendMessage', 'Versturen')
        );

        $validator = new RequiredFields([
            'ProjectType',
            'ServicesType',
            'CMSType',
            'PageAmount',
            'Description',
            'FirstName',
            'LastName',
            'Email',
            'Message'
        ]);

        $form = new Form($this, 'QuotationForm', $fields, $actions, $validator);
        $form->enableSpamProtection()->Fields()->fieldByName('Captcha');
        $form->setTemplate('Form//QuotationForm');

        return $form;
    }

    public function sendMessage($data, $form)
    {
        $contactName = "{$data['FirstName']} {$data['LastName']}";
        $serviceArray = [];

        $newQuotation = new QuotationSubmission();

        $newQuotation->Title = $contactName;
        $newQuotation->FirstName = $data['FirstName'];
        $newQuotation->LastName = $data['LastName'];
        $newQuotation->Email = $data['Email'];
        $newQuotation->Company = $data['Company'];
        $newQuotation->Description = strip_tags($data['Description']);

        $newQuotation->ProjectType = $data['ProjectType'];

        $newQuotation->ServicesType = implode(", ", $data['ServicesType']);
        $newQuotation->CMSType = $data['CMSType'];
        $newQuotation->PageAmount = $data['PageAmount'];

        $newQuotation->write();

        if ($newQuotation) {
            $emailSent = $this->sendEmail($contactName, $newQuotation);

            if ($emailSent == true) {
                $form->sessionMessage('De offerteaanvraag is succesvol door ons ontvangen. Je ontvangt de offerte binnen drie werkdagen op ' . $newQuotation->Email . '.', 'success');
                return $this->redirect($this->AbsoluteLink() . '#form');
            }
        }

        $form->sessionMessage('Er is iets mis gegaan, probeer opnieuw', 'bad');
        return $this->redirectBack();
    }

    public function sendEmail($contactName, $data)
    {
        $emailStatus = false;

        $emailAdmin = Email::create()
            ->setData([
                'MailData' => $data
            ])
            ->setFrom('noreply@longneckmedia.nl', 'Longneck Media')
            ->setTo('offerte@longneckmedia.nl')
            ->setSubject('Nieuw bericht van: ' . $contactName)
            ->setHTMLTemplate('Email\\QuotationSubmission');
        $emailAdmin->send();

        if ($emailAdmin) {
            $emailStatus = true;
        }

        return $emailStatus;
    }
}

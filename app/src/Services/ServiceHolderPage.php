<?php 
namespace {
	class ServiceHolderPage extends Page {
		private static $singular_name = 'Diensten overzicht';

		private static $db = [

		];

		private static $allowed_children = [
			'ServicePage'
		];
	}
}
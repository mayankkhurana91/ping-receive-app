<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "introduction".
 *
 * Auto generated | Identifier: a01769f0ea68fa5eb7cc87c2fe5c6ed2
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'The official Introduction Package',
	'description' => 'This package delivers a new website (page tree) and shows all out-of-the-box features of TYPO3, and includes a theme based on Twitter Bootstrap 3, and a style editor to customize the design. Sample backend groups are added',
	'category' => 'distribution',
	'version' => '3.0.1',
	'state' => 'stable',
	'clearcacheonload' => true,
	'author' => 'Introduction Package Team',
	'author_email' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '8.0.0-9.0.99',
			'bootstrap_package' => '8.0.0-8.99.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'uploadfolder' => false,
	'createDirs' => NULL,
	'author_company' => NULL,
	'_md5_values_when_last_written' => 'a:94:{s:13:"composer.json";s:4:"dfa3";s:14:"Configuration/";s:4:"d41d";s:19:"Configuration/Form/";s:4:"d41d";s:39:"Configuration/Form/CustomFormSetup.yaml";s:4:"ab90";s:17:"ext_localconf.php";s:4:"6603";s:15:"Initialisation/";s:4:"d41d";s:21:"Initialisation/Files/";s:4:"d41d";s:28:"Initialisation/Files/images/";s:4:"d41d";s:36:"Initialisation/Files/images/streets/";s:4:"d41d";s:61:"Initialisation/Files/images/streets/geran-de-klerk-136351.jpg";s:4:"f71e";s:53:"Initialisation/Files/images/streets/adrian-207619.jpg";s:4:"ac18";s:60:"Initialisation/Files/images/streets/richard-nolan-157476.jpg";s:4:"7a14";s:57:"Initialisation/Files/images/streets/nikita-maru-70928.jpg";s:4:"ccf1";s:59:"Initialisation/Files/images/streets/kimon-maritz-193428.jpg";s:4:"59eb";s:64:"Initialisation/Files/images/streets/felix-russell-saw-182331.jpg";s:4:"c296";s:57:"Initialisation/Files/images/typo3-book-template-tools.png";s:4:"049f";s:61:"Initialisation/Files/images/introduction-package-inverted.svg";s:4:"8271";s:36:"Initialisation/Files/images/content/";s:4:"d41d";s:57:"Initialisation/Files/images/content/content-textmedia.png";s:4:"4201";s:54:"Initialisation/Files/images/content/content-plugin.png";s:4:"8b31";s:60:"Initialisation/Files/images/content/content-special-html.png";s:4:"8ec9";s:59:"Initialisation/Files/images/content/content-text-teaser.png";s:4:"8166";s:64:"Initialisation/Files/images/content/content-special-shortcut.png";s:4:"5c38";s:58:"Initialisation/Files/images/content/content-menu-pages.png";s:4:"1107";s:62:"Initialisation/Files/images/content/content-menu-thumbnail.png";s:4:"4695";s:53:"Initialisation/Files/images/content/content-table.png";s:4:"85f7";s:63:"Initialisation/Files/images/content/content-special-uploads.png";s:4:"b4ea";s:53:"Initialisation/Files/images/content/content-quote.png";s:4:"c5b3";s:69:"Initialisation/Files/images/content/content-menu-recently-updated.png";s:4:"1b07";s:56:"Initialisation/Files/images/content/content-carousel.png";s:4:"a94f";s:62:"Initialisation/Files/images/content/content-elements-login.png";s:4:"1839";s:57:"Initialisation/Files/images/content/content-accordion.png";s:4:"caca";s:60:"Initialisation/Files/images/content/content-text-columns.png";s:4:"f1dc";s:65:"Initialisation/Files/images/content/content-elements-mailform.png";s:4:"d4fd";s:51:"Initialisation/Files/images/content/content-tab.png";s:4:"3247";s:53:"Initialisation/Files/images/content/content-image.png";s:4:"3afc";s:54:"Initialisation/Files/images/content/content-header.png";s:4:"529b";s:53:"Initialisation/Files/images/content/content-audio.png";s:4:"94cd";s:53:"Initialisation/Files/images/content/content-media.png";s:4:"9bca";s:67:"Initialisation/Files/images/content/content-elements-searchform.png";s:4:"cf1d";s:66:"Initialisation/Files/images/content/content-menu-sitemap-pages.png";s:4:"e7dd";s:61:"Initialisation/Files/images/content/content-menu-abstract.png";s:4:"af1d";s:60:"Initialisation/Files/images/content/content-menu-section.png";s:4:"750b";s:64:"Initialisation/Files/images/content/content-menu-categorized.png";s:4:"c9b7";s:55:"Initialisation/Files/images/content/content-bullets.png";s:4:"7d2a";s:60:"Initialisation/Files/images/content/content-menu-sitemap.png";s:4:"0061";s:53:"Initialisation/Files/images/content/content-panel.png";s:4:"fb1a";s:52:"Initialisation/Files/images/content/content-text.png";s:4:"be22";s:60:"Initialisation/Files/images/content/content-menu-related.png";s:4:"5e59";s:59:"Initialisation/Files/images/content/content-special-div.png";s:4:"66be";s:55:"Initialisation/Files/images/content/content-textpic.png";s:4:"f15e";s:37:"Initialisation/Files/images/features/";s:4:"d41d";s:68:"Initialisation/Files/images/features/multi-langauge-multi-domain.png";s:4:"5b86";s:52:"Initialisation/Files/images/features/ease-of-use.png";s:4:"d020";s:72:"Initialisation/Files/images/features/no-front-end-design-constraints.png";s:4:"237d";s:58:"Initialisation/Files/images/features/front-end-editing.png";s:4:"2edc";s:51:"Initialisation/Files/images/features/workspaces.png";s:4:"eafe";s:86:"Initialisation/Files/images/features/granular-front-end-and-back-end-access-rights.png";s:4:"0eb4";s:59:"Initialisation/Files/images/typo3-composing-backend-all.png";s:4:"616d";s:40:"Initialisation/Files/images/customizing/";s:4:"d41d";s:51:"Initialisation/Files/images/customizing/extbase.png";s:4:"8e57";s:60:"Initialisation/Files/images/customizing/extensionmanager.png";s:4:"6d2b";s:68:"Initialisation/Files/images/customizing/editor-shows-typo3-fluid.png";s:4:"0ed4";s:60:"Initialisation/Files/images/customizing/extensionbuilder.png";s:4:"315d";s:57:"Initialisation/Files/images/typo3-phone-edit-template.png";s:4:"e1f3";s:54:"Initialisation/Files/images/typo3-book-page-module.png";s:4:"cbcf";s:52:"Initialisation/Files/images/introduction-package.svg";s:4:"4856";s:56:"Initialisation/Files/images/typo3-book-backend-login.png";s:4:"8eba";s:64:"Initialisation/Files/images/typo3-composing-backend-overview.png";s:4:"3758";s:39:"Initialisation/Files/images/background/";s:4:"d41d";s:58:"Initialisation/Files/images/background/background-grey.jpg";s:4:"a3df";s:60:"Initialisation/Files/images/background/background-orange.jpg";s:4:"6ec6";s:35:"Initialisation/Files/images/map.png";s:4:"c9b8";s:27:"Initialisation/Files/audio/";s:4:"d41d";s:47:"Initialisation/Files/audio/typo3-still-here.mp3";s:4:"9d7c";s:44:"Initialisation/Files/audio/what-is-typo3.mp3";s:4:"38cd";s:29:"Initialisation/Files/youtube/";s:4:"d41d";s:55:"Initialisation/Files/youtube/typo3_-_still_here.youtube";s:4:"d64a";s:51:"Initialisation/Files/youtube/what_is_typo3_.youtube";s:4:"82e8";s:49:"Initialisation/Files/youtube/typo3_-_2020.youtube";s:4:"4232";s:105:"Initialisation/Files/youtube/evolution_of_the_typo3_ecosystem_-_mathias_schreiber____fabian_stein.youtube";s:4:"ada0";s:26:"Initialisation/Files/form/";s:4:"d41d";s:42:"Initialisation/Files/form/contactform.yaml";s:4:"ca88";s:23:"Initialisation/data.t3d";s:4:"4cd8";s:9:"README.md";s:4:"c4c2";s:10:"Resources/";s:4:"d41d";s:18:"Resources/Private/";s:4:"d41d";s:40:"Resources/Private/ImportExportPreset.sql";s:4:"7053";s:17:"Resources/Public/";s:4:"d41d";s:23:"Resources/Public/Icons/";s:4:"d41d";s:36:"Resources/Public/Icons/Extension.png";s:4:"419e";s:24:"Resources/Public/Images/";s:4:"d41d";s:47:"Resources/Public/Images/DistributionWelcome.png";s:4:"809f";s:40:"Resources/Public/Images/Distribution.png";s:4:"e9f5";}',
);

?>
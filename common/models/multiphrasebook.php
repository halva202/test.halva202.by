<?php
namespace common\models;

use common\models\language;

class multiphrasebook
{
	public static function getPhrasebook(){
		$language = language::getLanguage();
		if($language=='ru'){return multiphrasebook::phrasebookRU();}
		if($language=='en'){return multiphrasebook::phrasebookEN();}
	}
	
	public static function phrasebookEN(){
		$phrasebook=[
			// menu
			'home'=>'Home',
			'createSites'=>'Create sites',
			'contact'=>'Contact',
			// /menu
			'hi'=>'Hi',
			'introduction'=>'This is mini version of site about me. I do experiments with code here and then upload code to main site. Code of this site is available ',
			'visitMainSite'=>'Visit my main site',
		];
		return $phrasebook;
	}
	
	public static function phrasebookRU(){
		$phrasebook=[
			// menu
			'home'=>'Главная',
			'createSites'=>'Создаю сайты',
			'contact'=>'Обратная связь',
			// /menu
			'hi'=>'Здравствуй',
			'introduction'=>'Это миниверсия сайта обо мне. Сейчас, прежде чем что-то выложить на основной сайт, я тестирую тут. Код сайта в открытом доступе ',
			'visitMainSite'=>'Перейти на мой главный сайт',
		];
		return $phrasebook;
	}
		
}
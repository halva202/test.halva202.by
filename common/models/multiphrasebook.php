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
			'here'=>'here',
			'mainSite'=>'Main site',
			'introduction2'=>"I try to make the site multilingual, in Russian and English (at the bottom of the page there is the possibility of language selection). I create a page at once in Russian and then translate into English. So the",
			'introduction3'=>'Russian version of the website is richer by information',
			
			'web-developer'=>'Web-developer',
			'web-developer2'=>'I can create sites of any complexity.',
			
			'tutor'=>'Tutor',
			'tutor2'=>'I can explain chemistry, physic, mathematic, web-programming.',
			'tutor3'=>'Resume (in russian)',
			
			'lifestyle'=>'Lifestyle',
			'lifestyle2'=>'I prefer active lifestyle.',
			'lifestyle3'=>'My page on facebook',
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
			'introduction'=>'Это миниверсия сайта обо мне. Сейчас, прежде чем что-то выложить на основной сайт, я тестирую тут. Код данного сайта в открытом доступе ',
			'here'=>'тут',
			'mainSite'=>'Главный сайт',
			'introduction2'=>'Сайт пытаюсь делать мультиязычным, на русском и английском (внизу страницы есть возможность выбора языка). Сразу страницу делаю на русском и только потом перевожу на английский. Так что',
			'introduction3'=>'русская версия сайта более богата информацией',
			
			'web-developer'=>'Веб-разработчик',
			'web-developer2'=>'Могу создавать сайты практически любой сложности.',
			
			'tutor'=>'Репетитор',
			'tutor2'=>'Обучаю физике, химии, математике, веб-программированию.',
			'tutor3'=>'Резюме',
			
			'lifestyle'=>'Образ жизни',
			'lifestyle2'=>'Предпочитаю активный образ жизни.',
			'lifestyle3'=>'Моя страница на фэйсбуке',
		];
		return $phrasebook;
	}
		
}
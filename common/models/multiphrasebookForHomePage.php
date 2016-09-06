<?php
namespace common\models;

use Yii;
use common\models\language;

// files:
// frontend/controllers/Site - index (html5up-miniport)
// frontend/controllers/Site - actionEmailajax (html5up-miniport)

class multiphrasebookForHomePage
{
	// extract the desired dictionary depending on the browser language 
	public function getPhrasebook(){
		$languageModel = new language;
		$language = $languageModel->getLanguage();
		
		// $languageBrouser = multiphrasebookForHomePage::languageBrouser();
		
		// $language = 'en';// default
		// if($languageBrouser == 'ru' or $languageBrouser == 'be' or $languageBrouser == 'uk'){$language = 'ru';}
		
		if($language=='ru'){return multiphrasebookForHomePage::phrasebookRU();}
		if($language=='en'){return multiphrasebookForHomePage::phrasebookEN();}
	}
	
	// language is determined by brouser
	public function languageBrouser(){
		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		return $language;
	}
	
	public function phrasebookEN(){
		$phrasebook=[
			'hi'=>'Hi',
			'activity'=>'Activity',
			'certificates'=>'Certificates',
			'contact'=>'Contact',
			
			'iAm'=>"I'm",
			'myName'=>'Viktar',
			'aboutSite1'=>'On this website you can learn a little bit about',
			'aboutSite2'=>'me',
			'aboutSite3'=>'and keep a diary of your own achievements',
			
			'learnAboutWhatIdo'=>'Learn about what I do',
			'iDo'=>"Here's something I do",
			'webDeveloper'=>'Web-developer',
			'tutor'=>'Tutor',
			'subjects'=>'Physic, chemistry, mathematic, programming',
			'books'=>'books',
			'lifestyle'=>'I love an active lifestyle',
			'cycling'=>'Cycling',
			'english'=>'english speaking clubs',
			'volleyball'=>'volleyball',
			'salsa'=>'salsa',
			
			'seeCertificates'=>'See some of my recent certificates',
			'certificates'=>'Certificates',
			'oop'=>'The bases of OOP, UML',
			'minsk'=>'Minsk',
			'master'=>'Master of engineering and technology',
			'sp'=>'Saint Petersburg',
			'testing'=>'96 from 100 on mathematic',
			'grodno'=>'Grodno',
			'allCertificates'=>'All certificates',
			
			'touch'=>'Get in touch with me',
			'help'=>'Can I help you',
			'name'=>'Name',
			'email'=>'Email',
			'subject'=>'Subject',
			'message'=>'Message',
			'sendMessage'=>'Send Message',
			'clearForm'=>'Clear Form',
			'messageBeforeSending'=>'Please complete all fields correctly)',
			'messageAfterSending'=>'your message has been sent successfully)',
			'findMe'=>'Find me on',
			
			'fullVersion'=>'Full version of site',
		];
		return $phrasebook;
	}
	
	public function phrasebookRU(){
		$phrasebook=[
			'hi'=>'Hi',
			'activity'=>'Деятельность',
			'certificates'=>'Сертификаты',
			'contact'=>'Контакты',
			
			'iAm'=>"Я",
			'myName'=>'Виктор',
			'aboutSite1'=>'На этом сайте можно узнать немного обо',
			'aboutSite2'=>'мне',
			'aboutSite3'=>'а также вести дневник собственных достижений',
			
			'learnAboutWhatIdo'=>'Узнать чем я занимаюсь',
			'iDo'=>"Кое-что из того что я делаю",
			'webDeveloper'=>'Создаю сайты',
			'tutor'=>'Преподаю',
			'subjects'=>'Физика, химия, математика, программирование',
			'books'=>'учебники',
			'lifestyle'=>'Обожаю активный образ жизни',
			'cycling'=>'Велосипед',
			'english'=>'english speaking clubs',
			'volleyball'=>'волейбол',
			'salsa'=>'сальса',
			
			'seeCertificates'=>'Посмотреть мои сертификаты',
			'certificates'=>'Сертификаты',
			'oop'=>'Основы объектно-ориентированного программирования и UML',
			'minsk'=>'Минск',
			'master'=>'Магистр техники и технологии',
			'sp'=>'Санкт-Петербург',
			'testing'=>'96 баллов из 100 по математике',
			'grodno'=>'Гродно',
			'allCertificates'=>'Все сертификаты',
			
			'touch'=>'Связаться со мной',
			'help'=>'Могу я вам чем-то помочь',
			'name'=>'Имя',
			'email'=>'Емэйл',
			'subject'=>'Тема',
			'message'=>'Сообщение',
			'sendMessage'=>'Послать сообщение',
			'clearForm'=>'Очистить форму',
			'messageBeforeSending'=>'Пожалуйста, заполните все поля корректно)',
			'messageAfterSending'=>'ваше сообщение успешно отправлено)',
			'findMe'=>'Найти меня в',
			
			'fullVersion'=>'Полная версия сайта',
		];
		return $phrasebook;
	}
		
}
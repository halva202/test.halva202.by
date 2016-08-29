<?php

namespace common\models;

class language
{
	public static function getLanguage(){
		// look for language in SESSION
		if(isset($_SESSION['language'])){
			if($_SESSION['language']=='ru'){$language='ru';}
			else{$language='en';}
		}
		else{
			// look for language in COOKIE
			if(isset($_COOKIE['language'])){
				if($_COOKIE['language']=='ru'){$language='ru';}
				else{$language='en';}
			}
			else{
				// look for language in brouser
				$language = 'en';// default
				$languageBrouser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
				if($languageBrouser == 'ru' or $languageBrouser == 'be' or $languageBrouser == 'uk'){
					$language = 'ru';
				}
				language::setLanguage($language);
			}
		}
		
		return $language;
	}
	
	public static function setLanguage($language='en'){
		if($language=='ru'){
			$_SESSION['language']='ru';
			$_COOKIE['language']='ru';
		}
		else{
			$_SESSION['language']='en';
			$_COOKIE['language']='en';
		}
		
	}
}
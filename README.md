# test version of halva202.by
Сейчас, прежде чем что-то выложить на основной сайт, я тестирую тут.

Советы по заливке данного проекта в локальную среду

- если у вас xampp, лучше залить репозиторий внутрь xampp/htdocs

After clonning (git clone  https://github.com/halva202/yii2.git) you should do:

- создать базу данных yii2advanced
localhost/phpMyAdmin:

	yii2advanced

- при помощи командной строки зайти в папку advanced, типо  cd /e/xampp/htdocs/repositories/github/halva202/yii2/advanced
cmd cd: 

- воспользоваться композером:
composer update

- написать следующее:

	init.bat

	0

	yes

	yii migrate

	yes (after my advice: No)




p.s. не забыть настроить hosts и httpd-vhosts.conf(xampp)

p.s.2 в /common/config/main.php можно раскомментировать строчку с языком

p.s.3 вроде как коммит d7d1 самый актуальный

p.s.4 по идее надо поменять: 1)common/config/main-local.php 2) ящик(и) в common/config/main-local.php, common/models/swiftmailer.php

p.s. 5 не забыть поменять емэйл админа в params

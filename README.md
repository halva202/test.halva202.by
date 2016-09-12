# test version of halva202.by
Сейчас, прежде чем что-то выложить на основной сайт, я тестирую тут.

Советы по заливке данного проекта в локальную среду

- если у вас xampp, лучше залить репозиторий внутрь xampp/htdocs

After clonning (git clone  https://github.com/halva202/yii2.git) you should do:

- создать базу данных halva202_test (localhost/phpMyAdmin)

- при помощи командной строки зайти (cmd cd) в папку со скачанным репозиторием, типо  cd /e/xampp/htdocs/repositories/github/halva202/test.halva202.by

- написать следующее:

	composer update (если не установлен компоузер, предварительно установить)

	init.bat

	0

	yes

	yii migrate

	yes (after my advice: No)




p.s.1 не забыть настроить hosts и httpd-vhosts.conf(xampp)

p.s.2 в /common/config/main.php можно раскомментировать строчку с языком

p.s.3 по идее надо поменять настройки на свои: 1)common/config/main-local.php 2) ящик(и) в common/config/main-local.php, common/models/swiftmailer.php

p.s.4 не забыть поменять емэйл админа в params

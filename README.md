# Тестовое задание на должность "Web-разработчик" для компании "К Телеком". ⚡   

Цель: Сверстать макет по ТЗ. 
При выполнении работы, не нужно было использовать фреймворки.   
Контент в блоках изменяется через админку с помощью плагинов Lazyblocks и ACF PRO.     

[Макет здесь](https://www.figma.com/design/ni5ykh6MK97LUB7lHytfYb/%D0%9A-%D0%A2%D0%B5%D0%BB%D0%B5%D0%BA%D0%BE%D0%BC-(%D1%82%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%B5-%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D0%B5)-(Copy)?node-id=0-1&t=4Njs08brQC1kXv7a-0)   🔗   

[Тз здесь](https://github.com/jkenix/test-k-telecom/blob/main/web/%D0%A2%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%B5%20%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D0%B5%20v2.pdf) 🔗   

## Порядок запуска проекта:   
1. Установить Wordpress 3.7.2.   
2. **Склонировать репозиторий** и в директорию *wordpress/wp-content/themes/* положить папку *test-k-telecom* с **содержимым репозитория**.
3. В директорию *wordpress/wp-content/* положить папку *plugins* из архива **test-k-telecom-plugins.zip** в папке ***web***.  
4. В директорию *wordpress/wp-content/* положить папку *uploads* из архива **test-k-telecom-uploads.zip** в папке ***web***.   
5. Через phpMyAdmin или консоль импортировать БД *24022025.sql* из директории **web/** проекта в уже вашу существующую БД. 
6. Активировать тему через админку (Внешний вид - Темы).  
7. Активировать все плагины. (Query Monitor и Live Auto Refresh можно не включать). 
8. Запустить сайт через https://localhost/ или другой адрес вашего локального сервера.   

---

Войти в админку можно со ***следующими данными***:   
**Логин:** jkenix   
**Пароль:** z3R6sJfDWpx)BweKBc  

---

При желании внести корректировки в стили можно через **Ubuntu**, если установлен Node.js и npm. Нужно лишь прописать в консоли **npm install** и запустить скрипт **npm run scss**.   

Если изменения вносятся на Windows, то в ***package.json*** файле убирается команда sudo у скрипта **scss**.   

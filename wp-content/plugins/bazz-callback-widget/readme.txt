=== Bazz CallBack widget ===
Contributors: glomberg
Donate link: https://www.paypal.me/bazzcallback
Tags: bazz, callback, call, call back, call request 
Requires at least: 3.0.1
Tested up to: 4.9
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin makes a simple widget for callback on your website.

== Description ==

The plugin is intended for easy creating a widget on your website.
The widget will be performing "call-back function". That is, you will be recieving client's phone which the client will have specified in the widget by your e-mail.

Плагин предназначен для простого создания виджета на Вашем веб-сайте.
Виджет будет выполнять "функцию обратного вызова". Т.е. Вы будете получать номер телефона, который клиент укажет в виджете по Вашей электронной почте.

Features:
* RTL ready

Supported languages:
* 🇺🇸 English
* 🇷🇺 Russian
* 🇺🇦 Ukrainian
* 🇫🇷 French
* 🇮🇹 Italian
* 🇪🇸 Spanish (Spain)
* 🇲🇽 Spanish (Mexico)
* 🇩🇪 German
* 🇸🇪 Swedish
* 🇷🇴 Romanian
* 🇵🇱 Polish
* 🇳🇱 Dutch
* 🇬🇷 Greek
* 🇮🇷 Persian
* 🇨🇳 Chinese

== Installation ==

Just install and activate the plugin, and the widget of a call-back Bazz CallBack will appear on your website.

Просто установите и активируйте плагин и виджет появится на вешм веб-сайте.

== Frequently Asked Questions ==

= Не получаю письмо от виджета =

1. Проверьте, правильно ли вы указали email  в настройках плагина.
2. Если при нажатии на "Жду звонка" курсор принимает вид ожидания и ничего не происходит - значит ошибка в коде плагина. Ее можно найти в логах PHP и прислать автору на изучение.
3. Если при нажатии письмо отправляется (выводится текст-результат), но не приходи на почту - проверьте логи почтового сервера. Возможно письмо застряло из-за неправильной настройки почтового сервера или из-за заблокированной возможности отправки. На некоротых хостингах почтовый сервер работает в ограниченном режиме либо специально фильтрует уведомления от WordPress. В таком случае вам может помочь настройка отправки сообщений через внешний SMTP сервер (например gmail). Проще всего настроить это с помощью соответствующего плагина (см. гугл).
4. И наконец, проверьте папку "Спам" вашей почты :-)

== Screenshots ==

1. The widget looks so same

2. Configuration here

== Changelog ==

= 3.18 - 06 March 2019 =
* Fix masked input bug
* Added Chinese language (thanks for Josh)

= 3.17 - 04 October 2018 =
* Fix some grammar
* Remake some phrases for future translations. It will be easy to translate for now.
* Added Greek language (thanks to PC Security)
* Added Romanian language (thanks to Genry Ceal)

= 3.16 - 21 August 2018 =
* Added Italian language (thanks to Bobo)

= 3.15 - 26 May 2018 =
* Added Spanish (Spain) language (thanks to Josie Monginsidi)

= 3.14 - 17 January 2018 =
* Added Spanish (Mexico) language (thanks to Ruben Lara)
* Added Swedish language (thanks to Alfons Passgård) 

= 3.13 - 17 January 2018 =
* Minor fixes.
* Added German language (thanks to Daniel)
IF you want to translate the plugin into your language, email me!

= 3.12 - 17 November 2017 =
* Tested up to 4.9 WordPress
* Fix RTL bugs
* Fix vertical position of the text on the button.
* Change the name in the header FROM
* Added Dutch localization (thanks to Pascal)
* Added Polish localization (thanks Leszek Czerwiński)
IF you want to translate the plugin into your language, email me!


= 3.11 - 11 October 2017 =
* Added RTL support
* Added Persian localization (thanks to Emad)
* Fix minor issues
IF you want to translate the plugin into your language, email me!

= 3.10 - 03 October 2017 =
* Исправлена опечатка в украинском переводе: звінок -> дзвінок

= 3.9 - 28 September 2017 =
* Добавлен Украинский перевод (спасибо Александру).
* Исправление небольшого бага, связанного с новым переводом.

= 3.8 - 26 August 2017 =
* Fixed "fixed" possition (position: fixed !important;) in CSS-file

= 3.7 - 28 July 2017 =
* Убрана маска для не-российских номеров телефонов.
* 152 ФЗ -  добавлена информация согласно закона о ПД (если стоит в настройках "ДА" в опции "Клиент из России?").
* Убраны пробелы, скобки и тире из номера телефона, присылаемого на почту. Можете перезвонить одним кликом по номеру.

= 3.6 - 04 July 2017 =
* Добавлена кнопка "Настройки" под названием плагина.

= 3.5 - 25 May 2017 =
* Поправлено отображение полей в виджете.
* Fix minor issues

= 3.4 - 26 April 2017 =
* Fix minor issues

= 3.3 - 26 April 2017 =
* Fix left-right opening error

= 3.2 - 09 March 2017 =
* Плагин отключен на мобильных устройствах.
* Внедрена версионность стилей - больше не будет проблем, требующих очистки кеша браузера.
* Увеличен z-index
* Fix minor issues

= 3.1 - 25 January 2017 =
* !После обновлния чистите кеш страницы (ctrl+F5)
* Fix minor issues

= 3.0 - 23 January 2017 =
* !После обновлния чистите кеш страницы (ctrl+F5)
* You can change color scheme
* You can change left/right side to the show
* Mail() function was changed to wp_mail()
* Fix translations
* Fix minor issues

= 2.3 - 20 January 2017 =
* Fix minor issues

= 2.2 - 23 December 2016 =
* Fix minor issues
* Добавлена поддержка ввода телефонных номеров стран СНГ


= 2.1 =
* Fix minor issues

= 2.0 =
* This is the major update.
* Plugin was localized:
	* added default EN language
	* added addition RU language

* Some options was deleted.


= 1.4 =
* Исправлена опечатка

= 1.3 =
* Исправлено несколько ошибок
	- исправлено подключение jQuery
	- исправлена логика отображения текста в рабочее/нерабочее время
* Изменено расположение от правого края (75рх)

= 1.2 =
* Внедрен ползунок для выбора режима работы

= 1.1 =
* Добавлена возможность:
* менять время работы (днем и ночью разные сообщения)
* менять расстояние от низа экрана до виджета
* поправлена кнопка закрыть для Safari

= 1.0 =
* Start version.
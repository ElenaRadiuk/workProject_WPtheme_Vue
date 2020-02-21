## Что для этого нужно

Установить [NodeJS](https://nodejs.org/en/)  
Плагин для редактора [Editorconfig](http://editorconfig.org)  

## Старт проекта

Открыть эту папку в консоле и установить зависимости  

```bash
npm install
```
 или
```bash
yarn install
```
Измените домен для разработки в `config/index`, параметр `localUrl` на свой локальный.
После этого используем доступные команды

## Доступные команды

`npm start` - Запуск проекта для разработки, прокси-сервер и слежение за файлами  
`npm run build` - сборка проекта для _production_  среды  
`npm run dev` - сборка проекта для _development_ среды  
`npm run clear` - очистка папки _dist_

## Структура темы

```
wordpress-starter-theme/  
├── /config/               # Папка для конфигов сборки
|   ├── index.js           # Файл собирает в себя все конфиги. Так же в свойстве localUrl можно указать локальный домен для разработки    
|   ├── aliases.js         # Файл настройки алиасов
|   ├── copy.js            # Файл настройки копирования (если Вам нужно скопировать что-то в dist чего там нету в результате сборки настроить это можно здесь)
|   ├── devServer.js       # Файл настройки dev сервера
├── /include/              # PHP файлы подключаются в function.php
├── /dist/                 # Сборка проекта (Все внесенные в нее изменения будут затерты при следующей сборке).
├── /src/                  # Папка из которой webpack делает сборку
|   ├── /assets/           # Ресурсы темы.
|   │   ├── /fonts/        # Шрифты.
|   |   ├── /icons/        # Папка с иконками (предлагается загужать изображения используемые для иконк сюда, но это не точно:))
|   │   ├── /images/       # Изображения.
|   │   ├── /js/           # Скрипты проекта.
|   |   ├── /lib/          # Папка с кастомными scss и js либами
|   │   └── /sass/         # Структуру папки смотрите ниже.
|   ├── customizer.js      # Файл для customizer из админки (на данный момент код находящийся в нем не рабочий). Является точкой входа
|   ├── main.js            # Точка входа сборки. С этого файла webpack начинает собирать проект
├── /node_modules/         # Node modules. (Никогда не редактируется).
├── /template-parts/       # Шаблоны, которые используются на страницах.
│   ├── comments.php       # Шаблон для вывода комментариев.
│   ├── content-none.php   # Используется если нету постов.
│   ├── content-page.php   # Вывод содержимого страницы.
│   ├── content-search.php # Шаблон вывода результатов поиска.
│   ├── content-single.php # Вывод содержимого поста.
│   ├── content.php        # Шаблон для вывода постов.
│   ├── head.php           # Содержимое тега head.
│   └── sidebar.php        # Контент сайдбара.
└── .editorconfig          # Настройка редактора.
└── .gitignore
└── 404.php                # Страница 404.
└── footer.php
└── function.php
└── webpack.config.js      # Файл конфигурации webpack (Редактируйте этот файл только если вы точно знаете что делаете)
└── header.php
└── index.php              # Отображает последние посты блога.
└── package.json           # Пакеты для NPM.
└── page.php               # Шаблон для всех страниц.
└── screenshot.png         # Скриншот для админки.
└── search.php             # Шаблон для вывода результатов поиска.
└── single.php             # Шаблон для поста.
└── style.css              # Для определения темы.
└── template-custom.php    # Шаблон для страницы (Пример).
```

## Структура папки sass

```
sass/
├── /block/                # Стили для повторяющихся блоков.
├── /elements/             # Стили для элементов.
├── /pages/                # Стили для страниц.
└── _base.scss             # Базовые стили.
└── _functions.scss        # Функции
└── _mixins.scss           # Миксины.
└── _typography.scss       # Типографика проекта.
└── _variables.scss        # Переменные.
└── _wp-classes.scss       # Стили для стандартных элементов WP.
└── main.scss              # Компилируемый файл.
```


## Обратите внимание
jQuery была возвращена в тему, переменные $ и jQuery доступны во всех файлах которые попадают в сборку.


## Instaled plugins
ACF to REST API

Exposes Advanced Custom Fields Endpoints in the WordPress REST API

Advanced Custom Fields PRO
	
Customise WordPress with powerful, professional and intuitive fields.
	
Select Better REST API Featured Images
	
Better REST API Featured Images

Contact Form 7
	
Contact Form CFDB7
	
Custom Post Type UI

Mailchimp for WordPress

![Image alt](http://iceadev.leka-web.site/images/ic2.jpg)

![Image alt](http://iceadev.leka-web.site/images/ic1.jpg)

#компонент системы Simba

создает помощник вида, для вывода в SEO тегах информации из спец таблицы seolist, например, для вывода списка новостей, когда SEO некуда писать.

Установка

composer require masterflash-ru/seolist

после установки загрузить дамп в базу из папки data


В конфиге приложения должны быть настройки кэша:
```php

    'caches' => [
        'DefaultSystemCache' => [
            'adapter' => [
                'name'    => Filesystem::class,
                'options' => [
                    'cache_dir' => './data/cache',
                    'ttl' => 60*60*2 
                ],
            ],
            'plugins' => [
                [
                    'name' => Serializer::class,
                    'options' => [
                    ],
                ],
            ],
        ],
    ],
```

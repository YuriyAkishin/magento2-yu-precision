# Plugin and mixin for Magento 2 removes decimal places in prices
Плагин Yu\Precision\Plagin\Currency и миксин price-utils-mixin убирает копейки из цены.

## Установка
Скопируйте файлы в папку
```
app\code\Yu\Precision
```
Выполните команду
```
php bin/magento module:enable Yu_Precision
php bin/magento setup:upgrade
```
[![Latest Stable Version](https://poser.pugx.org/redmenta/laravel-szamlazzhu/version)](https://packagist.org/packages/redmenta/laravel-szamlazzhu)
[![Latest Stable Version](https://poser.pugx.org/redmenta/laravel-szamlazzhu/downloads)](https://packagist.org/packages/redmenta/laravel-szamlazzhu)
[![License](https://poser.pugx.org/redmenta/laravel-szamlazzhu/license)](https://packagist.org/packages/redmenta/laravel-szamlazzhu)

# laravel-szamlazzhu
Implementation for Laravel which was made to support Szamlazz.hu Agent version of **3.4** and higher.

## Origin
Based on original packages:
- SzuniSOFT/laravel-szamlazzhu (https://github.com/SzuniSOFT/laravel-szamlazzhu)
- zoparga/laravel-szamlazzhu (https://github.com/zoparga/laravel-szamlazzhu)

## Installation
```bash
composer require redmenta/laravel-szamlazzhu
```

## Introduction
This package supports the following methods:
- Invoice creation
- Invoice cancellation (reversing)
- Proforma invoice creation
- Proforma invoice deletion
- Receipt creation
- Receipt cancellation (reversing)

## Requirements
Supports Laravel: **5.5** / **6.*** / **7.*** / **8.*** / **9.***

## Documentations
For usage please refer to the [technical documentation](doc/technical/documentation.md).

The official API documentation is accessible at [https://docs.szamlazz.hu/#introduction](https://docs.szamlazz.hu/#introduction).

## Automatic PDF storing
Package can automatically save generated PDF files and store on the given disk. For further information about the configuration possibilities please refer to the [configuration](doc/technical/config.md) documentation.

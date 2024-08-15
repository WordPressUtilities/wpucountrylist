# WPU Country list

[![PHP workflow](https://github.com/WordPressUtilities/wpucountrylist/actions/workflows/php.yml/badge.svg 'PHP workflow')](https://github.com/WordPressUtilities/wpucountrylist/actions)

Get a list of countries

## Installation

- Install as a WordPress plugin.

## Usage

```php
global $WPUCountryList;
return $WPUCountryList->getList(array(
    'sorted' => true,
    'lowercase' => true,
    'move_first' => array('fr', 'be', 'ch', 'lu')
));
```

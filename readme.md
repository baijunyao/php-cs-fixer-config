# PHP CS Fixer Config

Uniformly manage the code style of all projects.

## Installation

Require this package with composer using the following command:

```bash
composer require baijunyao/php-cs-fixer-config --dev
```

## Usage

Create *.php-cs-fixer.php* in your project root directory.

```php
<?php

declare(strict_types=1);

use Baijunyao\PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()->in(__DIR__);

return (new Config())->setFinder($finder);
```

Add `.php-cs-fixer.cache` to *.gitignore*

Execute the following command.

```bash
vendor/bin/php-cs-fixer fix
```

## Example

- [laravel-bjyblog](https://github.com/baijunyao/laravel-bjyblog/blob/master/.php-cs-fixer.php)

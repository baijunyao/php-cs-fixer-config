<?php

declare(strict_types=1);

use Baijunyao\PhpCsFixer\Config;

return (new Config())
    ->setFinder(
        PhpCsFixer\Finder::create()->in(__DIR__)
    );

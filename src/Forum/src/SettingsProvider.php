<?php

declare(strict_types=1);

namespace Forum;

use Axleus\SettingsProvider as Provider;

final class SettingsProvider extends Provider
{
    public ?string $file = 'forum.php';

    public function __invoke(): array
    {
        return parent::__invoke();
    }
}

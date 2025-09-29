<?php

namespace RyanChandler\FilamentUserResource;

use Closure;
use RyanChandler\FilamentUserResource\Resources\UserResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentUserResourcePlugin implements Plugin
{
    public ?string $navigationGroup = null;

    public ?Closure $extendFormCallback = null;

    public function getId(): string
    {
        return 'filament-user-resource';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                UserResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }


    public static function make(): static
    {
        return app(static::class);
    }

    public function navigationGroup(string $navigationGroup): static
    {
        $this->navigationGroup = $navigationGroup;

        return $this;
    }

    public function extendForm(Closure $callback): static
    {
        $this->extendFormCallback = $callback;

        return $this;
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}

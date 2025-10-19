<?php

namespace LaraZeus\ActivityTimeline;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ActivityTimelineServiceProvider extends PackageServiceProvider
{
    public static string $name = 'activity-timeline';

    public static string $viewNamespace = 'activity-timeline';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }

    protected function getAssetPackageName(): ?string
    {
        return 'lara-zeus/activity-timeline';
    }
}

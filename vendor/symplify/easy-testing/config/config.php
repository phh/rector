<?php

declare (strict_types=1);
namespace RectorPrefix20210605;

use RectorPrefix20210605\Symfony\Component\Console\Application;
use RectorPrefix20210605\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use RectorPrefix20210605\Symplify\EasyTesting\Console\EasyTestingConsoleApplication;
use RectorPrefix20210605\Symplify\PackageBuilder\Console\Command\CommandNaming;
return static function (\RectorPrefix20210605\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('RectorPrefix20210605\Symplify\\EasyTesting\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/DataProvider', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
    // console
    $services->set(\RectorPrefix20210605\Symplify\EasyTesting\Console\EasyTestingConsoleApplication::class);
    $services->alias(\RectorPrefix20210605\Symfony\Component\Console\Application::class, \RectorPrefix20210605\Symplify\EasyTesting\Console\EasyTestingConsoleApplication::class);
    $services->set(\RectorPrefix20210605\Symplify\PackageBuilder\Console\Command\CommandNaming::class);
};

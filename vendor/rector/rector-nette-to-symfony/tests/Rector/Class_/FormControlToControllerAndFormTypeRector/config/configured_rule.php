<?php

declare (strict_types=1);
namespace RectorPrefix20210605;

use Rector\NetteToSymfony\Rector\Class_\FormControlToControllerAndFormTypeRector;
use RectorPrefix20210605\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\RectorPrefix20210605\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/../../../../../config/config.php');
    $services = $containerConfigurator->services();
    $services->set(\Rector\NetteToSymfony\Rector\Class_\FormControlToControllerAndFormTypeRector::class);
};

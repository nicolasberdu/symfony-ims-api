<?php

use App\Controller\LuckyController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('lucky_number', '/lucky/number')
        // the controller value has the format [controller_class, method_name]
        ->controller([LuckyController::class, 'number'])

        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the 'method_name' part:
        // ->controller(BlogController::class)
    ;
};
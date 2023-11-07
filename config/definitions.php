<?php

return [
    'Trimmer' => \DI\create('\Boatrace\Ninja\Trimmer')->constructor(
        \DI\get('MainTrimmer')
    ),
    'MainTrimmer' => function ($container) {
        return $container->get('\Boatrace\Ninja\MainTrimmer');
    },
];

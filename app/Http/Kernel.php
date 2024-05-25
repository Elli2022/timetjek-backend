protected $middlewareGroups = [
    'web' => [
        // Andra middleware...
    ],

    'api' => [
        \App\Http\Middleware\CorsMiddleware::class,
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];

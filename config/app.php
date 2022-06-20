<?php

return [

    /*
    |--------------------------------------------------------------------------
    |Nom de l'application
     |------------------------------------------------- -------------------------
     |
     | Cette valeur est le nom de votre application. Cette valeur est utilisée lorsque le
     | framework doit placer le nom de l'application dans une notification ou
     | tout autre emplacement requis par l'application ou ses packages.
    |
    */

    'name' => env('APP_NAME', 'BIBLIOSAVE'),

    /*
    |--------------------------------------------------------------------------
    |Environnement d'application
     |------------------------------------------------- -------------------------
     |
     | Cette valeur détermine l'"environnement" dans lequel votre application est actuellement
     | en cours d'exécution. Cela peut déterminer comment vous préférez configurer divers
     | services que l'application utilise. Définissez-le dans votre fichier ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Mode de débogage de l'application
     |------------------------------------------------- -------------------------
     |
     | Lorsque votre application est en mode débogage, des messages d'erreur détaillés avec
     | les traces de pile seront affichées sur chaque erreur qui se produit dans votre
     | application. Si elle est désactivée, une simple page d'erreur générique s'affiche.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL de l'Application
     |------------------------------------------------- -------------------------
     |
     | Cette URL est utilisée par la console pour générer correctement des URL lors de l'utilisation
     | l'outil de ligne de commande Artisan. Vous devez définir ceci à la racine de
     | votre application afin qu'elle soit utilisée lors de l'exécution des tâches Artisan.
     |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Fuseau horaire
     |------------------------------------------------- -------------------------
     |
     | Ici, vous pouvez spécifier le fuseau horaire par défaut pour votre application, qui
     | sera utilisé par les fonctions PHP date et date-heure. Nous sommes partis
     | à l'avance et définissez-le sur une valeur par défaut raisonnable pour vous dès la sortie de la boîte.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Configuration locale
     |------------------------------------------------- -------------------------
     |
     | Les paramètres régionaux de l'application déterminent les paramètres régionaux par défaut qui seront utilisés
     | par le prestataire de services de traduction. Vous êtes libre de définir cette valeur
     | à l'un des paramètres régionaux qui seront pris en charge par l'application.
     |
    */

    'locale' => 'fr',

    /*
    |--------------------------------------------------------------------------
    | Application Paramètres régionaux de secours
    |------------------------------------------------- -------------------------
    |
    | La locale de secours détermine la locale à utiliser lorsque la locale actuelle
    | n'est pas disponible. Vous pouvez modifier la valeur pour qu'elle corresponde à l'un des
    | les dossiers de langue fournis via votre application.
    |
    */

    'fallback_locale' => 'fr',

    /*
    |--------------------------------------------------------------------------
    | Fausse langue
     |------------------------------------------------- -------------------------
     |
     | Cette locale sera utilisée par la bibliothèque PHP Faker lors de la génération de faux
     | données pour vos graines de base de données. Par exemple, cela sera utilisé pour obtenir
     | numéros de téléphone localisés, informations sur l'adresse postale et plus encore.
     |
    */

    'faker_locale' => 'fr_ci',

    /*
    |--------------------------------------------------------------------------
    | Clé de cryptage
     |------------------------------------------------- -------------------------
     |
     | Cette clé est utilisée par le service de chiffrement Illuminate et doit être définie
     | à une chaîne aléatoire de 32 caractères, sinon ces chaînes cryptées
     | ne sera pas en sécurité. Veuillez le faire avant de déployer une application !
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    | Les fournisseurs de services répertoriés ici seront automatiquement chargés sur le
    | demande à votre application. N'hésitez pas à ajouter vos propres services à
    | ce tableau pour accorder des fonctionnalités étendues à vos applications.
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | Ce tableau d'alias de classe sera enregistré lorsque cette application
     | a démarré. Cependant, n'hésitez pas à vous inscrire autant que vous le souhaitez comme
     | les alias sont chargés "paresseux" afin qu'ils n'entravent pas les performances.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'Date' => Illuminate\Support\Facades\Date::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'RateLimiter' => Illuminate\Support\Facades\RateLimiter::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];

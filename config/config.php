<?php

  return [
    
    /*
     |--------------------------------------------------------------------
     | Default Files Storage , (Models , Views , Controllers , Migrations)
     |--------------------------------------------------------------------
     |
     | Here is where you can register you storage paths.
     |
     |*/
    
        'model' => base_path() . '/app',

        'views' => base_path() . '/resources/views',
        
        'controller' => base_path() . '/app/Http/Controllers',

        'migration' => base_path() . '/database/migrations',

    /*
     |--------------------------------------------------------------------
     | Database migration path.
     |--------------------------------------------------------------------
     |
     | Here is where you can register you migrations path to migrate
     | the schema via artisan command.
     | 
     |*/

        'database' => null,

    /*
     |-------------------------------------------------------------------
     | Default route file
     |-------------------------------------------------------------------
     |
     | Here is where you can register your route file.
     |
     |*/

        'routes' => base_path() . '/app/Http/routes.php',
    
    /*
     |--------------------------------------------------------------------
     | Package namespace and loaders
     |--------------------------------------------------------------------
     |
     | By default scaffold-interface interact with your app without 
     | specify any namespace. otherwise, if there is a module or a package 
     | that you may want scaffold-interface interact with, you must define
     | namespaces.
     |
     |*/

        'controllerNameSpace' => 'App\\Http\\Controllers',

        'modelNameSpace' => 'App',

     /*
      |-------------------------------------------------------------------
      | Views loader
      |-------------------------------------------------------------------
      |
      | Here is where you can register your default views loader.
      | By default is null
      |
      |*/

        'loadViews' => null,
    ];

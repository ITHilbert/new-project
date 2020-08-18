# new-project


## config/app.php

/*
* Package Service Providers...
*/
Yajra\DataTables\DataTablesServiceProvider::class,
Orangehill\Iseed\IseedServiceProvider::class,
Barryvdh\Debugbar\ServiceProvider::class,
ITHilbert\LaravelKit\LaravelKitServiceProvider::class,
ITHilbert\UserAuth\UserAuthServiceProvider::class,
ITHilbert\Customers\CustomersServiceProvider::class,
ITHilbert\Employees\EmployeesServiceProvider::class,


/*
* aliases
*/
'DataTables' => Yajra\DataTables\Facades\DataTables::class,
'Debugbar' => Barryvdh\Debugbar\Facade::class,

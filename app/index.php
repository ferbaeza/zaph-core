<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Baezeta\ZaphCore\App;
use App\database\Database;
use Baezeta\ZaphCore\Core\Routing\Routes;
use Baezeta\ZaphCore\Core\Container\Container;


class HomeController
{
    public function index()
    {
        echo "Hello world";
    }
}

$app = App::bootstrap();
// $app->connection = Database::connect();


// dd(Container::getInstances());


// $router = $app->router;

// // $routes::group('/api', function ($routes) {
// //     $routes->get('/users', [HomeController::class, 'index']);
// // });
$app->get('/', [HomeController::class, 'index']);

$app->run();




// $connec = Database::set();
// $connec->exec("CREATE TABLE IF NOT EXISTS users_dos (
//         id serial PRIMARY KEY,
//         name varchar(255) NOT NULL,
//         email varchar(255) NOT NULL,
//         password varchar(255) NOT NULL,
//         created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
//     );"
// );

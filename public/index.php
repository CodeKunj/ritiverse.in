<?php

require_once __DIR__ . '/../app/Helpers/Autoloader.php';

use App\Config\Env;
use App\Helpers\Router;

// Load environment variables
Env::load(__DIR__ . '/../.env');

// Initialize router
$router = new Router();

// Load routes
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../routes/admin.php';

// Dispatch request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

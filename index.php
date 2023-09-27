<?php

/**
 * Server variabelen
 * SERVER
 * GET
 * POST
 */

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php",
    "/profile" => "controllers/profile.php"
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    echo "NO";
}


/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */




/**
 * PDO - connect to database
 *
 */

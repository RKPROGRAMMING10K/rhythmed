<?php
// index.php

// Get the requested page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define your routes
$routes = [
    'home'    => 'index.php',
    'about'   => 'about.php',
    'contact' => 'contact.php',
    'csr' => 'csr.php',
    'director' => 'expert.php',
    'gallery' => 'gallery.php',
    'product' => 'product.php',
    // Add more routes as needed
];

// Check if the requested page is a valid route
if (array_key_exists($page, $routes)) {
    // Include the corresponding file
    include $routes[$page];
} else {
    // Handle 404 - Page not found
    echo '404 - Page not found';
}
?>
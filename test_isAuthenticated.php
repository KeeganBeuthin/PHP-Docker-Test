<?php

require_once __DIR__ . '/vendor/autoload.php';

use Kinde\KindeSDK\KindeClientSDK;

// Initialize the KindeClientSDK with dummy values
$kindeClient = new KindeClientSDK(
    'https://example.kinde.com',
    'http://localhost/callback',
    'dummy_client_id',
    'dummy_client_secret',
    'authorization_code',
    'http://localhost/logout'
);

// Test 1: Access isAuthenticated property directly
echo "Test 1: Accessing isAuthenticated property directly\n";
try {
    $isAuthenticated = $kindeClient->isAuthenticated;
    echo "isAuthenticated value: " . ($isAuthenticated ? 'true' : 'false') . "\n";
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// Test 2: Call isAuthenticated as a method
echo "\nTest 2: Calling isAuthenticated as a method\n";
try {
    $isAuthenticated = $kindeClient->isAuthenticated();
    echo "isAuthenticated value: " . ($isAuthenticated ? 'true' : 'false') . "\n";
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// Test 3: Check if isAuthenticated property exists
echo "\nTest 3: Checking if isAuthenticated property exists\n";
echo "Property exists: " . (property_exists($kindeClient, 'isAuthenticated') ? 'true' : 'false') . "\n";

// Test 4: Check if isAuthenticated method exists
echo "\nTest 4: Checking if isAuthenticated method exists\n";
echo "Method exists: " . (method_exists($kindeClient, 'isAuthenticated') ? 'true' : 'false') . "\n";

// Test 5: Dump the entire object to see its structure
echo "\nTest 5: Dumping the entire object\n";
var_dump($kindeClient);

<?php
require_once 'vendor/autoload.php';  // Composer autoloader

use Ramsey\Uuid\Uuid;

echo (string) Uuid::uuid4();

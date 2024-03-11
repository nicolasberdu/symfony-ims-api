<?php

use Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\OpenSSLKeyLoader;

require_once __DIR__.'/vendor/autoload.php';

// Ruta donde se almacenarán las claves
$privateKeyPath = __DIR__.'/config/jwt/private.pem';
$publicKeyPath = __DIR__.'/config/jwt/public.pem';

// Generar las claves
$opensslKeyLoader = new OpenSSLKeyLoader();
$keys = $opensslKeyLoader->generateKeyPair();

// Guardar la clave privada
file_put_contents($privateKeyPath, $keys['private']);

// Guardar la clave pública
file_put_contents($publicKeyPath, $keys['public']);

echo 'Claves JWT generadas exitosamente.' . PHP_EOL;

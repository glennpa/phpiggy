<?php

declare(strict_types=1);

// Sugar Function
function dd(mixed $value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die(); // call this function to save time in rendering the page 
}

function e(mixed $value): string
{
    return htmlspecialchars((string) $value);
}

function redirectTo(string $path)
{
    header("Location:{$path}");
    http_response_code(302);
    exit;
}

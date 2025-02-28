<?php

function isUri(string $uri)
{
    if (trim(parse_url($_SERVER['REQUEST_URI'])['path'], "/") == $uri) {
        return true;
    }
    return false;
}

function dd(...$args)
{
    echo "<pre>";
    foreach ($args as $arg) {
        var_dump($arg);
    }
    echo "</pre>";
    die();
}

function config(string $param): string
{
    global $config;
    $path_items = explode(".", $param);
    $result = $config;
    foreach ($path_items as $item) {
        if (isset($result[$item])) {
            $result = $result[$item];
        } else {
            return ''; //gezochte item bestaat niet
        }
    }
    return $result;
}
function specialchars(mixed $var): array|string
{
    if (is_array($var)) {
        foreach ($var as $key => $value) {
            $var[$key] = specialchars($value??"");
        }
        return $var;
    }
    if(is_null($var)){
        return '';
    }
    return htmlspecialchars($var);
}

function view(string $file, array $vars = [], array $unescaped = []): void
{
    $vars = specialchars($vars);
    extract(array_merge($vars,$unescaped));
    if (file_exists(__DIR__ . "/../app/views/" . $file . ".view.php")) {

        require __DIR__ . "/../app/views/" . $file . ".view.php";
    } else {
        if (file_exists(__DIR__ . "/../src/views/" . $file . ".view.php")) {
            require __DIR__ . "/../src/views/" . $file . ".view.php";
        } else {
            dd('required view: /app/views/' . $file . ".view.php" . ' not found');
        }
    }
}

//zal een flash message tonen aan de gebruiker, de opmaak is aan te passen in parts/footer.view
function flash(string $msg, bool $succes = true, $duration = 2500): void
{
    $_SESSION['flash']['msg'] = $msg;
    $_SESSION['flash']['duration'] = $duration;
    if ($succes) {
        $_SESSION['flash']['success'] = $msg;
    } else {
        $_SESSION['flash']['error'] = $msg;
    }
}

//controle van de csrf token
function validateToken(): bool
{
    if (in_array($_POST['_token'] ?? '', $_SESSION['tokens'] ?? [])) {
        $_SESSION['tokens'] = []; //alle tokens wissen, zodat ze niet hergebruikt kunnen worden
        return true;
    }
    if (isset($_SERVER['HTTP_X_CSRF_TOKEN'])) {
        if ($_SERVER['HTTP_X_CSRF_TOKEN'] == ($_SESSION['api_token'] ?? "")) {
            return true;
        }
    }
    return false;
}

//Voor het aanmaken van een token voor je formulier
function csrf($field = true): string
{
    $bytes = random_bytes(256);
    $token = bin2hex($bytes);
    $_SESSION['tokens'][] = $token;
    if ($field) {
        return "<input type=\"hidden\" name=\"_token\" value=\"$token\">";
    } else {
        return $token;
    }
}

function hasRole($role): bool
{
    return ($_SESSION['user'] ?? false) and ($_SESSION['user']['role'] ?? '') == $role;
}

//betreft het een ingelogde gebruiker? (authenticatie)
function auth(): bool
{
    return ($_SESSION['user']['id'] ?? false);
}

// geeft de gegevens van de ingelogde gebruiker terug
// te gebruiken: user()->email
function user(): ?object
{
    return ($_SESSION['user']??null)
        ? (object)$_SESSION['user']
        : null;
}

//Doorsturen naar een andere pagina
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
function old(string $key, string $else=''): string
{
    return ($_SESSION['old'][$key] ?? '') ?: $else;
}
function errors(string $key): string
{
    return $_SESSION['errors'][$key] ?? '';
}
function abort(int $code=404, string $msg="Pagina niet gevonden"): void
{
    http_response_code($code);
    view($code, ['error' => $msg]);
    die();
}

//wordt gebruikt voor Content Security Policy
function getNonce(): string
{
    if (!isset($_SESSION['nonce'])) {
        $bytes = random_bytes(20);
        $_SESSION['nonce'] = bin2hex($bytes);
    }
    return $_SESSION['nonce'];
}
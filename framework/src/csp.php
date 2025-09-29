<?php
header("Content-Security-Policy: base-uri 'self';"
    . "connect-src 'self';"
    . "default-src 'self';"
    . "form-action 'self';"
    . "media-src 'self';"
    . "object-src 'none';"
    . "script-src 'self' 'nonce-" . getNonce() . "' 'unsafe-eval';" // cdn.jsdelivr.net cdn.tailwindcss.com
    . "style-src 'self' 'nonce-" . getNonce() . "';" //cdn.jsdelivr.net cdn.tailwindcss.com
    . "img-src 'self' data:;"
    . "font-src 'self';"
    . "frame-ancestors 'none';"
);

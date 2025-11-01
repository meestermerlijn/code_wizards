<?php

//CSRF protection
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!validateToken()) {
        flash("CSRF-token mismatch error.", false);
        redirect($_SERVER['HTTP_REFERER'] ?? '/');
        die();
    }
}
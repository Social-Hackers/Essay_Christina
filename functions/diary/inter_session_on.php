<?php

use DefineSystem\Cache;

function cache_write_on($login, $passpass, $cache_id) {
    $file = 'session_cache';

    Cache::store($login, $cache_id . '_login', $file);
    Cache::store(hash('sha256', $passpass), $cache_id . '_passpass', $file);
}
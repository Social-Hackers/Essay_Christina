<?php

use DefineSystem\Cache;
use DefineSystem\Session;

function generate_cache_id() {
    $date = date('Y-m-d H:i;s');
    return sha1(rand(0, 100) . $date);
}

function diary_session_on($connection, $cache_id, $inter_passpass) {
    $file = 'session_cache';
    $where = [
        [
            'lognin' => Cache::cargo($cache_id . '_login', $file)
        ],
        [
            'passpass' => Cache::cargo($cache_id . '_passpass', $file)
        ],
        [
            'inter_passpass' => $inter_passpass
        ]
    ];

    $connection->select([
        'id'
    ], 'session_on');
    $connection->where($where);
    $connection->result() ? Session::store('diary_on', true) : print 'session off';

    $connection->update([
        'time_on' => date('Y-m-d H:i:s')
    ], 'session_on');
    $connection->where($where);
    $connection->result();
}
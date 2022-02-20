<?php


function diaryRead($connection, $time_write_from = null, $time_write_to = null) {
    $connection->select([
        '*'
    ], 'diary_christina');
    $where = [];
    if (! is_null($time_write_from)) {
        $where[] = ['time_write' => $time_write_from, '>='];
    }
    if (! is_null($time_write_to)) {
        $where[] = ['time_write' => $time_write_from, '<='];
    }
    if (! empty($where)) {
        $connection->where($where);
    }
    return $connection->result();
}
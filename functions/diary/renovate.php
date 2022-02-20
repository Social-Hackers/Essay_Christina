<?php


function articleSingle($connection, $id) {
    $connection->select([
        '*'
    ], 'diary_christina');
    $connection->where([
        ['id' => $id]
    ]);
    return $connection->result();
}



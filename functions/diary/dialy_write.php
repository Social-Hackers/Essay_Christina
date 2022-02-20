<?php



function dailyWrite($connection , $subject_dialy , $article_dialy ) {
    $connection->setBindValues(false);
    $connection->insert([
        'title', 'article','time_write'
    ],'diary_christina');
    $connection->values([[$subject_dialy, $article_dialy, 'NOW()']]);
    $connection->result();
}





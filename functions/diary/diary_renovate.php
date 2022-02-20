<?php


function renovateArticle($connection, $id , $subject_dialy , $article_dialy) {

    $connection->update(
        [
            'title' => $subject_dialy,
            'article' => $article_dialy
        ]
        , 'diary_christina');
    $connection->where([['id' => $id]]);
    $connection->result();
}

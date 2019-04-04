<?php

function get_all_articles($con) {
    $query = "SELECT * FROM article ORDER BY id DESC";
    $result = mysqli_query($con, $query);
    
    
    if (!$result) {
        die(mysqli_error($con));
    }
    
    $n = mysqli_num_rows($result);
    $articles = array();
    
    
    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    
    return $articles;
}

function get_article($con, $article_id) {
    $query = sprintf("SELECT * FROM article WHERE id=%d", (int)$article_id);
    $result = mysqli_query($con, $query);
    
    if (!$result) {
        die(mysqli_error($con));
    }
    
    $article = mysqli_fetch_assoc($reslut);
    return $article;
}

function add_article() {
    
}

?>
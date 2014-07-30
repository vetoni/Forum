<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            ФОРУМ
        </title>
        <link href="css/general.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include_once "./lib/topicRepository.php";
        $topicRep = new topicRepository();
        $posts = $topicRep->getPosts();
        foreach ($posts as $post) {
            ?>
            <p><?= $post['body'] ?></p>
            <?php
        }
        ?>
    </body>
</html>
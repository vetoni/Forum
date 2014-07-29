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
        $rep = new topicRepository();
        $topics = $rep->getTopics();
        foreach ($topics as $topic) {
            if ($topic['forum_id'] == $_REQUEST["id"]) {
                ?>
                <a href="topic.php?id=<?= $topic['id'] ?>"><?= $topic['name'] ?></a>
                <br/>
            <?php
            }
        }
        ?>
    </body>
</html>


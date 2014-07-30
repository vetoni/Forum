<!DOCTYPE html>
<?php
include_once "./lib/topicRepository.php";
include_once "./lib/forumRepository.php";
$forumId = $_REQUEST["id"];
$topicRep = new topicRepository();
$forumRep = new forumRepository();
$topics = $topicRep->getTopics();
$forumName = $forumRep->getForum($forumId)["name"];
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Какойто форум | <?= $forumName ?>
        </title>
        <link href="css/general.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <?php include_once './include/header.inc.php'; ?>
        </header>
        <nav>
            <?php include_once './include/menu.inc.php'; ?>
        </nav>
        <div class="content">
            <h1><?= $forumName ?></h1>
            <section class="categories">
                <h1>Темы</h1>
                <ul>
                    <?php
                    foreach ($topics as $topic) {
                        if ($topic['forum_id'] == $forumId) {
                            ?>
                            <li>
                                <div class="state">New</div>
                                <div class="description">
                                    <a href="topic.php?id=<?= $topic['id'] ?>"><?= $topic['name'] ?></a>
                                </div>
                                <div class="topics-count">
                                    6
                                    <span>Темы</span>
                                </div>
                                <div class="posts-count">
                                    10
                                    <span>Сообщения</span>
                                </div>
                                <div class="last-post">
                                    Последнее сообщение
                                    <a href="#">admin</a>
                                    <time>2009-11-13</time>
                                </div>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </section>
            <?php include_once './include/siteInfo.inc.php'; ?>
        </div>
        <?php include_once './include/footer.inc.php'; ?>
    </body>
</html>


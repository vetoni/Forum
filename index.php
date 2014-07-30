<!DOCTYPE html>
<?php
include_once "./lib/forumRepository.php";
$topicRep = new forumRepository();
$sections = $topicRep->getSections();
$forums = $topicRep->getForums();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Какойто форум | Главная
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
            <div class="upperLinks">
                <a href="#">Сообщения без ответов</a> • 
                <a href="#">Активные темы</a>
            </div>

            <?php
            foreach ($sections as list($id, $name)) {
                ?>
                <section class="categories">
                    <h1><?= $name ?></h1>
                    <ul>
                        <?php
                        foreach ($forums as $forum) {
                            if ($forum['section_id'] == $id) {
                                ?>
                                <li>
                                    <div class="state">New</div>
                                    <div class="description">
                                        <a href="forum.php?id=<?= $forum['id'] ?>"><?= $forum['name'] ?></a>
                                        <span><?= $forum['description'] ?></span>
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
                <?php
            }
            include_once './include/siteInfo.inc.php';
            ?>            
        </div>
        <?php
        include_once './include/footer.inc.php';
        ?>
    </body>
</html>
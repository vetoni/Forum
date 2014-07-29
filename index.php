<!DOCTYPE html>
<?php
include_once "./lib/forumRepository.php";
$rep = new forumRepository();
$sections = $rep->getSections();
$forums = $rep->getForums();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Какойто форум
        </title>
        <link href="css/general.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <a href="#">
                Название сайта
            </a>
            <form>
                <input type="search" placeholder="Ключевые слова">
            </form>
        </header>
        <nav>
            <ul class="left">
                <li class="active"><a href="#"><i class="fa fa-home"></i> Домашняя</a></li>
                <li><a href="#"><i class="fa fa-group"></i> Пользователи</a></li>
            </ul>
            <ul class="right">
                <li><a href="#"><i class="fa fa-plus"></i> Регистрация</a></li>
                <li><a href="#"><i class="fa fa-sign-in"></i> Вход</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="upperLinks">
                <a href="#">Сообщения без ответов</a>
                • 
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
            ?>
            <div class="siteInfo">
                POWERED BY
                <a href="#">Клуб анонимных программистов</a>
            </div>            
        </div>
        <footer>
            Style by
            <a href="#">Anonymous user</a>            
        </footer>        
    </body>
</html>
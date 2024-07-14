<h1>最新消息</h1>
    <ul>
        <?php
        $news = $News->all();
        foreach ($news as $n) {
            echo "<li>";
            echo $n['title'];
            echo "<span >{$n['article']}</span>";
            echo "</li>";
        }


        ?>
    </ul>
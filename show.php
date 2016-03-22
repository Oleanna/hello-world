<?php
    header('Content-Type: text/html; charset = utf-8');
    require_once('./inc/_external_header.html');

    require_once('./inc/_db_connection.php');
    $query_result = mysql_query("SELECT * FROM `news` WHERE `id` = ".$_REQUEST["id"]."");
    $n = mysql_fetch_array($query_result);
?>
    <h2><a href="index.php">News</a> / <?php echo $n['title']; ?></h2>
    <div>
        <span>#<?php echo $n['id']; ?></span>
        <span class="news-info"><?php echo $n['newsdate']; ?></span>
        <p><?php echo $n['content'] ?></p>
    </div>
<?php require_once('./inc/_external_footer.html'); ?>

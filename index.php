<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once('./inc/_external_header.html');
?>
    <h2>Fresh News</h2>
<?php
    require_once('./inc/_db_connection.php');
    $news_from_db = mysql_query("SELECT * FROM `news` ORDER BY newsdate DESC");

    while ($n = mysql_fetch_array($news_from_db)) {
?>
        <div>
            <span> #<?php echo $n['id']; ?> </span>
            <a href="<?php echo './show.php?id='.$n['id']; ?>">
                <?php echo $n['title']; ?>
            </a>
            <span class="news-info"><?php echo $n['newsdate']; ?></span>
        </div>

<?php }
  require_once('./inc/_external_footer.html');
?>

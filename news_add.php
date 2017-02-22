<?php
    require_once ('News.php');
    if (count($_POST) > 0){
        $news = new News();
        $news->setData($_POST['news']);
    }

?>

<pre>
<?php
    var_dump($_POST);
?>
</pre>

<form action="" method="POST">
    <label for="">
        Заголовок
        <input type="text" name="news[title]">
    </label><br>
    <label for="">
        Текст Новости
        <input type="text" name="context">
    </label><br>
    <label for="">
        Важность новости
        <input type="checkbox" name="important">
    </label><br>

    <input type="submit">
</form>



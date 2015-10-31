<div class="site_header" xmlns="http://www.w3.org/1999/html">
    <div class="center_side">
        <div class="site_menu">
            <a href="/">Главная</a>
        </div>
    </div>
</div>

<div class="center_side clear">
  <article class="article">


    <h1 class="first_header">
        Статья #<?= $id ?>
    </h1>

    <p>
        Содержимое статьи
    </p>

    <h3>Комментарии</h3>
    <?
        if (!$comments) {
            echo "<p>пусто</p>";
        } else {
            # какой-нибудь цикл по элементам массива комментариев к статье
        }
    ?>

    <p>
        <h3>Выскажи свое мнение</h3>
        <form method="POST" action="#">
            <label for="blankNameInput">Ваше имя</label>
            <input type="text" name="name" id="blankNameInput" />
            <label for="blankCommentTextarea">Комментарий</label>
            <textarea name="comment" id="blankCommentTextarea"  required></textarea>
            <p><button class="master" id="blankSendButton">Добавить комментарий</button></p>
        </form>
    </p>

  </article>
</div>
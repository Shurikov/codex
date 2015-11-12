<div class="center_side clear">
    <article class="article">

        <div class="article_image">
            <img src="/public/img/covers/<?= $article->cover ?>"/>
        </div>

        <p class="time_subtitle"><?= $article->dt_create ?></p>

        <h1 class="first_header">
            <?= $article->title ?>
        </h1>

        <p class="first_header">
            <?= $article->description ?>
        </p>

        <p>
            <?= $article->text ?>
        </p>

        <h3>Комментарии</h3>
        <?
        $comment_level = [];
        foreach ($comments as $current_commentary):

            foreach ($comment_level as $current_comment_level):
                if ($current_comment_level > $current_commentary['parent_id']) {
                    array_pop($comment_level);
                }
            endforeach;

            $level = count($comment_level) * 39;
            $comment_level[] = $current_commentary['id'];


            if ($current_commentary['user_id'] == 0) {
                $username = 'Гость';
            } else {
                $username = $names_for_comments[$current_commentary['id']]['author'];
            };
        ?>

            <div style='margin: 0 <?= $level ?>px'>

                <p>
                    <a href='/article/delcomment/<?= $current_commentary['id'] ?>'>[удалить]</a>
                    <a onclick="document.getElementById('answer_to_comment').value=<?= $current_commentary['id'] ?>;
                        document.getElementById('blankCommentTextarea').innerHTML='<?= $username ?>, ';
                        document.getElementById('answer_username')
                        .innerHTML='Ваш ответ на комментарий пользователя <?= $username ?>: ' +
                        '<i> <?= $current_commentary['text'] ?></i>';">[ответить]</a>
                    <b> <?= $username ?></b>: <?= $current_commentary['text'] ?>

                </p>

            </div>
        <? endforeach; ?>

        <p>

        <h3 id="answer_username">Выскажи свое мнение</h3>

        <form method="POST" action="/article/addcomment">
            <input type="hidden" name="article_id" value="<?= $article->id ?>"/>
            <input type="hidden" name="parent_id" value="0" id="answer_to_comment"/>
            <label for="blankCommentTextarea">Комментарий</label>
            <textarea name="text" id="blankCommentTextarea" required></textarea>

            <p>
                <button class="master" id="blankSendButton">Добавить комментарий</button>
            </p>
        </form>
        </p>

    </article>
</div>

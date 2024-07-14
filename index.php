<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav>
            <a href="select.php">データ一覧</a>
        </nav>
    </header>＄
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <main>
        <form method="POST" action="insert.php">
            <fieldset>
                <legend>ブックマーク</legend>
                <label for="name">書籍名</label>
                <input type="text" id="name" name="book_name" required placeholder="ハリーポッター">

                <label for="email">書籍URL</label>
                <input type="email" id="email" name="book_url" required placeholder="amazon.com">

                <label for="content">書籍コメント</label>
                <textarea id="content" name="book_comment" rows="4" required placeholder="本のご感想をお聞かせください"></textarea>

                <input type="submit" value="送信する">
            </fieldset>
        </form>
    </main>
    <!-- Main[End] -->


</body>

</html>
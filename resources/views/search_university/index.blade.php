<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>大学院進学ナビ~東北版~</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>大学院検索</h1>
        <div class='university'>
            <p class='abstract'>ここでは大学院を検索することができます。</p>
            <div>
                <form action="{{ route('university.index') }}" method="GET">
                    <input type="text" name="keyword" value="{{ $keyword }}">
                    <input type="submit" value="検索">
                </form>
            </div>
            <div class='post'>
                <h2 class='title'>Title</h2>
                <p class='body'>This is a sample body.</p>
            </div>
        </div>
    </body>
</html>
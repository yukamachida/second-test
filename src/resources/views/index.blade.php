<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
</head>

<body>
    <h1>商品一覧</h1>
    <form action="/products/register" method="post">
        @csrf
        <div>
            <input class="" type="submit" value="+商品を追加">
        </div>
    </form>
    

    <form action="/products/search" method="post">
        @csrf
        <div class="search__group-content">
            <input type="text" name="fruit" placeholder="商品名で検索" />
        </div>
        <div class="search__button">
            <button class="search__button-submit" type="submit">検索</button>
        </div>
    </form>

    <form actione="/products/{productId}" method="post">
        商品表示がめん
    </form>

    <h2>価格順で表示</h2>
    <select name="sort">
        <option>価格で並べ替え</option>
        <option>高い順に表示</option>
        <option>低い順に表示</option>

    </select>




</body>

</html>
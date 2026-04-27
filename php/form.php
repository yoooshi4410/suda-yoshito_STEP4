<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEP4の確認テスト</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>
    <form action="confirm.php" method="post">
        <div class="form">
            <label for="name">名前：</label>
            <input type="text" id="name" name="name">

            <label for="age">年齢：</label>
            <input type="text" id="age" name="age">

            <label for="phone">電話番号：</label>
            <input type="tel" id="phone" name="phone">

            <label for="email">メールアドレス：</label>
            <input type="email" id="email" name="email">

            <label for="address">住所：</label>
            <input type="text" id="address" name="address">

            <label for="question">質問：</label>
            <input type="text" id="question" name="question">

            <label for="gender">性別：</label>
            <select id="gender" name="gender">
                <option value="">選択してください</option>
                <option value="man">男性</option>
                <option value="women">女性</option>
            </select>
            <input type="submit" id="submit" name="submit">
        </div>
    </form>
       
</body>
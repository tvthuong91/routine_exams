<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>レストランレビュサイト - 小テスト</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/list.css" />
</head>
<body id="list">
	<header>
		<h1>レストラン レビュ サイト</h1>
	</header>
	<main>
		<article>
			<div class="clearfix">
			<h2>レストラン一覧</h2>
			<?php
			isset($_POST["area"]) ? $area = $_POST["area"] : $area = "";
            //var_dump($area);
            
            $dsn = "mysql:host=localhost;dbname=restaurantdb;charset=utf8";
            $user = "restaurantdb_admin";
            $password = "admin123";
            $pdo = new PDO($dsn, $user, $password);
            $sql = "select * from restaurants where area = ?";
            $pstmt = $pdo->prepare($sql);
            $pstmt->bindValue(1, $area);
            $pstmt->execute();
            $records = $pstmt->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($records);
			?>
			<section class="entry">
				<form action="list.php" method="post">
					<select name="area">
						<option value="">-- 地域を選んでください --</option>
						<option value="福岡">福岡</option>
						<option value="神戸">神戸</option>
						<option value="伊豆">伊豆</option>
					</select>
					<input type="submit" value="検索" />
				</form>
			</section>
			</div>
			<section class="result">
				<p>7件のレストランが見つかりました。</p>
				<table class="list">
					<tr>
						<td class="photo"><img name="image" alt="「Wine Bar ENOTECA」の写真" src="../pages/img/restaurant_1.jpg" /></td>
						<td class="info">
							<dl>
								<dt name="name">Wine Bar ENOTECA</dt>
								<dd name="description">常時10種類以上の赤・白ワインをご用意しています。<br />記念日にご来店ください。</dd>
							</dl>
						</td>
						<td class="link"><a href="detail.php?id=1">詳細</a></td>
					</tr>
					<tr>
						<td class="photo"><img name="image" alt="「スペイン料理 ポルファボール！」の写真" src="../pages/img/restaurant_2.jpg" /></td>
						<td class="info">
							<dl>
								<dt name="name">スペイン料理 ポルファボール！</dt>
								<dd name="description">味が自慢。スペイン現地で学んだシェフが出す味は本物です。</dd>
							</dl>
						</td>
						<td class="link"><a href="detail.php?id=2">詳細</a></td>
					</tr>
					<tr>
						<td class="photo"><img name="image" alt="「パス・パスタ」の写真" src="../pages/img/restaurant_3.jpg" /></td>
						<td class="info">
							<dl>
								<dt name="name">パス・パスタ</dt>
								<dd name="description">本当のパスタを味わうならパス・パスタで！<br />休日の優雅なランチタイムに是非どうぞ。</dd>
							</dl>
						</td>
						<td class="link"><a href="detail.php?id=3">詳細</a></td>
					</tr>
					<tr>
						<td class="photo"><img name="image" alt="「レストラン有閑」の写真" src="../pages/img/restaurant_4.jpg" /></td>
						<td class="info">
							<dl>
								<dt name="name">レストラン「有閑」</dt>
								<dd name="description">広い店内で、お昼の優雅なひと時を過ごしませんか？</dd>
							</dl>
						</td>
						<td class="link"><a href="detail.php?id=4">詳細</a></td>
					</tr>
					<tr>
						<td class="photo"><img name="image" alt="「ビストロ　ルーヴル」の写真" src="../pages/img/restaurant_5.jpg" /></td>
						<td class="info">
							<dl>
								<dt name="name">ビストロ「ルーヴル」</dt>
								<dd name="description">高層ビル42階のビストロで、県内が一望できる。恋人とのひと時をここで過ごしませんか。</dd>
							</dl>
						</td>
						<td class="link"><a href="detail.php?id=5">詳細</a></td>
					</tr>
					<tr>
						<td class="photo"><img name="image" alt="「海沿いのレストラン La Mer」の写真" src="../pages/img/restaurant_6.jpg" /></td>
						<td class="info">
							<dl>
								<dt name="name">海沿いのレストラン La Mer</dt>
								<dd name="description">海が見える、海沿いのレストランです。</dd>
							</dl>
						</td>
						<td class="link"><a href="detail.php?id=6">詳細</a></td>
					</tr>
					<tr>
						<td class="photo"><img name="image" alt="「レストラン さくら」の写真" src="../pages/img/restaurant_7.jpg" /></td>
						<td class="info">
							<dl>
								<dt name="name">レストラン さくら</dt>
								<dd name="description">四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。\n旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。</dd>
							</dl>
						</td>
						<td class="link"><a href="detail.php?id=7">詳細</a></td>
					</tr>
				</table>
			</section>
		</article>
	</main>
	<footer>
		<div class="copyright">&copy; 2020 the applied course of web system development</div>
	</footer>
</body>
</html>
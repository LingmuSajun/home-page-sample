<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Lingmu - PROFILE</title>
        <meta name="description" content="Lingmuプロフィールページ">
        <link rel="icon" type="image/png" href="../../resources/images/zanzaibar.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="../../resources/css/profile/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="news" class="big-bg">
            <header class="page-header wrapper">
                <h1></h1>
                <nav>
                    <ul class="main-nav">
                        <li><a href="profile.php">PROFILE</a></li>
                        <li><a href="menu.html">PORTFOLIO</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <div class="wrapper">
                <h2 class="page-title">PROFILE</h2>
            </div><!-- /.wrapper -->
        </div><!-- /#news -->

        <div class="news-contents wrapper">
            <article>
                <header class="post-info">
                    <h2 class="post-title">新進気鋭のDeveloper</h2>
                    <p class="post-date"><?php echo date("m/d"); ?> <span><?php echo date("Y"); ?></span></p>
                    <p class="post-cat">職種：サーバサイドエンジニア</p>
                </header>
                <img src="../../resources/images/zanzaibar2.jpg" alt="店内の様子">
                <p>
                    2018年3月に長崎大学を卒業後、NTTデータの子会社に入社。
                    要件定義や仕様書作成よりも開発がしたいという思いから、
                    1年目でEC系企業のサーバサイドエンジニアに転身。
                </p>
                <p>
                    1,000万ダウンロード突破のサービスを支えるエンジニアとして、
                    運用・改修・新規開発を幅広く担当している。
                    外部連携レコメンドAPI作成、認証機能追加、ログインページ全面改修、会員登録ページ全面改修、
                    マイページ全面改修、複数LP作成等の実績あり。
                </p>
                <p>「ただ作る」のではなく、使われることを意識して、「共に作る」ことが仕事のモットー。</p>
            </article>

            <aside>
                <h3 class="sub-title">Other Services</h3>
                <ul class="sub-menu">
                    <li><a href="https://www.facebook.com/suzukisoshun">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/in/%E9%A2%AF%E9%A7%BF-%E9%88%B4%E6%9C%A8-226029159/">LinkedIn</a></li>
                    <li><a href="https://www.wantedly.com/users/76977782">Wantedly</a></li>
                    <li><a href="https://github.com/LingmuSajun">GitHub</a></li>
                </ul>

                <h3 class="sub-title">Self Introduction</h3>
                <p>
                    得意な技術はPHP, MySQL。
                    趣味はサッカー観戦, 散歩, ギター, 映画鑑賞, Podcast。
                </p>
            </aside>
        </div><!-- /.news-contents -->

        <footer>
            <div class="wrapper">
                <p><small>&copy; 2020 Lingmu</small></p>
            </div>
        </footer>
    </body>
</html>

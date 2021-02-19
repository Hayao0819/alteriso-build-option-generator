<!DOCTYPE html>
<html lang="ja">
<head>
    <?php
        // ページ設定
        $title = "トップページ";
        $commonhtml = "${_SERVER['DOCUMENT_ROOT']}/buildmydist-2/commonhtml";
        $distro = "top";

        // 共通ファイルを読み込み
        $domain = $_SERVER['HTTP_HOST'];
        include("${commonhtml}/head.php");
    ?>
</head>
<body>
    <?php include("${commonhtml}/header.php"); ?>
    <main>
        <h2>このサイトについて</h2>
        <p>様々なメジャーなLinux系OSを自分の好きなようにカスタマイズして、再配布するためのサイトです。</p>
        <p></p>
        <p>複数のパソコンに同じOSを入れて設定を繰り返すといった際に使うことができます。</p>
        <p>また、自分がカスタマイズしたものを誰かに使ってもらいたい！という人はネット上に公開することもできます。</p>

        <h2>このサイトができるまでの経緯</h2>
        <p>もともと、ネットで知り合った友人とUbuntu派生のディストリを開発しようと情報を収集したのが始まりでした。</p>
        <p>しかし、日本語の情報はほぼ皆無。少しだけある情報も古くて現在は使えない場合がほとんどでした。</p>
        <p>そこで様々な情報を集め、足りないものは独自で開発し、誰でもかんたんに作れるようにしようというのがこのサイトの目的です。</p>
        <p><a href="http://localhost/buildmydist/index.html">【2019年版】Ubuntu系のOSを自作しよう</a>はこのサイトの前身です。既に古くなっており、使えなくなっている情報も多いです。</p>
        <p>Ubuntuだけではなく、より多くの情報をまとめやすくするためにサイトを書き直しました。</p>
        <p>旧サイトにかかれている内容はかなり古くなっていますので注意してください。（更新予定はありません）</p>

        <h2>まずは何をするべきか</h2>
        <p>「Ubuntu系のOSを自作しよう」（旧サイト）の公開後、とても多くの問い合わせをTwitterのDMにいただきました。</p>
        <p>当時はまだ中2で時間もたくさんあったので1つ1つ対応を行っていましたが、現在は多忙により難しくなっています。</p>
        <p>そのため、なるべく自分で解決できる力が必要です。（問い合わせてくれればできる限りお答えします。）</p>
        <p>当然ですが、特に必要になるのはLinuxの知識です。</p>
        <p>軽くGUIをいじるだけならばまだ良いのですが、システムの深い部分まで変更をしようとすると多少なりとも知識が必要になります。</p>
        <p>また、独自のソフトウェアを追加したい場合や、アップデートの仕組み（パッケージマネージャ）を利用しようとする場合は、シェルスクリプトやPython、Cの知識なども必要になってきます。</p>
        <p>いきなり開発を始める前に必要なことを十分に調べ、構想が実現可能であるかどうかを検証する必要があります。</p>

        <h2>筆者について</h2>
        <p>しがない田舎の高校生です。偉そうなことを言っていますが何もできません。<a href="https://twitter.com/Hayao0819">Twitter</a>をフォローしてくれると喜びます。</p>
        <p>Fascode Networkに所属してAlter Linuxを開発しています。最近はインフラとフロントエンドにも手を出したいと考えていたり。</p>
        <p>このサイトで初めてPHPとJqueryを使った。難しい。更新が遅いのはだいたいこれのせい。CSSが苦手。いみわからん。</p>
        <p>最推しのOSはArch Linux。得意な言語はありません。好きなアニメはまどマギと青ブタ、らきすた。</p>

        <h2>誤字脱字を見つけたら</h2>
        <p>筆者に知らせていただくか、誤字修正のプルリクエストを送ってください。</p>
        <p>ソースコードは<a href="https://github.com/hayao0819/hayao.fascode.net" target="_blank">GitHub</a>で公開されています。</p>
        
    </main>

    <?php include("${commonhtml}/footer.php"); ?>
</body>
</html>

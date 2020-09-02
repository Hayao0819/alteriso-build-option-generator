<!DOCTYPE html>
<html>
    <head>
        <title>AlterISO3 ビルドオプション ジェネレータ</title>
        <link rel="stylesheet" href="mobile.css" media="screen and (max-width:480px)">
        <link rel="stylesheet" href="pc.css" media="screen and (min-width:480px)">
        <script type="text/javascript" src="main.js"></script>
    </head>
    <body>
        <header>
            <h1>AlterISO3 ビルドオプション ジェネレータ</h1>
            <p>AlterISO3のスクリプトのオプションを生成します。ハヤオのウェブ関連言語の勉強用です。</p>
        </header>

        
        <main>
            <form method="POST">
                <h2>ビルド設定</h2>

                <div class="box">

                    <!-- Plymouth ここから-->
                    <div class="box_child">
                        <p class="option_title"><h3>Plymouth</h3></p>
                        <p class="option_description">有効にすると起動時にアニメーションを表示します</p>
                        <p class="option_form">
                            <label for="plymouth_enable"><input type="radio" name="plymouth" value="enable" id="plymouth_enable" checked>有効</label>
                            <label for="plymouth_disable"><input type="radio" name="plymouth" value="disable" id="plymouth_disable">無効</label>
                        </p>
                    </div>
                    <!-- Plymouth ここまで-->

                    <!-- クリーニング ここから-->
                    <div class="box_child">
                        <p class="option_title"><h3>クリーニング</h3></p>
                        <p class="option_description">ビルド中に不要なファイルを削除します</p>
                        <p class="option_form">
                            <label for="clean_enable"><input type="radio" name="clean" value="enable" id="clean_enable" checked>有効</label>
                            <label for="clean_disable"><input type="radio" name="clean" value="disable" id="clean_disable">無効</label>
                        </p>
                    </div>
                    <!-- クリーニング ここまで-->

                    <!-- tarball ここから-->
                    <div class="box_child">
                        <p class="option_title"><h3>Tarball</h3></p>
                        <p class="option_description">Tarball形式でビルドします</p>
                        <p class="option_form">
                            <label for="tarball_enable"><input type="radio" name="tarball" value="enable" id="tarball_enable">有効</label>
                            <label for="tarball_disable"><input type="radio" name="tarball" value="disable" id="tarball_disable" checked>無効</label>
                        </p>
                    </div>
                    <!-- tarball ここまで-->



                    <!-- アーキテクチャ ここから-->
                    <div class="box_child">
                        <p class="option_title"><h3>アーキテクチャ</h3></p>
                        <p class="option_description">ビルドするアニメーションを指定します</p>
                        <p class="option_form">
                            <select name="architecture" id="architecture">
                                <option value="i686">i686</option>
                                <option value="x86_64" selected>x86_64</option>
                            </select>
                        </p>
                    </div>
                    <!-- アーキテクチャ ここまで-->


                    <!-- 圧縮設定 ここから-->
                    <div class="box_child">
                        <p class="option_title"><h3>Squashfsの圧縮方式</h3></p>
                        <p class="option_description">Rootfsの圧縮方式を指定します</p>
                        <p class="option_form">
                              <select name="sfs-comp-type" id="sfs-comp-type">
                                <option value="gzip">gzip</option>
                                <option value="lzma">lzma</option>
                                <option value="lzo">lzo</option>
                                 <option value="lz4">lz4</option>
                                <option value="xz">xz</option>
                                <option value="zstd" selected>zstd</option>
                            </select>
                        </p>
                    </div>
                    <!-- 圧縮設定 ここまで-->

                    <!-- ユーザー ここから-->
                    <div class="box_child">
                        <p class="option_title"><h3>ライブ環境ユーザー名</h3></p>
                        <p class="option_description">ライブ環境のユーザー名を指定します</p>
                        <p class="option_form"><input type="text" id="username" placeholder="alter" value="alter"></p>
                    </div>
                    <div class="box_child">
                        <p class="option_title"><h3>ライブ環境パスワード</h3></p>
                        <p class="option_description">ライブ環境のユーザーのパスワードを設定します</p>
                        <p class="option_form"><input type="password" id="password" placeholder="alter" value="alter"></p>
                    </div>
                    <!-- ユーザー ここまで-->

                    <!-- デバッグ用オプション ここから -->
                    <div class="box_child">
                        <p class="option_title"><h3>デバッグメッセージ</h3></p>
                        <p class="option_description">デバッグメッセージを表示します</p>
                        <p class="option_form">
                            <label for="debug_enable"><input type="radio" name="debug" value="enable" id="debug_enable">有効</label>
                            <label for="debug_disable"><input type="radio" name="debug" value="disable" id="debug_disable" checked>無効</label>
                        </p>
                    </div>
                    <!-- デバッグ用オプション ここまで -->

                </div>



                <h2>実行</h2>
                <p>このジェネレータでは引数はデフォルト値ではない場合のみ指定するようになっています。</p>
                <textarea id="output" disabled></textarea><br>
                <label for="only_no_default"><input name="only_no_default" type="checkbox" id="only_no_default">デフォルトの値も引数で指定する。</label>
                <input type="button" value="生成" onClick="startgen()">
            </form>
        </main>
        
        

        <footer>
        </footer>
    </body>

</html>
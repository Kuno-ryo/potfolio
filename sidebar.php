<aside>
            <div class="title">Profile</div>
            <div class="sns">
                <a href="https://twitter.com/Ryo41768750"><div class="profile-sns"><i class="fa-brands fa-twitter"></i></div></a>
                <a href="https://www.instagram.com/ryom_a1115/"><div class="profile-sns"><i class="fa-brands fa-instagram"></i></div></a>
            </div>
            <div class="profile-text">
                <dl><dt>名前</dt><dd>Ryo</dd></dl>
                <dl><dt>所在地</dt><dd>京都府京都市</dd></dl>
                <dl><dt>得意ジャンル</dt><dd>教育、バイク、音楽、飲食</dd></dl>
                <dl><dt>職務経歴</dt><dd>スターバックス→主体性、コミニュケーション能力が高いです！<br>小学校教員→教えること、要点をまとめる事が得意です！<br>Web制作→複数回フリーランスとしてホームページを制作しました！</dd></dl>
            </div>
            <div class="twitter"><a class="twitter-timeline" data-width="700" data-height="450" href="https://twitter.com/Ryo41768750?ref_src=twsrc%5Etfw">Tweets by Ryo41768750</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
            <div class="title">Category</div>
            <?php
                wp_list_categories(array(
                    'title_li' => '',  //デフォルトで出力されるタイトルを非表示
                    'show_count' => 1 //各カテゴリーに投稿数を表示する
                ));
            ?>
</aside>
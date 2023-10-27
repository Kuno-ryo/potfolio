<?php get_header(); ?>

    <section class="inner">
        <div class="main-visual wow fadeInUp " data-wow-delay=".5s"><img class="main-img" src="<?php echo get_template_directory_uri() ?>/img/main-visual.PNG" alt=""></div>
        <span class="letter first-letter wow fadeInLeft" data-wow-delay=".8s">Ryo</span>
        <span class="letter second-letter wow fadeInRight" data-wow-delay=".8s">Portfolio</span>
    </section>

    <section class="inner">
        <div class="swiper wow fadeInUp" data-wow-delay=".1s">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/img/wordpress.PNG" alt=""></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/img/cording.PNG" alt=""></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/img/design.PNG" alt=""></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
  
            <!-- If we need scrollbar -->
           <div class="swiper-scrollbar"></div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    <section class="main-contents">
        <section class="main-content inner">

            <section id="work">
                <div class="title wow fadeInUp" data-wow-delay=".1s">Work</div>
                <div class="title-second wow fadeInUp" data-wow-delay=".1s">実績</div>
                <div class="work-contents wow fadeInUp"  data-wow-delay=".3s">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="work-content">
                            <div class="work-img"><img src="<?php the_post_thumbnail(''); ?></div>
                            <dl>
                                <dt><?php
                                $categories = get_the_category();
                                if ( $categories ) {
                                    echo '<ul>';
                                    foreach ( $categories as $category ) {
                                        echo '<li>'.$category->name.'</li>';}
                                        echo '</ul>';
                                    }
                                ?></dt>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d.'); ?></time>
                            </dl>
                            <div class="work-title"><?php the_title(); ?></div>
                            <div class="work-text"><?php the_excerpt(); ?></div>
                        </div>
                    </a>
                <?php endwhile; endif; ?>
                </div>
                <a href="<?php echo home_url(); ?>/archive" class="btn btn-border wow fadeInUp"  data-wow-delay=".1s">実績一覧</a>
            </section>
    
            <section id="skill">
                <div class="title wow fadeInUp"  data-wow-delay=".1s">Skill</div>
                <div class="title-second wow fadeInUp"  data-wow-delay=".1s">スキル各種</div>
                <div class="skill-contents wow fadeInUp"  data-wow-delay=".1s">
                    <div class="skill-visual"><img class="skill-img" src="<?php echo get_template_directory_uri() ?>/img/wordpress-g75348f2b8_1280.jpg" alt=""></div>
                    <dl class="skill-content">
                        <h1>WordPress</h1>
                        <dt>投稿機能やお問い合わせ機能のついたホームページを制作できます。スマホやタブレットでもデザインを崩さないユーザー目線でのデザインを設計します。</dt>
                        <dd>使用ツール、言語 HTML,CSS,jQuery,SASS,WordPress</dd>
                    </dl>
                </div>
                <div class="skill-contents skill-even wow fadeInUp"  data-wow-delay=".1s">
                    <div class="skill-visual"><img class="skill-img" src="<?php echo get_template_directory_uri() ?>/img/cording-g9ed4c9f07_1280.jpg" alt=""></div>
                    <dl class="skill-content content-even">
                        <h1>Cording</h1>
                        <dt>頂いたデザインを再現度高くコーディングいたします。アニメーションも実装可能です。また画像やコードを軽量化し、使いやすいホームページを実現します。</dt>
                    </dl>
                </div>
                <div class="skill-contents wow fadeInUp"  data-wow-delay=".1s">
                    <div class="skill-visual"><img class="skill-img" src="<?php echo get_template_directory_uri() ?>/img/design-g3b394036a_1280.jpg" alt=""></div>
                    <dl class="skill-content">
                        <h1>Design</h1>
                        <dt>色やフォント、コンテンツ構成など理論に基づいたデザインを設計します。簡単な画像加工やバナー制作もいたします。</dt>
                        <dd>使用ツール AdobeXD,Photoshop,Illustrator</dd>
                    </dl>
                </div>
            </section>

            <section class="skill-sp">
                <div class="sp-back sp-first wow fadeInUp"  data-wow-delay=".1s">
                    <dl class="sp-content">
                        <h1>WordPress</h1>
                        <dt>投稿機能やお問い合わせ機能のついたホームページを制作できます。スマホやタブレットでもデザインを崩さないユーザー目線でのデザインを設計します。</dt>
                        <dd>使用ツール、言語 HTML,CSS,jQuery,SASS,WordPress</dd>
                    </dl>
                </div>
                <div class="sp-back sp-second wow fadeInUp"  data-wow-delay=".1s">
                    <dl class="sp-content">
                        <h1>Cording</h1>
                        <dt>色やフォント、コンテンツ構成など理論に基づいたデザインを設計します。簡単な画像加工やバナー制作もいたします。</dt>
                    </dl>
                </div>
                <div class="sp-back sp-third wow fadeInUp"  data-wow-delay=".1s">
                    <dl class="sp-content">
                        <h1>Design</h1>
                        <dt>色やフォント、コンテンツ構成など理論に基づいたデザインを設計します。簡単な画像加工やバナー制作もいたします。</dt>
                        <dd>使用ツール AdobeXD,Photoshop,Illustrator</dd>
                    </dl>
                </div>
            </section>

            <section class="price">
                <div class="title wow fadeInUp"  data-wow-delay=".1s">Price</div>
                <div class="title-second wow fadeInUp"  data-wow-delay=".1s">料金表</div>
                <table class="table-default wow fadeInUp"  data-wow-delay=".1s">
                    <tr>
                        <th>WordPress化</th>
                        <td>100,000円〜</td>
                    </tr>
                    <tr>
                        <th>コーディング + WordPress化</th>
                        <td>130,000円〜</td>
                    </tr>
                    <tr>
                        <th>コーディング + デザイン + WordPress化</th>
                        <td>150,000円〜</td>
                    </tr>
                    <tr>
                        <th>コーディングのみ（トップ）</th>
                        <td>30,000円〜</td>
                    </tr>
                    <tr>
                        <th>コーディングのみ（下層）</th>
                        <td>20,000円〜</td>
                    </tr>
                    <tr>
                        <th>コーディング+デザイン（トップ）</th>
                        <td>50,000円〜</td>
                    </tr>
                    <tr>
                        <th>コーディング+デザイン（下層）</th>
                        <td>30,000円〜</td>
                    </tr>
                    <tr>
                        <th>バナー作成</th>
                        <td>8,000円〜</td>
                    </tr>
                </table>
                <p>※ 詳しい費用はお問い合わせ時にご確認ください。</p>
            </section>

            <section id="schedule">
                <div class="title wow fadeInUp"  data-wow-delay=".1s">Schedule</div>
                <div class="title-second wow fadeInUp"  data-wow-delay=".1s">仕事の流れ<br>（ホームページ制作の場合）</div>
                <div class="schedule-img wow fadeInUp"  data-wow-delay=".1s"><img src="<?php echo get_template_directory_uri() ?>/img/schedule.PNG" alt=""></div>
                <div class="schedule-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="schedule-number">1</div>
                    <div class="schedule-list">
                        <div class="schedule-title">ヒアリング　<br class="sp-br">方向性の共有と”強み”を引き出す</div>
                        <div class="schedule-text">クライアント様が求めるサイト像を共有するための丁寧なヒヤリングを行います。そこから「集客力」を高めるための強みを引き出します。これがサイトを作るための根幹になります。</div>
                    </div>
                </div>
                <div class="schedule-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="schedule-number">2</div>
                    <div class="schedule-list">
                        <div class="schedule-title">デザイン　<br class="sp-br">理論に基づいた集客のためのデザイン</div>
                        <div class="schedule-text">いいデザインは単にかっこいい、かわいいデザインではありません。色、フォント、構成など、全てがユーザー目線に立った理論的な集客のためのデザインを作成します。</div>
                    </div>
                </div>
                <div class="schedule-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="schedule-number">3</div>
                    <div class="schedule-list">
                        <div class="schedule-title">コーディング　<br class="sp-br">軽量化と保守性の向上</div>
                        <div class="schedule-text">画像やコードの軽量化を行うことで、ユーザーにとって使いやすいサイトにすることができます。またSEO対策、スパム対策によって保守性の高いサイトを作成します。</div>
                    </div>
                </div>
                <div class="schedule-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="schedule-number">4</div>
                    <div class="schedule-list">
                        <div class="schedule-title">納品　<br class="sp-br">公開テストの実施、<br class="sp-br">アフターフォローまで</div>
                        <div class="schedule-text">独自の公開テストを行うことでクオリティを担保します。また完成して終わりではなく、当方ではご縁を大切にしております。修正や集客情報の共有などアフターフォローも充実しています。</div>
                    </div>
                </div>
            </section>

            <section id="Q&A">
                <div class="title wow fadeInUp"  data-wow-delay=".1s">Q&A</div>
                <div class="title-second wow fadeInUp"  data-wow-delay=".1s">よくある質問</div>
                <div class="qa-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="qa-box-q">画像や文章は用意してもらえますか？
                        <div class="qa-icon">
                            <div class="qa-icon-bar1"></div>
                            <div class="qa-icon-bar2"></div>
                        </div>
                    </div>
                    <div class="qa-box-a">画像に関しては、無料で商用可能な画像を用いて、サイトに適した画像をご用意することができます。また簡単な画像の加工、バナーの制作が可能です。<br>文章に関しては、基本的にはご用意いただくか、その文章をセールス仕様にリライトさせていただきます。ご希望の方はヒヤリングから必要な文章を洗い出してから適切な文章を作成させていただきます。</div>
                </div>
                <div class="qa-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="qa-box-q">どんなサイトの制作が得意ですか？
                        <div class="qa-icon">
                            <div class="qa-icon-bar1"></div>
                            <div class="qa-icon-bar2"></div>
                        </div>
                    </div>
                    <div class="qa-box-a">コーポレートサイトや飲食店のホームページ、集客用のLPの制作が得意です。日頃から様々なコーポレートサイトの特徴や、集客力を高めるためのアイデアを集めていますので、お力になれるかと思います。</div>
                </div>
                <div class="qa-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="qa-box-q">納期はどれくらいですか？
                        <div class="qa-icon">
                            <div class="qa-icon-bar1"></div>
                            <div class="qa-icon-bar2"></div>
                        </div>
                    </div>
                    <div class="qa-box-a">ボリュームにもよりますが、更新機能のない1〜8ページのサイトでしたら最短2週間程度で制作可能です。WordPressの実装が必要でしたら1ヶ月程度頂戴しています。ご提案時の納期より早めの納品を心がけております。</div>
                </div>
                <div class="qa-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="qa-box-q">スマホやタブレットに対応していますか？
                        <div class="qa-icon">
                            <div class="qa-icon-bar1"></div>
                            <div class="qa-icon-bar2"></div>
                        </div>
                    </div>
                    <div class="qa-box-a">基本的に全てのサイトにおいて無料でスマホやタブレットに適したレスポンシブ対応で制作致します。</div>
                </div>
                <div class="qa-content wow fadeInRight"  data-wow-delay=".1s">
                    <div class="qa-box-q">対応できないことはありますか？
                        <div class="qa-icon">
                            <div class="qa-icon-bar1"></div>
                            <div class="qa-icon-bar2"></div>
                        </div>
                    </div>
                    <div class="qa-box-a">高度なコーディング（ECサイトの制作、複雑な機能の追加など）は対応できません。また企業の認証が必要な画像や文章はご用意することはできません。詳しくはお問合せにてご相談ください。</div>
                </div>
            </section>

            <section id="contact">
                <div class="title wow fadeInUp"  data-wow-delay=".1s">Contact</div>
                <div class="title-second wow fadeInUp"  data-wow-delay=".1s">お問い合わせ</div>
				<?php echo do_shortcode( '[contact-form-7 id="24" title="コンタクトフォーム 1"]' ); ?>
            </section>
    
        </section>
    
        <?php get_sidebar(); ?> 

    </section>

<?php get_footer(); ?>
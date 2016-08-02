<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goodwin & Company</title>
    <meta charset="utf-8" />

    <!-- touch and favicons -->

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ff9600">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/vendor/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/browserDetect.js"></script>
    <script type="text/javascript" src="js/maps.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDzfVAIFhKB1rNo_bYO4BPo66O_FN4x8N8"></script>

</head>

<body onload="initialize()">

<div class="menu-bg">
    <div class="content content--md text-center">
        <a href="#what" class="header-link">我々が得意とすること</a>
        <a href="#how" class="header-link">サポート体制</a>
        <a href="#reasons" class="header-link">私たちを選ぶ３つの理由</a>
        <a href="#about" class="header-link">スタッフ紹介</a>
        <a href="#contact" class="header-link">お問い合わせ</a>
    </div>
</div>

<header>
    <div class="header-bar">
    </div>
    <div class="top-header-bar">
        <div class="content content--md">
            <img src="img/hamburger.png" alt="ham" class="pull-right menu-control" data-hamburger="img/hamburger.png" data-close="img/close.png" data-state="hamburger"/>
            <div class="language-select">
                <a href="index_jp.php" class="header-link header-link--lang active">JP</a>
                <a href="index.php" class="header-link header-link--lang">EN</a>
            </div>
        </div>
    </div>
</header>

<main class="main-wrapper">

    <section id="slide-1">
        <div class="bcg">
            <div class="hsContainer">
                <div class="hsContent">
                    <div class="wp"></div>
                    <div class="block block__one">
                        <div class="content content--md">
                            <img src="img/logo.png" alt="Goodwin & Company" class="img-responsive logo"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="slide-2">
        <div class="bcg">
            <div class="hsContainer">
                <div class="hsContent">
                    <div class="block block__two">
                        <a class="anchor" id="what"></a>
                        <div class="header-container">
                            <div class="header header--white"><h1><img src="img/dots.png" alt="dots" class="header-before"/>我々が得意とすること</h1></div>
                        </div>
                        <div class="content content--md">
                            <div id="whatWeDoCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <h3>エグゼキュティブ・<br class="visible-xs"/>コーチング</h3>
                                        <p class="paragraph paragraph--light">個人のキャリアの中で、興味があること、熱中できる
                                            ことをキャリアにするために私たちはパーソナルコーチやリーダーシップコーチとしてお手伝いしま
                                            す。個人が本当に望むものを明確にし、それを得るためにアクション可能な戦略を一緒に作ること
                                            をサポートします。</p>
                                        <p class="paragraph paragraph--light">一人一人のフルポテンシャルを発揮するために、我
                                            々の今までのビジネス経験を持ち兼ねています。それに加え、世界中で評価され、実績のある心
                                            理的、及び対人関係ツールを用います。 </p>
                                        <p class="paragraph paragraph--light our-spec"><strong>専門分野</strong></p>
                                        <ul class="list-inline paragraph paragraph--light">
                                            <li>リーダーシップ・ディベロップメント</li>
                                            <li>現在及び新しいポジションで成功すること</li>
                                            <li>リーダーのためのビジネス・ストーリーテリング</li>
                                        </ul>
                                    </div>

                                    <div class="item">
                                        <h3>エグゼキュティブ・サーチ</h3>
                                        <p class="paragraph paragraph--light">我々は一人一人を、ブランドを時代にマッチするよう
                                            に変化し続け、ビジネスを成長し続け、人々の暮らしを良くする企業へ結びつけます。そこで一
                                            人一人に合った「好き」を仕事に活かせるようお手伝いします。</p>
                                        <p class="paragraph paragraph--light">我々は広告、マーケティング業界での勤務経験があるた
                                            め、消費財、広告、販促やマーケティング・コミュニケーション分野におけるスタートアップから
                                            中規模、大規模な日系企業やグローバル企業の力学を理解しています。</p>
                                        <p class="paragraph paragraph--light our-spec"><strong>専門分野</strong></p>
                                        <ul class="list-inline paragraph paragraph--light">
                                            <li>ブランド＆コミュニケーション</li>
                                            <li>営業</li>
                                            <li>戦略</li>
                                            <li>クリエイティブ</li>
                                            <li>デジタル</li>
                                            <li>マーケティング</li>
                                            <li>メディア</li>
                                            <li>PR</li>
                                            <li>販促</li>
                                            <li>ソーシャル・メディア</li>
                                        </ul>
                                    </div>

                                    <div class="item">
                                        <h3>チーム・パフォーマンス</h3>
                                        <p class="paragraph paragraph--light">パフォーマンスの高いチームをどのように編成し、チ
                                            ームのアウトプット力を高め、チームの結束力を強めるかのためのトレーニングを提供しております。</p>
                                        <p class="paragraph paragraph--light">一人一人の個人、またはチームの強みと、改善が必要な
                                            部分はどこかを分析し、何をすればより効果的に結果を出させ、組織の中で調和できるのかを、経
                                            験、知識と実績のある手法に基づいてコーチングします。</p>
                                        <p class="paragraph paragraph--light our-spec"><strong>専門分野</strong></p>
                                        <ul class=" list-inline paragraph paragraph--light">
                                            <li>効率的なチーム・ワークのための障害の発見と排除</li>
                                            <li>チーム・パフォーマンスと能力の構築</li>
                                            <li>効果的なコミュニケーション</li>
                                        </ul>
                                    </div>

                                    <div class="item">
                                        <h3>ビジネス・<br class="visible-xs"/>ストーリーテリング</h3>
                                        <p class="paragraph paragraph--light">ビジネス等、様々な集まりの場でより効果的なコミ
                                            ュニケーションのお手伝いをします。それによって、アイディアをより分かりやすく説明し、オ
                                            ーディエンスの深い共感を得、より自信の持つ優れたスピーカーになることが可能です。</p>
                                        <p class="paragraph paragraph--light">我々がビジネス・ストーリーテリング手法の資格を持
                                            ち、ビジネスの現場で経験を積んできました。組織の中で、日々どのようなコミュニケーション
                                            チャレンジに直面するかを、様々な視点から理解しています。</p>
                                        <p class="paragraph paragraph--light our-spec"><strong>専門分野</strong></p>
                                        <ul class=" list-inline paragraph paragraph--light">
                                            <li>リーダーのためのストーリーテリング</li>
                                            <li>ビジネス体験談</li>
                                            <li>説得力のあるプレゼンテーション</li>
                                            <li>パブリック・スピーキングにおける対人関係スキル</li>
                                        </ul>
                                    </div>

                                    <div class="item">
                                        <h3>キャリア・<br class="visible-xs"/>ディベロップメント</h3>
                                        <p class="paragraph paragraph--light">「好き」を仕事で生かすキャリア・パス、キャリア
                                            開発のサポートをします。</p>
                                        <p class="paragraph paragraph--light">我々のサポートは、ビジネスの実務経験、業界知識、
                                            また実際のコーチングとメンタリングのスペシャリストとしての経験に基づいています。</p>
                                        <p class="paragraph paragraph--light our-spec"><strong>専門分野</strong></p>
                                        <ul class="list-inline paragraph paragraph--light">
                                            <li>キャリア・パスの明確化</li>
                                            <li>キャリア・アセスメント・ツール</li>
                                            <li>インタビュー対策</li>
                                            <li>継続的メンタリング・プログラム</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" role="button" data-slide="prev">
                                    <span aria-hidden="true"><img src="img/chevron-left.png" alt=""/></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" role="button" data-slide="next">
                                    <span aria-hidden="true"><img src="img/chevron-right.png" alt=""/></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="slide-3">
        <div class="bcg">
            <div class="hsContainer">
                <div class="hsContent">
                    <div class="block block__three">
                        <a class="anchor" id="how"></a>
                        <div class="header-container">
                            <div class="header header--white"><h1><img src="img/dots.png" alt="dots" class="header-before"/>サポート体制</h1></div>
                        </div>
                        <div class="content content--sm">
                            <p class="paragraph paragraph--dark">
                                我々は小人数のチームで、一人一人のニーズを理解し、しっかりと取り組みます。それが大きなキャリア・アッ
                                プを次に狙う、今までとは違う役職に付きたい、最も相応しい候補者を見つけたい、チームのパフォーマンス
                                を改善したい、若しくは、ビジネス・ストーリーテリングの能力を上げたい、ような場合でも私たちがお役に立ちます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="slide-4">
        <div class="bcg">
            <div class="hsContainer">
                <div class="hsContent">
                    <div class="block block__four">
                        <a class="anchor" id="reasons"></a>
                        <div class="header-container">
                            <div class="header row-table--mobile">
                                <div class="row-cell row-cell--vcenter">
                                    <img src="img/dots.png" alt="dots" class="header-before"/>
                                </div>
                                <h1 class="row-cell row-cell--vcenter">私たちを選ぶ３つの理由</h1>
                            </div>
                        </div>
                        <div class="content content--md">

                            <!-- tablet & mobile -->
                            <div class="box--mobile row-table">
                                <div class="box__top--mobile col-xs-3 row-cell row-cell--vcenter">
                                    <img src="img/heart.png" alt="heart" class="img-responsive">
                                </div>
                                <div class="box__bottom--mobile col-xs-9 row-cell row-cell--vcenter">
                                    <p class="paragraph paragraph--dark">私たちは、１人１人を大切に考え、結果を重要視しています。</p>
                                </div>
                            </div>
                            <div class="box--mobile row-table">
                                <div class="box__top--mobile col-xs-3 row-cell row-cell--vcenter">
                                    <img src="img/poi.png" alt="poi" class="img-responsive">
                                </div>
                                <div class="box__bottom--mobile col-xs-9 row-cell row-cell--vcenter">
                                    <p class="paragraph paragraph--dark">私たちは、日本とグローバルな舞台でも経験豊富なチームです。</p>
                                </div>
                            </div>
                            <div class="box--mobile row-table">
                                <div class="box__top--mobile col-xs-3 row-cell row-cell--vcenter">
                                    <img src="img/circle.png" alt="circle" class="img-responsive">
                                </div>
                                <div class="box__bottom--mobile col-xs-9 row-cell row-cell--vcenter">
                                    <p class="paragraph paragraph--dark">私たちは、実用的なエクスパートです。実際のビジネス経験
                                        に基づき開発された、立証済みのコーチングとトレーニング・メソッドを提供しています。</p>
                                </div>
                            </div>

                            <!-- desktop -->
                            <div class="box">
                                <div class="box__top">
                                    <img src="img/heart.png" alt="heart" class="img-responsive">
                                </div>
                                <div class="box__bottom">
                                    <p class="paragraph paragraph--dark">私たちは、１人１人を大切に考え、結果を重要視しています。</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box__top">
                                    <img src="img/poi.png" alt="poi" class="img-responsive">
                                </div>
                                <div class="box__bottom">
                                    <p class="paragraph paragraph--dark">私たちは、日本とグローバルな舞台でも経験豊富なチームです。</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box__top">
                                    <img src="img/circle.png" alt="circle" class="img-responsive">
                                </div>
                                <div class="box__bottom">
                                    <p class="paragraph paragraph--dark">私たちは、実用的なエクスパートです。実際のビジネス経験
                                        に基づき開発された、立証済みのコーチングとトレーニング・メソッドを提供しています。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="slide-5">
        <div class="bcg">
            <div class="hsContainer">
                <div class="hsContent">
                    <div class="block block__five">
                        <a class="anchor" id="about"></a>
                        <div class="header-container">
                            <div class="header"><h1><img src="img/dots.png" alt="dots" class="header-before"/>スタッフ紹介</h1></div>
                        </div>
                        <div class="content content--lg">
                            <div class="row row-table">
                                <div class="col-sm-6 row-cell row-cell--vcenter">
                                    <img src="img/goodwin.jpg" alt="Gary Goodwin" class="img-responsive"/>
                                </div>
                                <div class="col-sm-6 row-cell row-cell--vcenter">
                                    <h4>創立者からのメッセージ</h4>
                                    <h4 class="bottom-margin">ギャリー・グッドウィン</h4>
                                    <p class="paragraph paragraph--dark bottom-margin">25年以上もの間広告代理店やFMCGの管理
                                        職者としてチームをマネージしながら4大陸で複雑なビジネスを見続け、実績を上げ続けてきました。</p>
                                    <p class="paragraph paragraph--dark bottom-margin">この期間中に自らの強みでもある人材育成
                                        を活用し、コーチング等でチームをサポートしながら多数の複雑な
                                        ブランドやビジネス案件で成功を収めてきました。</p>
                                    <p class="paragraph paragraph--dark bottom-margin">私がこのエグゼキュティブ・コーチングと
                                        サーチ社を立ち上げたのはこの会社時代の経験と実績が基盤になりました。「好きなことを仕事にする
                                        」。これは私の長年のモットーで、皆様のお手伝いをさせて頂くベース論でもあります。</p>
                                    <p class="paragraph paragraph--dark">流のコーチングと様々な心理的ツール(MBTI &reg;, Firo-B &reg;, Hogan)
                                        の資格を持ち、皆様に新しい知見、観点を開き可能性を広げるお手伝いをできると思っています。実務
                                        ビジネス経験を生かし、実践的なアドバイスでサポートさせて頂きます。</p>
                                </div>
                            </div>
                            <div class="about--small">
                                <h4 class="margin-bottom-zero">シニア・コンサルタント</h4>
                                <h4>マイケル・ロング</h4>
                                <p class="paragraph paragraph--dark">日本で15年以上の勤務経験を持つバイリンガルエグゼキュティブ・リクルーターです。
                                    広いネットワークを持ち備えており、それを皆様のキャリアゴールの達成のお手伝いに役立てています。</p>
                            </div>
                            <div class="about--small">
                                <h4 class="margin-bottom-zero">リサーチ・コンサルタント</h4>
                                <h4>小林未央</h4>
                                <p class="paragraph paragraph--dark">人の可能性を広げたり、本当の夢を見つけるお手伝いをするのが
                                    大好きです。あらゆる職業の方々とお会いしお手伝いする事を楽しく仕事をしています。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="slide-6">
        <div class="bcg">
            <div class="hsContainer">
                <div class="hsContent">
                    <img src="img/line.png" alt="" class="line"/>
                    <div class="block block__six">
                        <a class="anchor" id="contact"></a>
                        <div class="header-container">
                            <div class="header">
                                <h1 class="paragraph--light"><img src="img/dots.png" alt="dots" class="header-before"/>お問い合わせ</h1>
                            </div>
                        </div>
                        <div class="content content--sm">
                            <p class="paragraph paragraph--light">新しいキャリアを探す。キャリア・アドバイスを求める。仕事で使え
                                るスキルを伸ばしたい。そんな時はぜひお問い合わせ下さい。</p>
                            <a href="mailto:garygoodwin@goodwin-company.com" class="paragraph paragraph--light email">garygoodwin@goodwin-company.jp</a>
                            <p class="paragraph paragraph--light"><a href="tel:080-3405-2142">080-3405-2142</a></p>
                            <a href="mailto:mlong@goodwin-company.jp" class="paragraph paragraph--light email">mlong@goodwin-company.jp</a>
                            <p class="paragraph paragraph--light"><a href="tel:090-9323-3062">090-9323-3062</a></p>
                            <a href="mailto:miokobayashi@goodwin-company.com" class="paragraph paragraph--light email">miokobayashi@goodwin-company.jp</a>
                            <p class="paragraph paragraph--light"><a href="tel:090-5556-6377">090-5556-6377</a></p>

                            <p class="paragraph paragraph--light email">弊社オフィス：</p>
                            <p class="paragraph paragraph--light">〒150-0011</p>
                            <p class="paragraph paragraph--light">東京都渋谷区東3-19-10</p>
                            <p class="paragraph paragraph--light">恵比寿MJビル3F</p>
                            <p class="paragraph paragraph--light">Tel: <a href="tel:03-6427-2374">03-6427-2374</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="slide-7">
        <div class="bcg">
            <div class="hsContainer">
                <div class="hsContent">
                    <div class="block block__seven">
                        <div class="content--lg">
                            <div id="map" style="width: 100%; height:455px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="block footer">

    <div class="content content--md footer-jp text-center">
        <a href="https://jp.linkedin.com/in/ggoodwin"><img src="img/in.png" alt="in" class="img-responsive linkedin pull-right"/></a>
        <img src="img/footer_logo.png" alt="goodwin" class="footer-img hidden-sm hidden-xs"/>
        <ul class="list-inline list-footer">
            <li><a href="#what" class="footer-link">我々が得意とすること</a></li>
            <li><a href="#how" class="footer-link">サポート体制</a></li>
            <li><a href="#reasons" class="footer-link">私たちを選ぶ３つの理由</a></li>
            <li><a href="#about" class="footer-link">スタッフ紹介</a></li>
            <li><a href="#contact" class="footer-link">お問い合わせ</a></li>
        </ul>
        <img src="img/footer_logo.png" alt="goodwin" class="footer-img hidden-lg hidden-md"/>
    </div>
    <p class="paragraph--light text-center small">&copy; 2016 Goodwin & company. All rights reserved. 事業許可番号13 -ユ - 305486</p>
</footer>

<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
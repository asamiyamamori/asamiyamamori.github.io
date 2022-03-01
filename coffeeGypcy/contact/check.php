<?php

require_once('is_mail.php');

$name = htmlspecialchars($_POST['name']);

$email = htmlspecialchars($_POST['email']);

$title = htmlspecialchars($_POST['title']);

$comment = htmlspecialchars($_POST['comment']);


$flg = 0;

$name_note = "";
$email_note = "";
$title_note = "";
$comment_note = "";


if(empty($name)){
    $flg =1;
    $name_note = '<span class="attention">氏名を入力してください</span>';
}

if(empty($email)){
    $flg =1;
    $email_note = '<span class="attention">メールアドレスを入力してください</span>';
}else if(!is_mail($email)){
    $flg = 1;
    $email_note = '<span class="attention">メールアドレスを確認してください</span>';

}

if(empty($title)){
    $flg =1;
    $title_note = '<span class="attention">件名を入力してください</span>';
}

if(empty($comment)){
    $flg =1;
    $comment_note = '<span class="attention">お問合せ内容を入力してください</span>';
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>coffee Gypcy</title>
    <script src="../common/main.js"></script>
    <link rel="shortcut icon" href="../common/img/icon_white.png" type="image/png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../common/style.css">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body class="contact">
    <header>
        <div class="bgc_header">
            <div class="header_snsbtn">
                <ul class="header_snsbtn_inner">
                    <li><a href="" target=”_blank”><img src="../common/img/sns/twitter_white.png" alt="twitter"></a></li>

                    <li><a href="" target=”_blank”><img src="../common/img/sns/instagram_white.png" alt="instagram"></a>
                    </li>

                    <li><a href="" target=”_blank”><img src="../common/img/sns/facebook_white.png" alt="facebook"></a>
                    </li>

                    <li><a href="" target=”_blank”><img src="../common/img/sns/youtube_white.png" alt="youtube"></a></li>
                </ul>
            </div><!-- /header_snsbtn" -->
            <div class="header_flexbox">

                <div class="header_logo">
                    <h1><a href="../index.html" id="pagetop"><img src="../common/img/logo.svg" alt="coffeeGypcy"></a>
                    </h1>
                </div><!-- /header_logoicon -->

                <nav class="pc_nav">
                    <ul>
                        <li>
                            <a class="nav_btn" href="../about/index.html">About</a>
                        </li>
                        <li>
                            <a class="nav_btn" href="../shoplist/index.html">Shoplist</a>
                        </li>
                        <li>
                            <a class="nav_btn" href="../column/index.html">Column</a>
                        </li>
                        <li>
                            <a class="nav_btn" href="../contact/index.html">Contact</a>
                        </li>
                    </ul>
                </nav>

                <form method="get" action="#" class="search_container">
                    <input type="text" size="20" placeholder="keywords">
                    <input type="submit" value="&#xf002">
                </form>
            </div>
            <!-- /header_flexbox -->
        </div>
        <!-- /bgc_header -->

    </header>

    <div class="sp_nav">

        <div class="sp_menu_btn">
            <!-- span：ハンバーガーボタン -->
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="sp_menu">
            <div>
                <ul>
                    <li>
                        <a href="#">北海道</a>
                    </li>
                    <li>
                        <a href="#">東京</a>
                        <ul>
                            <li><a href="#">23区内</a></li>
                            <li><a href="#">23区外</a></li>
                        </ul>
                    </li>
                    <li><a href="#">その他の地域</a></li>
                    <li><a href="#">移転・閉店</a></li>
                    <ul>

                        <li>
                            <p><a href="../common/img/sns/twitter.png"><img src="" alt="twitter"></a></p>
                        </li>
                        <li>
                            <p><a href="../common/img/sns/instagram.png"><img src="" alt="instagram"></a></p>
                        </li>
                        <li>
                            <p><a href="../common/img/sns/facebook.png"><img src="" alt="facebook"></a></p>
                        </li>
                        <li>
                            <p><a href="../common/img/sns/youtube.png"><img src="" alt="youtube"></a></p>
                        </li>
                    </ul>
                </ul>
                <form method="get" action="#" class="search_container">
                    <input type="text" size="20" placeholder="keywords">
                    <input type="submit" value="&#xf002">
                </form>
            </div>
        </nav>
    </div><!-- /sp_nav -->

    <main>
        <!-- パンくずリスト -->
        <ol class="breadcrumbs">
            <ul>
                <li>
                    <a href="../index.html">Home</a>
                </li>
                <li>
                    Contact
                </li>
            </ul>
        </ol>
        <!-- /パンくずリスト -->

        <div class="bgc_contact">
            <h2>
                新店・閉店の情報や<br>
                メディアへ掲載のご依頼などを<br>
                受け付けております。<br>
                <br>
                どうぞお気軽にお問い合わせください。<br>
            </h2>
            <form action="send.php" method="POST" class="bgc_contact_form">
                <div class="form_inner">
                    <?php
                    echo $_POST['name']; 
                    echo '様、お問い合わせいただきありがとうございます。内容のご確認をお願いします。';
                    ?>
                    <div class="form_input">

                        <dl class="contact_flexbox">
                            <dt><label for="name">氏名</label></dt>
                            <dd>
                                <?php echo $name ?>
                                <?php echo $name_note ?>
                            </dd>
                        </dl>

                        <dl class="contact_flexbox">
                            <dt><label for="email">メールアドレス</label></dt>
                            <dd>
                                <?php echo $email ?>
                                <?php echo $email_note ?>
                            </dd>
                        </dl>
                        <dl class="contact_flexbox">
                            <dt><label for="title">件名</label></dt>
                            <dd>
                                <?php echo $title ?>
                                <?php echo $title_note ?>
                            </dd>
                            
                        </dl>

                        <dl class="contact_flexbox">
                            <dt><label for="comment">お問い合わせ内容</label></dt>
                            <dd>
                                <?php echo $comment ?>
                                <?php echo $comment_note ?>
                            </dd>
                        </dl>

                        <?php if($flg == 1): ?>
                        <div class="back">
                            <button type="button" onclick="history.back();">入力画面に戻る</button>
                        </div>
                        <?php else: ?>
                            <form action="send.php" method="POST">
                                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                                    <input type="hidden" name="title" value="<?php echo $title; ?>">
                                    <input type="hidden" name="comment" value="<?php echo $comment; ?>">
                                <button class="btn" type="button" onclick='history.back();'>入力画面に戻る</button>
                                <button class="btn" type="submit" value="送信する">送信する</button>             
                            </form>
                        <!-- <p>エラーじゃない</p> -->
                        <?php endif; ?>
        
                    </div>
                    <!-- /form_input -->
                </div>
                <!-- /form_inner -->
            </form>
        </div>
    </main>
    <div class="position_box"><a href="#pagetop"><img src="../common/img/top.png"></a></div>
    <footer>
        <div class="bgc_footer">
            <div class="footer_inner">
                <ul class="footer_snsbtn">
                    <li>
                        <a href="" target=”_blank”><img src="../common/img/sns/twitter_white.png" alt="twitter"></a>
                    </li>

                    <li>
                        <a href="" target=”_blank”><img src="../common/img/sns/instagram_white.png" alt="instagram"></a>
                    </li>

                    <li>
                        <a href="" target=”_blank”><img src="../common/img/sns/facebook_white.png" alt="facebook"></a>
                    </li>

                    <li>
                        <a href="" target=”_blank”><img src="../common/img/sns/youtube_white.png" alt="youtube"></a>
                    </li>
                </ul>

                <div class="box_footer">
                    <div class="footer_nav">
                        <div class="footer_nav_inner">
                            <p class="footer_nav_title"><a href="../about/about.html">About</a></p>
                            <div class="footer_nav_list">
                                <p>Coffee Gypcyは、東京をはじめとする<br>
                                    珈琲が飲めるカフェや<br>
                                    純喫茶に関する情報サイトです。<br>
                                    珈琲のおともにぴったりのお菓子のことに<br>
                                    ついても、コラムにてご紹介しています。
                                </p>
                                </a>
                            </div>
                            <!-- /footer_nav_list -->
                        </div>
                        <!-- /footer_nav_inner -->
                        <div class="footer_nav_inner">
                            <p class="footer_nav_title"><a href="../shoplist/shoplist.html">Shoplist</a></p>
                            <div class="footer_nav_list">

                                <ul>
                                    <li>
                                        <a href="#">北海道</a>
                                        <ul>
                                            <li><a href="#">札幌</a></li>
                                            <li><a href="#">北見</a></li>
                                            <li><a href="#">十勝</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">東京</a>
                                        <ul>
                                            <li><a href="#">23区内</a></li>
                                            <li><a href="#">23区外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">その他の地域</a>
                                    </li>
                                    <li>
                                        <a href="#">移転・閉店</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /footer_nav_list -->
                        </div>
                        <!-- /footer_nav_inner -->
                        <div class="footer_nav_inner">
                            <p class="footer_nav_title"><a href="../column/column.html">Column</a></p>
                            <div class="footer_nav_list">

                                <ul>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /footer_nav_list -->
                        </div>
                        <!-- /footer_nav_inner -->
                        <div class="footer_nav_inner">
                            <p class="footer_nav_title"><a href="contact.html">Contact</a></p>
                            <div class="footer_nav_list">
                                <ul>
                                    <li>
                                        <a href="#">掲載・ご質問について<br>
                                            お問い合わせはこちらから
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /footer_nav_list -->
                        </div>
                        <!-- /footer_nav_inner -->
                    </div>
                    <!-- /footer_nav -->

                    <div>
                        <p class="copyright">&copy;2020 coffee Gypcy All Rights Reserved.</p>
                    </div>
                    <!--/copyright-->
                </div>
                <!-- /footer_inner -->
            </div>
            <!-- /box_footer -->
        </div>
        <!--/bgc_footer-->

    </footer>

</body>

</html>

<?php

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.min.js" integrity="sha256-AlTido85uXPlSyyaZNsjJXeCs07eSv3r43kyCVc8ChI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="news.css">
    <script>
      $(function(){
        $('.border').hover(
           function(){
             $(this).css('paddin-bottom','8px');
             $(this).css('border-bottom','1px solid #000');
           },
           function(){
             $(this).css('paddin-bottom','0px');
             $(this).css('border-bottom','none');
           }   
        );
      });
    </script>
  </head>
  <body>
    <header>
      <div id="headerwrapper">
        <div id="header-left">
          <div id="header_company-name">
            <p>株式会社<span>ケイオー</span><p>
          </div>
          <div id="header_manu">
            <ul>
              <li class="border"><a>アクリルグッズ一覧</a></li>
              <li class="border"><a>アクキー</a></li>
              <li class="border"><a>アクスタ</a></li>
              <li class="border"><a>アクリル時計</a></li>
              <li class="border"><a>会社概要</a></li>
            </ul>
          </div>
        </div>
        <div id="header-right">
          <div id="header_access">
            <a>
              <div id="header_access-call">
                <p class="icon"><span><img src="pic/call_black.png"></span>04-7196-0116</p>
                <p>08:30~17:30（土日祝日定休）</p>
              </div>
            </a>
            <a>
              <div id="header_access-mail">
                <p class="icon"><span><img src="pic/mail_black.png"></span>お問い合わせ</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </header>
    <div id="topwrapper">
      <div id="top-left">
        <div>
          <h2>お知らせ</h2>
          <h3>News</h3>
          <p>ケイオーからのオリジナルアクリルグッズの新商品や営業日などの情報をお知らせします</p>
        </div>
      </div>
      <div id="top-right">
        <p><span><img src="pic/sms.svg"></span>オリジナルアクリルグッズを依頼する</p>
        <div>
          <p><span>オリジナルアクリルグッズ<span><br>について<span>今すぐ相談する<span></p>
          <!-- ここにチャットスペースくる --!>
          <div id="top_access-mail">
            <p class="icon"><span><img src="pic/mail_black.png"></span>お問い合わせ</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

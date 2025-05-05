<?php

?>
<!doctypehtml>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.min.js" integrity="sha256-AlTido85uXPlSyyaZNsjJXeCs07eSv3r43kyCVc8ChI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="news2.css">
    <script>
      $(function(){
        $('.header_menu_link').hover(
          function(){
            $(this).css('padding-bottom', '8px');
            $(this).css('border-bottom', '1px solid #000');
          },
          function(){
            $(this).css('padding-bottom', '0px');
            $(this).css('border-bottom', 'none');
          }
        );
      });
    </script>
  </head>
  <body>
    <header>
      <div id="headerwrapper"> 
        <div id="header_menu-left">
          <div id="header_companyname">
            <p>株式会社<span>ケイオー</span></p>
          </div>
          <div id="header_menu">
            <ul>
              <li class="header_menu_link"><a>アクリルグッズ一覧</a></li>
              <li class="header_menu_link"><a>アクキー</a></li>
              <li class="header_menu_link"><a>アクスタ</a></li>
              <li class="header_menu_link"><a>アクリル時計</a></li>
              <li class="header_menu_link"><a>会社概要</a></li>
            </ul>
          </div>
        </div>
        <div id="headermenu-right">
          <a id="header_access-call">
            <div>
              <p><span><img src="pic/call_black.png"></span>04-7196-0116</p>
              <p>08:30~17:30（土日祝日定休）</p>
            </div>
          </a>
          <a id="header_access-mail">
            <div>
              <p><span><img src="pic/mail_black.png"></span>お問い合わせ</p>
            </div>
          </a>
        </div>
      </div>
    </header>
  </body>
</html>

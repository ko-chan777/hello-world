<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>パラウェイ株式会社</title>

<style type="text/css">

body{
    background-image: url(yujonokioku.gif);
}


#all{
    width:1000px;
    margin-left:auto;
    margin-right:auto;
    background-color: #ffffff;
}


header{
    
    background-color: #ffffff;

}

header h1{
    text-shadow: 5px 5px 5px #666666;
}

header h2{
    margin-left: 5em;
}

.logo_a{
    color:#0000ff;
    font-size:3em;
}

#h_nav{
    background-color: #fdc200;
    text-align:right;
}

#h_nav a{
    color:#0215c2f8;
    background-color: #fdc200;
    margin-left:0.5em;
    margin-right:0.5em;
}

#s_bar{
    float:left;
    width:0%;
    background-color: #ffff00;
}

#main{
    float:left;
    width:100%;
    height:1200px;
    background-color:#ffffff;
    padding-top:2em;
}

#p_link{
    float:left;
    width:40em;
}

#midkoro{
    float:right;
    border-style:solid;
    border-width:2px;
    border-color:#000800;
    width:18em;
    margin-bottom:2em;
    margin-right:2em;
}


#midokoro h1{
    margin-top:0px;
    padding-left:0.5em;
    background-color: #cc4040;
    color:#ffffff;
    font-size:1.4em;
    font-weight:normal;
}

#midokoro p{
    padding-left:1.5em;
    padding-right:1.5em;
}

#story{
    clear:both;
    padding-left:1em;
    padding-right:1em;

    columns:20em 3;
    -moz-columns:20em 3;
    -webkit-columns:18em 3;


    column-rule:1px solid #808080;
    -moz-column-rule:1px solid #808080;
    -webkit-column-rule:1px solid #808080;
}

#story h1{
    background-color:#800000;
    padding-left:1em;
    color:#ffffff;
    font-weight:normal;
    font-size:1.2em;
    border-radius:15px 15px 0px 0px / 15px 15px 0px 0px;
}

.honbon{
    text-indent:1em;
}

#kaisetsu{
    border-style:solid;
    border-width:1px;
    border-color:#ffffff;
    margin-left:2em;
    margin-right:2em;
    margin-bottom:2em;
    padding-left:2em;
    padding-right:2em;
}

#h_midasi{
    font-size:1.4em;
    font-weight:normal;
}

#k_all{
    display:box;
    display:-moz-box;
    display:-webkit-box;
}

#k_txt{
    width:250px;
    padding-left:1em;
}

#ft {
    clear:both;
    background-color: #000800;
    text-align:center;
    color:#ffffff;
}

#ft a{
    color:#ffffff;
}

#div_a{
    float:left;
    background-color:#000800;
    width:333px;
    height:240px;
}

#div_b{
    float:left;
    background-color:#000800;
    width:333px;
    height:240px;
}

#div_c{
    float:left;
    background-color:#000800;
    width:333px;
    height:240px;
}

#div_left{
    float:left;
    background-color:#fdc200;
    width:200px;
    height:auto;
}

#div_right{
    float:center;
    background-color:#ffffff;
    width:auto;
    height:auto;
}

@import url('https://fonts.googleapis.com/css?family=Sawarabi+Gothic');

.sawarabi {
    font-family: 'Sawarabi Gothic', sans-serif;
}

@import url('https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c');

.rounded {
    font-family: 'M PLUS Rounded 1c', sans-serif;
    font-size: 3em;
}

.yugosic {
    font-family:"Yu Gothic", "游ゴシック", YuGothic, "游ゴシック体";
    font-size: 3em;
}

@import url('https://fonts.googleapis.com/css?family=Noto+Sans+JP');

.noto {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 3em;
}

@import url('https://fonts.googleapis.com/css?family=Noto+Serif+JP');

.note2 {
    font-family: 'Noto Serif JP', sans-serif;
    font-size: 3em;
}

h1 {
font-family: "メイリオ" ;
}

.box{
  width:300px;
  height:auto;
  background:#fff;
  animation: anim 25s infinite;
  overflow: hidden;
}

@keyframes anim {
  0% {
  transform: translateX(0%);
  }

  40% {
  transform: translateX(150%);
  }
}

ul {
  float: left;
  margin-left: 1em;
  margin-top: 1em;
  margin-right: 1em;
  margin-bottom: 1em;
}

li {
      line-height: 40px;
    }


</style>


<!-- 独自CSS -->
<link rel="stylesheet" type="text/css" href="css/douga.css">

<script type="text/javascript">
function ChangeTab(tabname) {
// タブメニュー実装
document.getElementById('tab1').style.display = 'none';
document.getElementById('tab2').style.display = 'none';
document.getElementById('tab3').style.display = 'none';
// タブメニュー実装
document.getElementById(tabname).style.display = 'block';
}
//</script>
    
<style type="text/css">
/* ▼ タブメニュー全体の設定 */
div.tabbox { margin: 0px 0 0 0; padding: 0px; width:1000px; height:1000px;}
/* ▼ タブ部分のマージンとパディング領域を設定 */
p.tabs { margin: 30px; padding: 0px; }
p.tabs a {
    /* ▼ リンクをタブのように見せる */
    display: block; width: 300px; float: left;
    margin: 0px 3px 0px 0px; padding: 3px;
    text-align: center;
    font-size:16px;
    }
    /* ▼ タブごとの配色設定 */
    p.tabs a.tab1 {text-decoration:none; background-color:#fafafa;border-right:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-top: 3px solid rgba(250, 150, 0, 0.85); color: #666; font-weight:600;}
    p.tabs a.tab2 {text-decoration:none; background-color:#fafafa;border-right:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-top: 3px solid rgba(0, 0, 200, 0.85); color: #666; font-weight:600;}
    p.tabs a.tab3 {text-decoration:none; background-color:#fafafa;border-right:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-top: 3px solid rgba(250, 150, 0, 0.85); color: #666; font-weight:600;}
    p.tabs a:hover {opacity:0.7;filter:alpha(opacity=70);}
    /* ▼ タブ中身のボックス */
    div.tab {
    /* ▼ ボックス共通の装飾 */
    height: 1000px; clear: left;
    }
    /* ▼ 各ボックスの配色設定 */
    div#tab1 { border: 2px solid #DDD; background-color: #fbfbfb; }
    div#tab2 { border: 2px solid #DDD; background-color: #fbfbfb; }
    div#tab3 { border: 2px solid #DDD; background-color: #fbfbfb; }
    div.tab p { margin: 0.5em; }
</style>
  
  <script>
  function Contents_Change(x){
  
     if(x==1){
       document.getElementByld("tab_main").style.backgroundColor = "#ffff00";
       document.getElementByld("tab_main_a").style.display = "block";
       document.getElementByld("tab_main_b").style.display = "none";
       document.getElementByld("tab_main_c").style.display = "none";
     }
  
     if(x==2){
       document.getElementByld("tab_main").style.backgroundColor = "#0000ff";
       document.getElementByld("tab_main_a").style.display = "none";
       document.getElementByld("tab_main_b").style.display = "block";
       document.getElementByld("tab_main_c").style.display = "none";
     }
  
     if(x==3){
       document.getElementByld("tab_main").style.backgroundColor = "#ff0000";
       document.getElementByld("tab_main_a").style.display = "none";
       document.getElementByld("tab_main_b").style.display = "none";
       document.getElementByld("tab_main_c").style.display = "block";
     }

  </script>
</head>


<body>
<div id="all">
<article>

<header>
        <table border="0" width=auto>
                <tr>
                <td width="1px"></td>
                <td width="122px" valign="bottom" cellpadding="5">
                    <a href="index.html"><img src="parawaylogo.png" alt="パラウェイロゴ" width="120px" height="70px" title="logo"></a>
                </td>
                <td width="778px" valign="bottom">
                   <h1>パラウェイ携帯電話レンタルサービス（TKDシステム）</h1>
                </td>
                <td width="1px"></td>
                </tr>
         </table>
         <span id="view_clock"></span>
<right>

<script type="text/javascript">
timerID = setInterval('clock()',500); //0.5秒毎にclock()を実行

function clock() {
	document.getElementById("view_clock").innerHTML = getNow();
}

function getNow() {
	var now = new Date();
	var year = now.getFullYear();
	var mon = now.getMonth()+1; //１を足すこと
	var day = now.getDate();
	var hour = now.getHours();
	var min = now.getMinutes();
	var sec = now.getSeconds();

	//出力用
	var s = year + "年" + mon + "月" + day + "日" + hour + "時" + min + "分" + sec + "秒"; 
	return s;
}
</script>

 <right>
        <nav id="h_nav">
            <a href="TKDsystem-index.html">Svr1_A</a>
            <a href="TKDsystem-index.html">Svr2_A</a>
            <a href="TKDsystem-index.html">SB</a>           
        </nav>
 </right>
</header>

<div id="main">
<div id="div_left">
    <h1>MENU</h1>
    <a href="TKDsystem-index.html"><img src="banner/kensaku.png" alt="検索ロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="TKDsystem-new.html"><img src="banner/kokyakujoho.png" alt="顧客情報ロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="tkd-numberall-new.php"><img src="banner/riyojokyo.png" alt="利用状況ロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="TKDsystem-notyet.html"><img src="banner/seikyukanri.png" alt="請求管理ロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="tkd-kaiyakuall-new.php"><img src="banner/kaiyaku.png" alt="解約状況ロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="TKDsystem-newnote.html"><img src="banner/uketukelist.png" alt="受付リストロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="TKDsystem-notyet.html"><img src="banner/adobaiza.png" alt="アドバイザーロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="TKDsystem-notyet.html"><img src="banner/tusinkaiban.png" alt="通信/改番履歴ロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="plan-all-new.php">基本プラン</a></br>
     <a href="option-all-new.php">オプションプラン</a></br>
     <a href="group-all-new.php"><img src="banner/group.png" alt="グループ" width="200px" height="75px" title="logo"></a></br>   
     <a href="agency-all-new.php"><img src="banner/dairiten.png" alt="代理店担当者ロゴ" width="200px" height="75px" title="logo"></a></br>
     <a href="staff-all-new.php"><img src="banner/staff.png" alt="スタッフロゴ" width="200px" height="75px" title="logo"></a></br>

</div>

<div id="div_right">
<head>
  <meta charset="utf-8">
  <title>TDKagency一覧</title>
</head>

<body>
<div class="tiledBackground">

<center>

<table width="auto" >

<tr>
<td>
<p class="example2">

<h3>登録済みスタッフ情報</h3>

<?php
$dsn = 'mysql:dbname=rentsys;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';

try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}

$sql = 'select num, name, tel, plan_name from user_cache';
$stmt = $dbh->query( $sql );
echo "<table border=2>\n";
echo "\t<tr><th>顧客番号</th><th>名前</th><th>電話番号</th><th>プラン名</th><th>画像登録リンク</th><th>削除</th></tr>\n";
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    echo "\t<tr>\n";
    echo "\t\t<td width=150 align=center>{$result['num']}</td>\n";
    echo "\t\t<td width=200 align=center>"; echo "<a href=\"file_manager2.php?num="; echo $result['num']; echo "\">"; echo "{$result['name']}"; echo "</a></td>\n";
    echo "\t\t<td width=100 align=center>{$result['tel']}</td>\n";
    echo "\t\t<td width=100 align=center>{$result['plan_name']}</td>\n";
    echo "\t\t<td width=250 align=center>"; echo "<a href=\"tyohyo-pdf.php?num="; echo $result['num']; echo "\"";  echo ">本人確認出力</a></td>\n";
    echo "\t\t<td width=250 align=center>"; echo "<a href=\"keiyaku-pdf.php?num="; echo $result['num']; echo "\"";  echo ">契約書出力</a></td>\n";
    echo "\t\t<td width=100 align=center>"; echo "<a href=\"staff-delete.php?num="; echo $result['num']; echo "\""; echo "onclick=\"return confirm('削除してよろしいですか?')\""; echo ">削除</a></td>\n";
    echo "\t</tr>\n";
}
echo "</table>\n";
?>
</p>
</td>
</tr>
</table>
</center>
<center>
<button type=“button” onclick="location.href='./staff-all-new.php'"><p class="js-resize-text">BACK TO TOP</p></button>
</center>-pdf
</div>
</div>

<div id="ft">
  <footer>
    <br>
    <p class="logo_c">パラウェイ株式会社</p>
    <nav>
      <p>paraway.inc© 2023 All rights reserved.</p><br>
    </nav>
  </footer>
</div>
</article>
</div>
</body>
</html>
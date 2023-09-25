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
        $num = $_GET['num'];
    
        // 更新対象の投稿内容を取得

        try {
            $sql = "SELECT * FROM user_cache WHERE num = :num";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":num", $num);
            $stmt->execute();
          } catch (PDOException $e) {
            echo $e->getMessage();
            die();
          }
       
           // 取得できたタイトルと本文を変数に入れておく
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           $num = $row['num'];
           $name = $row['name'];
           $tel = $row['tel'];
           $plan_name = $row['plan_name'];
           $keiyakubi = $row['keiyakubi'];
?>

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
        $num = $_GET['num'];
    
        // 更新対象の投稿内容を取得

        try {
            $sql = "SELECT * FROM user WHERE num = :num";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":num", $num);
            $stmt->execute();
          } catch (PDOException $e) {
            echo $e->getMessage();
            die();
          }
       
           // 取得できたタイトルと本文を変数に入れておく
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           $iccid = $row['iccid'];

?>


<?php
     $dsn = 'mysql:dbname=personal;host=localhost';
     $user = 'mibuki';
     $password = 'ksj1108ksj';

    try{
        $dbh = new PDO( $dsn, $user, $password );
        }catch( PDOException $error ){
        echo "接続失敗:".$error->getMessage();
        die();
        }
        $num = $_GET['num'];
    
        // 更新対象の投稿内容を取得

        try {
            $sql = "SELECT * FROM master WHERE num = :num";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":num", $num);
            $stmt->execute();
          } catch (PDOException $e) {
            echo $e->getMessage();
            die();
          }
       
           // 取得できたタイトルと本文を変数に入れておく
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           $num = $row['num'];
           $name = $row['name'];
           $birth_y = $row['birth_y'];
           $birth_m = $row['birth_m'];
           $birth_d = $row['birth_d'];
           $address = $row['address'];

?>

<?php
require_once('../TCPDF/tcpdf.php');
require_once('../TCPDF/fpdi/autoload.php');

$pdf = new setasign\Fpdi\Tcpdf\Fpdi("L","mm", "A4");

$pdf->setPrintHeader( false );
$pdf->setPrintfooter( false );

$pdf->setSourceFile("TKDkeiyakusho.pdf");
$pdf->AddPage("L","mm", "A4");
$pdf->SetMargins(10, 0, -1); 
$tpl = $pdf->importPage(1);
$pdf->useTemplate($tpl);


//$pdf->SetFont('kozminproregular', スタイル, サイズ);
//$pdf->Text(x座標, y座標, テキスト);


//調査年
$pdf->SetFont('kozminproregular', '', 21);
$pdf->Text(85.5, 33, htmlspecialchars( $keiyakubi ) );


//調査年
$pdf->SetFont('kozminproregular', '', 17);
$pdf->Text(30, 53, htmlspecialchars( $name ) );



//作成年月日
$pdf->SetFont('kozminproregular', '', 14);
$pdf->Text(28, 65, htmlspecialchars( $address ) );

//印鑑
$pdf->SetFont('kozminproregular', '', 16);
$pdf->Text(30, 162, htmlspecialchars( $plan_name ) );


//調査月
$pdf->SetFont('kozminproregular', '', 17);
$pdf->Text(30, 176, htmlspecialchars( $tel ) );


//指定数量塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(150, 170, htmlspecialchars( "iccid" ) );

//指定数量塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(162, 170, htmlspecialchars( "$iccid" ) );


//日付
//$pdf->SetFont('kozminproregular', '', 20);
//$today = date("Y年m月d日");
//$pdf->Text(30, 30, $today);

//$pdf->Output(出力時のファイル名, 出力モード);

ob_end_clean();
$pdf->Output("output.pdf", "I");

?>




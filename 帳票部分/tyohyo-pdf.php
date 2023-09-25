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

$pdf = new setasign\Fpdi\Tcpdf\Fpdi();

$pdf->setPrintHeader( false );
$pdf->setPrintfooter( false );


$pdf->setSourceFile("TKDhonnin.pdf");
$pdf->AddPage('P','mm', 'A4');
$pdf->SetMargins(10, 0, -1); 
$tpl = $pdf->importPage(1);
$pdf->useTemplate($tpl);


//$pdf->SetFont('kozminproregular', スタイル, サイズ);
//$pdf->Text(x座標, y座標, テキスト);



//指定数量塗装工場
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(65, 35, htmlspecialchars( "1" ) );

//調査年
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(45, 40, htmlspecialchars( $tel ) );

//調査月
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(77, 47, htmlspecialchars( $name ) );

//作成年月日
$pdf->SetFont('kozminproregular', '', 20);
$pdf->Text(35, 30, htmlspecialchars( $sakuseibi ) );

//印鑑
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(77, 55, htmlspecialchars( $address ) );

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(87, 65.5, htmlspecialchars( $birth_y ) );

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(104, 65.5, htmlspecialchars( $birth_m ) );

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(122, 65.5, htmlspecialchars( $birth_d ) );

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(77, 55, htmlspecialchars( "✔" ) );


//日付
//$pdf->SetFont('kozminproregular', '', 20);
//$today = date("Y年m月d日");
//$pdf->Text(30, 30, $today);

//$pdf->Output(出力時のファイル名, 出力モード);

ob_end_clean();
$pdf->Output("output.pdf", "I");

?>




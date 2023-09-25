
<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM bankintoso ";
$stmt = $dbh->query( $sql );
$a=0;
$omosaa = 0;
$suryoa = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $a=$a+1;
    $omosaa = $omosaa + $result['omosa'];
    $suryoa = $suryoa + $result['kazu'];
    }
}
?>

<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM bankintoso2 ";
$stmt = $dbh->query( $sql );
$b=0;
$omosab = 0;
$suryob = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $b=$b+1;
    $omosab = $omosab + $result['omosa'];
    $suryob = $suryob + $result['kazu'];  
    }
}
?>
<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM bankintoso3 ";
$stmt = $dbh->query( $sql );
$c=0;
$omosac = 0;
$suryoc = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $c=$c+1;
    $omosac = $omosac + $result['omosa'];
    $suryoc = $suryoc + $result['kazu'];  
    }
}
?>
<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM bankintoso4 ";
$stmt = $dbh->query( $sql );
$e=0;
$omosae = 0;
$suryoe = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $e=$e+1;
    $omosae = $omosae + $result['omosa'];
    $suryoe = $suryoe + $result['kazu'];  
    }
}
?>
<?php
$e=0;
$d=$a+$b+$c+$e;
$omosaf = $omosaa + $omosab;
$suryof = $suryoa + $suryob;
$omosad = $omosaa + $omosab + $omosac + $omosae;
$suryod = $suryoa + $suryob + $suryoc + $suryoe;
?>


<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM senjositsu41toryo ";
$stmt = $dbh->query( $sql );
$a2=0;
$omosaa2 = 0;
$suryoa2 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $a2=$a2+1;
    $omosaa2 = $omosaa2 + $result['omosa'];
    $suryoa2 = $suryoa2 + $result['kazu'];
    }
}
?>

<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM senjositsu42toryo ";
$stmt = $dbh->query( $sql );
$b2=0;
$omosab2 = 0;
$suryob2 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $b2=$b2+1;
    $omosab2 = $omosab2 + $result['omosa'];
    $suryob2 = $suryob2 + $result['kazu'];  
    }
}
?>
<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM senjositsu41sinner ";
$stmt = $dbh->query( $sql );
$c2=0;
$omosac2 = 0;
$suryoc2 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $c2=$c2+1;
    $omosac2 = $omosac2 + $result['omosa'];
    $suryoc2 = $suryoc2 + $result['kazu'];  
    }
}
?>
<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM senjositsu43sinner ";
$stmt = $dbh->query( $sql );
$e2=0;
$omosae2 = 0;
$suryoe2 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $e2=$e2+1;
    $omosae2 = $omosae2 + $result['omosa'];
    $suryoe2 = $suryoe2 + $result['kazu'];  
    }
}
?>
<?php
$d2=$a2+$b2+$c2+$e2;
$omosad2 = $omosaa2 + $omosab2 + $omosac2 + $omosae2;
$suryod2 = $suryoa2 + $suryob2 + $suryoc2 + $suryoe2;
?>

<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM hokansoko41toryo ";
$stmt = $dbh->query( $sql );
$a3=0;
$omosaa3 = 0;
$suryoa3 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $a3=$a3+1;
    $omosaa3 = $omosaa3 + $result['omosa'];
    $suryoa3 = $suryoa3 + $result['kazu'];
    }
}
?>

<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM hokansoko42toryo ";
$stmt = $dbh->query( $sql );
$b3=0;
$omosab3 = 0;
$suryob3 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $b3=$b3+1;
    $omosab3 = $omosab3 + $result['omosa'];
    $suryob3 = $suryob3 + $result['kazu'];  
    }
}
?>
<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM hokansoko41sinner ";
$stmt = $dbh->query( $sql );
$c3=0;
$omosac3 = 0;
$suryoc3 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $c3=$c3+1;
    $omosac3 = $omosac3 + $result['omosa'];
    $suryoc3 = $suryoc3 + $result['kazu'];  
    }
}
?>
<?php
$dsn = 'mysql:dbname=corona;host=localhost';
$user = 'mibuki';
$password = 'ksj1108ksj';
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}
$sql = "SELECT * FROM hokansoko42sinner ";
$stmt = $dbh->query( $sql );
$e3=0;
$omosae3 = 0;
$suryoe3 = 0;
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    if ($result['id'] > 0 ) {
    $e3=$e3+1;
    $omosae3 = $omosae3 + $result['omosa'];
    $suryoe3 = $suryoe3 + $result['kazu'];  
    }
}
?>
<?php
$d3=0;
$d3=$a3+$b3+$c3+$e3;
$omosad3 = $omosaa3 + $omosab3 + $omosac3 + $omosae3;
$suryod3 = $suryoa3 + $suryob3 + $suryoc3 + $suryoe3;
?>

<?php
require_once('../TCPDF/tcpdf.php');
require_once('../TCPDF/fpdi/autoload.php');

$pdf = new setasign\Fpdi\Tcpdf\Fpdi();

$pdf->setPrintHeader( false );


$pdf->setSourceFile("kikenbutsutyohyo.pdf");
$pdf->AddPage();
$tpl = $pdf->importPage(1);
$pdf->useTemplate($tpl);


$year = $_POST["year"];
$month = $_POST["month"];
$sakuseibi = $_POST["sakuseibi"];
$sakuseishain = $_POST["sakuseishain"];

//$pdf->SetFont('kozminproregular', スタイル, サイズ);
//$pdf->Text(x座標, y座標, テキスト);

//調査年
$pdf->SetFont('kozminproregular', '', 20);
$pdf->Text(32, 20, htmlspecialchars( $year ) );

//調査月
$pdf->SetFont('kozminproregular', '', 20);
$pdf->Text(56, 20, htmlspecialchars( $month ) );

//作成年月日
$pdf->SetFont('kozminproregular', '', 20);
$pdf->Text(35, 30, htmlspecialchars( $sakuseibi ) );

//印鑑
$pdf->SetFont('kozminproregular', '', 20);
$pdf->Text(162, 20, htmlspecialchars( $sakuseishain ) );





//指定数量塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(110, 75, htmlspecialchars( "200(ℓ)" ) );

//指定塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(110, 148, htmlspecialchars( "200(ℓ)" ) );

//指定洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(110, 222, htmlspecialchars( "200(ℓ)" ) );

//指定塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(108, 84, htmlspecialchars( "1000(ℓ)" ) );

//指定塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(108, 157, htmlspecialchars( "1000(ℓ)" ) );

//指定洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(108, 231, htmlspecialchars( "1000(ℓ)" ) );

//指定塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(108, 94, htmlspecialchars( "2000(ℓ)" ) );

//指定塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(108, 167, htmlspecialchars( "2000(ℓ)" ) );

//指定洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(108, 241, htmlspecialchars( "2000(ℓ)" ) );







//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(84.5, 75, htmlspecialchars( "$suryof(ℓ)" ) );

//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 148, htmlspecialchars( "$suryoa2(ℓ)" ) );

//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 222, htmlspecialchars( "$suryoa3(ℓ)" ) );

//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 84, htmlspecialchars( "$suryoc(ℓ)" ) );

//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 157, htmlspecialchars( "$suryob2(ℓ)" ) );

//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 231, htmlspecialchars( "$suryoc3(ℓ)" ) );

//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 94, htmlspecialchars( "$suryoe(ℓ)" ) );

//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(85, 167, htmlspecialchars( "$suryoe2(ℓ)" ) );

//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 241, htmlspecialchars( "$suryoe3(ℓ)" ) );


//合計
//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(84.5, 104, htmlspecialchars( "$suryod(ℓ)" ) );

//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(85, 177, htmlspecialchars( "$suryod2(ℓ)" ) );

//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(90, 251, htmlspecialchars( "$suryod3(ℓ)" ) );




$zankyoryof = 180-$suryof;
//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(157, 75, htmlspecialchars( "$zankyoryof(ℓ)" ) );

$zankyoryoa2 = 0-$suryoa2;
//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(160, 148, htmlspecialchars( "$zankyoryoa2(ℓ)" ) );

$zankyoryoa3 = 180-$suryoa3;
//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(157, 222, htmlspecialchars( "$zankyoryoa3(ℓ)" ) );

$zankyoryoc = 90-$suryoc;
//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(160, 84, htmlspecialchars( "$zankyoryoc(ℓ)" ) );

$zankyoryob2 = 0-$suryob2;
//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(160, 157, htmlspecialchars( "$zankyoryob2(ℓ)" ) );

$zankyoryoc3 = 150-$suryoc3;
//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(157, 231, htmlspecialchars( "$zankyoryoc3(ℓ)" ) );

$zankyoryoe = 0-$suryoe;
//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(160, 94, htmlspecialchars( "$zankyoryoe(ℓ)" ) );

$zankyoryoe2 = 1800-$suryoe2;
//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(157, 167, htmlspecialchars( "$zankyoryoe2(ℓ)" ) );

$zankyoryoe3 = 0-$suryoe3;
//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(160, 241, htmlspecialchars( "$zankyoryoe3(ℓ)" ) );





$baisuf = $suryof/200;
//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(135, 75, htmlspecialchars( "$baisuf" ) );

$baisua2 = $suryoa2/200;
//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(141, 148, htmlspecialchars( "$baisua2" ) );

$baisua3 = $suryoa3/200;
//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(138, 222, htmlspecialchars( "$baisua3" ) );

$baisuc = $suryoc/1000;
//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(138, 84, htmlspecialchars( "$baisuc" ) );

$baisub2 = $suryob2/1000;
//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(141, 157, htmlspecialchars( "$baisub2" ) );

$baisuc3 = $suryoc3/1000;
//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(138, 231, htmlspecialchars( "$baisuc3" ) );

$baisue = $suryoe/2000;
//塗装工場
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(140, 94, htmlspecialchars( "$baisue" ) );

$baisue2 = $suryoe2/2000;
//塗料保管庫
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(135, 167, htmlspecialchars( "$baisue2" ) );

$baisue3 = $suryoe3/2000;
//洗浄室
$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(141, 241, htmlspecialchars( "$baisue3" ) );



//日付
//$pdf->SetFont('kozminproregular', '', 20);
//$today = date("Y年m月d日");
//$pdf->Text(30, 30, $today);

//$pdf->Output(出力時のファイル名, 出力モード);

ob_end_clean();
$pdf->Output("output.pdf", "I");

?>




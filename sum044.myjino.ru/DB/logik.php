<?
require_once('connection.php');

// $sql1 = "SELECT * FROM countries";
// $DataCountries  = $pdo->query($sql1);
// $countries = $DataCountries->fetchAll();


// $sql2 = "SELECT * FROM cities";
// $DataCities  = $pdo->query($sql2);
// $cities = $DataCities->fetchAll();


// $sql4 = "SELECT * FROM lives WHERE name_cities = 'Tagil'";
// $DataTagil  = $pdo->query($sql4);
// $LineTagil = $DataTagil->fetchAll();

$sql = "SELECT * FROM lives WHERE name_cities = 'Tagil'";
$DataTagil  = $pdo->query($sql);
$lineTagil = $DataTagil->fetchAll();

$sql = "SELECT * FROM lives WHERE name_cities = 'Michigan'";
$DataMichigan  = $pdo->query($sql);
$lineMichigan = $DataMichigan->fetchAll();

$sql = "SELECT * FROM lives WHERE name_cities = 'New-Yourk'";
$DataYourk  = $pdo->query($sql);
$lineYourk = $DataYourk->fetchAll();

$sql = "SELECT * FROM lives WHERE name_cities = 'Vermont'";
$DataVermont  = $pdo->query($sql);
$lineVermont = $DataVermont->fetchAll();

$random = rand(1, 5);

$sql = "SELECT * FROM lives WHERE id_live = '$random'";
$DataRandom  = $pdo->query($sql);
$lineRandom = $DataRandom->fetchAll();

$sql = "SELECT * FROM news_block";
$DataNews  = $pdo->query($sql);
$lineNews = $DataNews->fetchAll();

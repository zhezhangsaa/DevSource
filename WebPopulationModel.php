

<?php

$postText = trim(file_get_contents('php://input')); 

//$xml = simplexml_load_string($postText);

$xml = new SimpleXMLElement($postText);

$parameter1 = $xml->xpath('/parameters/polygon');

while(list( , $node1) = each($parameter1)) {
   $polygonXML=$node1; 
}
$polygon=preg_replace('/([^ ]+[ ][^ ]+)[ ]/','$1,',$polygonXML);

$parameter3 = $xml->xpath('/parameters/timestamp');

while(list( , $node3) = each($parameter3)) {
   $timestamp=$node3; 
}

//date_default_timezone_set("Europe/Helsinki");

//split the input time parameter as string and save it to the variable
list($year,$month,$day,$time,$minutes,$second)=split('([A-Z\:\-])',$timestamp);
// change time into integer


//get my php information
//echo phpinfo();

//------------------convert present date into weekdays friday, and save it to the variable weekday.
$d=cal_to_jd(CAL_GREGORIAN,date($month),date($day),date($year));
$weekday=jddayofweek($d,1);

//connect to database. 
$con_str = "host=localhost port=5432 dbname=postgis user=postgres password=ekGv17elV";
$con = pg_connect("$con_str") or die('Could not connect: ' . pg_last_error());
// add shop data


pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975690'and kuopiodata.ycoord='3531385';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6980030'and kuopiodata.ycoord='3534725';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6076750'and kuopiodata.ycoord='3534510';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975340'and kuopiodata.ycoord='3534200';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976570'and kuopiodata.ycoord='3534580';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977790'and kuopiodata.ycoord='3533150';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6972500'and kuopiodata.ycoord='3532920';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6978340'and kuopiodata.ycoord='3534910';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976560'and kuopiodata.ycoord='3534440';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6980400'and kuopiodata.ycoord='3532270';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976750'and kuopiodata.ycoord='3534790';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976860'and kuopiodata.ycoord='3534570';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6974340'and kuopiodata.ycoord='3531810';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976720'and kuopiodata.ycoord='3534570';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975740'and kuopiodata.ycoord='3534780';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976750'and kuopiodata.ycoord='3534540';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975690'and kuopiodata.ycoord='3531385';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6970818'and kuopiodata.ycoord='3533010';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6962290'and kuopiodata.ycoord='3552710';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6987560'and kuopiodata.ycoord='3534740';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977678'and kuopiodata.ycoord='3535884';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975300'and kuopiodata.ycoord='3532390';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6980200'and kuopiodata.ycoord='3534850';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976540'and kuopiodata.ycoord='3534810';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6981300'and kuopiodata.ycoord='3533820';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976980'and kuopiodata.ycoord='3534550';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6972070'and kuopiodata.ycoord='3532880';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976670'and kuopiodata.ycoord='3534565';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6979360'and kuopiodata.ycoord='3536040';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6979670'and kuopiodata.ycoord='3532450';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977700'and kuopiodata.ycoord='3533160';") or die('Query failed: ' . pg_last_error());


pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976990'and kuopiodata.ycoord='3534590';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976840'and kuopiodata.ycoord='3534740';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6962230'and kuopiodata.ycoord='3552790';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976630'and kuopiodata.ycoord='3534590';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976850'and kuopiodata.ycoord='3534540';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975626'and kuopiodata.ycoord='3532338';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977310'and kuopiodata.ycoord='3536230';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977660'and kuopiodata.ycoord='3533200';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6979460'and kuopiodata.ycoord='3559060';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976680'and kuopiodata.ycoord='3534780';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976630'and kuopiodata.ycoord='3534870';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975350'and kuopiodata.ycoord='3534000';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977044'and kuopiodata.ycoord='3534617';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6974278'and kuopiodata.ycoord='3532144';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6974192'and kuopiodata.ycoord='3532233';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6973160'and kuopiodata.ycoord='3531479';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6077925'and kuopiodata.ycoord='3534498';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6970695'and kuopiodata.ycoord='3531190';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6974127'and kuopiodata.ycoord='3532240';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975437'and kuopiodata.ycoord='3534085';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976440'and kuopiodata.ycoord='3534185';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6980239'and kuopiodata.ycoord='3534644';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976710'and kuopiodata.ycoord='3534855';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976980'and kuopiodata.ycoord='3535515';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975504'and kuopiodata.ycoord='3531923';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6978039'and kuopiodata.ycoord='3534486';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976690'and kuopiodata.ycoord='3534288';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977670'and kuopiodata.ycoord='3536015';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977705'and kuopiodata.ycoord='3535975';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6970775'and kuopiodata.ycoord='3532995';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6973158'and kuopiodata.ycoord='3532001';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6972460'and kuopiodata.ycoord='3532816';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976500'and kuopiodata.ycoord='3534531';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6970397'and kuopiodata.ycoord='3531927';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6975528'and kuopiodata.ycoord='3534222';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6973347'and kuopiodata.ycoord='3531987';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976549'and kuopiodata.ycoord='3534510';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976684'and kuopiodata.ycoord='3534832';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6970539'and kuopiodata.ycoord='3531135';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6973577'and kuopiodata.ycoord='3531157';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976972'and kuopiodata.ycoord='3533475';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976509'and kuopiodata.ycoord='3534596';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976886'and kuopiodata.ycoord='3535170';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6976590'and kuopiodata.ycoord='3534540';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 112 where kuopiodata.xcoord='6977760'and kuopiodata.ycoord='3533490';") or die('Query failed: ' . pg_last_error());


pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6979395'and kuopiodata.ycoord='3534220';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976890'and kuopiodata.ycoord='3534600';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6966260'and kuopiodata.ycoord='3546580';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6962280'and kuopiodata.ycoord='3552791';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6975380'and kuopiodata.ycoord='3535740';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976470'and kuopiodata.ycoord='3534720';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6975867'and kuopiodata.ycoord='3533100';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6972038'and kuopiodata.ycoord='3532152';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6977450'and kuopiodata.ycoord='3535240';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6979177'and kuopiodata.ycoord='3534632';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976165'and kuopiodata.ycoord='3535310';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6975312'and kuopiodata.ycoord='3534334';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976140'and kuopiodata.ycoord='3535340';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6978577'and kuopiodata.ycoord='3533486';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976175'and kuopiodata.ycoord='3535468';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6980050'and kuopiodata.ycoord='3532240';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6969020'and kuopiodata.ycoord='3531570';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6975300'and kuopiodata.ycoord='3531770';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6975868'and kuopiodata.ycoord='3530850';") or die('Query failed: ' . pg_last_error());

pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976720'and kuopiodata.ycoord='3535360';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6978490'and kuopiodata.ycoord='3535483';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6975495'and kuopiodata.ycoord='3535753';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6962480'and kuopiodata.ycoord='3552184';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6977417'and kuopiodata.ycoord='3533412';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6977198'and kuopiodata.ycoord='3535034';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6957850'and kuopiodata.ycoord='3538680';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976738'and kuopiodata.ycoord='3534816';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6975477'and kuopiodata.ycoord='3533979';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976665'and kuopiodata.ycoord='3535547';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6976913'and kuopiodata.ycoord='3534785';") or die('Query failed: ' . pg_last_error());
pg_query("update kuopiodata set useofbuild = 41 where kuopiodata.xcoord='6958570'and kuopiodata.ycoord='3536830';") or die('Query failed: ' . pg_last_error());





// 11 residential buildings
// 112 shops
// 121 hotels
// 131 old peopleś homes
// 41 restaurant and bars
// 151 office buildings
// 211 hospitals
// 222 daycares
// 511 schools
// 611 industry buildings


$queryOffice= "update kuopiodata set buildpop = floorarea/10 where kuopiodata.useofbuild = '151'";
$queryOfficeRe= pg_query($queryOffice) or die('Query failed: ' . pg_last_error());

$queryOldPeople= "update kuopiodata set buildpop = floorarea/20 where kuopiodata.useofbuild = '131'";
$queryOldPeopleRe= pg_query($queryOldPeople) or die('Query failed: ' . pg_last_error());

$queryDayCare= "update kuopiodata set buildpop = floorarea/15 where kuopiodata.useofbuild = '222'";
$queryDayCareRe= pg_query($queryDayCare) or die('Query failed: ' . pg_last_error());

$queryBar= "update kuopiodata set buildpop = floorarea/8 where kuopiodata.useofbuild = '41'";
$queryBarRe= pg_query($queryBar) or die('Query failed: ' . pg_last_error());


$queryShop0 = "update kuopiodata set buildpop= (select case when kuopiodata.floorarea > 0 and kuopiodata.floorarea < 200 then '20' else buildpop end) where kuopiodata.useofbuild='112'";

pg_query($queryShop0) or die('Query failed: ' . pg_last_error());
$queryShop1 = "update kuopiodata set buildpop= (select case when kuopiodata.floorarea > 200 and kuopiodata.floorarea < 500 then '40' else buildpop end) where kuopiodata.useofbuild='112'";

pg_query($queryShop1) or die('Query failed: ' . pg_last_error());
$queryShop2 = "update kuopiodata set buildpop= (select case when kuopiodata.floorarea > 700 and kuopiodata.floorarea < 2000 then '130' else buildpop end) where kuopiodata.useofbuild='112'";
pg_query($queryShop2) or die('Query failed: ' . pg_last_error());
$queryShop3 = "update kuopiodata set buildpop= (select case when kuopiodata.floorarea > 2000 and kuopiodata.floorarea < 4000 then '300' else buildpop end) where kuopiodata.useofbuild='112'";
pg_query($queryShop3) or die('Query failed: ' . pg_last_error());

$queryShop4 = "update kuopiodata set buildpop= (select case when kuopiodata.floorarea > 4000 then '400' else buildpop end) where kuopiodata.useofbuild='112'";
pg_query($queryShop4) or die('Query failed: ' . pg_last_error());

$x = (int)$time;
if (($weekday=="Monday") || ($weekday=="Tuesday")||($weekday=="Wednesday")||($weekday=="Tursday")||($weekday=="Friday"))
{
	
         switch ($x){
        case ($x>=7 && $x<=10):
        $query1 = "update kuopiodata set buildpop = resident/3 where kuopiodata.useofbuild = '11'";
        $result1= pg_query($query1) or die('Query failed: ' . pg_last_error());

        $query2 = "update kuopiodata set buildpop = hospital/2 where kuopiodata.useofbuild = '211'";
        $result2= pg_query($query2) or die('Query failed: ' . pg_last_error());

        $query3 = "update kuopiodata set buildpop = (hotel*2)/3 where kuopiodata.useofbuild = '121'";
        $result3= pg_query($query3) or die('Query failed: ' . pg_last_error());

        $query4 = "update kuopiodata set buildpop = buildpop where kuopiodata.useofbuild = '131'";
        $result4= pg_query($query4) or die('Query failed: ' . pg_last_error());

        $query5 = "update kuopiodata set buildpop = (floorarea*2)/3 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result5= pg_query($query5) or die('Query failed: ' . pg_last_error());
        
       $query6 = "update kuopiodata set buildpop = (school*2)/3 where kuopiodata.useofbuild = '511'";
        $result6= pg_query($query6) or die('Query failed: ' . pg_last_error());

        $query7 = "update kuopiodata set buildpop = buildpop /5 where kuopiodata.useofbuild = '41'";
        $result7= pg_query($query7) or die('Query failed: ' . pg_last_error());

        $query8 = "update kuopiodata set buildpop = buildpop*0 where kuopiodata.useofbuild = '112'";
        $result8= pg_query($query8) or die('Query failed: ' . pg_last_error());

        $query9 = "update kuopiodata set road = roadpop*3";
        $result9= pg_query($query9) or die('Query failed: ' . pg_last_error());

        $query10 = "update kuopiodata set buildpop = (industrial*2)/3 where kuopiodata.useofbuild = '611'";
        $result10= pg_query($query10) or die('Query failed: ' . pg_last_error());
        break;
        
        case ($x>10 && $x<=16):
        
        $query11 = "update kuopiodata set buildpop = resident/10 where kuopiodata.useofbuild = '11'";
        $result11= pg_query($query11) or die('Query failed: ' . pg_last_error());

        $query12 = "update kuopiodata set buildpop = hospital where kuopiodata.useofbuild = '211'";
        $result12= pg_query($query12) or die('Query failed: ' . pg_last_error());

        $query13 = "update kuopiodata set buildpop = hotel/3 where kuopiodata.useofbuild = '121'";
        $result13= pg_query($query13) or die('Query failed: ' . pg_last_error());

        $query14 = "update kuopiodata set buildpop = (buildpop*2)/3 where kuopiodata.useofbuild = '131'";
        $result14= pg_query($query14) or die('Query failed: ' . pg_last_error());

        $query15 = "update kuopiodata set buildpop = buildpop where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result15= pg_query($query15) or die('Query failed: ' . pg_last_error());
        
       $query16 = "update kuopiodata set buildpop = (school*2)/3 where kuopiodata.useofbuild = '511'";
        $result16= pg_query($query16) or die('Query failed: ' . pg_last_error());

        $query17 = "update kuopiodata set buildpop = buildpop /3 where kuopiodata.useofbuild = '41'";
        $result17= pg_query($query17) or die('Query failed: ' . pg_last_error());

        $query18 = "update kuopiodata set buildpop = buildpop/3 where kuopiodata.useofbuild = '112'";
        $result18= pg_query($query18) or die('Query failed: ' . pg_last_error());

        $query19 = "update kuopiodata set road = roadpop";
        $result19= pg_query($query19) or die('Query failed: ' . pg_last_error());

        $query20 = "update kuopiodata set buildpop = industrial where kuopiodata.useofbuild = '611'";
        $result20= pg_query($query20) or die('Query failed: ' . pg_last_error());
        break;
        case ($x>16 && $x<=19):
       $query21 = "update kuopiodata set buildpop = (resident*2)/3 where kuopiodata.useofbuild = '11'";
        $result21= pg_query($query21) or die('Query failed: ' . pg_last_error());

        $query22 = "update kuopiodata set buildpop = (hospital*2)/3 where kuopiodata.useofbuild = '211'";
        $result22= pg_query($query22) or die('Query failed: ' . pg_last_error());

        $query23 = "update kuopiodata set buildpop = (hotel*2)/3 where kuopiodata.useofbuild = '121'";
        $result23= pg_query($query23) or die('Query failed: ' . pg_last_error());

        $query24 = "update kuopiodata set buildpop = (buildpop *2)/3 where kuopiodata.useofbuild = '131'";
        $result24= pg_query($query24) or die('Query failed: ' . pg_last_error());

        $query25 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result25= pg_query($query25) or die('Query failed: ' . pg_last_error());
        
       $query26 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result26= pg_query($query26) or die('Query failed: ' . pg_last_error());

        $query27 = "update kuopiodata set buildpop = (buildpop*2)/3 where kuopiodata.useofbuild = '41'";
        $result27= pg_query($query27) or die('Query failed: ' . pg_last_error());

        $query28 = "update kuopiodata set buildpop = buildpop where kuopiodata.useofbuild = '112'";
        $result28= pg_query($query28) or die('Query failed: ' . pg_last_error());

        $query29 = "update kuopiodata set road = roadpop*3";
        $result29= pg_query($query29) or die('Query failed: ' . pg_last_error());

        $query30 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result30= pg_query($query30) or die('Query failed: ' . pg_last_error());
        break;
       case ($x>19 && $x<=22):
       $query21 = "update kuopiodata set buildpop = resident where kuopiodata.useofbuild = '11'";
        $result21= pg_query($query21) or die('Query failed: ' . pg_last_error());

        $query22 = "update kuopiodata set buildpop = (hospital*2)/3 where kuopiodata.useofbuild = '211'";
        $result22= pg_query($query22) or die('Query failed: ' . pg_last_error());

        $query23 = "update kuopiodata set buildpop = hotel where kuopiodata.useofbuild = '121'";
        $result23= pg_query($query23) or die('Query failed: ' . pg_last_error());

        $query24 = "update kuopiodata set buildpop = buildpop where kuopiodata.useofbuild = '131'";
        $result24= pg_query($query24) or die('Query failed: ' . pg_last_error());

        $query25 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result25= pg_query($query25) or die('Query failed: ' . pg_last_error());
        
       $query26 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result26= pg_query($query26) or die('Query failed: ' . pg_last_error());

        $query27 = "update kuopiodata set buildpop = buildpop /3 where kuopiodata.useofbuild = '41'";
        $result27= pg_query($query27) or die('Query failed: ' . pg_last_error());

        $query28 = "update kuopiodata set buildpop = buildpop/3 where kuopiodata.useofbuild = '112'";
        $result28= pg_query($query28) or die('Query failed: ' . pg_last_error());

        $query29 = "update kuopiodata set road = roadpop/2";
        $result29= pg_query($query29) or die('Query failed: ' . pg_last_error());

        $query30 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result30= pg_query($query30) or die('Query failed: ' . pg_last_error());
        break;
        case (($x>22 && $x<24)|| ($x>=0 && $x<7)):
       $query41 = "update kuopiodata set buildpop = resident where kuopiodata.useofbuild = '11'";
        $result41= pg_query($query41) or die('Query failed: ' . pg_last_error());

        $query42 = "update kuopiodata set buildpop = hospital/3 where kuopiodata.useofbuild = '211'";
        $result42= pg_query($query42) or die('Query failed: ' . pg_last_error());

        $query43 = "update kuopiodata set buildpop = hotel where kuopiodata.useofbuild = '121'";
        $result43= pg_query($query43) or die('Query failed: ' . pg_last_error());

        $query44 = "update kuopiodata set buildpop = buildpop  where kuopiodata.useofbuild = '131'";
        $result44= pg_query($query44) or die('Query failed: ' . pg_last_error());

        $query45 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result45= pg_query($query45) or die('Query failed: ' . pg_last_error());
        
       $query46 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result46= pg_query($query46) or die('Query failed: ' . pg_last_error());

        $query47 = "update kuopiodata set buildpop = buildpop /3 where kuopiodata.useofbuild = '41'";
        $result47= pg_query($query47) or die('Query failed: ' . pg_last_error());

        $query48 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result48= pg_query($query48) or die('Query failed: ' . pg_last_error());

        $query49 = "update kuopiodata set road = roadpop/2";
        $result49= pg_query($query49) or die('Query failed: ' . pg_last_error());

        $query50 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result50= pg_query($query50) or die('Query failed: ' . pg_last_error());
        break;
         }
}
if ($weekday=="Saturday"){
       switch ($x){
       case (($x>=22 && $x<24) ||($x>=0 && $x<=4)):
       $query61 = "update kuopiodata set buildpop = (resident*2/3) where kuopiodata.useofbuild = '11'";
        $result61= pg_query($query61) or die('Query failed: ' . pg_last_error());

        $query62 = "update kuopiodata set buildpop = hospital/3 where kuopiodata.useofbuild = '211'";
        $result62= pg_query($query62) or die('Query failed: ' . pg_last_error());

        $query63 = "update kuopiodata set buildpop = (hotel*2)/3 where kuopiodata.useofbuild = '121'";
        $result63= pg_query($query63) or die('Query failed: ' . pg_last_error());

        $query64 = "update kuopiodata set buildpop = buildpop  where kuopiodata.useofbuild = '131'";
        $result64= pg_query($query64) or die('Query failed: ' . pg_last_error());

        $query65 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result65= pg_query($query65) or die('Query failed: ' . pg_last_error());
        
       $query66 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result66= pg_query($query66) or die('Query failed: ' . pg_last_error());

        $query67 = "update kuopiodata set buildpop = (buildpop *2)/3 where kuopiodata.useofbuild = '41'";
        $result67= pg_query($query67) or die('Query failed: ' . pg_last_error());

        $query68 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result68= pg_query($query68) or die('Query failed: ' . pg_last_error());

        $query69 = "update kuopiodata set road = roadpop/2";
        $result69= pg_query($query69) or die('Query failed: ' . pg_last_error());

        $query70 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result70= pg_query($query70) or die('Query failed: ' . pg_last_error());
        break;
            case ($x>=9 && $x<=11):
       $query71 = "update kuopiodata set buildpop = (resident*2)/3 where kuopiodata.useofbuild = '11'";
        $result71= pg_query($query71) or die('Query failed: ' . pg_last_error());

        $query72 = "update kuopiodata set buildpop = (hospital*2)/3 where kuopiodata.useofbuild = '211'";
        $result72= pg_query($query72) or die('Query failed: ' . pg_last_error());

        $query73 = "update kuopiodata set buildpop = hotel/3 where kuopiodata.useofbuild = '121'";
        $result73= pg_query($query73) or die('Query failed: ' . pg_last_error());

        $query74 = "update kuopiodata set buildpop = buildpop  where kuopiodata.useofbuild = '131'";
        $result74= pg_query($query74) or die('Query failed: ' . pg_last_error());

        $query75 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result75= pg_query($query75) or die('Query failed: ' . pg_last_error());
        
       $query76 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result76= pg_query($query76) or die('Query failed: ' . pg_last_error());

        $query77 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '41'";
        $result77= pg_query($query77) or die('Query failed: ' . pg_last_error());

        $query78 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result78= pg_query($query78) or die('Query failed: ' . pg_last_error());

        $query79 = "update kuopiodata set road = roadpop*2";
        $result79= pg_query($query79) or die('Query failed: ' . pg_last_error());

        $query80 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result80= pg_query($query80) or die('Query failed: ' . pg_last_error());
        break;
            case ($x>11 && $x<=17):
       $query81 = "update kuopiodata set buildpop = resident/3 where kuopiodata.useofbuild = '11'";
        $result81= pg_query($query81) or die('Query failed: ' . pg_last_error());

        $query82 = "update kuopiodata set buildpop = hospital/3 where kuopiodata.useofbuild = '211'";
        $result82= pg_query($query82) or die('Query failed: ' . pg_last_error());

        $query83 = "update kuopiodata set buildpop = hotel/3 where kuopiodata.useofbuild = '121'";
        $result83= pg_query($query83) or die('Query failed: ' . pg_last_error());

        $query84 = "update kuopiodata set buildpop = (buildpop*2)/3 where kuopiodata.useofbuild = '131'";
        $result84= pg_query($query84) or die('Query failed: ' . pg_last_error());

        $query85 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result85= pg_query($query85) or die('Query failed: ' . pg_last_error());
        
       $query86 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result86= pg_query($query86) or die('Query failed: ' . pg_last_error());

        $query87 = "update kuopiodata set buildpop = (buildpop *2)/3 where kuopiodata.useofbuild = '41'";
        $result87= pg_query($query87) or die('Query failed: ' . pg_last_error());

        $query88 = "update kuopiodata set buildpop = buildpop where kuopiodata.useofbuild = '112'";
        $result88= pg_query($query88) or die('Query failed: ' . pg_last_error());

        $query89 = "update kuopiodata set road = roadpop";
        $result89= pg_query($query89) or die('Query failed: ' . pg_last_error());

        $query90 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result90= pg_query($query90) or die('Query failed: ' . pg_last_error());
        break;
            case ($x>17 && $x<22):
       $query91 = "update kuopiodata set buildpop = (resident*2)/3 where kuopiodata.useofbuild = '11'";
        $result91= pg_query($query91) or die('Query failed: ' . pg_last_error());

        $query92 = "update kuopiodata set buildpop = (hospital*2)/3 where kuopiodata.useofbuild = '211'";
        $result92= pg_query($query92) or die('Query failed: ' . pg_last_error());

        $query93 = "update kuopiodata set buildpop = hotel/3 where kuopiodata.useofbuild = '121'";
        $result93= pg_query($query93) or die('Query failed: ' . pg_last_error());

        $query94 = "update kuopiodata set buildpop = (buildpop *2)/3 where kuopiodata.useofbuild = '131'";
        $result94= pg_query($query94) or die('Query failed: ' . pg_last_error());

        $query95 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result95= pg_query($query95) or die('Query failed: ' . pg_last_error());
        
       $query96 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result96= pg_query($query96) or die('Query failed: ' . pg_last_error());

        $query97 = "update kuopiodata set buildpop = (buildpop *2)/3 where kuopiodata.useofbuild = '41'";
        $result97= pg_query($query97) or die('Query failed: ' . pg_last_error());

        $query98 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result98= pg_query($query98) or die('Query failed: ' . pg_last_error());

        $query99 = "update kuopiodata set road = roadpop*2";
        $result99= pg_query($query99) or die('Query failed: ' . pg_last_error());

        $query100 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result100= pg_query($query100) or die('Query failed: ' . pg_last_error()); 
        break;
        case ($x>4 && $x<9):
       $query101 = "update kuopiodata set buildpop = resident where kuopiodata.useofbuild = '11'";
        $result101= pg_query($query101) or die('Query failed: ' . pg_last_error());

        $query102 = "update kuopiodata set buildpop = hospital/3 where kuopiodata.useofbuild = '211'";
        $result102= pg_query($query102) or die('Query failed: ' . pg_last_error());

        $query103 = "update kuopiodata set buildpop = (hotel*2)/3 where kuopiodata.useofbuild = '121'";
        $result103= pg_query($query103) or die('Query failed: ' . pg_last_error());

        $query104 = "update kuopiodata set buildpop = buildpop  where kuopiodata.useofbuild = '131'";
        $result104= pg_query($query104) or die('Query failed: ' . pg_last_error());

        $query105 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result105= pg_query($query105) or die('Query failed: ' . pg_last_error());
        
       $query106 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result106= pg_query($query106) or die('Query failed: ' . pg_last_error());

        $query107 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '41'";
        $result107= pg_query($query107) or die('Query failed: ' . pg_last_error());

        $query108 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result108= pg_query($query108) or die('Query failed: ' . pg_last_error());

        $query109 = "update kuopiodata set road = roadpop*2";
        $result109= pg_query($query109) or die('Query failed: ' . pg_last_error());

        $query110 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result110= pg_query($query110) or die('Query failed: ' . pg_last_error()); 
         break;   
   }
}

if ($weekday=="Sunday"){
switch ($x){
          case ($x>=9 && $x<=11):
       $query111 = "update kuopiodata set buildpop = resident where kuopiodata.useofbuild = '11'";
        $result111= pg_query($query111) or die('Query failed: ' . pg_last_error());

        $query112 = "update kuopiodata set buildpop = (hospital*2)/3 where kuopiodata.useofbuild = '211'";
        $result112= pg_query($query112) or die('Query failed: ' . pg_last_error());

        $query113 = "update kuopiodata set buildpop = hotel where kuopiodata.useofbuild = '121'";
        $result113= pg_query($query113) or die('Query failed: ' . pg_last_error());

        $query114 = "update kuopiodata set buildpop = buildpop  where kuopiodata.useofbuild = '131'";
        $result114= pg_query($query114) or die('Query failed: ' . pg_last_error());

        $query115 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result115= pg_query($query115) or die('Query failed: ' . pg_last_error());
        
       $query116 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result116= pg_query($query116) or die('Query failed: ' . pg_last_error());

        $query117 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '41'";
        $result117= pg_query($query117) or die('Query failed: ' . pg_last_error());

        $query118 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result118= pg_query($query118) or die('Query failed: ' . pg_last_error());

        $query119 = "update kuopiodata set buildpop = roadpop/3";
        $result119= pg_query($query119) or die('Query failed: ' . pg_last_error());

        $query120 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result120= pg_query($query120) or die('Query failed: ' . pg_last_error()); 
        break;
case ($x>11 && $x<=17):
       $query121 = "update kuopiodata set buildpop = (resident*2)/3 where kuopiodata.useofbuild = '11'";
        $result121= pg_query($query121) or die('Query failed: ' . pg_last_error());

        $query122 = "update kuopiodata set buildpop = (hospital*2)/3 where kuopiodata.useofbuild = '211'";
        $result122= pg_query($query122) or die('Query failed: ' . pg_last_error());

        $query123 = "update kuopiodata set buildpop = hotel/3 where kuopiodata.useofbuild = '121'";
        $result123= pg_query($query123) or die('Query failed: ' . pg_last_error());

        $query124 = "update kuopiodata set buildpop = (buildpop *2)/3 where kuopiodata.useofbuild = '131'";
        $result124= pg_query($query124) or die('Query failed: ' . pg_last_error());

        $query125 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result125= pg_query($query125) or die('Query failed: ' . pg_last_error());
        
       $query126 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result126= pg_query($query126) or die('Query failed: ' . pg_last_error());

        $query127 = "update kuopiodata set buildpop = buildpop/3 where kuopiodata.useofbuild = '41'";
        $result127= pg_query($query127) or die('Query failed: ' . pg_last_error());

        $query128 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result128= pg_query($query128) or die('Query failed: ' . pg_last_error());

        $query129 = "update kuopiodata set road = roadpop";
        $result129= pg_query($query129) or die('Query failed: ' . pg_last_error());

        $query130 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result130= pg_query($query130) or die('Query failed: ' . pg_last_error()); 
        break;
case ($x>17 && $x<=22):
       $query131 = "update kuopiodata set buildpop = resident where kuopiodata.useofbuild = '11'";
        $result131= pg_query($query131) or die('Query failed: ' . pg_last_error());

        $query132 = "update kuopiodata set buildpop = (hospital*2)/3 where kuopiodata.useofbuild = '211'";
        $result132= pg_query($query132) or die('Query failed: ' . pg_last_error());

        $query133 = "update kuopiodata set buildpop = hotel where kuopiodata.useofbuild = '121'";
        $result133= pg_query($query133) or die('Query failed: ' . pg_last_error());

        $query134 = "update kuopiodata set buildpop = buildpop  where kuopiodata.useofbuild = '131'";
        $result134= pg_query($query134) or die('Query failed: ' . pg_last_error());

        $query135 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result135= pg_query($query135) or die('Query failed: ' . pg_last_error());
        
       $query136 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result136= pg_query($query136) or die('Query failed: ' . pg_last_error());

        $query137 = "update kuopiodata set buildpop = buildpop /5 where kuopiodata.useofbuild = '41'";
        $result137= pg_query($query137) or die('Query failed: ' . pg_last_error());

        $query138 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result138= pg_query($query138) or die('Query failed: ' . pg_last_error());

        $query139 = "update kuopiodata set road = roadpop/3";
        $result139= pg_query($query139) or die('Query failed: ' . pg_last_error());

        $query140 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result140= pg_query($query140) or die('Query failed: ' . pg_last_error()); 
        break;

case (($x>22 && $x<24)||($x>=0 && $x<9)):
       $query141 = "update kuopiodata set buildpop = resident where kuopiodata.useofbuild = '11'";
        $result141= pg_query($query141) or die('Query failed: ' . pg_last_error());

        $query142 = "update kuopiodata set buildpop = hospital/3 where kuopiodata.useofbuild = '211'";
        $result142= pg_query($query142) or die('Query failed: ' . pg_last_error());

        $query143 = "update kuopiodata set buildpop = hotel where kuopiodata.useofbuild = '121'";
        $result143= pg_query($query143) or die('Query failed: ' . pg_last_error());

        $query144 = "update kuopiodata set buildpop = buildpop  where kuopiodata.useofbuild = '131'";
        $result144= pg_query($query144) or die('Query failed: ' . pg_last_error());

        $query145 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '151' or kuopiodata.useofbuild = '222'";
        $result145= pg_query($query145) or die('Query failed: ' . pg_last_error());
        
       $query146 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '511'";
        $result146= pg_query($query146) or die('Query failed: ' . pg_last_error());

        $query147 = "update kuopiodata set buildpop = buildpop /5 where kuopiodata.useofbuild = '41'";
        $result147= pg_query($query147) or die('Query failed: ' . pg_last_error());

        $query148 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '112'";
        $result148= pg_query($query148) or die('Query failed: ' . pg_last_error());

        $query149 = "update kuopiodata set road = roadpop/3";
        $result149= pg_query($query149) or die('Query failed: ' . pg_last_error());

        $query150 = "update kuopiodata set buildpop = 0 where kuopiodata.useofbuild = '611'";
        $result150= pg_query($query150) or die('Query failed: ' . pg_last_error()); 
        break;
}

}

$query151 = "select xcoord, ycoord, useofbuild,buildpop, roadpop, the_geom from kuopiodata where st_contains(st_geomfromtext('polygon((".$polygon."))'), kuopiodata.the_geom)";
$result151= pg_query($query151) or die('Query failed: ' . pg_last_error());
$sum=pg_query("select useofbuild, sum(buildpop) from kuopiodata where st_contains(st_geomfromtext('polygon((".$polygon."))'), kuopiodata.the_geom) group by useofbuild;") or die('Query failed: ' . pg_last_error());
$roadSum=pg_query("select sum(road) from kuopiodata where st_contains(st_geomfromtext('polygon((".$polygon."))'), kuopiodata.the_geom);") or die('Query failed: ' . pg_last_error());
$doc = new DomDocument("1.0");
$doc -> formatOutput = true;
$root = $doc->createElement('PopulationSizeXMLAndSummaryXML');
$root = $doc->appendChild($root);
$nodeBuilding = $doc->createElement('buildings');
$nodeSummary = $doc->createElement('summary');
$encoding = $doc->createElement('encodingOfBuildings');
$encoding1 = $doc->createElement('useOfBuilding11');
$encoding1->nodeValue = '11:Residential Buildings';
$encoding2 = $doc->createElement('useOfBuilding121');
$encoding2->nodeValue = '121:Hotels';
$encoding3 = $doc->createElement('useOfBuilding112');
$encoding3->nodeValue = '112:Shops';
$encoding4 = $doc->createElement('useOfBuilding131');
$encoding4->nodeValue = '131:Old people homes';
$encoding5 = $doc->createElement('useOfBuilding41');
$encoding5->nodeValue = '41:Restaurants and Bars';
$encoding6 = $doc->createElement('useOfBuilding151');
$encoding6->nodeValue = '151: Office Buildings';
$encoding7 = $doc->createElement('useOfBuilding211');
$encoding7->nodeValue = '211: Hospitals';
$encoding8 = $doc->createElement('useOfBuilding222');
$encoding8->nodeValue = '222:Daycares';
$encoding9 = $doc->createElement('useOfBuilding511');
$encoding9->nodeValue = '511:Schools';
$encoding10 = $doc->createElement('useOfBuilding611');
$encoding10->nodeValue = '611:Industrial Buildings';
$root->appendChild($nodeBuilding);
$root->appendChild($nodeSummary);
$root->appendChild($encoding);
$encoding->appendChild($encoding1);
$encoding->appendChild($encoding2);
$encoding->appendChild($encoding3);
$encoding->appendChild($encoding4);
$encoding->appendChild($encoding5);
$encoding->appendChild($encoding6);
$encoding->appendChild($encoding7);
$encoding->appendChild($encoding8);
$encoding->appendChild($encoding9);
$encoding->appendChild($encoding10);
while($row = pg_fetch_assoc($result151)){
    $node1 = $doc->createElement('point');
    $node1 = $nodeBuilding->appendChild($node1);

    foreach($row as $fieldname => $fieldvalue){
       $node1->appendChild($doc->createElement($fieldname, $fieldvalue));
       
    }
}

$rowRoad = pg_fetch_row($roadSum);
$roadString = $rowRoad[0];
$nodeSummary->appendChild($doc->createElement('Road',$roadString ));
while($row1 = pg_fetch_assoc($sum)){
    $node2 = $doc->createElement('PopulationSize');
    $node2 = $nodeSummary->appendChild($node2);
    foreach($row1 as $fieldname1 => $fieldvalue1){
       $node2->appendChild($doc->createElement($fieldname1, $fieldvalue1));      
    }     
}
header ("Content-Type:text/xml");
echo $doc->saveXML()."\n";
?>

<?php
// storetraklist.php

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);

$tools = ($_POST["arr"]);
$nums = ($_POST["arrnum"]);


$stmt = $con->prepare("INSERT INTO Traklists (`Listname`,`StartDate`,`EndDate`
,`1`,`2`,`3`,`4`,`5`,`6`,`7`
,`8`,`9`,`10`,`11`,`12`,`13`,`14`
,`15`,`16`,`17`,`18`,`19`,`20`,`21`
,`22`,`23`,`24`,`25`,`26`,`27`,`28`
,`29`,`30`,`31`,`32`,`33`,`34`,`35`
,`36`,`37`,`38`,`39`,`40`,`41`,`42`
,`43`,`44`,`45`,`46`,`47`,`48`,`49`
,`50`,`51`,`52`,`53`,`54`,`55`,`56`
,`57`,`58`,`59`,`60`,`61`,`62`,`63`
,`64`,`65`,`66`,`67`,`68`,`69`,`70`
,`71`,`72`,`73`,`74`,`75`,`76`,`77`
,`78`,`79`,`80`,`81`,`82`,`83`,`84`


) 



VALUES (
'$tools[0]','$tools[1]','$tools[2]',

'$tools[3]','$tools[4]','$tools[5]','$tools[6]','$tools[7]','$tools[8]','$tools[9]',
'$tools[10]','$tools[11]','$tools[12]','$tools[13]','$tools[14]','$tools[15]','$tools[16]',
'$tools[17]','$tools[18]','$tools[19]','$tools[20]','$tools[21]','$tools[22]','$tools[23]',
'$tools[24]','$tools[25]','$tools[26]','$tools[27]','$tools[28]','$tools[29]','$tools[30]',
'$tools[31]','$tools[32]','$tools[33]','$tools[34]','$tools[35]','$tools[36]','$tools[37]',
'$tools[38]','$tools[39]','$tools[40]','$tools[41]','$tools[42]','$tools[43]','$tools[44]',
'$tools[45]','$tools[46]','$tools[47]','$tools[48]','$tools[49]','$tools[50]','$tools[51]',
'$tools[52]','$tools[53]','$tools[54]','$tools[55]','$tools[56]','$tools[57]','$tools[58]',
'$tools[59]','$tools[60]','$tools[61]','$tools[62]','$tools[63]','$tools[64]','$tools[65]',
'$tools[66]','$tools[67]','$tools[68]','$tools[69]','$tools[70]','$tools[71]','$tools[72]',
'$tools[73]','$tools[74]','$tools[75]','$tools[76]','$tools[77]','$tools[78]','$tools[79]',
'$tools[80]','$tools[81]','$tools[82]','$tools[83]','$tools[84]','$tools[85]','$tools[86]'



)");



$stmt2 = $con->prepare("INSERT INTO Listloads (`Listname`,
`ps1`,`fs1`,`ts1`,`stas1`,`pr1`,`ar1`,`vr1`,`fr1`,`tr1`,`er1`,`star1`,
`ps2`,`fs2`,`ts2`,`stas2`,`pr2`,`ar2`,`vr2`,`fr2`,`tr2`,`er2`,`star2`,
`ps3`,`fs3`,`ts3`,`stas3`,`pr3`,`ar3`,`vr3`,`fr3`,`tr3`,`er3`,`star3`,
`ps4`,`fs4`,`ts4`,`stas4`,`pr4`,`ar4`,`vr4`,`fr4`,`tr4`,`er4`,`star4`,
`ps5`,`fs5`,`ts5`,`stas5`,`pr5`,`ar5`,`vr5`,`fr5`,`tr5`,`er5`,`star5`,
`ps6`,`fs6`,`ts6`,`stas6`,`pr6`,`ar6`,`vr6`,`fr6`,`tr6`,`er6`,`star6`,
`ps7`,`fs7`,`ts7`,`stas7`,`pr7`,`ar7`,`vr7`,`fr7`,`tr7`,`er7`,`star7`,
`ps8`,`fs8`,`ts8`,`stas8`,`pr8`,`ar8`,`vr8`,`fr8`,`tr8`,`er8`,`star8`,
`ps9`,`fs9`,`ts9`,`stas9`,`pr9`,`ar9`,`vr9`,`fr9`,`tr9`,`er9`,`star9`,
`ps10`,`fs10`,`ts10`,`stas10`,`pr10`,`ar10`,`vr10`,`fr10`,`tr10`,`er10`,`star10`,
`ps11`,`fs11`,`ts11`,`stas11`,`pr11`,`ar11`,`vr11`,`fr11`,`tr11`,`er11`,`star11`,
`ps12`,`fs12`,`ts12`,`stas12`,`pr12`,`ar12`,`vr12`,`fr12`,`tr12`,`er12`,`star12`



) 



VALUES (
'$nums[0]',
'$nums[1]','$nums[2]','$nums[3]','$nums[4]','$nums[5]','$nums[6]','$nums[7]','$nums[8]','$nums[9]','$nums[10]','$nums[11]',
'$nums[12]','$nums[13]','$nums[14]','$nums[15]','$nums[16]','$nums[17]','$nums[18]','$nums[19]','$nums[20]','$nums[21]','$nums[22]',
'$nums[23]','$nums[24]','$nums[25]','$nums[26]','$nums[27]','$nums[28]','$nums[29]','$nums[30]','$nums[31]','$nums[32]','$nums[33]',
'$nums[34]','$nums[35]','$nums[36]','$nums[37]','$nums[38]','$nums[39]','$nums[40]','$nums[41]','$nums[42]','$nums[43]','$nums[44]',
'$nums[45]','$nums[46]','$nums[47]','$nums[48]','$nums[49]','$nums[50]','$nums[51]','$nums[52]','$nums[53]','$nums[54]','$nums[55]',
'$nums[56]','$nums[57]','$nums[58]','$nums[59]','$nums[60]','$nums[61]','$nums[62]','$nums[63]','$nums[64]','$nums[65]','$nums[66]',
'$nums[67]','$nums[68]','$nums[69]','$nums[70]','$nums[71]','$nums[72]','$nums[73]','$nums[74]','$nums[75]','$nums[76]','$nums[77]',
'$nums[78]','$nums[79]','$nums[80]','$nums[81]','$nums[82]','$nums[83]','$nums[84]','$nums[85]','$nums[86]','$nums[87]','$nums[88]',
'$nums[89]','$nums[90]','$nums[91]','$nums[92]','$nums[93]','$nums[94]','$nums[95]','$nums[96]','$nums[97]','$nums[98]','$nums[99]',
'$nums[100]','$nums[101]','$nums[102]','$nums[103]','$nums[104]','$nums[105]','$nums[106]','$nums[107]','$nums[108]','$nums[109]','$nums[110]',
'$nums[111]','$nums[112]','$nums[113]','$nums[114]','$nums[115]','$nums[116]','$nums[117]','$nums[118]','$nums[119]','$nums[120]','$nums[121]',
'$nums[122]','$nums[123]','$nums[124]','$nums[125]','$nums[126]','$nums[127]','$nums[128]','$nums[129]','$nums[130]','$nums[131]','$nums[132]'




)");









 if($stmt->execute() && $stmt2->execute() )
{
  $res="Traklist Created Successfully!";
  echo json_encode($res);
}
else {
  $error="Traklist Loading Error...";
  echo json_encode($error);
}

  

 


 ?>	
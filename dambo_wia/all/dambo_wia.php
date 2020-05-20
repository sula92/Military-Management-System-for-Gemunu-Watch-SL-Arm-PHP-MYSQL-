<?php

include('session.php');

$reg=$_GET["reg"];


	//Create Variable & Assigning Values
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="rft_gw";
	
	// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_wia WHERE (Regiment_No LIKE '$reg%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		       $regno=$row['Regiment_No'];
				$fino=$row['File_No'];
				$recno=$row['Recruit_No'];
				$txtaid=$row['Army_ID_No'];
				$nm=$row['Name(Army_Form)'];
				$fnm=$row['Full_Name'];
				$rank=$row['Rank'];
				$rsen=$row['Rank_Seniority_Order'];
				$for=$row['Force_'];
				$cu=$row['Current/Last_Unit'];
				$pru=$row['Previous_Unit'];
				$csl=$row['Current/Last_Service_Location'];
				$app=$row['Current/Last_Appointment'];
				$doj=$row['Date_of_Joined'];
				$plrc=$row['Place_of_Recruit_Course'];
				$stdc=$row['Started_Date_of_the_Course'];
				$edc=$row['Ended_Date_of_the_Course'];
				
				$nic=$row['NIC_No'];
				$dob=$row['Date_of_Birth'];
				$pob=$row['Place_of_Birth'];
				$bcn=$row['Birth_Certificate_No'];
				$hei=$row['Height'];
				$wei=$row['Weight'];
				$che=$row['Chest'];
				$eyc=$row['Eye_Color'];
				$hac=$row['Hair_Color'];
				$cu=$row['Current/Last_Unit'];
				$skc=$row['Skin_Color'];
				$mark=$row['Birth/Special_Marks'];
				$blg=$row['Blood_Group'];
				$cis=$row['Civil_Status'];
				$rel=$row['Religion'];
				$eth=$row['Ethnicity'];
				$nosp=$row['Number_of_Spouses (Including_Current/Old)'];
				$noch=$row['Number_of_Children_Have_Got'];
				$nobs=$row['Number_of_Brothers_&_Sisters'];
				$lod=$row['List_of_Dependents'];
				$bnk=$row['Bank_Name'];
				$bra=$row['Branch'];
				$accno=$row['Account_Number'];
				$acn=$row['Account_Name'];
				
				$rfd=$row['Reason_for_Death'];
				$dode=$row['Date_of_Death'];
				$ardo=$row['Area_that_Death_Occured'];
				$prn=$row['Police_Report_Number'];
				$dchi=$row['Death_Certificate_Has_Issued'];
				$isda=$row['Death_Certificate_Issued_Date'];
				$dcno=$row['Death_Certificate_Number'];
				$coin=$row['Court_of_Inquiry_About_the_Death'];
				$adeci=$row['Army_Commanders_Decision_About_the_Death'];
				
				$abda=$row['Date_of_Medical_Board_Out'];
				$abti=$row['Service_Time_Till_to_Medical_Board_Out_Date'];
				
							
				$rfm=$row['Reason_for_WIA'];
				$doi=$row['Date_of_Incident'];
				$ario=$row['Area_that_Incident_Occurred'];
				$mnm=$row['Mission_Name'];
				$noin=$row['Nature_of_the_Injury'];
				$dci=$row['Permanent_or_Continue?'];
				$isd=$row['Date_of_Permanenr_Categorisation'];
				$cno=$row['Continue_From'];
				$cnto=$row['To_'];
				$coi=$row['Court_of_Inquiry'];
				$deci=$row['Army_commanders_descision'];
				
				$noki=$row['Next_of_Kin'];
				$hadd=$row['Home_Address'];
				$city=$row['City'];
				$dis=$row['District'];
				$pro=$row['Province'];
				$dsag=$row['DS/AGA_Division'];
				$elect=$row['Electorate_Division'];
				$gnd=$row['GN_Division'];
				$nac=$row['Nearest_Army_Camp'];
				$nps=$row['Nearest_Police_Station'];
				$mob=$row['Mobile'];
				$hpho=$row['Home_Phone'];
				$altc=$row['Alternative_Contact'];
				$emai=$row['Email'];
				$msal=$row['Do_You_Recieve_the_Soldiers_Monthly_Salary'];
				
				
				$hola=$row['Have_the_Soldier_Got_Any_Home/Land_From_SL_Army'];
				$hladd=$row['If So_Address_of_the_Home/Land'];
				$abf=$row['Has_the_Soldier_Joined_With_the_ABF_Fund'];
				$modi=$row['If_So_How_Much_Was_the_Monthly_Deduction'];
				$welf=$row['Have_the_Soldier_Joined_the_Welfare_Fund'];
				$dowp=$row['Has_He_Bought_Anything_Under_the_Down_Payment'];
				$deta=$row['If So_Please_Provide_the_Details'];
				$comp=$row['Has_the_Soldier_Got_Any_Compensation_From_SL_Army'];
				$compd=$row['If_So_The_Date_that_Soldier_Got_the_Compensation'];
				$amou=$row['If_So_The_Amount'];
				$ifa=$row['Have_the_Soldier_Got_Any_Loan_From_SL_Army'];
				$tta=$row['If_So_The_Total_Amount_of_Loan'];
				$ratp=$row['If_So_The_Remaining _Amount _to_be _Paid'];
		
		
		
		
	}
   
}
 else {
    echo "0 results";
}
$conn->close();


?>


<!DOCTYPE html>
<html lang="en">
<title>RFT Gemunu Watch</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="http://localhost/gw/form2.css">

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

  textarea{
			height:40px;
		}
		
		h2{
			color:blue;
		}
		
		img{
			width:250px;
			height:200px;
		}
		
     
			body{
	background: url('http://localhost/gw/gw6.jpg') no-repeat;
	background-size:cover;
	font-family:Arial;
	color:black;
        background-attachment: fixed;
		overflow-x: scroll:
		overflow-y: scroll:
    }
	

</style>

<script language="javascript">
			//Create Clear Function
			function cle(){
				//Reset the Controls
				frmStud.txtregno.value="";
				frmStud.txtregnum.value="";
				frmStud.txtrank.value="";
				frmStud.txtnm.value="";
				frmStud.txtfino.value="";
				frmStud.txtfnm.value="";
				frmStud.txtrecno.value="";
				frmStud.txtaid.value="";
				frmStud.for.value="";
				frmStud.nic.value="";
				frmStud.txtfor.value="";
				frmStud.cu.value="";
				frmStud.pru.value="";
				frmStud.doj.value="";
				frmStud.txtapp.value="";
				frmStud.txtrank.value="";
				frmStud.txtcsl.value="";
				frmStud.txtstdc.value="";
				frmStud.txtedc.value="";
				frmStud.txtplrc.value="";
				frmStud.filepic.value="";
				frmStud.bcn.value="";
				frmStud.filepic.value="";
				frmStud.txtaid.value="";
				
				frmStud.nic.value="";
				frmStud.dob.value="";
				frmStud.pob.value="";
				frmStud.txtbcn.value="";
				frmStud.hei.value="";
				frmStud.wei.value="";
				frmStud.che.value="";
				frmStud.txteyc.value="";
				frmStud.hac.value="";
				frmStud.skc.value="";
				frmStud.mark.value="";
				frmStud.blg.value="";
				frmStud.cis.value="";
				frmStud.rel.value="";
				frmStud.eth.value="";
				frmStud.nosp.value="";
				frmStud.noch.value="";
				frmStud.nobs.value="";
				frmStud.lod.value="";
				frmStud.bnk.value="";
				frmStud.txtbra.value="";
				frmStud.acn.value="";
				frmStud.nosp.value="";
				frmStud.txtbra.value="";
				frmStud.accno.value="";
				frmStud.txtacn.value="";
				frmStud.bnk.value="";
				
				frmStud.txtrfm.value="";
				frmStud.doi.value="";
				frmStud.txtario.value="";
				frmStud.txtmnm.value="";
				frmStud.txtdci.value="";
				frmStud.isd.value="";
				frmStud.cno.value="";
				frmStud.coi.value="";
				frmStud.deci.value="";
				frmStud.city.value="";
				frmStud.dis.value="";
				frmStud.dsag.value="";
				frmStud.elect.value="";
				frmStud.gnd.value="";
				frmStud.nac.value="";
				frmStud.nps.value="";
				frmStud.mob.value="";
				frmStud.hpp.value="";
				frmStud.altc.value="";
				frmStud.txtemai.value="";
				frmStud.txthladd.value="";
				
				frmStud.hola.value="";
				frmStud.pro.value="";
				frmStud.ema.value="";
				frmStud.txthadd.value="";
				frmStud.abf.value="";
				frmStud.mondi.value="";
				frmStud.welf.value="";
				frmStud.dowp.value="";
				frmStud.hadd.value=""
				frmStud.comp.value="";
				frmStud.compd.value="";
				frmStud.amou.value="";
				frmStud.lfa.value="";
				frmStud.tta.value="";
				frmStud.ratp.value="";
				frmStud.ema.value="";
	
				           
			}

				
</script>


<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="http://localhost/gw/office.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">OFFICE</a>
    <a href="http://localhost/gw/dambo_wia_spouse.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SPOUSES</a>
  
    <a href="http://localhost/gw/dambo_wia_children.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CHILDREN</a>
    <a href="http://localhost/gw/dambo_wia_brosis.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BROTHERS/SISTERS</a>
    
     <a href="http://localhost/gw/dambo_wia_parents.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PARENTS</a>
     
    <a href="http://localhost/gw/dambo_wia.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REFRESH PAGE</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
 
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="http://localhost/gw/office.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">OFFICE</a>
  <a href="http://localhost/gw/dambo_wia_spouse.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SPOUSES</a>
  <a href="http://localhost/gw/dambo_wia_children.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CHILDREN</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BROTHERS/SISTERS</a>
  <a href="http://localhost/gw/dambo_wia_parents.php class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PARENTS</a>
</div>
<div style="height:50px"></div>
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left w3-black" style="width:200px; margin-top:-0.4%" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <div style="height:55px; width:100%; border:2px solid; background-color:green"><center><span style="font-size:20px">QUICK DISPLAY</span></center></div>
  <a href="#" class="w3-bar-item w3-button w3-panel w3-border-top w3-border-bottom w3-border-green  fa fa-home">MILITARY INFORMATION SECTION</a>
  <a href="#per" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">PERSONAL INFORMATION</a>
  
  <a href="#dambo" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">DEATH AFTER MEDICAL BOARD OUT INFORMATION</a>
  
  <a href="#dambo_wia" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">WIA INFORMATION</a>
  <a href="#contact" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">CONTACT INFORMATION</a>
  <a href="#l&c" class="w3-bar-item w3-button w3-panel w3-border w3-border-red fa fa-home">LOANS,PROPERTY,ASSETS<br/> & COMPONSATION INFORMATION
</a>
 <a href="#button" class="w3-bar-item w3-button w3-panel w3-border-top w3-border-bottom w3-border-green">BUTTON SECTION</a> 
</div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0; width:30%; background-color:black" id="rightMenu">
  <button style="color:white" onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large"><center>Close &times;</center></button>
  
 <center> <a href="alldambo_wia.php" class="w3-bar-item w3-button" style="color:white"><center>ALL WIA DEATH AFTER MEDICAL BOARD OUT</center></a></center>
 
 <center> <a href="per.php" class="w3-bar-item w3-button" style="color:white"><center>ALL NEEDED PERSONAL DETAILS OF A SOLDIER</center></a></center>
 
 

  <center><a href="unit.php" class="w3-bar-item w3-button" style="color:white"><center>UNIT WISE</center></a>

 
 <center> <a href="year.php" class="w3-bar-item w3-button" style="color:white"><center>YEAR WISE</center></a></center>
 
  <center> <a href="province.php" class="w3-bar-item w3-button" style="color:white"><center>PROVINCIAL WISE</center></a></center>
       
    
   
  <center> <a href="married_unmarried.php" class="w3-bar-item w3-button" style="color:white"><center>MARRIED / UNMARRIED  WISE</center></a></center>
  
   <center> <a href="comp_notcomp.php" class="w3-bar-item w3-button" style="color:white"><center>COMPENSATED / NOT COMPENSATED WISE</center></a></center>
    
   
 <center> <a href="officers_otherrank.php" class="w3-bar-item w3-button" style="color:white"><center>OFFICERS / OTHER RANK WISE</center></a></center>
 
  <center><a href="rank.php" class="w3-bar-item w3-button" style="color:white"><center>RANK WISE</center></a>
</div>

<div class="w3-teal">
 <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <button class="w3-button w3-teal w3-xlarge w3-right" id="rep" onclick="openRightMenu()">&#9776;
  </button>
  
  <div style="margin-top:-1%">  
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <button class="w3-button w3-teal w3-xlarge w3-right" id="rep" onclick="openRightMenu()">REPORTS&#9776;
  </button>
    <center>
      <h1>WIA-DEATH AFTER MEDICAL BOARD OUT</h1></center>
  </div>
</div>


<div class="w3-container">
<div class="container" style="border:2px solid; opacity:0.85">

 <form class="" action="#" name="frmStud" method="post">

 
 
    <div class="row">
      
     <div class="col-25"><input type="submit" name="btnSearch" value="Search Record"/>                        </div>                                                    
        <div class="col-75"><input type="text" name="txtregno"  placeholder="රෙජිමේන්තු අංකය" value="" /></div>
        
        </div>
        
        
        
       
        
        <div class="row3">
          <div class="pic">
          
            <?php
	
	
	$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
			$sql = "SELECT * FROM photos where Regiment_Number ='$reg'";
 
$result = mysqli_query($con,$sql);

 if ($result->num_rows > 0) {

while ($documents = mysqli_fetch_array($result)) {
	
	
	
	
	$imagedisplay =$documents['Image']; 
	
	
	}
	
	
	
  }
  
  else{$imagedisplay="";}   
		   
         echo "<img src = 'http://localhost/gw/photos/$imagedisplay' style=\"float:right; width:210px;\" class=\"pic\"/>";
		 
	
  
?>
          
          
          
          <input type="file" name="filepic" /></div>
          
         
        
        
        
        </div>
        
       <fieldset id="mil"><legend style="color:red">MILITARY INFORMATION (හමුදා තොරතුරු)</legend>
        <div class="row"></div>
        <div class="row">
        
       	  <div class="ld">File No (ලිපිගොනු අංකය)</div>
                <div class="rd"><input type="text"  name="txtfino" maxlength="50" placeholder="ලිපිගොනු අංකය" value="<?php echo $fino; ?>" /></div>
          </div>
             <div class="row">
            	<div class="ld">Regiment No (රෙජිමේන්තු අංකය)</div>
                <div class="rd"><input type="text" name="txtregnum" maxlength="50" placeholder="රෙජිමේන්තු අංකය" value="<?php echo $regno; ?>" /></div>
            </div>
        	
            <div class="row">
            	<div class="ld">Rank (නිළය)</div>
                <div class="rd">
                <select name="txtrank">
        <option><?php echo $rank; ?></option>
       <option value="PTE(සාමාන්‍යය සෙබල)">PTE(සාමාන්‍යය සෙබල)</option>
      <option value="LCP(ලාන්ස් කෝප්‍රරල්)">LCP(ලාන්ස් කෝප්‍රරල්) </option>
      <option value="CPL(කෝප්‍රරල්)">CPL(කෝප්‍රරල්)</option>
      <option value="SGT(සැරයන්">SGT(සැරයන්)</option>
      <option value="STAFF SERGENT(මාණ්ඩලික සැරයන්)">STAFF SERGENT(මාණ්ඩලික සැරයන්)</option>
      <option value="WO2(වරලත් නිලධාරී 2 වන පන්තිය)">WO2(වරලත් නිලධාරී 2 වන පන්තිය)</option>
      <option value="WO1(වරලත් නිලධාරී 1 වන පන්තිය)">WO1(වරලත් නිලධාරී 1 වන පන්තිය)</option>
      <option value="SECOND LEFTINENT(දෙවන ලුතිනන්)">SECOND LEFTINENT(දෙවන ලුතිනන්)</option>
      <option value="LEFTINENT(ලුතිනන්)">LEFTINENT(ලුතිනන්)</option>
      <option value="CAPTAIN(කැප්ටන්">CAPTAIN(කැප්ටන්)</option>
      <option value="MAJOR(මේජර්)">MAJOR(මේජර්)</option>
      <option value="LT COLONAL(ලුතිනන් කර්නල්)">LT COLONAL(ලුතිනන් කර්නල්)</option>
      <option value="COLONAL(කර්නල්)">COLONAL(කර්නල්)</option>
      <option value="BRIGEDIER(බ්රිගේඩියර්	">BRIGEDIER(බ්රිගේඩියර්	)</option>
      <option value="MAJOR GENERAL(මේජර් ජෙනරල්)">MAJOR GENERAL(මේජර් ජෙනරල්)</option>
      <option value="LT GENERAL(ලුතිනන් ජෙනරල්)">LT GENERAL(ලුතිනන් ජෙනරල්)</option>
      <option value="GENERAL(ජෙනරල්">GENERAL(ජෙනරල්)</option>
      <option value="FIELD MARSHAL(ෆීල්ඩ් මාර්ෂල්)">FIELD MARSHAL(ෆීල්ඩ් මාර්ෂල්)</option>
        </select>

                </div>
			</div>
            
             <div class="row">
            	<div class="ld">Rank_Seniority_Order<br>(නිළ ජ්යෙෂ්ඨත්ව අනුක්රමය)</div>
                <div class="rd">
                <select name="rsen">
        <option><?php echo $rsen; ?></option>
       <option value="18">18-PTE(සාමාන්‍යය සෙබල)</option>
      <option value="17">17-LCP(ලාන්ස් කෝප්‍රරල්) </option>
      <option value="16">16-CPL(කෝප්‍රරල්)</option>
      <option value="15">15-SGT(සැරයන්)</option>
      <option value="14">14-STAFF SERGENT(මාණ්ඩලික සැරයන්)</option>
      <option value="13">13-WO2(වරලත් නිලධාරී 2 වන පන්තිය)</option>
      <option value="12">12-WO1(වරලත් නිලධාරී 1 වන පන්තිය)</option>
      <option value="11">11-SECOND LEFTINENT(දෙවන ලුතිනන්)</option>
      <option value="10">10-LEFTINENT(ලුතිනන්)</option>
      <option value="09">09-CAPTAIN(කැප්ටන්)</option>
      <option value="08">08-MAJOR(මේජර්)</option>
      <option value="07">07-LT COLONAL(ලුතිනන් කර්නල්)</option>
      <option value="06">06-COLONAL(කර්නල්)</option>
      <option value="05">05-BRIGEDIER(බ්රිගේඩියර්	)</option>
      <option value="04">04-MAJOR GENERAL(මේජර් ජෙනරල්)</option>
      <option value="03">03-LT GENERAL(ලුතිනන් ජෙනරල්)</option>
      <option value="02">02-GENERAL(ජෙනරල්)</option>
      <option value="01">01-FIELD MARSHAL(ෆීල්ඩ් මාර්ෂල්)</option>
        </select>

                </div>
			</div>
            
            <div class="row">
            	<div class="ld">Name in Army Form<br>(හමුදා ආකෘතියේ නම)</div>
                <div class="rd"><input type="text" name="txtnm" id="textb" maxlength="50" placeholder="හමුදා ආකෘතියේ නම" value="<?php echo $nm; ?>" /></div>
            </div>
            <div class="row">
            	<div class="ld">Full Name (සම්පූර්ණ නම)</div>
                <div class="rd"><input type="text" name="txtfnm" maxlength="50" placeholder="සම්පූර්ණ නම" value="<?php echo $fnm; ?>" /></div>
            </div>
            <div class="row">
            	<div class="ld">Recruit No (ආදුනික අංකය)</div>
                <div class="rd"><input type="text" name="txtrecno" placeholder="ආදුනික අංකය" value="<?php echo $recno; ?>" /></div>
            </div>
            <div class="row">
            	<div class="ld">ARMY ID No (යු.හ හැදුනුම්පත් අංකය)</div>
                <div class="rd"><input type="text" name="txtaid"  placeholder="යු.හ හැදුනුම්පත් අංකය" value="<?php echo $nic; ?>" /></div>
            </div>
            <div class="row">
            	<div class="ld">Force (බලකාය)</div>
                <div class="rd">
                 <select id="for" name="txtfor">
                 <option value=""><?php echo $for; ?></option>
                 <option value="REGULAR(නිත්‍ය)">REGULAR(නිත්‍ය)</option>
                 <option value="VOLUNTEER(ස්වේච්ඡා">VOLUNTEER(ස්වේච්ඡා)</option>
     
  </select>
                
                </div>
            </div>
            <div class="row">
            	<div class="ld">Current/Last Unit<br>(වත්මන් / අවසන් ඒකකය)</div>
                <div class="rd">
                <select name="txtcu">
                     <option value=""><?php echo $cu; ?></option>
                     <option value="1GW">1GW</option>
                     <option value="2GW">2GW</option>
                     <option value="3GW">3GW</option>
                     <option value="4GW">4GW</option>
                     <option value="5GW">5GW</option>
                     <option value="6GW">6GW</option>
                     <option value="7GW">7GW</option>
                     <option value="8GW">8GW</option>
                     <option value="9GW">9GW</option>
                     <option value="10GW">10GW</option>
                     <option value="11W">11W</option>
                     <option value="12GW">12GW</option>
                     <option value="13GW">13GW</option>
                     <option value="14GW">14GW</option>
                     <option value="15GW">15GW</option>
                     <option value="16GW">16GW</option>
                     <option value="17GW">17GW</option>
                     <option value="18GW">18GW</option>
                     <option value="19GW">19GW</option>
                     <option value="20GW">20GW</option>
                     <option value="21GW">21GW</option>
                     <option value="22GW">22GW</option>
                     <option value="23GW">23GW</option>
                     <option value="24GW">24GW</option>
                     <option value="25GW">25GW</option>
                     <option value="26GW">26GW</option>
                   </select>
                
                </div>
            </div>
            
            <div style="height:15px"></div>
            
            <div class="row">
            	<div class="ld">Previous Unit (පෙර ඒකකය)</div>
                <div class="rd">
                <select name="txtpru">
                     <option value=""><?php echo $pru; ?></option>
                     <option value="1GW">1GW</option>
                     <option value="2GW">2GW</option>
                     <option value="3GW">3GW</option>
                     <option value="4GW">4GW</option>
                     <option value="5GW">5GW</option>
                     <option value="6GW">6GW</option>
                     <option value="7GW">7GW</option>
                     <option value="8GW">8GW</option>
                     <option value="9GW">9GW</option>
                     <option value="10GW">10GW</option>
                     <option value="11W">11W</option>
                     <option value="12GW">12GW</option>
                     <option value="13GW">13GW</option>
                     <option value="14GW">14GW</option>
                     <option value="15GW">15GW</option>
                     <option value="16GW">16GW</option>
                     <option value="17GW">17GW</option>
                     <option value="18GW">18GW</option>
                     <option value="19GW">19GW</option>
                     <option value="20GW">20GW</option>
                     <option value="21GW">21GW</option>
                     <option value="22GW">22GW</option>
                     <option value="23GW">23GW</option>
                     <option value="24GW">24GW</option>
                     <option value="25GW">25GW</option>
                     <option value="26GW">26GW</option>
                   </select>
                
                </div>
            </div>
            
            <div style="height:15px"></div>
            
            <div class="row">
            	<div class="ld">Current/Last Service Location<br>(වත්මන් / අවසන් සේවා ස්ථානය)</div>
                <div class="rd"><input type="text" name="txtcsl"  placeholder="වත්මන් / අවසන් සේවා ස්ථානය" value="<?php echo $csl; ?>" /></div>
            </div>
            
            <div style="height:15px"></div>
            
             <div class="row">
            	<div class="ld">Current/Last Appointment<br>(වත්මන් / අවසන් පත්වීම)</div>
                <div class="rd"><input type="text" name="txtapp"  placeholder="වත්මන් / අවසන් පත්වීම" value="<?php echo $app; ?>" /></div>
            </div>
            
            <div style="height:15px"></div>
            <div class="row">
            	<div class="ld">Date of Joined (බඳවාගත් දිනය)</div>
                <div class="rd"><input type="date" name="txtdoj"  placeholder="yyyy-mm-dd" value="<?php echo $doj; ?>" /></div>
            </div>
            <div style="height:15px"></div>
            <div class="row">
            	<div class="ld">Place of Recruit Course<br>(ආදුනික පාඨමාලා ස්ථානය)</div>
                <div class="rd"><input type="text" name="txtplrc"  placeholder="ආදුනික පාඨමාලා ස්ථානය" value="<?php echo $plrc; ?>" /></div>
            </div>
            <div style="height:15px"></div>
            <div class="row">
            	<div class="ld">Started Date of the Course<br>(පාඨමාලාවේ ආරම්භක දිනය)</div>
                <div class="rd"><input type="date" name="txtstdc"  placeholder="yyyy-mm-dd" value="<?php echo $stdc; ?>" /></div>
            </div>
            <div style="height:15px"></div>
            <div class="row" id="per">
            	<div class="ld">Ended Date of the Course<br>(පාඨමාලාවේ අවසන් දිනය)</div>
                <div class="rd"><input type="date" name="txtedc"  placeholder="yyyy-mm-dd" value="<?php echo $edc; ?>" /></div>
            </div>
  </fieldset>   
            <div class="row"></div>
    <fieldset id="per"><legend style="color:red">PERSONAL DETAILS (පුද්ගලික විස්තර)</legend>  
           <div class="row">
            <div class="ld">
              <label for="lname" style="color:blue">NIC Number<br>(ජාතික හැදුනුම්පත් අංකය)</label>
            </div>
           <div class="rd">
            <input type="text" id="nic" name="nic" value="<?php echo $nic; ?>" placeholder="ජාතික හැදුනුම්පත් අංකය"  style="width:100%" >
           </div>
         </div> 
         
         <div class="row">
      <div class="ld">
        <label for="fname" style="color:blue">Date of Birth (උපන්දිනය)</label>
      </div>
      <div class="rd">
        <input type="date" id="dob" name="dob" placeholder="උපන්දිනය.."  style="width:100%" value="<?php echo $dob; ?>" />
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Place of Birth (උපන් ස්ථානය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="pob" name="pob" placeholder="උපන් ස්ථානය.."  style="width:100% " value="<?php echo $pob; ?>" />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Birth Certificate No<br>(උප්පැන්න සහතිකයේ අංකය)</label>
      </div>
      <div class="col-75">
       <input type="text" id="bcn" name="txtbcn" placeholder="උප්පැන්න සහතිකයේ අංකය.."  style="width:100%" value="<?php echo $bcn; ?>" />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Height (උස)</label>
      </div>
      <div class="col-75">
        <input type="text" id="hei" name="hei" placeholder="උස.."  style="width:100%" value="<?php echo $hei; ?>">

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Weight (බර)</label>
      </div>
      <div class="col-75">
        <input type="text" id="wei" name="wei" placeholder="බර.."  style="width:100%" value="<?php echo $wei; ?>" />
      </div>
    </div>
   <div class="row">
      <div class="col-25">
       <label for="fname" style="color:blue">Chest (පපුව)</label><br>
      </div>
      <div class="col-75">
        <input type="text" id="bcn" name="che" placeholder="පපුව.." style="width:100%" value="<?php echo $che; ?>" />
      </div>
    </div>
  <div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Eye color (ඇසේ වර්ණය)</label>
      </div>
      <div class="col-75">
        <select id="eyc" name="txteyc" value="<?php echo $eyc; ?>" />
      <option value="<?php echo $eyc; ?>" /><?php echo $eyc; ?></option>
     <option value="Black(කළු)">Black(කළු)</option>
      <option value="Brown(දුඔුරු)">Brown(දුඔුරු)</option>
      <option value="Blue(නිල්)">Blue(නිල්)</option>
      <option value="Green(කොළ)">Green(කොළ)</option>
      <option value="White(සුදු)">White(සුදු)</option>
   </select>
      </div>
    </div>
  <div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Hair color (හිසකෙස් වර්ණය)</label>
      </div>
      <div class="col-75" >
        <select id="eyc" name="hac" value="<?php echo $hac; ?>" />
      <option value="<?php echo $hac; ?>" /><?php echo $hac; ?></option> 
     <option value="Black(කළු)">Black(කළු)</option>
     <option value="White(සුදු)">White(සුදු)</option>
       <option value="Brown(දුඔුරු)">Brown(දුඔුරු)</option>
      <option value="Red(රතු)">Red(රතු)</option>
      <option value="Yellow(කහ)">Yellow(කහ)</option>
   </select>
      </div>
    </div>
  <div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Skin Color (ශරීර වර්ණය)</label>
      </div>
      <div class="col-75">
        <select id="skc" name="skc">
      <option value="<?php echo $skc; ?>" /><?php echo $skc; ?></option>    
      <option value="Black(කළු)">Black(කළු)</option>
     <option value="White(සුදු)">White(සුදු)</option>
      <option value="Thalelu(ත‌ළෙළු">Thalelu(ත‌ළෙළු)</option>
      <option value="Brown(දුඔුරු)">Brown(දුඔුරු)</option>
      <option value="Rose(රෝස)">Rose(රෝස)</option>
      <option value="Body has been Burned(ශරීරය පිලිස්සී තිබේ)">Body has been Burned(ශරීරය පිලිස්සී තිබේ)</option>
   </select>
      </div>
    </div>
  <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Birth / Special Marks<br>(උපන් / විශේෂ ලකුණු)</label>
      </div>
      <div class="col-75">
        <textarea name="mark" rows="8" cols="38" style="height:100px" placeholder="උපන් / විශේෂ ලකුණු)"><?php echo "$mark" ?></textarea>
      </div>
    </div>
    
  <div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Blood Group (ලේ වර්ගය)</label>
      </div>
      <div class="col-75">
       <select id="blg" name="blg">
      <option><?php echo $blg; ?></option> 
      <option value="A Positive">A Positive</option>
      <option value="A Negative">A Negative</option>
      <option value="B Positive">B Positive</option>
      <option value="B Negative">B Negative</option>
      <option value="O Positive">O Positive</option>
      <option value="O Negative">O Negative</option>
      <option value="AB Positive">AB Positive</option>
      <option value="AB Negative">AB Negative</option>
    </select>
      </div>
    </div>
   



   <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Civil Status (සිවිල් තත්වය)</label>
      </div>
      <div class="col-75">
      <select id="cis" name="cis">
      <option><?php echo $cis; ?></option>
     <option value="Married(විවාහක)">Married(විවාහක)</option>
      <option value="UnMarried(අවිවාහක)">UnMarried(අවිවාහක)</option>
      <option value="Living Together(එකට ජීවත් වෙනවා)">Living Together(එකට ජීවත් වෙනවා)</</option>
      <option value="Spouse has Dead(කලත්රයා මිය ගොස් ඇත)">Spouse has Dead(කලත්රයා මිය ගොස් ඇත)</option>
      <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
    </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Religion (ආගම)</label>
      </div>
      <div class="col-75">
         <select id="rel" name="rel">
         <option><?php echo $rel; ?></option>
     <option value="Buddhist(බෞද්ධ)">Buddhist(බෞද්ධ)</option>
      <option value="Catholic(කතෝලික)">Catholic(කතෝලික)</option>
      <option value="Roman Cathloic(රෝමානු කතෝලික)">Roman Cathloic(රෝමානු කතෝලික)</option>
      <option value="Hindu(හින්දු)">Hindu(හින්දු)</option>
      <option value="Islamic(ඉස්ලාම්)">Islamic(ඉස්ලාම්)</option>
    </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Ethnicity (ජනවාර්ගිකත්වය)</label>
      </div>
      <div class="col-75">
         <select id="eth" name="eth">
         <option><?php echo $eth; ?></option>
     <option value="Sinhala(සිංහල)">Sinhala(සිංහල)</option>
      <option value="Tamil(දෙමළ)">Tamil(දෙමළ)</option>
      <option value="Muslim(මුස්ලිම්)">Muslim(මුස්ලිම්)</option>
      <option value="Burger(බර්ගර්)">Burger(බර්ගර්)</option>
    </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Number Of Spouses<br>(කලත්රයින් ගණන)</label>
      </div>
      <div class="col-75">
        <input type="text" id="acn" name="nosp" placeholder="කලත්රයින් ගණන.." style="width:100%" value="<?php echo $nosp; ?>" />
      </div>
    </div><br>
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Number of Children Have Got<br>(දරුවන්ගේ සංඛ්යාව)</label>
      </div>
      <div class="col-75">
        <input type="text" id="acn" name="noch" placeholder="දරුවන්ගේ සංඛ්යාව.." style="width:100%"value="<?php echo $noch; ?>" />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Number of Brother & Sisters<br>(සහෝදර සහෝදරියන් ගණන)</label>
      </div>
      <div class="col-75">
        <input type="text" id="acn" name="nobs" placeholder="සහෝදර සහෝදරියන් ගණන.." style="width:100%" value="<?php echo $nobs; ?>" />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cnum" style="color:blue">List of Dependents<br>(යැපෙන්නන් ලැයිස්තුව)</label>
      </div>
      <div class="col-75">
        <textarea name="lod" rows="8" cols="38"  placeholder="යැපෙන්නන් ලැයිස්තුව" style="height:120px"><?php echo $lod; ?></textarea>
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Bank Name (බැංකුවේ නම)</label>
      </div>
      <div class="col-75">
        <select name="bnk">
        <option><?php echo $bnk; ?></option>
        <option value="BOC">BOC</option>
          <option value="Sampath">Sampath</option>
          <option value="HNB">HNB</option>
          <option value="Nation Trust">Nation Trust</option>
          <option value="HSBC">HSBC</option>
          <option value="Commercial">Commercial</option>
          <option value="Peoples Bank">Peoples Bank</option>
          <option value="Standard Chartered">Standard Chartered</option>
          <option value="NDB">NDB</option>
          <option value="NSB">NSB</option>
          <option value="DFCC">DFCC</option>
          <option value="Cargills">Cargills</option>
          <option value="Sampath">Sampath</option>
          <option value="HNB">HNB</option>
          <option value="Seylan">Seylan</option>
        </select>

      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Branch (ශාඛාව)</label>
      </div>
      <div class="col-75">
        <input type="text" id="acn" name="txtbra" placeholder="ශාඛාව.." style="width:100%" value="<?php echo $bra; ?>" />
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Account Number (ගිණුම් අංකය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="accno" name="accno" placeholder="ගිණුම් අංකය.." style="width:100%" value="<?php echo $accno; ?>" />
      </div>
    </div>
    
   
  <div class="row">
      <div class="col-25" id="dambo">
        <label for="fname" style="color:blue">Account Name (ගිණුමේ නම)</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtacn" name="txtacn" placeholder="ගිණුමේ නම.." style="width:100%" value="<?php echo $acn; ?>" />
      </div>
    </div>
    

  </fieldset>
  
  <fieldset id="kia"><legend style="color:red">DEATH INFORMATION</legend>

<div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Reason For DEATH (හේතුව)</label>
      </div>
      <div class="col-75">
        <input type="text" id="rfd" name="txtrfd" value="<?php echo $rfd; ?>">
     
      </div>
    </div>
    
     
    
   
    
   
    
<div class="row">
      <div class="col-25">
        <label for="lname" size="40" style="color:blue">Date of Death (සිදුවීම් දිනය)</label>
      </div>
      <div class="col-75">
        <input type="date" name="dode" max="2050-01-02"  min="1948-01-02" value="<?php echo $dode; ?>" />
      </div>
    </div>
 <div class="row">
      <div class="col-25">
         <label for="fname" style="color:blue">Area that Death Occurred<br>(සිද්ධිය සිදුවූ ප්රදේශය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtardo" name="txtardo" value="<?php echo $ardo; ?>" placeholder="සිද්ධිය සිදුවූ ප්රදේශය">
     </div>
    </div>
 <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Police Report Number<br>(පොලිස් වාර්තා අංකය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="prn" name="txtprn" placeholder="පොලිස් වාර්තා අංකය..." style="width:100%" value="<?php echo $prn; ?>" />
      </div>
    </div>




 <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Death Certificate has Issued<br>(මරණ සහතිකයක් නිකුත් කර තිබේද?)</label>
      </div>
      <div class="col-75">
        <select id="dchi" name="txtdchi">
     <option value="<?php echo $dchi; ?>"><?php echo $dchi; ?></option>   
     <option value="Yes(ඔව්)">Yes(ඔව්)</option>
     <option value="No(නොමැත)">No(නොමැත)</option>
     <option value="Unknow(නොදන්නා)">Unknow(නොදන්නා)</option>
    </select>
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="lname" size="40" style="color:blue">Issued Date (නිකුත් කළ දිනය)</label><br>
      </div>
      <div class="col-75">
        <input type="date" name="isda" "2050-01-02"  min="1948-01-02" value="<?php echo $isda; ?>" />
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Death Certificate No<br>(මරණ සහතික අංකය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="dcno" name="dcno" placeholder="මරණ සහතික අංකය.." style="width:100%" value="<?php echo $dcno; ?>" />
      </div>
    </div>

 <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Court of Inquiry (පරීක්ෂණ උසාවිය)</label>
      </div>
      <div class="col-75">
        <select id="dci" name="coin">
     <option value="<?php echo $coin; ?>"><?php echo $coin; ?></option>   
     <option value="Approved(අනුමත කර ඇත)">Approved(අනුමත කර ඇත)</option>
     <option value="Not Approved(අනුමත කර නැත)">Not Approved(අනුමත කර නැත)</option>
     <option value="Not Yet Inquir(තවමත් විමර්ශනය නැත)">Not Yet Inquir(තවමත් විමර්ශනය නැත)</option>
     <option value="Waiting for Approval(අනුමත කිරීම බලා සිටී)">Waiting for Approval(අනුමත කිරීම බලා සිටී)</option>
     <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
    </select>
      </div>
    </div>
    
 <div class="row">
      <div class="col-25" id="dambo">
        <label for="lname" style="color:blue">Army Commanders Decision<br>(යුද හමුදාපතිගේ තීරණය)</label>
      </div>
      <div class="col-75">
        <select id="adci" name="adeci">
     <option value="<?php echo $adeci; ?>"><?php echo $adeci; ?></option>     
     <option value="Approved(අනුමත කර ඇත)">Approved(අනුමත කර ඇත)</option>
     <option value="Not Approved(අනුමත කර නැත)">Not Approved(අනුමත කර නැත)</option>
     <option value="Not Yet Inquir(තවමත් විමර්ශනය නැත)">Not Yet Inquir(තවමත් විමර්ශනය නැත)</option>
     <option value="Waiting for Approval(අනුමත කිරීම බලා සිටී)">Waiting for Approval(අනුමත කිරීම බලා සිටී)</option>
     <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
    </select>
      </div>
    </div>

 
</fieldset>
  
  <fieldset><legend style="color:red">MEDICAL BOARD OUT INFORMATION</legend>
  
  <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Date of Medical Board Out <br>(වෛද්‍ය මණ්ඩලයෙන් පිටවු දිනය)</label>
      </div>
      <div class="col-75">
        <input type="date" id="abda" name="abda"  style="width:100%" value="<?php echo $abda; ?>" />
      </div>
    </div>
      <div style="height:40px"></div>
    
     <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Service Time Till to Medical<br>Board Out Date<br> (වෛද්‍ය මණ්ඩලයෙන් පිටවු දිනය<br>දක්වා සේවා කාලය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="abti" name="abti"  style="width:100%" value="<?php echo $abti; ?>" />
      </div>
    </div>
    <div style="height:40px"></div>
  
  </fieldset>
  
<div class="row" id="dambo_wia">
      <div class="col-25">
        <label for="subject"><br/></label>
      </div>
      <div class="col-75">
       <br/>
      </div>
  </div>   
<fieldset id="dambo_wia"><legend style="color:red">PREVIOUS CATEGORY INFORMATION (WIA)</legend>



<div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Reason for Injury/Sick<br>(තුවාල /අසනීප සඳහා හේතුව)</label>
      </div>
      <div class="col-75">
         <input type="text" id="rfm" name="txtrfm" placeholder="තුවාල /අසනීප සඳහා හේතුව" value="<?php echo $rfm; ?>">
   
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="lname" size="40" style="color:blue">Date of Incident (සිදුවීම් දිනය)</label>
      </div>
      <div class="col-75">
        <input type="date" name="doi" max="2050-01-02"  min="1948-01-02" value="<?php echo $doi; ?>" />
      </div>
    </div>
 <div class="row">
      <div class="col-25">
         <label for="fname" style="color:blue">Area that Incident Occurred<br>(සිද්ධිය සිදුවූ ප්රදේශය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtario" name="txtario" value="<?php echo $ario; ?>" placeholder="සිද්ධිය සිදුවූ ප්රදේශය">
     </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Mission Name (මෙහෙවර නම)</label>
      </div>
      <div class="col-75">
        <input type="text" id="mnm" name="txtmnm" placeholder="මෙහෙවර නම.." style="width:100%" value="<?php echo $mnm; ?>" />
      </div>
    </div>
    

    
     <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Nature of the Injury(තුවාල ස්වභාවය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="noin" name="noin" placeholder="තුවාල ස්වභාවය" style="width:100%" value="<?php echo $mnm; ?>" />
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Percentage(ප්‍රතිශතය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="perc" name="perc" placeholder="ප්‍රතිශතය" style="width:100%" value="<?php echo $perc; ?>" />
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Classification of Disability<br>(ආබාධිතභාවය වර්ගීකරණය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="cldi" name="cldi" placeholder="ආබාධිතභාවය වර්ගීකරණය" style="width:100%" value="<?php echo $cldi; ?>" />
      </div>
    </div>




 <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Permanent or Continue?<br>(ස්ථීර හෝ ඉදිරියට?)</label>
      </div>
      <div class="col-75">
        <select id="dci" name="txtdci">
     <option value="<?php echo $dci; ?>"><?php echo $dci; ?></option>   
     <option value="Permannt(ස්ථාවරයි)">Permanent(ස්ථීර)</option>
     <option value="Continue(ඉදිරියට)">Continue(ඉදිරියට)</option>
    </select>
      </div>
    </div>
    <fieldset><legend style="color:red">If Permanent(ස්ථිර නම්)</legend>
<div class="row">
      <div class="col-25">
        <label for="lname" size="40" style="color:blue">Date of Permanenr Categorisation<br>(ස්ථීර ලෙස වර්ගීකරණය කළ දිනය)</label><br>
      </div>
      <div class="col-75">
        <input type="date" name="isd" "2050-01-02"  min="1948-01-02" value="<?php echo $isd; ?>" />
      </div>
    </div>
    </fieldset><div style="height:10px"></div>
    <fieldset><legend style="color:red">If Continue(ඉදිරියට නම්)</legend>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Continue From(දින සිට)</label>
      </div>
      <div class="col-75">
        <input type="date" id="cno" name="cno"  style="width:100%" value="<?php echo $cno; ?>" />
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">To(දක්වා)</label>
      </div>
      <div class="col-75">
        <input type="date" id="cnto" name="cnto"  style="width:100%" value="<?php echo $cnto; ?>" />
      </div>
    </div>
    </fieldset>
    <div style="height:10px"></div>

 <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Court of Inquiry (පරීක්ෂණ උසාවිය)</label>
      </div>
      <div class="col-75">
        <select id="dci" name="coi">
     <option value="<?php echo $coi; ?>"><?php echo $coi; ?></option>   
     <option value="Approved(අනුමත කර ඇත)">Approved(අනුමත කර ඇත)</option>
     <option value="Not Approved(අනුමත කර නැත)">Not Approved(අනුමත කර නැත)</option>
     <option value="Not Yet Inquir(තවමත් විමර්ශනය නැත)">Not Yet Inquir(තවමත් විමර්ශනය නැත)</option>
     <option value="Waiting for Approval(අනුමත කිරීම බලා සිටී)">Waiting for Approval(අනුමත කිරීම බලා සිටී)</option>
     <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
    </select>
      </div>
    </div>
 <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Army Commanders Decision<br>(යුද හමුදාපතිගේ තීරණය)</label>
      </div>
      <div class="col-75">
        <select id="dci" name="deci">
     <option value="<?php echo $deci; ?>"><?php echo $deci; ?></option>     
     <option value="Approved(අනුමත කර ඇත)">Approved(අනුමත කර ඇත)</option>
     <option value="Not Approved(අනුමත කර නැත)">Not Approved(අනුමත කර නැත)</option>
     <option value="Not Yet Inquir(තවමත් විමර්ශනය නැත)">Not Yet Inquir(තවමත් විමර්ශනය නැත)</option>
     <option value="Waiting for Approval(අනුමත කිරීම බලා සිටී)">Waiting for Approval(අනුමත කිරීම බලා සිටී)</option>
     <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
    </select>
      </div>
    </div>

 
</fieldset>

<div class="row" id="contact">
      <div class="col-25">
        <label for="subject"><br/></label>
      </div>
      <div class="col-75">
       <br/>
      </div>
  </div> 
<fieldset id="contact"><legend style="Color:red">CONTACT INFORMATION (සබඳතා තොරතුරු)</legend>

<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Next of Kin(ළඟම ඥාතියා)</label>
      </div>
      <div class="col-75">
        <input type="text" id="noki" name="noki" placeholder="ළඟම ඥාතියා.." style="width:100%" value="<?php echo $noki; ?>" />
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="subject" style="color:blue">Home Address (නිවසේ ලිපිනය)</label>
      </div>
      <div class="col-75">
       <textarea name="txthadd"  rows="8" cols="38" style="height:120px" placeholder="නිවසේ ලිපිනය"><?php echo $hadd; ?></textarea>
      </div>
    </div>
    
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">City (නගරය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="city" name="city" placeholder="නගරය.." style="width:100%" value="<?php echo $city; ?>" />
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">District (දිස්ත්රික්කය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="dis" name="dis" placeholder="දිස්ත්රික්කය.." style="width:100%" value="<?php echo $dis; ?>" />
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Province (පළාත)</label>
      </div>
      <div class="col-75">
        <select id="pro" name="pro">
     <option value="<?php echo $pro; ?>"><?php echo $pro; ?></option>   
     <option value="Western( බස්නාහිර)">Western( බස්නාහිර)</option>
     <option value="Eastern(නැගෙනහිර)">Eastern(නැගෙනහිර)</option>
     <option value="Southern(දකුණු පළාත)">Southern(දකුණු පළාත)</option>
     <option value="Central(මධ්‍යම පළාත)<">Central(මධ්‍යම පළාත)</option>
     <option value="Northern(උතුරු පළාත) ">Northern(උතුරු පළාත) </option>
     <option value="North Western(වයඹ)">North Western(වයඹ)</option>
     <option value="North Central(උතුරුමැද)">North Central(උතුරුමැද)</option>
     <option value="Uva(ඌව)">Uva(ඌව)</option>
     <option value="Sabaragamuwa(සබරගමුව)">Sabaragamuwa(සබරගමුව)</option>
     <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
    </select>
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">DS/AGA Division<br>(ප්රා.ලේ කොට්ඨාශය) </label>
      </div>
      <div class="col-75">
        <input type="text" id="dsag" name="dsag" placeholder="ප්රා.ලේ කොට්ඨාශය.." style="width:100%" value="<?php echo $dsag; ?>" />
      </div>
    </div>
    <div style="height:10px"></div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Eloctorate Division<br>(මැතිවරණ කොට්ඨාශය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="elect" name="elect" placeholder="මැතිවරණ කොට්ඨාශය.." style="width:100%" value="<?php echo $elect; ?>" />
      </div>
    </div>
    <div style="height:10px"></div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">GN Division<br>(ග්රාම නිලධාරි කොට්ඨාශය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="gnd" name="gnd" placeholder="ග්රාම නිලධාරි කොට්ඨාශය.." style="width:100%" value="<?php echo $gnd; ?>" />
      </div>
    </div>
    <div style="height:10px"></div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Nearest Army Camp<br>(ආසන්නතම හමුදා කඳවුර)</label>
      </div>
      <div class="col-75">
        <input type="text" id="nac" name="nac" placeholder="ආසන්නතම හමුදා කඳවුර.." style="width:100%" value="<?php echo $nac; ?>" />
      </div>
    </div>
    <div style="height:10px"></div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Nearest Police Station<br>(ආසන්නතම පොලිස් ස්ථානය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="nps" name="nps" placeholder="ආසන්නතම පොලිස් ස්ථානය.." style="width:100%" value="<?php echo $nps; ?>" />
      </div>
    </div>
    <div style="height:10px"></div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Mobile (ජංගම)</label>
      </div>
      <div class="col-75">
        <input type="text" id="mob" name="mob" placeholder="ජංගම.." style="width:100%" value="<?php echo $mob; ?>" />
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Home Phone (නිවසේ දුරකථනය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="hpp" name="hpp" placeholder="නිවසේ දුරකථනය.." style="width:100%" value="<?php echo $hpho; ?>" />
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Alternative Contact<br>(විකල්ප සබඳතා)</label>
      </div>
      <div class="col-75">
        <input type="text" id="altc" name="altc" placeholder="විකල්ප සබඳතා.." style="width:100%" value="<?php echo $altc; ?>" />
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Email (විද්යුත් තැපෑල)</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtemai" name="txtemai" placeholder="විද්යුත් තැපෑල.." style="width:100%" value="<?php echo $emai; ?>" />
      </div>
    </div>
 

</fieldset>

<div class="row" id="l&c">
      <div class="col-25">
        <label for="subject"><br/></label>
      </div>
      <div class="col-75">
       <br/>
      </div>
  </div>  
<fieldset id="l&c"><legend style="color:red">LOANS,PROPERTY,ASSETS & COMPONSATION INFORMATION</legend>

<fieldset>

<div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Do You Recieve the<br> Soldiers Monthly Salary<br>(සොල්දාදුවාගේ මාසික වැටුප<br> ලබාගන්නේද?)</label>
      </div>
      <div class="col-75">
        <select id="hola" name="msal">
      <option value=""><?php echo $msal; ?></option>  
     <option value="Yes(ඔව්)">Yes(ඔව්)</option>
      <option value="No(නැහැ)">No(නැහැ)</option>
      <option value="Not Entitle for Sallery(මාසික වැටුප සඳහා හිමිකම් නැත)</option>">Not Entitle for Sallery(මාසික වැටුප සඳහා හිමිකම් නැත)</option>
      <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
   </select>
      </div>
  </div>
  
  
  
  <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">By Whom?(කවුරුන් විසින්ද?)</label>
      </div>
      <div class="col-75">
        <input type="text" id="whom" name="whom" placeholder="කවුරුන් විසින්ද?." style="width:100%" value="<?php echo $whom; ?>" />
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">From Where?(කොහෙන් ද?)</label>
      </div>
      <div class="col-75">
        <input type="text" id="fwhe" name="fwhe" placeholder="කොහෙන් ද?." style="width:100%" value="<?php echo $fwhe; ?>" />
      </div>
    </div>
    </fieldset>


<div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Have the Soldier Got<br> Any Home/Land From SL Army<br>(යුද හමුදාව වෙතින්<br> ඕනෑම නිවසක් / ඉඩමක් ලබා ඇත්ද?)</label>
      </div>
      <div class="col-75">
        <select id="hola" name="hola">
      <option value="<?php echo $hola; ?>"><?php echo $hola; ?></option>  
     <option value="Yes,Home With a Land(ඔව්, ඉඩමක් සමඟ නිවසක්)">Yes,Home With a Land(ඔව්, ඉඩමක් සමඟ නිවසක්)</option>
      <option value="Yes, But Only a Land(ඔව්, නමුත් ඉඩමක් පමණයි)">Yes, But Only a Land(ඔව්, නමුත් ඉඩමක් පමණයි)</option>
      <option value="Not at All(කොහෙත්ම නැහැ)">Not at All(කොහෙත්ම නැහැ)</option>
      <option value="Not Entitle for Home/Land(නිවාස / ඉඩම් සඳහා හිමිකම් නැත)</op">Not Entitle for Home/Land(නිවාස / ඉඩම් සඳහා හිමිකම් නැත)</option>
      <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
   </select>
      </div>
  </div>
    
   

<div class="row">
      <div class="col-25">
        <label for="subject" style="color:blue">If So,Address<br> of the Home/Land<br>(එසේ නම්,නිවසේ/ඉඩම් ලිපිනය)</label>
      </div>
      <div class="col-75">
       <textarea id="hladd" name="txthladd" rows="8" cols="38" height:8 placeholder="එසේ නම්,නිවසේ/ඉඩම් ලිපිනය"style="height:120px"><?php echo $hladd; ?></textarea>
      </div>
  </div>
  

  
  <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Has the Soldier Joined<br> With the ABF Fund?<br>(ABF අරමුදල සමඟ සම්බන්ධ වී සිටීද?)</label>
      </div>
      <div class="col-75">
        <input type="text" id="ema" name="abf" placeholder="ABF අරමුදල සමඟ සම්බන්ධ වී සිටීද?.." style="width:100%" value="<?php echo $abf; ?>" />
      </div>
    </div>
    
    
    
    <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">If So,How Much Was<br> the Monthly Deduction?<br>(එසේ නම්, මාසිකව අඩු<br> කිරීම කොපමණ වේද?)</label>
      </div>
      <div class="col-75">
        <input type="text" id="ema" name="mondi" placeholder="එසේ නම්, මාසිකව අඩු කිරීම කොපමණ වේද?.." style="width:100%" value="<?php echo $modi; ?>" />
      </div>
    </div>
    
   
<div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Have the Soldier Joinedy<br>the Welfare Fund<br>(සුභසාධක අරමුදල සමඟ බැඳී තිබේද?) </label>
      </div>
      <div class="col-75">
        <select id="welf" name="welf">
        <option value="<?php echo $welf; ?>"><?php echo $welf; ?></option>
      <option value="Yes">Yes(ඔව්)</option>
      <option value="No">No(නොමැත)</option>
      <option value="Unknown">Unknown(නොදන්නා)</option>
   </select>
      </div>
  </div>
  

  
  <div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Has He Bought Anything<br> Under the Down-Payment?<br>(ගෙවීම් යටතේ ඕනෑම දෙයක්<br>ඔහු මිලට ගෙන තිබේද?)</label>
      </div>
      <div class="col-75">
        <select id="dowp" name="dowp">
         <option value="<?php echo $dowp; ?>"><?php echo $dowp; ?></option>
      <option value="Yes">Yes,Has Alredy been Paid in Fully(ඔව්, දැනටමත් සම්පූර්ණයෙන්ම ගෙවා තිබේ)</option>
      <option value="No">Yes, Has to be Paid(ඔව්, ගෙවිය යුතු වේ)</option>
      <option value="Yes">Not at All(කොහෙත්ම නැහැ)</option>
      <option value="Unknown">Unknown(නොදන්නා)</option>
   </select>
      </div>
  </div>
  
  
  
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">If So,Please<br>Provide the Details<br>(එසේ නම්, කරුණාකර විස්තර<br> ලබා දෙන්න)</label>
      </div>
      <div class="col-75">
         <textarea id="hadd" name="hadd" rows="8" cols="38" style="height:120px" placeholder="එසේ නම්, කරුණාකර විස්තර ලබා දෙන්න"><?php echo $deta; ?></textarea>
      </div>
    </div>  
    
     <div class="row">
      <div class="col-25">
         <label for="lname" style="color:blue">Has the Soldier<br> Got Any Compensation<br> From SL Army<br>(ශ්‍රී ලංකා යුද්ධ හමුදාව සොල්දාදුවාට<br> කිසියම් වන්දි මුදලක් දී තිබේද?)</label>
      </div>
      <div class="col-75">
        <select id="comp" name="comp">
        <option value="<?php echo $comp; ?>"><?php echo $comp; ?></option>
      <option value="Yes(ඔව්)">Yes(ඔව්)</option>
      <option value="Yes, But Not in Fully(ඔව්, නමුත් සම්පූර්ණ වශයෙන්ම නොවේ)">Yes, But Not in Fully(ඔව්, නමුත් සම්පූර්ණ වශයෙන්ම නොවේ)</option>
      <option value="Not at All(කොහෙත්ම නැහැ)">Not at All(කොහෙත්ම නැහැ)</option>
      <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
   </select>
      </div>
  </div>
  
 
    
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">If So,The Date that<br> Soldier got the Compensation<br>(එසේ නම්,වන්දි ලබා ගත් දිනය)</label>
      </div>
      <div class="col-75">
        <input type="date" id="compd" name="compd" placeholder="එසේ නම්,වන්දි ලබා ගත් දිනය.." style="width:100%" value="<?php echo $compd; ?>" />
      </div>
  </div>
    
    
    
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">If So,The Compensation Amount<br>(එසේ නම්, වන්දි මුදල)</label>
      </div>
      <div class="col-75">
        <input type="text" id="amou" name="amou" placeholder="එසේ නම්, වන්දි මුදල.." style="width:100%" value="<?php echo $amou; ?>" />
      </div>
  </div>
    
    
    
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Have the Soldier Got Any<br> Loan From SL Army<br>(ශ්‍රී ලංකා යුද්ධ හමුදාවෙන් ණයක්<br> ලබාගෙන තිබේද?)</label>
      </div>
      <div class="col-75">
       <select id="lfa" name="lfa">
       <option value="<?php echo $ifa; ?>"><?php echo $ifa; ?></option
     ><option value="Yes & Already Settled(ඔව්,දැනටමත් සම්පූර්ණයෙන්ම ගෙවා ඇත)</o">Yes & Already Settled(ඔව්,දැනටමත් සම්පූර්ණයෙන්ම ගෙවා ඇත)</option>
      <option value="Yes, But Not Yet Settled(ඔව්, නමුත් තවමත් සම්පූර්ණයෙන්ම ගෙවා නැත)">Yes, But Not Yet Settled(ඔව්, නමුත් තවමත් සම්පූර්ණයෙන්ම ගෙවා නැත)</option>
      <option value="Not at All(කොහෙත්ම නැහැ)<">Not at All(කොහෙත්ම නැහැ)</option>
      <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
   </select>
      </div>
  </div>
    
    
    
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">If So,The Total Amount of Loan<br>(එසේ නම්,මුළු ණය මුදල)</label>
      </div>
      <div class="col-75">
        <input type="text" id="tta" name="tta" placeholder="එසේ නම්,මුළු ණය මුදල.." style="width:100%" value="<?php echo $tta; ?>" />
      </div>
  </div>
    
    <div style="height:10px"></div> 
    
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">If So,The Remaining<br> Amount to be Paid<br>(එසේ නම්, ඉතිරි මුදල ගෙවිය යුතු)</label>
      </div>
      <div class="col-75" id="button">
        <input type="text" id="ratp" name="ratp" placeholder="එසේ නම්, ඉතිරි මුදල ගෙවිය යුතු.." style="width:100%" value="<?php echo $ratp; ?>" />
      </div>
  </div>
  
  
  </fieldset>

           <div class="row">
            	
               
              
  
            </div>       
  
          

</form>
<div style="height:20px"></div>


</html>


<script>


function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}




function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
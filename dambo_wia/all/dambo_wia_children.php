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
$sql = "SELECT * FROM dambo_wia_children WHERE (NIC_No LIKE '$reg%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		        $regno=$row['Regiment_No'];
				$fino=$row['File_No'];
				$txtaid=$row['Army_ID_No'];
				$nm=$row['Name(Army_Form)'];
				$fnm=$row['Full_Name'];
				$rank=$row['Rank'];
				$rsen=$row['Rank_Seniority_Order'];
				$cu=$row['Current/Last_Unit'];
				$doin=$row['Date_of_Incident'];
				$nic=$row['NIC_No'];
				$relp=$row['Relationship_to_the_Soldier'];
				$sfnm=$row['Childs_Full_Name'];
				$nmin=$row['Name_With_Initials'];
				$dob=$row['Date_of_Birth'];
				$pob=$row['Place_of_Birth'];
				$bcn=$row['Birth_Certificate_No'];
				$mcno=$row['Mothers_Name'];
				$doma=$row['Mothers_ID_Number'];
				$wmar=$row['Which_Child_of_the_Soldier'];
				$mast=$row['Childs_Marriage_Status'];
				$lsta=$row['Life_Status'];
				$dode=$row['Date_of_Death'];
				$dcpr=$row['Death_Certificate_Provided'];
				$dcno=$row['Death_Certificate_Number'];
				$prsc=$row['Primary_School'];
				$hisc=$row['High_School'];
				$uni=$row['University'];
				$educ=$row['Educational_Qualifications'];
				$schol=$row['Scholarships_from_Army'];
				$rel=$row['Religion'];
				$eth=$row['Ethnicity'];
				$noch=$row['Number_of_Children_Have_Got'];
				$nobs=$row['Number_of_Brothers_&_Sisters'];
				$lod=$row['List_of_Dependents'];
				$bnk=$row['Bank_Name'];
				$bra=$row['Branch'];
				$accno=$row['Account_Number'];
				$acn=$row['Account_Name'];
				
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
				$whom=$row['By_Whom'];
				$fwhe=$row['From_Where'];
				
				
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
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost/gw/form2.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-black w3-content " style="max-width:1600px">


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-border-top  w3-border-bottom">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/gw/index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="http://localhost/gw/office.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">OFFICE</a>
    <a href="http://localhost/gw/dambo_wia_spouse.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SPOUSES</a>
  
    <a href="http://localhost/gw/dambo_wia_children.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CHILDREN</a>
    <a href="http://localhost/gw/dambo_wia_brosis.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BROTHERS/SISTERS</a>
    
   <a href="http://localhost/gw/dambo_wia_parents.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PARENTS</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REFRESH PAGE</a>
    
  </div>
 
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-panel w3-border-top w3-border-bottom w3-black w3-hide w3-hide-large w3-hide-medium w3-top " style="margin-top:46px">
  <a href="http://localhost/gw/office.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">OFFICE</a>
  <a href="http://localhost/gw/dambo_wia_spouse.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SPOUSES</a>
  <a href="http://localhost/gw/dambo_wia_children.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CHILDREN</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BROTHERS/SISTERS</a>
  <a href="http://localhost/gw/dambo_wia_parents.php class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PARENTS</a>
</div>


<div style="height:50px"></div>




<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-judambo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
     <?php
	
	
	$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
			$sql = "SELECT * FROM photos_brosis where (NIC_Number = '$reg')";
 
$result = mysqli_query($con,$sql);

 if ($result->num_rows > 0) {

while ($documents = mysqli_fetch_array($result)) {
	
	
	
	
	$imagedisplay =$documents['Image']; 
	
	
	}
	
	
	
  }
  
  else{$imagedisplay="";}   
		   
         echo "<img src = 'http://localhost/gw/brosis_photos/$imagedisplay' style=\" width:54%;\" class=\"w3-round\"/>";
		 
	
  
?><br><br>
    <h4><b><?php echo $sfnm; ?></b></h4>
   
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>MILITARY INFORMATION</a> 
    <a href="#per" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>PERSONAL INFORMATION</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    
    <a href="#l&c" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money fa-fw w3-margin-right"></i>LOANS,PROPERTY,ASSETS<br/> & COMPONSATION INFORMATION</a>
    
  </div>
 
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">


<div class="w3-sidebar w3-bar-block w3-dark-grey w3-card w3-animate-right" style="display:none;right:0; width:30%; " id="rightMenu">
  <button style="color:white" onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large"><center>Close &times;</center></button>
  
 <center> <a href="allother_death.php" class="w3-bar-item w3-button" style="color:white"><center>ALL dambo_wia</center></a></center>
 
 
  <center> <a href="per.php" class="w3-bar-item w3-button" style="color:white"><center>ALL NEEDED PERSONAL DETAILS OF A SOLDIER</center></a></center>



  <center><a href="unit.php" class="w3-bar-item w3-button" style="color:white"><center>UNIT WISE</center></a>

 
 <center> <a href="year.php" class="w3-bar-item w3-button" style="color:white"><center>YEAR WISE</center></a></center>
 
  <center> <a href="province.php" class="w3-bar-item w3-button" style="color:white"><center>PROVINCIAL WISE</center></a></center>
       
    
   
  <center> <a href="married_unmarried.php" class="w3-bar-item w3-button" style="color:white"><center>MARRIED / UNMARRIED  WISE</center></a></center>
  
   <center> <a href="comp_notcomp.php" class="w3-bar-item w3-button" style="color:white"><center>COMPENSATED / NOT COMPENSATED WISE</center></a></center>
    
   
 <center> <a href="officers_otherrank.php" class="w3-bar-item w3-button" style="color:white"><center>OFFICERS / OTHER RANK WISE</center></a></center>
 
  <center><a href="rank.php" class="w3-bar-item w3-button" style="color:white"><center>RANK WISE</center></a>
</div>




  <!-- Header -->
  <header id="portfolio">
   
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>WIA-DEATH AFTER MEDICAL BOARD OUT CHILDREN : <?php echo $sfnm; ?></b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white" onclick="openRightMenu()"><i class="fa fa-diamond w3-margin-right "></i>REPORTS</button>
      <a href="http://localhost/gw/dambo_wia/all/per.php"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>BACK</button></a>
      <a  href="http://localhost/gw/dambo_wia.php"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>BACK TO WIA-DEATH AFTER MEDICAL BOARD OUT</button></a>
    </div>
    </div>
  </header>
  
 

<div class="w3-container w3-black">
 
</div>

<form class="w3-container">
        <fieldset id="mil"><legend style="color:red">SOLDIER'S INFORMATION (සොල්දාදුවගේ තොරතුරු)</legend>
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
            	<div class="ld">ARMY ID No (යු.හ හැදුනුම්පත් අංකය)</div>
                <div class="rd"><input type="text" name="txtaid"  placeholder="යු.හ හැදුනුම්පත් අංකය" value="<?php echo $nic; ?>" /></div>
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
            	<div class="ld">Date of Incident</div>
                <div class="rd"><input type="date" name="doin"  placeholder="" value="<?php echo $doin; ?>" /></div>
            </div>
            
           
  </fieldset>   
            <div class="row"></div>
    <fieldset id="per">
           <legend style="color:red">CHILD'S PERSONAL DETAILS (පුද්ගලික විස්තර)</legend>  
           <div class="row">
            <div class="ld">
              <label for="lname" style="color:blue">NIC Number<br>(ජාතික හැදුනුම්පත් අංකය)</label>
            </div>
           <div class="rd">
            <input type="text" id="nic" name="nic" value="<?php echo $nic; ?>" placeholder="ජාතික හැදුනුම්පත් අංකය"   >
           </div>
         </div>
         
         <div class="row">
            	<div class="ld"><label style="color:blue">Relationship to the Soldier
           	    (සොල්දාදුවාට ඇති ඥාතිත්වය) </label></div>
                <div class="rd">
         <select id="relp" name="relp">
          <option value=""><?php echo $relp; ?></option>         
          <option value="Son(පුතා)">Son(පුතා)</option>
          <option value="Daughter(දියණිය)">Daughter(දියණිය)</option>
     
        </select>
                
                </div>
      </div> 
         
         <div class="row">
            <div class="ld">
              <label for="lname" style="color:blue">Full Name(සම්පූර්ණ නම)</label>
            </div>
           <div class="rd">
            <input type="text" id="sfnm" name="sfnm" value="<?php echo $sfnm; ?>" placeholder="සම්පූර්ණ නම"  style="width:100%" >
           </div>
         </div> 
         
          <div class="row">
            <div class="ld">
              <label for="lname" style="color:blue">Name With Initials<br>(මුල් අකුරු සමඟ නම)</label>
            </div>
           <div class="rd">
            <input type="text" id="nmin" name="nmin" value="<?php echo $nmin; ?>" placeholder="මුල් අකුරු සමඟ නම"   >
           </div>
         </div> 
         
         <div class="row">
      <div class="ld">
        <label for="fname" style="color:blue">Date of Birth (උපන්දිනය)</label>
      </div>
      <div class="rd">
        <input type="date" id="dob" name="dob" placeholder="උපන්දිනය.."  value="<?php echo $dob; ?>" />
      </div>
    </div>

<div class="row">
      <div class="ld">
        <label for="lname" style="color:blue">Place of Birth (උපන් ස්ථානය)</label>
      </div>
      <div class="rd">
        <input type="text" id="pob" name="pob" placeholder="උපන් ස්ථානය.."    value="<?php echo $pob; ?>" />
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
        <label for="lname" style="color:blue">Mothers Name<br>(මවගේ නම)</label>
      </div>
      <div class="col-75">
        <input type="text" id="mcno" name="mcno" placeholder="මවගේ නම"  style="width:100%" value="<?php echo $mcno; ?>">

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname" style="color:blue">Mothers ID Number(මවගේ ජාතික හැදුනුම්පත් අංකය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="doma" name="doma"   style="width:100%" placeholder="මවගේ ජාතික හැදුනුම්පත් අංකය" value="<?php echo $doma; ?>" />
      </div>
    </div>
    
      <div class="row">
            	<div class="ld"><label style="color:blue">Which Child of the Soldier<br>
           	    (සොල්දාදුවාගේ කුමන දරැවාද?)</label></div>
                <div class="rd">
         <select id="wmar" name="wmar">
          <option value="1st"><?php echo $wmar; ?></option>         
          <option value="1st">1st</option>
          <option value="2nd">2nd</option>
          <option value="3rd">3rd</option>
          <option value="4th">4th</option>
          <option value="5th">5th</option>
          <option value="6th">6th</option>
          <option value="Unknown">Unknown</option>
     
        </select>
                
                </div>
      </div>
    
   <div class="row">
      <div class="col-25">
       <label for="fname" style="color:blue">Childs Marriage Status(දරැවා විවාහ තත්ත්වය)</label><br>
      </div>
      <div class="col-75">
         <select id="mast" name="mast">
      <option><?php echo $mast; ?></option>
     <option value="Still a Valid Marriage(තවමත් වලංගු විවාහයක්)">Still a Valid Marriage(තවමත් වලංගු විවාහයක්)</option>
      <option value="Divorced(දික්කසාදයි)">Divorced(දික්කසාදයි)</option>
      <option value="Divorced and Married to Other Person(දික්කසාද වී වෙනත් පුද්ගලයෙකුට විවාහ වී ඇත))">Divorced and Married to Other Person(දික්කසාද වී වෙනත් පුද්ගලයෙකුට විවාහ වී ඇත)</option>
      <option value="Divorced(දික්කසාදයි)">Not Married Legally(නීත්යානුකූලව විවාහ වී නැත)</option>
      <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
    </select>
      </div>
    </div>
    
    <div class="row">
            	<div class="ld"><label>Life Status(ජීවන තත්වය)</label></div>
                <div class="rd">
                
                <select id="lsta" name="lsta">
                <option value=""><?php echo $lsta; ?></option>
                 <option value="Alive(ජීවමාන ය)">Alive(ජීවමාන ය)</option>
                 <option value="Dead(මිය ගොස් ඇත)">Dead(මිය ගොස් ඇත)</option>
                 <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
                </select>
                
                </div>
      </div>
     <fieldset>
       <legend style="color:red">IF CHILD IS DEAD(දරැවා ජීවමාන නොවේ නම්)</legend>       
            <div class="row">
           	  <div class="ld">
           	    <label>Date of Death(මරණයේ දිනය)</label></div>
                <div class="rd"><input type="date" name="dode"  value="<?php echo $dode; ?>" />
            </div>
            
           </div>
            <div class="row">
            	<div class="ld"><label>Death Certificate Provided?<br>(මරණ සහතිකය ලබා දී තිබේද?)</label></div>
                <div class="rd">
                
                 <select id="dcpr" name="dcpr">
          <option value=""><?php echo $dcpr; ?></option>      
          <option value="Alive(ජීවමාන ය)">Alive(ජීවමාන ය)</option>
          <option value="Provided to the Army(හමුදාවට ලබා දී ඇත)">Provided to the Army(හමුදාවට ලබා දී ඇත)</option>
          <option value="Not Yet Provided to the Army(හමුදාව වෙත ලබා දී නොමැත)">Not Yet Provided to the Army(හමුදාව වෙත ලබා දී නොමැත)</option>
          <option value="Issued by the Hospital, But Not Yet Provided to the Army(රෝහල විසින් නිකුත් කරන ලද නමුත් යුද හමුදාව වෙත ලබා දී නොමැත)">Issued by the Hospital, But Not Yet Provided to the Army(රෝහල විසින් නිකුත් කරන ලද නමුත් යුද හමුදාව වෙත ලබා දී නොමැත)</option>
          <option value="Not Yet Issued by the Hospital(රෝහලෙන් නිකුත් කර නැත)">Not Yet Issued by the Hospital(රෝහලෙන් නිකුත් කර නැත)</option>
          <option value="Death Certificate has Been Lost(මරණ සහතිකය නැති වී ඇත)">Death Certificate has Been Lost(මරණ සහතිකය නැති වී ඇත)</option>
          <option value="Unknown(නොදන්නා)">Unknown(නොදන්නා)</option>
        </select>
                
                </div>
            </div>
            <div style="height:15px"></div>
            <div class="row">
            	<div class="ld"><label>Death Certificate Number<br>(If Provided)_මරණ සහතික අංකය<br> (සපයන ලද්දේ නම්)</label></div>
                <div class="rd"><input type="text" name="dcno"  placeholder="මරණ සහතික අංකය" value="<?php echo $dcno; ?>" /></div>
            </div>
            
            
      </fieldset>
      
      <fieldset><legend style="color:red">EDUCATION</legend>
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Primary School (ප්රාථමික පාසල)</label>
      </div>
      <div class="col-75">
        <input type="text" id="prsc" name="prsc" placeholder="ප්රා‍ථමික පාසල.." style="width:100%" value="<?php echo $prsc; ?>" />
      </div>
    </div>
    
 <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">High School (උසස් පාසැල)</label>
      </div>
      <div class="col-75">
        <input type="text" id="hisc" name="city" placeholder="උසස් පාසැල.." style="width:100%" value="<?php echo $hisc; ?>" />
      </div>
    </div>
    
 <div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">University (විශ්ව විද්‍යාලය)</label>
      </div>
      <div class="col-75">
        <input type="text" id="uni" name="uni" placeholder="විශ්ව විද්‍යාලය.." style="width:100%" value="<?php echo $uni; ?>" />
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="subject" style="color:blue">Educational Qualifications (අධ්‍යාපන සුදුසුකම්)</label>
      </div>
      <div class="col-75">
       <textarea name="educ"  rows="8" cols="38" style="height:120px" placeholder="අධ්‍යාපන සුදුසුකම්"><?php echo $educ; ?></textarea>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="subject" style="color:blue">Scholarships From Army (යුද හමුදාවෙන් ලද ශිෂ්යත්ව)</label>
      </div>
      <div class="col-75">
       <textarea name="schol"  rows="8" cols="38" style="height:120px" placeholder="යුද හමුදාවෙන් ලද ශිෂ්යත්ව)"><?php echo $schol; ?></textarea>
      </div>
    </div>

</fieldset>
            
            
  
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
    <div style="height:80px"></div>
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
      <div class="col-25">
        <label for="fname" style="color:blue">Account Name (ගිණුමේ නම)</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtacn" name="txtacn" placeholder="ගිණුමේ නම.." style="width:100%" value="<?php echo $acn; ?>" />
      </div>
    </div>
    

  </fieldset>
<div class="row" id="kia">
      <div class="col-25">
        <label for="subject"><br/></label>
      </div>
      <div class="col-75">
       <br/>
      </div>
  </div>   


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
        <label for="subject" style="color:blue">Home Address (නිවසේ ලිපිනය)</label>
      </div>
      <div class="col-75">
       <textarea name="txthadd"  rows="8" cols="38" style="height:120px" placeholder="නිවසේ ලිපිනය"><?php echo $hadd; ?></textarea>
      </div>
    </div>
    <div style="height:80px"></div>
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
   
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">Nearest Army Camp<br>(ආසන්නතම හමුදා කඳවුර)</label>
      </div>
      <div class="col-75">
        <input type="text" id="nac" name="nac" placeholder="ආසන්නතම හමුදා කඳවුර.." style="width:100%" value="<?php echo $nac; ?>" />
      </div>
    </div>
   
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
      <option value="Yes, But Only a Land(ඔව්, නමුත් ඉඩමක් පමණයි)">Yes, But Only a Land(ඔව්, නමුත් ඉඩමක් පමණයි)</option>
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
        <input type="date" id="compd" name="compd" placeholder="එසේ නම්,වන්දි ලබා ගත් දිනය.."  value="<?php echo $compd; ?>" />
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
    
     
    
<div class="row">
      <div class="col-25">
        <label for="fname" style="color:blue">If So,The Remaining<br> Amount to be Paid<br>(එසේ නම්, ඉතිරි මුදල ගෙවිය යුතු)</label>
      </div>
      <div class="col-75" id="button">
        <input type="text" id="ratp" name="ratp" placeholder="එසේ නම්, ඉතිරි මුදල ගෙවිය යුතු.." style="width:100%" value="<?php echo $ratp; ?>" />
      </div>
  </div>
  
  
  </fieldset>

          

  
  </form>

 
  
  <div class="w3-black w3-center w3-padding-24"></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

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

</body>
</html>

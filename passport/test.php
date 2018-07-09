

<!-- First Page -->
<!-- ================================================== -->
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
		//stage 3
     $_SESSION['Payment']=$_REQUEST['Payment'];
     $_SESSION['AmountType']=$_REQUEST['AmountType'];
     $_SESSION['Amount']=$_REQUEST['Amount'];
     $_SESSION['DateOfPayment']=$_REQUEST['DateOfPayment'];
     $_SESSION['ReceiptNo']=$_REQUEST['ReceiptNo'];
     $_SESSION['Bank']=$_REQUEST['Bank'];
     $_SESSION['Branch']=$_REQUEST['Branch'];


echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";
     echo "<table border='1'>";
     foreach ($_SESSION as $name => $value)
          {
               echo "<tr>";
              echo "<td>".$name."</td><td>".$value."</td>";
              echo "</tr>";
          }
     echo "</echo>";

  //    echo $_SESSION['Payment'];
  //    echo "<br>";
  //    echo $_SESSION['AmountType'];
  //    echo "<br>";
  //    echo $_SESSION['Amount'];
  //    echo "<br>";
  //    echo $_SESSION['DateOfPayment'];
  //    echo "<br>";
  //    echo $_SESSION['ReceiptNo'];
  //    echo "<br>";
  //    echo $_SESSION['Bank'];
  //    echo "<br>";
  //    echo $_SESSION['Branch'];
  //    echo "<br>";


  //    echo "Page 2 value";
		// echo "<br>";
  //     echo $_SESSION['OfficeNo'];
  //    echo "<br>";
  //    echo $_SESSION['PassportNo'];
  //    echo "<br>";
  //    echo $_SESSION['ResidenceNo'];
  //    echo "<br>";
  //    echo $_SESSION['PlaceOfIssue'];
  //    echo "<br>";
  //    echo $_SESSION['MobileNo'];
  //    echo "<br>";
  //    echo $_SESSION['DateOfIssue'];
  //    echo "<br>";
  //    echo $_SESSION['RI_Reason'];
  //    echo "<br>";
  //    echo $_SESSION['Name00'];
  //    echo "<br>";
  //    echo $_SESSION['Country00'];
  //    echo "<br>";
  //    echo $_SESSION['Village_House1'];
  //    echo "<br>";
  //    echo $_SESSION['PoliceStation00'];
  //    echo "<br>";
  //    echo $_SESSION['PostOffice00'];
  //    echo "<br>";
  //    echo $_SESSION['Contact_No'];
  //    echo "<br>";
  //    echo $_SESSION['Email00'];
  //    echo "<br>";
  //    echo $_SESSION['Relationship00'];
  //    echo "<br>";

     

  //    echo 'DOB:'.$_SESSION['Date1'];
  //    echo "<br>";
  //    echo $_SESSION['country'];
  //    echo "<br>";
  //    echo $_SESSION['gender'];
  //    echo "<br>";
  //    echo $_SESSION['ApplicationType'];
  //    echo "<br>";
  //    echo $_SESSION['PassportType'];
  //     /*if($_REQUEST[PassportType]='Select')
  //              {
  //                   echo "abc";
  //              }
  //              else
  //              {
  //                   echo $_SESSION['PassportType'];
  //              }*/
  //    echo "<br>";
  //    echo $_SESSION['deliveryType'];
  //    echo "<br>";
  //    echo $_SESSION['birthId'];
  //    echo "<br>";
  //    echo $_SESSION['NationalIdNo'];
  //    echo "<br>";
  //    echo $_SESSION['NameApplicant'];
  //    echo "<br>";
  //    echo $_SESSION['TaxIdNo'];
  //    echo "<br>";
  //    echo $_SESSION['FirstPartGN'];
  //    echo "<br>";
  //    echo $_SESSION['Foot'];
  //    echo "<br>";
  //    echo $_SESSION['inch'];
  //    echo "<br>";
  //    echo $_SESSION['SecondPartSN'];
  //    echo "<br>";
  //    echo $_SESSION['Religion'];
  //    echo "<br>";
  //    echo $_SESSION['guardian'];
  //    echo "<br>";
  //    echo $_SESSION['EmailAddress'];
  //    echo "<br>";
  //    echo $_SESSION['FatherName'];
  //    echo "<br>";
  //    echo $_SESSION['FNationality'];
  //    echo "<br>";
  //    echo $_SESSION['CitizenNationality'];
  //    echo "<br>";
  //    echo $_SESSION['FProfession'];
  //    echo "<br>";
  //    echo $_SESSION['CitizenStatus'];
  //    echo "<br>";
  //    echo $_SESSION['MotherName'];
  //    echo "<br>";
  //    echo $_SESSION['Dcitizenship'];
  //    echo "<br>";
  //    echo $_SESSION['MNationality'];
  //    echo "<br>";
  //    echo $_SESSION['MProfession'];
  //    echo "<br>";
  //    echo $_SESSION['VillageHouse'];
  //    echo "<br>";
  //    echo $_SESSION['SpouseName'];
  //    echo "<br>";
  //    echo $_SESSION['RoadBlockSector'];
  //    echo "<br>";
  //    echo $_SESSION['SpouseNationality'];
  //    echo "<br>";
  //    echo $_SESSION['District'];
  //    echo "<br>";
  //    echo $_SESSION['SpouseProfession'];
  //    echo "<br>";
  //    echo $_SESSION['PoliceStation'];
  //    echo "<br>";
  //    echo $_SESSION['MaritalStatus'];
  //    echo "<br>";
  //    echo $_SESSION['PostOffice1'];
  //    echo "<br>";
  //    echo $_SESSION['ApplicantProfession'];
  //    echo "<br>";
  //    echo $_SESSION['BCountry'];
  //    echo "<br>";
  //    echo $_SESSION['Birth_District'];
  //    echo "<br>";
  //    echo $_SESSION['Village_house'];
  //    echo "<br>";
  //    echo $_SESSION['Road_Block'];
  //    echo "<br>";
  //    echo $_SESSION['District12'];

  //    echo "<br>";
  //    echo $_SESSION['Police_Station'];
  //    echo "<br>";
  //    echo $_SESSION['Post_Office1'];

}

?>
<?php 

     /*echo 'DOB:'.$_SESSION['Date1'];
     echo "<br>";
     echo $_SESSION['country'];
     echo "<br>";
     echo $_SESSION['gender'];
     echo "<br>";
     echo $_SESSION['ApplicationType'];
     echo "<br>";
     echo $_SESSION['PassportType'];
      /*if($_REQUEST[PassportType]='Select')
               {
                    echo "abc";
               }
               else
               {
                    echo $_SESSION['PassportType'];
               }*/
    /* echo "<br>";
     echo $_SESSION['deliveryType'];
     echo "<br>";
     echo $_SESSION['birthId'];
     echo "<br>";
     echo $_SESSION['NationalIdNo'];
     echo "<br>";
     echo $_SESSION['NameApplicant'];
     echo "<br>";
     echo $_SESSION['TaxIdNo'];
     echo "<br>";
     echo $_SESSION['FirstPartGN'];
     echo "<br>";
     echo $_SESSION['Foot'];
     echo "<br>";
     echo $_SESSION['inch'];
     echo "<br>";
     echo $_SESSION['SecondPartSN'];
     echo "<br>";
     echo $_SESSION['Religion'];
     echo "<br>";
     echo $_SESSION['guardian'];
     echo "<br>";
     echo $_SESSION['EmailAddress'];
     echo "<br>";
     echo $_SESSION['FatherName'];
     echo "<br>";
     echo $_SESSION['FNationality'];
     echo "<br>";
     echo $_SESSION['CitizenNationality'];
     echo "<br>";
     echo $_SESSION['FProfession'];
     echo "<br>";
     echo $_SESSION['CitizenStatus'];
     echo "<br>";
     echo $_SESSION['MotherName'];
     echo "<br>";
     echo $_SESSION['Dcitizenship'];
     echo "<br>";
     echo $_SESSION['MNationality'];
     echo "<br>";
     echo $_SESSION['MProfession'];
     echo "<br>";
     echo $_SESSION['VillageHouse'];
     echo "<br>";
     echo $_SESSION['SpouseName'];
     echo "<br>";
     echo $_SESSION['RoadBlockSector'];
     echo "<br>";
     echo $_SESSION['SpouseNationality'];
     echo "<br>";
     echo $_SESSION['District'];
     echo "<br>";
     echo $_SESSION['SpouseProfession'];
     echo "<br>";
     echo $_SESSION['PoliceStation'];
     echo "<br>";
     echo $_SESSION['MaritalStatus'];
     echo "<br>";
     echo $_SESSION['PostOffice1'];
     echo "<br>";
     echo $_SESSION['ApplicantProfession'];
     echo "<br>";
     echo $_SESSION['BCountry'];
     echo "<br>";
     echo $_SESSION['Birth_District'];
     echo "<br>";
     echo $_SESSION['Village_house'];
     echo "<br>";
     echo $_SESSION['Road_Block'];
     echo "<br>";
     echo $_SESSION['District12'];

     echo "<br>";
     echo $_SESSION['Police_Station'];
     echo "<br>";
     echo $_SESSION['Post_Office1'];


?>

<!-- Page two -->
<!-- ==================================================== -->
<?php

 	echo $_SESSION['OfficeNo'];
     echo "<br>";
     echo $_SESSION['PassportNo'];
     echo "<br>";
     echo $_SESSION['ResidenceNo'];
     echo "<br>";
     echo $_SESSION['PlaceOfIssue'];
     echo "<br>";
     echo $_SESSION['MobileNo'];
     echo "<br>";
     echo $_SESSION['DateOfIssue'];
     echo "<br>";
     echo $_SESSION['RI_Reason'];
     echo "<br>";
     echo $_SESSION['Name00'];
     echo "<br>";
     echo $_SESSION['Country00'];
     echo "<br>";
     echo $_SESSION['Village_House1'];
     echo "<br>";
     echo $_SESSION['PoliceStation00'];
     echo "<br>";
     echo $_SESSION['PostOffice00'];
     echo "<br>";
     echo $_SESSION['Contact_No'];
     echo "<br>";
     echo $_SESSION['Email00'];
     echo "<br>";
     echo $_SESSION['Relationship00'];
     echo "<br>";*/
?>


<!-- Page three -->
<!-- ===================================================== -->


<?php

 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST")
 {

 	//stage 1
    $_SESSION['Date1']=$_REQUEST['Date1'];
     $_SESSION['country']=$_REQUEST['country12'];
     $_SESSION['gender']=$_REQUEST['gender'];
     $_SESSION['ApplicationType']='New Application';
     $_SESSION['PassportType']=$_REQUEST['PassportType'];
     $_SESSION['deliveryType']=$_REQUEST['deliveryType'];
     $_SESSION['birthId']=$_REQUEST['birthId'];
     $_SESSION['NationalIdNo']=$_REQUEST['NationalIdNo'];
     $_SESSION['NameApplicant']=$_REQUEST['NameApplicant'];
     $_SESSION['TaxIdNo']=$_REQUEST['TaxIdNo'];
     $_SESSION['FirstPartGN']=$_REQUEST['FirstPartGN'];
     $_SESSION['Foot']=$_REQUEST['Foot'];
     $_SESSION['inch']=$_REQUEST['inch'];
     $_SESSION['SecondPartSN']=$_REQUEST['SecondPartSN'];
     $_SESSION['Religion']=$_REQUEST['Religion'];
     $_SESSION['guardian']=$_REQUEST['guardian'];
     $_SESSION['EmailAddress']=$_REQUEST['EmailAddress'];
     $_SESSION['FatherName']=$_REQUEST['FatherName'];
     $_SESSION['FNationality']=$_REQUEST['FNationality'];
     $_SESSION['CitizenNationality']=$_REQUEST['CitizenNationality'];
     $_SESSION['FProfession']=$_REQUEST['FProfession'];
     $_SESSION['CitizenStatus']=$_REQUEST['CitizenStatus'];
     $_SESSION['MotherName']=$_REQUEST['MotherName'];
     $_SESSION['Dcitizenship']=$_REQUEST['Dcitizenship'];
     $_SESSION['MNationality']=$_REQUEST['MNationality'];
     $_SESSION['MProfession']=$_REQUEST['MProfession'];
     $_SESSION['VillageHouse']=$_REQUEST['VillageHouse'];
     $_SESSION['SpouseName']=$_REQUEST['SpouseName'];
     $_SESSION['RoadBlockSector']=$_REQUEST['RoadBlockSector'];
     $_SESSION['SpouseNationality']=$_REQUEST['SpouseNationality'];
     $_SESSION['District']=$_REQUEST['District'];
     $_SESSION['SpouseProfession']=$_REQUEST['SpouseProfession'];
     $_SESSION['PoliceStation']=$_REQUEST['PoliceStation'];
     $_SESSION['MaritalStatus']=$_REQUEST['MaritalStatus'];
     $_SESSION['PostOffice1']=$_REQUEST['PostOffice1'];
     $_SESSION['ApplicantProfession']=$_REQUEST['ApplicantProfession'];
     $_SESSION['BCountry']=$_REQUEST['BCountry'];
     $_SESSION['Birth_District']=$_REQUEST['Birth_District'];
     $_SESSION['Village_house']=$_REQUEST['Village_house'];
     $_SESSION['Road_Block']=$_REQUEST['Road_Block'];
     $_SESSION['District12']=$_REQUEST['District12'];
     $_SESSION['Police_Station']=$_REQUEST['Police_Station'];
     $_SESSION['Post_Office1']=$_REQUEST['Post_Office1'];

     echo $_SESSION['Date1'];
     echo "<br>";
     echo $_SESSION['country'];
     echo "<br>";
     echo $_SESSION['gender'];
     echo "<br>";
     echo $_SESSION['ApplicationType'];
     echo "<br>";
     echo $_SESSION['PassportType'];
     echo "<br>";
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


     //stage 2
     $_SESSION['OfficeNo']=$_REQUEST['OfficeNo'];
     $_SESSION['PassportNo']=$_REQUEST['PassportNo'];
     $_SESSION['ResidenceNo']=$_REQUEST['ResidenceNo'];
     $_SESSION['PlaceOfIssue']=$_REQUEST['PlaceOfIssue'];
     $_SESSION['MobileNo']=$_REQUEST['MobileNo'];
     $_SESSION['DateOfIssue']=$_REQUEST['DateOfIssue'];
     $_SESSION['RI_Reason']=$_REQUEST['RI_Reason'];
     $_SESSION['Name00']=$_REQUEST['Name00'];
     $_SESSION['Country00']=$_REQUEST['Country00'];
     $_SESSION['Village_House1']=$_REQUEST['Village_House1'];
     $_SESSION['Road_Block']=$_REQUEST['Road_Block'];
     $_SESSION['District00']=$_REQUEST['District00'];
     $_SESSION['PoliceStation00']=$_REQUEST['PoliceStation00'];
     $_SESSION['PostOffice00']=$_REQUEST['PostOffice00'];
     $_SESSION['Contact_No']=$_REQUEST['Contact_No'];
     $_SESSION['Email00']=$_REQUEST['Email00'];
     $_SESSION['Relationship00']=$_REQUEST['Relationship00'];

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
     echo "<br>";


 	//stage 3
     $_SESSION['Payment']=$_REQUEST['Payment'];
     $_SESSION['AmountType']=$_REQUEST['AmountType'];
     $_SESSION['Amount']=$_REQUEST['Amount'];
     $_SESSION['DateOfPayment']=$_REQUEST['DateOfPayment'];
     $_SESSION['ReceiptNo']=$_REQUEST['ReceiptNo'];
     $_SESSION['Bank']=$_REQUEST['Bank'];
     $_SESSION['Branch']=$_REQUEST['Branch'];



     echo $_SESSION['Payment'];
     echo "<br>";
     echo $_SESSION['AmountType'];
     echo "<br>";
     echo $_SESSION['Amount'];
     echo "<br>";
     echo $_SESSION['DateOfPayment'];
     echo "<br>";
     echo $_SESSION['ReceiptNo'];
     echo "<br>";
     echo $_SESSION['Bank'];
     echo "<br>";
     echo $_SESSION['Branch'];
     echo "<br>";

     
     
     



     
     
 }

?>
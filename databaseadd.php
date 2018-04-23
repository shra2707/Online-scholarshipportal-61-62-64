<?php
if(isset($_POST['submit']))
{
$applicantno=$_POST["applicantno"];
$firstname=$_POST["firstname"];
$middlename=$_POST["middlename"];
$lastname=$_POST["lastname"];
$contact=$_POST["contact"];
$dateofbirth=$_POST["dateofbirth"];
$emailid=$_POST["emailid"];
$address=$_POST["address"];
$corr_address=$_POST["corr_address"];
$martial_status=$_POST["martial_status"];
$scholarshiptype=$_POST["scholarshiptype"];
$noi=$_POST["noi"];
$loan_ammount=$_POST["loan_ammount"];
$domicile=$_POST["domicile"];
$ident_details=$_POST["ident_details"];
$aaddhar=$_POST["aaddhar"];
$bank_acc=$_POST["bank_acc"];

include "seconnection.php";

$sql = "INSERT INTO osp(applicantno,firstname,middlename,lastname,contact,dateofbirth,emailid,address,corr_address,martial_status,scholarshiptype,noi,loan_ammount,domicile,	ident_details,aaddhar,bank_acc) VALUES('$applicantno','$firstname','$middlename','$lastname','$contact','$dateofbirth','$emailid','$address','$corr_address','$martial_status','$scholarshiptype','$noi','$loan_ammount','$domicile','$ident_details','$aaddhar','$bank_acc')";

$result = mysqli_query($con,$sql);
echo "<h2><font color=green>Project successfully added</font></h2>";

}
?>
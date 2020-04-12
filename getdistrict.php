<?php

$Barisal = array("Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur");
$Chattogram = array("Bandarban", "Brahmanbaria", "Chandpur","Chattogram","Cumilla","Cox's Bazar","Feni","Khagrachari","Lakshmipur","Noakhali","Rangamati");
$Dhaka = array("Dhaka","Faridpur", "Gazipur", "Gopalganj","Kishoreganj","Madaripur","Manikganj","Munshiganj","Narayanganj","Narsingdi","Rajbari","Shariatpur","Tangail");
$Mymensingh = array("Jamalpur", "Mymensingh", "Netrakona","Sherpur");
$Khulna = array("Bagerhat", "Chuadanga","Jessore","Jhenaidah","Khulna", "Kushtia","Magura","Meherpur","Narail","Satkhira");
$Rajshahi = array("Bogra","Jaipurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajganj");
$Rangpur = array("Rangpur","Gaibandha","Kurigram","Nilphamari","Lalmonirhat","Dinajpur","Thakurgaon","Panchagarh");
$Sylhet = array("Habiganj", "Moulvibazar", "Sunamganj","Sylhet");

$q = $_GET['q'];
echo "<table>";
echo "<th>" . $q . "</th>";
if($q == "Dhaka")
{
    for($i=0; $i<count($Dhaka) ; $i++){
        echo "<tr>";
        echo "<td>" . $Dhaka[$i] . "</td>";
        echo "</tr>";
    }

}
elseif($q == "Chattogram")
{
    for($i=0; $i<count($Chattogram); $i++){
        echo "<tr>";
        echo "<td>" . $Chattogram[$i] . "</td>";
        echo "</tr>";
    }
}
elseif($q == "Mymensingh")
{
    for($i=0; $i<count($Mymensingh); $i++){
        echo "<tr>";
        echo "<td>" . $Mymensingh[$i] . "</td>";
        echo "</tr>";
    }
}
elseif($q == "Sylhet")
{
    for($i=0; $i<count($Sylhet) ; $i++){
        echo "<tr>";
        echo "<td>" . $Sylhet[$i] . "</td>";
        echo "</tr>";
    }

}
elseif($q == "Barisal")
{
    for($i=0; $i<count($Barisal) ; $i++){
        echo "<tr>";
        echo "<td>" . $Barisal[$i] . "</td>";
        echo "</tr>";
    }
}
elseif($q == "Khulna")
{
    for($i=0; $i<count($Khulna) ; $i++){
        echo "<tr>";
        echo "<td>" . $Khulna[$i] . "</td>";
        echo "</tr>";
    }
}


elseif($q == "Rajshahi")
{
    for($i=0; $i<count($Rajshahi) ; $i++){
        echo "<tr>";
        echo "<td>" . $Rajshahi[$i] . "</td>";
        echo "</tr>";
    }

}
elseif($q == "Rangpur")
{
    for($i=0; $i<count($Rangpur) ; $i++){
        echo "<tr>";
        echo "<td>" . $Rangpur[$i] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>

<?php
class animal{
	public $Jumlah_Kaki,$Bisa_Terbang;
	}

class Kambing extends animal
{
	function bersuara()
	{
		return "embek embek";
	}
}

class Bebek extends animal
{
	function bersuara()
	{
		return "kuek kuek";
	}
}
class Elang extends animal 
{
	function bersuara()
	{
		return "niippp";
	}
}
class Harimau extends animal 
{
	function bersuara()
	{
		return "rau rau";
	}
}

//Kambing
$rika = new Kambing;
$rika->Jumlah_kaki = 4;
$rika->Bisa_Terbang ="Tidak Bisa Terbang";

echo "<br>";
echo "Punya Kaki Sebanyak : " .$rika->Jumlah_kaki. " <br>";
echo $rika->Bisa_Terbang. "<br>";
echo "Suaranya :" .$rika->bersuara(). "<br>";
echo "<hr>"; 

//Bebek
$Egi = new Bebek;
$Egi->Jumlah_kaki = 2;
$Egi->Bisa_Terbang = "tidak Bisa Terbang";

echo "Egi Adalah kambing <br>";
echo "Punya Kaki Sebanyak : " .$Egi->Jumlah_kaki. "<br>";
echo $Egi->Bisa_Terbang. "<br>";
echo "Suaranya :" .$Egi->bersuara(). "<br>";
echo "<hr>";

//Elang
$Nia = new Elang;
$Nia->Jumlah_kaki = 2;
$Nia->Bisa_Terbang = "Bisa Terbang";

echo "Nia Adalah Elang<br>";
echo "Punya Kaki Sebanyak : " .$Nia->Jumlah_kaki. " <br>";
echo $Nia->Bisa_Terbang. "<br>";
echo "Suaranya :" .$Nia->bersuara(). "<br>";
echo "<hr>";

//Harimau
$Sopi = new Harimau;
$Sopi->Jumlah_kaki = 4;
$Sopi->Bisa_Terbang ="Tidak Bisa Terbang";

echo "Sopi Adalah Harimau <br>";
echo "Punya Kaki Sebanyak : " .$Sopi->Jumlah_kaki. "<br>";
echo $Sopi->Bisa_Terbang. "<br>";
echo "Suaranya :" .$Sopi->bersuara(). "<br>";
echo "<hr>";
?>
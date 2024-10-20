<!DOCTYPE html> 
<html> 
<body> 
<pre> 

<?php 
// Array berisi nama member SEVENTEEN, warna favorit, dan nomor urut mereka
$members = array("S.Coups", "Jeonghan", "Joshua", "Jun", "Hoshi", "Wonwoo", "Woozi", "DK", "Mingyu", "The8", "Seungkwan", "Vernon", "Dino");
$fav_colors = array("black", "white", "blue", "purple", "yellow", "green", "pink", "orange", "red", "light blue", "mint", "gray", "navy");
$numbers = range(1, 13); // Nomor urut member

// Membuat tabel dengan border dan header
echo "<table border='1'>"; 
echo "<tr><th>Number</th><th>Member</th><th>Favorite Color</th></tr>";

// Loop untuk menampilkan setiap member SEVENTEEN dengan warna favorit mereka
for($i = 0; $i < 13; $i++) { 
    echo "<tr>
            <td>{$numbers[$i]}</td>
            <td>{$members[$i]}</td>
            <td>{$fav_colors[$i]}</td>
          </tr>";  
} 
echo "</table>"; 

?> 

</pre> 
</body> 
</html>
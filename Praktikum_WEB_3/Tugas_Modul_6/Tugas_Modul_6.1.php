<?php
    function fact($num){
        if($num==1){
            return 1;
        }else{
            return $num*fact($num-1);
        }
    }
?>  
<form method="post">
    <label>Masukkan Bilangan: </label>
    <input type="number" name="bilangan" min="0">
    <button type="submit" name="hasil">Hasil</button>
</form><br> 
<?php 
    if(isset($_POST['hasil'])){
        $num = $_POST['bilangan'];
        echo "faktorial dari bilangan " .$num ." = ".fact($num);
    } 
?>
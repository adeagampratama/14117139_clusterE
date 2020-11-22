<?php
function bet($nama, $color="black"){
    $length = strlen($nama);
    if($length > 20 ){
        $harga = 700;
    }else if($length <= 20){
        $harga = 500;
    }else if($length <= 10){
        $harga = 300;
    }else{
        $harga = 0;
    }
    $harga_total = $length * $harga;
    echo '<font color="' .$color .'">Nama   : ' .$nama .'</font></br>';
    echo '<font color="' .$color .'">Harga Total  = ' .$harga_total .'</font></br>';
    }
?>
<form method="post">
    <table>
    <tr>
        <td>Nama  : </td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Pilih Warna : </td>
        <td><input type="color" name="color" value="yellow"></td>
    </tr>
    </table>
    <button type="submit" name="hasil">Enter</button>
</form><br>
<?php
    if(isset($_POST['hasil'])){
        bet($_POST['nama'], $_POST['color']);
    }
?>
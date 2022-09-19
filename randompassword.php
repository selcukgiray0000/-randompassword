<?php
function rastgelesifre($uzunluk)
{
    $veriler = "0123456789";
    $veriler .= "ABCDEFGHIJKLMNOPRSTUVYZWX";
    $veriler .= "abcdefghiklmnoprstuvyzwx";
    $veriler .= "!@#$%^&*()_+";
    $rastgelesifre = "";

    for($i = 0; $i < $uzunluk; $i++)
    {
        $rastgelesifre  .= substr($veriler, rand(0, strlen($veriler)), 1);
    }
    return $rastgelesifre;
}

@$uzunluk = $_POST["uzunluk"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastgele Şifre - Kod Pazarı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</head>
<body>

<!-- şifre oluşturucu başlangıç -->
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mx-auto">
            <h3>Rastgele Şifre Üretme Aracı</h3>
            <hr>
            <label >Şifreniz</label>
            <form method="post">
            <input type="text" class="form-control mt-1" value="<?= rastgelesifre($uzunluk)?>">
            <label class="form-label mt-1">Uzunluk: <span id="uzunluk">0</span></label>
            <input type="range" class="form-range" name="uzunluk" value="0" min="0" max="70" id="customRange2">
            <button type="submit" class="btn btn-danger mt-1">Şifre Oluştur</button>
            </form>
        </div>
    </div>
</div>
<!-- şifre oluşturucu bitiş -->

<script>
var slider = document.getElementById("customRange2");
var output = document.getElementById("uzunluk");
output.innerHTML = slider.value; 

slider.oninput = function() {
    output.innerHTML = this.value;
}
</script>

</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Generator Undangan Whatsapp Muhammad Dzaki Athoilah</title>
  </head>
  <body>
<div class="container mt-5">
     <div class="row">
          <div class="col-lg-6">
               
               
               
     <form action="" method="post">
     <div class="d-flex">
          <input type="text" name="nama" placeholder="Nama Tamu" class="form-control ">
          <input type="submit" name="submit" class="btn btn-primary ml-3" value="Generate">
     </div>
     </form>
     
     <?php

if (isset($_POST['submit'])) {
     $nama = $_POST['nama'];
     $string = htmlspecialchars($nama);
     $replaced = str_replace(' ', '+', $string);
     ?>

<button onclick="copy()" class="btn btn-sm btn-success mt-3">Copy</button>
<textarea name="" class="my-3 outline-none" style="outline:none;" id="textarea" cols="200%" rows="40">
*Assalamu'alaikum Wr. Wb.*
Alhamdulillah, dengan penuh rasa syukur
memohon ridho dan rahmat Allah SWT, kami bermaksud melaksanakan Tasyakuran Aqiqah Putra Pertama Kami,
yang kami beri nama : 

*Muhammad Dzaki Athoilah*
Tempat Lahir   : Serang, 04 Mei 2022

yang insya allah akan di selanggarakan pada :
Hari / Tanggal : Sabtu,11 Juni 2022
Pukul          : 08:00 s/d Selesai

Merupakan suatu kebahagiaan bagi kami apabila *<?= ucfirst($nama)?>* berkenan untuk hadir dan memberikan doa restu.
*Wassalamu'alaikum Wr. Wb.*
Terima Kasih..

Hormat kami,
*Nova & Median*    
________________________________
Undangan Online : https://mpdev.my.id/?kepada=<?=$replaced?>     
________________________________
</textarea>
<?php
}
?>
</div>

</div>
     </div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
     function copy() {
  let textarea = document.getElementById("textarea");
  textarea.select();
  document.execCommand("copy");
}
</script>  
</body>
</html>
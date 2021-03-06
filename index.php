<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/css.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>3DCalc</title>
  </head>
  
  <body>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top"  id="navbar-Beranda">
        <div class="container">
        <nav>
            <a href="index.php"><img id="logo" src="./img/lambang web.png" alt="web"></a>
        </nav>
        </div>
      </nav>

      <div class="bg-danger bg-gradient">
        <div class= "container mt-5">
          <div>
              <br>
              <h2 class="description text-center bg-info" >3D Calculator</h2>
              <br>
              <script>
                var nama;
                var waktu;
                var tanggal = new Date();
                var jam = tanggal.getHours();
  
                nama = window.prompt("Masukkan Nama Kamu:");
                if(jam < 12){
                  waktu = "Selamat pagi";
                }
                if(jam >= 12){
                  jam = jam - 12;
  
                  if(jam < 6){
                    waktu = "Selamat siang";
                  }
                  if(jam >= 6){
                    waktu = "Selamat malam";
                  }
                }
                document.writeln("<h3><b>" + waktu + ", " + nama + "</b></h3>");
              </script>
              <br>
              <h5 class="description text-left">Menghitung volume dan luas permukaan dari silinder, kerucut dan bola.</h5>
          </div>
        </div><br><br>
  
        <div class="container bg-info">
          <div class="container bg-light">
            <div class="container">
              <section id="silinder">
                  <div>
                      <div>
                          <h4><b>Silinder</b></h4>
                          <label>Masukkan jari-jari silinder (dalam meter)</label><br>
                          <input type="text" id="jariSilinder"><br><br>
      
                          <label>Masukkan tinggi silinder (dalam meter)</label><br>
                          <input type="text" id="tinggiSilinder"><br><br>
      
                          <button class = "btn btn-primary" onclick="permukaanSilinder(), volumeSilinder()">Hitung!</button><br><br>
      
                          <h4><b>Hasil Perhitungan</b></h4>
                          <p>Luas Permukaan: <span id="hasilPermukaan_Silinder"></span> m<sup>2</sup></p>
                          <p>Volume: <span id="hasilVolume_Silinder"></span> m<sup>3</sup></p>
                      </div>
                  </div>
              </section>
            </div>
          </div>
        </div>
        
        <br><br>
  
        <div class="container bg-warning">
          <div class="container bg-light">
            <div class="container">
              <section id="kerucut">
                <div>
                    <h4><b>Kerucut</b></h4>
                    <label>Masukkan jari-jari kerucut (dalam meter)</label><br>
                    <input type="text" id="jariKerucut"><br><br>
    
                    <label>Masukkan garis pelukis kerucut (dalam meter)</label><br>
                    <input type="text" id="pelukisKerucut"><br><br>
    
                    <label>Masukkan tinggi kerucut (dalam meter)</label><br>
                    <input type="text" id="tinggiKerucut"><br><br>
    
                    <button class = "btn btn-primary" onclick="permukaanKerucut(), volumeKerucut()">Hitung!</button><br><br>
    
                    <h4><b>Hasil perhitungan</b></h4>
                    <p>Luas Permukaan: <span id="hasilPermukaan_Kerucut"></span> m<sup>2</sup></p>
                    <p>Volume: <span id="hasilVolume_Kerucut"></span> m<sup>3</sup></p>
                </div>
              </section>
            </div>
          </div>
        </div><br><br>
  
        
        <div class="container bg-info">
          <div class="container bg-light">
            <div class="container">
              <section id="bola">
                  <div>
                      <div>
                          <h4><b>Bola</b></h4>
                          <label>Masukkan Jari-Jari Bola (dalam meter)</label><br>
                          <input type="text" id="jariBola"><br><br>
      
                          <button class = "btn btn-primary" onclick="permukaanBola(), volumeBola()">Hitung!</button><br><br>
      
                          <h4><b>Hasil perhitungan</b></h4>
                          <p>Luas permukaan: <span id="hasilPermukaan_Bola"></span> m<sup>2</sup></p>
                          <p>Volume: <span id="hasilVolume_Bola"></span> m<sup>3</sup></p>
                      </div>
                  </div>
              </section>
            </div>
          </div>
        </div><br><br>
      </div>

        <script>
          function permukaanSilinder() 
          {       
              var r = document.getElementById('jariSilinder').value;
              var t = document.getElementById('tinggiSilinder').value;
  
              var hasil = 2*Math.PI*r*r+2*Math.PI*r*t;
              document.getElementById('hasilPermukaan_Silinder').innerHTML = hasil.toFixed(2);
          }
  
          function volumeSilinder() 
          {       
              var r = document.getElementById('jariSilinder').value;
              var t = document.getElementById('tinggiSilinder').value;
  
              var hasil = Math.PI*(r*r)*t;
              document.getElementById('hasilVolume_Silinder').innerHTML = hasil.toFixed(2);
          }
  
          function permukaanKerucut() 
          {
              var r = document.getElementById('jariKerucut').value;
              var pelukis = document.getElementById('pelukisKerucut').value;
              var t = document.getElementById('tinggiKerucut').value;
  
              var hasil = Math.PI*r*r+Math.PI*r*pelukis;
              document.getElementById('hasilPermukaan_Kerucut').innerHTML = hasil.toFixed(2);
          }
  
          function volumeKerucut() 
          {
              var r = document.getElementById('jariKerucut').value;           
              var t = document.getElementById('tinggiKerucut').value;
  
              var hasil = (1/3)*Math.PI*(r*r)*t;
              document.getElementById('hasilVolume_Kerucut').innerHTML = hasil.toFixed(2);
          }
  
          function permukaanBola() 
          {
              var r = document.getElementById('jariBola').value;
  
              var hasil = 4*Math.PI*r*r;
              document.getElementById('hasilPermukaan_Bola').innerHTML = hasil.toFixed(2);
          }
  
          function volumeBola() 
          {
              var r = document.getElementById('jariBola').value;
  
              var hasil = 4/3*Math.PI*r*r*r;
              document.getElementById('hasilVolume_Bola').innerHTML = hasil.toFixed(2);
          }
      </script>

      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-bottom"  id="footer-Beranda">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavv" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavv">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link js-scroll-trigger" href="https://www.instagram.com/naufals_/">Instagram <span class="sr-only"></span></a>
              </li>
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger" href="https://www.youtube.com/channel/UCPntr6FEwIdjGwa5fWHZZGA">Youtube <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger" href="https://github.com/naufalsy">Github <span class="sr-only"></span></a>
            </li>
          </ul>
        </div>
        </div>
      </nav>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    <script src=".js/js.js"></script>
  </body>
</html>

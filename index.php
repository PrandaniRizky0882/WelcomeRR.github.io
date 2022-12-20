<!DOCTYPE html>
<html>
<head>
  <title>Free Primogem | Eula</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<video autoplay muted loop id="playkiki"><!--terus mengulang repeter(success)-->
  <source src="assets/ula.mp4" type="video/mp4">
</video>
<!--<audio autoplay loop>gagal harus mulai setelah login diisi
    <source src="assets/the.mp3" type="audio/mpeg">
    --Browsermu tidak mendukung tag audio--
  </audio>-->
  <div class="container">
    <h1>Login</h1>
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
      <label>Username</label><br>
      <input type="text" name="username"><br>
      <label>Password</label><br>
      <input type="password" name="password"><br>
      <button>Log in</button>
</form>
</div>
<style>
  *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open-Sans', sans-serif;

}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: traslate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
    cursor: url('assets/sss.cur'), auto;
  }
.container h1{
  text-align: left;
  color: #fafafa;
  margin-bottom: 30px;
  text-transform: uppercase;
  border-bottom: 4px solid #2979ff;
}
.container label{
  text-align: left;
  color: #90caf9;
  cursor: url('assets/sss.cur'), auto;
}
.container form input{
  width: calc(100% - 20px);
  padding: 8px 10px;
  margin-bottom: 15px;
  border: none;
  background-color: transparent;
  border-bottom: 2px solid #2979ff;
  color: #fff;
  font-size: 20px;
  cursor: url('assets/sss.cur'), auto;
}
.container form button{
  width: 100%;
  padding: 5px 0;
  border: none;
  background-color: #2979ff;
  font-size: 18px;
  color: #fafafa;
  cursor: url('assets/sss.cur'), auto;
}
#playkiki {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  z-index: -100;
  cursor: url('assets/sss.cur'), auto;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
#btn-playback {
    border: 0px solid #801515;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
    background: transparent;          /* set warna background menjadi transparan */
    color: #00CCFF;                   /* ubah warna font */
    font-size: 16px;                  /* ubah ukuran font */
    padding: 0.5em 1em 0.5em 1em;     /* padding: top right bottom left; */
    cursor: url('assets/sss.cur'), auto; /* cursor mouse costom */
}
#btn-playback:hover {
    opacity: 0.8;                     /* ubah tingkat transparansi saat cursor menuju button. 0.0 s.d 1.0 */
}
#btn-playback:active {
    background: #550000;              /* ubah background saat button ditekan */
    color: #FFFFFF;                   /* set warna font menjadi putih */       
}


  </style>
  <button class="btn btn-primary" onclick="toggleMusic()" id="btn-playback" data-play="false">
    <i class="fa fa-play"></i>
    <span id="btn-text">ON</span>
  </button>
  <audio autoplay loop id="audio" src="assets/the.mp3" type="audio/mpeg">
  <script>
    const myAudio = document.getElementById("audio");
    const btn = document.getElementById("btn-playback");
    const btnIcon = document.querySelector("#btn-playback > i");
    const btnText = document.getElementById("btn-text");
    
    const toggleMusic = () => {      
      const dataPlay = btn.getAttribute('data-play');
            
      if(dataPlay === 'false') {
        btn.setAttribute('data-play', 'true');
        myAudio.play();
        btnIcon.classList.remove("fa-ON");
        btnIcon.classList.add("fa-OFF");
        btnText.innerText = "OFF";
      } else {
        btn.setAttribute('data-play', 'false');
        myAudio.pause();
        btnIcon.classList.remove("fa-OFF");
        btnIcon.classList.add("fa-ON");
        btnText.innerText = "ON";
      }
    };
    
    myAudio.onpause = () => {
      btn.setAttribute('data-play', 'false');
        myAudio.pause();
        btnIcon.classList.remove("fa-OFF");
        btnIcon.classList.add("fa-ON");
        btnText.innerText = "ON";
    };
  </script>
</body>
</html>

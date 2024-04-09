<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBS.Inc | Yxon software</title>
    <link rel="stylesheet" href="assets/css/app2.css">
</head>
<body>
    <div id="navbar">
	<img src="assets/images/logo.png" alt="" class="logo">
    <h2 class="title">Online System For Weeks Moviez Fetching/Downloading</h2>

    </div>
    <style>
    body {
  margin: 0;
  background-color: lightgray;
  font-family: Arial, Helvetica, sans-serif;
}
.logo{
    margin-top: 5px;
    width: 140px;
    height: 130px;
    border-radius: 200px;
}

.title{
    margin-left: 180px;
    margin-top: -120px;
    color: white;
}
#navbar {
  box-shadow: 4px 8px 16px;
  background-color: #333;
  position: fixed;
  top: 10px;
  width: 100%;
  height: 150px;
  display: block;
  transition: top 0.3s;
}
  .video-container {
    height: 300px;
    position: relative;
 margin: 0;
}


.video-container video {
  width: 100%;
  height: 450px;
  position: absolute;
  object-fit: cover;
  z-index: 0;
}
.cont-x{
  background-color: #333;
  margin-left: 20px;
  margin-top: 20px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;
}
.cont-y{
  background-color: #333;
  margin-left: 360px;
  margin-top: -300px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;

}
.cont-z{
  background-color: #333;
  margin-left: 700px;
  margin-top: -300px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;

}
.cont-r{
  background-color: #333;
  margin-left: 1040px;
  margin-top: -300px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;

}
.share{
  margin-top: 80px;
   margin-left: 90px;
   height: 90px;
}
.puo{
  color: white;
  margin-top: 30px;
  margin-left: 60px;
  font-family: Condensed;
}
.fea{
  letter-spacing: 15px;
  margin-top: 160px;
  color: #333;
  text-shadow: white;

}
.cont-i{
  background-color: #333;
  margin-left: 20px;
  margin-top: 20px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;

}
.cont-e{
  background-color: #333;
  margin-left: 360px;
  margin-top: -300px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;

}
.cont-p{
  background-color: #333;
  margin-left: 700px;
  margin-top: -300px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;

}
.cont-t{
  background-color: #333;
  margin-left: 1040px;
  margin-top: -300px;
  width: 300px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 4px 8px 16px;

}

</style>
<div class="video-container">
    <video autoplay muted loop class="vid">
        <source src="assets/videos/tor.mp4" type="video/mp4" />
    </video>

    </div>
    <center>
    <h1 class="fea">Yxon Features</h1>
    </center>
<div class="cont-x">
<img src="assets/images/share.png" alt="" class="share">
<h2 class="puo">Movie Sharing</h2>
</div>
<div class="cont-y">
<img src="assets/images/combo.png" alt="" class="share">
<h2 class="puo">Weeks Buying</h2>

</div>
<div class="cont-z">
<img src="assets/images/communication.png" alt="" class="share">
<h2 class="puo">  Communication</h2>

</div>
<div class="cont-r">
<img src="assets/images/coins.png" alt="" class="share">
<h2 class="puo">Enabling Repository</h2>

</div>


<div class="cont-i">
<img src="assets/images/money.png" alt="" class="share">
<h2 class="puo">Payments Per Week</h2>
</div>
<div class="cont-e">
<img src="assets/images/download.png" alt="" class="share">
<h2 class="puo">Download & Fetch</h2>

</div>
<div class="cont-p">
<img src="assets/images/collaboration.png" alt="" class="share">
<h2 class="puo">  Collaboration</h2>

</div>
<div class="cont-t">
<img src="assets/images/film.png" alt="" class="share">
<h2 class="puo">Watching Moviez</h2>

</div>



    <script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "10px";
  }
}
</script>
</body>
</html>
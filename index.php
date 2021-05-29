<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../sporthub/css/style.css">
<style>
    .flex {
  display: flex;
  justify-content: center;
}

.flex-item + .flex-item {
  margin-left: 10px;
}

.button {
  margin-top: 1cm;
  margin-bottom: 4.3cm;
  background-color: lightgreen;
  border: none;
  color: white;
  padding: 1cm 3cm;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 0.7cm;
  cursor: pointer;
  border-radius: 60px;
}
.hey
{
    margin-top: 1cm;
  margin-bottom: 1cm;
  background-color: lightgreen;
  border: none;
  color: white;
  padding: 1.5cm 4cm;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1cm;
  border-radius: 60px;
}

</style>
</head>
<body>

<header style="text-align: center;">
<img src="../sporthub/Student/img/sports-reboot-promo-still-facebookJumbo.jpg" width="100px" height="80px">
<h1 class="liketext">Sport Hub</h1>
</header>
<div class="flex">
<p class="flex-item">
    <p class="hey">Please choose your option</p></p>
</div>

<div class="flex">
    <form action="../sporthub/Admin/" class="flex-item">
      <button class="button">Admin portal</button>
    </form>
  
    <form action="../sporthub/Student/" class="flex-item">
      <button class="button">Student portal</button>
    </form>
  </div>



</div>

<footer>
  <p>Copyright 2021-2050 by Shobhit. All Rights Reserved.</p>
</footer>


</body>
</html>
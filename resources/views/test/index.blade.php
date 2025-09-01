<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Autobiography</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-image: url ('pictures/to.png');
      background-size: cover;
      background-position: center;
      color: #333;
      margin: 0;
      padding: 20px;
      display: flex;
    }

    .book {
      max-width: 800px;
      background: white;
      padding: 10px;
      border-radius: 10px;
      margin-right: auto;
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 20px;
      border: 2px solid #999;
    }

    .profile-pic img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h1 {
      text-align: center;
      font-size: 1.8em;
      margin-bottom: 20px;
    }

    .section {
      margin-bottom: 20px;
    }

    .section-title {
      background-color: #bdb76b; 
      color: white;
      padding: 10px;
      font-weight: bold;
      border-radius: 5px 5px 0 0;
    }

    .section-content {
      background-color: #f5f5dc; 
      padding: 10px;
      border-radius: 0 0 5px 5px;
      margin-top: -1px;
    }

    .section-icon {
      padding-top: 20px;
      padding-left: 5px;
      padding-bottom: 0px;
    }
    #hobbies {
      padding-right: 80px;
    }
  </style>
</head>
<body>

  <div class="book">
    <div class="profile-pic">
      <img src="pictures/hahaha.png" alt="My Picture" />
    </div>

    <h1>My Autobiography</h1>

    <div class="section">
      <div class="section-title">About Me</div>
      <div class="section-content">Born on October 14,2005 living in Ipet, Sudipen, La union and now currently a College 3rd year student in ISPSC Tagudin Campus living a normal life.One of my idol is Justin Nabunturan</div>
    </div>

    <div class="section">
      <div class="section-title">My Hobbies</div>         
             <img src="{{ asset('pictures/webtoon.png') }}" alt="Webtoon" width="115" height="100" style="margin-right: 15px;">
             <img src="{{ asset('pictures/bike.png') }}" alt="bike" width="100" height="100" style="margin-right: 15px;">
             <img src="{{ asset('pictures/gaming.png') }}" alt="gaming" width="120" height="120">          
     </div>

    <div class="section">
      <div class="section-title">Dream</div>
      <div class="section-content">There's a lot of dream that i wanted to become but I still doesn't know what will happen but let see.. and also I wanted to become a famous person like Justin Nabunturan.</div>
    </div>

    <div class="section">
      <div class="section-title">Contact</div>
        <div class="section-icon">
        <a href="https://www.instagram.com/jcenluke/" target="_blank">
        <img src="{{ asset('pictures/ig.png') }}" alt="Facebook" width="80" height="80">
        <p>Instagram</p>
        </a>
        </div>
      </div>

</body>
</html>
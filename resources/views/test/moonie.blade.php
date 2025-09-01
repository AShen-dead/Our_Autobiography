<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Autobiography</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

  <style>
    /* Background */
    .bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('{{ asset('pictures/b.jpg') }}') no-repeat center center;
      background-size: cover;
      z-index: -1;
    }

    /* Body */
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: left;
      background: transparent; /* ✅ allow .bg to show */
      color: black; /* change to white if background is too dark */
    }

    /* Header */
    header {
      background: #1d4ed8;
      color: white;
      text-align: left;
      padding: 20px;
      border-radius: 12px;
      font-size: 1.8rem;
      width: fit-content;
      max-width: 900px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    /* Navigation */
    nav {
      margin: 20px 0;
      text-align: left;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      background: #1d4ed8;
      color: white;
      padding: 8px 15px;
      border-radius: 12px;
      font-size: 1.2rem;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      transition: 0.3s;
    }

    nav a:hover {
      background: #2563eb;
    }

    /* Profile Picture */
    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      margin: 20px 0;
      border: 4px solid #1d4ed8;
    }

    .profile-pic img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Headings */
    h1 {
      margin-top: 10px;
    }

    h2 {
      color: #1d4ed8;
      margin-top: 20px;
    }

    h3 {
      color: #1e3a8a;
      margin-top: 15px;
    }

    /* Container */
.container {
  background: rgba(255, 255, 255, 0.9); /* semi-transparent white box */
  padding: 20px;
  border-radius: 12px;
  max-width: 800px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
  </style>
</head>
<body>
  <!-- ✅ Background Layer -->
  <div class="bg"></div>

  <!-- Header -->
  <header>My Autobiography</header>

  <!-- Navigation -->
  <nav>
    <a href="{{ url('/hobbies') }}">MyHobbies</a>
    <a href="{{ url('/hommies') }}">MyHommies</a>
    
  </nav>
   
  <!-- Content Container -->
<div class="container"> 
  
  <!-- Profile Picture -->
  <div class="profile-pic">
    <img src="{{ asset('pictures/moonie (1).jpg') }}" alt="My Picture">
  </div>

  <!-- Content -->
  <h1>Moonie Rey L. Leonen</h1>

  <h2>About Me</h2>
  <p>Born on September 20, 2004, living in San Cristobal, Bangar, La Union. I'm currently a 3rd-year college student...</p>

  <h2>My Hobbies</h2>
  <p>I enjoy gaming, exploring technology, outdoor activities, and reading.</p>
</body>
</html>

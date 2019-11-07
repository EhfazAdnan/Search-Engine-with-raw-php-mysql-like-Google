<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Search the web for sites and image">
    <meta name="keywords" content="Search engine, search, doodle">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Doodle</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="wrapper indexPage">
   <div class="mainSection">
       <div class="logoContainer">
           <img src="assets/images/doodleLogo.png" title="Logo of our site" alt="Site logo">
        </div>

        <div class="searchContainer">
           <form action="search.php" nethod="GET">
               <input type="text" class="searchBox" name="term" placeholder="Search here.." required>
               <input type="submit" class="searchButton" value="Search">
            </form>
        </div>
   </div> 
</div>

</body>
</html> 
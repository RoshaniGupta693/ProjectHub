<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>icons</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root{
    --bg:black;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: var(--bg);
}

ul{
    position: relative;
    display: flex;
    gap: 100px;
}

ul li{
    position: relative;
    list-style: none;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.5s;
}

ul li::before{
    content: '';
    position: absolute;
    inset: 20px;
    box-shadow: 0 0 0 10px var(--clr),
    0 0 0 20px var(--bg),
    0 0 0 22px var(--clr);
    transition: 0.5s;
}

ul li:hover::before{
    inset: 5px;

}

ul li::after{
    content: '';
    position: absolute;
    inset: 0;
    background: var(--bg);
    transform: rotate(45deg);
    transition: 0.5s;
}

ul li:hover::after{
    inset: 0px;
    transform: rotate(0deg);
}

ul li a{
    position: relative;
    text-decoration: none;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li a i{
    font-size: 1em;
    transition: 0.5s;
    color: var(--clr);
    /* opacity: 0; */
    transition: 0.5s;
}

ul li:hover a i{
    color: var(--clr);
    transform: translateY(-40%);
}

ul li a span{
    position: absolute;
    font-family: 'consolas';
    color: var(--clr);
    opacity: 0;
    transition: 0.5s;
    transform: scale(0) translateY(200%);
}

ul li:hover a span{
    opacity: 1;
    transform: scale(1) translateY(100%);
}

ul li:hover a i,
ul li:hover a span{
    filter: drop-shadow(0 0 10px var(--clr)) 
    drop-shadow(0 0 20px var(--clr)) 
    drop-shadow(0 0 30px var(--clr));
}


  body{
    background-color: black;
  }

    </style>


</head>
<body>
<!-- <a href="mainpg.php" target="f1,icons"><input type="button" class="button" value="logout" ></a>-->
    <ul>
                
        <li style="--clr:red;">
            <a href="mainpg.php" target="f1,icons">
                <i class="fa-solid fa-sign-out-alt"></i>
               <span><font color="white">Logout</font></span>
            </a></li>

        <li style="--clr:#29d7f6;">
            <a href="hbg.php" target="f1">
                <i class="fa-solid fa-house"></i>
               <span><font color="white">Home</font></span>
            </a></li>
        <li style="--clr:rgb(255, 136, 0);">
            <a href="aboutus.php" target="f1">
                <i class="fa-solid fa-user"></i>
                <span><font color="white">Aboutus</font></span>
            </a></li>

            <li style="--clr:rgb(0, 255, 195);">
              <a href="vintage.php" target="f1">
                  <i class="fa-solid fa-camera-retro fa-lg"></i>
                  <span><font color="white">Vintage</font></span>
              </a></li>

              
            <li style="--clr:rgb(237, 33, 227);">
                <a href="category.php" target="f1">
                    <i class="fa-solid fa-boxes"></i>
                    <span><font color="white">Category</font></span>
                </a></li>

        <li style="--clr:rgb(200, 255, 0);">
              <a href="addtocart.php" target="f1">
                  <i class="fa-solid fa-shopping-cart"></i>
                  <span><font color="white">Cart</font></span>
              </a></li>



              
      <li style="--clr:rgb(239, 75, 121);">
                <a href="dreamcorner.php" target="f1">
                        <i class="fa-solid fa-car"></i>
                        <span><font color="white">Dreamcorner</font></span>
                    </a></li>
                    
      
    </ul>
</body>
</html>
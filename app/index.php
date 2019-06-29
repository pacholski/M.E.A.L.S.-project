<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> M.E.A.L.S. Project </title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="resources/css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <script src="resources/js/animation.js"></script>
    <script>
        function showTime(){
            setTimeout(function(){
            document.getElementById('btn').style.opacity = "1";
            document.getElementById('btn').style.visibility = "visible";
            },350);}
        $(document).ready(showTime());
        //////////////////////////
        
      
/*  
    $(document).ready(function(){

    $('btn').change(function(){
        //console.log(ajaxError());
    $.post( "random.php", function( data ) {

    alert( "Data Loaded: " + data );
    });
        });
    } 

*/
    </script>
</head>
<body>
    <header>
        M.E.A.L.S. - Project
    </header>
    <nav>
    <h1>
        <a class="typewrite" data-period="1000" data-type='["Wondering what to eat today?", "Let&#39;s find out.."]'>
      <span class="wrap"></span>
        </a>
        </h1>
    </nav>
    <article> 
       <form action="" method="post">
            <button id="btn" style="visibility:hidden;opacity:0;transition:visibility 1s linear,opacity 0.3s linear;">Find your meal!</button>
       </form>
    </article>
<div id="return">
    <?php 
    require("resources/php/random.php");
    echo "<h2>";
        echo "Your exemplary meal for today: <br /> <hr /> <br />";
        echo "<ul><li>".randMeal()."</li></ul>";
    echo "</h2>";
    
    ?>
    
</div>
</body>
</html>

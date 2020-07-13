<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles1.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Advanced</title>
</head>
<body>
    
<div class="container-fluid">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Advanced <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        </ul>
    </div>
    </nav><!--END NAV-->
    
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
    
    
    
    <div class="parallax_section2 parallax_image">
     <div class="row">
        
        
<?php
  function convertToCelsius($fahrenheit)
  {
    return number_format(($fahrenheit - 32) * 5 / 9, 1);
  }
  switch (true) {
    case !isset($_GET['fahrenheit']) || !is_numeric($_GET['fahrenheit']):
      $result = "No result available!";
      $image = "no-result.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) < 0:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is frosty!";
      $image = "frosty.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 0 && convertToCelsius($_GET['fahrenheit']) < 6:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is very cold!";
      $image = "very-cold.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 6 && convertToCelsius($_GET['fahrenheit']) < 11:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is cold!";
      $image = "cold.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 11 && convertToCelsius($_GET['fahrenheit']) < 16:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is pleasant!";
      $image = "pleasant.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 16 && convertToCelsius($_GET['fahrenheit']) < 21:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is warm!";
      $image = "warm.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 21:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is hot!";
      $image = "hot.jpg";
      break;
  }
  ?>
                
            <div class="card border-dark">
              <h3>Convert Fahrenheit to Celsius</h3>
              <hr>
              
                 
                    <p>Enter a temp in Fahrenheit to be converted into Celsius.</p>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fahrenheit</label>
                            <?php
                            if (!isset($_GET['fahrenheit']) || !is_numeric($_GET['fahrenheit']))
                            echo "<input type='number' step='0.1' class='form-control' name='fahrenheit'>";
                            else
                            echo "<input type='number' step='0.1' class='form-control' name='fahrenheit' value='" . $_GET['fahrenheit'] . "'>";
                                ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Convert</button>
                    </form>
                    <!--Bilder müssen noch in den Ordner um sie zu laden
                        <?php
                        echo "<img src='img/" . $image . "' class='card-img-top'>";
                        ?>-->
                        <p></p>
                        <p><?php
                        echo $result;
                        ?></p>
                <hr>
              </div><!--END CARD P3-->
          
            
      </div><!--END ROW-->
      
      
    </div><!--END PARALLAX 2-->
    
<div class="parallax_section1 parallax_image">
</div><!--END PARALLAX-->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Advanced <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mailto:andreas.pirkner@gmx.net" >Andreas Pirkner 2020</a>
        </li> 
        </ul>
    </div>
    </nav><!--END FOOTER-->
    
    
</div><!--END CONTAINER-->
 

    <script type="application/x-javascript" src="scripts/script.js"><![CDATA[
   //]]>
   </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>
<?php

if ($_POST["button"]=="Submit") 
{
    $servername = "9.127.37.189";
    $username = "root";
    $password = "IMS1bmsg";
    $dbname = "imsithelpcentral";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ( $mysqli->connect_error ) 
            {
              die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
            }

    $sql = "INSERT INTO imsithelpcentral ( Title, Date, Content ) VALUES ( '{$mysqli->real_escape_string($_POST['Title'])}', '{$mysqli->real_escape_string($_POST['Date'])}', '{$mysqli->real_escape_string($_POST['Content'])}' )";
            
            $insert = $mysqli->query($sql);
            $mysqli->close();
            header('Location: AnnouncementSubmitted.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  
  <style>div{border: solid 0px rgb(255, 253, 253);}</style> 
  
  <title>IMS IT Help Central</title>
</head>
<body>

<!-- Banner -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="index.html" style="font-family: Verdana, Geneva, Tahoma, sans-serif">IMS IT Help Central</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                  <a class="nav-link" href="index.html">Home |<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                  <a class="nav-link" href="https://apps.na.collabserv.com/communities/service/html/communityoverview?communityUuid=2a4b0d56-e061-462f-9cb9-d6333fd77e44" target="_blank">Our Services |</a>
                                </li>
                                <li class="nav-item active">
                                  <a class="nav-link disabled" href="https://apps.na.collabserv.com/wikis/home?lang=en-us#!/wiki/W7a1868949c06_49b8_87aa_5161cbb2f7b0/page/About%20SG%20CIO%20Services" target="_blank">About Us</a>
                                </li>
                              </ul>
        </div>                          

                                  <div class="col-sm-4">
                                      <ul class="list-inline text-right">
                                          <li class="list-inline-item">
                                              <a target="_blank" href="https://en-gb.facebook.com/login/">
                                                  <i class="fa fa-facebook fa-2x"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a target="_blank" href="https://twitter.com/?lang=en">
                                                  <i class="fa fa-twitter fa-2x"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a target="_blank" href="https://www.instagram.com/?hl=en">
                                                  <i class="fa fa-instagram fa-2x"></i>                                                
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                        </nav>    
    </div>           
</div>

<br>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="height: 25.5rem overflow: auto">
                <div class="card-header" style="font-weight: 600; font-size: 20px">
                              Enter Announcement
                </div>
                    <div class="row">
                        <div class="col-sm" style="font-family: Verdana, Geneva, Tahoma, sans-serif; padding-top: 30px; padding-left: 30px; padding-right: 30px">   
                              <form id="form1" name:"form1" method="post" action="announcement.php">
                                                        <div class="form-group" style: "padding-top: 30px; padding-left: 30px; padding-right: 30px">
                                                                <label for="experience_id">Date:</label>
                                                                    <textarea class="form-control" rows="1" name="Date" id="Date"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                                <label for="comments_id">Title:</label>
                                                                    <textarea class="form-control" rows="1" name="Title" id="Title"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                                <label for="experience_id">Content:</label>
                                                                    <textarea class="form-control" rows="5" name="Content" id="Content"></textarea>
                                                        </div>

                                                    <br>
                                        
                                                        <input type="submit" value="Submit">

                                                    <br><br>
                                        
                                </form>
                        </div>
                    </div>
        </div>  
      </div>
    </div>
</div>




<!-- CodeJS Script -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    

<script>
  // $('.carousel').carousel('cycle')
  $('.carousel').carousel({
  interval: 500
});
</script>


</body>
</html>
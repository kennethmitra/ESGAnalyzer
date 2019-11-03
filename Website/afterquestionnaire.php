<?php 
$env = $_POST['env'];
$work = $_POST['work'];
$prod = $_POST['prod'];
$cust = $_POST['cust'];
$lead = $_POST['lead'];
$comm = $_POST['comm'];
$jobs = $_POST['jobs'];

$recCompsStr = exec("python3 questionaire.py " . $comm.",".$cust.",".$env.",".$jobs.",".$lead.",".$prod.",".$work);
$recCompsArr = explode("/",$recCompsStr);
$recComp1 = explode(",",$recCompsArr[0]);
$recComp2 = explode(",",$recCompsArr[1]);
$recComp3 = explode(",",$recCompsArr[2]);
$recComp4 = explode(",",$recCompsArr[3]);
$recComp5 = explode(",",$recCompsArr[4]);
$recComp6 = explode(",",$recCompsArr[5]);
?>
<html>
    <head>
        <title>ESG Analyzer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            #navBar {
              height: 10vh;
              width: 100%;
            }
            #module {
              width: 500px;
            }

            #module #collapseExample.collapse:not(.show) {
              display: block;
              height: 3rem;
              overflow: hidden;
            }

            #module #collapseExample.collapsing {
              height: 3rem;
            }

            #module a.collapsed:after  {
                content: '+ Show More';
            }

            #module a:not(.collapsed):after {
                content: '- Show Less';
            }
            .card {
              margin:5px;
            }
            body {
            
              <?php include("gradient.php") ?>

              -webkit-animation: AnimationName 30s ease infinite;
              -moz-animation: AnimationName 30s ease infinite;
              animation: AnimationName 30s ease infinite;

              @-webkit-keyframes AnimationName {
                  0%{background-position:0% 50%}
                  50%{background-position:100% 50%}
                  100%{background-position:0% 50%}
              }
              @-moz-keyframes AnimationName {
                  0%{background-position:0% 50%}
                  50%{background-position:100% 50%}
                  100%{background-position:0% 50%}
              }
              @keyframes AnimationName {
                  0%{background-position:0% 50%}
                  50%{background-position:100% 50%}
                  100%{background-position:0% 50%}
              }
            }
        </style>
    </head>
        <body>
          <?php 
            include("navbar.html");
          ?>
            <div class="jumbotron jumbotron-fluid">
            <div id = "module"  class="container">
                <h1 class="display-4">Companies That Could Interest You</h1>
                <p class="collapse" id="collapseExample" aria-expanded="false">
                        We have compiled a list of companies that interes you based on your survey results. Take a look:</p>
                    <a role="button" class="collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    </a>
                <p class="lead">Here are a few companies that you may want to invest in</p>
            </div>
            </div>

            <div style="width:1000px; margin:0 auto;">
              <div class="card" style="width: 18rem; display: inline-block">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $recComp1[0]?></h5>
                      <p class="card-text"><?php  echo $recComp1[1]?></p>
                      <a href="/company.php?company=<?php echo  $recComp1[1]?>" class="btn btn-primary">Visit</a>
                  </div>
              </div>
              <div class="card" style="width: 18rem; display: inline-block">
                      <div class="card-body">
                      <h5 class="card-title"><?php  echo $recComp2[0]?></h5>
                      <p class="card-text"><?php  echo $recComp2[1]?></p>
                      <a href="/company.php?company=<?php  echo $recComp2[1]?>" class="btn btn-primary">Visit</a>
                      </div>
                  </div>
              <div class="card" style="width: 18rem; display: inline-block">  
                      <div class="card-body">
                        <h5 class="card-title"><?php  echo $recComp3[0]?></h5>
                        <p class="card-text"><?php echo  $recComp3[1]?></p>
                        <a href="/company.php?company=<?php  echo $recComp3[1]?>" class="btn btn-primary">Visit</a>
                      </div>
                  </div>
                <div class="card" style="width: 18rem; display: inline-block">  
                    <div class="card-body">
                      <h5 class="card-title"><?php  echo $recComp4[0]?></h5>
                      <p class="card-text"><?php echo  $recComp4[1]?></p>
                      <a href="/company.php?company=<?php  echo $recComp4[1]?>" class="btn btn-primary">Visit</a>
                    </div>
                </div>
              <div class="card" style="width: 18rem; display: inline-block">  
                    <div class="card-body">
                      <h5 class="card-title"><?php  echo $recComp5[0]?></h5>
                      <p class="card-text"><?php echo  $recComp5[1]?></p>
                      <a href="/company.php?company=<?php  echo $recComp5[1]?>" class="btn btn-primary">Visit</a>
                    </div>
                </div>
              <div class="card" style="width: 18rem; display: inline-block">  
                    <div class="card-body">
                      <h5 class="card-title"><?php  echo $recComp6[0]?></h5>
                      <p class="card-text"><?php echo  $recComp6[1]?></p>
                      <a href="/company.php?company=<?php  echo $recComp6[1]?>" class="btn btn-primary">Visit</a>
                    </div>
                </div>
                </div> 
            </div>
          </div>
          <?php 
            include("navbarScript.html");
          ?>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>
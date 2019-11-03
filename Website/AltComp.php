<?php 
    $companyName = "Microsoft";
    $companyTicker = "MSFT";
    if(isset($_GET['company'])){
        $companyName = $_GET['company'];
    }
    $companyInfoStr = exec("python3 getOther.py ".$companyName);
    $companyInfo = explode(",", $companyInfoStr);
    $companyName = $companyInfo[0];
    $companyTicker = $companyInfo[1];
?>
<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.3/examples/product/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Product example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .container {
        max-width: 960px;
      }

      /*
      * Custom translucent site header
      */

      .site-header {
        background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
      }
      .site-header a {
        color: #999;
        transition: ease-in-out color .15s;
      }
      .site-header a:hover {
        color: #fff;
        text-decoration: none;
      }

      /*
      * Dummy devices (replace them with your own or something else entirely!)
      */

      .product-device {
        position: absolute;
        right: 10%;
        bottom: -30%;
        width: 300px;
        height: 540px;
        background-color: #333;
        border-radius: 21px;
        -webkit-transform: rotate(30deg);
        transform: rotate(30deg);
      }

      .product-device::before {
        position: absolute;
        top: 10%;
        right: 10px;
        bottom: 10%;
        left: 10px;
        content: "";
        background-color: rgba(255, 255, 255, .1);
        border-radius: 5px;
      }

      .product-device-2 {
        top: -25%;
        right: auto;
        bottom: 0;
        left: 5%;
        background-color: #e5e5e5;
      }


      /*
      * Extra utilities
      */

      .flex-equal > * {
        -ms-flex: 1;
        flex: 1;
      }
      @media (min-width: 768px) {
        .flex-md-equal > * {
          -ms-flex: 1;
          flex: 1;
        }
      }

      .overflow-hidden { overflow: hidden; }

      #navBar {
        height: 10vh;
        width: 100%;
      }

      /* Collapsible */
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
    </style>
  </head>
  <body>
    <?php 
      include("navbar.html");
    ?>
<div id="module">
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-9 p-lg-1 mx-auto my-5">
      <h1 class="display-4 font-weight-normal"><?php echo $companyName . ": " . $companyTicker?></h1>
      <p class="lead font-weight-normal collapse" id="collapseExample" style="font-size: 1em;"><?php 
                              $outArr = array();
                              exec("python3 get_about.py " . $companyName, $outArr); 
                              foreach($outArr as $line) {
                                  echo($line);
                              }
                          ?></p>
      <a role="button" class="collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></a>
    </div>
  </div>
</div>

<?php
      $esgData = exec("python3 getESGStats.py " . $companyName);
      $esgDataArray = explode(",", $esgData);
      $companyName = $esgDataArray[0];
      $companyTicker = $esgDataArray[1];
      $companySector = $esgDataArray[2];
      $companyWEIGHTED_SCORE = $esgDataArray[3];
      $companyRANK = $esgDataArray[4];
      $companyEnv = round($esgDataArray[5]);
      $companyWork = round($esgDataArray[6]);
      $companyProd = round($esgDataArray[7]);
      $companyCust = round($esgDataArray[8]);
      $companyLead = round($esgDataArray[9]);
      $companyComm = round($esgDataArray[10]);
      $companyJobs = round($esgDataArray[11]);
      $industryWEIGHTED_SCORE = $esgDataArray[12];
      $industryRANK = $esgDataArray[13];
      $industryEnv = round($esgDataArray[14]);
      $industryWork = round($esgDataArray[15]);
      $industryProd = round($esgDataArray[16]);
      $industryCust = round($esgDataArray[17]);
      $industryLead = round($esgDataArray[18]);
      $industryComm = round($esgDataArray[19]);
      $industryJobs = round($esgDataArray[20]);
    ?>

<div id="box1" class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3" style="color: black">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">ESG Scores</h6>
        </div>
        <div class="card-body">
          <h4 class="small font-weight-bold">Customers <span class="float-right"><?php echo $companyCust ?></span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $companyCust ?>%" aria-valuenow="<?php echo $companyCust ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Products <span class="float-right"><?php echo $companyProd ?></span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $companyProd ?>%" aria-valuenow="<?php echo $companyCust ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Environment <span class="float-right"><?php echo $companyEnv ?></span></h4>
          <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: <?php echo $companyEnv ?>%" aria-valuenow="<?php echo $companyEnv ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Jobs <span class="float-right"><?php echo $companyJobs ?></span></h4>
          <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: <?php echo $companyJobs ?>%" aria-valuenow="<?php echo $companyJobs ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Communities<span class="float-right"><?php echo $companyComm ?></span></h4>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $companyComm ?>%" aria-valuenow="<?php echo $companyComm ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Company Leadership and Shareholders<span class="float-right"><?php echo $companyLead ?></span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $companyLead ?>%" aria-valuenow="<?php echo $companyLead ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Workers<span class="float-right"><?php echo $companyWork ?></span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $companyWork ?>%" aria-valuenow="<?php echo $companyWork ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>

    </div>
    
  </div>

  <div id="box2" class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div id="chartBox" class="chart-container" style="position: relative; height:60vh; width:80vw; vertical-align:middle;margin-top:10%">
      <canvas id="radarChart"></canvas>
    </div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div id="box4" class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="background: lightblue">
            <div id="tradingview_0e191"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget(
                    {
                    "width": Math.round(screen.width * 0.4),
                    "height": Math.round(screen.height * 0.5),
                    "symbol": "<?php echo $companyTicker ?>",
                    "interval": "D",
                    "timezone": "Etc/UTC",
                    "theme": "Light",
                    "style": "1",
                    "locale": "en",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "allow_symbol_change": true,
                    "container_id": "tradingview_0e191"
                    }
                );
            </script>
        </div>
        <!-- TradingView Widget END -->
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Similar Companies</h2>
      <p class="lead">Companies with similar stuff</p>

      <?php 
        $similarAllArr = exec("python3 get_similar.py ".$companyTicker);
        $threeCompanyStrs = explode("/",$similarAllArr);
        $companyOne = explode(",",$threeCompanyStrs[0]);
        $companyTwo = explode(",",$threeCompanyStrs[1]);
        $companyThree = explode(",",$threeCompanyStrs[2]);
      ?>

      <div style="width:1000px; margin:0 auto;">
              <div class="card" style="width: 18rem; display: inline-block">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $companyOne[0]?></h5>
                      <p class="card-text"><?php echo $companyOne[1] ?></p>
                      <p class="card-text"><?php echo $companyOne[2] ?></p>
                      <a href="/company.php?company=<?php echo $companyOne[1]?>" class="btn btn-primary">Explore</a>
                  </div>
              </div>
              <div class="card" style="width: 18rem; display: inline-block">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $companyTwo[0]?></h5>
                      <p class="card-text"><?php echo $companyTwo[1] ?></p>
                      <p class="card-text"><?php echo $companyTwo[2] ?></p>
                      <a href="/company.php?company=<?php echo $companyTwo[1]?>" class="btn btn-primary">Explore</a>
                  </div>
              </div>
              <div class="card" style="width: 18rem; display: inline-block">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $companyThree[0]?></h5>
                      <p class="card-text"><?php echo $companyThree[1] ?></p>
                      <p class="card-text"><?php echo $companyThree[2] ?></p>
                      <a href="/company.php?company=<?php echo $companyThree[1]?>" class="btn btn-primary">Explore</a>
                  </div>
              </div>
              </div> 
            </div>

    </div>
  </div>
</div>


<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
      <small class="d-block mb-3 text-muted">© 2017-2019</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Cool stuff</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Random feature</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Team feature</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Stuff for developers</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Another one</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Resource</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Resource name</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Another resource</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Business</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Education</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Government</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Team</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Locations</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Privacy</a></li>
        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/product/#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  var ctxR = document.getElementById("radarChart").getContext('2d');
  var myRadarChart = new Chart(ctxR, {
  type: 'radar',
  data: {
  labels: ["Workers", "Products", "Customers", "Leadership", "Communities", "Environment", "Jobs"],
  datasets: [{
  label: "<?php echo $companyName ?>",
  data: [<?php echo $companyWork ?>, 
  <?php echo $companyProd ?>,
  <?php echo $companyCust ?>,
  <?php echo $companyLead ?>, 
  <?php echo $companyComm ?>,
  <?php echo $companyEnv ?>,
  <?php echo $companyJobs ?>],
  backgroundColor: [
  'rgba(105, 0, 132, .2)',
  ],
  borderColor: [
  'rgba(200, 99, 132, .7)',
  ],
  borderWidth: 2
  },
  {
  label: "Industry Average",
  data: [<?php echo $industryWork ?>, 
  <?php echo $industryProd ?>,
  <?php echo $industryCust ?>,
  <?php echo $industryLead ?>, 
  <?php echo $industryComm ?>,
  <?php echo $industryEnv ?>,
  <?php echo $industryJobs ?>],
  backgroundColor: [
  'rgba(0, 250, 220, .2)',
  ],
  borderColor: [
  'rgba(0, 213, 132, .7)',
  ],
  borderWidth: 2
  }
  ]
  },
  options: {
  responsive: true,
  scale: {
      ticks: {
          beginAtZero: true,
          min: 0,
      }
  }
  },
  });
</script>
<?php 
    include("navbarScript.html");
?>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="./Product example · Bootstrap_files/bootstrap.bundle.min.js.download" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body></html>
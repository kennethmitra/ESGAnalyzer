<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.3/examples/checkout/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Find your match</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

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

      #navBar {
        height: 10vh;
        width: 100%;
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
  <body class="bg-light">
    <?php 
      include("navbar.html");
    ?>
    <div class="container">
  <div class="py-5 text-center">
    <h2>Questionnaire</h2>
    <p class="lead">Rate each category based on how important they are to you. Hover over each category for more information.</p>
  </div>

  <div class="row" style="margin-left:17%;">
    <div class="col-md-10 order-md-4 mb-6">
      
      <form style="width:90%; margin: auto;" action="/afterquestionnaire.php" method="post">
        <label for="env" data-toggle="tooltip" data-placement="right" title="Americans see the planet as a key stakeholder and agree that corporations play a role in protecting our planet -- minimizing pollution, reducing waste, and implementing robust environmental management systems.">
            Environment</label>
        <input type="range" class="custom-range" min="0" max="10" step="1" id="env" name="env">

        <label for="work" data-toggle="tooltip" data-placement="right" title="Workers are the top priority for just companies, according to the American public, who believe employees should receive benefits, earn fair and equal pay, and work in a safe environment.">
            Workers</label>
        <input type="range" class="custom-range" min="0" max="10" step="1" id="work" name="work">

        <label for="prod" data-toggle="tooltip" data-placement="right" title="The products and services offered by a company are an essential measure of its just business practices, according to Americans. They believe that companies should offer fair pricing, accurate labeling, and products that benefit health, environment, or society.">Products</label>
        <input type="range" class="custom-range" min="0" max="10" step="1" id="prod" name="prod">

        <label for="cust" data-toggle="tooltip" data-placement="right" title="Americans believe that companies should do right by their customers, whose weight is second only to workers' in our scoring model. According to our survey, fair treatment, customer privacy, and truthful advertising are essential to just business behavior.">Customers</label>
        <input type="range" class="custom-range" min="0" max="10" step="1" id="cust" name="cust">

        <label for="lead" data-toggle="tooltip" data-placement="right" title="Americans prioritize just and ethical leadership within companies, including fair CEO-to-Worker pay ratios and adherence to laws and regulations, as well as long-term financial growth and value creation for shareholders.">Leadership</label>
        <input type="range" class="custom-range" min="0" max="10" step="1" id="lead" name="lead">

        <label for="comm" data-toggle="tooltip" data-placement="right" title="Americans believe that companies should support the communities they impact, both at home and abroad. Through addressing the negative social impacts from supply chains (such as labor rights abuses and conflict minerals), supporting local suppliers, and giving back through charitable giving and volunteering, companies should foster and protect the communities they impact and the people who live there.">Community</label>
        <input type="range" class="custom-range" min="0" max="10" step="1" id="comm" name="comm">

        <label for="jobs" data-toggle="tooltip" data-placement="right" title="The creation of quality jobs is central to just business practices, with Americans agreeing that companies should create and maintain jobs both globally and in the United States.">Jobs</label>
        <input type="range" class="custom-range" min="0" max="10" step="1" id="jobs" name="jobs">
      
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2019 IntelliVest</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="https://getbootstrap.com/docs/4.3/examples/checkout/#">Privacy</a></li>
      <li class="list-inline-item"><a href="https://getbootstrap.com/docs/4.3/examples/checkout/#">Terms</a></li>
      <li class="list-inline-item"><a href="https://getbootstrap.com/docs/4.3/examples/checkout/#">Support</a></li>
    </ul>
  </footer>
</div>

<?php 
  include("navbarScript.html");
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>
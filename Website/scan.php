<!DOCTYPE html>
<html>
    <head>
        <title>IntelliVest | Scan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            #searchDiv {
                width: 80%;
                height: 50%;
                margin: auto;
                margin-top:10%;
            }
            #searchBox {
                border: 1px solid gray;
                background: rgba(255, 254, 254, 0.863);
            }
            #search {
                height: 10%;
                width: 100%;
            }
            #navBar {
                height: 10vh;
                width: 100%;
            }
            .nav-item :hover{
                border: 1px solid rgba(47, 232, 252, 0.99);
                border-radius:5px;
            }
            .btn {
                background: lightgray;
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
        <div class="container" id="search">
            <h1 style="text-align:center">Search by Barcode</h1>
            <div style="border-radius: 30px; border: 1px solid black; background:gray;width:400px;height:600px;margin-left:auto;margin-right:auto">
                <img style="width:80%;height:auto;margin-left:10%;margin-top:5%;margin-bottom:5%" src="https://barcode-labels.com/wp-content/uploads/2019/04/UPC-Bin-14-small-202x300.jpg" />
                <a href="/company.php?company=Target"> 
                    <div style="border-radius: 2; border: 1px solid black; background:black;width:350px;height:50px;margin-left:auto;margin-right:auto">
                        <p style="vertical-align:middle;text-align:center;color:white">Take Picture</p>
                    </div>
                </a>
            </div>
            <p style="text-align:center">Coming soon... Scan a barcode to get details on the company who made the product!</a>.</p>
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
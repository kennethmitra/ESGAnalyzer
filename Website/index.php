<!DOCTYPE html>
<html>
    <head>
        <title>ESG Analyzer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            #searchDiv {
                width: 80%;
                height: 50%;
                margin: auto;
                margin-top: 10%;
            }
            #searchBox {
                border: 1px solid gray;
                background: rgba(255, 254, 254, 0.863);
            }
            body {
                background: rgba(234, 255, 248, 0.966);
            }
            #search {
                height: 10%;
                width: 100%;
                margin-top: 10%;
            }
            #navBar {
                height: 10vh;
                background: gray;
                width: 100%;
            }
            .btn {
                background: lightgray;
            }
        </style>
    </head>
    <body>
        <?php 
            include("navbar.html");
        ?>
        <div class="heading">
            <h1 style="font-size: 10em; text-align: center">[Company Name]</h1>
        </div>
        <div class="container" id="search">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Company Name</span>
                </div>
                <input id="searchBox" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick="processInput()">Search</button>
                </div>
            </div>
        </div>
        <script>
            function processInput() {
                var input = document.getElementById("searchBox").value;
                window.location.href = "/company.php?company=" + input;
            }
            document.getElementById("searchBox").addEventListener("keyup", function(event) {
                // Number 13 is the "Enter" key on the keyboard
                if (event.keyCode === 13) {
                    // Cancel the default action, if needed
                    event.preventDefault();
                    // Trigger the button element with a click
                    processInput();
                }
            });
        </script>
        <?php 
            include("navbarScript.html");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>

</html>
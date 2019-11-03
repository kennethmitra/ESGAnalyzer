<!DOCTYPE html>
<html>
    <head>
        <title>ESG Analyzer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            * {
                border: 1px solid black;
            }
            #navBar {
                height: 10vh;
                background: gray;
                width: 100%;
            }
            #footer {
                width: 100%;
                height: 10vh;
                background: black; 
            }
            #questionnaire {
                width: 100%;
                height: 90vh;
                background: lightblue;
            }
        </style>
    </head>
    <body>
        <?php 
            include("navbar.html");
        ?>
        
        <div id="questionnaire">
            <h1>Questionnaire</h1>

            <form style="width:90%; margin: auto;">
                    <label for="customRange1">Environment</label>
                    <input type="range" class="custom-range" min="0" max="10" step="1" id="customRange1">

                    <label for="customRange2">Workers</label>
                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange2">

                    <label for="customRange3">Products</label>
                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">

                    <label for="customRange4">Customers</label>
                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange4">

                    <label for="customRange5">Leadership</label>
                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange5">

                    <label for="customRange6">Community</label>
                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange6">

                    <button class="btn btn-primary" type="submit">Submit form</button>
            </form>

        </div>

        <div id="footer">
            <h3 style="color: white">Footer</h3>
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
<!DOCTYPE html>
<html>
    <head>
        <title>ESG Analyzer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            * {
                /*border: 1px solid black;*/
            }
            #navBar {
                height: 10vh;
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
            <p>Rate each category based on how important they are to you. Hover over each category for more information</p>
                <form style="width:90%; margin: auto;">
                        <label for="customRange1" data-toggle="tooltip" data-placement="right" title="Americans see the planet as a key stakeholder and agree that corporations play a role in protecting our planet -- minimizing pollution, reducing waste, and implementing robust environmental management systems.">
                            Environment</label>
                        <input type="range" class="custom-range" min="0" max="10" step="1" id="customRange1">

                        <label for="customRange2" data-toggle="tooltip" data-placement="right" title="Workers are the top priority for just companies, according to the American public, who believe employees should receive benefits, earn fair and equal pay, and work in a safe environment.">
                            Workers</label>
                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange2">

                        <label for="customRange3" data-toggle="tooltip" data-placement="right" title="The products and services offered by a company are an essential measure of its just business practices, according to Americans. They believe that companies should offer fair pricing, accurate labeling, and products that benefit health, environment, or society.">Products</label>
                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">

                        <label for="customRange4" data-toggle="tooltip" data-placement="right" title="Americans believe that companies should do right by their customers, whose weight is second only to workers' in our scoring model. According to our survey, fair treatment, customer privacy, and truthful advertising are essential to just business behavior.">Customers</label>
                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange4">

                        <label for="customRange5" data-toggle="tooltip" data-placement="right" title="Americans prioritize just and ethical leadership within companies, including fair CEO-to-Worker pay ratios and adherence to laws and regulations, as well as long-term financial growth and value creation for shareholders.">Leadership</label>
                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange5">

                        <label for="customRange6" data-toggle="tooltip" data-placement="right" title="Americans believe that companies should support the communities they impact, both at home and abroad. Through addressing the negative social impacts from supply chains (such as labor rights abuses and conflict minerals), supporting local suppliers, and giving back through charitable giving and volunteering, companies should foster and protect the communities they impact and the people who live there.">Community</label>
                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange6">

                        <label for="customRange6" data-toggle="tooltip" data-placement="right" title="The creation of quality jobs is central to just business practices, with Americans agreeing that companies should create and maintain jobs both globally and in the United States.">Jobs</label>
                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange7">

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
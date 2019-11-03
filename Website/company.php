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
<html>
    <head>
        <title>ESG Analyzer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            * {
                /*border: 1px solid black;*/
            }
            #companyBox {
                width:100%;
                height:20%;
                background: yellow;
            }
            #numberBox {
                width: 70%;
                height: 80%; 
                float: left;
                background: green;
            }
            #chartBox {
                width: 30%;
                height: 80%;
                float: right;
                background: rgb(255, 255, 255);
            }
            #aboutCompany {
                width: 100%;
                height: auto;
                background: lightblue;
            }
            #firstSection {
                height: 50vh;
            }
            #navBar {
                height: 10vh;
                background: gray;
                width: 100%;
            }
            .score {
                font-size: 4em;
                text-align: right;
            }
            .scoreRange {
                font-size: 1.1em;
                text-align: left;
                vertical-align: bottom;
                padding-bottom: 20px;
            }
            .scoreBox {
                display: inline-block;
                margin-left: 3%;
                margin-right: 3%;
                width: auto;
            }
            #secondSection {
                width: 100%;
                height: 700px;
                background: orange;
            }
            #thirdSection {
                width: 100%;
                height: 10%;
                background: silver;
            }
            #footer {
                width: 100%;
                height: 10vh;
                background: black; 
            }
            .scoreClass {
                display: inline-block;
            }
            #scoreEncompasser {
                display: flex;
                flex-wrap: wrap;
            }
            .tradingview-widget-container {
                
            }
        </style>
    </head>
    <body>
        <?php 
            include("navbar.html");
        ?>
        <div id="firstSection">
            <div id="companyBox">
                <span style="font-size: 3em"><?php echo $companyName;?></span>
            </div>
            <div id="aboutCompany">
                <h1>About <?php echo $companyName ?></h1>
                    <p>
                        <?php 
                            $outArr = array();
                            exec("python3 get_about.py " . $companyName, $outArr); 
                            foreach($outArr as $line) {
                                echo($line);
                            }
                        ?>
                    </p>
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


            <div id="numberBox">
                <h1 style="display: block">ESG Scores</h1>
                <table width="100%">
                        <tr style="text-align: center;">
                            <th colspan="2">Environmental</th>
                            <th colspan="2">Workers</th>
                            <th colspan="2">Products</th>
                            <th colspan="2">Customers</th>
                            <th colspan="2">Leadership</th>
                            <th colspan="2">Community</th>
                            <th colspan="2">Jobs</th>
                        </tr>
                        <tr>
                            <td class="score"><?php echo $companyEnv ?></td>
                            <td class="scoreRange">/100</td>
                            <td class="score"><?php echo $companyWork ?></td>
                            <td class="scoreRange">/100</td>
                            <td class="score"><?php echo $companyProd ?></td>
                            <td class="scoreRange">/100</td>
                            <td class="score"><?php echo $companyCust ?></td>
                            <td class="scoreRange">/100</td>
                            <td class="score"><?php echo $companyLead ?></td>
                            <td class="scoreRange">/100</td>
                            <td class="score"><?php echo $companyComm ?></td>
                            <td class="scoreRange">/100</td>
                            <td class="score"><?php echo $companyJobs ?></td>
                            <td class="scoreRange">/100</td>
                        </tr>
                    </table>
            </div>

            <div id="chartBox">
                <canvas id="radarChart"></canvas>
            </div>
        </div>

        <hr style="border-color: blue; border-width:10px">

        <div id="secondSection">
            <h1>Financial Details</h1>
            <div id="financialDetails" style="width: 40%; height: auto; float: left; background: lightcoral">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>


            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="width:60%; height:60vh; float: right; background: lightblue">
                <div id="tradingview_0e191"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                        "width": Math.round(screen.width * 0.6),
                        "height": 465,
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
        <div id="thirdSection" style="width: 100%;">
            <h1>Similar Companies</h1>
        </div>
        <div id="footer">
            <h3 style="color: white">Footer</h3>
        </div>
        
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
    </body>

</html>
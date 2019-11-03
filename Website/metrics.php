<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>IntelliVest | Metrics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <style>
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

  <body>
    <?php 
        include("navbar.html");
    ?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">The Issues That Matter</h1>
          <p>Just Capital is a database that ranks companies on the issues Americans care about most, so they can then act armed with that knowledge. They identified seven unique metrics that mattered to Americans- Workers, Customers, Products, Environment, Jobs, Communities, and Company Leadership & Shareholders   </p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Workers</h2>
            <p>Workers are the top priority for just companies, according to the American public, who believe employees should receive benefits, earn fair and equal pay, and work in a safe environment. Studies conducted by Just Capital found that Americans prioritized worker issues as the top priority for just business behavior. Over a dozen components -- from living wage to work-life balance -- go into determining a company's score. 
            </p>
            <p>How we calculate Workers rankings:</p>
            <p>1.Provides workers with good benefits package (16%)
                Offers quality benefits, including health insurance, retirement planning, and paid time off.
                <p>
             <P>2.Pays a living wage (15%)
                Covers local needs for food, housing, and medical care.</P>   
                
                
                <p>3. Provides a safe workplace (14%)
                    Protects workers from hazardous or harmful conditions in the workplace.</p>
                
                <p>4. Does not discriminate in pay (13%)
                    Committed to pay equity across race, religion, gender, age, sexual orientation, and more.</p>
                
                <p>5. Pays a fair wage for industry and job level (13%)
                    Pays wages appropriate for qualifications, performance, and employee contribution.</p>
                
                <p>6. Adheres to equal opportunity workplace policies (12%)
                    Adheres to equal opportunity policies, regardless of race, religion, gender, age, and more.</p>
                
                <p>7. Promotes work-life balance (6%)
                    Supports flexible working arrangements and workplace health and wellness.</p>
                
                <p>8. Provides training and career development opportunities (6%)
                    Provides training and career development opportunities.
                    </p>
                <p>9.Creates a responsive and transparent workplace culture (4%)
                    Facilitates open communication and gives workers the freedom to engage in collective bargaining.</p>
            <div id="chartBox">
                <canvas id="DoughnutChart1"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <h2>Customers</h2>
            <p>Americans believe that companies should do right by their customers, whose weight is second only to workers' in our scoring model. According to our survey, fair treatment, customer privacy, and truthful advertising are essential to just business behavior. A company's customer score is determined by factors ranging from discrimination policies to privacy issues. Americans value a company’s customer service more than everything except workers’ treatment.  </p>
            <p>How we calculate Customers rankings:</p>
            <p>1.	Treats customers fairly (30%)
                Treats customers fairly and does not discriminate based on race, religion, gender, age, and more.
                </p>
            <p>2.	Protects customer privacy (25%)
                    Protects customer privacy and stores customer data securely
                    </p>
            <p>3.	Is truthful in advertising (24%)
                Does not mislead about its products or services in public communications.
                </p>
            <p>4.	Provides positive customer service experiences (21%)
                Communicates responsively and follows up to resolve customer issues.
                </p>
          </div>
          <div class="col-md-4">
            <h2>Products</h2>
            <p>The products and services offered by a company are an essential measure of its just business practices, according to Americans. They believe that companies should offer fair pricing, accurate labeling, and products that benefit health, environment, or society. n evaluating a company, we consider issues like quality, pricing, labeling, and product benefit or harm.</p>
            <p>How we calculate Products rankings:<p>
    
            </p>1.	Makes quality products (31%)
            Makes products that are reliable, safe, and durable.
            </p>
            <p>2.	Makes products that are beneficial to health, environment, or society (30%)
                Offers products or services that are beneficial to health, the environment, or society.
                </p>
            <p>3.	Provides fair pricing (21%)
                Provides products and services of good value and does not price unfairly.
            </p>
            <p>4.	Is accurate in labeling (18%)
                Provides products and services that have clear, accurate, and informative labeling.
                </p>

          </div>
          <div class="col-md-4">
            <h2>Environment</h2>
            <p>Americans see the planet as a key stakeholder and agree that corporations play a role in protecting our planet -- minimizing pollution, reducing waste, and implementing robust environmental management systems. Environmental issues make up a large percent of investors’ worries with practices like waste reduction and efficient energy usage forming the basis for how we evaluate companies. </p>
            <p>How we calculate Environment rankings:</p>
            <P>1.	Has policies and practices to protect the environment (36%)

                Has environmental management policies and systems in place to ensure best practices.
                </P>
                <P>2.	Uses natural resources efficiently and reduces waste (35%)
                    Uses natural resources efficiently and reduces product-related waste.
                    </P>
                    <P>3.	Minimizes pollution (29%)
                        Minimizes pollution and cleans up any environmental damage it causes.
                        </P>
          </div>
          <div class="col-md-4">
            <h2>Jobs</h2>
            <p>The creation of quality jobs is central to just business practices, with Americans agreeing that companies should create and maintain jobs both globally and in the United States. Distinct from Workers, the Jobs issue is evaluated based on the number of jobs a company maintains in the U.S., as well as its job creation efforts both domestically and globally. </p>
            <p>How we calculate Jobs rankings:</p>
            <P>1.	Creates jobs in the U.S. (50%)
                Creates jobs in its United States workforce.
                </P>
             <P>2.	Number of jobs in the U.S. (36%)
                    Has a sizeable United States workforce.
                    </P>
                    <P>3.	Creates jobs globally (13%)
                        Creates jobs in its worldwide workforce.</P>
          </div>
          <div class="col-md-4">
            <h2>Communities</h2>
            <p>Americans believe that companies should support the communities they impact, both at home and abroad. Through addressing the negative social impacts from supply chains (such as labor rights abuses and conflict minerals), supporting local suppliers, and giving back through charitable giving and volunteering, companies should foster and protect the communities they impact and the people who live there. A company's Communities score is determined by factors both local and global, from international supply chain management to the use of local products and resources.   </p>
            <p>How we calculate Communities rankings:</p>
            <P>
                1.	Manages the impacts of working with companies with abusive conditions (27%)
                Manages the impacts of working with companies with abusive conditions.
                </P>
                <P>2.	Avoids working with oppressive governments or authorities (22%)
                    Avoids working with oppressive governments or authorities.
                    </P>
                <P>3.	Maintains strong relationships with communities (14%)
                        Communicates effectively with its local communities and listens to community input.
                        
                        </P>
                <P>4.	Uses local products and resources (13%)
                            Commits to using local suppliers and materials, when available.
                            </P>
                <P>5.	Contributes to charitable causes and gives back to communities (13%)
                    Contributes to charities and supports its community through volunteering and community programs.
                    </P>

              <P>6.	Takes steps to avoid causing or contributing to international conflicts (11%)
                  Takes steps to avoid causing or contributing to international conflicts.
                  </P>
          </div>
          <div class="col-md-4">
            <h2>Company Leadership & Shareholders</h2>
            <p>Americans prioritize just and ethical leadership within companies, including fair CEO-to-Worker pay ratios and adherence to laws and regulations, as well as long-term financial growth and value creation for shareholders. Strong leadership and financial performance are the main factors that go into evaluating a company for Leadership & Shareholders. </p>
            <p>How we calculate Company Leadership & Shareholders rankings:</p>
            <P>1.	Follows laws and regulations (23%)
                Complies with international, federal, state, and local laws and regulations.
                </P>
            <P>2.	Leadership acts and communicates with integrity (21%)
                Leadership behaves ethically and takes responsibility for company-related issues.
                
                </P>
            <P>3.	Maintains integrity in financial reporting (20%)
                Reports all financial matters and keeps clear and accessible financial statements.
                </P>
            <P>4.	Pays fair share of taxes (15%)
                Pays taxes on U.S. income at a rate that is in line with most American companies.
                </P>
            <P>5.	Makes a profit over the long term (8%)
                Manages operations throughout the business cycle to remain profitable.
                </P>
            <P>6.	Pays CEO fairly compared to workers (8%)
                Pays CEO fairly and proportionately to its workers.
                </P>
            <P>7.	Provides investor return over the long term (6%)
                Provides long-term gains on shareholders' investments.
                </P>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>
    <script>
    var ctxR = document.getElementById("DoughnutChart1").getContext('2d');
    var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Benefit Package", "Living Wage", "Safe Workplace", "Indiscrimnatory Pay", "Fair Wage", "Equal Oppurtunities", "Work-Life Balance", "Career Devlopment Training", "Workplace Culture"],
      data: [16, 15, 14, 13, 13, 12, 6, 6, 4] 
    }
    options: options
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php 
        include("navbarScript.html");
    ?>
  </body>
</html>

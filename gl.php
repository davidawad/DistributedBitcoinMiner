<?php require_once 'credentials.class.php'; ?>
<!doctype html>
<html lang="en" class="no-js">
    <head>
      <title>Distributed Client Side Bitcoin Mining</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
      <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    </head>

    <body class="cd-about">
      <main>
    		<div class="cd-about cd-main-content">
    			<div>


    				<h1>"Mine with confidence"</h1>

            <div id="control">
          		<p> Mine Method:
            		<input type="radio" name="method" value="js" checked="checked"> Javascript
            		<input type="radio" name="method" value="jsworker"> WebWorker
                <input type="radio" name="method" value="webgl" id="webgl"> WebGL
            		<br/>WebGL Threads: <input id="threads" value="512"/>
            		<br/><input type="checkbox" id="testmode"> Testmode (Nonce will be found after ~18 khashes)
              </p>

              <br><br><button id="start" onclick="begin_mining(); document.getElementById('start').style.display = 'none';">Start</button>
            </div>

        		<br/>
        		Total Hashes: <input id="total-hashes"/><br/>

        		Hashes/Second: <input id="hashes-per-second"/><br/>

            Target/Difficulty: <input id="target"/><br/>
        		Golden Ticket: <input id="golden-ticket"/>

            <br>
        		<textarea id="info" style="width: 400px; height: 300px;"></textarea>

            <!-- Chart to render the hashes per second -->
            <canvas id="myChart" width="400" height="400"></canvas>

    				<p>
    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quas, reiciendis harum culpa dolorem illo pariatur corporis ullam mollitia non, maiores porro maxime quaerat laborum! Iusto debitis voluptates nemo tenetur, quas culpa aliquam facere eaque aut sapiente enim saepe omnis. Perspiciatis obcaecati modi laboriosam, earum aperiam quod, at cupiditate laudantium tempore a, consequatur ea officia? Explicabo, commodi recusandae libero aliquid blanditiis repudiandae natus, placeat sunt tempora velit modi quidem excepturi vitae aspernatur incidunt quisquam doloremque iusto ducimus iure facilis officiis. Iste ea, labore! At voluptates accusamus illum! Iste officia harum rem molestias quasi, distinctio dolores, accusamus asperiores sapiente debitis repellendus alias eligendi itaque fugit vel nam obcaecati reprehenderit ex saepe molestiae modi? Eaque, sit necessitatibus nesciunt quibusdam odio voluptatibus itaque libero porro quas minima veniam dolorem cum, rerum ducimus distinctio voluptas ut illo, velit, ad tempora ex? Id doloremque beatae, porro non voluptatum dicta, possimus, quidem, vel modi rem fuga consectetur quibusdam.
    				</p>

    				<p>
    					Explicabo, commodi recusandae libero aliquid blanditiis repudiandae natus, placeat sunt tempora velit modi quidem excepturi vitae aspernatur incidunt quisquam doloremque iusto ducimus iure facilis officiis. Iste ea, labore! At voluptates accusamus illum! Iste officia harum rem molestias quasi, distinctio dolores, accusamus asperiores sapiente debitis repellendus alias eligendi itaque fugit vel nam obcaecati reprehenderit ex saepe molestiae modi? Eaque, sit necessitatibus nesciunt quibusdam odio voluptatibus itaque libero porro quas minima veniam dolorem cum, rerum ducimus distinctio voluptas ut illo, velit, ad tempora ex? Id doloremque beatae, porro non voluptatum dicta, possimus, quidem, vel modi rem fuga consectetur quibusdam.
    				</p>

            <a class="cd-btn" href="index.html" data-type="page-transition">&#8592; Go back</a>

    			</div>
    		</div>
    	</main>

    <div class="cd-cover-layer"></div>
    <div class="cd-loading-bar"></div>

    <script>
       // bitcoind server credentials
       var g_user = '<? echo $username ?>';
       var g_password = '<? echo $password ?>';
       var g_url = '<? echo $url ?>';
       var g_port = '<? echo $port ?>';
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/miner/sha256.js"></script>
    <script src="js/miner/util.js"></script>
    <script src="js/miner/work-manager.js"></script>

    <script src="js/styles/chart.js"></script>
    <script src="js/styles/app.js"></script>
    <script src="js/styles/main.js"></script>
    <script src="js/styles/modernizr.js"></script>
  </body>
</html>

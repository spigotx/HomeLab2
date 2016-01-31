<?php require 'php/homelab-init.php'; ?>

<html>
<head>
	<title>HomeLab Network</title>
	<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<meta http-equiv="refresh" content="60" />

	<link rel="stylesheet" type="text/css" href="css/homelab.css">
</head>
<body>
<div id="content"  style="width:100%;">
    <table class="tg">
      <tr>
        <th class="tg-yw4l">
            <div class="square" style="background: #D8D8D8;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> Internet <br />
                    <strong>IP:</strong> 255.255.255.255<br />
                    <strong>Status:</strong> <?php echo GetServerStatus('IP_ADDRESS',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT); ?><br />
                </div>
            </div>    	
        </th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>    
        <th class="tg-yw4l"></th>     
        <th class="tg-yw4l">
          <div class="square" style="background: #D8D8D8;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> IP_ADDRESS<br />
                    <strong>Status:</strong> <?php echo GetServerStatus('IP_ADDRESS',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT); ?><br />
                </div>
            </div>
        </th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th> 
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>    
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>     
        <th class="tg-yw4l">
            <div class="square" style="background: #D8D8D8;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> IP_ADDRESS<br />
                    <strong>Status:</strong> <?php echo GetServerStatus('IP_ADDRESS',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>
        </th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>    
        <th class="tg-yw4l"></th>
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>     
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l">
            <div class="square" style="background: #D8D8D8;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME<br />
                    <strong>IP:</strong> IP_ADDRESS<br />
                    <strong>Status:</strong> <?php echo GetServerStatus('IP_ADDRESS',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>    
        </th> 
        <th class="tg-yw4l"></th>     
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l">
        </th>
        <th class="tg-yw4l">
             <div class="square" style="background: #D8D8D8;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME<br />
                    <strong>IP:</strong> IP_ADDRESS<br />
                    <strong>Status:</strong> <?php echo GetServerStatus('IP_ADDRESS',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>        
        </th> 
        <th class="tg-yw4l"></th>     
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l">
          <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>
        </th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>    
        </th> 
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>    
        </th>     
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>
        </th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>    
        </th> 
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>       
        </th>     
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>
        </th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>    
        </th> 
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>     
        </th>     
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>    
        </th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>             
        </th> 
        <th class="tg-yw4l"></th>     
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l">
            <div class="square" style="background: #FFFFFF;">
                <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
                    <strong>Name:</strong> PC_NAME <br />
                    <strong>IP:</strong> <?php echo gethostbyname('PC_NAME'); ?><br />
                    <strong>Status:</strong> <?php echo GetServerStatus('PC_NAME',PORT_NR); echo "\t"; echo GetLatency('IP_ADDRESS',PORT_NR); ?><br />
                </div>
            </div>
        </th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>     
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>     
      </tr>
      <tr>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>     
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th>
        <th class="tg-yw4l"></th> 
        <th class="tg-yw4l"></th>     
      </tr> 
    </table>
</div>

<!-- CLEAR FLOATS -->
<div style="clear: both; min-height: 10px;"></div>
<!-- CLEAR FLOATS -->      
       

<!-- Draw lines -->
<canvas id="RB2011ToInternet" width="650" height="5"></canvas>
  <script>
	var canvas = document.getElementById('RB2011ToInternet');
	var context = canvas.getContext('2d');

	context.beginPath();
	context.moveTo(0, 0);
	context.lineTo(650, 0);
	context.lineWidth = 5;
	// set line color
	context.strokeStyle = '#00cc00';
	context.stroke();
  </script>

<canvas id="CRS125ToRB2011" width="5" height="40"></canvas>
  <script>
	var canvas = document.getElementById('CRS125ToRB2011');
	var context = canvas.getContext('2d');

	context.beginPath();
	context.moveTo(0, 0);
	context.lineTo(0, 40);
	context.lineWidth = 5;
	// set line color
	context.strokeStyle = '#00cc00';
	context.stroke();
  </script>

<canvas id="ESXi01ToCRS125" width="400" height="45"></canvas>
  <script>
	var canvas = document.getElementById('ESXi01ToCRS125');
	var context = canvas.getContext('2d');

	context.beginPath();
	context.moveTo(450, 5);
	context.lineTo(0, 40);
	context.lineWidth = 3;
	// set line color
	context.strokeStyle = '#00cc00';
	context.stroke();
  </script>

<canvas id="ESXi02ToCRS125" width="380" height="45"></canvas>
  <script>
	var canvas = document.getElementById('ESXi02ToCRS125');
	var context = canvas.getContext('2d');

	context.beginPath();
	context.moveTo(0, 8);
	context.lineTo(380, 40);
	context.lineWidth = 3;
	// set line color
	context.strokeStyle = '#00cc00';
	context.stroke();
  </script>

<canvas id="ESXi01" width="650" height="400"></canvas>
  <script>
	var canvas = document.getElementById('ESXi01');
	var context = canvas.getContext('2d');
  </script>

<canvas id="ESXi02" width="650" height="400"></canvas>
  <script>
	var canvas = document.getElementById('ESXi02');
	var context = canvas.getContext('2d');
  </script>

<!-- LibreNMS graphs -->
<!-- WAN -->
<img id="RB2011WAN" class="minigraph-image" src="http://PC_NAME/graph.php?id=134&amp;from=<?php echo $past4HoursTime ?>&amp;to=<?php echo $actualTime ?>&amp;width=320&amp;height=155&amp;type=port_bits&amp;legend=yes&amp;absolute=1">

<!-- ESXi01 -->
<img id="ESXi01LAN" class="minigraph-image" src="http://PC_NAME/graph.php?id=108&amp;from=<?php echo $past4HoursTime ?>&amp;to=<?php echo $actualTime ?>&amp;width=320&amp;height=155&amp;type=port_bits&amp;legend=yes&amp;absolute=1">

<!-- ESXi02 -->
<img id="ESXi02LAN" class="minigraph-image" src="http://PC_NAME/graph.php?id=109&amp;from=<?php echo $past4HoursTime ?>&amp;to=<?php echo $actualTime ?>&amp;width=320&amp;height=155&amp;type=port_bits&amp;legend=yes&amp;absolute=1">

<!-- Online/Offline devices counter -->
<?php 
	$totalcount = $totaloff + $totalon; 
	$onOffCount = "($totalon/$totalcount)";
?>
	
<!-- Chage main page title -->
<script>
	window.parent.document.title =  "HomeLab Network <?php echo $onOffCount; ?>";
</script>
  
  
</body>
</html>
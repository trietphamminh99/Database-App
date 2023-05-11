
<div class="container-fluid">
    <div class= "row">
        <div class="col"> <h2 style="color: #80b387"><?= $title; ?></h2></div>
        <div class="col">
        <div class="col">
                        
                <form action="KPI" method="post">
                Asset ID: <input type="text" name="assetid">
                <input type="submit">
                </form>
                        
                </div>
        
          </div>
     </div>
 </div>


 <div class="container">
    <div class= "row">
        <div class="col">
            <canvas id = "KPIchart"></canvas>
        </div>
        <div class="col">
            <canvas id = "KPIlineChart"></canvas>
        </div>
        <div class="col">
            <canvas id = "KPIpieChart"></canvas>
        </div>
    </div>
    
</div>

<?php 
if (empty($_POST["assetid"]))
{
    $findA = 1;
}
else
{

    $findA = $_POST["assetid"];
}
 foreach ($assets as $a) {
   
        if ($a['id'] == $findA){
            $REC3 = $a['3YearRec']; 
            $FCI3 = $a['3YearFCI']; 
            $REC5 = $a['5YearRec']; 
            $FCI5 = $a['5YearFCI']; 
         
        }
    

 }
?>
<script>
    var pieChartColors = [
    "red",
    "#00aba9",
    "#2b5797",
    "#e8c3b9",
    "#1e7145"
    ];

   var pieChart = document.getElementById('KPIpieChart').getContext('2d');
   var pieChart = new Chart(pieChart, {
        type: 'pie',
        data:{
            labels:['3yearRec','3yearFCI','5yearRec','5yearFCI'],
            datasets:[{
                label:'Number',
                data:[
                    <?php echo $REC3?>,
                    <?php echo $FCI3?>,
                    <?php echo $REC5?>,
                    <?php echo $FCI5?> 
                ],
                backgroundColor: pieChartColors
            }]
        },
        option:{}

    });
    
   
   var chartLine = document.getElementById('KPIlineChart').getContext('2d');
   var chartLine = new Chart(chartLine, {
        type: 'line',
        data:{
            labels:['3yearRec','3yearFCI','5yearRec','5yearFCI'],
            datasets:[{
                label:'Number',
                data:[
                    <?php echo $REC3?>,
                    <?php echo $FCI3?>,
                    <?php echo $REC5?>,
                    <?php echo $FCI5?>
                
                  
                ],
                backgroundColor:'blue'
            }]
        },
        option:{}

    });
   


   let barChart = document.getElementById('KPIchart').getContext('2d');
   let BarChart = new Chart(barChart, {
        type: 'bar',
        data:{
            labels:['3yearRec','3yearFCI','5yearRec','5yearFCI'],
            datasets:[{
                label:'Number',
                data:[
                    <?php echo $REC3?>,
                    <?php echo $FCI3?>,
                    <?php echo $REC5?>,
                    <?php echo $FCI5?>
                
                  
                ],
                backgroundColor:'blue'
            }]
        },
        option:{}

    });
</script>



<div class="container-fluid">
    <div class= "row">
        <div class="col "> <h2 style="color: #80b387"><?= $title; ?></h2></div>
        
          <div class="col row">
             
               
                
                <div class="col">
                        
                        <button style="float: right"><a href="<?php echo base_url(); ?>element/create">Add</a></button>
                        <button style="float: right"><a href="<?php echo base_url(); ?>element/exportElement">Export</a></button>
                    
                </div>
          </div>
     </div>
 </div>

 <div class="row">
<div class="col">
<table class='table table-hover table-condensed table-striped'>

    <thead>
        <th scope="col">ID</th>
        <th scope="col">Asset</th>
        <th scope="col">Uniformat Code</th>
        <th scope="col">Uniformat Name</th>
        <th scope="col">Descriptor</th>
        <th scope="col">Last Assessment Date</th>
        <th scope="col">Active Assessment</th>
        <th scope="col">Installation Year</th>
        <th scope="col">Expected Useful Life</th>
        <th scope="col">Remaining Useful Life</th>
        <th scope="col">Renewal Year</th>
        <th scope="col">Condition</th>
        <th scope="col">Active Recommendations</th>
        <th scope="col">Quantity</th>
        <th scope="col">Difficulty Factor</th>
        <th scope="col">ElementCost</th>
        <th scope="col">VFA</th>
     
        </tr>
</thead>

<tbody>
    
    <?php foreach($elements as $e) : ?>
        
    <tr class="table-row" data-href="<?php echo site_url('/element/'.$e['id']); ?>"  onMouseOver="this.style.cursor='pointer'">
        <td> <?php echo $e['id']?></td>
        <td> <?php echo $e['Asset']?></td>
        <td> <?php echo $e['UniformatCode']?></td>
        <td> <?php echo $e['UniformatName']?></td>
        <td> <?php echo $e['Descriptor']?></td>
        <td> <?php echo $e['LastAssessmentDate']?></td>
        <td> <?php echo $e['ActiveAssessment']?></td>
        <td> <?php echo $e['InstallationYear']?></td>
        <td> <?php echo $e['ExpectedUsefulLife']?></td>
        <td> <?php echo $e['RemainingUsefulLife']?></td>
        <td> <?php echo $e['RenewalYear']?></td>
        <td> <?php echo $e['Condition']?></td>
        <td> <?php echo $e['ActiveRecommendations']?></td>
        <td> <?php echo $e['Quantity']?></td>
        <td> <?php echo $e['DifficultyFactor']?></td>
        <td> <?php echo $e['ElementCost']?></td>
        <td> <?php echo $e['VFA']?></td>
   

</tr>
    <?php endforeach; ?>

   <tbody>
</table>
  
</div>
</div>

<script type="text/javascript">
       
       document.addEventListener("DOMContentLoaded", () =>{
            const rows = document.querySelectorAll("tr[data-href]");
            
            rows.forEach(row => {
                row.addEventListener("click", ()=>{
                    window.location.href = row.dataset.href;
                });
            });
       });
       

</script>


<div class="container-fluid">
    <div class= "row">
        <div class="col "> <h2 style="color: #80b387"><?= $title; ?></h2></div>
        
          <div class="col row">
             
               
                
                <div class="col">
                        
                        <button style="float: right"><a href="<?php echo base_url(); ?>slam/create">Add</a></button>
                        <button style="float: right"><a href="<?php echo base_url(); ?>slam/exportExcel">Export</a></button>
                    
                </div>
          </div>
     </div>
 </div>


<div class="row">
<div class="col">
<table class='table table-hover table-condensed table-striped'>

    <thead>
        <th scope="col">ID</th>
        <th scope="col">Facility #</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">Province</th>
        <th scope="col">Full Condition Assessment Date</th>
        <th scope="col">Year Constructed</th>
        <th scope="col">Element Count</th>
        <th scope="col">Recommendation Count</th>
        <th scope="col">VFA Asset Id</th>
        <th scope="col">EReplacement Value</th>
        <th scope="col">3 Year Rec Costs</th>
        <th scope="col">3 Year FCI</th>
        <th scope="col">5 Year Rec Costs</th>
        <th scope="col">5 Year FCI</th>
        <th scope="col">10 Year Rec Costs</th>
        <th scope="col">10 Year FCI</th>
        </tr>
</thead>

<tbody>
    
    <?php foreach($assets as $a) : ?>
        
        <tr class="table-row" data-href="<?php echo site_url('/slam/'.$a['id']); ?>"  onMouseOver="this.style.cursor='pointer'">
        <td> <?php echo $a['id']?></td>
        <td> <a class="nav-link" href="<?php echo base_url(); ?>slam/assetsPage" rel="row-click"><?php echo $a['FacilityNo']?></a></td>
        <td> <?php echo $a['Name']?></td>
        <td> <?php echo $a['Address']?></td>
        <td> <?php echo $a['City']?></td>
        <td> <?php echo $a['Province']?></td>
        <td> <?php echo $a['FullConditionAssessmentDate']?></td>
        <td> <?php echo $a['YearConstructed']?></td>
        <td> <?php echo $a['ElementCount']?></td>
        <td> <?php echo $a['RecommendationCount']?></td>
        <td> <?php echo $a['VFA']?></td>
        <td> <?php echo $a['ReplacementValue']?></td>
        <td> <?php echo $a['3YearRec']?></td>
        <td> <?php echo $a['3YearFCI']?></td>
        <td> <?php echo $a['5YearRec']?></td>
        <td> <?php echo $a['5YearFCI']?></td>
        <td> <?php echo $a['10YearRec']?></td>
        <td> <?php echo $a['10YearFCI']?></td>

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





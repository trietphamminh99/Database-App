<h2 style="color: #80b387"><?= $title; ?></h2>

<?php echo validation_errors();?>

<div class ="container">
    <div class="form-group" >
        <!-- <form  action ='insertAssets.php' method="POST"> -->
        <?php echo form_open('element/create'); ?>


                <div class="form-group">
                    <label for="Asset_id">Asset id:</label>
                    <?php $attributes = 'class="form-control" id="Asset_id"';
                    echo form_dropdown('Asset_id', $assets, set_value('Asset_id'), $attributes); ?>
                    <span class="text-danger"><?php echo form_error('Asset_id'); ?></span>
                </div>
                 <!-- <label> Asset_id: </lable><br>
                <input type='text' class="form-control" name= 'Asset_id' id = "Asset_id"/><br><br> -->
                 
                <label > Asset: </lable><br>
                <input type='text' class="form-control input-lg" name= 'Asset' id = "Asset"/><br>
              
                <label> Uniformat Code: </lable><br>
                <input type='text' class="form-control" name= 'UniformatCode' id = "UniformatCode"/><br>

                <label> Uniformat Name: </lable><br>
                <input type='text' class="form-control" name= 'UniformatName' id = "UniformatName"/><br>

                <label> Descriptor: </lable><br>
                <input type='text' class="form-control" name= 'Descriptor' id = "Descriptor"/><br>

                <label> Last Assessment Date: </lable><br>
                <input type='text' class="form-control" name= 'LastAssessmentDate' id = "LastAssessmentDate"/><br>

                <label> Active Assessment: </lable><br>
                <input type='text' class="form-control" name= 'ActiveAssessment' id = "ActiveAssessment"/><br>

                <label> Installation Year: </lable><br>
                <input type='text' class="form-control" name= 'InstallationYear' id = "InstallationYear"/><br>
                <label> Expected Useful Life: </lable><br>
                <input type='text' class="form-control" name= 'ExpectedUsefulLife' id = "ExpectedUsefulLife"/><br>

                <label>Remaining Useful Life: </lable><br>
                <input type='text' class="form-control" name= 'RemainingUsefulLife' id = "RemainingUsefulLife"/><br>

                <label> Renewal Year: </lable><br>
                <input type='text' class="form-control" name= 'RenewalYear' id = "RenewalYear"/><br>
                <label> Condition: </lable><br>
                <input type='text' class="form-control" name= 'Condition' id = "Condition"/><br>

                <label> Active Recommendations: </lable><br>
                <input type='text' class="form-control" name= 'ActiveRecommendations' id = "ActiveRecommendations"/><br>

                <label> Quantity: </lable><br>
                <input type='text' class="form-control" name= 'Quantity' id = "Quantity"/><br>

                <label> DifficultyFactor: </lable><br>
                <input type='text' class="form-control" name= 'DifficultyFactor' id = "DifficultyFactor"/><br>
                <label> Element Cost: </lable><br>
                <input type='text' class="form-control" name= 'ElementCost' id = "ElementCost"/><br>

                <label> VFA: </lable><br>
                <input type='text' class="form-control" name= 'VFA' id = "VFA"/><br>

                <input type ='submit' name ='submit' id="submit"/>
            </from>
            
    </div>
</div>

<!-- bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script>
   function asset_id() {
        var mylist = document.getElementById("myList");
        document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
        }
</script>
</body>
</html>
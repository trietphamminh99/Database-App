<h2 style="color: #80b387"><?= $title; ?></h2>

<?php echo validation_errors();?>

<div class ="container">
    <div class="form-group" >
        <!-- <form  action ='insertAssets.php' method="POST"> -->
        <?php echo form_open('slam/update'); ?>
                 <input type='hidden' name= 'FacilityNo' id = "FacilityNo" value="<?php echo $assets['FacilityNo'];?>"/>
                <label> FacilityNo: </lable><br>
                <input type='text' class="form-control" name= 'FacilityNo' id = "FacilityNo" value="<?php echo $assets['FacilityNo'];?>"/><br><br>

                <label> Name: </lable><br>
                <input type='text' class="form-control" name= 'Name' id = "Name" value="<?php echo $assets['Name'];?>"/><br><br>

                <label> Address: </lable><br>
                <input type='text' class="form-control" name= 'Address' id = "Address" value="<?php echo $assets['Address'];?>"/><br><br>

                <label> City: </lable><br>
                <input type='text' class="form-control" name= 'City' id = "City" value="<?php echo $assets['City'];?>"/><br><br>

                <label> Province: </lable><br>
                <input type='text' class="form-control" name= 'Province' id = "Province" value="<?php echo $assets['Province'];?>"/><br><br>

                <label> Full Condition Assessment Date: </lable><br>
                <input type='text' class="form-control" name= 'FCAD' id = "FCAD" value="<?php echo $assets['FullConditionAssessmentDate'];?>"/><br><br>

                <label> Year Constructed: </lable><br>
                <input type='text' class="form-control" name= 'YearConstructed' id = "YearConstructed" value="<?php echo $assets['YearConstructed'];?>"/><br><br>
                
                <label> Element Count: </lable><br>
                <input type='text' class="form-control" name= 'ElementCount' id = "ElementCount" value="<?php echo $assets['ElementCount'];?>"/><br><br>

                <label> Recommendation Count: </lable><br>
                <input type='text' class="form-control" name= 'RecommendationCount' id = "RecommendationCount" value="<?php echo $assets['RecommendationCount'];?>"/><br><br>

                <label> VFA Asset Id: </lable><br>
                <input type='text' class="form-control" name= 'VFA' id = "VFA" value="<?php echo $assets['VFA'];?>"/><br><br>

                <label> Replacement Value: </lable><br>
                <input type='text' class="form-control" name= 'ReplacementValue' id = "ReplacementValue" value="<?php echo $assets['ReplacementValue'];?>"/><br><br>

                <label> 3 Year Rec Costs: </lable><br>
                <input type='text' class="form-control" name= '3YearRec' id = "3YearRec" value="<?php echo $assets['3YearRec'];?>"/><br><br>

                <label> 3 Year FCI: </lable><br>
                <input type='text' class="form-control" name= '3YearFCI' id = "3YearFCI" value="<?php echo $assets['3YearFCI'];?>"/><br><br>

                <label> 5 Year Rec Costs: </lable><br>
                <input type='text' class="form-control" name= '5YearRec' id = "5YearRec" value="<?php echo $assets['5YearRec'];?>"/><br><br>

                <label> 5 Year FCI: </lable><br>
                <input type='text' class="form-control" name= '5YearFCI' id = "5YearFCI" value="<?php echo $assets['5YearFCI'];?>"/><br><br>

                <label> 10 Year Rec Costs: </lable><br>
                <input type='text' class="form-control" name= '10YearRec' id = "10YearRec" value="<?php echo $assets['10YearRec'];?>"/><br><br>

                <label> 10 Year FCI: </lable><br>
                <input type='text' class="form-control" name= '10YearFCI' id = "10YearFCI" value="<?php echo $assets['10YearFCI'];?>"/><br><br>

                <input type ='submit' name ='submit' id="submit"/>
            </from>
            
    </div>
</div>

<!-- bootstrap -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
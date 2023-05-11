<h2><?= $title; ?></h2>

<?php echo validation_errors();?>

<div class ="container">
    <div class="form-group" >
        <!-- <form  action ='insertAssets.php' method="POST"> -->
        <?php echo form_open('slam/create'); ?>

                <label> FacilityNo: </lable><br>
                <input type='text' class="form-control" name= 'FacilityNo' id = "FacilityNo"/><br><br>

                <label> Name: </lable><br>
                <input type='text' class="form-control" name= 'Name' id = "Name"/><br><br>

                <label> Address: </lable><br>
                <input type='text' class="form-control" name= 'Address' id = "Address"/><br><br>

                <label> City: </lable><br>
                <input type='text' class="form-control" name= 'City' id = "City"/><br><br>

                <label> Province: </lable><br>
                <input type='text' class="form-control" name= 'Province' id = "Province"/><br><br>

                <label> Full Condition Assessment Date: </lable><br>
                <input type='text' class="form-control" name= 'FCAD' id = "FCAD"/><br><br>

                <label> Year Constructed: </lable><br>
                <input type='text' class="form-control" name= 'YearConstructed' id = "YearConstructed"/><br><br>
                
                <label> Element Count: </lable><br>
                <input type='text' class="form-control" name= 'ElementCount' id = "ElementCount"/><br><br>

                <label> Recommendation Count: </lable><br>
                <input type='text' class="form-control" name= 'RecommendationCount' id = "RecommendationCount"/><br><br>

                <label> VFA Asset Id: </lable><br>
                <input type='text' class="form-control" name= 'VFA' id = "VFA"/><br><br>

                <label> Replacement Value: </lable><br>
                <input type='text' class="form-control" name= 'ReplacementValue' id = "ReplacementValue"/><br><br>

                <label> 3 Year Rec Costs: </lable><br>
                <input type='text' class="form-control" name= '3YearRec' id = "3YearRec"/><br><br>

                <label> 3 Year FCI: </lable><br>
                <input type='text' class="form-control" name= '3YearFCI' id = "3YearFCI"/><br><br>

                <label> 5 Year Rec Costs: </lable><br>
                <input type='text' class="form-control" name= '5YearRec' id = "5YearRec"/><br><br>

                <label> 5 Year FCI: </lable><br>
                <input type='text' class="form-control" name= '5YearFCI' id = "5YearFCI"/><br><br>

                <label> 10 Year Rec Costs: </lable><br>
                <input type='text' class="form-control" name= '10YearRec' id = "10YearRec"/><br><br>

                <label> 10 Year FCI: </lable><br>
                <input type='text' class="form-control" name= '10YearFCI' id = "10YearFCI"/><br><br>

                <input type ='submit' name ='submit' id="submit"/>
            </from>
            
    </div>
</div>

<!-- bootstrap -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
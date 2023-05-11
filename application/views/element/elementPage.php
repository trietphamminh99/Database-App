<div class="container-fluid">
    <div class= "row">
        <div class="col"> <h2 style="color: #80b387"><?= $title; ?></h2></div>
        <div class="col">
          <a href="<?php echo base_url(); ?>element">
            <button class="position-absolute top-10 end-0">Close</button>
          </a>
          </div>
     </div>
 </div>
 <div class="container"> 
<div class ="row ng-scope">
 <div class="col-lg-6">
    <div class = "container">
        <div class = "row"> 
            <div class="col">
                <strong>Details</strong>
            </div>
            <div class="col" align="right">
                <a href="<?php echo base_url(); ?>element/create">
                    <button>Edit</button>
                </a>

            </div>
        </div>

        <!-- Assets -->
        <dl class = "row">
            <dt align="right" class = "small-lable col-4">Asset</dt>
            <dd class ="auto-width  col-8">
                <span><?php echo $elements['Asset'];?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- UniformatCode -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Uniformat Code</dt>
            <dd class ="auto-width col-8">
                <span>  <?php echo $elements['UniformatCode'].' - '.$elements['UniformatName']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Description -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Description</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['Description']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Last Assessed -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Last Assessed</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['LastAssessmentDate']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Last Merged -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Last Merged</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['LastMerged']?> </span>
                <hr/>
            </dd>
        </dl>
      
        <!-- Installation Year -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Installation Year</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['InstallationYear']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Expected Useful Life-->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Expected Useful Life</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['ExpectedUsefulLife']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Expected Renewal Year -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Expected Renewal Year</dt>
            <dd class ="auto-width col-8">
                <span>  <?php echo  $elements['RenewalYear']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Remaining Useful Life -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Remaining Useful Life</dt>
            <dd class ="auto-width col-8">
            <span>  <?php echo  $elements['RemainingUsefulLife']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Condition -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Condition</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['Condition']?> </span>
                <hr/>
            </dd>
        </dl>
      

        <!-- Condition Narrative -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Condition Narrative</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['ConditionNarrative']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Recommendations -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Recommendations</dt>
            <dd class ="auto-width col-8">
                <span> test value </span>
                <hr/>
            </dd>
        </dl>
        <!-- Quantity -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Quantity</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['Quantity']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Unit Cost -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Unit Cost</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['ConditionNarrative']?> </span>
                <hr/>
            </dd>
        </dl>
         <!-- Factors -->
         <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Unit Cost</dt>
            <dd class ="auto-width col-8">
            <span> test value </span>
                <hr/>
            </dd>
        </dl>
        <!-- Element Cost -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Element Cost</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $elements['ElementCost']?> </span>
                <hr/>
            </dd>
        </dl>
    </div>
    <div class="container">
        <div class = "row"> 
            <div class="col">
                <strong>Additional</strong>
            </div>
            <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Comments</dt>
            <dd class ="auto-width col-8">
                <span> test value </span>
                <hr/>
            </dd>
        </dl>
        </div>
    
    </div>
    
        
</div>


<!-- <style>
.small-lable{
   color: #666;
   font-size: 13px;
   font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
dl {
    margin: 0;
    padding: 4px 0 0 0;
    border-radius: 3px;
    transition: background-color 0.2s;
}
strong {
    margin-left: 8px;
    padding: 0 8px;
    background: #fff;
    font-size: 16px;
    line-height: 28px;
}
</style> -->



<div class="container-fluid">
    <div class= "row">
        <div class="col"> <h2 style="color: #80b387"><?= $title; ?></h2></div>
        <div class="col">
        <div class="col">
                        
                        <button style="float: right"><a href="<?php echo base_url(); ?>slam/create">Add</a></button>
                        <hr style="float: right">
                       
                

                        
                        </hr>
                </a>

                </div>
        
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
                
                        <div class = "row"> 
                            <div class="col">
                                <button ><a href="edit/<?php echo $assets['id'];?>"> Edit</a></button>
                            </div>
                            <div class="col" align="left">
                                <?php echo form_open('/slam/deleteAsset/'.$assets['id']); ?>
                                <button type="submit" value="Delete">Delete </button>
                            </div>        
                                    
                                
                        </div>
            </div>
        </div>

        <!-- FacilityNo -->
        <dl class = "row">
            <dt align="right" class = "small-lable col-4">Facility No</dt>
            <dd class ="auto-width  col-8">
                <span><?php echo $assets['FacilityNo'];?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- name -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Name</dt>
            <dd class ="auto-width col-8">
                <span>  <?php echo $assets['Name']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Description -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Description</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['Description']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Full Condition Assessment Date -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Full Condition Assessment Date</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['FullConditionAssessmentDate']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- GFA Footprint -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">GFA Footprint</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['GFA Footprint']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Floors -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Floors</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['Floors']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Basement Levels -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Basement Levels</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['Basement Levels']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Year Constructed -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Year Constructed</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['YearConstructed']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Replacement Value -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Replacement Value</dt>
            <dd class ="auto-width col-8">
                <span>  <?php echo $assets['ReplacementValue']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Regional Factor -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Regional Factor</dt>
            <dd class ="auto-width col-8">
                <span> test value </span>
                <hr/>
            </dd>
        </dl>
        <!-- Ownership Type -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Ownership Type</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['Ownership Type']?> </span>
                <hr/>
            </dd>
        </dl>
         <!-- Historical
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Use</dt>
            <dd class ="auto-width col-8">
                <span> test value </span>
                <hr/>
            </dd>
        </dl> -->

        <!-- Use -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Use</dt>
            <dd class ="auto-width col-8">
                <span> <?php echo $assets['Use']?> </span>
                <hr/>
            </dd>
        </dl>
        <!-- Comments -->
        <dl class = "row">
            <dt align="right" class = "small-lable  col-4">Comments</dt>
            <dd class ="auto-width col-8">
                <span> test value </span>
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
    <div class="container">
        <div class = "row"> 
            <div class="col">
                <strong>Executive Summary</strong>
            </div>
                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Elements</dt>
                <dd class ="auto-width col-8">
                    <span> <?php echo $assets['ElementCount']?> </span>
                    <hr/>
                </dd>
                </dl>

                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Recommendations</dt>
                    <dd class ="auto-width col-8">
                        <span> <?php echo $assets['RecommendationCount']?> </span>
                        <hr/>
                    </dd>
                </dl>
                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Replacement Value</dt>
                    <dd class ="auto-width col-8">
                        <span> <?php echo $assets['ReplacementValue']?> </span>
                        <hr/>
                    </dd>
                </dl>
                <dl class = "row">

                    <dt align="right" class = "small-lable  col">3 Year Costs</dt>
                    <dd class ="auto-width col">
                        <span> <?php echo $assets['3YearRec']?> </span>
                        <hr/>
                    </dd>

                    <dt align="right" class = "small-lable  col">3 Year FCI</dt>
                    <dd class ="auto-width col">
                        <span> <?php echo $assets['3YearFCI']?> </span>
                        <hr/>
                    </dd>
                </dl>
                <dl class = "row">

                    <dt align="right" class = "small-lable  col">5 Year Costs</dt>
                    <dd class ="auto-width col">
                        <span> <?php echo $assets['5YearRec']?> </span>
                        <hr/>
                    </dd>

                    <dt align="right" class = "small-lable  col">5 Year FCI</dt>
                    <dd class ="auto-width col">
                        <span><?php echo $assets['5YearFCI']?> </span>
                        <hr/>
                    </dd>
                </dl>
                <dl class = "row">

                    <dt align="right" class = "small-lable  col">10 Year Costs</dt>
                    <dd class ="auto-width col">
                        <span> <?php echo $assets['10YearRec']?> </span>
                        <hr/>
                    </dd>

                    <dt align="right" class = "small-lable  col">10 Year FCI</dt>
                    <dd class ="auto-width col">
                        <span> <?php echo $assets['10YearFCI']?> </span>
                        <hr/>
                    </dd>
                </dl>
        </div>
    
    </div>
        <div class="container">
            
                <div class="col">
                    <strong>History</strong>
                </div>
        </div>
    </div>
    <div class="col-lg-6 row">
    <div class="container">
        <div class = "row"> 
            <div class="col">
                <strong>Summary</strong>
                
            </div>
            <div class="col" align="right">
                <a href="<?php echo base_url(); ?>slam/create">
                    <button>Edit</button>
                </a>

            </div>

                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Overall Narrative</dt>
                <dd class ="auto-width col-8">
                    <span> test value </span>
                    <hr/>
                </dd>
                </dl>

                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Architectural Narrative</dt>
                    <dd class ="auto-width col-8">
                        <span> test value </span>
                        <hr/>
                    </dd>
                </dl>
                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Mechanical Narrative</dt>
                    <dd class ="auto-width col-8">
                        <span> test value </span>
                        <hr/>
                    </dd>
                </dl>
                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Electrical Narrative</dt>
                    <dd class ="auto-width col-8">
                        <span> test value </span>
                        <hr/>
                    </dd>
                </dl>
                <dl class = "row">
                    <dt align="right" class = "small-lable  col-4">Site Narrative</dt>
                    <dd class ="auto-width col-8">
                        <span> test value </span>
                        <hr/>
                    </dd>
                </dl>
                
        </div>
    </div>
</div>

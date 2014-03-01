<?php 
/*****************************
Variables used for the form
formView variables
id: what form it is
action: form action
method: form method
hiddencontrols: array of name and value for hidden controls. hidden controls have no settings.
formtitle: title of the form
controls: array of control objects. 
for this template caption and display properties are all that is required.
For more, see controls.html.php

Templates are formatted to make the HTML structure obvious, with PHP to insert information as needed
*/
?>
<div class="small-form">
<form method="post" id="<?php echo $this->id; ?>" action="<?php echo $this->action; ?>" class="form-horizontal" role="form">
    <div>
        <br />
         <input type="hidden" name="FormID" value="<?php echo $this->FormID; ?>" />
        <?php foreach ($this->hiddenControls as $hiddencontrol) { ?>
            <input type="hidden" name="<?php echo $hiddencontrol['name']; ?>" value="<?php echo $hiddencontrol['value'] ?>" />
        <?php
        } /* end of foreach loop */ ?>
            <?php
            if($this->formTitle) { ?>
                    <div class="form-group bg-primary">
                        <div class="col-xs-12">
                            <h4><?php echo $this->formTitle; ?></h4>
                        </div>
                    </div>
            <?php
            }
            foreach ($this->controls as $control) { ?>
                <div class="form-group">
                    <?php
                    if ($control->getType() == 'submit') { ?>
                        <div class="col-xs-12">
                            <?php $control->display(); ?>
                        </div>
                    <?php
                    } else { ?>
                        <div class="col-xs-4 control-label">
                            <label><?php echo $control->caption; ?></label>
                        </div>
                        <div class="col-xs-8">
                            <?php $control->display(); ?>
                        </div>
                    <?php
                    } ?>
                </div>
             <?php
             } // end of controls foreach loop 
             ?>
        <br />
    </div>
</form>
</div>
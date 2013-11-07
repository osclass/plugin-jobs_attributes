<h2><?php _e('Job details', 'jobs_attributes'); ?></h2>
<div class="jobs-attributes box">
    <div class="control-group">
         <label class="control-label" for="relation"><?php _e('Relation', 'jobs_attributes'); ?></label>
        <div class="controls">
		<?php
            if( Session::newInstance()->_getForm('pj_relation') != "" ) {
                $detail['e_relation'] = Session::newInstance()->_getForm('pj_relation');
            }
        ?>
         <label class="control-label" for="hire"><?php _e('Hire someone', 'jobs_attributes'); ?>  </label>
        <input type="radio" name="relation" value="HIRE" id="hire" <?php if( @$detail['e_relation'] == 'HIRE' ) { echo 'checked'; }; ?>/>
        <?php
            if( Session::newInstance()->_getForm('pj_relation') != "" ) {
                $detail['e_relation'] = Session::newInstance()->_getForm('pj_relation');
            }
        ?>
         <label class="control-label" for="look"><?php _e('Looking for a job', 'jobs_attributes'); ?></label>
        <input type="radio" name="relation" value="LOOK" id="look" <?php if( @$detail['e_relation'] == 'LOOK' ) { echo 'checked'; }; ?>/></div>
    </div>
    <div class="control-group">
        <?php
            if( Session::newInstance()->_getForm('pj_companyName') != "" ) {
                $detail['s_company_name'] = Session::newInstance()->_getForm('pj_companyName');
            }
        ?>
        
         <label class="control-label" for="companyName"><?php _e('Company name', 'jobs_attributes'); ?></label>
        <div class="controls"><input type="text" name="companyName" value="<?php echo @$detail['s_company_name']; ?>" /></div>
    </div>
    <div class="control-group">
        <?php
            if( Session::newInstance()->_getForm('pj_positionType') != "" ) {
                $detail['e_position_type'] = Session::newInstance()->_getForm('pj_positionType');
            }
        ?>
        
         <label class="control-label" for="positionType"><?php _e('Position type', 'jobs_attributes'); ?></label>
       <div class="controls"> <select name="positionType" id="positionType">
            <option value="UNDEF" <?php if( @$detail['e_position_type'] == 'UNDEF' ) { echo 'selected'; }; ?>><?php _e('Undefined', 'jobs_attributes'); ?></option>
            <option value="PART" <?php if( @$detail['e_position_type'] == 'PART' ) { echo 'selected'; }; ?>><?php _e('Part time', 'jobs_attributes'); ?></option>
            <option value="FULL" <?php if( @$detail['e_position_type'] == 'FULL' ) { echo 'selected'; }; ?>><?php _e('Full-time', 'jobs_attributes'); ?></option>
            <option value="TEMP" <?php if( @$detail['e_position_type'] == 'TEMP' ) { echo 'selected'; }; ?>><?php _e('Temporary', 'jobs_attributes'); ?></option>
        </select></div>
    </div>
    <div class="control-group">
        <?php
            if( Session::newInstance()->_getForm('pj_salaryText') != "" ) {
                $detail['e_relation'] = Session::newInstance()->_getForm('pj_salaryText');
            }
        ?>
        
         <label class="control-label" for="look"><?php _e('Salary', 'jobs_attributes'); ?></label>
        <div class="controls"><input type="text" name="salaryText" value="<?php echo @$detail['s_salary_text']; ?>" /></div>
    </div>

<?php
    $locales = osc_get_locales();
    if(count($locales)==1) {
        $locale = $locales[0];
?>
        <div class="control-group">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_desired_exp'] = $data[$locale['pk_c_code']]['desired_exp'];
                }
            ?>
            
         <label class="control-label" for="desired_exp"><?php _e('Desired experience', 'jobs_attributes'); ?></label>
            <div class="controls"><input type="text" name="<?php echo @$locale['pk_c_code']; ?>#desired_exp" id="desired_exp" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_exp']; ?>" /></div>
        </div>
        <div class="control-group">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_studies'] = $data[$locale['pk_c_code']]['studies'];
                }
            ?>
            
         <label class="control-label" for="studies"><?php _e('Studies', 'jobs_attributes'); ?></label>
            <div class="controls"><input type="text" name="<?php echo @$locale['pk_c_code']; ?>#studies" id="studies" value="<?php echo  @$detail['locale'][$locale['pk_c_code']]['s_studies']; ?>" /></div>
        </div>
        <div class="control-group">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_minimum_requirements'] = $data[$locale['pk_c_code']]['min_reqs'];
                }
            ?>
            
         <label class="control-label" for="min_reqs"><?php _e('Minimum requirements', 'jobs_attributes'); ?></label>
            <div class="controls"><textarea name="<?php echo @$locale['pk_c_code']; ?>#min_reqs" id="min_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_minimum_requirements']; ?></textarea></div>
        </div>
        <div class="control-group">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_desired_requirements'] = $data[$locale['pk_c_code']]['desired_reqs'];
                }
            ?>
            
         <label class="control-label" for="desired_reqs"><?php _e('Desired requirements', 'jobs_attributes'); ?></label>
            <div class="controls"><textarea name="<?php echo @$locale['pk_c_code']; ?>#desired_reqs" id="desired_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_requirements']; ?></textarea></div>
        </div>
        <div class="control-group">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_contract'] = $data[$locale['pk_c_code']]['contract'];
                }
            ?>
            
         <label class="control-label" for="contract"><?php _e('Contract', 'jobs_attributes'); ?></label>
            <div class="controls"><input type="text" name="<?php echo @$locale['pk_c_code']; ?>#contract" id="contract"  value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_contract']; ?>" /></div>
        </div>
        <div class="control-group">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_company_description'] = $data[$locale['pk_c_code']]['company_desc'];
                }
            ?>
            
         <label class="control-label" for="company_desc"><?php _e('Company description', 'jobs_attributes'); ?></label>
            <div class="controls"><textarea name="<?php echo @$locale['pk_c_code']; ?>#company_desc" id="company_desc" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_company_description']; ?></textarea></div>
        </div>
    <?php } else { ?>
        
        <?php foreach($locales as $locale) {?>
            
                <h2><?php echo $locale['s_name']; ?></h2>
                <div class="control-group">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_desired_exp'] = $data[$locale['pk_c_code']]['desired_exp'];
                        }
                    ?>
                    
         <label class="control-label" for="desired_exp"><?php _e('Desired experience', 'jobs_attributes'); ?></label>
                   <div class="controls"><input type="text" name="<?php echo @$locale['pk_c_code']; ?>#desired_exp" id="desired_exp" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_exp']; ?>" /></div>
                </div>
                <div class="control-group">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_studies'] = $data[$locale['pk_c_code']]['studies'];
                        }
                    ?>
                    
         <label class="control-label" for="studies"><?php _e('Studies', 'jobs_attributes'); ?></label>
                    <div class="controls"><input type="text" name="<?php echo @$locale['pk_c_code']; ?>#studies" id="studies" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_studies']; ?>" /></div>
                </div>
                <div class="control-group">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_minimum_requirements'] = $data[$locale['pk_c_code']]['min_reqs'];
                        }
                    ?>
                    
         <label class="control-label" for="min_reqs"><?php _e('Minimum requirements', 'jobs_attributes'); ?></label>
                    <div class="controls"><textarea name="<?php echo @$locale['pk_c_code']; ?>#min_reqs" id="min_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_minimum_requirements']; ?></textarea></div>
                </div>
                <div class="control-group">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_desired_requirements'] = $data[$locale['pk_c_code']]['desired_reqs'];
                        }
                    ?>
                    
         <label class="control-label" for="desired_reqs"><?php _e('Desired requirements', 'jobs_attributes'); ?></label>
                    <div class="controls"><textarea name="<?php echo @$locale['pk_c_code']; ?>#desired_reqs" id="desired_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_requirements']; ?></textarea></div>
                </div>
                <div class="control-group">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_contract'] = $data[$locale['pk_c_code']]['contract'];
                        }
                    ?>
                    
         <label class="control-label" for="contract"><?php _e('Contract', 'jobs_attributes'); ?></label>
                    <div class="controls"><input type="text" name="<?php echo @$locale['pk_c_code']; ?>#contract" id="contract" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_contract']; ?>" /></div>
                </div>
                <div class="control-group">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_company_description'] = $data[$locale['pk_c_code']]['company_desc'];
                        }
                    ?>
                    
         <label class="control-label" for="company_desc"><?php _e('Company description', 'jobs_attributes'); ?></label>
                    <div class="controls"><textarea name="<?php echo @$locale['pk_c_code']; ?>#company_desc" id="company_desc"><?php echo @$detail['locale'][$locale['pk_c_code']]['s_company_description']; ?></textarea></div>
                </div>
                <div style="clear:both;"></div>
            
        <?php } ?>
        </div>
<?php } ?>
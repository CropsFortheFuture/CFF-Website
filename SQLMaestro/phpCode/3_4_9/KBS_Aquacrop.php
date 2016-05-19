<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                                   ATTENTION!
 * If you see this message in your browser (Internet Explorer, Mozilla Firefox, Google Chrome, etc.)
 * this means that PHP is not properly installed on your web server. Please refer to the PHP manual
 * for more details: http://php.net/manual/install.php 
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */


    include_once dirname(__FILE__) . '/' . 'components/utils/check_utils.php';
    CheckPHPVersion();
    CheckTemplatesCacheFolderIsExistsAndWritable();


    include_once dirname(__FILE__) . '/' . 'phpgen_settings.php';
    include_once dirname(__FILE__) . '/' . 'database_engine/mysql_engine.php';
    include_once dirname(__FILE__) . '/' . 'components/page.php';
    include_once dirname(__FILE__) . '/' . 'authorization.php';

    function GetConnectionOptions()
    {
        $result = GetGlobalConnectionOptions();
        $result['client_encoding'] = 'utf8';
        GetApplication()->GetUserAuthorizationStrategy()->ApplyIdentityToConnectionOptions($result);
        return $result;
    }

    
    // OnGlobalBeforePageExecute event handler
    
    
    // OnBeforePageExecute event handler
    
    
    
    class KBS_AquacropPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Aquacrop`');
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('aqua_version');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('file_not_protect');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('fruit_grain_produ');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_sown');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('deter_crop_cycle');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('soil_water_depl_factor');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('base_temp_dev');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('upper_temp_dev');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('total_leng_gdd');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('soil_wate_p-exp-up');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('soil_wate_p-exp-lo');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shape_fact_wat_stress_can_exp');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('soil_wate_p - sto-up');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shape_fact_wat_stress_stom');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('soil_wate_p - sen-up');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shape_fact_wat_stress_can_sen');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('sum_eto_b4_sen');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('soil_wate_p - pol-up');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('vol_anaero');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('considered_soil_stress_calib');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('response_canop_exp');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('response_max_canop_cover');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('response_crop_wat_product');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('response_decline_canop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('response_stom_closure');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('minimum_air _pol');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('maximum_air _pol');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cold_stress_biomass');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('ec_satu_salinity');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('ec_satu_nogrow');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shape_fact_str');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_coef_com');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('decline_crop_coef_age');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('min_eff_root_depth');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('max_eff_root_depth');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shape_fact_root_exp');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('maximum_root_wat_extrct_topq');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('maximum_root_wat_extrct_botq');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('canop_cover_evapot');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('soil_cover_seedling_90p');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('plant_per_hect');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cgc_growth_coef');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('max_dec_canop_growth_coef');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('no_season_canop_growth_coef');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shp_fact_decr_cgc');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('max_can_cover_frac');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('canopy_decl_coef');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cald_sow_emerg');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cald_sow_rootdepth');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cald_sow_senes');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cald_sow_matur');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cald_sow_flow');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('length_flower');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_determi');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('excess_potential_fruit');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('buildup_harves_index');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('normal_wp_eto_co2');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('normal_wp_eto_co2_yield');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_perf_co2');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('ref_hi');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('increase_hi_wat_stres');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('no_impct_hi_restrict_veg');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('coef_neg_impact');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('max_increase_hi');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('gdd_sow_emerg');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('gdd_sow_max_root');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('gdd_sow_senec');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('gdd_sow_matur');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('gdd_sow_flower');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('gdd_length_flower');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cgc_ggdays_increase_cc_soil');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('cgc_ggdays_decrease_cc_ggd');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('gdd_buildup_hi');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('info_ID');
            $this->dataset->AddField($field, false);
            $this->dataset->AddLookupField('cropID', 'KBS_General', new IntegerField('cropID', null, null, true), new StringField('name_var_lndrce', 'cropID_name_var_lndrce', 'cropID_name_var_lndrce_KBS_General'), 'cropID_name_var_lndrce_KBS_General');
        }
    
        protected function DoPrepare() {
    
        }
    
        protected function CreatePageNavigator()
        {
            $result = new CompositePageNavigator($this);
            
            $partitionNavigator = new PageNavigator('pnav', $this, $this->dataset);
            $partitionNavigator->SetRowsPerPage(20);
            $result->AddPageNavigator($partitionNavigator);
            
            return $result;
        }
    
        public function GetPageList()
        {
            $currentPageCaption = $this->GetShortCaption();
            $result = new PageList($this);
            $result->AddGroup($this->RenderText('GENERAL'));
            $result->AddGroup($this->RenderText('Agro'));
            $result->AddGroup($this->RenderText('Food'));
            $result->AddGroup($this->RenderText('Biomass'));
            $result->AddGroup($this->RenderText('SocioEconomy'));
            $result->AddGroup($this->RenderText('Crop Specific'));
            $result->AddGroup($this->RenderText('Crop Metadata'));
            $result->AddGroup($this->RenderText('Global Info'));
            $result->AddGroup($this->RenderText('Aquacrop'));
            $result->AddGroup($this->RenderText('Ecocrop'));
            $result->AddGroup($this->RenderText('FPI'));
            if (GetCurrentUserGrantForDataSource('KBS_General')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General'), 'KBS_General.php', $this->RenderText('KBS General'), $currentPageCaption == $this->RenderText('KBS General'), false, $this->RenderText('GENERAL')));
            if (GetCurrentUserGrantForDataSource('ecocrop')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Ecocrop'), 'ecocrop.php', $this->RenderText('Ecocrop'), $currentPageCaption == $this->RenderText('Ecocrop'), false, $this->RenderText('Ecocrop')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Agroecology')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Agroecology'), 'KBS_Agro_Agroecology.php', $this->RenderText('KBS Agro Agroecology'), $currentPageCaption == $this->RenderText('KBS Agro Agroecology'), false, $this->RenderText('Agro')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Agronomic_Practices')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Agronomic Practices'), 'KBS_Agro_Agronomic_Practices.php', $this->RenderText('KBS Agro Agronomic Practices'), $currentPageCaption == $this->RenderText('KBS Agro Agronomic Practices'), false, $this->RenderText('Agro')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Cropping_System')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Cropping System'), 'KBS_Agro_Cropping_System.php', $this->RenderText('KBS Agro Cropping System'), $currentPageCaption == $this->RenderText('KBS Agro Cropping System'), false, $this->RenderText('Agro')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Fertiliser')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Fertiliser'), 'KBS_Agro_Fertiliser.php', $this->RenderText('KBS Agro Fertiliser'), $currentPageCaption == $this->RenderText('KBS Agro Fertiliser'), false, $this->RenderText('Agro')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Pathology')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Pathology'), 'KBS_Agro_Pathology.php', $this->RenderText('KBS Agro Pathology'), $currentPageCaption == $this->RenderText('KBS Agro Pathology'), false, $this->RenderText('Agro')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Resist_Tolerance')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Resist Tolerance'), 'KBS_Agro_Resist_Tolerance.php', $this->RenderText('KBS Agro Resist Tolerance'), $currentPageCaption == $this->RenderText('KBS Agro Resist Tolerance'), false, $this->RenderText('Agro')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Season')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Season'), 'KBS_Agro_Season.php', $this->RenderText('KBS Agro Season'), $currentPageCaption == $this->RenderText('KBS Agro Season'), false, $this->RenderText('Agro')));
            if (GetCurrentUserGrantForDataSource('KBS_Aquacrop')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Aquacrop'), 'KBS_Aquacrop.php', $this->RenderText('KBS Aquacrop'), $currentPageCaption == $this->RenderText('KBS Aquacrop'), false, $this->RenderText('Aquacrop')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Output')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Output'), 'KBS_Biomass_Output.php', $this->RenderText('KBS Biomass Output'), $currentPageCaption == $this->RenderText('KBS Biomass Output'), false, $this->RenderText('Biomass')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Proximate')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Proximate'), 'KBS_Biomass_Proximate.php', $this->RenderText('KBS Biomass Proximate'), $currentPageCaption == $this->RenderText('KBS Biomass Proximate'), false, $this->RenderText('Biomass')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Thermogravimetric')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Thermogravimetric'), 'KBS_Biomass_Thermogravimetric.php', $this->RenderText('KBS Biomass Thermogravimetric'), $currentPageCaption == $this->RenderText('KBS Biomass Thermogravimetric'), false, $this->RenderText('Biomass')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Ultimate')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Ultimate'), 'KBS_Biomass_Ultimate.php', $this->RenderText('KBS Biomass Ultimate'), $currentPageCaption == $this->RenderText('KBS Biomass Ultimate'), false, $this->RenderText('Biomass')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Uses')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Uses'), 'KBS_Biomass_Uses.php', $this->RenderText('KBS Biomass Uses'), $currentPageCaption == $this->RenderText('KBS Biomass Uses'), false, $this->RenderText('Biomass')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_CRO_File')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop CRO File'), 'KBS_Crop_CRO_File.php', $this->RenderText('KBS Crop CRO File'), $currentPageCaption == $this->RenderText('KBS Crop CRO File'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Diseases')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Diseases'), 'KBS_Crop_Diseases.php', $this->RenderText('KBS Crop Diseases'), $currentPageCaption == $this->RenderText('KBS Crop Diseases'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Germplasm')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Germplasm'), 'KBS_Crop_Germplasm.php', $this->RenderText('KBS Crop Germplasm'), $currentPageCaption == $this->RenderText('KBS Crop Germplasm'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Institute')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Institute'), 'KBS_Crop_Institute.php', $this->RenderText('KBS Crop Institute'), $currentPageCaption == $this->RenderText('KBS Crop Institute'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Local_Name')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Local Name'), 'KBS_Crop_Local_Name.php', $this->RenderText('KBS Crop Local Name'), $currentPageCaption == $this->RenderText('KBS Crop Local Name'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Pests')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Pests'), 'KBS_Crop_Pests.php', $this->RenderText('KBS Crop Pests'), $currentPageCaption == $this->RenderText('KBS Crop Pests'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Stat')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Stat'), 'KBS_Crop_Stat.php', $this->RenderText('KBS Crop Stat'), $currentPageCaption == $this->RenderText('KBS Crop Stat'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Synonyms')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Synonyms'), 'KBS_Crop_Synonyms.php', $this->RenderText('KBS Crop Synonyms'), $currentPageCaption == $this->RenderText('KBS Crop Synonyms'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_TTSR')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop TTSR'), 'KBS_Crop_TTSR.php', $this->RenderText('KBS Crop TTSR'), $currentPageCaption == $this->RenderText('KBS Crop TTSR'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Weeds')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Weeds'), 'KBS_Crop_Weeds.php', $this->RenderText('KBS Crop Weeds'), $currentPageCaption == $this->RenderText('KBS Crop Weeds'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Where_Researched')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Where Researched'), 'KBS_Crop_Where_Researched.php', $this->RenderText('KBS Crop Where Researched'), $currentPageCaption == $this->RenderText('KBS Crop Where Researched'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Where_UnderUtilised')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Where UnderUtilised'), 'KBS_Crop_Where_UnderUtilised.php', $this->RenderText('KBS Crop Where UnderUtilised'), $currentPageCaption == $this->RenderText('KBS Crop Where UnderUtilised'), false, $this->RenderText('Crop Specific')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Nutrient_Composition')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Nutrient Composition'), 'KBS_Food_Nutrient_Composition.php', $this->RenderText('KBS Food Nutrient Composition'), $currentPageCaption == $this->RenderText('KBS Food Nutrient Composition'), false, $this->RenderText('Food')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Nutrient_Minerals')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Nutrient Minerals'), 'KBS_Food_Nutrient_Minerals.php', $this->RenderText('KBS Food Nutrient Minerals'), $currentPageCaption == $this->RenderText('KBS Food Nutrient Minerals'), false, $this->RenderText('Food')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Nutrient_Vitamins')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Nutrient Vitamins'), 'KBS_Food_Nutrient_Vitamins.php', $this->RenderText('KBS Food Nutrient Vitamins'), $currentPageCaption == $this->RenderText('KBS Food Nutrient Vitamins'), false, $this->RenderText('Food')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Preparation')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Preparation'), 'KBS_Food_Preparation.php', $this->RenderText('KBS Food Preparation'), $currentPageCaption == $this->RenderText('KBS Food Preparation'), false, $this->RenderText('Food')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Growth_Cycle')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Growth Cycle'), 'KBS_General_Growth_Cycle.php', $this->RenderText('KBS General Growth Cycle'), $currentPageCaption == $this->RenderText('KBS General Growth Cycle'), false, $this->RenderText('GENERAL')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Growth_Habit')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Growth Habit'), 'KBS_General_Growth_Habit.php', $this->RenderText('KBS General Growth Habit'), $currentPageCaption == $this->RenderText('KBS General Growth Habit'), false, $this->RenderText('GENERAL')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Parts')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Parts'), 'KBS_General_Parts.php', $this->RenderText('KBS General Parts'), $currentPageCaption == $this->RenderText('KBS General Parts'), false, $this->RenderText('GENERAL')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Parts_Used')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Parts Used'), 'KBS_General_Parts_Used.php', $this->RenderText('KBS General Parts Used'), $currentPageCaption == $this->RenderText('KBS General Parts Used'), false, $this->RenderText('GENERAL')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Type')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Type'), 'KBS_General_Type.php', $this->RenderText('KBS General Type'), $currentPageCaption == $this->RenderText('KBS General Type'), false, $this->RenderText('GENERAL')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Usage')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Usage'), 'KBS_General_Usage.php', $this->RenderText('KBS General Usage'), $currentPageCaption == $this->RenderText('KBS General Usage'), false, $this->RenderText('GENERAL')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Authors')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Authors'), 'KBS_Global_Authors.php', $this->RenderText('KBS Global Authors'), $currentPageCaption == $this->RenderText('KBS Global Authors'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Country_LatLong')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Country LatLong'), 'KBS_Global_Country_LatLong.php', $this->RenderText('KBS Global Country LatLong'), $currentPageCaption == $this->RenderText('KBS Global Country LatLong'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Diseases')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Diseases'), 'KBS_Global_Diseases.php', $this->RenderText('KBS Global Diseases'), $currentPageCaption == $this->RenderText('KBS Global Diseases'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_GeoNames')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global GeoNames'), 'KBS_Global_GeoNames.php', $this->RenderText('KBS Global GeoNames'), $currentPageCaption == $this->RenderText('KBS Global GeoNames'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Google_PlaceID')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Google PlaceID'), 'KBS_Global_Google_PlaceID.php', $this->RenderText('KBS Global Google PlaceID'), $currentPageCaption == $this->RenderText('KBS Global Google PlaceID'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Institute')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Institute'), 'KBS_Global_Institute.php', $this->RenderText('KBS Global Institute'), $currentPageCaption == $this->RenderText('KBS Global Institute'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Parts_ID')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Parts ID'), 'KBS_Global_Parts_ID.php', $this->RenderText('KBS Global Parts ID'), $currentPageCaption == $this->RenderText('KBS Global Parts ID'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Pests')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Pests'), 'KBS_Global_Pests.php', $this->RenderText('KBS Global Pests'), $currentPageCaption == $this->RenderText('KBS Global Pests'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Weeds')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Weeds'), 'KBS_Global_Weeds.php', $this->RenderText('KBS Global Weeds'), $currentPageCaption == $this->RenderText('KBS Global Weeds'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('KBS_Metadata')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Metadata'), 'KBS_Metadata.php', $this->RenderText('KBS Metadata'), $currentPageCaption == $this->RenderText('KBS Metadata'), false, $this->RenderText('Crop Metadata')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Human')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Human'), 'KBS_SocioEconomy_Human.php', $this->RenderText('KBS SocioEconomy Human'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Human'), false, $this->RenderText('SocioEconomy')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Infrastructure')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Infrastructure'), 'KBS_SocioEconomy_Infrastructure.php', $this->RenderText('KBS SocioEconomy Infrastructure'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Infrastructure'), false, $this->RenderText('SocioEconomy')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Market')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Market'), 'KBS_SocioEconomy_Market.php', $this->RenderText('KBS SocioEconomy Market'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Market'), false, $this->RenderText('SocioEconomy')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Price')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Price'), 'KBS_SocioEconomy_Price.php', $this->RenderText('KBS SocioEconomy Price'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Price'), false, $this->RenderText('SocioEconomy')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Subsidy')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Subsidy'), 'KBS_SocioEconomy_Subsidy.php', $this->RenderText('KBS SocioEconomy Subsidy'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Subsidy'), false, $this->RenderText('SocioEconomy')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Water_Source')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Water Source'), 'KBS_SocioEconomy_Water_Source.php', $this->RenderText('KBS SocioEconomy Water Source'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Water Source'), false, $this->RenderText('SocioEconomy')));
            if (GetCurrentUserGrantForDataSource('KBS_Metadata_tables_columns')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Metadata Tables Columns'), 'KBS_Metadata_tables_columns.php', $this->RenderText('KBS Metadata Tables Columns'), $currentPageCaption == $this->RenderText('KBS Metadata Tables Columns'), false, $this->RenderText('Crop Metadata')));
            if (GetCurrentUserGrantForDataSource('food_plants_international')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Food Plants International'), 'food_plants_international.php', $this->RenderText('Food Plants International'), $currentPageCaption == $this->RenderText('Food Plants International'), false, $this->RenderText('FPI')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Accuracy_Color')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Accuracy Color'), 'KBS_Global_Accuracy_Color.php', $this->RenderText('KBS Global Accuracy Color'), $currentPageCaption == $this->RenderText('KBS Global Accuracy Color'), false, $this->RenderText('Global Info')));
            
            if ( HasAdminPage() && GetApplication()->HasAdminGrantForCurrentUser() ) {
              $result->AddGroup('Admin area');
              $result->AddPage(new PageLink($this->GetLocalizerCaptions()->GetMessageString('AdminPage'), 'phpgen_admin.php', $this->GetLocalizerCaptions()->GetMessageString('AdminPage'), false, false, 'Admin area'));
            }
            return $result;
        }
    
        protected function CreateRssGenerator()
        {
            return null;
        }
    
        protected function CreateGridSearchControl(Grid $grid)
        {
            $grid->UseFilter = true;
            $grid->SearchControl = new SimpleSearch('KBS_Aquacropssearch', $this->dataset,
                array('cropID_name_var_lndrce', 'aqua_version', 'file_not_protect', 'fruit_grain_produ', 'crop_sown', 'deter_crop_cycle', 'soil_water_depl_factor', 'base_temp_dev', 'upper_temp_dev', 'total_leng_gdd', 'soil_wate_p-exp-up', 'soil_wate_p-exp-lo', 'shape_fact_wat_stress_can_exp', 'soil_wate_p - sto-up', 'shape_fact_wat_stress_stom', 'soil_wate_p - sen-up', 'shape_fact_wat_stress_can_sen', 'sum_eto_b4_sen', 'soil_wate_p - pol-up', 'vol_anaero', 'considered_soil_stress_calib', 'response_canop_exp', 'response_max_canop_cover', 'response_crop_wat_product', 'response_decline_canop', 'response_stom_closure', 'minimum_air _pol', 'maximum_air _pol', 'cold_stress_biomass', 'ec_satu_salinity', 'ec_satu_nogrow', 'shape_fact_str', 'crop_coef_com', 'decline_crop_coef_age', 'min_eff_root_depth', 'max_eff_root_depth', 'shape_fact_root_exp', 'maximum_root_wat_extrct_topq', 'maximum_root_wat_extrct_botq', 'canop_cover_evapot', 'soil_cover_seedling_90p', 'plant_per_hect', 'cgc_growth_coef', 'max_dec_canop_growth_coef', 'no_season_canop_growth_coef', 'shp_fact_decr_cgc', 'max_can_cover_frac', 'canopy_decl_coef', 'cald_sow_emerg', 'cald_sow_rootdepth', 'cald_sow_senes', 'cald_sow_matur', 'cald_sow_flow', 'length_flower', 'crop_determi', 'excess_potential_fruit', 'buildup_harves_index', 'normal_wp_eto_co2', 'normal_wp_eto_co2_yield', 'crop_perf_co2', 'ref_hi', 'increase_hi_wat_stres', 'no_impct_hi_restrict_veg', 'coef_neg_impact', 'max_increase_hi', 'gdd_sow_emerg', 'gdd_sow_max_root', 'gdd_sow_senec', 'gdd_sow_matur', 'gdd_sow_flower', 'gdd_length_flower', 'cgc_ggdays_increase_cc_soil', 'cgc_ggdays_decrease_cc_ggd', 'gdd_buildup_hi', 'info_ID'),
                array($this->RenderText('CropID'), $this->RenderText('Aqua Version'), $this->RenderText('File Not Protect'), $this->RenderText('Fruit Grain Produ'), $this->RenderText('Crop Sown'), $this->RenderText('Deter Crop Cycle'), $this->RenderText('Soil Water Depl Factor'), $this->RenderText('Base Temp Dev'), $this->RenderText('Upper Temp Dev'), $this->RenderText('Total Leng Gdd'), $this->RenderText('Soil Wate P-exp-up'), $this->RenderText('Soil Wate P-exp-lo'), $this->RenderText('Shape Fact Wat Stress Can Exp'), $this->RenderText('Soil Wate P - Sto-up'), $this->RenderText('Shape Fact Wat Stress Stom'), $this->RenderText('Soil Wate P - Sen-up'), $this->RenderText('Shape Fact Wat Stress Can Sen'), $this->RenderText('Sum Eto B4 Sen'), $this->RenderText('Soil Wate P - Pol-up'), $this->RenderText('Vol Anaero'), $this->RenderText('Considered Soil Stress Calib'), $this->RenderText('Response Canop Exp'), $this->RenderText('Response Max Canop Cover'), $this->RenderText('Response Crop Wat Product'), $this->RenderText('Response Decline Canop'), $this->RenderText('Response Stom Closure'), $this->RenderText('Minimum Air  Pol'), $this->RenderText('Maximum Air  Pol'), $this->RenderText('Cold Stress Biomass'), $this->RenderText('Ec Satu Salinity'), $this->RenderText('Ec Satu Nogrow'), $this->RenderText('Shape Fact Str'), $this->RenderText('Crop Coef Com'), $this->RenderText('Decline Crop Coef Age'), $this->RenderText('Min Eff Root Depth'), $this->RenderText('Max Eff Root Depth'), $this->RenderText('Shape Fact Root Exp'), $this->RenderText('Maximum Root Wat Extrct Topq'), $this->RenderText('Maximum Root Wat Extrct Botq'), $this->RenderText('Canop Cover Evapot'), $this->RenderText('Soil Cover Seedling 90p'), $this->RenderText('Plant Per Hect'), $this->RenderText('Cgc Growth Coef'), $this->RenderText('Max Dec Canop Growth Coef'), $this->RenderText('No Season Canop Growth Coef'), $this->RenderText('Shp Fact Decr Cgc'), $this->RenderText('Max Can Cover Frac'), $this->RenderText('Canopy Decl Coef'), $this->RenderText('Cald Sow Emerg'), $this->RenderText('Cald Sow Rootdepth'), $this->RenderText('Cald Sow Senes'), $this->RenderText('Cald Sow Matur'), $this->RenderText('Cald Sow Flow'), $this->RenderText('Length Flower'), $this->RenderText('Crop Determi'), $this->RenderText('Excess Potential Fruit'), $this->RenderText('Buildup Harves Index'), $this->RenderText('Normal Wp Eto Co2'), $this->RenderText('Normal Wp Eto Co2 Yield'), $this->RenderText('Crop Perf Co2'), $this->RenderText('Ref Hi'), $this->RenderText('Increase Hi Wat Stres'), $this->RenderText('No Impct Hi Restrict Veg'), $this->RenderText('Coef Neg Impact'), $this->RenderText('Max Increase Hi'), $this->RenderText('Gdd Sow Emerg'), $this->RenderText('Gdd Sow Max Root'), $this->RenderText('Gdd Sow Senec'), $this->RenderText('Gdd Sow Matur'), $this->RenderText('Gdd Sow Flower'), $this->RenderText('Gdd Length Flower'), $this->RenderText('Cgc Ggdays Increase Cc Soil'), $this->RenderText('Cgc Ggdays Decrease Cc Ggd'), $this->RenderText('Gdd Buildup Hi'), $this->RenderText('Info ID')),
                array(
                    '=' => $this->GetLocalizerCaptions()->GetMessageString('equals'),
                    '<>' => $this->GetLocalizerCaptions()->GetMessageString('doesNotEquals'),
                    '<' => $this->GetLocalizerCaptions()->GetMessageString('isLessThan'),
                    '<=' => $this->GetLocalizerCaptions()->GetMessageString('isLessThanOrEqualsTo'),
                    '>' => $this->GetLocalizerCaptions()->GetMessageString('isGreaterThan'),
                    '>=' => $this->GetLocalizerCaptions()->GetMessageString('isGreaterThanOrEqualsTo'),
                    'ILIKE' => $this->GetLocalizerCaptions()->GetMessageString('Like'),
                    'STARTS' => $this->GetLocalizerCaptions()->GetMessageString('StartsWith'),
                    'ENDS' => $this->GetLocalizerCaptions()->GetMessageString('EndsWith'),
                    'CONTAINS' => $this->GetLocalizerCaptions()->GetMessageString('Contains')
                    ), $this->GetLocalizerCaptions(), $this, 'CONTAINS'
                );
        }
    
        protected function CreateGridAdvancedSearchControl(Grid $grid)
        {
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Aquacropasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_General`');
            $field = new IntegerField('cropID', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('name_var_lndrce');
            $lookupDataset->AddField($field, false);
            $field = new StringField('name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('sci_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('fam_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('genus_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('variety');
            $lookupDataset->AddField($field, false);
            $field = new StringField('landrace');
            $lookupDataset->AddField($field, false);
            $field = new StringField('plant');
            $lookupDataset->AddField($field, false);
            $field = new StringField('kbs_gen_others');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('name_var_lndrce', GetOrderTypeAsSQL(otAscending));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateLookupSearchInput('cropID', $this->RenderText('CropID'), $lookupDataset, 'cropID', 'name_var_lndrce', false, 8));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('aqua_version', $this->RenderText('Aqua Version')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('file_not_protect', $this->RenderText('File Not Protect')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('fruit_grain_produ', $this->RenderText('Fruit Grain Produ')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_sown', $this->RenderText('Crop Sown')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('deter_crop_cycle', $this->RenderText('Deter Crop Cycle')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('soil_water_depl_factor', $this->RenderText('Soil Water Depl Factor')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('base_temp_dev', $this->RenderText('Base Temp Dev')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('upper_temp_dev', $this->RenderText('Upper Temp Dev')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('total_leng_gdd', $this->RenderText('Total Leng Gdd')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('soil_wate_p-exp-up', $this->RenderText('Soil Wate P-exp-up')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('soil_wate_p-exp-lo', $this->RenderText('Soil Wate P-exp-lo')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('shape_fact_wat_stress_can_exp', $this->RenderText('Shape Fact Wat Stress Can Exp')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('soil_wate_p - sto-up', $this->RenderText('Soil Wate P - Sto-up')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('shape_fact_wat_stress_stom', $this->RenderText('Shape Fact Wat Stress Stom')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('soil_wate_p - sen-up', $this->RenderText('Soil Wate P - Sen-up')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('shape_fact_wat_stress_can_sen', $this->RenderText('Shape Fact Wat Stress Can Sen')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('sum_eto_b4_sen', $this->RenderText('Sum Eto B4 Sen')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('soil_wate_p - pol-up', $this->RenderText('Soil Wate P - Pol-up')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('vol_anaero', $this->RenderText('Vol Anaero')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('considered_soil_stress_calib', $this->RenderText('Considered Soil Stress Calib')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('response_canop_exp', $this->RenderText('Response Canop Exp')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('response_max_canop_cover', $this->RenderText('Response Max Canop Cover')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('response_crop_wat_product', $this->RenderText('Response Crop Wat Product')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('response_decline_canop', $this->RenderText('Response Decline Canop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('response_stom_closure', $this->RenderText('Response Stom Closure')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('minimum_air _pol', $this->RenderText('Minimum Air  Pol')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('maximum_air _pol', $this->RenderText('Maximum Air  Pol')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cold_stress_biomass', $this->RenderText('Cold Stress Biomass')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ec_satu_salinity', $this->RenderText('Ec Satu Salinity')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ec_satu_nogrow', $this->RenderText('Ec Satu Nogrow')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('shape_fact_str', $this->RenderText('Shape Fact Str')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_coef_com', $this->RenderText('Crop Coef Com')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('decline_crop_coef_age', $this->RenderText('Decline Crop Coef Age')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('min_eff_root_depth', $this->RenderText('Min Eff Root Depth')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('max_eff_root_depth', $this->RenderText('Max Eff Root Depth')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('shape_fact_root_exp', $this->RenderText('Shape Fact Root Exp')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('maximum_root_wat_extrct_topq', $this->RenderText('Maximum Root Wat Extrct Topq')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('maximum_root_wat_extrct_botq', $this->RenderText('Maximum Root Wat Extrct Botq')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('canop_cover_evapot', $this->RenderText('Canop Cover Evapot')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('soil_cover_seedling_90p', $this->RenderText('Soil Cover Seedling 90p')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('plant_per_hect', $this->RenderText('Plant Per Hect')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cgc_growth_coef', $this->RenderText('Cgc Growth Coef')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('max_dec_canop_growth_coef', $this->RenderText('Max Dec Canop Growth Coef')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('no_season_canop_growth_coef', $this->RenderText('No Season Canop Growth Coef')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('shp_fact_decr_cgc', $this->RenderText('Shp Fact Decr Cgc')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('max_can_cover_frac', $this->RenderText('Max Can Cover Frac')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('canopy_decl_coef', $this->RenderText('Canopy Decl Coef')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cald_sow_emerg', $this->RenderText('Cald Sow Emerg')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cald_sow_rootdepth', $this->RenderText('Cald Sow Rootdepth')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cald_sow_senes', $this->RenderText('Cald Sow Senes')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cald_sow_matur', $this->RenderText('Cald Sow Matur')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cald_sow_flow', $this->RenderText('Cald Sow Flow')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('length_flower', $this->RenderText('Length Flower')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_determi', $this->RenderText('Crop Determi')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('excess_potential_fruit', $this->RenderText('Excess Potential Fruit')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('buildup_harves_index', $this->RenderText('Buildup Harves Index')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('normal_wp_eto_co2', $this->RenderText('Normal Wp Eto Co2')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('normal_wp_eto_co2_yield', $this->RenderText('Normal Wp Eto Co2 Yield')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_perf_co2', $this->RenderText('Crop Perf Co2')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref_hi', $this->RenderText('Ref Hi')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('increase_hi_wat_stres', $this->RenderText('Increase Hi Wat Stres')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('no_impct_hi_restrict_veg', $this->RenderText('No Impct Hi Restrict Veg')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('coef_neg_impact', $this->RenderText('Coef Neg Impact')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('max_increase_hi', $this->RenderText('Max Increase Hi')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('gdd_sow_emerg', $this->RenderText('Gdd Sow Emerg')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('gdd_sow_max_root', $this->RenderText('Gdd Sow Max Root')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('gdd_sow_senec', $this->RenderText('Gdd Sow Senec')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('gdd_sow_matur', $this->RenderText('Gdd Sow Matur')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('gdd_sow_flower', $this->RenderText('Gdd Sow Flower')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('gdd_length_flower', $this->RenderText('Gdd Length Flower')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cgc_ggdays_increase_cc_soil', $this->RenderText('Cgc Ggdays Increase Cc Soil')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cgc_ggdays_decrease_cc_ggd', $this->RenderText('Cgc Ggdays Decrease Cc Ggd')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('gdd_buildup_hi', $this->RenderText('Gdd Buildup Hi')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('info_ID', $this->RenderText('Info ID')));
        }
    
        protected function AddOperationsColumns(Grid $grid)
        {
            $actionsBandName = 'actions';
            $grid->AddBandToBegin($actionsBandName, $this->GetLocalizerCaptions()->GetMessageString('Actions'), true);
            if ($this->GetSecurityInfo()->HasViewGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('View'), OPERATION_VIEW, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
            }
            if ($this->GetSecurityInfo()->HasEditGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Edit'), OPERATION_EDIT, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
                $column->OnShow->AddListener('ShowEditButtonHandler', $this);
            }
            if ($this->GetSecurityInfo()->HasDeleteGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Delete'), OPERATION_DELETE, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
                $column->OnShow->AddListener('ShowDeleteButtonHandler', $this);
                $column->SetAdditionalAttribute('data-modal-delete', 'true');
                $column->SetAdditionalAttribute('data-delete-handler-name', $this->GetModalGridDeleteHandler());
            }
            if ($this->GetSecurityInfo()->HasAddGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Copy'), OPERATION_COPY, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
            }
        }
    
        protected function AddFieldColumns(Grid $grid)
        {
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for aqua_version field
            //
            $column = new TextViewColumn('aqua_version', 'Aqua Version', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for file_not_protect field
            //
            $column = new TextViewColumn('file_not_protect', 'File Not Protect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for fruit_grain_produ field
            //
            $column = new TextViewColumn('fruit_grain_produ', 'Fruit Grain Produ', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_sown field
            //
            $column = new TextViewColumn('crop_sown', 'Crop Sown', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for deter_crop_cycle field
            //
            $column = new TextViewColumn('deter_crop_cycle', 'Deter Crop Cycle', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for soil_water_depl_factor field
            //
            $column = new TextViewColumn('soil_water_depl_factor', 'Soil Water Depl Factor', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for base_temp_dev field
            //
            $column = new TextViewColumn('base_temp_dev', 'Base Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for upper_temp_dev field
            //
            $column = new TextViewColumn('upper_temp_dev', 'Upper Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for total_leng_gdd field
            //
            $column = new TextViewColumn('total_leng_gdd', 'Total Leng Gdd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for soil_wate_p-exp-up field
            //
            $column = new TextViewColumn('soil_wate_p-exp-up', 'Soil Wate P-exp-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for soil_wate_p-exp-lo field
            //
            $column = new TextViewColumn('soil_wate_p-exp-lo', 'Soil Wate P-exp-lo', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_exp field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_exp', 'Shape Fact Wat Stress Can Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for soil_wate_p - sto-up field
            //
            $column = new TextViewColumn('soil_wate_p - sto-up', 'Soil Wate P - Sto-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for shape_fact_wat_stress_stom field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_stom', 'Shape Fact Wat Stress Stom', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for soil_wate_p - sen-up field
            //
            $column = new TextViewColumn('soil_wate_p - sen-up', 'Soil Wate P - Sen-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_sen field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_sen', 'Shape Fact Wat Stress Can Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for sum_eto_b4_sen field
            //
            $column = new TextViewColumn('sum_eto_b4_sen', 'Sum Eto B4 Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for soil_wate_p - pol-up field
            //
            $column = new TextViewColumn('soil_wate_p - pol-up', 'Soil Wate P - Pol-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for vol_anaero field
            //
            $column = new TextViewColumn('vol_anaero', 'Vol Anaero', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for considered_soil_stress_calib field
            //
            $column = new TextViewColumn('considered_soil_stress_calib', 'Considered Soil Stress Calib', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for response_canop_exp field
            //
            $column = new TextViewColumn('response_canop_exp', 'Response Canop Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for response_max_canop_cover field
            //
            $column = new TextViewColumn('response_max_canop_cover', 'Response Max Canop Cover', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for response_crop_wat_product field
            //
            $column = new TextViewColumn('response_crop_wat_product', 'Response Crop Wat Product', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for response_decline_canop field
            //
            $column = new TextViewColumn('response_decline_canop', 'Response Decline Canop', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for response_stom_closure field
            //
            $column = new TextViewColumn('response_stom_closure', 'Response Stom Closure', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for minimum_air _pol field
            //
            $column = new TextViewColumn('minimum_air _pol', 'Minimum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for maximum_air _pol field
            //
            $column = new TextViewColumn('maximum_air _pol', 'Maximum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cold_stress_biomass field
            //
            $column = new TextViewColumn('cold_stress_biomass', 'Cold Stress Biomass', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ec_satu_salinity field
            //
            $column = new TextViewColumn('ec_satu_salinity', 'Ec Satu Salinity', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ec_satu_nogrow field
            //
            $column = new TextViewColumn('ec_satu_nogrow', 'Ec Satu Nogrow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for shape_fact_str field
            //
            $column = new TextViewColumn('shape_fact_str', 'Shape Fact Str', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_coef_com field
            //
            $column = new TextViewColumn('crop_coef_com', 'Crop Coef Com', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for decline_crop_coef_age field
            //
            $column = new TextViewColumn('decline_crop_coef_age', 'Decline Crop Coef Age', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for min_eff_root_depth field
            //
            $column = new TextViewColumn('min_eff_root_depth', 'Min Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for max_eff_root_depth field
            //
            $column = new TextViewColumn('max_eff_root_depth', 'Max Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for shape_fact_root_exp field
            //
            $column = new TextViewColumn('shape_fact_root_exp', 'Shape Fact Root Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_topq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_topq', 'Maximum Root Wat Extrct Topq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_botq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_botq', 'Maximum Root Wat Extrct Botq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for canop_cover_evapot field
            //
            $column = new TextViewColumn('canop_cover_evapot', 'Canop Cover Evapot', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for soil_cover_seedling_90p field
            //
            $column = new TextViewColumn('soil_cover_seedling_90p', 'Soil Cover Seedling 90p', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for plant_per_hect field
            //
            $column = new TextViewColumn('plant_per_hect', 'Plant Per Hect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cgc_growth_coef field
            //
            $column = new TextViewColumn('cgc_growth_coef', 'Cgc Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for max_dec_canop_growth_coef field
            //
            $column = new TextViewColumn('max_dec_canop_growth_coef', 'Max Dec Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for no_season_canop_growth_coef field
            //
            $column = new TextViewColumn('no_season_canop_growth_coef', 'No Season Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for shp_fact_decr_cgc field
            //
            $column = new TextViewColumn('shp_fact_decr_cgc', 'Shp Fact Decr Cgc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for max_can_cover_frac field
            //
            $column = new TextViewColumn('max_can_cover_frac', 'Max Can Cover Frac', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for canopy_decl_coef field
            //
            $column = new TextViewColumn('canopy_decl_coef', 'Canopy Decl Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cald_sow_emerg field
            //
            $column = new TextViewColumn('cald_sow_emerg', 'Cald Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cald_sow_rootdepth field
            //
            $column = new TextViewColumn('cald_sow_rootdepth', 'Cald Sow Rootdepth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cald_sow_senes field
            //
            $column = new TextViewColumn('cald_sow_senes', 'Cald Sow Senes', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cald_sow_matur field
            //
            $column = new TextViewColumn('cald_sow_matur', 'Cald Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cald_sow_flow field
            //
            $column = new TextViewColumn('cald_sow_flow', 'Cald Sow Flow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for length_flower field
            //
            $column = new TextViewColumn('length_flower', 'Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_determi field
            //
            $column = new TextViewColumn('crop_determi', 'Crop Determi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for excess_potential_fruit field
            //
            $column = new TextViewColumn('excess_potential_fruit', 'Excess Potential Fruit', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for buildup_harves_index field
            //
            $column = new TextViewColumn('buildup_harves_index', 'Buildup Harves Index', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for normal_wp_eto_co2 field
            //
            $column = new TextViewColumn('normal_wp_eto_co2', 'Normal Wp Eto Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for normal_wp_eto_co2_yield field
            //
            $column = new TextViewColumn('normal_wp_eto_co2_yield', 'Normal Wp Eto Co2 Yield', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_perf_co2 field
            //
            $column = new TextViewColumn('crop_perf_co2', 'Crop Perf Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref_hi field
            //
            $column = new TextViewColumn('ref_hi', 'Ref Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for increase_hi_wat_stres field
            //
            $column = new TextViewColumn('increase_hi_wat_stres', 'Increase Hi Wat Stres', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for no_impct_hi_restrict_veg field
            //
            $column = new TextViewColumn('no_impct_hi_restrict_veg', 'No Impct Hi Restrict Veg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for coef_neg_impact field
            //
            $column = new TextViewColumn('coef_neg_impact', 'Coef Neg Impact', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for max_increase_hi field
            //
            $column = new TextViewColumn('max_increase_hi', 'Max Increase Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for gdd_sow_emerg field
            //
            $column = new TextViewColumn('gdd_sow_emerg', 'Gdd Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for gdd_sow_max_root field
            //
            $column = new TextViewColumn('gdd_sow_max_root', 'Gdd Sow Max Root', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for gdd_sow_senec field
            //
            $column = new TextViewColumn('gdd_sow_senec', 'Gdd Sow Senec', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for gdd_sow_matur field
            //
            $column = new TextViewColumn('gdd_sow_matur', 'Gdd Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for gdd_sow_flower field
            //
            $column = new TextViewColumn('gdd_sow_flower', 'Gdd Sow Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for gdd_length_flower field
            //
            $column = new TextViewColumn('gdd_length_flower', 'Gdd Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cgc_ggdays_increase_cc_soil field
            //
            $column = new TextViewColumn('cgc_ggdays_increase_cc_soil', 'Cgc Ggdays Increase Cc Soil', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for cgc_ggdays_decrease_cc_ggd field
            //
            $column = new TextViewColumn('cgc_ggdays_decrease_cc_ggd', 'Cgc Ggdays Decrease Cc Ggd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for gdd_buildup_hi field
            //
            $column = new TextViewColumn('gdd_buildup_hi', 'Gdd Buildup Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for info_ID field
            //
            $column = new TextViewColumn('info_ID', 'Info ID', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for aqua_version field
            //
            $column = new TextViewColumn('aqua_version', 'Aqua Version', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for file_not_protect field
            //
            $column = new TextViewColumn('file_not_protect', 'File Not Protect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for fruit_grain_produ field
            //
            $column = new TextViewColumn('fruit_grain_produ', 'Fruit Grain Produ', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_sown field
            //
            $column = new TextViewColumn('crop_sown', 'Crop Sown', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for deter_crop_cycle field
            //
            $column = new TextViewColumn('deter_crop_cycle', 'Deter Crop Cycle', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for soil_water_depl_factor field
            //
            $column = new TextViewColumn('soil_water_depl_factor', 'Soil Water Depl Factor', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for base_temp_dev field
            //
            $column = new TextViewColumn('base_temp_dev', 'Base Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for upper_temp_dev field
            //
            $column = new TextViewColumn('upper_temp_dev', 'Upper Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for total_leng_gdd field
            //
            $column = new TextViewColumn('total_leng_gdd', 'Total Leng Gdd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for soil_wate_p-exp-up field
            //
            $column = new TextViewColumn('soil_wate_p-exp-up', 'Soil Wate P-exp-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for soil_wate_p-exp-lo field
            //
            $column = new TextViewColumn('soil_wate_p-exp-lo', 'Soil Wate P-exp-lo', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_exp field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_exp', 'Shape Fact Wat Stress Can Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for soil_wate_p - sto-up field
            //
            $column = new TextViewColumn('soil_wate_p - sto-up', 'Soil Wate P - Sto-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for shape_fact_wat_stress_stom field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_stom', 'Shape Fact Wat Stress Stom', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for soil_wate_p - sen-up field
            //
            $column = new TextViewColumn('soil_wate_p - sen-up', 'Soil Wate P - Sen-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_sen field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_sen', 'Shape Fact Wat Stress Can Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for sum_eto_b4_sen field
            //
            $column = new TextViewColumn('sum_eto_b4_sen', 'Sum Eto B4 Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for soil_wate_p - pol-up field
            //
            $column = new TextViewColumn('soil_wate_p - pol-up', 'Soil Wate P - Pol-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for vol_anaero field
            //
            $column = new TextViewColumn('vol_anaero', 'Vol Anaero', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for considered_soil_stress_calib field
            //
            $column = new TextViewColumn('considered_soil_stress_calib', 'Considered Soil Stress Calib', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for response_canop_exp field
            //
            $column = new TextViewColumn('response_canop_exp', 'Response Canop Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for response_max_canop_cover field
            //
            $column = new TextViewColumn('response_max_canop_cover', 'Response Max Canop Cover', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for response_crop_wat_product field
            //
            $column = new TextViewColumn('response_crop_wat_product', 'Response Crop Wat Product', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for response_decline_canop field
            //
            $column = new TextViewColumn('response_decline_canop', 'Response Decline Canop', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for response_stom_closure field
            //
            $column = new TextViewColumn('response_stom_closure', 'Response Stom Closure', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for minimum_air _pol field
            //
            $column = new TextViewColumn('minimum_air _pol', 'Minimum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for maximum_air _pol field
            //
            $column = new TextViewColumn('maximum_air _pol', 'Maximum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cold_stress_biomass field
            //
            $column = new TextViewColumn('cold_stress_biomass', 'Cold Stress Biomass', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ec_satu_salinity field
            //
            $column = new TextViewColumn('ec_satu_salinity', 'Ec Satu Salinity', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ec_satu_nogrow field
            //
            $column = new TextViewColumn('ec_satu_nogrow', 'Ec Satu Nogrow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for shape_fact_str field
            //
            $column = new TextViewColumn('shape_fact_str', 'Shape Fact Str', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_coef_com field
            //
            $column = new TextViewColumn('crop_coef_com', 'Crop Coef Com', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for decline_crop_coef_age field
            //
            $column = new TextViewColumn('decline_crop_coef_age', 'Decline Crop Coef Age', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for min_eff_root_depth field
            //
            $column = new TextViewColumn('min_eff_root_depth', 'Min Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for max_eff_root_depth field
            //
            $column = new TextViewColumn('max_eff_root_depth', 'Max Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for shape_fact_root_exp field
            //
            $column = new TextViewColumn('shape_fact_root_exp', 'Shape Fact Root Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_topq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_topq', 'Maximum Root Wat Extrct Topq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_botq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_botq', 'Maximum Root Wat Extrct Botq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for canop_cover_evapot field
            //
            $column = new TextViewColumn('canop_cover_evapot', 'Canop Cover Evapot', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for soil_cover_seedling_90p field
            //
            $column = new TextViewColumn('soil_cover_seedling_90p', 'Soil Cover Seedling 90p', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for plant_per_hect field
            //
            $column = new TextViewColumn('plant_per_hect', 'Plant Per Hect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cgc_growth_coef field
            //
            $column = new TextViewColumn('cgc_growth_coef', 'Cgc Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for max_dec_canop_growth_coef field
            //
            $column = new TextViewColumn('max_dec_canop_growth_coef', 'Max Dec Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for no_season_canop_growth_coef field
            //
            $column = new TextViewColumn('no_season_canop_growth_coef', 'No Season Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for shp_fact_decr_cgc field
            //
            $column = new TextViewColumn('shp_fact_decr_cgc', 'Shp Fact Decr Cgc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for max_can_cover_frac field
            //
            $column = new TextViewColumn('max_can_cover_frac', 'Max Can Cover Frac', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for canopy_decl_coef field
            //
            $column = new TextViewColumn('canopy_decl_coef', 'Canopy Decl Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cald_sow_emerg field
            //
            $column = new TextViewColumn('cald_sow_emerg', 'Cald Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cald_sow_rootdepth field
            //
            $column = new TextViewColumn('cald_sow_rootdepth', 'Cald Sow Rootdepth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cald_sow_senes field
            //
            $column = new TextViewColumn('cald_sow_senes', 'Cald Sow Senes', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cald_sow_matur field
            //
            $column = new TextViewColumn('cald_sow_matur', 'Cald Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cald_sow_flow field
            //
            $column = new TextViewColumn('cald_sow_flow', 'Cald Sow Flow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for length_flower field
            //
            $column = new TextViewColumn('length_flower', 'Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_determi field
            //
            $column = new TextViewColumn('crop_determi', 'Crop Determi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for excess_potential_fruit field
            //
            $column = new TextViewColumn('excess_potential_fruit', 'Excess Potential Fruit', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for buildup_harves_index field
            //
            $column = new TextViewColumn('buildup_harves_index', 'Buildup Harves Index', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for normal_wp_eto_co2 field
            //
            $column = new TextViewColumn('normal_wp_eto_co2', 'Normal Wp Eto Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for normal_wp_eto_co2_yield field
            //
            $column = new TextViewColumn('normal_wp_eto_co2_yield', 'Normal Wp Eto Co2 Yield', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_perf_co2 field
            //
            $column = new TextViewColumn('crop_perf_co2', 'Crop Perf Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref_hi field
            //
            $column = new TextViewColumn('ref_hi', 'Ref Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for increase_hi_wat_stres field
            //
            $column = new TextViewColumn('increase_hi_wat_stres', 'Increase Hi Wat Stres', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for no_impct_hi_restrict_veg field
            //
            $column = new TextViewColumn('no_impct_hi_restrict_veg', 'No Impct Hi Restrict Veg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for coef_neg_impact field
            //
            $column = new TextViewColumn('coef_neg_impact', 'Coef Neg Impact', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for max_increase_hi field
            //
            $column = new TextViewColumn('max_increase_hi', 'Max Increase Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for gdd_sow_emerg field
            //
            $column = new TextViewColumn('gdd_sow_emerg', 'Gdd Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for gdd_sow_max_root field
            //
            $column = new TextViewColumn('gdd_sow_max_root', 'Gdd Sow Max Root', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for gdd_sow_senec field
            //
            $column = new TextViewColumn('gdd_sow_senec', 'Gdd Sow Senec', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for gdd_sow_matur field
            //
            $column = new TextViewColumn('gdd_sow_matur', 'Gdd Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for gdd_sow_flower field
            //
            $column = new TextViewColumn('gdd_sow_flower', 'Gdd Sow Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for gdd_length_flower field
            //
            $column = new TextViewColumn('gdd_length_flower', 'Gdd Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cgc_ggdays_increase_cc_soil field
            //
            $column = new TextViewColumn('cgc_ggdays_increase_cc_soil', 'Cgc Ggdays Increase Cc Soil', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for cgc_ggdays_decrease_cc_ggd field
            //
            $column = new TextViewColumn('cgc_ggdays_decrease_cc_ggd', 'Cgc Ggdays Decrease Cc Ggd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for gdd_buildup_hi field
            //
            $column = new TextViewColumn('gdd_buildup_hi', 'Gdd Buildup Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for info_ID field
            //
            $column = new TextViewColumn('info_ID', 'Info ID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for cropID field
            //
            $editor = new ComboBox('cropid_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_General`');
            $field = new IntegerField('cropID', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('name_var_lndrce');
            $lookupDataset->AddField($field, false);
            $field = new StringField('name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('sci_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('fam_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('genus_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('variety');
            $lookupDataset->AddField($field, false);
            $field = new StringField('landrace');
            $lookupDataset->AddField($field, false);
            $field = new StringField('plant');
            $lookupDataset->AddField($field, false);
            $field = new StringField('kbs_gen_others');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('name_var_lndrce', GetOrderTypeAsSQL(otAscending));
            $editColumn = new LookUpEditColumn(
                'CropID', 
                'cropID', 
                $editor, 
                $this->dataset, 'cropID', 'name_var_lndrce', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for aqua_version field
            //
            $editor = new TextEdit('aqua_version_edit');
            $editColumn = new CustomEditColumn('Aqua Version', 'aqua_version', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for file_not_protect field
            //
            $editor = new TextEdit('file_not_protect_edit');
            $editColumn = new CustomEditColumn('File Not Protect', 'file_not_protect', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for fruit_grain_produ field
            //
            $editor = new TextEdit('fruit_grain_produ_edit');
            $editColumn = new CustomEditColumn('Fruit Grain Produ', 'fruit_grain_produ', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_sown field
            //
            $editor = new TextEdit('crop_sown_edit');
            $editColumn = new CustomEditColumn('Crop Sown', 'crop_sown', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for deter_crop_cycle field
            //
            $editor = new TextEdit('deter_crop_cycle_edit');
            $editColumn = new CustomEditColumn('Deter Crop Cycle', 'deter_crop_cycle', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for soil_water_depl_factor field
            //
            $editor = new TextEdit('soil_water_depl_factor_edit');
            $editColumn = new CustomEditColumn('Soil Water Depl Factor', 'soil_water_depl_factor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for base_temp_dev field
            //
            $editor = new TextEdit('base_temp_dev_edit');
            $editColumn = new CustomEditColumn('Base Temp Dev', 'base_temp_dev', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for upper_temp_dev field
            //
            $editor = new TextEdit('upper_temp_dev_edit');
            $editColumn = new CustomEditColumn('Upper Temp Dev', 'upper_temp_dev', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for total_leng_gdd field
            //
            $editor = new TextEdit('total_leng_gdd_edit');
            $editColumn = new CustomEditColumn('Total Leng Gdd', 'total_leng_gdd', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for soil_wate_p-exp-up field
            //
            $editor = new TextEdit('soil_wate_p-exp-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P-exp-up', 'soil_wate_p-exp-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for soil_wate_p-exp-lo field
            //
            $editor = new TextEdit('soil_wate_p-exp-lo_edit');
            $editColumn = new CustomEditColumn('Soil Wate P-exp-lo', 'soil_wate_p-exp-lo', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for shape_fact_wat_stress_can_exp field
            //
            $editor = new TextEdit('shape_fact_wat_stress_can_exp_edit');
            $editColumn = new CustomEditColumn('Shape Fact Wat Stress Can Exp', 'shape_fact_wat_stress_can_exp', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for soil_wate_p - sto-up field
            //
            $editor = new TextEdit('soil_wate_p_-_sto-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P - Sto-up', 'soil_wate_p - sto-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for shape_fact_wat_stress_stom field
            //
            $editor = new TextEdit('shape_fact_wat_stress_stom_edit');
            $editColumn = new CustomEditColumn('Shape Fact Wat Stress Stom', 'shape_fact_wat_stress_stom', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for soil_wate_p - sen-up field
            //
            $editor = new TextEdit('soil_wate_p_-_sen-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P - Sen-up', 'soil_wate_p - sen-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for shape_fact_wat_stress_can_sen field
            //
            $editor = new TextEdit('shape_fact_wat_stress_can_sen_edit');
            $editColumn = new CustomEditColumn('Shape Fact Wat Stress Can Sen', 'shape_fact_wat_stress_can_sen', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for sum_eto_b4_sen field
            //
            $editor = new TextEdit('sum_eto_b4_sen_edit');
            $editColumn = new CustomEditColumn('Sum Eto B4 Sen', 'sum_eto_b4_sen', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for soil_wate_p - pol-up field
            //
            $editor = new TextEdit('soil_wate_p_-_pol-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P - Pol-up', 'soil_wate_p - pol-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for vol_anaero field
            //
            $editor = new TextEdit('vol_anaero_edit');
            $editColumn = new CustomEditColumn('Vol Anaero', 'vol_anaero', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for considered_soil_stress_calib field
            //
            $editor = new TextEdit('considered_soil_stress_calib_edit');
            $editColumn = new CustomEditColumn('Considered Soil Stress Calib', 'considered_soil_stress_calib', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for response_canop_exp field
            //
            $editor = new TextEdit('response_canop_exp_edit');
            $editColumn = new CustomEditColumn('Response Canop Exp', 'response_canop_exp', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for response_max_canop_cover field
            //
            $editor = new TextEdit('response_max_canop_cover_edit');
            $editColumn = new CustomEditColumn('Response Max Canop Cover', 'response_max_canop_cover', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for response_crop_wat_product field
            //
            $editor = new TextEdit('response_crop_wat_product_edit');
            $editColumn = new CustomEditColumn('Response Crop Wat Product', 'response_crop_wat_product', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for response_decline_canop field
            //
            $editor = new TextEdit('response_decline_canop_edit');
            $editColumn = new CustomEditColumn('Response Decline Canop', 'response_decline_canop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for response_stom_closure field
            //
            $editor = new TextEdit('response_stom_closure_edit');
            $editColumn = new CustomEditColumn('Response Stom Closure', 'response_stom_closure', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for minimum_air _pol field
            //
            $editor = new TextEdit('minimum_air__pol_edit');
            $editColumn = new CustomEditColumn('Minimum Air  Pol', 'minimum_air _pol', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for maximum_air _pol field
            //
            $editor = new TextEdit('maximum_air__pol_edit');
            $editColumn = new CustomEditColumn('Maximum Air  Pol', 'maximum_air _pol', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cold_stress_biomass field
            //
            $editor = new TextEdit('cold_stress_biomass_edit');
            $editColumn = new CustomEditColumn('Cold Stress Biomass', 'cold_stress_biomass', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ec_satu_salinity field
            //
            $editor = new TextEdit('ec_satu_salinity_edit');
            $editColumn = new CustomEditColumn('Ec Satu Salinity', 'ec_satu_salinity', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ec_satu_nogrow field
            //
            $editor = new TextEdit('ec_satu_nogrow_edit');
            $editColumn = new CustomEditColumn('Ec Satu Nogrow', 'ec_satu_nogrow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for shape_fact_str field
            //
            $editor = new TextEdit('shape_fact_str_edit');
            $editColumn = new CustomEditColumn('Shape Fact Str', 'shape_fact_str', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_coef_com field
            //
            $editor = new TextEdit('crop_coef_com_edit');
            $editColumn = new CustomEditColumn('Crop Coef Com', 'crop_coef_com', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for decline_crop_coef_age field
            //
            $editor = new TextEdit('decline_crop_coef_age_edit');
            $editColumn = new CustomEditColumn('Decline Crop Coef Age', 'decline_crop_coef_age', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for min_eff_root_depth field
            //
            $editor = new TextEdit('min_eff_root_depth_edit');
            $editColumn = new CustomEditColumn('Min Eff Root Depth', 'min_eff_root_depth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for max_eff_root_depth field
            //
            $editor = new TextEdit('max_eff_root_depth_edit');
            $editColumn = new CustomEditColumn('Max Eff Root Depth', 'max_eff_root_depth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for shape_fact_root_exp field
            //
            $editor = new TextEdit('shape_fact_root_exp_edit');
            $editColumn = new CustomEditColumn('Shape Fact Root Exp', 'shape_fact_root_exp', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for maximum_root_wat_extrct_topq field
            //
            $editor = new TextEdit('maximum_root_wat_extrct_topq_edit');
            $editColumn = new CustomEditColumn('Maximum Root Wat Extrct Topq', 'maximum_root_wat_extrct_topq', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for maximum_root_wat_extrct_botq field
            //
            $editor = new TextEdit('maximum_root_wat_extrct_botq_edit');
            $editColumn = new CustomEditColumn('Maximum Root Wat Extrct Botq', 'maximum_root_wat_extrct_botq', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for canop_cover_evapot field
            //
            $editor = new TextEdit('canop_cover_evapot_edit');
            $editColumn = new CustomEditColumn('Canop Cover Evapot', 'canop_cover_evapot', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for soil_cover_seedling_90p field
            //
            $editor = new TextEdit('soil_cover_seedling_90p_edit');
            $editColumn = new CustomEditColumn('Soil Cover Seedling 90p', 'soil_cover_seedling_90p', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for plant_per_hect field
            //
            $editor = new TextEdit('plant_per_hect_edit');
            $editColumn = new CustomEditColumn('Plant Per Hect', 'plant_per_hect', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cgc_growth_coef field
            //
            $editor = new TextEdit('cgc_growth_coef_edit');
            $editColumn = new CustomEditColumn('Cgc Growth Coef', 'cgc_growth_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for max_dec_canop_growth_coef field
            //
            $editor = new TextEdit('max_dec_canop_growth_coef_edit');
            $editColumn = new CustomEditColumn('Max Dec Canop Growth Coef', 'max_dec_canop_growth_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for no_season_canop_growth_coef field
            //
            $editor = new TextEdit('no_season_canop_growth_coef_edit');
            $editColumn = new CustomEditColumn('No Season Canop Growth Coef', 'no_season_canop_growth_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for shp_fact_decr_cgc field
            //
            $editor = new TextEdit('shp_fact_decr_cgc_edit');
            $editColumn = new CustomEditColumn('Shp Fact Decr Cgc', 'shp_fact_decr_cgc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for max_can_cover_frac field
            //
            $editor = new TextEdit('max_can_cover_frac_edit');
            $editColumn = new CustomEditColumn('Max Can Cover Frac', 'max_can_cover_frac', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for canopy_decl_coef field
            //
            $editor = new TextEdit('canopy_decl_coef_edit');
            $editColumn = new CustomEditColumn('Canopy Decl Coef', 'canopy_decl_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cald_sow_emerg field
            //
            $editor = new TextEdit('cald_sow_emerg_edit');
            $editColumn = new CustomEditColumn('Cald Sow Emerg', 'cald_sow_emerg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cald_sow_rootdepth field
            //
            $editor = new TextEdit('cald_sow_rootdepth_edit');
            $editColumn = new CustomEditColumn('Cald Sow Rootdepth', 'cald_sow_rootdepth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cald_sow_senes field
            //
            $editor = new TextEdit('cald_sow_senes_edit');
            $editColumn = new CustomEditColumn('Cald Sow Senes', 'cald_sow_senes', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cald_sow_matur field
            //
            $editor = new TextEdit('cald_sow_matur_edit');
            $editColumn = new CustomEditColumn('Cald Sow Matur', 'cald_sow_matur', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cald_sow_flow field
            //
            $editor = new TextEdit('cald_sow_flow_edit');
            $editColumn = new CustomEditColumn('Cald Sow Flow', 'cald_sow_flow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for length_flower field
            //
            $editor = new TextEdit('length_flower_edit');
            $editColumn = new CustomEditColumn('Length Flower', 'length_flower', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_determi field
            //
            $editor = new TextEdit('crop_determi_edit');
            $editColumn = new CustomEditColumn('Crop Determi', 'crop_determi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for excess_potential_fruit field
            //
            $editor = new TextEdit('excess_potential_fruit_edit');
            $editColumn = new CustomEditColumn('Excess Potential Fruit', 'excess_potential_fruit', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for buildup_harves_index field
            //
            $editor = new TextEdit('buildup_harves_index_edit');
            $editColumn = new CustomEditColumn('Buildup Harves Index', 'buildup_harves_index', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for normal_wp_eto_co2 field
            //
            $editor = new TextEdit('normal_wp_eto_co2_edit');
            $editColumn = new CustomEditColumn('Normal Wp Eto Co2', 'normal_wp_eto_co2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for normal_wp_eto_co2_yield field
            //
            $editor = new TextEdit('normal_wp_eto_co2_yield_edit');
            $editColumn = new CustomEditColumn('Normal Wp Eto Co2 Yield', 'normal_wp_eto_co2_yield', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_perf_co2 field
            //
            $editor = new TextEdit('crop_perf_co2_edit');
            $editColumn = new CustomEditColumn('Crop Perf Co2', 'crop_perf_co2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref_hi field
            //
            $editor = new TextEdit('ref_hi_edit');
            $editColumn = new CustomEditColumn('Ref Hi', 'ref_hi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for increase_hi_wat_stres field
            //
            $editor = new TextEdit('increase_hi_wat_stres_edit');
            $editColumn = new CustomEditColumn('Increase Hi Wat Stres', 'increase_hi_wat_stres', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for no_impct_hi_restrict_veg field
            //
            $editor = new TextEdit('no_impct_hi_restrict_veg_edit');
            $editColumn = new CustomEditColumn('No Impct Hi Restrict Veg', 'no_impct_hi_restrict_veg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for coef_neg_impact field
            //
            $editor = new TextEdit('coef_neg_impact_edit');
            $editColumn = new CustomEditColumn('Coef Neg Impact', 'coef_neg_impact', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for max_increase_hi field
            //
            $editor = new TextEdit('max_increase_hi_edit');
            $editColumn = new CustomEditColumn('Max Increase Hi', 'max_increase_hi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for gdd_sow_emerg field
            //
            $editor = new TextEdit('gdd_sow_emerg_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Emerg', 'gdd_sow_emerg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for gdd_sow_max_root field
            //
            $editor = new TextEdit('gdd_sow_max_root_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Max Root', 'gdd_sow_max_root', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for gdd_sow_senec field
            //
            $editor = new TextEdit('gdd_sow_senec_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Senec', 'gdd_sow_senec', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for gdd_sow_matur field
            //
            $editor = new TextEdit('gdd_sow_matur_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Matur', 'gdd_sow_matur', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for gdd_sow_flower field
            //
            $editor = new TextEdit('gdd_sow_flower_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Flower', 'gdd_sow_flower', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for gdd_length_flower field
            //
            $editor = new TextEdit('gdd_length_flower_edit');
            $editColumn = new CustomEditColumn('Gdd Length Flower', 'gdd_length_flower', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cgc_ggdays_increase_cc_soil field
            //
            $editor = new TextEdit('cgc_ggdays_increase_cc_soil_edit');
            $editColumn = new CustomEditColumn('Cgc Ggdays Increase Cc Soil', 'cgc_ggdays_increase_cc_soil', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cgc_ggdays_decrease_cc_ggd field
            //
            $editor = new TextEdit('cgc_ggdays_decrease_cc_ggd_edit');
            $editColumn = new CustomEditColumn('Cgc Ggdays Decrease Cc Ggd', 'cgc_ggdays_decrease_cc_ggd', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for gdd_buildup_hi field
            //
            $editor = new TextEdit('gdd_buildup_hi_edit');
            $editColumn = new CustomEditColumn('Gdd Buildup Hi', 'gdd_buildup_hi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for info_ID field
            //
            $editor = new TextEdit('info_id_edit');
            $editColumn = new CustomEditColumn('Info ID', 'info_ID', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for cropID field
            //
            $editor = new ComboBox('cropid_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_General`');
            $field = new IntegerField('cropID', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('name_var_lndrce');
            $lookupDataset->AddField($field, false);
            $field = new StringField('name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('sci_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('fam_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('genus_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('variety');
            $lookupDataset->AddField($field, false);
            $field = new StringField('landrace');
            $lookupDataset->AddField($field, false);
            $field = new StringField('plant');
            $lookupDataset->AddField($field, false);
            $field = new StringField('kbs_gen_others');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('name_var_lndrce', GetOrderTypeAsSQL(otAscending));
            $editColumn = new LookUpEditColumn(
                'CropID', 
                'cropID', 
                $editor, 
                $this->dataset, 'cropID', 'name_var_lndrce', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for aqua_version field
            //
            $editor = new TextEdit('aqua_version_edit');
            $editColumn = new CustomEditColumn('Aqua Version', 'aqua_version', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for file_not_protect field
            //
            $editor = new TextEdit('file_not_protect_edit');
            $editColumn = new CustomEditColumn('File Not Protect', 'file_not_protect', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for fruit_grain_produ field
            //
            $editor = new TextEdit('fruit_grain_produ_edit');
            $editColumn = new CustomEditColumn('Fruit Grain Produ', 'fruit_grain_produ', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_sown field
            //
            $editor = new TextEdit('crop_sown_edit');
            $editColumn = new CustomEditColumn('Crop Sown', 'crop_sown', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for deter_crop_cycle field
            //
            $editor = new TextEdit('deter_crop_cycle_edit');
            $editColumn = new CustomEditColumn('Deter Crop Cycle', 'deter_crop_cycle', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for soil_water_depl_factor field
            //
            $editor = new TextEdit('soil_water_depl_factor_edit');
            $editColumn = new CustomEditColumn('Soil Water Depl Factor', 'soil_water_depl_factor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for base_temp_dev field
            //
            $editor = new TextEdit('base_temp_dev_edit');
            $editColumn = new CustomEditColumn('Base Temp Dev', 'base_temp_dev', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for upper_temp_dev field
            //
            $editor = new TextEdit('upper_temp_dev_edit');
            $editColumn = new CustomEditColumn('Upper Temp Dev', 'upper_temp_dev', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for total_leng_gdd field
            //
            $editor = new TextEdit('total_leng_gdd_edit');
            $editColumn = new CustomEditColumn('Total Leng Gdd', 'total_leng_gdd', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for soil_wate_p-exp-up field
            //
            $editor = new TextEdit('soil_wate_p-exp-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P-exp-up', 'soil_wate_p-exp-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for soil_wate_p-exp-lo field
            //
            $editor = new TextEdit('soil_wate_p-exp-lo_edit');
            $editColumn = new CustomEditColumn('Soil Wate P-exp-lo', 'soil_wate_p-exp-lo', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for shape_fact_wat_stress_can_exp field
            //
            $editor = new TextEdit('shape_fact_wat_stress_can_exp_edit');
            $editColumn = new CustomEditColumn('Shape Fact Wat Stress Can Exp', 'shape_fact_wat_stress_can_exp', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for soil_wate_p - sto-up field
            //
            $editor = new TextEdit('soil_wate_p_-_sto-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P - Sto-up', 'soil_wate_p - sto-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for shape_fact_wat_stress_stom field
            //
            $editor = new TextEdit('shape_fact_wat_stress_stom_edit');
            $editColumn = new CustomEditColumn('Shape Fact Wat Stress Stom', 'shape_fact_wat_stress_stom', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for soil_wate_p - sen-up field
            //
            $editor = new TextEdit('soil_wate_p_-_sen-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P - Sen-up', 'soil_wate_p - sen-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for shape_fact_wat_stress_can_sen field
            //
            $editor = new TextEdit('shape_fact_wat_stress_can_sen_edit');
            $editColumn = new CustomEditColumn('Shape Fact Wat Stress Can Sen', 'shape_fact_wat_stress_can_sen', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for sum_eto_b4_sen field
            //
            $editor = new TextEdit('sum_eto_b4_sen_edit');
            $editColumn = new CustomEditColumn('Sum Eto B4 Sen', 'sum_eto_b4_sen', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for soil_wate_p - pol-up field
            //
            $editor = new TextEdit('soil_wate_p_-_pol-up_edit');
            $editColumn = new CustomEditColumn('Soil Wate P - Pol-up', 'soil_wate_p - pol-up', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for vol_anaero field
            //
            $editor = new TextEdit('vol_anaero_edit');
            $editColumn = new CustomEditColumn('Vol Anaero', 'vol_anaero', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for considered_soil_stress_calib field
            //
            $editor = new TextEdit('considered_soil_stress_calib_edit');
            $editColumn = new CustomEditColumn('Considered Soil Stress Calib', 'considered_soil_stress_calib', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for response_canop_exp field
            //
            $editor = new TextEdit('response_canop_exp_edit');
            $editColumn = new CustomEditColumn('Response Canop Exp', 'response_canop_exp', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for response_max_canop_cover field
            //
            $editor = new TextEdit('response_max_canop_cover_edit');
            $editColumn = new CustomEditColumn('Response Max Canop Cover', 'response_max_canop_cover', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for response_crop_wat_product field
            //
            $editor = new TextEdit('response_crop_wat_product_edit');
            $editColumn = new CustomEditColumn('Response Crop Wat Product', 'response_crop_wat_product', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for response_decline_canop field
            //
            $editor = new TextEdit('response_decline_canop_edit');
            $editColumn = new CustomEditColumn('Response Decline Canop', 'response_decline_canop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for response_stom_closure field
            //
            $editor = new TextEdit('response_stom_closure_edit');
            $editColumn = new CustomEditColumn('Response Stom Closure', 'response_stom_closure', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for minimum_air _pol field
            //
            $editor = new TextEdit('minimum_air__pol_edit');
            $editColumn = new CustomEditColumn('Minimum Air  Pol', 'minimum_air _pol', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for maximum_air _pol field
            //
            $editor = new TextEdit('maximum_air__pol_edit');
            $editColumn = new CustomEditColumn('Maximum Air  Pol', 'maximum_air _pol', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cold_stress_biomass field
            //
            $editor = new TextEdit('cold_stress_biomass_edit');
            $editColumn = new CustomEditColumn('Cold Stress Biomass', 'cold_stress_biomass', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ec_satu_salinity field
            //
            $editor = new TextEdit('ec_satu_salinity_edit');
            $editColumn = new CustomEditColumn('Ec Satu Salinity', 'ec_satu_salinity', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ec_satu_nogrow field
            //
            $editor = new TextEdit('ec_satu_nogrow_edit');
            $editColumn = new CustomEditColumn('Ec Satu Nogrow', 'ec_satu_nogrow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for shape_fact_str field
            //
            $editor = new TextEdit('shape_fact_str_edit');
            $editColumn = new CustomEditColumn('Shape Fact Str', 'shape_fact_str', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_coef_com field
            //
            $editor = new TextEdit('crop_coef_com_edit');
            $editColumn = new CustomEditColumn('Crop Coef Com', 'crop_coef_com', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for decline_crop_coef_age field
            //
            $editor = new TextEdit('decline_crop_coef_age_edit');
            $editColumn = new CustomEditColumn('Decline Crop Coef Age', 'decline_crop_coef_age', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for min_eff_root_depth field
            //
            $editor = new TextEdit('min_eff_root_depth_edit');
            $editColumn = new CustomEditColumn('Min Eff Root Depth', 'min_eff_root_depth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for max_eff_root_depth field
            //
            $editor = new TextEdit('max_eff_root_depth_edit');
            $editColumn = new CustomEditColumn('Max Eff Root Depth', 'max_eff_root_depth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for shape_fact_root_exp field
            //
            $editor = new TextEdit('shape_fact_root_exp_edit');
            $editColumn = new CustomEditColumn('Shape Fact Root Exp', 'shape_fact_root_exp', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for maximum_root_wat_extrct_topq field
            //
            $editor = new TextEdit('maximum_root_wat_extrct_topq_edit');
            $editColumn = new CustomEditColumn('Maximum Root Wat Extrct Topq', 'maximum_root_wat_extrct_topq', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for maximum_root_wat_extrct_botq field
            //
            $editor = new TextEdit('maximum_root_wat_extrct_botq_edit');
            $editColumn = new CustomEditColumn('Maximum Root Wat Extrct Botq', 'maximum_root_wat_extrct_botq', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for canop_cover_evapot field
            //
            $editor = new TextEdit('canop_cover_evapot_edit');
            $editColumn = new CustomEditColumn('Canop Cover Evapot', 'canop_cover_evapot', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for soil_cover_seedling_90p field
            //
            $editor = new TextEdit('soil_cover_seedling_90p_edit');
            $editColumn = new CustomEditColumn('Soil Cover Seedling 90p', 'soil_cover_seedling_90p', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for plant_per_hect field
            //
            $editor = new TextEdit('plant_per_hect_edit');
            $editColumn = new CustomEditColumn('Plant Per Hect', 'plant_per_hect', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cgc_growth_coef field
            //
            $editor = new TextEdit('cgc_growth_coef_edit');
            $editColumn = new CustomEditColumn('Cgc Growth Coef', 'cgc_growth_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for max_dec_canop_growth_coef field
            //
            $editor = new TextEdit('max_dec_canop_growth_coef_edit');
            $editColumn = new CustomEditColumn('Max Dec Canop Growth Coef', 'max_dec_canop_growth_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for no_season_canop_growth_coef field
            //
            $editor = new TextEdit('no_season_canop_growth_coef_edit');
            $editColumn = new CustomEditColumn('No Season Canop Growth Coef', 'no_season_canop_growth_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for shp_fact_decr_cgc field
            //
            $editor = new TextEdit('shp_fact_decr_cgc_edit');
            $editColumn = new CustomEditColumn('Shp Fact Decr Cgc', 'shp_fact_decr_cgc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for max_can_cover_frac field
            //
            $editor = new TextEdit('max_can_cover_frac_edit');
            $editColumn = new CustomEditColumn('Max Can Cover Frac', 'max_can_cover_frac', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for canopy_decl_coef field
            //
            $editor = new TextEdit('canopy_decl_coef_edit');
            $editColumn = new CustomEditColumn('Canopy Decl Coef', 'canopy_decl_coef', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cald_sow_emerg field
            //
            $editor = new TextEdit('cald_sow_emerg_edit');
            $editColumn = new CustomEditColumn('Cald Sow Emerg', 'cald_sow_emerg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cald_sow_rootdepth field
            //
            $editor = new TextEdit('cald_sow_rootdepth_edit');
            $editColumn = new CustomEditColumn('Cald Sow Rootdepth', 'cald_sow_rootdepth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cald_sow_senes field
            //
            $editor = new TextEdit('cald_sow_senes_edit');
            $editColumn = new CustomEditColumn('Cald Sow Senes', 'cald_sow_senes', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cald_sow_matur field
            //
            $editor = new TextEdit('cald_sow_matur_edit');
            $editColumn = new CustomEditColumn('Cald Sow Matur', 'cald_sow_matur', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cald_sow_flow field
            //
            $editor = new TextEdit('cald_sow_flow_edit');
            $editColumn = new CustomEditColumn('Cald Sow Flow', 'cald_sow_flow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for length_flower field
            //
            $editor = new TextEdit('length_flower_edit');
            $editColumn = new CustomEditColumn('Length Flower', 'length_flower', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_determi field
            //
            $editor = new TextEdit('crop_determi_edit');
            $editColumn = new CustomEditColumn('Crop Determi', 'crop_determi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for excess_potential_fruit field
            //
            $editor = new TextEdit('excess_potential_fruit_edit');
            $editColumn = new CustomEditColumn('Excess Potential Fruit', 'excess_potential_fruit', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for buildup_harves_index field
            //
            $editor = new TextEdit('buildup_harves_index_edit');
            $editColumn = new CustomEditColumn('Buildup Harves Index', 'buildup_harves_index', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for normal_wp_eto_co2 field
            //
            $editor = new TextEdit('normal_wp_eto_co2_edit');
            $editColumn = new CustomEditColumn('Normal Wp Eto Co2', 'normal_wp_eto_co2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for normal_wp_eto_co2_yield field
            //
            $editor = new TextEdit('normal_wp_eto_co2_yield_edit');
            $editColumn = new CustomEditColumn('Normal Wp Eto Co2 Yield', 'normal_wp_eto_co2_yield', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_perf_co2 field
            //
            $editor = new TextEdit('crop_perf_co2_edit');
            $editColumn = new CustomEditColumn('Crop Perf Co2', 'crop_perf_co2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref_hi field
            //
            $editor = new TextEdit('ref_hi_edit');
            $editColumn = new CustomEditColumn('Ref Hi', 'ref_hi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for increase_hi_wat_stres field
            //
            $editor = new TextEdit('increase_hi_wat_stres_edit');
            $editColumn = new CustomEditColumn('Increase Hi Wat Stres', 'increase_hi_wat_stres', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for no_impct_hi_restrict_veg field
            //
            $editor = new TextEdit('no_impct_hi_restrict_veg_edit');
            $editColumn = new CustomEditColumn('No Impct Hi Restrict Veg', 'no_impct_hi_restrict_veg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for coef_neg_impact field
            //
            $editor = new TextEdit('coef_neg_impact_edit');
            $editColumn = new CustomEditColumn('Coef Neg Impact', 'coef_neg_impact', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for max_increase_hi field
            //
            $editor = new TextEdit('max_increase_hi_edit');
            $editColumn = new CustomEditColumn('Max Increase Hi', 'max_increase_hi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for gdd_sow_emerg field
            //
            $editor = new TextEdit('gdd_sow_emerg_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Emerg', 'gdd_sow_emerg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for gdd_sow_max_root field
            //
            $editor = new TextEdit('gdd_sow_max_root_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Max Root', 'gdd_sow_max_root', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for gdd_sow_senec field
            //
            $editor = new TextEdit('gdd_sow_senec_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Senec', 'gdd_sow_senec', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for gdd_sow_matur field
            //
            $editor = new TextEdit('gdd_sow_matur_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Matur', 'gdd_sow_matur', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for gdd_sow_flower field
            //
            $editor = new TextEdit('gdd_sow_flower_edit');
            $editColumn = new CustomEditColumn('Gdd Sow Flower', 'gdd_sow_flower', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for gdd_length_flower field
            //
            $editor = new TextEdit('gdd_length_flower_edit');
            $editColumn = new CustomEditColumn('Gdd Length Flower', 'gdd_length_flower', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cgc_ggdays_increase_cc_soil field
            //
            $editor = new TextEdit('cgc_ggdays_increase_cc_soil_edit');
            $editColumn = new CustomEditColumn('Cgc Ggdays Increase Cc Soil', 'cgc_ggdays_increase_cc_soil', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cgc_ggdays_decrease_cc_ggd field
            //
            $editor = new TextEdit('cgc_ggdays_decrease_cc_ggd_edit');
            $editColumn = new CustomEditColumn('Cgc Ggdays Decrease Cc Ggd', 'cgc_ggdays_decrease_cc_ggd', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for gdd_buildup_hi field
            //
            $editor = new TextEdit('gdd_buildup_hi_edit');
            $editColumn = new CustomEditColumn('Gdd Buildup Hi', 'gdd_buildup_hi', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for info_ID field
            //
            $editor = new TextEdit('info_id_edit');
            $editColumn = new CustomEditColumn('Info ID', 'info_ID', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            if ($this->GetSecurityInfo()->HasAddGrant())
            {
                $grid->SetShowAddButton(true);
                $grid->SetShowInlineAddButton(false);
            }
            else
            {
                $grid->SetShowInlineAddButton(false);
                $grid->SetShowAddButton(false);
            }
        }
    
        protected function AddPrintColumns(Grid $grid)
        {
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for aqua_version field
            //
            $column = new TextViewColumn('aqua_version', 'Aqua Version', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for file_not_protect field
            //
            $column = new TextViewColumn('file_not_protect', 'File Not Protect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for fruit_grain_produ field
            //
            $column = new TextViewColumn('fruit_grain_produ', 'Fruit Grain Produ', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_sown field
            //
            $column = new TextViewColumn('crop_sown', 'Crop Sown', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for deter_crop_cycle field
            //
            $column = new TextViewColumn('deter_crop_cycle', 'Deter Crop Cycle', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for soil_water_depl_factor field
            //
            $column = new TextViewColumn('soil_water_depl_factor', 'Soil Water Depl Factor', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for base_temp_dev field
            //
            $column = new TextViewColumn('base_temp_dev', 'Base Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for upper_temp_dev field
            //
            $column = new TextViewColumn('upper_temp_dev', 'Upper Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for total_leng_gdd field
            //
            $column = new TextViewColumn('total_leng_gdd', 'Total Leng Gdd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for soil_wate_p-exp-up field
            //
            $column = new TextViewColumn('soil_wate_p-exp-up', 'Soil Wate P-exp-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for soil_wate_p-exp-lo field
            //
            $column = new TextViewColumn('soil_wate_p-exp-lo', 'Soil Wate P-exp-lo', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_exp field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_exp', 'Shape Fact Wat Stress Can Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for soil_wate_p - sto-up field
            //
            $column = new TextViewColumn('soil_wate_p - sto-up', 'Soil Wate P - Sto-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for shape_fact_wat_stress_stom field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_stom', 'Shape Fact Wat Stress Stom', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for soil_wate_p - sen-up field
            //
            $column = new TextViewColumn('soil_wate_p - sen-up', 'Soil Wate P - Sen-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_sen field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_sen', 'Shape Fact Wat Stress Can Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for sum_eto_b4_sen field
            //
            $column = new TextViewColumn('sum_eto_b4_sen', 'Sum Eto B4 Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for soil_wate_p - pol-up field
            //
            $column = new TextViewColumn('soil_wate_p - pol-up', 'Soil Wate P - Pol-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for vol_anaero field
            //
            $column = new TextViewColumn('vol_anaero', 'Vol Anaero', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for considered_soil_stress_calib field
            //
            $column = new TextViewColumn('considered_soil_stress_calib', 'Considered Soil Stress Calib', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for response_canop_exp field
            //
            $column = new TextViewColumn('response_canop_exp', 'Response Canop Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for response_max_canop_cover field
            //
            $column = new TextViewColumn('response_max_canop_cover', 'Response Max Canop Cover', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for response_crop_wat_product field
            //
            $column = new TextViewColumn('response_crop_wat_product', 'Response Crop Wat Product', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for response_decline_canop field
            //
            $column = new TextViewColumn('response_decline_canop', 'Response Decline Canop', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for response_stom_closure field
            //
            $column = new TextViewColumn('response_stom_closure', 'Response Stom Closure', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for minimum_air _pol field
            //
            $column = new TextViewColumn('minimum_air _pol', 'Minimum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for maximum_air _pol field
            //
            $column = new TextViewColumn('maximum_air _pol', 'Maximum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cold_stress_biomass field
            //
            $column = new TextViewColumn('cold_stress_biomass', 'Cold Stress Biomass', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for ec_satu_salinity field
            //
            $column = new TextViewColumn('ec_satu_salinity', 'Ec Satu Salinity', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for ec_satu_nogrow field
            //
            $column = new TextViewColumn('ec_satu_nogrow', 'Ec Satu Nogrow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for shape_fact_str field
            //
            $column = new TextViewColumn('shape_fact_str', 'Shape Fact Str', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_coef_com field
            //
            $column = new TextViewColumn('crop_coef_com', 'Crop Coef Com', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for decline_crop_coef_age field
            //
            $column = new TextViewColumn('decline_crop_coef_age', 'Decline Crop Coef Age', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for min_eff_root_depth field
            //
            $column = new TextViewColumn('min_eff_root_depth', 'Min Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for max_eff_root_depth field
            //
            $column = new TextViewColumn('max_eff_root_depth', 'Max Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for shape_fact_root_exp field
            //
            $column = new TextViewColumn('shape_fact_root_exp', 'Shape Fact Root Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_topq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_topq', 'Maximum Root Wat Extrct Topq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_botq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_botq', 'Maximum Root Wat Extrct Botq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for canop_cover_evapot field
            //
            $column = new TextViewColumn('canop_cover_evapot', 'Canop Cover Evapot', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for soil_cover_seedling_90p field
            //
            $column = new TextViewColumn('soil_cover_seedling_90p', 'Soil Cover Seedling 90p', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for plant_per_hect field
            //
            $column = new TextViewColumn('plant_per_hect', 'Plant Per Hect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cgc_growth_coef field
            //
            $column = new TextViewColumn('cgc_growth_coef', 'Cgc Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for max_dec_canop_growth_coef field
            //
            $column = new TextViewColumn('max_dec_canop_growth_coef', 'Max Dec Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for no_season_canop_growth_coef field
            //
            $column = new TextViewColumn('no_season_canop_growth_coef', 'No Season Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for shp_fact_decr_cgc field
            //
            $column = new TextViewColumn('shp_fact_decr_cgc', 'Shp Fact Decr Cgc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for max_can_cover_frac field
            //
            $column = new TextViewColumn('max_can_cover_frac', 'Max Can Cover Frac', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for canopy_decl_coef field
            //
            $column = new TextViewColumn('canopy_decl_coef', 'Canopy Decl Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cald_sow_emerg field
            //
            $column = new TextViewColumn('cald_sow_emerg', 'Cald Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cald_sow_rootdepth field
            //
            $column = new TextViewColumn('cald_sow_rootdepth', 'Cald Sow Rootdepth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cald_sow_senes field
            //
            $column = new TextViewColumn('cald_sow_senes', 'Cald Sow Senes', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cald_sow_matur field
            //
            $column = new TextViewColumn('cald_sow_matur', 'Cald Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cald_sow_flow field
            //
            $column = new TextViewColumn('cald_sow_flow', 'Cald Sow Flow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for length_flower field
            //
            $column = new TextViewColumn('length_flower', 'Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_determi field
            //
            $column = new TextViewColumn('crop_determi', 'Crop Determi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for excess_potential_fruit field
            //
            $column = new TextViewColumn('excess_potential_fruit', 'Excess Potential Fruit', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for buildup_harves_index field
            //
            $column = new TextViewColumn('buildup_harves_index', 'Buildup Harves Index', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for normal_wp_eto_co2 field
            //
            $column = new TextViewColumn('normal_wp_eto_co2', 'Normal Wp Eto Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for normal_wp_eto_co2_yield field
            //
            $column = new TextViewColumn('normal_wp_eto_co2_yield', 'Normal Wp Eto Co2 Yield', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_perf_co2 field
            //
            $column = new TextViewColumn('crop_perf_co2', 'Crop Perf Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref_hi field
            //
            $column = new TextViewColumn('ref_hi', 'Ref Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for increase_hi_wat_stres field
            //
            $column = new TextViewColumn('increase_hi_wat_stres', 'Increase Hi Wat Stres', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for no_impct_hi_restrict_veg field
            //
            $column = new TextViewColumn('no_impct_hi_restrict_veg', 'No Impct Hi Restrict Veg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for coef_neg_impact field
            //
            $column = new TextViewColumn('coef_neg_impact', 'Coef Neg Impact', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for max_increase_hi field
            //
            $column = new TextViewColumn('max_increase_hi', 'Max Increase Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for gdd_sow_emerg field
            //
            $column = new TextViewColumn('gdd_sow_emerg', 'Gdd Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for gdd_sow_max_root field
            //
            $column = new TextViewColumn('gdd_sow_max_root', 'Gdd Sow Max Root', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for gdd_sow_senec field
            //
            $column = new TextViewColumn('gdd_sow_senec', 'Gdd Sow Senec', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for gdd_sow_matur field
            //
            $column = new TextViewColumn('gdd_sow_matur', 'Gdd Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for gdd_sow_flower field
            //
            $column = new TextViewColumn('gdd_sow_flower', 'Gdd Sow Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for gdd_length_flower field
            //
            $column = new TextViewColumn('gdd_length_flower', 'Gdd Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cgc_ggdays_increase_cc_soil field
            //
            $column = new TextViewColumn('cgc_ggdays_increase_cc_soil', 'Cgc Ggdays Increase Cc Soil', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for cgc_ggdays_decrease_cc_ggd field
            //
            $column = new TextViewColumn('cgc_ggdays_decrease_cc_ggd', 'Cgc Ggdays Decrease Cc Ggd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for gdd_buildup_hi field
            //
            $column = new TextViewColumn('gdd_buildup_hi', 'Gdd Buildup Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for info_ID field
            //
            $column = new TextViewColumn('info_ID', 'Info ID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for aqua_version field
            //
            $column = new TextViewColumn('aqua_version', 'Aqua Version', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for file_not_protect field
            //
            $column = new TextViewColumn('file_not_protect', 'File Not Protect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for fruit_grain_produ field
            //
            $column = new TextViewColumn('fruit_grain_produ', 'Fruit Grain Produ', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_sown field
            //
            $column = new TextViewColumn('crop_sown', 'Crop Sown', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for deter_crop_cycle field
            //
            $column = new TextViewColumn('deter_crop_cycle', 'Deter Crop Cycle', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for soil_water_depl_factor field
            //
            $column = new TextViewColumn('soil_water_depl_factor', 'Soil Water Depl Factor', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for base_temp_dev field
            //
            $column = new TextViewColumn('base_temp_dev', 'Base Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for upper_temp_dev field
            //
            $column = new TextViewColumn('upper_temp_dev', 'Upper Temp Dev', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for total_leng_gdd field
            //
            $column = new TextViewColumn('total_leng_gdd', 'Total Leng Gdd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for soil_wate_p-exp-up field
            //
            $column = new TextViewColumn('soil_wate_p-exp-up', 'Soil Wate P-exp-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for soil_wate_p-exp-lo field
            //
            $column = new TextViewColumn('soil_wate_p-exp-lo', 'Soil Wate P-exp-lo', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_exp field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_exp', 'Shape Fact Wat Stress Can Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for soil_wate_p - sto-up field
            //
            $column = new TextViewColumn('soil_wate_p - sto-up', 'Soil Wate P - Sto-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for shape_fact_wat_stress_stom field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_stom', 'Shape Fact Wat Stress Stom', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for soil_wate_p - sen-up field
            //
            $column = new TextViewColumn('soil_wate_p - sen-up', 'Soil Wate P - Sen-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for shape_fact_wat_stress_can_sen field
            //
            $column = new TextViewColumn('shape_fact_wat_stress_can_sen', 'Shape Fact Wat Stress Can Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for sum_eto_b4_sen field
            //
            $column = new TextViewColumn('sum_eto_b4_sen', 'Sum Eto B4 Sen', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for soil_wate_p - pol-up field
            //
            $column = new TextViewColumn('soil_wate_p - pol-up', 'Soil Wate P - Pol-up', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for vol_anaero field
            //
            $column = new TextViewColumn('vol_anaero', 'Vol Anaero', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for considered_soil_stress_calib field
            //
            $column = new TextViewColumn('considered_soil_stress_calib', 'Considered Soil Stress Calib', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for response_canop_exp field
            //
            $column = new TextViewColumn('response_canop_exp', 'Response Canop Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for response_max_canop_cover field
            //
            $column = new TextViewColumn('response_max_canop_cover', 'Response Max Canop Cover', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for response_crop_wat_product field
            //
            $column = new TextViewColumn('response_crop_wat_product', 'Response Crop Wat Product', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for response_decline_canop field
            //
            $column = new TextViewColumn('response_decline_canop', 'Response Decline Canop', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for response_stom_closure field
            //
            $column = new TextViewColumn('response_stom_closure', 'Response Stom Closure', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for minimum_air _pol field
            //
            $column = new TextViewColumn('minimum_air _pol', 'Minimum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for maximum_air _pol field
            //
            $column = new TextViewColumn('maximum_air _pol', 'Maximum Air  Pol', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cold_stress_biomass field
            //
            $column = new TextViewColumn('cold_stress_biomass', 'Cold Stress Biomass', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for ec_satu_salinity field
            //
            $column = new TextViewColumn('ec_satu_salinity', 'Ec Satu Salinity', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for ec_satu_nogrow field
            //
            $column = new TextViewColumn('ec_satu_nogrow', 'Ec Satu Nogrow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for shape_fact_str field
            //
            $column = new TextViewColumn('shape_fact_str', 'Shape Fact Str', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_coef_com field
            //
            $column = new TextViewColumn('crop_coef_com', 'Crop Coef Com', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for decline_crop_coef_age field
            //
            $column = new TextViewColumn('decline_crop_coef_age', 'Decline Crop Coef Age', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for min_eff_root_depth field
            //
            $column = new TextViewColumn('min_eff_root_depth', 'Min Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for max_eff_root_depth field
            //
            $column = new TextViewColumn('max_eff_root_depth', 'Max Eff Root Depth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for shape_fact_root_exp field
            //
            $column = new TextViewColumn('shape_fact_root_exp', 'Shape Fact Root Exp', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_topq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_topq', 'Maximum Root Wat Extrct Topq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for maximum_root_wat_extrct_botq field
            //
            $column = new TextViewColumn('maximum_root_wat_extrct_botq', 'Maximum Root Wat Extrct Botq', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for canop_cover_evapot field
            //
            $column = new TextViewColumn('canop_cover_evapot', 'Canop Cover Evapot', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for soil_cover_seedling_90p field
            //
            $column = new TextViewColumn('soil_cover_seedling_90p', 'Soil Cover Seedling 90p', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for plant_per_hect field
            //
            $column = new TextViewColumn('plant_per_hect', 'Plant Per Hect', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cgc_growth_coef field
            //
            $column = new TextViewColumn('cgc_growth_coef', 'Cgc Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for max_dec_canop_growth_coef field
            //
            $column = new TextViewColumn('max_dec_canop_growth_coef', 'Max Dec Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for no_season_canop_growth_coef field
            //
            $column = new TextViewColumn('no_season_canop_growth_coef', 'No Season Canop Growth Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for shp_fact_decr_cgc field
            //
            $column = new TextViewColumn('shp_fact_decr_cgc', 'Shp Fact Decr Cgc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for max_can_cover_frac field
            //
            $column = new TextViewColumn('max_can_cover_frac', 'Max Can Cover Frac', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for canopy_decl_coef field
            //
            $column = new TextViewColumn('canopy_decl_coef', 'Canopy Decl Coef', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cald_sow_emerg field
            //
            $column = new TextViewColumn('cald_sow_emerg', 'Cald Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cald_sow_rootdepth field
            //
            $column = new TextViewColumn('cald_sow_rootdepth', 'Cald Sow Rootdepth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cald_sow_senes field
            //
            $column = new TextViewColumn('cald_sow_senes', 'Cald Sow Senes', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cald_sow_matur field
            //
            $column = new TextViewColumn('cald_sow_matur', 'Cald Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cald_sow_flow field
            //
            $column = new TextViewColumn('cald_sow_flow', 'Cald Sow Flow', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for length_flower field
            //
            $column = new TextViewColumn('length_flower', 'Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_determi field
            //
            $column = new TextViewColumn('crop_determi', 'Crop Determi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for excess_potential_fruit field
            //
            $column = new TextViewColumn('excess_potential_fruit', 'Excess Potential Fruit', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for buildup_harves_index field
            //
            $column = new TextViewColumn('buildup_harves_index', 'Buildup Harves Index', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for normal_wp_eto_co2 field
            //
            $column = new TextViewColumn('normal_wp_eto_co2', 'Normal Wp Eto Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for normal_wp_eto_co2_yield field
            //
            $column = new TextViewColumn('normal_wp_eto_co2_yield', 'Normal Wp Eto Co2 Yield', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_perf_co2 field
            //
            $column = new TextViewColumn('crop_perf_co2', 'Crop Perf Co2', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for ref_hi field
            //
            $column = new TextViewColumn('ref_hi', 'Ref Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for increase_hi_wat_stres field
            //
            $column = new TextViewColumn('increase_hi_wat_stres', 'Increase Hi Wat Stres', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for no_impct_hi_restrict_veg field
            //
            $column = new TextViewColumn('no_impct_hi_restrict_veg', 'No Impct Hi Restrict Veg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for coef_neg_impact field
            //
            $column = new TextViewColumn('coef_neg_impact', 'Coef Neg Impact', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for max_increase_hi field
            //
            $column = new TextViewColumn('max_increase_hi', 'Max Increase Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for gdd_sow_emerg field
            //
            $column = new TextViewColumn('gdd_sow_emerg', 'Gdd Sow Emerg', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for gdd_sow_max_root field
            //
            $column = new TextViewColumn('gdd_sow_max_root', 'Gdd Sow Max Root', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for gdd_sow_senec field
            //
            $column = new TextViewColumn('gdd_sow_senec', 'Gdd Sow Senec', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for gdd_sow_matur field
            //
            $column = new TextViewColumn('gdd_sow_matur', 'Gdd Sow Matur', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for gdd_sow_flower field
            //
            $column = new TextViewColumn('gdd_sow_flower', 'Gdd Sow Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for gdd_length_flower field
            //
            $column = new TextViewColumn('gdd_length_flower', 'Gdd Length Flower', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cgc_ggdays_increase_cc_soil field
            //
            $column = new TextViewColumn('cgc_ggdays_increase_cc_soil', 'Cgc Ggdays Increase Cc Soil', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for cgc_ggdays_decrease_cc_ggd field
            //
            $column = new TextViewColumn('cgc_ggdays_decrease_cc_ggd', 'Cgc Ggdays Decrease Cc Ggd', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for gdd_buildup_hi field
            //
            $column = new TextViewColumn('gdd_buildup_hi', 'Gdd Buildup Hi', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for info_ID field
            //
            $column = new TextViewColumn('info_ID', 'Info ID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
        }
    
        public function GetPageDirection()
        {
            return null;
        }
    
        protected function ApplyCommonColumnEditProperties(CustomEditColumn $column)
        {
            $column->SetDisplaySetToNullCheckBox(false);
            $column->SetDisplaySetToDefaultCheckBox(false);
    		$column->SetVariableContainer($this->GetColumnVariableContainer());
        }
    
        function GetCustomClientScript()
        {
            return ;
        }
        
        function GetOnPageLoadedClientScript()
        {
            return ;
        }
        public function ShowEditButtonHandler(&$show)
        {
            if ($this->GetRecordPermission() != null)
                $show = $this->GetRecordPermission()->HasEditGrant($this->GetDataset());
        }
        public function ShowDeleteButtonHandler(&$show)
        {
            if ($this->GetRecordPermission() != null)
                $show = $this->GetRecordPermission()->HasDeleteGrant($this->GetDataset());
        }
        
        public function GetModalGridDeleteHandler() { return 'KBS_Aquacrop_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_AquacropGrid');
            if ($this->GetSecurityInfo()->HasDeleteGrant())
               $result->SetAllowDeleteSelected(false);
            else
               $result->SetAllowDeleteSelected(false);   
            
            ApplyCommonPageSettings($this, $result);
            
            $result->SetUseImagesForActions(false);
            $result->SetUseFixedHeader(false);
            $result->SetShowLineNumbers(false);
            $result->SetShowKeyColumnsImagesInHeader(false);
            
            $result->SetHighlightRowAtHover(false);
            $result->SetWidth('');
            $this->CreateGridSearchControl($result);
            $this->CreateGridAdvancedSearchControl($result);
            $this->AddOperationsColumns($result);
            $this->AddFieldColumns($result);
            $this->AddSingleRecordViewColumns($result);
            $this->AddEditColumns($result);
            $this->AddInsertColumns($result);
            $this->AddPrintColumns($result);
            $this->AddExportColumns($result);
    
            $this->SetShowPageList(true);
            $this->SetHidePageListByDefault(false);
            $this->SetExportToExcelAvailable(false);
            $this->SetExportToWordAvailable(false);
            $this->SetExportToXmlAvailable(false);
            $this->SetExportToCsvAvailable(false);
            $this->SetExportToPdfAvailable(false);
            $this->SetPrinterFriendlyAvailable(false);
            $this->SetSimpleSearchAvailable(true);
            $this->SetAdvancedSearchAvailable(false);
            $this->SetFilterRowAvailable(false);
            $this->SetVisualEffectsEnabled(false);
            $this->SetShowTopPageNavigator(true);
            $this->SetShowBottomPageNavigator(true);
    
            //
            // Http Handlers
            //
    
            return $result;
        }
        
        public function OpenAdvancedSearchByDefault()
        {
            return false;
        }
    
        protected function DoGetGridHeader()
        {
            return '';
        }
    }

    SetUpUserAuthorization(GetApplication());

    try
    {
        $Page = new KBS_AquacropPage("KBS_Aquacrop.php", "KBS_Aquacrop", GetCurrentUserGrantForDataSource("KBS_Aquacrop"), 'UTF-8');
        $Page->SetShortCaption('KBS Aquacrop');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Aquacrop');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Aquacrop"));
        GetApplication()->SetEnableLessRunTimeCompile(GetEnableLessFilesRunTimeCompilation());
        GetApplication()->SetCanUserChangeOwnPassword(
            !function_exists('CanUserChangeOwnPassword') || CanUserChangeOwnPassword());
        GetApplication()->SetMainPage($Page);
        GetApplication()->Run();
    }
    catch(Exception $e)
    {
        ShowErrorPage($e->getMessage());
    }
	

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
    
    
    
    class ecocropPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`ecocrop`');
            $field = new IntegerField('ecocrop_code');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('cropID');
            $this->dataset->AddField($field, false);
            $field = new StringField('sci_name');
            $this->dataset->AddField($field, false);
            $field = new StringField('ecocrop_lifeform');
            $this->dataset->AddField($field, false);
            $field = new StringField('ecocrop_phys');
            $this->dataset->AddField($field, false);
            $field = new StringField('ecocrop_habit');
            $this->dataset->AddField($field, false);
            $field = new StringField('ecocrop_Cat');
            $this->dataset->AddField($field, false);
            $field = new StringField('ecocrop_lifespan');
            $this->dataset->AddField($field, false);
            $field = new StringField('ecocrop_plant_attr');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_soildp_medium');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_soildp_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_temp_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_temp_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_temp_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_temp_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_soiltxt_med');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_soiltxt_med');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_rain_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_rain_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abst_rain_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_rain_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_soilfert_moderate');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_soilfert_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_lat_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_lat_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_lat_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_lat_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_soilAltox_moderate');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_soilAltox_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_alt_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_alt_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_alt_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_alt_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_soilsalinity_moderate');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_soilsalinity_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_ph_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_ph_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_ph_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_ph_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_soildrainage_well');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_soildrainage_well');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_li_min');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_li_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_li_min');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_li_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_clim_zone');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_phoprod_medium');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_kiltemp_rest');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_kiltemp_earlygrowth');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abio_toler');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abio_suscept');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_intro_risk');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_prdctn_system');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('ecocrop_crop_cycle_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('ecocrop_crop_cycle_max');
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
            $result->AddGroup($this->RenderText('Food Plants International'));
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
            if (GetCurrentUserGrantForDataSource('KBS_Global_Accuracy_Color')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Accuracy Color'), 'KBS_Global_Accuracy_Color.php', $this->RenderText('KBS Global Accuracy Color'), $currentPageCaption == $this->RenderText('KBS Global Accuracy Color'), false, $this->RenderText('Global Info')));
            if (GetCurrentUserGrantForDataSource('food_plants_international')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Food Plants International'), 'food_plants_international.php', $this->RenderText('Food Plants International'), $currentPageCaption == $this->RenderText('Food Plants International'), false, $this->RenderText('Food Plants International')));
            
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
            $grid->SearchControl = new SimpleSearch('ecocropssearch', $this->dataset,
                array('ecocrop_code', 'cropID_name_var_lndrce', 'sci_name', 'ecocrop_lifeform', 'ecocrop_phys', 'ecocrop_habit', 'ecocrop_Cat', 'ecocrop_lifespan', 'ecocrop_plant_attr', 'agr_ecol_opt_soildp_medium', 'agr_ecol_abs_soildp_mean', 'agr_ecol_opt_temp_min', 'agr_ecol_opt_temp_max', 'agr_ecol_abs_temp_min', 'agr_ecol_abs_temp_max', 'agr_ecol_opt_soiltxt_med', 'agr_ecol_abs_soiltxt_med', 'agr_ecol_opt_rain_min', 'agr_ecol_opt_rain_max', 'agr_ecol_abst_rain_min', 'agr_ecol_abs_rain_max', 'agr_ecol_opt_soilfert_moderate', 'agr_ecol_abs_soilfert_moderate', 'agr_ecol_opt_lat_min', 'agr_ecol_opt_lat_max', 'agr_ecol_abs_lat_min', 'agr_ecol_abs_lat_max', 'agr_ecol_opt_soilAltox_moderate', 'agr_ecol_abs_soilAltox_moderate', 'agr_ecol_opt_alt_min', 'agr_ecol_opt_alt_max', 'agr_ecol_abs_alt_min', 'agr_ecol_abs_alt_max', 'agr_ecol_opt_soilsalinity_moderate', 'agr_ecol_abs_soilsalinity_moderate', 'agr_ecol_opt_ph_min', 'agr_ecol_opt_ph_max', 'agr_ecol_abs_ph_min', 'agr_ecol_abs_ph_max', 'agr_ecol_opt_soildrainage_well', 'agr_ecol_abs_soildrainage_well', 'agr_ecol_opt_li_min', 'agr_ecol_opt_li_max', 'agr_ecol_abs_li_min', 'agr_ecol_abs_li_max', 'agr_ecol_clim_zone', 'agr_ecol_phoprod_medium', 'agr_ecol_kiltemp_rest', 'agr_ecol_kiltemp_earlygrowth', 'agr_ecol_abio_toler', 'agr_ecol_abio_suscept', 'agr_ecol_intro_risk', 'agr_ecol_prdctn_system', 'ecocrop_crop_cycle_min', 'ecocrop_crop_cycle_max'),
                array($this->RenderText('Ecocrop Code'), $this->RenderText('CropID'), $this->RenderText('Sci Name'), $this->RenderText('Ecocrop Lifeform'), $this->RenderText('Ecocrop Phys'), $this->RenderText('Ecocrop Habit'), $this->RenderText('Ecocrop Cat'), $this->RenderText('Ecocrop Lifespan'), $this->RenderText('Ecocrop Plant Attr'), $this->RenderText('Agr Ecol Opt Soildp Medium'), $this->RenderText('Agr Ecol Abs Soildp Mean'), $this->RenderText('Agr Ecol Opt Temp Min'), $this->RenderText('Agr Ecol Opt Temp Max'), $this->RenderText('Agr Ecol Abs Temp Min'), $this->RenderText('Agr Ecol Abs Temp Max'), $this->RenderText('Agr Ecol Opt Soiltxt Med'), $this->RenderText('Agr Ecol Abs Soiltxt Med'), $this->RenderText('Agr Ecol Opt Rain Min'), $this->RenderText('Agr Ecol Opt Rain Max'), $this->RenderText('Agr Ecol Abst Rain Min'), $this->RenderText('Agr Ecol Abs Rain Max'), $this->RenderText('Agr Ecol Opt Soilfert Moderate'), $this->RenderText('Agr Ecol Abs Soilfert Moderate'), $this->RenderText('Agr Ecol Opt Lat Min'), $this->RenderText('Agr Ecol Opt Lat Max'), $this->RenderText('Agr Ecol Abs Lat Min'), $this->RenderText('Agr Ecol Abs Lat Max'), $this->RenderText('Agr Ecol Opt SoilAltox Moderate'), $this->RenderText('Agr Ecol Abs SoilAltox Moderate'), $this->RenderText('Agr Ecol Opt Alt Min'), $this->RenderText('Agr Ecol Opt Alt Max'), $this->RenderText('Agr Ecol Abs Alt Min'), $this->RenderText('Agr Ecol Abs Alt Max'), $this->RenderText('Agr Ecol Opt Soilsalinity Moderate'), $this->RenderText('Agr Ecol Abs Soilsalinity Moderate'), $this->RenderText('Agr Ecol Opt Ph Min'), $this->RenderText('Agr Ecol Opt Ph Max'), $this->RenderText('Agr Ecol Abs Ph Min'), $this->RenderText('Agr Ecol Abs Ph Max'), $this->RenderText('Agr Ecol Opt Soildrainage Well'), $this->RenderText('Agr Ecol Abs Soildrainage Well'), $this->RenderText('Agr Ecol Opt Li Min'), $this->RenderText('Agr Ecol Opt Li Max'), $this->RenderText('Agr Ecol Abs Li Min'), $this->RenderText('Agr Ecol Abs Li Max'), $this->RenderText('Agr Ecol Clim Zone'), $this->RenderText('Agr Ecol Phoprod Medium'), $this->RenderText('Agr Ecol Kiltemp Rest'), $this->RenderText('Agr Ecol Kiltemp Earlygrowth'), $this->RenderText('Agr Ecol Abio Toler'), $this->RenderText('Agr Ecol Abio Suscept'), $this->RenderText('Agr Ecol Intro Risk'), $this->RenderText('Agr Ecol Prdctn System'), $this->RenderText('Ecocrop Crop Cycle Min'), $this->RenderText('Ecocrop Crop Cycle Max')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('ecocropasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_code', $this->RenderText('Ecocrop Code')));
            
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
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('sci_name', $this->RenderText('Sci Name')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_lifeform', $this->RenderText('Ecocrop Lifeform')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_phys', $this->RenderText('Ecocrop Phys')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_habit', $this->RenderText('Ecocrop Habit')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_Cat', $this->RenderText('Ecocrop Cat')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_lifespan', $this->RenderText('Ecocrop Lifespan')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_plant_attr', $this->RenderText('Ecocrop Plant Attr')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildp_medium', $this->RenderText('Agr Ecol Opt Soildp Medium')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildp_mean', $this->RenderText('Agr Ecol Abs Soildp Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_temp_min', $this->RenderText('Agr Ecol Opt Temp Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_temp_max', $this->RenderText('Agr Ecol Opt Temp Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_temp_min', $this->RenderText('Agr Ecol Abs Temp Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_temp_max', $this->RenderText('Agr Ecol Abs Temp Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soiltxt_med', $this->RenderText('Agr Ecol Opt Soiltxt Med')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soiltxt_med', $this->RenderText('Agr Ecol Abs Soiltxt Med')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_rain_min', $this->RenderText('Agr Ecol Opt Rain Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_rain_max', $this->RenderText('Agr Ecol Opt Rain Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abst_rain_min', $this->RenderText('Agr Ecol Abst Rain Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_rain_max', $this->RenderText('Agr Ecol Abs Rain Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilfert_moderate', $this->RenderText('Agr Ecol Opt Soilfert Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilfert_moderate', $this->RenderText('Agr Ecol Abs Soilfert Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_lat_min', $this->RenderText('Agr Ecol Opt Lat Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_lat_max', $this->RenderText('Agr Ecol Opt Lat Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_lat_min', $this->RenderText('Agr Ecol Abs Lat Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_lat_max', $this->RenderText('Agr Ecol Abs Lat Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilAltox_moderate', $this->RenderText('Agr Ecol Opt SoilAltox Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilAltox_moderate', $this->RenderText('Agr Ecol Abs SoilAltox Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_alt_min', $this->RenderText('Agr Ecol Opt Alt Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_alt_max', $this->RenderText('Agr Ecol Opt Alt Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_alt_min', $this->RenderText('Agr Ecol Abs Alt Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_alt_max', $this->RenderText('Agr Ecol Abs Alt Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilsalinity_moderate', $this->RenderText('Agr Ecol Opt Soilsalinity Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilsalinity_moderate', $this->RenderText('Agr Ecol Abs Soilsalinity Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_ph_min', $this->RenderText('Agr Ecol Opt Ph Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_ph_max', $this->RenderText('Agr Ecol Opt Ph Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_ph_min', $this->RenderText('Agr Ecol Abs Ph Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_ph_max', $this->RenderText('Agr Ecol Abs Ph Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildrainage_well', $this->RenderText('Agr Ecol Opt Soildrainage Well')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildrainage_well', $this->RenderText('Agr Ecol Abs Soildrainage Well')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_li_min', $this->RenderText('Agr Ecol Opt Li Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_li_max', $this->RenderText('Agr Ecol Opt Li Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_li_min', $this->RenderText('Agr Ecol Abs Li Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_li_max', $this->RenderText('Agr Ecol Abs Li Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_clim_zone', $this->RenderText('Agr Ecol Clim Zone')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_phoprod_medium', $this->RenderText('Agr Ecol Phoprod Medium')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_kiltemp_rest', $this->RenderText('Agr Ecol Kiltemp Rest')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_kiltemp_earlygrowth', $this->RenderText('Agr Ecol Kiltemp Earlygrowth')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abio_toler', $this->RenderText('Agr Ecol Abio Toler')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abio_suscept', $this->RenderText('Agr Ecol Abio Suscept')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_intro_risk', $this->RenderText('Agr Ecol Intro Risk')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_prdctn_system', $this->RenderText('Agr Ecol Prdctn System')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_crop_cycle_min', $this->RenderText('Ecocrop Crop Cycle Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ecocrop_crop_cycle_max', $this->RenderText('Ecocrop Crop Cycle Max')));
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
            // View column for ecocrop_code field
            //
            $column = new TextViewColumn('ecocrop_code', 'Ecocrop Code', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for sci_name field
            //
            $column = new TextViewColumn('sci_name', 'Sci Name', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_lifeform field
            //
            $column = new TextViewColumn('ecocrop_lifeform', 'Ecocrop Lifeform', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_lifeform_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_phys field
            //
            $column = new TextViewColumn('ecocrop_phys', 'Ecocrop Phys', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_phys_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_habit field
            //
            $column = new TextViewColumn('ecocrop_habit', 'Ecocrop Habit', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_habit_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_Cat field
            //
            $column = new TextViewColumn('ecocrop_Cat', 'Ecocrop Cat', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_Cat_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_lifespan field
            //
            $column = new TextViewColumn('ecocrop_lifespan', 'Ecocrop Lifespan', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_lifespan_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_plant_attr field
            //
            $column = new TextViewColumn('ecocrop_plant_attr', 'Ecocrop Plant Attr', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_plant_attr_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soildp_medium_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soildp_mean_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soiltxt_med_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soiltxt_med_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soilfert_moderate_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soilfert_moderate_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soilAltox_moderate_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soilAltox_moderate_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soilsalinity_moderate_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soilsalinity_moderate_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_min', 'Agr Ecol Opt Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_max', 'Agr Ecol Opt Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_min', 'Agr Ecol Abs Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_max', 'Agr Ecol Abs Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soildrainage_well_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soildrainage_well_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_li_min_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_li_max_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_li_min_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_li_max_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_clim_zone_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_phoprod_medium_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_rest field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_rest', 'Agr Ecol Kiltemp Rest', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_earlygrowth field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_earlygrowth', 'Agr Ecol Kiltemp Earlygrowth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abio_toler_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abio_suscept_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_intro_risk_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_prdctn_system_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_min field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_min', 'Ecocrop Crop Cycle Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_max field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_max', 'Ecocrop Crop Cycle Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for ecocrop_code field
            //
            $column = new TextViewColumn('ecocrop_code', 'Ecocrop Code', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for sci_name field
            //
            $column = new TextViewColumn('sci_name', 'Sci Name', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_lifeform field
            //
            $column = new TextViewColumn('ecocrop_lifeform', 'Ecocrop Lifeform', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_lifeform_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_phys field
            //
            $column = new TextViewColumn('ecocrop_phys', 'Ecocrop Phys', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_phys_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_habit field
            //
            $column = new TextViewColumn('ecocrop_habit', 'Ecocrop Habit', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_habit_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_Cat field
            //
            $column = new TextViewColumn('ecocrop_Cat', 'Ecocrop Cat', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_Cat_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_lifespan field
            //
            $column = new TextViewColumn('ecocrop_lifespan', 'Ecocrop Lifespan', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_lifespan_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_plant_attr field
            //
            $column = new TextViewColumn('ecocrop_plant_attr', 'Ecocrop Plant Attr', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_ecocrop_plant_attr_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soildp_medium_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soildp_mean_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soiltxt_med_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soiltxt_med_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soilfert_moderate_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soilfert_moderate_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soilAltox_moderate_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soilAltox_moderate_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soilsalinity_moderate_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soilsalinity_moderate_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_min', 'Agr Ecol Opt Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_max', 'Agr Ecol Opt Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_min', 'Agr Ecol Abs Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_max', 'Agr Ecol Abs Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_soildrainage_well_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_soildrainage_well_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_li_min_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_opt_li_max_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_li_min_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abs_li_max_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_clim_zone_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_phoprod_medium_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_rest field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_rest', 'Agr Ecol Kiltemp Rest', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_earlygrowth field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_earlygrowth', 'Agr Ecol Kiltemp Earlygrowth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abio_toler_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_abio_suscept_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_intro_risk_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('ecocropGrid_agr_ecol_prdctn_system_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_min field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_min', 'Ecocrop Crop Cycle Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_max field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_max', 'Ecocrop Crop Cycle Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for ecocrop_code field
            //
            $editor = new TextEdit('ecocrop_code_edit');
            $editColumn = new CustomEditColumn('Ecocrop Code', 'ecocrop_code', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
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
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for sci_name field
            //
            $editor = new TextEdit('sci_name_edit');
            $editor->SetSize(45);
            $editor->SetMaxLength(45);
            $editColumn = new CustomEditColumn('Sci Name', 'sci_name', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_lifeform field
            //
            $editor = new TextAreaEdit('ecocrop_lifeform_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Lifeform', 'ecocrop_lifeform', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_phys field
            //
            $editor = new TextAreaEdit('ecocrop_phys_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Phys', 'ecocrop_phys', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_habit field
            //
            $editor = new TextAreaEdit('ecocrop_habit_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Habit', 'ecocrop_habit', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_Cat field
            //
            $editor = new TextAreaEdit('ecocrop_cat_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Cat', 'ecocrop_Cat', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_lifespan field
            //
            $editor = new TextAreaEdit('ecocrop_lifespan_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Lifespan', 'ecocrop_lifespan', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_plant_attr field
            //
            $editor = new TextAreaEdit('ecocrop_plant_attr_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Plant Attr', 'ecocrop_plant_attr', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_medium field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soildp_medium_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Medium', 'agr_ecol_opt_soildp_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_mean field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soildp_mean_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Mean', 'agr_ecol_abs_soildp_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_temp_min field
            //
            $editor = new TextEdit('agr_ecol_opt_temp_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Temp Min', 'agr_ecol_opt_temp_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_temp_max field
            //
            $editor = new TextEdit('agr_ecol_opt_temp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Temp Max', 'agr_ecol_opt_temp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_temp_min field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Min', 'agr_ecol_abs_temp_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_temp_max field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Max', 'agr_ecol_abs_temp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_med field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soiltxt_med_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Med', 'agr_ecol_opt_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_med field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soiltxt_med_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt Med', 'agr_ecol_abs_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_rain_min field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Min', 'agr_ecol_opt_rain_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_rain_max field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Max', 'agr_ecol_opt_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abst_rain_min field
            //
            $editor = new TextEdit('agr_ecol_abst_rain_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abst Rain Min', 'agr_ecol_abst_rain_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_rain_max field
            //
            $editor = new TextEdit('agr_ecol_abs_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Rain Max', 'agr_ecol_abs_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soilfert_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert Moderate', 'agr_ecol_opt_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soilfert_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert Moderate', 'agr_ecol_abs_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_lat_min field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Min', 'agr_ecol_opt_lat_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_lat_max field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Max', 'agr_ecol_opt_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_lat_min field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Min', 'agr_ecol_abs_lat_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_lat_max field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Max', 'agr_ecol_abs_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soilaltox_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox Moderate', 'agr_ecol_opt_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soilaltox_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox Moderate', 'agr_ecol_abs_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_alt_min field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Min', 'agr_ecol_opt_alt_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_alt_max field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Max', 'agr_ecol_opt_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_alt_min field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Min', 'agr_ecol_abs_alt_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_alt_max field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Max', 'agr_ecol_abs_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soilsalinity_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity Moderate', 'agr_ecol_opt_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soilsalinity_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity Moderate', 'agr_ecol_abs_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_ph_min field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Min', 'agr_ecol_opt_ph_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_ph_max field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Max', 'agr_ecol_opt_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_ph_min field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Min', 'agr_ecol_abs_ph_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_ph_max field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Max', 'agr_ecol_abs_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainage_well field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soildrainage_well_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainage Well', 'agr_ecol_opt_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainage_well field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soildrainage_well_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainage Well', 'agr_ecol_abs_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_min field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_li_min_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Min', 'agr_ecol_opt_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_max field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_li_max_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Max', 'agr_ecol_opt_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_min field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_li_min_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Min', 'agr_ecol_abs_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_max field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_li_max_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Max', 'agr_ecol_abs_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clim_zone field
            //
            $editor = new TextAreaEdit('agr_ecol_clim_zone_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Clim Zone', 'agr_ecol_clim_zone', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_medium field
            //
            $editor = new TextAreaEdit('agr_ecol_phoprod_medium_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Medium', 'agr_ecol_phoprod_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_kiltemp_rest field
            //
            $editor = new TextEdit('agr_ecol_kiltemp_rest_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Kiltemp Rest', 'agr_ecol_kiltemp_rest', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_kiltemp_earlygrowth field
            //
            $editor = new TextEdit('agr_ecol_kiltemp_earlygrowth_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Kiltemp Earlygrowth', 'agr_ecol_kiltemp_earlygrowth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abio_toler field
            //
            $editor = new TextAreaEdit('agr_ecol_abio_toler_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Toler', 'agr_ecol_abio_toler', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abio_suscept field
            //
            $editor = new TextAreaEdit('agr_ecol_abio_suscept_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Suscept', 'agr_ecol_abio_suscept', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_intro_risk field
            //
            $editor = new TextAreaEdit('agr_ecol_intro_risk_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Intro Risk', 'agr_ecol_intro_risk', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_prdctn_system field
            //
            $editor = new TextAreaEdit('agr_ecol_prdctn_system_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Prdctn System', 'agr_ecol_prdctn_system', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_crop_cycle_min field
            //
            $editor = new TextEdit('ecocrop_crop_cycle_min_edit');
            $editColumn = new CustomEditColumn('Ecocrop Crop Cycle Min', 'ecocrop_crop_cycle_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ecocrop_crop_cycle_max field
            //
            $editor = new TextEdit('ecocrop_crop_cycle_max_edit');
            $editColumn = new CustomEditColumn('Ecocrop Crop Cycle Max', 'ecocrop_crop_cycle_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for ecocrop_code field
            //
            $editor = new TextEdit('ecocrop_code_edit');
            $editColumn = new CustomEditColumn('Ecocrop Code', 'ecocrop_code', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
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
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for sci_name field
            //
            $editor = new TextEdit('sci_name_edit');
            $editor->SetSize(45);
            $editor->SetMaxLength(45);
            $editColumn = new CustomEditColumn('Sci Name', 'sci_name', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_lifeform field
            //
            $editor = new TextAreaEdit('ecocrop_lifeform_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Lifeform', 'ecocrop_lifeform', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_phys field
            //
            $editor = new TextAreaEdit('ecocrop_phys_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Phys', 'ecocrop_phys', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_habit field
            //
            $editor = new TextAreaEdit('ecocrop_habit_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Habit', 'ecocrop_habit', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_Cat field
            //
            $editor = new TextAreaEdit('ecocrop_cat_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Cat', 'ecocrop_Cat', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_lifespan field
            //
            $editor = new TextAreaEdit('ecocrop_lifespan_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Lifespan', 'ecocrop_lifespan', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_plant_attr field
            //
            $editor = new TextAreaEdit('ecocrop_plant_attr_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ecocrop Plant Attr', 'ecocrop_plant_attr', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_medium field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soildp_medium_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Medium', 'agr_ecol_opt_soildp_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_mean field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soildp_mean_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Mean', 'agr_ecol_abs_soildp_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_temp_min field
            //
            $editor = new TextEdit('agr_ecol_opt_temp_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Temp Min', 'agr_ecol_opt_temp_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_temp_max field
            //
            $editor = new TextEdit('agr_ecol_opt_temp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Temp Max', 'agr_ecol_opt_temp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_temp_min field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Min', 'agr_ecol_abs_temp_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_temp_max field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Max', 'agr_ecol_abs_temp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_med field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soiltxt_med_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Med', 'agr_ecol_opt_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_med field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soiltxt_med_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt Med', 'agr_ecol_abs_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_rain_min field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Min', 'agr_ecol_opt_rain_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_rain_max field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Max', 'agr_ecol_opt_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abst_rain_min field
            //
            $editor = new TextEdit('agr_ecol_abst_rain_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abst Rain Min', 'agr_ecol_abst_rain_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_rain_max field
            //
            $editor = new TextEdit('agr_ecol_abs_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Rain Max', 'agr_ecol_abs_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soilfert_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert Moderate', 'agr_ecol_opt_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soilfert_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert Moderate', 'agr_ecol_abs_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_lat_min field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Min', 'agr_ecol_opt_lat_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_lat_max field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Max', 'agr_ecol_opt_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_lat_min field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Min', 'agr_ecol_abs_lat_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_lat_max field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Max', 'agr_ecol_abs_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soilaltox_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox Moderate', 'agr_ecol_opt_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soilaltox_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox Moderate', 'agr_ecol_abs_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_alt_min field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Min', 'agr_ecol_opt_alt_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_alt_max field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Max', 'agr_ecol_opt_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_alt_min field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Min', 'agr_ecol_abs_alt_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_alt_max field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Max', 'agr_ecol_abs_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soilsalinity_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity Moderate', 'agr_ecol_opt_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_moderate field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soilsalinity_moderate_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity Moderate', 'agr_ecol_abs_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_ph_min field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Min', 'agr_ecol_opt_ph_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_ph_max field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Max', 'agr_ecol_opt_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_ph_min field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Min', 'agr_ecol_abs_ph_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_ph_max field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Max', 'agr_ecol_abs_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainage_well field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_soildrainage_well_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainage Well', 'agr_ecol_opt_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainage_well field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_soildrainage_well_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainage Well', 'agr_ecol_abs_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_min field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_li_min_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Min', 'agr_ecol_opt_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_max field
            //
            $editor = new TextAreaEdit('agr_ecol_opt_li_max_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Max', 'agr_ecol_opt_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_min field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_li_min_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Min', 'agr_ecol_abs_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_max field
            //
            $editor = new TextAreaEdit('agr_ecol_abs_li_max_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Max', 'agr_ecol_abs_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clim_zone field
            //
            $editor = new TextAreaEdit('agr_ecol_clim_zone_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Clim Zone', 'agr_ecol_clim_zone', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_medium field
            //
            $editor = new TextAreaEdit('agr_ecol_phoprod_medium_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Medium', 'agr_ecol_phoprod_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_kiltemp_rest field
            //
            $editor = new TextEdit('agr_ecol_kiltemp_rest_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Kiltemp Rest', 'agr_ecol_kiltemp_rest', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_kiltemp_earlygrowth field
            //
            $editor = new TextEdit('agr_ecol_kiltemp_earlygrowth_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Kiltemp Earlygrowth', 'agr_ecol_kiltemp_earlygrowth', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abio_toler field
            //
            $editor = new TextAreaEdit('agr_ecol_abio_toler_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Toler', 'agr_ecol_abio_toler', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abio_suscept field
            //
            $editor = new TextAreaEdit('agr_ecol_abio_suscept_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Suscept', 'agr_ecol_abio_suscept', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_intro_risk field
            //
            $editor = new TextAreaEdit('agr_ecol_intro_risk_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Intro Risk', 'agr_ecol_intro_risk', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_prdctn_system field
            //
            $editor = new TextAreaEdit('agr_ecol_prdctn_system_edit', 50, 8);
            $editColumn = new CustomEditColumn('Agr Ecol Prdctn System', 'agr_ecol_prdctn_system', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_crop_cycle_min field
            //
            $editor = new TextEdit('ecocrop_crop_cycle_min_edit');
            $editColumn = new CustomEditColumn('Ecocrop Crop Cycle Min', 'ecocrop_crop_cycle_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ecocrop_crop_cycle_max field
            //
            $editor = new TextEdit('ecocrop_crop_cycle_max_edit');
            $editColumn = new CustomEditColumn('Ecocrop Crop Cycle Max', 'ecocrop_crop_cycle_max', $editor, $this->dataset);
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
            // View column for ecocrop_code field
            //
            $column = new TextViewColumn('ecocrop_code', 'Ecocrop Code', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for sci_name field
            //
            $column = new TextViewColumn('sci_name', 'Sci Name', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_lifeform field
            //
            $column = new TextViewColumn('ecocrop_lifeform', 'Ecocrop Lifeform', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_phys field
            //
            $column = new TextViewColumn('ecocrop_phys', 'Ecocrop Phys', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_habit field
            //
            $column = new TextViewColumn('ecocrop_habit', 'Ecocrop Habit', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_Cat field
            //
            $column = new TextViewColumn('ecocrop_Cat', 'Ecocrop Cat', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_lifespan field
            //
            $column = new TextViewColumn('ecocrop_lifespan', 'Ecocrop Lifespan', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_plant_attr field
            //
            $column = new TextViewColumn('ecocrop_plant_attr', 'Ecocrop Plant Attr', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_min', 'Agr Ecol Opt Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_max', 'Agr Ecol Opt Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_min', 'Agr Ecol Abs Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_max', 'Agr Ecol Abs Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_rest field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_rest', 'Agr Ecol Kiltemp Rest', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_earlygrowth field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_earlygrowth', 'Agr Ecol Kiltemp Earlygrowth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_min field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_min', 'Ecocrop Crop Cycle Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_max field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_max', 'Ecocrop Crop Cycle Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for ecocrop_code field
            //
            $column = new TextViewColumn('ecocrop_code', 'Ecocrop Code', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for sci_name field
            //
            $column = new TextViewColumn('sci_name', 'Sci Name', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_lifeform field
            //
            $column = new TextViewColumn('ecocrop_lifeform', 'Ecocrop Lifeform', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_phys field
            //
            $column = new TextViewColumn('ecocrop_phys', 'Ecocrop Phys', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_habit field
            //
            $column = new TextViewColumn('ecocrop_habit', 'Ecocrop Habit', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_Cat field
            //
            $column = new TextViewColumn('ecocrop_Cat', 'Ecocrop Cat', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_lifespan field
            //
            $column = new TextViewColumn('ecocrop_lifespan', 'Ecocrop Lifespan', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_plant_attr field
            //
            $column = new TextViewColumn('ecocrop_plant_attr', 'Ecocrop Plant Attr', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_min', 'Agr Ecol Opt Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_max', 'Agr Ecol Opt Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_min', 'Agr Ecol Abs Ph Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_max', 'Agr Ecol Abs Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_rest field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_rest', 'Agr Ecol Kiltemp Rest', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_kiltemp_earlygrowth field
            //
            $column = new TextViewColumn('agr_ecol_kiltemp_earlygrowth', 'Agr Ecol Kiltemp Earlygrowth', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_min field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_min', 'Ecocrop Crop Cycle Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ecocrop_crop_cycle_max field
            //
            $column = new TextViewColumn('ecocrop_crop_cycle_max', 'Ecocrop Crop Cycle Max', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'ecocrop_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'ecocropGrid');
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
            //
            // View column for ecocrop_lifeform field
            //
            $column = new TextViewColumn('ecocrop_lifeform', 'Ecocrop Lifeform', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_lifeform_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_phys field
            //
            $column = new TextViewColumn('ecocrop_phys', 'Ecocrop Phys', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_phys_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_habit field
            //
            $column = new TextViewColumn('ecocrop_habit', 'Ecocrop Habit', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_habit_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_Cat field
            //
            $column = new TextViewColumn('ecocrop_Cat', 'Ecocrop Cat', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_Cat_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_lifespan field
            //
            $column = new TextViewColumn('ecocrop_lifespan', 'Ecocrop Lifespan', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_lifespan_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_plant_attr field
            //
            $column = new TextViewColumn('ecocrop_plant_attr', 'Ecocrop Plant Attr', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_plant_attr_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soildp_medium_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soildp_mean_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soiltxt_med_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soiltxt_med_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soilfert_moderate_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soilfert_moderate_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soilAltox_moderate_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soilAltox_moderate_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soilsalinity_moderate_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soilsalinity_moderate_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soildrainage_well_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soildrainage_well_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_li_min_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_li_max_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_li_min_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_li_max_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_clim_zone_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_phoprod_medium_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abio_toler_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abio_suscept_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_intro_risk_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_prdctn_system_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for ecocrop_lifeform field
            //
            $column = new TextViewColumn('ecocrop_lifeform', 'Ecocrop Lifeform', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_lifeform_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_phys field
            //
            $column = new TextViewColumn('ecocrop_phys', 'Ecocrop Phys', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_phys_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_habit field
            //
            $column = new TextViewColumn('ecocrop_habit', 'Ecocrop Habit', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_habit_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_Cat field
            //
            $column = new TextViewColumn('ecocrop_Cat', 'Ecocrop Cat', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_Cat_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_lifespan field
            //
            $column = new TextViewColumn('ecocrop_lifespan', 'Ecocrop Lifespan', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_lifespan_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ecocrop_plant_attr field
            //
            $column = new TextViewColumn('ecocrop_plant_attr', 'Ecocrop Plant Attr', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_ecocrop_plant_attr_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soildp_medium_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soildp_mean_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soiltxt_med_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soiltxt_med_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soilfert_moderate_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soilfert_moderate_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soilAltox_moderate_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soilAltox_moderate_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soilsalinity_moderate_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soilsalinity_moderate_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_soildrainage_well_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_soildrainage_well_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_li_min_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_opt_li_max_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_li_min_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abs_li_max_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_clim_zone_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_phoprod_medium_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abio_toler_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_abio_suscept_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_intro_risk_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'ecocropGrid_agr_ecol_prdctn_system_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
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
        $Page = new ecocropPage("ecocrop.php", "ecocrop", GetCurrentUserGrantForDataSource("ecocrop"), 'UTF-8');
        $Page->SetShortCaption('Ecocrop');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('Ecocrop');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("ecocrop"));
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
	

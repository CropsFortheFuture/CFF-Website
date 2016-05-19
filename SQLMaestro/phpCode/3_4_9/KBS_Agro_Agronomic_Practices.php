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
    
    
    
    class KBS_Agro_Agronomic_PracticesPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Agro_Agronomic_Practices`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('location_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('week_irrig_rate_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('week_irrig_rate_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('week_irrig_rate_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('freq_Irrigation_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('freq_Irrigation_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('freq_Irrigation_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irr_pln_emrgncy_seed');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irr_pln_vgt_stg');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irr_pln_reprod');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irr_pln_matur');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irrig_drip');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irrig_other');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irrig_sprinkler');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irrig_subsurface');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irrig_surface');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('irrig_fertigation');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('row_Spac_Inter_row_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('row_Spac_Inter_row_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('row_Spac_Inter_row_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('plant_dir_seeding');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('plant_transplanting');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('plant_veg_propag');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('plant_mthd_mech');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('row_spac_within_row_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('row_spac_within_row_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('row_spac_within_row_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('tillage_plough');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('tillage_cultivar');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('tillage_rolling');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('tillage_harrow');
            $this->dataset->AddField($field, false);
            $field = new StringField('tillage_other');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('harvesting_mech');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('sowing_rate_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('sowing_rate_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('sowing_rate_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_comrcl');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_hybrid_fx');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_bvkcrs_bcxfx');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_selected');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_unimproved');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_purified');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_ril');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_nil');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('seed_type_other');
            $this->dataset->AddField($field, false);
            $field = new StringField('kbs_agropract_others');
            $this->dataset->AddField($field, false);
            $this->dataset->AddLookupField('cropID', 'KBS_General', new IntegerField('cropID', null, null, true), new StringField('name_var_lndrce', 'cropID_name_var_lndrce', 'cropID_name_var_lndrce_KBS_General'), 'cropID_name_var_lndrce_KBS_General');
            $this->dataset->AddLookupField('location_id', 'KBS_Global_Google_PlaceID', new IntegerField('id', null, null, true), new StringField('google_address', 'location_id_google_address', 'location_id_google_address_KBS_Global_Google_PlaceID'), 'location_id_google_address_KBS_Global_Google_PlaceID');
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
            $grid->SearchControl = new SimpleSearch('KBS_Agro_Agronomic_Practicesssearch', $this->dataset,
                array('id', 'cropID_name_var_lndrce', 'location_id_google_address', 'week_irrig_rate_max', 'week_irrig_rate_mean', 'week_irrig_rate_min', 'freq_Irrigation_max', 'freq_Irrigation_mean', 'freq_Irrigation_min', 'irr_pln_emrgncy_seed', 'irr_pln_vgt_stg', 'irr_pln_reprod', 'irr_pln_matur', 'irrig_drip', 'irrig_other', 'irrig_sprinkler', 'irrig_subsurface', 'irrig_surface', 'irrig_fertigation', 'row_Spac_Inter_row_max', 'row_Spac_Inter_row_mean', 'row_Spac_Inter_row_min', 'plant_dir_seeding', 'plant_transplanting', 'plant_veg_propag', 'plant_mthd_mech', 'row_spac_within_row_max', 'row_spac_within_row_mean', 'row_spac_within_row_min', 'tillage_plough', 'tillage_cultivar', 'tillage_rolling', 'tillage_harrow', 'tillage_other', 'harvesting_mech', 'sowing_rate_max', 'sowing_rate_mean', 'sowing_rate_min', 'seed_type_comrcl', 'seed_type_hybrid_fx', 'seed_type_bvkcrs_bcxfx', 'seed_type_selected', 'seed_type_unimproved', 'seed_type_purified', 'seed_type_ril', 'seed_type_nil', 'seed_type_other', 'kbs_agropract_others'),
                array($this->RenderText('Id'), $this->RenderText('CropID'), $this->RenderText('Location Id'), $this->RenderText('Week Irrig Rate Max'), $this->RenderText('Week Irrig Rate Mean'), $this->RenderText('Week Irrig Rate Min'), $this->RenderText('Freq Irrigation Max'), $this->RenderText('Freq Irrigation Mean'), $this->RenderText('Freq Irrigation Min'), $this->RenderText('Irr Pln Emrgncy Seed'), $this->RenderText('Irr Pln Vgt Stg'), $this->RenderText('Irr Pln Reprod'), $this->RenderText('Irr Pln Matur'), $this->RenderText('Irrig Drip'), $this->RenderText('Irrig Other'), $this->RenderText('Irrig Sprinkler'), $this->RenderText('Irrig Subsurface'), $this->RenderText('Irrig Surface'), $this->RenderText('Irrig Fertigation'), $this->RenderText('Row Spac Inter Row Max'), $this->RenderText('Row Spac Inter Row Mean'), $this->RenderText('Row Spac Inter Row Min'), $this->RenderText('Plant Dir Seeding'), $this->RenderText('Plant Transplanting'), $this->RenderText('Plant Veg Propag'), $this->RenderText('Plant Mthd Mech'), $this->RenderText('Row Spac Within Row Max'), $this->RenderText('Row Spac Within Row Mean'), $this->RenderText('Row Spac Within Row Min'), $this->RenderText('Tillage Plough'), $this->RenderText('Tillage Cultivar'), $this->RenderText('Tillage Rolling'), $this->RenderText('Tillage Harrow'), $this->RenderText('Tillage Other'), $this->RenderText('Harvesting Mech'), $this->RenderText('Sowing Rate Max'), $this->RenderText('Sowing Rate Mean'), $this->RenderText('Sowing Rate Min'), $this->RenderText('Seed Type Comrcl'), $this->RenderText('Seed Type Hybrid Fx'), $this->RenderText('Seed Type Bvkcrs Bcxfx'), $this->RenderText('Seed Type Selected'), $this->RenderText('Seed Type Unimproved'), $this->RenderText('Seed Type Purified'), $this->RenderText('Seed Type Ril'), $this->RenderText('Seed Type Nil'), $this->RenderText('Seed Type Other'), $this->RenderText('Kbs Agropract Others')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Agro_Agronomic_Practicesasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('id', $this->RenderText('Id')));
            
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
            
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Global_Google_PlaceID`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('google_place_id');
            $lookupDataset->AddField($field, false);
            $field = new StringField('google_address');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('google_address', GetOrderTypeAsSQL(otAscending));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateLookupSearchInput('location_id', $this->RenderText('Location Id'), $lookupDataset, 'id', 'google_address', false, 8));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('week_irrig_rate_max', $this->RenderText('Week Irrig Rate Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('week_irrig_rate_mean', $this->RenderText('Week Irrig Rate Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('week_irrig_rate_min', $this->RenderText('Week Irrig Rate Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('freq_Irrigation_max', $this->RenderText('Freq Irrigation Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('freq_Irrigation_mean', $this->RenderText('Freq Irrigation Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('freq_Irrigation_min', $this->RenderText('Freq Irrigation Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irr_pln_emrgncy_seed', $this->RenderText('Irr Pln Emrgncy Seed')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irr_pln_vgt_stg', $this->RenderText('Irr Pln Vgt Stg')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irr_pln_reprod', $this->RenderText('Irr Pln Reprod')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irr_pln_matur', $this->RenderText('Irr Pln Matur')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irrig_drip', $this->RenderText('Irrig Drip')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irrig_other', $this->RenderText('Irrig Other')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irrig_sprinkler', $this->RenderText('Irrig Sprinkler')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irrig_subsurface', $this->RenderText('Irrig Subsurface')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irrig_surface', $this->RenderText('Irrig Surface')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('irrig_fertigation', $this->RenderText('Irrig Fertigation')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('row_Spac_Inter_row_max', $this->RenderText('Row Spac Inter Row Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('row_Spac_Inter_row_mean', $this->RenderText('Row Spac Inter Row Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('row_Spac_Inter_row_min', $this->RenderText('Row Spac Inter Row Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('plant_dir_seeding', $this->RenderText('Plant Dir Seeding')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('plant_transplanting', $this->RenderText('Plant Transplanting')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('plant_veg_propag', $this->RenderText('Plant Veg Propag')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('plant_mthd_mech', $this->RenderText('Plant Mthd Mech')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('row_spac_within_row_max', $this->RenderText('Row Spac Within Row Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('row_spac_within_row_mean', $this->RenderText('Row Spac Within Row Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('row_spac_within_row_min', $this->RenderText('Row Spac Within Row Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('tillage_plough', $this->RenderText('Tillage Plough')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('tillage_cultivar', $this->RenderText('Tillage Cultivar')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('tillage_rolling', $this->RenderText('Tillage Rolling')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('tillage_harrow', $this->RenderText('Tillage Harrow')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('tillage_other', $this->RenderText('Tillage Other')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('harvesting_mech', $this->RenderText('Harvesting Mech')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('sowing_rate_max', $this->RenderText('Sowing Rate Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('sowing_rate_mean', $this->RenderText('Sowing Rate Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('sowing_rate_min', $this->RenderText('Sowing Rate Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_comrcl', $this->RenderText('Seed Type Comrcl')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_hybrid_fx', $this->RenderText('Seed Type Hybrid Fx')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_bvkcrs_bcxfx', $this->RenderText('Seed Type Bvkcrs Bcxfx')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_selected', $this->RenderText('Seed Type Selected')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_unimproved', $this->RenderText('Seed Type Unimproved')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_purified', $this->RenderText('Seed Type Purified')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_ril', $this->RenderText('Seed Type Ril')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_nil', $this->RenderText('Seed Type Nil')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('seed_type_other', $this->RenderText('Seed Type Other')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('kbs_agropract_others', $this->RenderText('Kbs Agropract Others')));
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
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for week_irrig_rate_max field
            //
            $column = new TextViewColumn('week_irrig_rate_max', 'Week Irrig Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for week_irrig_rate_mean field
            //
            $column = new TextViewColumn('week_irrig_rate_mean', 'Week Irrig Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for week_irrig_rate_min field
            //
            $column = new TextViewColumn('week_irrig_rate_min', 'Week Irrig Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for freq_Irrigation_max field
            //
            $column = new TextViewColumn('freq_Irrigation_max', 'Freq Irrigation Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for freq_Irrigation_mean field
            //
            $column = new TextViewColumn('freq_Irrigation_mean', 'Freq Irrigation Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for freq_Irrigation_min field
            //
            $column = new TextViewColumn('freq_Irrigation_min', 'Freq Irrigation Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irr_pln_emrgncy_seed field
            //
            $column = new TextViewColumn('irr_pln_emrgncy_seed', 'Irr Pln Emrgncy Seed', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irr_pln_vgt_stg field
            //
            $column = new TextViewColumn('irr_pln_vgt_stg', 'Irr Pln Vgt Stg', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irr_pln_reprod field
            //
            $column = new TextViewColumn('irr_pln_reprod', 'Irr Pln Reprod', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irr_pln_matur field
            //
            $column = new TextViewColumn('irr_pln_matur', 'Irr Pln Matur', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irrig_drip field
            //
            $column = new TextViewColumn('irrig_drip', 'Irrig Drip', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irrig_other field
            //
            $column = new TextViewColumn('irrig_other', 'Irrig Other', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irrig_sprinkler field
            //
            $column = new TextViewColumn('irrig_sprinkler', 'Irrig Sprinkler', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irrig_subsurface field
            //
            $column = new TextViewColumn('irrig_subsurface', 'Irrig Subsurface', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irrig_surface field
            //
            $column = new TextViewColumn('irrig_surface', 'Irrig Surface', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for irrig_fertigation field
            //
            $column = new TextViewColumn('irrig_fertigation', 'Irrig Fertigation', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for row_Spac_Inter_row_max field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_max', 'Row Spac Inter Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for row_Spac_Inter_row_mean field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_mean', 'Row Spac Inter Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for row_Spac_Inter_row_min field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_min', 'Row Spac Inter Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for plant_dir_seeding field
            //
            $column = new TextViewColumn('plant_dir_seeding', 'Plant Dir Seeding', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for plant_transplanting field
            //
            $column = new TextViewColumn('plant_transplanting', 'Plant Transplanting', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for plant_veg_propag field
            //
            $column = new TextViewColumn('plant_veg_propag', 'Plant Veg Propag', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for plant_mthd_mech field
            //
            $column = new TextViewColumn('plant_mthd_mech', 'Plant Mthd Mech', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for row_spac_within_row_max field
            //
            $column = new TextViewColumn('row_spac_within_row_max', 'Row Spac Within Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for row_spac_within_row_mean field
            //
            $column = new TextViewColumn('row_spac_within_row_mean', 'Row Spac Within Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for row_spac_within_row_min field
            //
            $column = new TextViewColumn('row_spac_within_row_min', 'Row Spac Within Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for tillage_plough field
            //
            $column = new TextViewColumn('tillage_plough', 'Tillage Plough', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for tillage_cultivar field
            //
            $column = new TextViewColumn('tillage_cultivar', 'Tillage Cultivar', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for tillage_rolling field
            //
            $column = new TextViewColumn('tillage_rolling', 'Tillage Rolling', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for tillage_harrow field
            //
            $column = new TextViewColumn('tillage_harrow', 'Tillage Harrow', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for tillage_other field
            //
            $column = new TextViewColumn('tillage_other', 'Tillage Other', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Agronomic_PracticesGrid_tillage_other_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for harvesting_mech field
            //
            $column = new TextViewColumn('harvesting_mech', 'Harvesting Mech', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for sowing_rate_max field
            //
            $column = new TextViewColumn('sowing_rate_max', 'Sowing Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for sowing_rate_mean field
            //
            $column = new TextViewColumn('sowing_rate_mean', 'Sowing Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for sowing_rate_min field
            //
            $column = new TextViewColumn('sowing_rate_min', 'Sowing Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_comrcl field
            //
            $column = new TextViewColumn('seed_type_comrcl', 'Seed Type Comrcl', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_hybrid_fx field
            //
            $column = new TextViewColumn('seed_type_hybrid_fx', 'Seed Type Hybrid Fx', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_bvkcrs_bcxfx field
            //
            $column = new TextViewColumn('seed_type_bvkcrs_bcxfx', 'Seed Type Bvkcrs Bcxfx', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_selected field
            //
            $column = new TextViewColumn('seed_type_selected', 'Seed Type Selected', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_unimproved field
            //
            $column = new TextViewColumn('seed_type_unimproved', 'Seed Type Unimproved', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_purified field
            //
            $column = new TextViewColumn('seed_type_purified', 'Seed Type Purified', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_ril field
            //
            $column = new TextViewColumn('seed_type_ril', 'Seed Type Ril', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_nil field
            //
            $column = new TextViewColumn('seed_type_nil', 'Seed Type Nil', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for seed_type_other field
            //
            $column = new TextViewColumn('seed_type_other', 'Seed Type Other', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for kbs_agropract_others field
            //
            $column = new TextViewColumn('kbs_agropract_others', 'Kbs Agropract Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Agronomic_PracticesGrid_kbs_agropract_others_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for week_irrig_rate_max field
            //
            $column = new TextViewColumn('week_irrig_rate_max', 'Week Irrig Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for week_irrig_rate_mean field
            //
            $column = new TextViewColumn('week_irrig_rate_mean', 'Week Irrig Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for week_irrig_rate_min field
            //
            $column = new TextViewColumn('week_irrig_rate_min', 'Week Irrig Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for freq_Irrigation_max field
            //
            $column = new TextViewColumn('freq_Irrigation_max', 'Freq Irrigation Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for freq_Irrigation_mean field
            //
            $column = new TextViewColumn('freq_Irrigation_mean', 'Freq Irrigation Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for freq_Irrigation_min field
            //
            $column = new TextViewColumn('freq_Irrigation_min', 'Freq Irrigation Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irr_pln_emrgncy_seed field
            //
            $column = new TextViewColumn('irr_pln_emrgncy_seed', 'Irr Pln Emrgncy Seed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irr_pln_vgt_stg field
            //
            $column = new TextViewColumn('irr_pln_vgt_stg', 'Irr Pln Vgt Stg', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irr_pln_reprod field
            //
            $column = new TextViewColumn('irr_pln_reprod', 'Irr Pln Reprod', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irr_pln_matur field
            //
            $column = new TextViewColumn('irr_pln_matur', 'Irr Pln Matur', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irrig_drip field
            //
            $column = new TextViewColumn('irrig_drip', 'Irrig Drip', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irrig_other field
            //
            $column = new TextViewColumn('irrig_other', 'Irrig Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irrig_sprinkler field
            //
            $column = new TextViewColumn('irrig_sprinkler', 'Irrig Sprinkler', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irrig_subsurface field
            //
            $column = new TextViewColumn('irrig_subsurface', 'Irrig Subsurface', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irrig_surface field
            //
            $column = new TextViewColumn('irrig_surface', 'Irrig Surface', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for irrig_fertigation field
            //
            $column = new TextViewColumn('irrig_fertigation', 'Irrig Fertigation', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for row_Spac_Inter_row_max field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_max', 'Row Spac Inter Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for row_Spac_Inter_row_mean field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_mean', 'Row Spac Inter Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for row_Spac_Inter_row_min field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_min', 'Row Spac Inter Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for plant_dir_seeding field
            //
            $column = new TextViewColumn('plant_dir_seeding', 'Plant Dir Seeding', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for plant_transplanting field
            //
            $column = new TextViewColumn('plant_transplanting', 'Plant Transplanting', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for plant_veg_propag field
            //
            $column = new TextViewColumn('plant_veg_propag', 'Plant Veg Propag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for plant_mthd_mech field
            //
            $column = new TextViewColumn('plant_mthd_mech', 'Plant Mthd Mech', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for row_spac_within_row_max field
            //
            $column = new TextViewColumn('row_spac_within_row_max', 'Row Spac Within Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for row_spac_within_row_mean field
            //
            $column = new TextViewColumn('row_spac_within_row_mean', 'Row Spac Within Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for row_spac_within_row_min field
            //
            $column = new TextViewColumn('row_spac_within_row_min', 'Row Spac Within Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for tillage_plough field
            //
            $column = new TextViewColumn('tillage_plough', 'Tillage Plough', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for tillage_cultivar field
            //
            $column = new TextViewColumn('tillage_cultivar', 'Tillage Cultivar', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for tillage_rolling field
            //
            $column = new TextViewColumn('tillage_rolling', 'Tillage Rolling', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for tillage_harrow field
            //
            $column = new TextViewColumn('tillage_harrow', 'Tillage Harrow', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for tillage_other field
            //
            $column = new TextViewColumn('tillage_other', 'Tillage Other', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Agronomic_PracticesGrid_tillage_other_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for harvesting_mech field
            //
            $column = new TextViewColumn('harvesting_mech', 'Harvesting Mech', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for sowing_rate_max field
            //
            $column = new TextViewColumn('sowing_rate_max', 'Sowing Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for sowing_rate_mean field
            //
            $column = new TextViewColumn('sowing_rate_mean', 'Sowing Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for sowing_rate_min field
            //
            $column = new TextViewColumn('sowing_rate_min', 'Sowing Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_comrcl field
            //
            $column = new TextViewColumn('seed_type_comrcl', 'Seed Type Comrcl', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_hybrid_fx field
            //
            $column = new TextViewColumn('seed_type_hybrid_fx', 'Seed Type Hybrid Fx', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_bvkcrs_bcxfx field
            //
            $column = new TextViewColumn('seed_type_bvkcrs_bcxfx', 'Seed Type Bvkcrs Bcxfx', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_selected field
            //
            $column = new TextViewColumn('seed_type_selected', 'Seed Type Selected', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_unimproved field
            //
            $column = new TextViewColumn('seed_type_unimproved', 'Seed Type Unimproved', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_purified field
            //
            $column = new TextViewColumn('seed_type_purified', 'Seed Type Purified', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_ril field
            //
            $column = new TextViewColumn('seed_type_ril', 'Seed Type Ril', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_nil field
            //
            $column = new TextViewColumn('seed_type_nil', 'Seed Type Nil', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for seed_type_other field
            //
            $column = new TextViewColumn('seed_type_other', 'Seed Type Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for kbs_agropract_others field
            //
            $column = new TextViewColumn('kbs_agropract_others', 'Kbs Agropract Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Agronomic_PracticesGrid_kbs_agropract_others_handler_view');
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
            // Edit column for location_id field
            //
            $editor = new ComboBox('location_id_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Global_Google_PlaceID`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('google_place_id');
            $lookupDataset->AddField($field, false);
            $field = new StringField('google_address');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('google_address', GetOrderTypeAsSQL(otAscending));
            $editColumn = new LookUpEditColumn(
                'Location Id', 
                'location_id', 
                $editor, 
                $this->dataset, 'id', 'google_address', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for week_irrig_rate_max field
            //
            $editor = new TextEdit('week_irrig_rate_max_edit');
            $editColumn = new CustomEditColumn('Week Irrig Rate Max', 'week_irrig_rate_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for week_irrig_rate_mean field
            //
            $editor = new TextEdit('week_irrig_rate_mean_edit');
            $editColumn = new CustomEditColumn('Week Irrig Rate Mean', 'week_irrig_rate_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for week_irrig_rate_min field
            //
            $editor = new TextEdit('week_irrig_rate_min_edit');
            $editColumn = new CustomEditColumn('Week Irrig Rate Min', 'week_irrig_rate_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for freq_Irrigation_max field
            //
            $editor = new TextEdit('freq_irrigation_max_edit');
            $editColumn = new CustomEditColumn('Freq Irrigation Max', 'freq_Irrigation_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for freq_Irrigation_mean field
            //
            $editor = new TextEdit('freq_irrigation_mean_edit');
            $editColumn = new CustomEditColumn('Freq Irrigation Mean', 'freq_Irrigation_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for freq_Irrigation_min field
            //
            $editor = new TextEdit('freq_irrigation_min_edit');
            $editColumn = new CustomEditColumn('Freq Irrigation Min', 'freq_Irrigation_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irr_pln_emrgncy_seed field
            //
            $editor = new CheckBox('irr_pln_emrgncy_seed_edit');
            $editColumn = new CustomEditColumn('Irr Pln Emrgncy Seed', 'irr_pln_emrgncy_seed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irr_pln_vgt_stg field
            //
            $editor = new CheckBox('irr_pln_vgt_stg_edit');
            $editColumn = new CustomEditColumn('Irr Pln Vgt Stg', 'irr_pln_vgt_stg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irr_pln_reprod field
            //
            $editor = new CheckBox('irr_pln_reprod_edit');
            $editColumn = new CustomEditColumn('Irr Pln Reprod', 'irr_pln_reprod', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irr_pln_matur field
            //
            $editor = new CheckBox('irr_pln_matur_edit');
            $editColumn = new CustomEditColumn('Irr Pln Matur', 'irr_pln_matur', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irrig_drip field
            //
            $editor = new CheckBox('irrig_drip_edit');
            $editColumn = new CustomEditColumn('Irrig Drip', 'irrig_drip', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irrig_other field
            //
            $editor = new CheckBox('irrig_other_edit');
            $editColumn = new CustomEditColumn('Irrig Other', 'irrig_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irrig_sprinkler field
            //
            $editor = new CheckBox('irrig_sprinkler_edit');
            $editColumn = new CustomEditColumn('Irrig Sprinkler', 'irrig_sprinkler', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irrig_subsurface field
            //
            $editor = new CheckBox('irrig_subsurface_edit');
            $editColumn = new CustomEditColumn('Irrig Subsurface', 'irrig_subsurface', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irrig_surface field
            //
            $editor = new CheckBox('irrig_surface_edit');
            $editColumn = new CustomEditColumn('Irrig Surface', 'irrig_surface', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for irrig_fertigation field
            //
            $editor = new CheckBox('irrig_fertigation_edit');
            $editColumn = new CustomEditColumn('Irrig Fertigation', 'irrig_fertigation', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for row_Spac_Inter_row_max field
            //
            $editor = new TextEdit('row_spac_inter_row_max_edit');
            $editColumn = new CustomEditColumn('Row Spac Inter Row Max', 'row_Spac_Inter_row_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for row_Spac_Inter_row_mean field
            //
            $editor = new TextEdit('row_spac_inter_row_mean_edit');
            $editColumn = new CustomEditColumn('Row Spac Inter Row Mean', 'row_Spac_Inter_row_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for row_Spac_Inter_row_min field
            //
            $editor = new TextEdit('row_spac_inter_row_min_edit');
            $editColumn = new CustomEditColumn('Row Spac Inter Row Min', 'row_Spac_Inter_row_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for plant_dir_seeding field
            //
            $editor = new CheckBox('plant_dir_seeding_edit');
            $editColumn = new CustomEditColumn('Plant Dir Seeding', 'plant_dir_seeding', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for plant_transplanting field
            //
            $editor = new CheckBox('plant_transplanting_edit');
            $editColumn = new CustomEditColumn('Plant Transplanting', 'plant_transplanting', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for plant_veg_propag field
            //
            $editor = new CheckBox('plant_veg_propag_edit');
            $editColumn = new CustomEditColumn('Plant Veg Propag', 'plant_veg_propag', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for plant_mthd_mech field
            //
            $editor = new CheckBox('plant_mthd_mech_edit');
            $editColumn = new CustomEditColumn('Plant Mthd Mech', 'plant_mthd_mech', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for row_spac_within_row_max field
            //
            $editor = new TextEdit('row_spac_within_row_max_edit');
            $editColumn = new CustomEditColumn('Row Spac Within Row Max', 'row_spac_within_row_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for row_spac_within_row_mean field
            //
            $editor = new TextEdit('row_spac_within_row_mean_edit');
            $editColumn = new CustomEditColumn('Row Spac Within Row Mean', 'row_spac_within_row_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for row_spac_within_row_min field
            //
            $editor = new TextEdit('row_spac_within_row_min_edit');
            $editColumn = new CustomEditColumn('Row Spac Within Row Min', 'row_spac_within_row_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for tillage_plough field
            //
            $editor = new CheckBox('tillage_plough_edit');
            $editColumn = new CustomEditColumn('Tillage Plough', 'tillage_plough', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for tillage_cultivar field
            //
            $editor = new CheckBox('tillage_cultivar_edit');
            $editColumn = new CustomEditColumn('Tillage Cultivar', 'tillage_cultivar', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for tillage_rolling field
            //
            $editor = new CheckBox('tillage_rolling_edit');
            $editColumn = new CustomEditColumn('Tillage Rolling', 'tillage_rolling', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for tillage_harrow field
            //
            $editor = new CheckBox('tillage_harrow_edit');
            $editColumn = new CustomEditColumn('Tillage Harrow', 'tillage_harrow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for tillage_other field
            //
            $editor = new TextAreaEdit('tillage_other_edit', 50, 8);
            $editColumn = new CustomEditColumn('Tillage Other', 'tillage_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for harvesting_mech field
            //
            $editor = new CheckBox('harvesting_mech_edit');
            $editColumn = new CustomEditColumn('Harvesting Mech', 'harvesting_mech', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for sowing_rate_max field
            //
            $editor = new TextEdit('sowing_rate_max_edit');
            $editColumn = new CustomEditColumn('Sowing Rate Max', 'sowing_rate_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for sowing_rate_mean field
            //
            $editor = new TextEdit('sowing_rate_mean_edit');
            $editColumn = new CustomEditColumn('Sowing Rate Mean', 'sowing_rate_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for sowing_rate_min field
            //
            $editor = new TextEdit('sowing_rate_min_edit');
            $editColumn = new CustomEditColumn('Sowing Rate Min', 'sowing_rate_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_comrcl field
            //
            $editor = new CheckBox('seed_type_comrcl_edit');
            $editColumn = new CustomEditColumn('Seed Type Comrcl', 'seed_type_comrcl', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_hybrid_fx field
            //
            $editor = new CheckBox('seed_type_hybrid_fx_edit');
            $editColumn = new CustomEditColumn('Seed Type Hybrid Fx', 'seed_type_hybrid_fx', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_bvkcrs_bcxfx field
            //
            $editor = new CheckBox('seed_type_bvkcrs_bcxfx_edit');
            $editColumn = new CustomEditColumn('Seed Type Bvkcrs Bcxfx', 'seed_type_bvkcrs_bcxfx', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_selected field
            //
            $editor = new CheckBox('seed_type_selected_edit');
            $editColumn = new CustomEditColumn('Seed Type Selected', 'seed_type_selected', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_unimproved field
            //
            $editor = new CheckBox('seed_type_unimproved_edit');
            $editColumn = new CustomEditColumn('Seed Type Unimproved', 'seed_type_unimproved', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_purified field
            //
            $editor = new CheckBox('seed_type_purified_edit');
            $editColumn = new CustomEditColumn('Seed Type Purified', 'seed_type_purified', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_ril field
            //
            $editor = new CheckBox('seed_type_ril_edit');
            $editColumn = new CustomEditColumn('Seed Type Ril', 'seed_type_ril', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_nil field
            //
            $editor = new CheckBox('seed_type_nil_edit');
            $editColumn = new CustomEditColumn('Seed Type Nil', 'seed_type_nil', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for seed_type_other field
            //
            $editor = new CheckBox('seed_type_other_edit');
            $editColumn = new CustomEditColumn('Seed Type Other', 'seed_type_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for kbs_agropract_others field
            //
            $editor = new TextAreaEdit('kbs_agropract_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Agropract Others', 'kbs_agropract_others', $editor, $this->dataset);
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
            // Edit column for location_id field
            //
            $editor = new ComboBox('location_id_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Global_Google_PlaceID`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('google_place_id');
            $lookupDataset->AddField($field, false);
            $field = new StringField('google_address');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('google_address', GetOrderTypeAsSQL(otAscending));
            $editColumn = new LookUpEditColumn(
                'Location Id', 
                'location_id', 
                $editor, 
                $this->dataset, 'id', 'google_address', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for week_irrig_rate_max field
            //
            $editor = new TextEdit('week_irrig_rate_max_edit');
            $editColumn = new CustomEditColumn('Week Irrig Rate Max', 'week_irrig_rate_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for week_irrig_rate_mean field
            //
            $editor = new TextEdit('week_irrig_rate_mean_edit');
            $editColumn = new CustomEditColumn('Week Irrig Rate Mean', 'week_irrig_rate_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for week_irrig_rate_min field
            //
            $editor = new TextEdit('week_irrig_rate_min_edit');
            $editColumn = new CustomEditColumn('Week Irrig Rate Min', 'week_irrig_rate_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for freq_Irrigation_max field
            //
            $editor = new TextEdit('freq_irrigation_max_edit');
            $editColumn = new CustomEditColumn('Freq Irrigation Max', 'freq_Irrigation_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for freq_Irrigation_mean field
            //
            $editor = new TextEdit('freq_irrigation_mean_edit');
            $editColumn = new CustomEditColumn('Freq Irrigation Mean', 'freq_Irrigation_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for freq_Irrigation_min field
            //
            $editor = new TextEdit('freq_irrigation_min_edit');
            $editColumn = new CustomEditColumn('Freq Irrigation Min', 'freq_Irrigation_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irr_pln_emrgncy_seed field
            //
            $editor = new CheckBox('irr_pln_emrgncy_seed_edit');
            $editColumn = new CustomEditColumn('Irr Pln Emrgncy Seed', 'irr_pln_emrgncy_seed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irr_pln_vgt_stg field
            //
            $editor = new CheckBox('irr_pln_vgt_stg_edit');
            $editColumn = new CustomEditColumn('Irr Pln Vgt Stg', 'irr_pln_vgt_stg', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irr_pln_reprod field
            //
            $editor = new CheckBox('irr_pln_reprod_edit');
            $editColumn = new CustomEditColumn('Irr Pln Reprod', 'irr_pln_reprod', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irr_pln_matur field
            //
            $editor = new CheckBox('irr_pln_matur_edit');
            $editColumn = new CustomEditColumn('Irr Pln Matur', 'irr_pln_matur', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irrig_drip field
            //
            $editor = new CheckBox('irrig_drip_edit');
            $editColumn = new CustomEditColumn('Irrig Drip', 'irrig_drip', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irrig_other field
            //
            $editor = new CheckBox('irrig_other_edit');
            $editColumn = new CustomEditColumn('Irrig Other', 'irrig_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irrig_sprinkler field
            //
            $editor = new CheckBox('irrig_sprinkler_edit');
            $editColumn = new CustomEditColumn('Irrig Sprinkler', 'irrig_sprinkler', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irrig_subsurface field
            //
            $editor = new CheckBox('irrig_subsurface_edit');
            $editColumn = new CustomEditColumn('Irrig Subsurface', 'irrig_subsurface', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irrig_surface field
            //
            $editor = new CheckBox('irrig_surface_edit');
            $editColumn = new CustomEditColumn('Irrig Surface', 'irrig_surface', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for irrig_fertigation field
            //
            $editor = new CheckBox('irrig_fertigation_edit');
            $editColumn = new CustomEditColumn('Irrig Fertigation', 'irrig_fertigation', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for row_Spac_Inter_row_max field
            //
            $editor = new TextEdit('row_spac_inter_row_max_edit');
            $editColumn = new CustomEditColumn('Row Spac Inter Row Max', 'row_Spac_Inter_row_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for row_Spac_Inter_row_mean field
            //
            $editor = new TextEdit('row_spac_inter_row_mean_edit');
            $editColumn = new CustomEditColumn('Row Spac Inter Row Mean', 'row_Spac_Inter_row_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for row_Spac_Inter_row_min field
            //
            $editor = new TextEdit('row_spac_inter_row_min_edit');
            $editColumn = new CustomEditColumn('Row Spac Inter Row Min', 'row_Spac_Inter_row_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for plant_dir_seeding field
            //
            $editor = new CheckBox('plant_dir_seeding_edit');
            $editColumn = new CustomEditColumn('Plant Dir Seeding', 'plant_dir_seeding', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for plant_transplanting field
            //
            $editor = new CheckBox('plant_transplanting_edit');
            $editColumn = new CustomEditColumn('Plant Transplanting', 'plant_transplanting', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for plant_veg_propag field
            //
            $editor = new CheckBox('plant_veg_propag_edit');
            $editColumn = new CustomEditColumn('Plant Veg Propag', 'plant_veg_propag', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for plant_mthd_mech field
            //
            $editor = new CheckBox('plant_mthd_mech_edit');
            $editColumn = new CustomEditColumn('Plant Mthd Mech', 'plant_mthd_mech', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for row_spac_within_row_max field
            //
            $editor = new TextEdit('row_spac_within_row_max_edit');
            $editColumn = new CustomEditColumn('Row Spac Within Row Max', 'row_spac_within_row_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for row_spac_within_row_mean field
            //
            $editor = new TextEdit('row_spac_within_row_mean_edit');
            $editColumn = new CustomEditColumn('Row Spac Within Row Mean', 'row_spac_within_row_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for row_spac_within_row_min field
            //
            $editor = new TextEdit('row_spac_within_row_min_edit');
            $editColumn = new CustomEditColumn('Row Spac Within Row Min', 'row_spac_within_row_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for tillage_plough field
            //
            $editor = new CheckBox('tillage_plough_edit');
            $editColumn = new CustomEditColumn('Tillage Plough', 'tillage_plough', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for tillage_cultivar field
            //
            $editor = new CheckBox('tillage_cultivar_edit');
            $editColumn = new CustomEditColumn('Tillage Cultivar', 'tillage_cultivar', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for tillage_rolling field
            //
            $editor = new CheckBox('tillage_rolling_edit');
            $editColumn = new CustomEditColumn('Tillage Rolling', 'tillage_rolling', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for tillage_harrow field
            //
            $editor = new CheckBox('tillage_harrow_edit');
            $editColumn = new CustomEditColumn('Tillage Harrow', 'tillage_harrow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for tillage_other field
            //
            $editor = new TextAreaEdit('tillage_other_edit', 50, 8);
            $editColumn = new CustomEditColumn('Tillage Other', 'tillage_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for harvesting_mech field
            //
            $editor = new CheckBox('harvesting_mech_edit');
            $editColumn = new CustomEditColumn('Harvesting Mech', 'harvesting_mech', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for sowing_rate_max field
            //
            $editor = new TextEdit('sowing_rate_max_edit');
            $editColumn = new CustomEditColumn('Sowing Rate Max', 'sowing_rate_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for sowing_rate_mean field
            //
            $editor = new TextEdit('sowing_rate_mean_edit');
            $editColumn = new CustomEditColumn('Sowing Rate Mean', 'sowing_rate_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for sowing_rate_min field
            //
            $editor = new TextEdit('sowing_rate_min_edit');
            $editColumn = new CustomEditColumn('Sowing Rate Min', 'sowing_rate_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_comrcl field
            //
            $editor = new CheckBox('seed_type_comrcl_edit');
            $editColumn = new CustomEditColumn('Seed Type Comrcl', 'seed_type_comrcl', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_hybrid_fx field
            //
            $editor = new CheckBox('seed_type_hybrid_fx_edit');
            $editColumn = new CustomEditColumn('Seed Type Hybrid Fx', 'seed_type_hybrid_fx', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_bvkcrs_bcxfx field
            //
            $editor = new CheckBox('seed_type_bvkcrs_bcxfx_edit');
            $editColumn = new CustomEditColumn('Seed Type Bvkcrs Bcxfx', 'seed_type_bvkcrs_bcxfx', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_selected field
            //
            $editor = new CheckBox('seed_type_selected_edit');
            $editColumn = new CustomEditColumn('Seed Type Selected', 'seed_type_selected', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_unimproved field
            //
            $editor = new CheckBox('seed_type_unimproved_edit');
            $editColumn = new CustomEditColumn('Seed Type Unimproved', 'seed_type_unimproved', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_purified field
            //
            $editor = new CheckBox('seed_type_purified_edit');
            $editColumn = new CustomEditColumn('Seed Type Purified', 'seed_type_purified', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_ril field
            //
            $editor = new CheckBox('seed_type_ril_edit');
            $editColumn = new CustomEditColumn('Seed Type Ril', 'seed_type_ril', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_nil field
            //
            $editor = new CheckBox('seed_type_nil_edit');
            $editColumn = new CustomEditColumn('Seed Type Nil', 'seed_type_nil', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for seed_type_other field
            //
            $editor = new CheckBox('seed_type_other_edit');
            $editColumn = new CustomEditColumn('Seed Type Other', 'seed_type_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for kbs_agropract_others field
            //
            $editor = new TextAreaEdit('kbs_agropract_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Agropract Others', 'kbs_agropract_others', $editor, $this->dataset);
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
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for week_irrig_rate_max field
            //
            $column = new TextViewColumn('week_irrig_rate_max', 'Week Irrig Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for week_irrig_rate_mean field
            //
            $column = new TextViewColumn('week_irrig_rate_mean', 'Week Irrig Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for week_irrig_rate_min field
            //
            $column = new TextViewColumn('week_irrig_rate_min', 'Week Irrig Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for freq_Irrigation_max field
            //
            $column = new TextViewColumn('freq_Irrigation_max', 'Freq Irrigation Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for freq_Irrigation_mean field
            //
            $column = new TextViewColumn('freq_Irrigation_mean', 'Freq Irrigation Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for freq_Irrigation_min field
            //
            $column = new TextViewColumn('freq_Irrigation_min', 'Freq Irrigation Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for irr_pln_emrgncy_seed field
            //
            $column = new TextViewColumn('irr_pln_emrgncy_seed', 'Irr Pln Emrgncy Seed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irr_pln_vgt_stg field
            //
            $column = new TextViewColumn('irr_pln_vgt_stg', 'Irr Pln Vgt Stg', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irr_pln_reprod field
            //
            $column = new TextViewColumn('irr_pln_reprod', 'Irr Pln Reprod', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irr_pln_matur field
            //
            $column = new TextViewColumn('irr_pln_matur', 'Irr Pln Matur', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irrig_drip field
            //
            $column = new TextViewColumn('irrig_drip', 'Irrig Drip', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irrig_other field
            //
            $column = new TextViewColumn('irrig_other', 'Irrig Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irrig_sprinkler field
            //
            $column = new TextViewColumn('irrig_sprinkler', 'Irrig Sprinkler', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irrig_subsurface field
            //
            $column = new TextViewColumn('irrig_subsurface', 'Irrig Subsurface', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irrig_surface field
            //
            $column = new TextViewColumn('irrig_surface', 'Irrig Surface', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for irrig_fertigation field
            //
            $column = new TextViewColumn('irrig_fertigation', 'Irrig Fertigation', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for row_Spac_Inter_row_max field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_max', 'Row Spac Inter Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for row_Spac_Inter_row_mean field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_mean', 'Row Spac Inter Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for row_Spac_Inter_row_min field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_min', 'Row Spac Inter Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for plant_dir_seeding field
            //
            $column = new TextViewColumn('plant_dir_seeding', 'Plant Dir Seeding', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for plant_transplanting field
            //
            $column = new TextViewColumn('plant_transplanting', 'Plant Transplanting', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for plant_veg_propag field
            //
            $column = new TextViewColumn('plant_veg_propag', 'Plant Veg Propag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for plant_mthd_mech field
            //
            $column = new TextViewColumn('plant_mthd_mech', 'Plant Mthd Mech', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for row_spac_within_row_max field
            //
            $column = new TextViewColumn('row_spac_within_row_max', 'Row Spac Within Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for row_spac_within_row_mean field
            //
            $column = new TextViewColumn('row_spac_within_row_mean', 'Row Spac Within Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for row_spac_within_row_min field
            //
            $column = new TextViewColumn('row_spac_within_row_min', 'Row Spac Within Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for tillage_plough field
            //
            $column = new TextViewColumn('tillage_plough', 'Tillage Plough', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for tillage_cultivar field
            //
            $column = new TextViewColumn('tillage_cultivar', 'Tillage Cultivar', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for tillage_rolling field
            //
            $column = new TextViewColumn('tillage_rolling', 'Tillage Rolling', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for tillage_harrow field
            //
            $column = new TextViewColumn('tillage_harrow', 'Tillage Harrow', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for tillage_other field
            //
            $column = new TextViewColumn('tillage_other', 'Tillage Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for harvesting_mech field
            //
            $column = new TextViewColumn('harvesting_mech', 'Harvesting Mech', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for sowing_rate_max field
            //
            $column = new TextViewColumn('sowing_rate_max', 'Sowing Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for sowing_rate_mean field
            //
            $column = new TextViewColumn('sowing_rate_mean', 'Sowing Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for sowing_rate_min field
            //
            $column = new TextViewColumn('sowing_rate_min', 'Sowing Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_comrcl field
            //
            $column = new TextViewColumn('seed_type_comrcl', 'Seed Type Comrcl', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_hybrid_fx field
            //
            $column = new TextViewColumn('seed_type_hybrid_fx', 'Seed Type Hybrid Fx', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_bvkcrs_bcxfx field
            //
            $column = new TextViewColumn('seed_type_bvkcrs_bcxfx', 'Seed Type Bvkcrs Bcxfx', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_selected field
            //
            $column = new TextViewColumn('seed_type_selected', 'Seed Type Selected', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_unimproved field
            //
            $column = new TextViewColumn('seed_type_unimproved', 'Seed Type Unimproved', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_purified field
            //
            $column = new TextViewColumn('seed_type_purified', 'Seed Type Purified', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_ril field
            //
            $column = new TextViewColumn('seed_type_ril', 'Seed Type Ril', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_nil field
            //
            $column = new TextViewColumn('seed_type_nil', 'Seed Type Nil', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for seed_type_other field
            //
            $column = new TextViewColumn('seed_type_other', 'Seed Type Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for kbs_agropract_others field
            //
            $column = new TextViewColumn('kbs_agropract_others', 'Kbs Agropract Others', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropID_name_var_lndrce', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for week_irrig_rate_max field
            //
            $column = new TextViewColumn('week_irrig_rate_max', 'Week Irrig Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for week_irrig_rate_mean field
            //
            $column = new TextViewColumn('week_irrig_rate_mean', 'Week Irrig Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for week_irrig_rate_min field
            //
            $column = new TextViewColumn('week_irrig_rate_min', 'Week Irrig Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for freq_Irrigation_max field
            //
            $column = new TextViewColumn('freq_Irrigation_max', 'Freq Irrigation Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for freq_Irrigation_mean field
            //
            $column = new TextViewColumn('freq_Irrigation_mean', 'Freq Irrigation Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for freq_Irrigation_min field
            //
            $column = new TextViewColumn('freq_Irrigation_min', 'Freq Irrigation Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for irr_pln_emrgncy_seed field
            //
            $column = new TextViewColumn('irr_pln_emrgncy_seed', 'Irr Pln Emrgncy Seed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irr_pln_vgt_stg field
            //
            $column = new TextViewColumn('irr_pln_vgt_stg', 'Irr Pln Vgt Stg', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irr_pln_reprod field
            //
            $column = new TextViewColumn('irr_pln_reprod', 'Irr Pln Reprod', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irr_pln_matur field
            //
            $column = new TextViewColumn('irr_pln_matur', 'Irr Pln Matur', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irrig_drip field
            //
            $column = new TextViewColumn('irrig_drip', 'Irrig Drip', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irrig_other field
            //
            $column = new TextViewColumn('irrig_other', 'Irrig Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irrig_sprinkler field
            //
            $column = new TextViewColumn('irrig_sprinkler', 'Irrig Sprinkler', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irrig_subsurface field
            //
            $column = new TextViewColumn('irrig_subsurface', 'Irrig Subsurface', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irrig_surface field
            //
            $column = new TextViewColumn('irrig_surface', 'Irrig Surface', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for irrig_fertigation field
            //
            $column = new TextViewColumn('irrig_fertigation', 'Irrig Fertigation', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for row_Spac_Inter_row_max field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_max', 'Row Spac Inter Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for row_Spac_Inter_row_mean field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_mean', 'Row Spac Inter Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for row_Spac_Inter_row_min field
            //
            $column = new TextViewColumn('row_Spac_Inter_row_min', 'Row Spac Inter Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for plant_dir_seeding field
            //
            $column = new TextViewColumn('plant_dir_seeding', 'Plant Dir Seeding', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for plant_transplanting field
            //
            $column = new TextViewColumn('plant_transplanting', 'Plant Transplanting', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for plant_veg_propag field
            //
            $column = new TextViewColumn('plant_veg_propag', 'Plant Veg Propag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for plant_mthd_mech field
            //
            $column = new TextViewColumn('plant_mthd_mech', 'Plant Mthd Mech', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for row_spac_within_row_max field
            //
            $column = new TextViewColumn('row_spac_within_row_max', 'Row Spac Within Row Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for row_spac_within_row_mean field
            //
            $column = new TextViewColumn('row_spac_within_row_mean', 'Row Spac Within Row Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for row_spac_within_row_min field
            //
            $column = new TextViewColumn('row_spac_within_row_min', 'Row Spac Within Row Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for tillage_plough field
            //
            $column = new TextViewColumn('tillage_plough', 'Tillage Plough', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for tillage_cultivar field
            //
            $column = new TextViewColumn('tillage_cultivar', 'Tillage Cultivar', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for tillage_rolling field
            //
            $column = new TextViewColumn('tillage_rolling', 'Tillage Rolling', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for tillage_harrow field
            //
            $column = new TextViewColumn('tillage_harrow', 'Tillage Harrow', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for tillage_other field
            //
            $column = new TextViewColumn('tillage_other', 'Tillage Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for harvesting_mech field
            //
            $column = new TextViewColumn('harvesting_mech', 'Harvesting Mech', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for sowing_rate_max field
            //
            $column = new TextViewColumn('sowing_rate_max', 'Sowing Rate Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for sowing_rate_mean field
            //
            $column = new TextViewColumn('sowing_rate_mean', 'Sowing Rate Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for sowing_rate_min field
            //
            $column = new TextViewColumn('sowing_rate_min', 'Sowing Rate Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_comrcl field
            //
            $column = new TextViewColumn('seed_type_comrcl', 'Seed Type Comrcl', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_hybrid_fx field
            //
            $column = new TextViewColumn('seed_type_hybrid_fx', 'Seed Type Hybrid Fx', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_bvkcrs_bcxfx field
            //
            $column = new TextViewColumn('seed_type_bvkcrs_bcxfx', 'Seed Type Bvkcrs Bcxfx', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_selected field
            //
            $column = new TextViewColumn('seed_type_selected', 'Seed Type Selected', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_unimproved field
            //
            $column = new TextViewColumn('seed_type_unimproved', 'Seed Type Unimproved', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_purified field
            //
            $column = new TextViewColumn('seed_type_purified', 'Seed Type Purified', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_ril field
            //
            $column = new TextViewColumn('seed_type_ril', 'Seed Type Ril', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_nil field
            //
            $column = new TextViewColumn('seed_type_nil', 'Seed Type Nil', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for seed_type_other field
            //
            $column = new TextViewColumn('seed_type_other', 'Seed Type Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for kbs_agropract_others field
            //
            $column = new TextViewColumn('kbs_agropract_others', 'Kbs Agropract Others', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Agro_Agronomic_Practices_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_Agro_Agronomic_PracticesGrid');
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
            // View column for tillage_other field
            //
            $column = new TextViewColumn('tillage_other', 'Tillage Other', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Agronomic_PracticesGrid_tillage_other_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_agropract_others field
            //
            $column = new TextViewColumn('kbs_agropract_others', 'Kbs Agropract Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Agronomic_PracticesGrid_kbs_agropract_others_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for tillage_other field
            //
            $column = new TextViewColumn('tillage_other', 'Tillage Other', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Agronomic_PracticesGrid_tillage_other_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_agropract_others field
            //
            $column = new TextViewColumn('kbs_agropract_others', 'Kbs Agropract Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Agronomic_PracticesGrid_kbs_agropract_others_handler_view', $column);
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
        $Page = new KBS_Agro_Agronomic_PracticesPage("KBS_Agro_Agronomic_Practices.php", "KBS_Agro_Agronomic_Practices", GetCurrentUserGrantForDataSource("KBS_Agro_Agronomic_Practices"), 'UTF-8');
        $Page->SetShortCaption('KBS Agro Agronomic Practices');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Agro Agronomic Practices');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Agro_Agronomic_Practices"));
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
	

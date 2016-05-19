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
    
    
    
    class food_plants_internationalPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`food_plants_international`');
            $field = new IntegerField('id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('cropid');
            $this->dataset->AddField($field, false);
            $field = new StringField('scientific_name');
            $this->dataset->AddField($field, false);
            $field = new StringField('common_names');
            $this->dataset->AddField($field, false);
            $field = new StringField('edible_part');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('moisture');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('energy_kj');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('energy_kcal');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('protein');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('provit_a');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('provit_c');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('iron');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('zinc');
            $this->dataset->AddField($field, false);
            $field = new StringField('comments');
            $this->dataset->AddField($field, false);
            $field = new StringField('local_names');
            $this->dataset->AddField($field, false);
            $field = new StringField('references_nutrition');
            $this->dataset->AddField($field, false);
            $field = new StringField('normal_preparation');
            $this->dataset->AddField($field, false);
            $field = new StringField('preparation_tested');
            $this->dataset->AddField($field, false);
            $field = new StringField('notes');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('average_kj');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('average_kcal');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('average_protein');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('average_provita');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('average_provitc');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('average_iron');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_kj');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_kcal');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_protein');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_provita');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_provitc');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_iron');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_zinc');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_kj_display');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_kcal_display');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_protein_display');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_provita_display');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_provitc_display');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_iron_display');
            $this->dataset->AddField($field, false);
            $field = new StringField('above_below_zinc_display');
            $this->dataset->AddField($field, false);
            $field = new StringField('unique_check');
            $this->dataset->AddField($field, false);
            $field = new StringField('duplicate_warning');
            $this->dataset->AddField($field, false);
            $field = new StringField('unique_calc');
            $this->dataset->AddField($field, false);
            $field = new StringField('serialno');
            $this->dataset->AddField($field, false);
            $field = new StringField('created_by');
            $this->dataset->AddField($field, false);
            $field = new DateField('created_date');
            $this->dataset->AddField($field, false);
            $field = new DateField('modified_date');
            $this->dataset->AddField($field, false);
            $field = new StringField('modified_by');
            $this->dataset->AddField($field, false);
            $this->dataset->AddLookupField('cropid', 'KBS_General', new IntegerField('cropID', null, null, true), new StringField('name_var_lndrce', 'cropid_name_var_lndrce', 'cropid_name_var_lndrce_KBS_General'), 'cropid_name_var_lndrce_KBS_General');
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
            $grid->SearchControl = new SimpleSearch('food_plants_internationalssearch', $this->dataset,
                array('id', 'cropid_name_var_lndrce', 'scientific_name', 'common_names', 'edible_part', 'moisture', 'energy_kj', 'energy_kcal', 'protein', 'provit_a', 'provit_c', 'iron', 'zinc', 'comments', 'local_names', 'references_nutrition', 'normal_preparation', 'preparation_tested', 'notes', 'average_kj', 'average_kcal', 'average_protein', 'average_provita', 'average_provitc', 'average_iron', 'above_below_kj', 'above_below_kcal', 'above_below_protein', 'above_below_provita', 'above_below_provitc', 'above_below_iron', 'above_below_zinc', 'above_below_kj_display', 'above_below_kcal_display', 'above_below_protein_display', 'above_below_provita_display', 'above_below_provitc_display', 'above_below_iron_display', 'above_below_zinc_display', 'unique_check', 'duplicate_warning', 'unique_calc', 'serialno', 'created_by', 'created_date', 'modified_date', 'modified_by'),
                array($this->RenderText('Id'), $this->RenderText('Cropid'), $this->RenderText('Scientific Name'), $this->RenderText('Common Names'), $this->RenderText('Edible Part'), $this->RenderText('Moisture'), $this->RenderText('Energy Kj'), $this->RenderText('Energy Kcal'), $this->RenderText('Protein'), $this->RenderText('Provit A'), $this->RenderText('Provit C'), $this->RenderText('Iron'), $this->RenderText('Zinc'), $this->RenderText('Comments'), $this->RenderText('Local Names'), $this->RenderText('References Nutrition'), $this->RenderText('Normal Preparation'), $this->RenderText('Preparation Tested'), $this->RenderText('Notes'), $this->RenderText('Average Kj'), $this->RenderText('Average Kcal'), $this->RenderText('Average Protein'), $this->RenderText('Average Provita'), $this->RenderText('Average Provitc'), $this->RenderText('Average Iron'), $this->RenderText('Above Below Kj'), $this->RenderText('Above Below Kcal'), $this->RenderText('Above Below Protein'), $this->RenderText('Above Below Provita'), $this->RenderText('Above Below Provitc'), $this->RenderText('Above Below Iron'), $this->RenderText('Above Below Zinc'), $this->RenderText('Above Below Kj Display'), $this->RenderText('Above Below Kcal Display'), $this->RenderText('Above Below Protein Display'), $this->RenderText('Above Below Provita Display'), $this->RenderText('Above Below Provitc Display'), $this->RenderText('Above Below Iron Display'), $this->RenderText('Above Below Zinc Display'), $this->RenderText('Unique Check'), $this->RenderText('Duplicate Warning'), $this->RenderText('Unique Calc'), $this->RenderText('Serialno'), $this->RenderText('Created By'), $this->RenderText('Created Date'), $this->RenderText('Modified Date'), $this->RenderText('Modified By')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('food_plants_internationalasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
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
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateLookupSearchInput('cropid', $this->RenderText('Cropid'), $lookupDataset, 'cropID', 'name_var_lndrce', false, 8));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('scientific_name', $this->RenderText('Scientific Name')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('common_names', $this->RenderText('Common Names')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('edible_part', $this->RenderText('Edible Part')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('moisture', $this->RenderText('Moisture')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('energy_kj', $this->RenderText('Energy Kj')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('energy_kcal', $this->RenderText('Energy Kcal')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('protein', $this->RenderText('Protein')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('provit_a', $this->RenderText('Provit A')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('provit_c', $this->RenderText('Provit C')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('iron', $this->RenderText('Iron')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('zinc', $this->RenderText('Zinc')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('comments', $this->RenderText('Comments')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('local_names', $this->RenderText('Local Names')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('references_nutrition', $this->RenderText('References Nutrition')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('normal_preparation', $this->RenderText('Normal Preparation')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('preparation_tested', $this->RenderText('Preparation Tested')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('notes', $this->RenderText('Notes')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('average_kj', $this->RenderText('Average Kj')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('average_kcal', $this->RenderText('Average Kcal')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('average_protein', $this->RenderText('Average Protein')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('average_provita', $this->RenderText('Average Provita')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('average_provitc', $this->RenderText('Average Provitc')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('average_iron', $this->RenderText('Average Iron')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_kj', $this->RenderText('Above Below Kj')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_kcal', $this->RenderText('Above Below Kcal')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_protein', $this->RenderText('Above Below Protein')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_provita', $this->RenderText('Above Below Provita')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_provitc', $this->RenderText('Above Below Provitc')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_iron', $this->RenderText('Above Below Iron')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_zinc', $this->RenderText('Above Below Zinc')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_kj_display', $this->RenderText('Above Below Kj Display')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_kcal_display', $this->RenderText('Above Below Kcal Display')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_protein_display', $this->RenderText('Above Below Protein Display')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_provita_display', $this->RenderText('Above Below Provita Display')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_provitc_display', $this->RenderText('Above Below Provitc Display')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_iron_display', $this->RenderText('Above Below Iron Display')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('above_below_zinc_display', $this->RenderText('Above Below Zinc Display')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('unique_check', $this->RenderText('Unique Check')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('duplicate_warning', $this->RenderText('Duplicate Warning')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('unique_calc', $this->RenderText('Unique Calc')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('serialno', $this->RenderText('Serialno')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('created_by', $this->RenderText('Created By')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateDateTimeSearchInput('created_date', $this->RenderText('Created Date'), 'Y-m-d'));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateDateTimeSearchInput('modified_date', $this->RenderText('Modified Date'), 'Y-m-d'));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('modified_by', $this->RenderText('Modified By')));
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
            $column = new TextViewColumn('cropid_name_var_lndrce', 'Cropid', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for scientific_name field
            //
            $column = new TextViewColumn('scientific_name', 'Scientific Name', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_scientific_name_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for common_names field
            //
            $column = new TextViewColumn('common_names', 'Common Names', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_common_names_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for edible_part field
            //
            $column = new TextViewColumn('edible_part', 'Edible Part', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_edible_part_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for moisture field
            //
            $column = new TextViewColumn('moisture', 'Moisture', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for energy_kj field
            //
            $column = new TextViewColumn('energy_kj', 'Energy Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for energy_kcal field
            //
            $column = new TextViewColumn('energy_kcal', 'Energy Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for protein field
            //
            $column = new TextViewColumn('protein', 'Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for provit_a field
            //
            $column = new TextViewColumn('provit_a', 'Provit A', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for provit_c field
            //
            $column = new TextViewColumn('provit_c', 'Provit C', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for iron field
            //
            $column = new TextViewColumn('iron', 'Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for zinc field
            //
            $column = new TextViewColumn('zinc', 'Zinc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for comments field
            //
            $column = new TextViewColumn('comments', 'Comments', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_comments_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for local_names field
            //
            $column = new TextViewColumn('local_names', 'Local Names', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_local_names_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for references_nutrition field
            //
            $column = new TextViewColumn('references_nutrition', 'References Nutrition', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_references_nutrition_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for normal_preparation field
            //
            $column = new TextViewColumn('normal_preparation', 'Normal Preparation', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_normal_preparation_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for preparation_tested field
            //
            $column = new TextViewColumn('preparation_tested', 'Preparation Tested', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_preparation_tested_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for notes field
            //
            $column = new TextViewColumn('notes', 'Notes', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_notes_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for average_kj field
            //
            $column = new TextViewColumn('average_kj', 'Average Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for average_kcal field
            //
            $column = new TextViewColumn('average_kcal', 'Average Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for average_protein field
            //
            $column = new TextViewColumn('average_protein', 'Average Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for average_provita field
            //
            $column = new TextViewColumn('average_provita', 'Average Provita', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for average_provitc field
            //
            $column = new TextViewColumn('average_provitc', 'Average Provitc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for average_iron field
            //
            $column = new TextViewColumn('average_iron', 'Average Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_kj field
            //
            $column = new TextViewColumn('above_below_kj', 'Above Below Kj', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kj_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_kcal field
            //
            $column = new TextViewColumn('above_below_kcal', 'Above Below Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kcal_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_protein field
            //
            $column = new TextViewColumn('above_below_protein', 'Above Below Protein', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_protein_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_provita field
            //
            $column = new TextViewColumn('above_below_provita', 'Above Below Provita', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provita_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_provitc field
            //
            $column = new TextViewColumn('above_below_provitc', 'Above Below Provitc', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provitc_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_iron field
            //
            $column = new TextViewColumn('above_below_iron', 'Above Below Iron', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_iron_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_zinc field
            //
            $column = new TextViewColumn('above_below_zinc', 'Above Below Zinc', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_zinc_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_kj_display field
            //
            $column = new TextViewColumn('above_below_kj_display', 'Above Below Kj Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kj_display_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_kcal_display field
            //
            $column = new TextViewColumn('above_below_kcal_display', 'Above Below Kcal Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kcal_display_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_protein_display field
            //
            $column = new TextViewColumn('above_below_protein_display', 'Above Below Protein Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_protein_display_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_provita_display field
            //
            $column = new TextViewColumn('above_below_provita_display', 'Above Below Provita Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provita_display_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_provitc_display field
            //
            $column = new TextViewColumn('above_below_provitc_display', 'Above Below Provitc Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provitc_display_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_iron_display field
            //
            $column = new TextViewColumn('above_below_iron_display', 'Above Below Iron Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_iron_display_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for above_below_zinc_display field
            //
            $column = new TextViewColumn('above_below_zinc_display', 'Above Below Zinc Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_zinc_display_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for unique_check field
            //
            $column = new TextViewColumn('unique_check', 'Unique Check', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_unique_check_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for duplicate_warning field
            //
            $column = new TextViewColumn('duplicate_warning', 'Duplicate Warning', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_duplicate_warning_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for unique_calc field
            //
            $column = new TextViewColumn('unique_calc', 'Unique Calc', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_unique_calc_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for serialno field
            //
            $column = new TextViewColumn('serialno', 'Serialno', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_serialno_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for created_by field
            //
            $column = new TextViewColumn('created_by', 'Created By', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_created_by_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for created_date field
            //
            $column = new DateTimeViewColumn('created_date', 'Created Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for modified_date field
            //
            $column = new DateTimeViewColumn('modified_date', 'Modified Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for modified_by field
            //
            $column = new TextViewColumn('modified_by', 'Modified By', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_modified_by_handler_list');
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
            $column = new TextViewColumn('cropid_name_var_lndrce', 'Cropid', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for scientific_name field
            //
            $column = new TextViewColumn('scientific_name', 'Scientific Name', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_scientific_name_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for common_names field
            //
            $column = new TextViewColumn('common_names', 'Common Names', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_common_names_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for edible_part field
            //
            $column = new TextViewColumn('edible_part', 'Edible Part', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_edible_part_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for moisture field
            //
            $column = new TextViewColumn('moisture', 'Moisture', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for energy_kj field
            //
            $column = new TextViewColumn('energy_kj', 'Energy Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for energy_kcal field
            //
            $column = new TextViewColumn('energy_kcal', 'Energy Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for protein field
            //
            $column = new TextViewColumn('protein', 'Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for provit_a field
            //
            $column = new TextViewColumn('provit_a', 'Provit A', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for provit_c field
            //
            $column = new TextViewColumn('provit_c', 'Provit C', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for iron field
            //
            $column = new TextViewColumn('iron', 'Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for zinc field
            //
            $column = new TextViewColumn('zinc', 'Zinc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for comments field
            //
            $column = new TextViewColumn('comments', 'Comments', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_comments_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for local_names field
            //
            $column = new TextViewColumn('local_names', 'Local Names', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_local_names_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for references_nutrition field
            //
            $column = new TextViewColumn('references_nutrition', 'References Nutrition', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_references_nutrition_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for normal_preparation field
            //
            $column = new TextViewColumn('normal_preparation', 'Normal Preparation', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_normal_preparation_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for preparation_tested field
            //
            $column = new TextViewColumn('preparation_tested', 'Preparation Tested', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_preparation_tested_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for notes field
            //
            $column = new TextViewColumn('notes', 'Notes', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_notes_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for average_kj field
            //
            $column = new TextViewColumn('average_kj', 'Average Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for average_kcal field
            //
            $column = new TextViewColumn('average_kcal', 'Average Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for average_protein field
            //
            $column = new TextViewColumn('average_protein', 'Average Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for average_provita field
            //
            $column = new TextViewColumn('average_provita', 'Average Provita', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for average_provitc field
            //
            $column = new TextViewColumn('average_provitc', 'Average Provitc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for average_iron field
            //
            $column = new TextViewColumn('average_iron', 'Average Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_kj field
            //
            $column = new TextViewColumn('above_below_kj', 'Above Below Kj', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kj_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_kcal field
            //
            $column = new TextViewColumn('above_below_kcal', 'Above Below Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kcal_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_protein field
            //
            $column = new TextViewColumn('above_below_protein', 'Above Below Protein', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_protein_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_provita field
            //
            $column = new TextViewColumn('above_below_provita', 'Above Below Provita', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provita_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_provitc field
            //
            $column = new TextViewColumn('above_below_provitc', 'Above Below Provitc', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provitc_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_iron field
            //
            $column = new TextViewColumn('above_below_iron', 'Above Below Iron', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_iron_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_zinc field
            //
            $column = new TextViewColumn('above_below_zinc', 'Above Below Zinc', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_zinc_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_kj_display field
            //
            $column = new TextViewColumn('above_below_kj_display', 'Above Below Kj Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kj_display_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_kcal_display field
            //
            $column = new TextViewColumn('above_below_kcal_display', 'Above Below Kcal Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_kcal_display_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_protein_display field
            //
            $column = new TextViewColumn('above_below_protein_display', 'Above Below Protein Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_protein_display_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_provita_display field
            //
            $column = new TextViewColumn('above_below_provita_display', 'Above Below Provita Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provita_display_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_provitc_display field
            //
            $column = new TextViewColumn('above_below_provitc_display', 'Above Below Provitc Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_provitc_display_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_iron_display field
            //
            $column = new TextViewColumn('above_below_iron_display', 'Above Below Iron Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_iron_display_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for above_below_zinc_display field
            //
            $column = new TextViewColumn('above_below_zinc_display', 'Above Below Zinc Display', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_above_below_zinc_display_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for unique_check field
            //
            $column = new TextViewColumn('unique_check', 'Unique Check', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_unique_check_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for duplicate_warning field
            //
            $column = new TextViewColumn('duplicate_warning', 'Duplicate Warning', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_duplicate_warning_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for unique_calc field
            //
            $column = new TextViewColumn('unique_calc', 'Unique Calc', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_unique_calc_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for serialno field
            //
            $column = new TextViewColumn('serialno', 'Serialno', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_serialno_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for created_by field
            //
            $column = new TextViewColumn('created_by', 'Created By', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_created_by_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for created_date field
            //
            $column = new DateTimeViewColumn('created_date', 'Created Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for modified_date field
            //
            $column = new DateTimeViewColumn('modified_date', 'Modified Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for modified_by field
            //
            $column = new TextViewColumn('modified_by', 'Modified By', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('food_plants_internationalGrid_modified_by_handler_view');
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for id field
            //
            $editor = new TextEdit('id_edit');
            $editColumn = new CustomEditColumn('Id', 'id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for cropid field
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
                'Cropid', 
                'cropid', 
                $editor, 
                $this->dataset, 'cropID', 'name_var_lndrce', $lookupDataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for scientific_name field
            //
            $editor = new TextEdit('scientific_name_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Scientific Name', 'scientific_name', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for common_names field
            //
            $editor = new TextEdit('common_names_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Common Names', 'common_names', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for edible_part field
            //
            $editor = new TextEdit('edible_part_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Edible Part', 'edible_part', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for moisture field
            //
            $editor = new TextEdit('moisture_edit');
            $editColumn = new CustomEditColumn('Moisture', 'moisture', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for energy_kj field
            //
            $editor = new TextEdit('energy_kj_edit');
            $editColumn = new CustomEditColumn('Energy Kj', 'energy_kj', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for energy_kcal field
            //
            $editor = new TextEdit('energy_kcal_edit');
            $editColumn = new CustomEditColumn('Energy Kcal', 'energy_kcal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for protein field
            //
            $editor = new TextEdit('protein_edit');
            $editColumn = new CustomEditColumn('Protein', 'protein', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for provit_a field
            //
            $editor = new TextEdit('provit_a_edit');
            $editColumn = new CustomEditColumn('Provit A', 'provit_a', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for provit_c field
            //
            $editor = new TextEdit('provit_c_edit');
            $editColumn = new CustomEditColumn('Provit C', 'provit_c', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for iron field
            //
            $editor = new TextEdit('iron_edit');
            $editColumn = new CustomEditColumn('Iron', 'iron', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for zinc field
            //
            $editor = new TextEdit('zinc_edit');
            $editColumn = new CustomEditColumn('Zinc', 'zinc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for comments field
            //
            $editor = new TextAreaEdit('comments_edit', 50, 8);
            $editColumn = new CustomEditColumn('Comments', 'comments', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for local_names field
            //
            $editor = new TextAreaEdit('local_names_edit', 50, 8);
            $editColumn = new CustomEditColumn('Local Names', 'local_names', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for references_nutrition field
            //
            $editor = new TextAreaEdit('references_nutrition_edit', 50, 8);
            $editColumn = new CustomEditColumn('References Nutrition', 'references_nutrition', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for normal_preparation field
            //
            $editor = new TextAreaEdit('normal_preparation_edit', 50, 8);
            $editColumn = new CustomEditColumn('Normal Preparation', 'normal_preparation', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for preparation_tested field
            //
            $editor = new TextAreaEdit('preparation_tested_edit', 50, 8);
            $editColumn = new CustomEditColumn('Preparation Tested', 'preparation_tested', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for notes field
            //
            $editor = new TextAreaEdit('notes_edit', 50, 8);
            $editColumn = new CustomEditColumn('Notes', 'notes', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for average_kj field
            //
            $editor = new TextEdit('average_kj_edit');
            $editColumn = new CustomEditColumn('Average Kj', 'average_kj', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for average_kcal field
            //
            $editor = new TextEdit('average_kcal_edit');
            $editColumn = new CustomEditColumn('Average Kcal', 'average_kcal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for average_protein field
            //
            $editor = new TextEdit('average_protein_edit');
            $editColumn = new CustomEditColumn('Average Protein', 'average_protein', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for average_provita field
            //
            $editor = new TextEdit('average_provita_edit');
            $editColumn = new CustomEditColumn('Average Provita', 'average_provita', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for average_provitc field
            //
            $editor = new TextEdit('average_provitc_edit');
            $editColumn = new CustomEditColumn('Average Provitc', 'average_provitc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for average_iron field
            //
            $editor = new TextEdit('average_iron_edit');
            $editColumn = new CustomEditColumn('Average Iron', 'average_iron', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_kj field
            //
            $editor = new TextEdit('above_below_kj_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kj', 'above_below_kj', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_kcal field
            //
            $editor = new TextEdit('above_below_kcal_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kcal', 'above_below_kcal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_protein field
            //
            $editor = new TextEdit('above_below_protein_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Protein', 'above_below_protein', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_provita field
            //
            $editor = new TextEdit('above_below_provita_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provita', 'above_below_provita', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_provitc field
            //
            $editor = new TextEdit('above_below_provitc_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provitc', 'above_below_provitc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_iron field
            //
            $editor = new TextEdit('above_below_iron_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Iron', 'above_below_iron', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_zinc field
            //
            $editor = new TextEdit('above_below_zinc_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Zinc', 'above_below_zinc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_kj_display field
            //
            $editor = new TextEdit('above_below_kj_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kj Display', 'above_below_kj_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_kcal_display field
            //
            $editor = new TextEdit('above_below_kcal_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kcal Display', 'above_below_kcal_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_protein_display field
            //
            $editor = new TextEdit('above_below_protein_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Protein Display', 'above_below_protein_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_provita_display field
            //
            $editor = new TextEdit('above_below_provita_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provita Display', 'above_below_provita_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_provitc_display field
            //
            $editor = new TextEdit('above_below_provitc_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provitc Display', 'above_below_provitc_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_iron_display field
            //
            $editor = new TextEdit('above_below_iron_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Iron Display', 'above_below_iron_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for above_below_zinc_display field
            //
            $editor = new TextEdit('above_below_zinc_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Zinc Display', 'above_below_zinc_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for unique_check field
            //
            $editor = new TextEdit('unique_check_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Unique Check', 'unique_check', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for duplicate_warning field
            //
            $editor = new TextEdit('duplicate_warning_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Duplicate Warning', 'duplicate_warning', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for unique_calc field
            //
            $editor = new TextEdit('unique_calc_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Unique Calc', 'unique_calc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for serialno field
            //
            $editor = new TextEdit('serialno_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Serialno', 'serialno', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for created_by field
            //
            $editor = new TextEdit('created_by_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Created By', 'created_by', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for created_date field
            //
            $editor = new DateTimeEdit('created_date_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Created Date', 'created_date', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for modified_date field
            //
            $editor = new DateTimeEdit('modified_date_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Modified Date', 'modified_date', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for modified_by field
            //
            $editor = new TextEdit('modified_by_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Modified By', 'modified_by', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for id field
            //
            $editor = new TextEdit('id_edit');
            $editColumn = new CustomEditColumn('Id', 'id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for cropid field
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
                'Cropid', 
                'cropid', 
                $editor, 
                $this->dataset, 'cropID', 'name_var_lndrce', $lookupDataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for scientific_name field
            //
            $editor = new TextEdit('scientific_name_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Scientific Name', 'scientific_name', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for common_names field
            //
            $editor = new TextEdit('common_names_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Common Names', 'common_names', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for edible_part field
            //
            $editor = new TextEdit('edible_part_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Edible Part', 'edible_part', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for moisture field
            //
            $editor = new TextEdit('moisture_edit');
            $editColumn = new CustomEditColumn('Moisture', 'moisture', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for energy_kj field
            //
            $editor = new TextEdit('energy_kj_edit');
            $editColumn = new CustomEditColumn('Energy Kj', 'energy_kj', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for energy_kcal field
            //
            $editor = new TextEdit('energy_kcal_edit');
            $editColumn = new CustomEditColumn('Energy Kcal', 'energy_kcal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for protein field
            //
            $editor = new TextEdit('protein_edit');
            $editColumn = new CustomEditColumn('Protein', 'protein', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for provit_a field
            //
            $editor = new TextEdit('provit_a_edit');
            $editColumn = new CustomEditColumn('Provit A', 'provit_a', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for provit_c field
            //
            $editor = new TextEdit('provit_c_edit');
            $editColumn = new CustomEditColumn('Provit C', 'provit_c', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for iron field
            //
            $editor = new TextEdit('iron_edit');
            $editColumn = new CustomEditColumn('Iron', 'iron', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for zinc field
            //
            $editor = new TextEdit('zinc_edit');
            $editColumn = new CustomEditColumn('Zinc', 'zinc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for comments field
            //
            $editor = new TextAreaEdit('comments_edit', 50, 8);
            $editColumn = new CustomEditColumn('Comments', 'comments', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for local_names field
            //
            $editor = new TextAreaEdit('local_names_edit', 50, 8);
            $editColumn = new CustomEditColumn('Local Names', 'local_names', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for references_nutrition field
            //
            $editor = new TextAreaEdit('references_nutrition_edit', 50, 8);
            $editColumn = new CustomEditColumn('References Nutrition', 'references_nutrition', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for normal_preparation field
            //
            $editor = new TextAreaEdit('normal_preparation_edit', 50, 8);
            $editColumn = new CustomEditColumn('Normal Preparation', 'normal_preparation', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for preparation_tested field
            //
            $editor = new TextAreaEdit('preparation_tested_edit', 50, 8);
            $editColumn = new CustomEditColumn('Preparation Tested', 'preparation_tested', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for notes field
            //
            $editor = new TextAreaEdit('notes_edit', 50, 8);
            $editColumn = new CustomEditColumn('Notes', 'notes', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for average_kj field
            //
            $editor = new TextEdit('average_kj_edit');
            $editColumn = new CustomEditColumn('Average Kj', 'average_kj', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for average_kcal field
            //
            $editor = new TextEdit('average_kcal_edit');
            $editColumn = new CustomEditColumn('Average Kcal', 'average_kcal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for average_protein field
            //
            $editor = new TextEdit('average_protein_edit');
            $editColumn = new CustomEditColumn('Average Protein', 'average_protein', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for average_provita field
            //
            $editor = new TextEdit('average_provita_edit');
            $editColumn = new CustomEditColumn('Average Provita', 'average_provita', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for average_provitc field
            //
            $editor = new TextEdit('average_provitc_edit');
            $editColumn = new CustomEditColumn('Average Provitc', 'average_provitc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for average_iron field
            //
            $editor = new TextEdit('average_iron_edit');
            $editColumn = new CustomEditColumn('Average Iron', 'average_iron', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_kj field
            //
            $editor = new TextEdit('above_below_kj_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kj', 'above_below_kj', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_kcal field
            //
            $editor = new TextEdit('above_below_kcal_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kcal', 'above_below_kcal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_protein field
            //
            $editor = new TextEdit('above_below_protein_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Protein', 'above_below_protein', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_provita field
            //
            $editor = new TextEdit('above_below_provita_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provita', 'above_below_provita', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_provitc field
            //
            $editor = new TextEdit('above_below_provitc_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provitc', 'above_below_provitc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_iron field
            //
            $editor = new TextEdit('above_below_iron_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Iron', 'above_below_iron', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_zinc field
            //
            $editor = new TextEdit('above_below_zinc_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Zinc', 'above_below_zinc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_kj_display field
            //
            $editor = new TextEdit('above_below_kj_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kj Display', 'above_below_kj_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_kcal_display field
            //
            $editor = new TextEdit('above_below_kcal_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Kcal Display', 'above_below_kcal_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_protein_display field
            //
            $editor = new TextEdit('above_below_protein_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Protein Display', 'above_below_protein_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_provita_display field
            //
            $editor = new TextEdit('above_below_provita_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provita Display', 'above_below_provita_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_provitc_display field
            //
            $editor = new TextEdit('above_below_provitc_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Provitc Display', 'above_below_provitc_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_iron_display field
            //
            $editor = new TextEdit('above_below_iron_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Iron Display', 'above_below_iron_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for above_below_zinc_display field
            //
            $editor = new TextEdit('above_below_zinc_display_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Above Below Zinc Display', 'above_below_zinc_display', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for unique_check field
            //
            $editor = new TextEdit('unique_check_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Unique Check', 'unique_check', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for duplicate_warning field
            //
            $editor = new TextEdit('duplicate_warning_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Duplicate Warning', 'duplicate_warning', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for unique_calc field
            //
            $editor = new TextEdit('unique_calc_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Unique Calc', 'unique_calc', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for serialno field
            //
            $editor = new TextEdit('serialno_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Serialno', 'serialno', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for created_by field
            //
            $editor = new TextEdit('created_by_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Created By', 'created_by', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for created_date field
            //
            $editor = new DateTimeEdit('created_date_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Created Date', 'created_date', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for modified_date field
            //
            $editor = new DateTimeEdit('modified_date_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Modified Date', 'modified_date', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for modified_by field
            //
            $editor = new TextEdit('modified_by_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Modified By', 'modified_by', $editor, $this->dataset);
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
            $column = new TextViewColumn('cropid_name_var_lndrce', 'Cropid', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for scientific_name field
            //
            $column = new TextViewColumn('scientific_name', 'Scientific Name', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for common_names field
            //
            $column = new TextViewColumn('common_names', 'Common Names', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for edible_part field
            //
            $column = new TextViewColumn('edible_part', 'Edible Part', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for moisture field
            //
            $column = new TextViewColumn('moisture', 'Moisture', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for energy_kj field
            //
            $column = new TextViewColumn('energy_kj', 'Energy Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for energy_kcal field
            //
            $column = new TextViewColumn('energy_kcal', 'Energy Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for protein field
            //
            $column = new TextViewColumn('protein', 'Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for provit_a field
            //
            $column = new TextViewColumn('provit_a', 'Provit A', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for provit_c field
            //
            $column = new TextViewColumn('provit_c', 'Provit C', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for iron field
            //
            $column = new TextViewColumn('iron', 'Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for zinc field
            //
            $column = new TextViewColumn('zinc', 'Zinc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for comments field
            //
            $column = new TextViewColumn('comments', 'Comments', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for local_names field
            //
            $column = new TextViewColumn('local_names', 'Local Names', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for references_nutrition field
            //
            $column = new TextViewColumn('references_nutrition', 'References Nutrition', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for normal_preparation field
            //
            $column = new TextViewColumn('normal_preparation', 'Normal Preparation', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for preparation_tested field
            //
            $column = new TextViewColumn('preparation_tested', 'Preparation Tested', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for notes field
            //
            $column = new TextViewColumn('notes', 'Notes', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for average_kj field
            //
            $column = new TextViewColumn('average_kj', 'Average Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for average_kcal field
            //
            $column = new TextViewColumn('average_kcal', 'Average Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for average_protein field
            //
            $column = new TextViewColumn('average_protein', 'Average Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for average_provita field
            //
            $column = new TextViewColumn('average_provita', 'Average Provita', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for average_provitc field
            //
            $column = new TextViewColumn('average_provitc', 'Average Provitc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for average_iron field
            //
            $column = new TextViewColumn('average_iron', 'Average Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_kj field
            //
            $column = new TextViewColumn('above_below_kj', 'Above Below Kj', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_kcal field
            //
            $column = new TextViewColumn('above_below_kcal', 'Above Below Kcal', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_protein field
            //
            $column = new TextViewColumn('above_below_protein', 'Above Below Protein', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_provita field
            //
            $column = new TextViewColumn('above_below_provita', 'Above Below Provita', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_provitc field
            //
            $column = new TextViewColumn('above_below_provitc', 'Above Below Provitc', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_iron field
            //
            $column = new TextViewColumn('above_below_iron', 'Above Below Iron', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_zinc field
            //
            $column = new TextViewColumn('above_below_zinc', 'Above Below Zinc', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_kj_display field
            //
            $column = new TextViewColumn('above_below_kj_display', 'Above Below Kj Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_kcal_display field
            //
            $column = new TextViewColumn('above_below_kcal_display', 'Above Below Kcal Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_protein_display field
            //
            $column = new TextViewColumn('above_below_protein_display', 'Above Below Protein Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_provita_display field
            //
            $column = new TextViewColumn('above_below_provita_display', 'Above Below Provita Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_provitc_display field
            //
            $column = new TextViewColumn('above_below_provitc_display', 'Above Below Provitc Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_iron_display field
            //
            $column = new TextViewColumn('above_below_iron_display', 'Above Below Iron Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for above_below_zinc_display field
            //
            $column = new TextViewColumn('above_below_zinc_display', 'Above Below Zinc Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for unique_check field
            //
            $column = new TextViewColumn('unique_check', 'Unique Check', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for duplicate_warning field
            //
            $column = new TextViewColumn('duplicate_warning', 'Duplicate Warning', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for unique_calc field
            //
            $column = new TextViewColumn('unique_calc', 'Unique Calc', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for serialno field
            //
            $column = new TextViewColumn('serialno', 'Serialno', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for created_by field
            //
            $column = new TextViewColumn('created_by', 'Created By', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for created_date field
            //
            $column = new DateTimeViewColumn('created_date', 'Created Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for modified_date field
            //
            $column = new DateTimeViewColumn('modified_date', 'Modified Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for modified_by field
            //
            $column = new TextViewColumn('modified_by', 'Modified By', $this->dataset);
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
            $column = new TextViewColumn('cropid_name_var_lndrce', 'Cropid', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for scientific_name field
            //
            $column = new TextViewColumn('scientific_name', 'Scientific Name', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for common_names field
            //
            $column = new TextViewColumn('common_names', 'Common Names', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for edible_part field
            //
            $column = new TextViewColumn('edible_part', 'Edible Part', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for moisture field
            //
            $column = new TextViewColumn('moisture', 'Moisture', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for energy_kj field
            //
            $column = new TextViewColumn('energy_kj', 'Energy Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for energy_kcal field
            //
            $column = new TextViewColumn('energy_kcal', 'Energy Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for protein field
            //
            $column = new TextViewColumn('protein', 'Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for provit_a field
            //
            $column = new TextViewColumn('provit_a', 'Provit A', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for provit_c field
            //
            $column = new TextViewColumn('provit_c', 'Provit C', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for iron field
            //
            $column = new TextViewColumn('iron', 'Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for zinc field
            //
            $column = new TextViewColumn('zinc', 'Zinc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for comments field
            //
            $column = new TextViewColumn('comments', 'Comments', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for local_names field
            //
            $column = new TextViewColumn('local_names', 'Local Names', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for references_nutrition field
            //
            $column = new TextViewColumn('references_nutrition', 'References Nutrition', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for normal_preparation field
            //
            $column = new TextViewColumn('normal_preparation', 'Normal Preparation', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for preparation_tested field
            //
            $column = new TextViewColumn('preparation_tested', 'Preparation Tested', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for notes field
            //
            $column = new TextViewColumn('notes', 'Notes', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for average_kj field
            //
            $column = new TextViewColumn('average_kj', 'Average Kj', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for average_kcal field
            //
            $column = new TextViewColumn('average_kcal', 'Average Kcal', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for average_protein field
            //
            $column = new TextViewColumn('average_protein', 'Average Protein', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for average_provita field
            //
            $column = new TextViewColumn('average_provita', 'Average Provita', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for average_provitc field
            //
            $column = new TextViewColumn('average_provitc', 'Average Provitc', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for average_iron field
            //
            $column = new TextViewColumn('average_iron', 'Average Iron', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_kj field
            //
            $column = new TextViewColumn('above_below_kj', 'Above Below Kj', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_kcal field
            //
            $column = new TextViewColumn('above_below_kcal', 'Above Below Kcal', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_protein field
            //
            $column = new TextViewColumn('above_below_protein', 'Above Below Protein', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_provita field
            //
            $column = new TextViewColumn('above_below_provita', 'Above Below Provita', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_provitc field
            //
            $column = new TextViewColumn('above_below_provitc', 'Above Below Provitc', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_iron field
            //
            $column = new TextViewColumn('above_below_iron', 'Above Below Iron', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_zinc field
            //
            $column = new TextViewColumn('above_below_zinc', 'Above Below Zinc', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_kj_display field
            //
            $column = new TextViewColumn('above_below_kj_display', 'Above Below Kj Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_kcal_display field
            //
            $column = new TextViewColumn('above_below_kcal_display', 'Above Below Kcal Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_protein_display field
            //
            $column = new TextViewColumn('above_below_protein_display', 'Above Below Protein Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_provita_display field
            //
            $column = new TextViewColumn('above_below_provita_display', 'Above Below Provita Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_provitc_display field
            //
            $column = new TextViewColumn('above_below_provitc_display', 'Above Below Provitc Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_iron_display field
            //
            $column = new TextViewColumn('above_below_iron_display', 'Above Below Iron Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for above_below_zinc_display field
            //
            $column = new TextViewColumn('above_below_zinc_display', 'Above Below Zinc Display', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for unique_check field
            //
            $column = new TextViewColumn('unique_check', 'Unique Check', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for duplicate_warning field
            //
            $column = new TextViewColumn('duplicate_warning', 'Duplicate Warning', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for unique_calc field
            //
            $column = new TextViewColumn('unique_calc', 'Unique Calc', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for serialno field
            //
            $column = new TextViewColumn('serialno', 'Serialno', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for created_by field
            //
            $column = new TextViewColumn('created_by', 'Created By', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for created_date field
            //
            $column = new DateTimeViewColumn('created_date', 'Created Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for modified_date field
            //
            $column = new DateTimeViewColumn('modified_date', 'Modified Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for modified_by field
            //
            $column = new TextViewColumn('modified_by', 'Modified By', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'food_plants_international_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'food_plants_internationalGrid');
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
            // View column for scientific_name field
            //
            $column = new TextViewColumn('scientific_name', 'Scientific Name', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_scientific_name_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for common_names field
            //
            $column = new TextViewColumn('common_names', 'Common Names', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_common_names_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for edible_part field
            //
            $column = new TextViewColumn('edible_part', 'Edible Part', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_edible_part_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for comments field
            //
            $column = new TextViewColumn('comments', 'Comments', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_comments_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for local_names field
            //
            $column = new TextViewColumn('local_names', 'Local Names', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_local_names_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for references_nutrition field
            //
            $column = new TextViewColumn('references_nutrition', 'References Nutrition', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_references_nutrition_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for normal_preparation field
            //
            $column = new TextViewColumn('normal_preparation', 'Normal Preparation', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_normal_preparation_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for preparation_tested field
            //
            $column = new TextViewColumn('preparation_tested', 'Preparation Tested', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_preparation_tested_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for notes field
            //
            $column = new TextViewColumn('notes', 'Notes', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_notes_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kj field
            //
            $column = new TextViewColumn('above_below_kj', 'Above Below Kj', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kj_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kcal field
            //
            $column = new TextViewColumn('above_below_kcal', 'Above Below Kcal', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kcal_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_protein field
            //
            $column = new TextViewColumn('above_below_protein', 'Above Below Protein', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_protein_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provita field
            //
            $column = new TextViewColumn('above_below_provita', 'Above Below Provita', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provita_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provitc field
            //
            $column = new TextViewColumn('above_below_provitc', 'Above Below Provitc', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provitc_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_iron field
            //
            $column = new TextViewColumn('above_below_iron', 'Above Below Iron', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_iron_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_zinc field
            //
            $column = new TextViewColumn('above_below_zinc', 'Above Below Zinc', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_zinc_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kj_display field
            //
            $column = new TextViewColumn('above_below_kj_display', 'Above Below Kj Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kj_display_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kcal_display field
            //
            $column = new TextViewColumn('above_below_kcal_display', 'Above Below Kcal Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kcal_display_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_protein_display field
            //
            $column = new TextViewColumn('above_below_protein_display', 'Above Below Protein Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_protein_display_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provita_display field
            //
            $column = new TextViewColumn('above_below_provita_display', 'Above Below Provita Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provita_display_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provitc_display field
            //
            $column = new TextViewColumn('above_below_provitc_display', 'Above Below Provitc Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provitc_display_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_iron_display field
            //
            $column = new TextViewColumn('above_below_iron_display', 'Above Below Iron Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_iron_display_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_zinc_display field
            //
            $column = new TextViewColumn('above_below_zinc_display', 'Above Below Zinc Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_zinc_display_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for unique_check field
            //
            $column = new TextViewColumn('unique_check', 'Unique Check', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_unique_check_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for duplicate_warning field
            //
            $column = new TextViewColumn('duplicate_warning', 'Duplicate Warning', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_duplicate_warning_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for unique_calc field
            //
            $column = new TextViewColumn('unique_calc', 'Unique Calc', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_unique_calc_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for serialno field
            //
            $column = new TextViewColumn('serialno', 'Serialno', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_serialno_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for created_by field
            //
            $column = new TextViewColumn('created_by', 'Created By', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_created_by_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for modified_by field
            //
            $column = new TextViewColumn('modified_by', 'Modified By', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_modified_by_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for scientific_name field
            //
            $column = new TextViewColumn('scientific_name', 'Scientific Name', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_scientific_name_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for common_names field
            //
            $column = new TextViewColumn('common_names', 'Common Names', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_common_names_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for edible_part field
            //
            $column = new TextViewColumn('edible_part', 'Edible Part', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_edible_part_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for comments field
            //
            $column = new TextViewColumn('comments', 'Comments', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_comments_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for local_names field
            //
            $column = new TextViewColumn('local_names', 'Local Names', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_local_names_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for references_nutrition field
            //
            $column = new TextViewColumn('references_nutrition', 'References Nutrition', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_references_nutrition_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for normal_preparation field
            //
            $column = new TextViewColumn('normal_preparation', 'Normal Preparation', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_normal_preparation_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for preparation_tested field
            //
            $column = new TextViewColumn('preparation_tested', 'Preparation Tested', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_preparation_tested_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for notes field
            //
            $column = new TextViewColumn('notes', 'Notes', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_notes_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kj field
            //
            $column = new TextViewColumn('above_below_kj', 'Above Below Kj', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kj_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kcal field
            //
            $column = new TextViewColumn('above_below_kcal', 'Above Below Kcal', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kcal_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_protein field
            //
            $column = new TextViewColumn('above_below_protein', 'Above Below Protein', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_protein_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provita field
            //
            $column = new TextViewColumn('above_below_provita', 'Above Below Provita', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provita_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provitc field
            //
            $column = new TextViewColumn('above_below_provitc', 'Above Below Provitc', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provitc_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_iron field
            //
            $column = new TextViewColumn('above_below_iron', 'Above Below Iron', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_iron_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_zinc field
            //
            $column = new TextViewColumn('above_below_zinc', 'Above Below Zinc', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_zinc_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kj_display field
            //
            $column = new TextViewColumn('above_below_kj_display', 'Above Below Kj Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kj_display_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_kcal_display field
            //
            $column = new TextViewColumn('above_below_kcal_display', 'Above Below Kcal Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_kcal_display_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_protein_display field
            //
            $column = new TextViewColumn('above_below_protein_display', 'Above Below Protein Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_protein_display_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provita_display field
            //
            $column = new TextViewColumn('above_below_provita_display', 'Above Below Provita Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provita_display_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_provitc_display field
            //
            $column = new TextViewColumn('above_below_provitc_display', 'Above Below Provitc Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_provitc_display_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_iron_display field
            //
            $column = new TextViewColumn('above_below_iron_display', 'Above Below Iron Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_iron_display_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for above_below_zinc_display field
            //
            $column = new TextViewColumn('above_below_zinc_display', 'Above Below Zinc Display', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_above_below_zinc_display_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for unique_check field
            //
            $column = new TextViewColumn('unique_check', 'Unique Check', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_unique_check_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for duplicate_warning field
            //
            $column = new TextViewColumn('duplicate_warning', 'Duplicate Warning', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_duplicate_warning_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for unique_calc field
            //
            $column = new TextViewColumn('unique_calc', 'Unique Calc', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_unique_calc_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for serialno field
            //
            $column = new TextViewColumn('serialno', 'Serialno', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_serialno_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for created_by field
            //
            $column = new TextViewColumn('created_by', 'Created By', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_created_by_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for modified_by field
            //
            $column = new TextViewColumn('modified_by', 'Modified By', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'food_plants_internationalGrid_modified_by_handler_view', $column);
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
        $Page = new food_plants_internationalPage("food_plants_international.php", "food_plants_international", GetCurrentUserGrantForDataSource("food_plants_international"), 'UTF-8');
        $Page->SetShortCaption('Food Plants International');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('Food Plants International');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("food_plants_international"));
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
	

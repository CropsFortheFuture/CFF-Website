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
    
    
    
    class KBS_Agro_Cropping_SystemPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Agro_Cropping_System`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('location_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_intercrop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_monocrop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('KBS_Cropping_Systemcol');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_mixed');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_alley');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_multitier');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_mechan_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_mechan_medium');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_mechan_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_labour_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_labour_medium');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('crop_system_labour_low');
            $this->dataset->AddField($field, false);
            $field = new StringField('kbs_cropsys_others');
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
            $grid->SearchControl = new SimpleSearch('KBS_Agro_Cropping_Systemssearch', $this->dataset,
                array('id', 'cropID_name_var_lndrce', 'location_id_google_address', 'crop_system_intercrop', 'crop_system_monocrop', 'KBS_Cropping_Systemcol', 'crop_system_mixed', 'crop_system_alley', 'crop_system_multitier', 'crop_system_mechan_high', 'crop_system_mechan_medium', 'crop_system_mechan_low', 'crop_system_labour_high', 'crop_system_labour_medium', 'crop_system_labour_low', 'kbs_cropsys_others'),
                array($this->RenderText('Id'), $this->RenderText('CropID'), $this->RenderText('Location Id'), $this->RenderText('Crop System Intercrop'), $this->RenderText('Crop System Monocrop'), $this->RenderText('KBS Cropping Systemcol'), $this->RenderText('Crop System Mixed'), $this->RenderText('Crop System Alley'), $this->RenderText('Crop System Multitier'), $this->RenderText('Crop System Mechan High'), $this->RenderText('Crop System Mechan Medium'), $this->RenderText('Crop System Mechan Low'), $this->RenderText('Crop System Labour High'), $this->RenderText('Crop System Labour Medium'), $this->RenderText('Crop System Labour Low'), $this->RenderText('Kbs Cropsys Others')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Agro_Cropping_Systemasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
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
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_intercrop', $this->RenderText('Crop System Intercrop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_monocrop', $this->RenderText('Crop System Monocrop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('KBS_Cropping_Systemcol', $this->RenderText('KBS Cropping Systemcol')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_mixed', $this->RenderText('Crop System Mixed')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_alley', $this->RenderText('Crop System Alley')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_multitier', $this->RenderText('Crop System Multitier')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_mechan_high', $this->RenderText('Crop System Mechan High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_mechan_medium', $this->RenderText('Crop System Mechan Medium')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_mechan_low', $this->RenderText('Crop System Mechan Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_labour_high', $this->RenderText('Crop System Labour High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_labour_medium', $this->RenderText('Crop System Labour Medium')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('crop_system_labour_low', $this->RenderText('Crop System Labour Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('kbs_cropsys_others', $this->RenderText('Kbs Cropsys Others')));
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
            // View column for crop_system_intercrop field
            //
            $column = new TextViewColumn('crop_system_intercrop', 'Crop System Intercrop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_monocrop field
            //
            $column = new TextViewColumn('crop_system_monocrop', 'Crop System Monocrop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for KBS_Cropping_Systemcol field
            //
            $column = new TextViewColumn('KBS_Cropping_Systemcol', 'KBS Cropping Systemcol', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_mixed field
            //
            $column = new TextViewColumn('crop_system_mixed', 'Crop System Mixed', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_alley field
            //
            $column = new TextViewColumn('crop_system_alley', 'Crop System Alley', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_multitier field
            //
            $column = new TextViewColumn('crop_system_multitier', 'Crop System Multitier', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_mechan_high field
            //
            $column = new TextViewColumn('crop_system_mechan_high', 'Crop System Mechan High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_mechan_medium field
            //
            $column = new TextViewColumn('crop_system_mechan_medium', 'Crop System Mechan Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_mechan_low field
            //
            $column = new TextViewColumn('crop_system_mechan_low', 'Crop System Mechan Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_labour_high field
            //
            $column = new TextViewColumn('crop_system_labour_high', 'Crop System Labour High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_labour_medium field
            //
            $column = new TextViewColumn('crop_system_labour_medium', 'Crop System Labour Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for crop_system_labour_low field
            //
            $column = new TextViewColumn('crop_system_labour_low', 'Crop System Labour Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for kbs_cropsys_others field
            //
            $column = new TextViewColumn('kbs_cropsys_others', 'Kbs Cropsys Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Cropping_SystemGrid_kbs_cropsys_others_handler_list');
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
            // View column for crop_system_intercrop field
            //
            $column = new TextViewColumn('crop_system_intercrop', 'Crop System Intercrop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_monocrop field
            //
            $column = new TextViewColumn('crop_system_monocrop', 'Crop System Monocrop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for KBS_Cropping_Systemcol field
            //
            $column = new TextViewColumn('KBS_Cropping_Systemcol', 'KBS Cropping Systemcol', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_mixed field
            //
            $column = new TextViewColumn('crop_system_mixed', 'Crop System Mixed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_alley field
            //
            $column = new TextViewColumn('crop_system_alley', 'Crop System Alley', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_multitier field
            //
            $column = new TextViewColumn('crop_system_multitier', 'Crop System Multitier', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_mechan_high field
            //
            $column = new TextViewColumn('crop_system_mechan_high', 'Crop System Mechan High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_mechan_medium field
            //
            $column = new TextViewColumn('crop_system_mechan_medium', 'Crop System Mechan Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_mechan_low field
            //
            $column = new TextViewColumn('crop_system_mechan_low', 'Crop System Mechan Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_labour_high field
            //
            $column = new TextViewColumn('crop_system_labour_high', 'Crop System Labour High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_labour_medium field
            //
            $column = new TextViewColumn('crop_system_labour_medium', 'Crop System Labour Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for crop_system_labour_low field
            //
            $column = new TextViewColumn('crop_system_labour_low', 'Crop System Labour Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for kbs_cropsys_others field
            //
            $column = new TextViewColumn('kbs_cropsys_others', 'Kbs Cropsys Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Cropping_SystemGrid_kbs_cropsys_others_handler_view');
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
            // Edit column for crop_system_intercrop field
            //
            $editor = new TextEdit('crop_system_intercrop_edit');
            $editColumn = new CustomEditColumn('Crop System Intercrop', 'crop_system_intercrop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_monocrop field
            //
            $editor = new TextEdit('crop_system_monocrop_edit');
            $editColumn = new CustomEditColumn('Crop System Monocrop', 'crop_system_monocrop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for KBS_Cropping_Systemcol field
            //
            $editor = new TextEdit('kbs_cropping_systemcol_edit');
            $editColumn = new CustomEditColumn('KBS Cropping Systemcol', 'KBS_Cropping_Systemcol', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_mixed field
            //
            $editor = new TextEdit('crop_system_mixed_edit');
            $editColumn = new CustomEditColumn('Crop System Mixed', 'crop_system_mixed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_alley field
            //
            $editor = new TextEdit('crop_system_alley_edit');
            $editColumn = new CustomEditColumn('Crop System Alley', 'crop_system_alley', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_multitier field
            //
            $editor = new TextEdit('crop_system_multitier_edit');
            $editColumn = new CustomEditColumn('Crop System Multitier', 'crop_system_multitier', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_mechan_high field
            //
            $editor = new TextEdit('crop_system_mechan_high_edit');
            $editColumn = new CustomEditColumn('Crop System Mechan High', 'crop_system_mechan_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_mechan_medium field
            //
            $editor = new TextEdit('crop_system_mechan_medium_edit');
            $editColumn = new CustomEditColumn('Crop System Mechan Medium', 'crop_system_mechan_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_mechan_low field
            //
            $editor = new TextEdit('crop_system_mechan_low_edit');
            $editColumn = new CustomEditColumn('Crop System Mechan Low', 'crop_system_mechan_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_labour_high field
            //
            $editor = new TextEdit('crop_system_labour_high_edit');
            $editColumn = new CustomEditColumn('Crop System Labour High', 'crop_system_labour_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_labour_medium field
            //
            $editor = new TextEdit('crop_system_labour_medium_edit');
            $editColumn = new CustomEditColumn('Crop System Labour Medium', 'crop_system_labour_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for crop_system_labour_low field
            //
            $editor = new TextEdit('crop_system_labour_low_edit');
            $editColumn = new CustomEditColumn('Crop System Labour Low', 'crop_system_labour_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for kbs_cropsys_others field
            //
            $editor = new TextAreaEdit('kbs_cropsys_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Cropsys Others', 'kbs_cropsys_others', $editor, $this->dataset);
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
            // Edit column for crop_system_intercrop field
            //
            $editor = new TextEdit('crop_system_intercrop_edit');
            $editColumn = new CustomEditColumn('Crop System Intercrop', 'crop_system_intercrop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_monocrop field
            //
            $editor = new TextEdit('crop_system_monocrop_edit');
            $editColumn = new CustomEditColumn('Crop System Monocrop', 'crop_system_monocrop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for KBS_Cropping_Systemcol field
            //
            $editor = new TextEdit('kbs_cropping_systemcol_edit');
            $editColumn = new CustomEditColumn('KBS Cropping Systemcol', 'KBS_Cropping_Systemcol', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_mixed field
            //
            $editor = new TextEdit('crop_system_mixed_edit');
            $editColumn = new CustomEditColumn('Crop System Mixed', 'crop_system_mixed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_alley field
            //
            $editor = new TextEdit('crop_system_alley_edit');
            $editColumn = new CustomEditColumn('Crop System Alley', 'crop_system_alley', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_multitier field
            //
            $editor = new TextEdit('crop_system_multitier_edit');
            $editColumn = new CustomEditColumn('Crop System Multitier', 'crop_system_multitier', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_mechan_high field
            //
            $editor = new TextEdit('crop_system_mechan_high_edit');
            $editColumn = new CustomEditColumn('Crop System Mechan High', 'crop_system_mechan_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_mechan_medium field
            //
            $editor = new TextEdit('crop_system_mechan_medium_edit');
            $editColumn = new CustomEditColumn('Crop System Mechan Medium', 'crop_system_mechan_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_mechan_low field
            //
            $editor = new TextEdit('crop_system_mechan_low_edit');
            $editColumn = new CustomEditColumn('Crop System Mechan Low', 'crop_system_mechan_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_labour_high field
            //
            $editor = new TextEdit('crop_system_labour_high_edit');
            $editColumn = new CustomEditColumn('Crop System Labour High', 'crop_system_labour_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_labour_medium field
            //
            $editor = new TextEdit('crop_system_labour_medium_edit');
            $editColumn = new CustomEditColumn('Crop System Labour Medium', 'crop_system_labour_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for crop_system_labour_low field
            //
            $editor = new TextEdit('crop_system_labour_low_edit');
            $editColumn = new CustomEditColumn('Crop System Labour Low', 'crop_system_labour_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for kbs_cropsys_others field
            //
            $editor = new TextAreaEdit('kbs_cropsys_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Cropsys Others', 'kbs_cropsys_others', $editor, $this->dataset);
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
            // View column for crop_system_intercrop field
            //
            $column = new TextViewColumn('crop_system_intercrop', 'Crop System Intercrop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_monocrop field
            //
            $column = new TextViewColumn('crop_system_monocrop', 'Crop System Monocrop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for KBS_Cropping_Systemcol field
            //
            $column = new TextViewColumn('KBS_Cropping_Systemcol', 'KBS Cropping Systemcol', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_mixed field
            //
            $column = new TextViewColumn('crop_system_mixed', 'Crop System Mixed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_alley field
            //
            $column = new TextViewColumn('crop_system_alley', 'Crop System Alley', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_multitier field
            //
            $column = new TextViewColumn('crop_system_multitier', 'Crop System Multitier', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_mechan_high field
            //
            $column = new TextViewColumn('crop_system_mechan_high', 'Crop System Mechan High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_mechan_medium field
            //
            $column = new TextViewColumn('crop_system_mechan_medium', 'Crop System Mechan Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_mechan_low field
            //
            $column = new TextViewColumn('crop_system_mechan_low', 'Crop System Mechan Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_labour_high field
            //
            $column = new TextViewColumn('crop_system_labour_high', 'Crop System Labour High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_labour_medium field
            //
            $column = new TextViewColumn('crop_system_labour_medium', 'Crop System Labour Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for crop_system_labour_low field
            //
            $column = new TextViewColumn('crop_system_labour_low', 'Crop System Labour Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for kbs_cropsys_others field
            //
            $column = new TextViewColumn('kbs_cropsys_others', 'Kbs Cropsys Others', $this->dataset);
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
            // View column for crop_system_intercrop field
            //
            $column = new TextViewColumn('crop_system_intercrop', 'Crop System Intercrop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_monocrop field
            //
            $column = new TextViewColumn('crop_system_monocrop', 'Crop System Monocrop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for KBS_Cropping_Systemcol field
            //
            $column = new TextViewColumn('KBS_Cropping_Systemcol', 'KBS Cropping Systemcol', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_mixed field
            //
            $column = new TextViewColumn('crop_system_mixed', 'Crop System Mixed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_alley field
            //
            $column = new TextViewColumn('crop_system_alley', 'Crop System Alley', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_multitier field
            //
            $column = new TextViewColumn('crop_system_multitier', 'Crop System Multitier', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_mechan_high field
            //
            $column = new TextViewColumn('crop_system_mechan_high', 'Crop System Mechan High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_mechan_medium field
            //
            $column = new TextViewColumn('crop_system_mechan_medium', 'Crop System Mechan Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_mechan_low field
            //
            $column = new TextViewColumn('crop_system_mechan_low', 'Crop System Mechan Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_labour_high field
            //
            $column = new TextViewColumn('crop_system_labour_high', 'Crop System Labour High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_labour_medium field
            //
            $column = new TextViewColumn('crop_system_labour_medium', 'Crop System Labour Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for crop_system_labour_low field
            //
            $column = new TextViewColumn('crop_system_labour_low', 'Crop System Labour Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for kbs_cropsys_others field
            //
            $column = new TextViewColumn('kbs_cropsys_others', 'Kbs Cropsys Others', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Agro_Cropping_System_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_Agro_Cropping_SystemGrid');
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
            // View column for kbs_cropsys_others field
            //
            $column = new TextViewColumn('kbs_cropsys_others', 'Kbs Cropsys Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Cropping_SystemGrid_kbs_cropsys_others_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for kbs_cropsys_others field
            //
            $column = new TextViewColumn('kbs_cropsys_others', 'Kbs Cropsys Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Cropping_SystemGrid_kbs_cropsys_others_handler_view', $column);
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
        $Page = new KBS_Agro_Cropping_SystemPage("KBS_Agro_Cropping_System.php", "KBS_Agro_Cropping_System", GetCurrentUserGrantForDataSource("KBS_Agro_Cropping_System"), 'UTF-8');
        $Page->SetShortCaption('KBS Agro Cropping System');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Agro Cropping System');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Agro_Cropping_System"));
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
	

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
    
    
    
    class KBS_SocioEconomy_InfrastructurePage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_SocioEconomy_Infrastructure`');
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('location_ID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('infrastructure_power_mains');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_power_genset');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_power_animals');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_power_auto');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_home_use_crop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_locmarket_crop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_loctrade_crop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_processor_crop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_nonlocaltrader_crop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_wholesaler_crop');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('infrastructure_supermarkets_crop');
            $this->dataset->AddField($field, false);
            $field = new StringField('kbs_infrastruct_others');
            $this->dataset->AddField($field, false);
            $this->dataset->AddLookupField('cropID', 'KBS_General', new IntegerField('cropID', null, null, true), new StringField('name_var_lndrce', 'cropID_name_var_lndrce', 'cropID_name_var_lndrce_KBS_General'), 'cropID_name_var_lndrce_KBS_General');
            $this->dataset->AddLookupField('location_ID', 'KBS_Global_Google_PlaceID', new IntegerField('id', null, null, true), new StringField('google_address', 'location_ID_google_address', 'location_ID_google_address_KBS_Global_Google_PlaceID'), 'location_ID_google_address_KBS_Global_Google_PlaceID');
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
            $grid->SearchControl = new SimpleSearch('KBS_SocioEconomy_Infrastructuressearch', $this->dataset,
                array('cropID_name_var_lndrce', 'location_ID_google_address', 'infrastructure_power_mains', 'infrastructure_power_genset', 'infrastructure_power_animals', 'infrastructure_power_auto', 'infrastructure_home_use_crop', 'infrastructure_locmarket_crop', 'infrastructure_loctrade_crop', 'infrastructure_processor_crop', 'infrastructure_nonlocaltrader_crop', 'infrastructure_wholesaler_crop', 'infrastructure_supermarkets_crop', 'kbs_infrastruct_others'),
                array($this->RenderText('CropID'), $this->RenderText('Location ID'), $this->RenderText('Infrastructure Power Mains'), $this->RenderText('Infrastructure Power Genset'), $this->RenderText('Infrastructure Power Animals'), $this->RenderText('Infrastructure Power Auto'), $this->RenderText('Infrastructure Home Use Crop'), $this->RenderText('Infrastructure Locmarket Crop'), $this->RenderText('Infrastructure Loctrade Crop'), $this->RenderText('Infrastructure Processor Crop'), $this->RenderText('Infrastructure Nonlocaltrader Crop'), $this->RenderText('Infrastructure Wholesaler Crop'), $this->RenderText('Infrastructure Supermarkets Crop'), $this->RenderText('Kbs Infrastruct Others')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_SocioEconomy_Infrastructureasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
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
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateLookupSearchInput('location_ID', $this->RenderText('Location ID'), $lookupDataset, 'id', 'google_address', false, 8));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_power_mains', $this->RenderText('Infrastructure Power Mains')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_power_genset', $this->RenderText('Infrastructure Power Genset')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_power_animals', $this->RenderText('Infrastructure Power Animals')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_power_auto', $this->RenderText('Infrastructure Power Auto')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_home_use_crop', $this->RenderText('Infrastructure Home Use Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_locmarket_crop', $this->RenderText('Infrastructure Locmarket Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_loctrade_crop', $this->RenderText('Infrastructure Loctrade Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_processor_crop', $this->RenderText('Infrastructure Processor Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_nonlocaltrader_crop', $this->RenderText('Infrastructure Nonlocaltrader Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_wholesaler_crop', $this->RenderText('Infrastructure Wholesaler Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('infrastructure_supermarkets_crop', $this->RenderText('Infrastructure Supermarkets Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('kbs_infrastruct_others', $this->RenderText('Kbs Infrastruct Others')));
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_ID_google_address', 'Location ID', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_power_mains field
            //
            $column = new TextViewColumn('infrastructure_power_mains', 'Infrastructure Power Mains', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_power_genset field
            //
            $column = new TextViewColumn('infrastructure_power_genset', 'Infrastructure Power Genset', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_power_animals field
            //
            $column = new TextViewColumn('infrastructure_power_animals', 'Infrastructure Power Animals', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_power_auto field
            //
            $column = new TextViewColumn('infrastructure_power_auto', 'Infrastructure Power Auto', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_home_use_crop field
            //
            $column = new TextViewColumn('infrastructure_home_use_crop', 'Infrastructure Home Use Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_locmarket_crop field
            //
            $column = new TextViewColumn('infrastructure_locmarket_crop', 'Infrastructure Locmarket Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_loctrade_crop field
            //
            $column = new TextViewColumn('infrastructure_loctrade_crop', 'Infrastructure Loctrade Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_processor_crop field
            //
            $column = new TextViewColumn('infrastructure_processor_crop', 'Infrastructure Processor Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_nonlocaltrader_crop field
            //
            $column = new TextViewColumn('infrastructure_nonlocaltrader_crop', 'Infrastructure Nonlocaltrader Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_wholesaler_crop field
            //
            $column = new TextViewColumn('infrastructure_wholesaler_crop', 'Infrastructure Wholesaler Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for infrastructure_supermarkets_crop field
            //
            $column = new TextViewColumn('infrastructure_supermarkets_crop', 'Infrastructure Supermarkets Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for kbs_infrastruct_others field
            //
            $column = new TextViewColumn('kbs_infrastruct_others', 'Kbs Infrastruct Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_SocioEconomy_InfrastructureGrid_kbs_infrastruct_others_handler_list');
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_ID_google_address', 'Location ID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_power_mains field
            //
            $column = new TextViewColumn('infrastructure_power_mains', 'Infrastructure Power Mains', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_power_genset field
            //
            $column = new TextViewColumn('infrastructure_power_genset', 'Infrastructure Power Genset', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_power_animals field
            //
            $column = new TextViewColumn('infrastructure_power_animals', 'Infrastructure Power Animals', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_power_auto field
            //
            $column = new TextViewColumn('infrastructure_power_auto', 'Infrastructure Power Auto', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_home_use_crop field
            //
            $column = new TextViewColumn('infrastructure_home_use_crop', 'Infrastructure Home Use Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_locmarket_crop field
            //
            $column = new TextViewColumn('infrastructure_locmarket_crop', 'Infrastructure Locmarket Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_loctrade_crop field
            //
            $column = new TextViewColumn('infrastructure_loctrade_crop', 'Infrastructure Loctrade Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_processor_crop field
            //
            $column = new TextViewColumn('infrastructure_processor_crop', 'Infrastructure Processor Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_nonlocaltrader_crop field
            //
            $column = new TextViewColumn('infrastructure_nonlocaltrader_crop', 'Infrastructure Nonlocaltrader Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_wholesaler_crop field
            //
            $column = new TextViewColumn('infrastructure_wholesaler_crop', 'Infrastructure Wholesaler Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for infrastructure_supermarkets_crop field
            //
            $column = new TextViewColumn('infrastructure_supermarkets_crop', 'Infrastructure Supermarkets Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for kbs_infrastruct_others field
            //
            $column = new TextViewColumn('kbs_infrastruct_others', 'Kbs Infrastruct Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_SocioEconomy_InfrastructureGrid_kbs_infrastruct_others_handler_view');
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
            // Edit column for location_ID field
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
                'Location ID', 
                'location_ID', 
                $editor, 
                $this->dataset, 'id', 'google_address', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_mains field
            //
            $editor = new TextEdit('infrastructure_power_mains_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Mains', 'infrastructure_power_mains', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_genset field
            //
            $editor = new TextEdit('infrastructure_power_genset_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Genset', 'infrastructure_power_genset', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_animals field
            //
            $editor = new TextEdit('infrastructure_power_animals_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Animals', 'infrastructure_power_animals', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_auto field
            //
            $editor = new TextEdit('infrastructure_power_auto_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Auto', 'infrastructure_power_auto', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_home_use_crop field
            //
            $editor = new TextEdit('infrastructure_home_use_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Home Use Crop', 'infrastructure_home_use_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_locmarket_crop field
            //
            $editor = new TextEdit('infrastructure_locmarket_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Locmarket Crop', 'infrastructure_locmarket_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_loctrade_crop field
            //
            $editor = new TextEdit('infrastructure_loctrade_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Loctrade Crop', 'infrastructure_loctrade_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_processor_crop field
            //
            $editor = new TextEdit('infrastructure_processor_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Processor Crop', 'infrastructure_processor_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_nonlocaltrader_crop field
            //
            $editor = new TextEdit('infrastructure_nonlocaltrader_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Nonlocaltrader Crop', 'infrastructure_nonlocaltrader_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_wholesaler_crop field
            //
            $editor = new TextEdit('infrastructure_wholesaler_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Wholesaler Crop', 'infrastructure_wholesaler_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for infrastructure_supermarkets_crop field
            //
            $editor = new TextEdit('infrastructure_supermarkets_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Supermarkets Crop', 'infrastructure_supermarkets_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for kbs_infrastruct_others field
            //
            $editor = new TextAreaEdit('kbs_infrastruct_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Infrastruct Others', 'kbs_infrastruct_others', $editor, $this->dataset);
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
            // Edit column for location_ID field
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
                'Location ID', 
                'location_ID', 
                $editor, 
                $this->dataset, 'id', 'google_address', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_mains field
            //
            $editor = new TextEdit('infrastructure_power_mains_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Mains', 'infrastructure_power_mains', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_genset field
            //
            $editor = new TextEdit('infrastructure_power_genset_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Genset', 'infrastructure_power_genset', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_animals field
            //
            $editor = new TextEdit('infrastructure_power_animals_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Animals', 'infrastructure_power_animals', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_power_auto field
            //
            $editor = new TextEdit('infrastructure_power_auto_edit');
            $editColumn = new CustomEditColumn('Infrastructure Power Auto', 'infrastructure_power_auto', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_home_use_crop field
            //
            $editor = new TextEdit('infrastructure_home_use_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Home Use Crop', 'infrastructure_home_use_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_locmarket_crop field
            //
            $editor = new TextEdit('infrastructure_locmarket_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Locmarket Crop', 'infrastructure_locmarket_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_loctrade_crop field
            //
            $editor = new TextEdit('infrastructure_loctrade_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Loctrade Crop', 'infrastructure_loctrade_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_processor_crop field
            //
            $editor = new TextEdit('infrastructure_processor_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Processor Crop', 'infrastructure_processor_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_nonlocaltrader_crop field
            //
            $editor = new TextEdit('infrastructure_nonlocaltrader_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Nonlocaltrader Crop', 'infrastructure_nonlocaltrader_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_wholesaler_crop field
            //
            $editor = new TextEdit('infrastructure_wholesaler_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Wholesaler Crop', 'infrastructure_wholesaler_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for infrastructure_supermarkets_crop field
            //
            $editor = new TextEdit('infrastructure_supermarkets_crop_edit');
            $editColumn = new CustomEditColumn('Infrastructure Supermarkets Crop', 'infrastructure_supermarkets_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for kbs_infrastruct_others field
            //
            $editor = new TextAreaEdit('kbs_infrastruct_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Infrastruct Others', 'kbs_infrastruct_others', $editor, $this->dataset);
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_ID_google_address', 'Location ID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_power_mains field
            //
            $column = new TextViewColumn('infrastructure_power_mains', 'Infrastructure Power Mains', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_power_genset field
            //
            $column = new TextViewColumn('infrastructure_power_genset', 'Infrastructure Power Genset', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_power_animals field
            //
            $column = new TextViewColumn('infrastructure_power_animals', 'Infrastructure Power Animals', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_power_auto field
            //
            $column = new TextViewColumn('infrastructure_power_auto', 'Infrastructure Power Auto', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_home_use_crop field
            //
            $column = new TextViewColumn('infrastructure_home_use_crop', 'Infrastructure Home Use Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_locmarket_crop field
            //
            $column = new TextViewColumn('infrastructure_locmarket_crop', 'Infrastructure Locmarket Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_loctrade_crop field
            //
            $column = new TextViewColumn('infrastructure_loctrade_crop', 'Infrastructure Loctrade Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_processor_crop field
            //
            $column = new TextViewColumn('infrastructure_processor_crop', 'Infrastructure Processor Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_nonlocaltrader_crop field
            //
            $column = new TextViewColumn('infrastructure_nonlocaltrader_crop', 'Infrastructure Nonlocaltrader Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_wholesaler_crop field
            //
            $column = new TextViewColumn('infrastructure_wholesaler_crop', 'Infrastructure Wholesaler Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for infrastructure_supermarkets_crop field
            //
            $column = new TextViewColumn('infrastructure_supermarkets_crop', 'Infrastructure Supermarkets Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for kbs_infrastruct_others field
            //
            $column = new TextViewColumn('kbs_infrastruct_others', 'Kbs Infrastruct Others', $this->dataset);
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_ID_google_address', 'Location ID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_power_mains field
            //
            $column = new TextViewColumn('infrastructure_power_mains', 'Infrastructure Power Mains', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_power_genset field
            //
            $column = new TextViewColumn('infrastructure_power_genset', 'Infrastructure Power Genset', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_power_animals field
            //
            $column = new TextViewColumn('infrastructure_power_animals', 'Infrastructure Power Animals', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_power_auto field
            //
            $column = new TextViewColumn('infrastructure_power_auto', 'Infrastructure Power Auto', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_home_use_crop field
            //
            $column = new TextViewColumn('infrastructure_home_use_crop', 'Infrastructure Home Use Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_locmarket_crop field
            //
            $column = new TextViewColumn('infrastructure_locmarket_crop', 'Infrastructure Locmarket Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_loctrade_crop field
            //
            $column = new TextViewColumn('infrastructure_loctrade_crop', 'Infrastructure Loctrade Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_processor_crop field
            //
            $column = new TextViewColumn('infrastructure_processor_crop', 'Infrastructure Processor Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_nonlocaltrader_crop field
            //
            $column = new TextViewColumn('infrastructure_nonlocaltrader_crop', 'Infrastructure Nonlocaltrader Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_wholesaler_crop field
            //
            $column = new TextViewColumn('infrastructure_wholesaler_crop', 'Infrastructure Wholesaler Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for infrastructure_supermarkets_crop field
            //
            $column = new TextViewColumn('infrastructure_supermarkets_crop', 'Infrastructure Supermarkets Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for kbs_infrastruct_others field
            //
            $column = new TextViewColumn('kbs_infrastruct_others', 'Kbs Infrastruct Others', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_SocioEconomy_Infrastructure_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_SocioEconomy_InfrastructureGrid');
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
            // View column for kbs_infrastruct_others field
            //
            $column = new TextViewColumn('kbs_infrastruct_others', 'Kbs Infrastruct Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_SocioEconomy_InfrastructureGrid_kbs_infrastruct_others_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for kbs_infrastruct_others field
            //
            $column = new TextViewColumn('kbs_infrastruct_others', 'Kbs Infrastruct Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_SocioEconomy_InfrastructureGrid_kbs_infrastruct_others_handler_view', $column);
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
        $Page = new KBS_SocioEconomy_InfrastructurePage("KBS_SocioEconomy_Infrastructure.php", "KBS_SocioEconomy_Infrastructure", GetCurrentUserGrantForDataSource("KBS_SocioEconomy_Infrastructure"), 'UTF-8');
        $Page->SetShortCaption('KBS SocioEconomy Infrastructure');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS SocioEconomy Infrastructure');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_SocioEconomy_Infrastructure"));
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
	

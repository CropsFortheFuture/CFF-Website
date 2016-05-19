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


    function GetConnectionOptions()
    {
        $result = GetGlobalConnectionOptions();
        $result['client_encoding'] = 'utf8';
        GetApplication()->GetUserAuthorizationStrategy()->ApplyIdentityToConnectionOptions($result);
        return $result;
    }

    
    // OnGlobalBeforePageExecute event handler
    
    
    // OnBeforePageExecute event handler
    
    
    
    class KBS_Agro_Resist_TolerancePage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Agro_Resist_Tolerance`');
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('toler_disease');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_disease_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_drought');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_drought_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_extreme_alkal');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_extreme_alkal_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_extreme_acid');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_extreme_acid_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_heat');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_heat_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_frost');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_frost_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_infertile_soil');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_infertile_soil_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_pest');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_pest_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_salinity');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_salinity_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_shade');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_shade_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_waterlogging');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_waterlogging_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('toler_weed');
            $this->dataset->AddField($field, false);
            $field = new StringField('toler_weed_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('flood_tolerant');
            $this->dataset->AddField($field, false);
            $field = new StringField('tol_fld_limit_type');
            $this->dataset->AddField($field, false);
            $field = new StringField('kbs_resisttoler_others');
            $this->dataset->AddField($field, false);
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
            $grid->SearchControl = new SimpleSearch('KBS_Agro_Resist_Tolerancessearch', $this->dataset,
                array('cropID', 'toler_disease', 'toler_disease_type', 'toler_drought', 'toler_drought_type', 'toler_extreme_alkal', 'toler_extreme_alkal_type', 'toler_extreme_acid', 'toler_extreme_acid_type', 'toler_heat', 'toler_heat_type', 'toler_frost', 'toler_frost_type', 'toler_infertile_soil', 'toler_infertile_soil_type', 'toler_pest', 'toler_pest_type', 'toler_salinity', 'toler_salinity_type', 'toler_shade', 'toler_shade_type', 'toler_waterlogging', 'toler_waterlogging_type', 'toler_weed', 'toler_weed_type', 'flood_tolerant', 'tol_fld_limit_type', 'kbs_resisttoler_others'),
                array($this->RenderText('CropID'), $this->RenderText('Toler Disease'), $this->RenderText('Toler Disease Type'), $this->RenderText('Toler Drought'), $this->RenderText('Toler Drought Type'), $this->RenderText('Toler Extreme Alkal'), $this->RenderText('Toler Extreme Alkal Type'), $this->RenderText('Toler Extreme Acid'), $this->RenderText('Toler Extreme Acid Type'), $this->RenderText('Toler Heat'), $this->RenderText('Toler Heat Type'), $this->RenderText('Toler Frost'), $this->RenderText('Toler Frost Type'), $this->RenderText('Toler Infertile Soil'), $this->RenderText('Toler Infertile Soil Type'), $this->RenderText('Toler Pest'), $this->RenderText('Toler Pest Type'), $this->RenderText('Toler Salinity'), $this->RenderText('Toler Salinity Type'), $this->RenderText('Toler Shade'), $this->RenderText('Toler Shade Type'), $this->RenderText('Toler Waterlogging'), $this->RenderText('Toler Waterlogging Type'), $this->RenderText('Toler Weed'), $this->RenderText('Toler Weed Type'), $this->RenderText('Flood Tolerant'), $this->RenderText('Tol Fld Limit Type'), $this->RenderText('Kbs Resisttoler Others')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Agro_Resist_Toleranceasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cropID', $this->RenderText('CropID')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_disease', $this->RenderText('Toler Disease')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_disease_type', $this->RenderText('Toler Disease Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_drought', $this->RenderText('Toler Drought')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_drought_type', $this->RenderText('Toler Drought Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_extreme_alkal', $this->RenderText('Toler Extreme Alkal')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_extreme_alkal_type', $this->RenderText('Toler Extreme Alkal Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_extreme_acid', $this->RenderText('Toler Extreme Acid')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_extreme_acid_type', $this->RenderText('Toler Extreme Acid Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_heat', $this->RenderText('Toler Heat')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_heat_type', $this->RenderText('Toler Heat Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_frost', $this->RenderText('Toler Frost')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_frost_type', $this->RenderText('Toler Frost Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_infertile_soil', $this->RenderText('Toler Infertile Soil')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_infertile_soil_type', $this->RenderText('Toler Infertile Soil Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_pest', $this->RenderText('Toler Pest')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_pest_type', $this->RenderText('Toler Pest Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_salinity', $this->RenderText('Toler Salinity')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_salinity_type', $this->RenderText('Toler Salinity Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_shade', $this->RenderText('Toler Shade')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_shade_type', $this->RenderText('Toler Shade Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_waterlogging', $this->RenderText('Toler Waterlogging')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_waterlogging_type', $this->RenderText('Toler Waterlogging Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_weed', $this->RenderText('Toler Weed')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('toler_weed_type', $this->RenderText('Toler Weed Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('flood_tolerant', $this->RenderText('Flood Tolerant')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('tol_fld_limit_type', $this->RenderText('Tol Fld Limit Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('kbs_resisttoler_others', $this->RenderText('Kbs Resisttoler Others')));
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
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_disease field
            //
            $column = new TextViewColumn('toler_disease', 'Toler Disease', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_disease_type field
            //
            $column = new TextViewColumn('toler_disease_type', 'Toler Disease Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_disease_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_drought field
            //
            $column = new TextViewColumn('toler_drought', 'Toler Drought', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_drought_type field
            //
            $column = new TextViewColumn('toler_drought_type', 'Toler Drought Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_drought_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_extreme_alkal field
            //
            $column = new TextViewColumn('toler_extreme_alkal', 'Toler Extreme Alkal', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_extreme_alkal_type field
            //
            $column = new TextViewColumn('toler_extreme_alkal_type', 'Toler Extreme Alkal Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_extreme_alkal_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_extreme_acid field
            //
            $column = new TextViewColumn('toler_extreme_acid', 'Toler Extreme Acid', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_extreme_acid_type field
            //
            $column = new TextViewColumn('toler_extreme_acid_type', 'Toler Extreme Acid Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_extreme_acid_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_heat field
            //
            $column = new TextViewColumn('toler_heat', 'Toler Heat', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_heat_type field
            //
            $column = new TextViewColumn('toler_heat_type', 'Toler Heat Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_heat_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_frost field
            //
            $column = new TextViewColumn('toler_frost', 'Toler Frost', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_frost_type field
            //
            $column = new TextViewColumn('toler_frost_type', 'Toler Frost Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_frost_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_infertile_soil field
            //
            $column = new TextViewColumn('toler_infertile_soil', 'Toler Infertile Soil', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_infertile_soil_type field
            //
            $column = new TextViewColumn('toler_infertile_soil_type', 'Toler Infertile Soil Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_infertile_soil_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_pest field
            //
            $column = new TextViewColumn('toler_pest', 'Toler Pest', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_pest_type field
            //
            $column = new TextViewColumn('toler_pest_type', 'Toler Pest Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_pest_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_salinity field
            //
            $column = new TextViewColumn('toler_salinity', 'Toler Salinity', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_salinity_type field
            //
            $column = new TextViewColumn('toler_salinity_type', 'Toler Salinity Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_salinity_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_shade field
            //
            $column = new TextViewColumn('toler_shade', 'Toler Shade', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_shade_type field
            //
            $column = new TextViewColumn('toler_shade_type', 'Toler Shade Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_shade_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_waterlogging field
            //
            $column = new TextViewColumn('toler_waterlogging', 'Toler Waterlogging', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_waterlogging_type field
            //
            $column = new TextViewColumn('toler_waterlogging_type', 'Toler Waterlogging Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_waterlogging_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_weed field
            //
            $column = new TextViewColumn('toler_weed', 'Toler Weed', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for toler_weed_type field
            //
            $column = new TextViewColumn('toler_weed_type', 'Toler Weed Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_weed_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for flood_tolerant field
            //
            $column = new TextViewColumn('flood_tolerant', 'Flood Tolerant', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for tol_fld_limit_type field
            //
            $column = new TextViewColumn('tol_fld_limit_type', 'Tol Fld Limit Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_tol_fld_limit_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for kbs_resisttoler_others field
            //
            $column = new TextViewColumn('kbs_resisttoler_others', 'Kbs Resisttoler Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_kbs_resisttoler_others_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_disease field
            //
            $column = new TextViewColumn('toler_disease', 'Toler Disease', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_disease_type field
            //
            $column = new TextViewColumn('toler_disease_type', 'Toler Disease Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_disease_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_drought field
            //
            $column = new TextViewColumn('toler_drought', 'Toler Drought', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_drought_type field
            //
            $column = new TextViewColumn('toler_drought_type', 'Toler Drought Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_drought_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_extreme_alkal field
            //
            $column = new TextViewColumn('toler_extreme_alkal', 'Toler Extreme Alkal', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_extreme_alkal_type field
            //
            $column = new TextViewColumn('toler_extreme_alkal_type', 'Toler Extreme Alkal Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_extreme_alkal_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_extreme_acid field
            //
            $column = new TextViewColumn('toler_extreme_acid', 'Toler Extreme Acid', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_extreme_acid_type field
            //
            $column = new TextViewColumn('toler_extreme_acid_type', 'Toler Extreme Acid Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_extreme_acid_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_heat field
            //
            $column = new TextViewColumn('toler_heat', 'Toler Heat', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_heat_type field
            //
            $column = new TextViewColumn('toler_heat_type', 'Toler Heat Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_heat_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_frost field
            //
            $column = new TextViewColumn('toler_frost', 'Toler Frost', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_frost_type field
            //
            $column = new TextViewColumn('toler_frost_type', 'Toler Frost Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_frost_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_infertile_soil field
            //
            $column = new TextViewColumn('toler_infertile_soil', 'Toler Infertile Soil', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_infertile_soil_type field
            //
            $column = new TextViewColumn('toler_infertile_soil_type', 'Toler Infertile Soil Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_infertile_soil_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_pest field
            //
            $column = new TextViewColumn('toler_pest', 'Toler Pest', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_pest_type field
            //
            $column = new TextViewColumn('toler_pest_type', 'Toler Pest Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_pest_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_salinity field
            //
            $column = new TextViewColumn('toler_salinity', 'Toler Salinity', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_salinity_type field
            //
            $column = new TextViewColumn('toler_salinity_type', 'Toler Salinity Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_salinity_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_shade field
            //
            $column = new TextViewColumn('toler_shade', 'Toler Shade', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_shade_type field
            //
            $column = new TextViewColumn('toler_shade_type', 'Toler Shade Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_shade_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_waterlogging field
            //
            $column = new TextViewColumn('toler_waterlogging', 'Toler Waterlogging', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_waterlogging_type field
            //
            $column = new TextViewColumn('toler_waterlogging_type', 'Toler Waterlogging Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_waterlogging_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_weed field
            //
            $column = new TextViewColumn('toler_weed', 'Toler Weed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for toler_weed_type field
            //
            $column = new TextViewColumn('toler_weed_type', 'Toler Weed Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_toler_weed_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for flood_tolerant field
            //
            $column = new TextViewColumn('flood_tolerant', 'Flood Tolerant', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for tol_fld_limit_type field
            //
            $column = new TextViewColumn('tol_fld_limit_type', 'Tol Fld Limit Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_tol_fld_limit_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for kbs_resisttoler_others field
            //
            $column = new TextViewColumn('kbs_resisttoler_others', 'Kbs Resisttoler Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_Resist_ToleranceGrid_kbs_resisttoler_others_handler_view');
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for cropID field
            //
            $editor = new TextEdit('cropid_edit');
            $editColumn = new CustomEditColumn('CropID', 'cropID', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_disease field
            //
            $editor = new TextEdit('toler_disease_edit');
            $editColumn = new CustomEditColumn('Toler Disease', 'toler_disease', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_disease_type field
            //
            $editor = new TextEdit('toler_disease_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Disease Type', 'toler_disease_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_drought field
            //
            $editor = new TextEdit('toler_drought_edit');
            $editColumn = new CustomEditColumn('Toler Drought', 'toler_drought', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_drought_type field
            //
            $editor = new TextEdit('toler_drought_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Drought Type', 'toler_drought_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_extreme_alkal field
            //
            $editor = new TextEdit('toler_extreme_alkal_edit');
            $editColumn = new CustomEditColumn('Toler Extreme Alkal', 'toler_extreme_alkal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_extreme_alkal_type field
            //
            $editor = new TextEdit('toler_extreme_alkal_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Extreme Alkal Type', 'toler_extreme_alkal_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_extreme_acid field
            //
            $editor = new TextEdit('toler_extreme_acid_edit');
            $editColumn = new CustomEditColumn('Toler Extreme Acid', 'toler_extreme_acid', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_extreme_acid_type field
            //
            $editor = new TextEdit('toler_extreme_acid_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Extreme Acid Type', 'toler_extreme_acid_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_heat field
            //
            $editor = new TextEdit('toler_heat_edit');
            $editColumn = new CustomEditColumn('Toler Heat', 'toler_heat', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_heat_type field
            //
            $editor = new TextEdit('toler_heat_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Heat Type', 'toler_heat_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_frost field
            //
            $editor = new TextEdit('toler_frost_edit');
            $editColumn = new CustomEditColumn('Toler Frost', 'toler_frost', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_frost_type field
            //
            $editor = new TextEdit('toler_frost_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Frost Type', 'toler_frost_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_infertile_soil field
            //
            $editor = new TextEdit('toler_infertile_soil_edit');
            $editColumn = new CustomEditColumn('Toler Infertile Soil', 'toler_infertile_soil', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_infertile_soil_type field
            //
            $editor = new TextEdit('toler_infertile_soil_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Infertile Soil Type', 'toler_infertile_soil_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_pest field
            //
            $editor = new TextEdit('toler_pest_edit');
            $editColumn = new CustomEditColumn('Toler Pest', 'toler_pest', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_pest_type field
            //
            $editor = new TextEdit('toler_pest_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Pest Type', 'toler_pest_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_salinity field
            //
            $editor = new TextEdit('toler_salinity_edit');
            $editColumn = new CustomEditColumn('Toler Salinity', 'toler_salinity', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_salinity_type field
            //
            $editor = new TextEdit('toler_salinity_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Salinity Type', 'toler_salinity_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_shade field
            //
            $editor = new TextEdit('toler_shade_edit');
            $editColumn = new CustomEditColumn('Toler Shade', 'toler_shade', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_shade_type field
            //
            $editor = new TextEdit('toler_shade_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Shade Type', 'toler_shade_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_waterlogging field
            //
            $editor = new TextEdit('toler_waterlogging_edit');
            $editColumn = new CustomEditColumn('Toler Waterlogging', 'toler_waterlogging', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_waterlogging_type field
            //
            $editor = new TextEdit('toler_waterlogging_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Waterlogging Type', 'toler_waterlogging_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_weed field
            //
            $editor = new TextEdit('toler_weed_edit');
            $editColumn = new CustomEditColumn('Toler Weed', 'toler_weed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for toler_weed_type field
            //
            $editor = new TextEdit('toler_weed_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Weed Type', 'toler_weed_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for flood_tolerant field
            //
            $editor = new TextEdit('flood_tolerant_edit');
            $editColumn = new CustomEditColumn('Flood Tolerant', 'flood_tolerant', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for tol_fld_limit_type field
            //
            $editor = new TextEdit('tol_fld_limit_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Tol Fld Limit Type', 'tol_fld_limit_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for kbs_resisttoler_others field
            //
            $editor = new TextAreaEdit('kbs_resisttoler_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Resisttoler Others', 'kbs_resisttoler_others', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for cropID field
            //
            $editor = new TextEdit('cropid_edit');
            $editColumn = new CustomEditColumn('CropID', 'cropID', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_disease field
            //
            $editor = new TextEdit('toler_disease_edit');
            $editColumn = new CustomEditColumn('Toler Disease', 'toler_disease', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_disease_type field
            //
            $editor = new TextEdit('toler_disease_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Disease Type', 'toler_disease_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_drought field
            //
            $editor = new TextEdit('toler_drought_edit');
            $editColumn = new CustomEditColumn('Toler Drought', 'toler_drought', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_drought_type field
            //
            $editor = new TextEdit('toler_drought_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Drought Type', 'toler_drought_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_extreme_alkal field
            //
            $editor = new TextEdit('toler_extreme_alkal_edit');
            $editColumn = new CustomEditColumn('Toler Extreme Alkal', 'toler_extreme_alkal', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_extreme_alkal_type field
            //
            $editor = new TextEdit('toler_extreme_alkal_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Extreme Alkal Type', 'toler_extreme_alkal_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_extreme_acid field
            //
            $editor = new TextEdit('toler_extreme_acid_edit');
            $editColumn = new CustomEditColumn('Toler Extreme Acid', 'toler_extreme_acid', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_extreme_acid_type field
            //
            $editor = new TextEdit('toler_extreme_acid_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Extreme Acid Type', 'toler_extreme_acid_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_heat field
            //
            $editor = new TextEdit('toler_heat_edit');
            $editColumn = new CustomEditColumn('Toler Heat', 'toler_heat', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_heat_type field
            //
            $editor = new TextEdit('toler_heat_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Heat Type', 'toler_heat_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_frost field
            //
            $editor = new TextEdit('toler_frost_edit');
            $editColumn = new CustomEditColumn('Toler Frost', 'toler_frost', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_frost_type field
            //
            $editor = new TextEdit('toler_frost_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Frost Type', 'toler_frost_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_infertile_soil field
            //
            $editor = new TextEdit('toler_infertile_soil_edit');
            $editColumn = new CustomEditColumn('Toler Infertile Soil', 'toler_infertile_soil', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_infertile_soil_type field
            //
            $editor = new TextEdit('toler_infertile_soil_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Infertile Soil Type', 'toler_infertile_soil_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_pest field
            //
            $editor = new TextEdit('toler_pest_edit');
            $editColumn = new CustomEditColumn('Toler Pest', 'toler_pest', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_pest_type field
            //
            $editor = new TextEdit('toler_pest_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Pest Type', 'toler_pest_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_salinity field
            //
            $editor = new TextEdit('toler_salinity_edit');
            $editColumn = new CustomEditColumn('Toler Salinity', 'toler_salinity', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_salinity_type field
            //
            $editor = new TextEdit('toler_salinity_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Salinity Type', 'toler_salinity_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_shade field
            //
            $editor = new TextEdit('toler_shade_edit');
            $editColumn = new CustomEditColumn('Toler Shade', 'toler_shade', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_shade_type field
            //
            $editor = new TextEdit('toler_shade_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Shade Type', 'toler_shade_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_waterlogging field
            //
            $editor = new TextEdit('toler_waterlogging_edit');
            $editColumn = new CustomEditColumn('Toler Waterlogging', 'toler_waterlogging', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_waterlogging_type field
            //
            $editor = new TextEdit('toler_waterlogging_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Waterlogging Type', 'toler_waterlogging_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_weed field
            //
            $editor = new TextEdit('toler_weed_edit');
            $editColumn = new CustomEditColumn('Toler Weed', 'toler_weed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for toler_weed_type field
            //
            $editor = new TextEdit('toler_weed_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Toler Weed Type', 'toler_weed_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for flood_tolerant field
            //
            $editor = new TextEdit('flood_tolerant_edit');
            $editColumn = new CustomEditColumn('Flood Tolerant', 'flood_tolerant', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for tol_fld_limit_type field
            //
            $editor = new TextEdit('tol_fld_limit_type_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Tol Fld Limit Type', 'tol_fld_limit_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for kbs_resisttoler_others field
            //
            $editor = new TextAreaEdit('kbs_resisttoler_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Resisttoler Others', 'kbs_resisttoler_others', $editor, $this->dataset);
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
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_disease field
            //
            $column = new TextViewColumn('toler_disease', 'Toler Disease', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_disease_type field
            //
            $column = new TextViewColumn('toler_disease_type', 'Toler Disease Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_drought field
            //
            $column = new TextViewColumn('toler_drought', 'Toler Drought', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_drought_type field
            //
            $column = new TextViewColumn('toler_drought_type', 'Toler Drought Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_extreme_alkal field
            //
            $column = new TextViewColumn('toler_extreme_alkal', 'Toler Extreme Alkal', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_extreme_alkal_type field
            //
            $column = new TextViewColumn('toler_extreme_alkal_type', 'Toler Extreme Alkal Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_extreme_acid field
            //
            $column = new TextViewColumn('toler_extreme_acid', 'Toler Extreme Acid', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_extreme_acid_type field
            //
            $column = new TextViewColumn('toler_extreme_acid_type', 'Toler Extreme Acid Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_heat field
            //
            $column = new TextViewColumn('toler_heat', 'Toler Heat', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_heat_type field
            //
            $column = new TextViewColumn('toler_heat_type', 'Toler Heat Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_frost field
            //
            $column = new TextViewColumn('toler_frost', 'Toler Frost', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_frost_type field
            //
            $column = new TextViewColumn('toler_frost_type', 'Toler Frost Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_infertile_soil field
            //
            $column = new TextViewColumn('toler_infertile_soil', 'Toler Infertile Soil', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_infertile_soil_type field
            //
            $column = new TextViewColumn('toler_infertile_soil_type', 'Toler Infertile Soil Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_pest field
            //
            $column = new TextViewColumn('toler_pest', 'Toler Pest', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_pest_type field
            //
            $column = new TextViewColumn('toler_pest_type', 'Toler Pest Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_salinity field
            //
            $column = new TextViewColumn('toler_salinity', 'Toler Salinity', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_salinity_type field
            //
            $column = new TextViewColumn('toler_salinity_type', 'Toler Salinity Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_shade field
            //
            $column = new TextViewColumn('toler_shade', 'Toler Shade', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_shade_type field
            //
            $column = new TextViewColumn('toler_shade_type', 'Toler Shade Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_waterlogging field
            //
            $column = new TextViewColumn('toler_waterlogging', 'Toler Waterlogging', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_waterlogging_type field
            //
            $column = new TextViewColumn('toler_waterlogging_type', 'Toler Waterlogging Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_weed field
            //
            $column = new TextViewColumn('toler_weed', 'Toler Weed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for toler_weed_type field
            //
            $column = new TextViewColumn('toler_weed_type', 'Toler Weed Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for flood_tolerant field
            //
            $column = new TextViewColumn('flood_tolerant', 'Flood Tolerant', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for tol_fld_limit_type field
            //
            $column = new TextViewColumn('tol_fld_limit_type', 'Tol Fld Limit Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for kbs_resisttoler_others field
            //
            $column = new TextViewColumn('kbs_resisttoler_others', 'Kbs Resisttoler Others', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_disease field
            //
            $column = new TextViewColumn('toler_disease', 'Toler Disease', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_disease_type field
            //
            $column = new TextViewColumn('toler_disease_type', 'Toler Disease Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_drought field
            //
            $column = new TextViewColumn('toler_drought', 'Toler Drought', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_drought_type field
            //
            $column = new TextViewColumn('toler_drought_type', 'Toler Drought Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_extreme_alkal field
            //
            $column = new TextViewColumn('toler_extreme_alkal', 'Toler Extreme Alkal', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_extreme_alkal_type field
            //
            $column = new TextViewColumn('toler_extreme_alkal_type', 'Toler Extreme Alkal Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_extreme_acid field
            //
            $column = new TextViewColumn('toler_extreme_acid', 'Toler Extreme Acid', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_extreme_acid_type field
            //
            $column = new TextViewColumn('toler_extreme_acid_type', 'Toler Extreme Acid Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_heat field
            //
            $column = new TextViewColumn('toler_heat', 'Toler Heat', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_heat_type field
            //
            $column = new TextViewColumn('toler_heat_type', 'Toler Heat Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_frost field
            //
            $column = new TextViewColumn('toler_frost', 'Toler Frost', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_frost_type field
            //
            $column = new TextViewColumn('toler_frost_type', 'Toler Frost Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_infertile_soil field
            //
            $column = new TextViewColumn('toler_infertile_soil', 'Toler Infertile Soil', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_infertile_soil_type field
            //
            $column = new TextViewColumn('toler_infertile_soil_type', 'Toler Infertile Soil Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_pest field
            //
            $column = new TextViewColumn('toler_pest', 'Toler Pest', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_pest_type field
            //
            $column = new TextViewColumn('toler_pest_type', 'Toler Pest Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_salinity field
            //
            $column = new TextViewColumn('toler_salinity', 'Toler Salinity', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_salinity_type field
            //
            $column = new TextViewColumn('toler_salinity_type', 'Toler Salinity Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_shade field
            //
            $column = new TextViewColumn('toler_shade', 'Toler Shade', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_shade_type field
            //
            $column = new TextViewColumn('toler_shade_type', 'Toler Shade Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_waterlogging field
            //
            $column = new TextViewColumn('toler_waterlogging', 'Toler Waterlogging', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_waterlogging_type field
            //
            $column = new TextViewColumn('toler_waterlogging_type', 'Toler Waterlogging Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_weed field
            //
            $column = new TextViewColumn('toler_weed', 'Toler Weed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for toler_weed_type field
            //
            $column = new TextViewColumn('toler_weed_type', 'Toler Weed Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for flood_tolerant field
            //
            $column = new TextViewColumn('flood_tolerant', 'Flood Tolerant', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for tol_fld_limit_type field
            //
            $column = new TextViewColumn('tol_fld_limit_type', 'Tol Fld Limit Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for kbs_resisttoler_others field
            //
            $column = new TextViewColumn('kbs_resisttoler_others', 'Kbs Resisttoler Others', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Agro_Resist_Tolerance_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_Agro_Resist_ToleranceGrid');
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
            $this->SetVisualEffectsEnabled(true);
            $this->SetShowTopPageNavigator(true);
            $this->SetShowBottomPageNavigator(true);
    
            //
            // Http Handlers
            //
            //
            // View column for toler_disease_type field
            //
            $column = new TextViewColumn('toler_disease_type', 'Toler Disease Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_disease_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_drought_type field
            //
            $column = new TextViewColumn('toler_drought_type', 'Toler Drought Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_drought_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_extreme_alkal_type field
            //
            $column = new TextViewColumn('toler_extreme_alkal_type', 'Toler Extreme Alkal Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_extreme_alkal_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_extreme_acid_type field
            //
            $column = new TextViewColumn('toler_extreme_acid_type', 'Toler Extreme Acid Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_extreme_acid_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_heat_type field
            //
            $column = new TextViewColumn('toler_heat_type', 'Toler Heat Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_heat_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_frost_type field
            //
            $column = new TextViewColumn('toler_frost_type', 'Toler Frost Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_frost_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_infertile_soil_type field
            //
            $column = new TextViewColumn('toler_infertile_soil_type', 'Toler Infertile Soil Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_infertile_soil_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_pest_type field
            //
            $column = new TextViewColumn('toler_pest_type', 'Toler Pest Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_pest_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_salinity_type field
            //
            $column = new TextViewColumn('toler_salinity_type', 'Toler Salinity Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_salinity_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_shade_type field
            //
            $column = new TextViewColumn('toler_shade_type', 'Toler Shade Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_shade_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_waterlogging_type field
            //
            $column = new TextViewColumn('toler_waterlogging_type', 'Toler Waterlogging Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_waterlogging_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_weed_type field
            //
            $column = new TextViewColumn('toler_weed_type', 'Toler Weed Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_weed_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for tol_fld_limit_type field
            //
            $column = new TextViewColumn('tol_fld_limit_type', 'Tol Fld Limit Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_tol_fld_limit_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_resisttoler_others field
            //
            $column = new TextViewColumn('kbs_resisttoler_others', 'Kbs Resisttoler Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_kbs_resisttoler_others_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for toler_disease_type field
            //
            $column = new TextViewColumn('toler_disease_type', 'Toler Disease Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_disease_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_drought_type field
            //
            $column = new TextViewColumn('toler_drought_type', 'Toler Drought Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_drought_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_extreme_alkal_type field
            //
            $column = new TextViewColumn('toler_extreme_alkal_type', 'Toler Extreme Alkal Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_extreme_alkal_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_extreme_acid_type field
            //
            $column = new TextViewColumn('toler_extreme_acid_type', 'Toler Extreme Acid Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_extreme_acid_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_heat_type field
            //
            $column = new TextViewColumn('toler_heat_type', 'Toler Heat Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_heat_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_frost_type field
            //
            $column = new TextViewColumn('toler_frost_type', 'Toler Frost Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_frost_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_infertile_soil_type field
            //
            $column = new TextViewColumn('toler_infertile_soil_type', 'Toler Infertile Soil Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_infertile_soil_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_pest_type field
            //
            $column = new TextViewColumn('toler_pest_type', 'Toler Pest Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_pest_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_salinity_type field
            //
            $column = new TextViewColumn('toler_salinity_type', 'Toler Salinity Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_salinity_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_shade_type field
            //
            $column = new TextViewColumn('toler_shade_type', 'Toler Shade Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_shade_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_waterlogging_type field
            //
            $column = new TextViewColumn('toler_waterlogging_type', 'Toler Waterlogging Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_waterlogging_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for toler_weed_type field
            //
            $column = new TextViewColumn('toler_weed_type', 'Toler Weed Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_toler_weed_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for tol_fld_limit_type field
            //
            $column = new TextViewColumn('tol_fld_limit_type', 'Tol Fld Limit Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_tol_fld_limit_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_resisttoler_others field
            //
            $column = new TextViewColumn('kbs_resisttoler_others', 'Kbs Resisttoler Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_Resist_ToleranceGrid_kbs_resisttoler_others_handler_view', $column);
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



    try
    {
        $Page = new KBS_Agro_Resist_TolerancePage("KBS_Agro_Resist_Tolerance.php", "KBS_Agro_Resist_Tolerance", GetCurrentUserGrantForDataSource("KBS_Agro_Resist_Tolerance"), 'UTF-8');
        $Page->SetShortCaption('KBS Agro Resist Tolerance');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Agro Resist Tolerance');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Agro_Resist_Tolerance"));
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
	

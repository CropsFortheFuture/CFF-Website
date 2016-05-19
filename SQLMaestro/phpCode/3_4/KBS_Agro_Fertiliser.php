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
    
    
    
    class KBS_Agro_FertiliserPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Agro_Fertiliser`');
            $field = new IntegerField('id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('location_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('in_organ_fertiliser_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('in_organ_fertiliser_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('in_organ_fertiliser_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('in_organ_fertiliser_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('nitro_fertiliser_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('nitro_fertiliser_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('nitro_fertiliser_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('organ_Fertiliser_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('organ_Fertiliser_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('organ_Fertiliser_min');
            $this->dataset->AddField($field, false);
            $field = new StringField('organ_Fertiliser_type');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('phosp_fertiliser_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('phosp_fertiliser_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('phosp_fertiliser_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('potas_fertiliser_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('potas_fertiliser_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('potas_fertiliser_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('liming_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('liming_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('liming_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('bio_input_bacteria');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('bio_input_fungus');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('bio_input_other');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('biochar');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('nitro_fix_crop');
            $this->dataset->AddField($field, false);
            $field = new StringField('kbs_fert_others');
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
            $grid->SearchControl = new SimpleSearch('KBS_Agro_Fertiliserssearch', $this->dataset,
                array('id', 'cropID', 'location_id', 'in_organ_fertiliser_type', 'in_organ_fertiliser_max', 'in_organ_fertiliser_mean', 'in_organ_fertiliser_min', 'nitro_fertiliser_max', 'nitro_fertiliser_mean', 'nitro_fertiliser_min', 'organ_Fertiliser_max', 'organ_Fertiliser_mean', 'organ_Fertiliser_min', 'organ_Fertiliser_type', 'phosp_fertiliser_max', 'phosp_fertiliser_mean', 'phosp_fertiliser_min', 'potas_fertiliser_max', 'potas_fertiliser_mean', 'potas_fertiliser_min', 'liming_max', 'liming_mean', 'liming_min', 'bio_input_bacteria', 'bio_input_fungus', 'bio_input_other', 'biochar', 'nitro_fix_crop', 'kbs_fert_others'),
                array($this->RenderText('Id'), $this->RenderText('CropID'), $this->RenderText('Location Id'), $this->RenderText('In Organ Fertiliser Type'), $this->RenderText('In Organ Fertiliser Max'), $this->RenderText('In Organ Fertiliser Mean'), $this->RenderText('In Organ Fertiliser Min'), $this->RenderText('Nitro Fertiliser Max'), $this->RenderText('Nitro Fertiliser Mean'), $this->RenderText('Nitro Fertiliser Min'), $this->RenderText('Organ Fertiliser Max'), $this->RenderText('Organ Fertiliser Mean'), $this->RenderText('Organ Fertiliser Min'), $this->RenderText('Organ Fertiliser Type'), $this->RenderText('Phosp Fertiliser Max'), $this->RenderText('Phosp Fertiliser Mean'), $this->RenderText('Phosp Fertiliser Min'), $this->RenderText('Potas Fertiliser Max'), $this->RenderText('Potas Fertiliser Mean'), $this->RenderText('Potas Fertiliser Min'), $this->RenderText('Liming Max'), $this->RenderText('Liming Mean'), $this->RenderText('Liming Min'), $this->RenderText('Bio Input Bacteria'), $this->RenderText('Bio Input Fungus'), $this->RenderText('Bio Input Other'), $this->RenderText('Biochar'), $this->RenderText('Nitro Fix Crop'), $this->RenderText('Kbs Fert Others')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Agro_Fertiliserasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('id', $this->RenderText('Id')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cropID', $this->RenderText('CropID')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('location_id', $this->RenderText('Location Id')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('in_organ_fertiliser_type', $this->RenderText('In Organ Fertiliser Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('in_organ_fertiliser_max', $this->RenderText('In Organ Fertiliser Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('in_organ_fertiliser_mean', $this->RenderText('In Organ Fertiliser Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('in_organ_fertiliser_min', $this->RenderText('In Organ Fertiliser Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('nitro_fertiliser_max', $this->RenderText('Nitro Fertiliser Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('nitro_fertiliser_mean', $this->RenderText('Nitro Fertiliser Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('nitro_fertiliser_min', $this->RenderText('Nitro Fertiliser Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('organ_Fertiliser_max', $this->RenderText('Organ Fertiliser Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('organ_Fertiliser_mean', $this->RenderText('Organ Fertiliser Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('organ_Fertiliser_min', $this->RenderText('Organ Fertiliser Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('organ_Fertiliser_type', $this->RenderText('Organ Fertiliser Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('phosp_fertiliser_max', $this->RenderText('Phosp Fertiliser Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('phosp_fertiliser_mean', $this->RenderText('Phosp Fertiliser Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('phosp_fertiliser_min', $this->RenderText('Phosp Fertiliser Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('potas_fertiliser_max', $this->RenderText('Potas Fertiliser Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('potas_fertiliser_mean', $this->RenderText('Potas Fertiliser Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('potas_fertiliser_min', $this->RenderText('Potas Fertiliser Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('liming_max', $this->RenderText('Liming Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('liming_mean', $this->RenderText('Liming Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('liming_min', $this->RenderText('Liming Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('bio_input_bacteria', $this->RenderText('Bio Input Bacteria')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('bio_input_fungus', $this->RenderText('Bio Input Fungus')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('bio_input_other', $this->RenderText('Bio Input Other')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('biochar', $this->RenderText('Biochar')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('nitro_fix_crop', $this->RenderText('Nitro Fix Crop')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('kbs_fert_others', $this->RenderText('Kbs Fert Others')));
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
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for location_id field
            //
            $column = new TextViewColumn('location_id', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_type field
            //
            $column = new TextViewColumn('in_organ_fertiliser_type', 'In Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_FertiliserGrid_in_organ_fertiliser_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_max field
            //
            $column = new TextViewColumn('in_organ_fertiliser_max', 'In Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_mean field
            //
            $column = new TextViewColumn('in_organ_fertiliser_mean', 'In Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_min field
            //
            $column = new TextViewColumn('in_organ_fertiliser_min', 'In Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for nitro_fertiliser_max field
            //
            $column = new TextViewColumn('nitro_fertiliser_max', 'Nitro Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for nitro_fertiliser_mean field
            //
            $column = new TextViewColumn('nitro_fertiliser_mean', 'Nitro Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for nitro_fertiliser_min field
            //
            $column = new TextViewColumn('nitro_fertiliser_min', 'Nitro Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for organ_Fertiliser_max field
            //
            $column = new TextViewColumn('organ_Fertiliser_max', 'Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for organ_Fertiliser_mean field
            //
            $column = new TextViewColumn('organ_Fertiliser_mean', 'Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for organ_Fertiliser_min field
            //
            $column = new TextViewColumn('organ_Fertiliser_min', 'Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for organ_Fertiliser_type field
            //
            $column = new TextViewColumn('organ_Fertiliser_type', 'Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_FertiliserGrid_organ_Fertiliser_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for phosp_fertiliser_max field
            //
            $column = new TextViewColumn('phosp_fertiliser_max', 'Phosp Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for phosp_fertiliser_mean field
            //
            $column = new TextViewColumn('phosp_fertiliser_mean', 'Phosp Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for phosp_fertiliser_min field
            //
            $column = new TextViewColumn('phosp_fertiliser_min', 'Phosp Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for potas_fertiliser_max field
            //
            $column = new TextViewColumn('potas_fertiliser_max', 'Potas Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for potas_fertiliser_mean field
            //
            $column = new TextViewColumn('potas_fertiliser_mean', 'Potas Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for potas_fertiliser_min field
            //
            $column = new TextViewColumn('potas_fertiliser_min', 'Potas Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for liming_max field
            //
            $column = new TextViewColumn('liming_max', 'Liming Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for liming_mean field
            //
            $column = new TextViewColumn('liming_mean', 'Liming Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for liming_min field
            //
            $column = new TextViewColumn('liming_min', 'Liming Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for bio_input_bacteria field
            //
            $column = new TextViewColumn('bio_input_bacteria', 'Bio Input Bacteria', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for bio_input_fungus field
            //
            $column = new TextViewColumn('bio_input_fungus', 'Bio Input Fungus', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for bio_input_other field
            //
            $column = new TextViewColumn('bio_input_other', 'Bio Input Other', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for biochar field
            //
            $column = new TextViewColumn('biochar', 'Biochar', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for nitro_fix_crop field
            //
            $column = new TextViewColumn('nitro_fix_crop', 'Nitro Fix Crop', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for kbs_fert_others field
            //
            $column = new TextViewColumn('kbs_fert_others', 'Kbs Fert Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_FertiliserGrid_kbs_fert_others_handler_list');
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
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for location_id field
            //
            $column = new TextViewColumn('location_id', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_type field
            //
            $column = new TextViewColumn('in_organ_fertiliser_type', 'In Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_FertiliserGrid_in_organ_fertiliser_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_max field
            //
            $column = new TextViewColumn('in_organ_fertiliser_max', 'In Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_mean field
            //
            $column = new TextViewColumn('in_organ_fertiliser_mean', 'In Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for in_organ_fertiliser_min field
            //
            $column = new TextViewColumn('in_organ_fertiliser_min', 'In Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for nitro_fertiliser_max field
            //
            $column = new TextViewColumn('nitro_fertiliser_max', 'Nitro Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for nitro_fertiliser_mean field
            //
            $column = new TextViewColumn('nitro_fertiliser_mean', 'Nitro Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for nitro_fertiliser_min field
            //
            $column = new TextViewColumn('nitro_fertiliser_min', 'Nitro Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for organ_Fertiliser_max field
            //
            $column = new TextViewColumn('organ_Fertiliser_max', 'Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for organ_Fertiliser_mean field
            //
            $column = new TextViewColumn('organ_Fertiliser_mean', 'Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for organ_Fertiliser_min field
            //
            $column = new TextViewColumn('organ_Fertiliser_min', 'Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for organ_Fertiliser_type field
            //
            $column = new TextViewColumn('organ_Fertiliser_type', 'Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_FertiliserGrid_organ_Fertiliser_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for phosp_fertiliser_max field
            //
            $column = new TextViewColumn('phosp_fertiliser_max', 'Phosp Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for phosp_fertiliser_mean field
            //
            $column = new TextViewColumn('phosp_fertiliser_mean', 'Phosp Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for phosp_fertiliser_min field
            //
            $column = new TextViewColumn('phosp_fertiliser_min', 'Phosp Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for potas_fertiliser_max field
            //
            $column = new TextViewColumn('potas_fertiliser_max', 'Potas Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for potas_fertiliser_mean field
            //
            $column = new TextViewColumn('potas_fertiliser_mean', 'Potas Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for potas_fertiliser_min field
            //
            $column = new TextViewColumn('potas_fertiliser_min', 'Potas Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for liming_max field
            //
            $column = new TextViewColumn('liming_max', 'Liming Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for liming_mean field
            //
            $column = new TextViewColumn('liming_mean', 'Liming Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for liming_min field
            //
            $column = new TextViewColumn('liming_min', 'Liming Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for bio_input_bacteria field
            //
            $column = new TextViewColumn('bio_input_bacteria', 'Bio Input Bacteria', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for bio_input_fungus field
            //
            $column = new TextViewColumn('bio_input_fungus', 'Bio Input Fungus', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for bio_input_other field
            //
            $column = new TextViewColumn('bio_input_other', 'Bio Input Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for biochar field
            //
            $column = new TextViewColumn('biochar', 'Biochar', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for nitro_fix_crop field
            //
            $column = new TextViewColumn('nitro_fix_crop', 'Nitro Fix Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for kbs_fert_others field
            //
            $column = new TextViewColumn('kbs_fert_others', 'Kbs Fert Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_FertiliserGrid_kbs_fert_others_handler_view');
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
            // Edit column for cropID field
            //
            $editor = new TextEdit('cropid_edit');
            $editColumn = new CustomEditColumn('CropID', 'cropID', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for location_id field
            //
            $editor = new TextEdit('location_id_edit');
            $editColumn = new CustomEditColumn('Location Id', 'location_id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_type field
            //
            $editor = new TextAreaEdit('in_organ_fertiliser_type_edit', 50, 8);
            $editColumn = new CustomEditColumn('In Organ Fertiliser Type', 'in_organ_fertiliser_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_max field
            //
            $editor = new TextEdit('in_organ_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('In Organ Fertiliser Max', 'in_organ_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_mean field
            //
            $editor = new TextEdit('in_organ_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('In Organ Fertiliser Mean', 'in_organ_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_min field
            //
            $editor = new TextEdit('in_organ_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('In Organ Fertiliser Min', 'in_organ_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for nitro_fertiliser_max field
            //
            $editor = new TextEdit('nitro_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Nitro Fertiliser Max', 'nitro_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for nitro_fertiliser_mean field
            //
            $editor = new TextEdit('nitro_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Nitro Fertiliser Mean', 'nitro_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for nitro_fertiliser_min field
            //
            $editor = new TextEdit('nitro_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Nitro Fertiliser Min', 'nitro_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_max field
            //
            $editor = new TextEdit('organ_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Organ Fertiliser Max', 'organ_Fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_mean field
            //
            $editor = new TextEdit('organ_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Organ Fertiliser Mean', 'organ_Fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_min field
            //
            $editor = new TextEdit('organ_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Organ Fertiliser Min', 'organ_Fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_type field
            //
            $editor = new TextAreaEdit('organ_fertiliser_type_edit', 50, 8);
            $editColumn = new CustomEditColumn('Organ Fertiliser Type', 'organ_Fertiliser_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for phosp_fertiliser_max field
            //
            $editor = new TextEdit('phosp_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Phosp Fertiliser Max', 'phosp_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for phosp_fertiliser_mean field
            //
            $editor = new TextEdit('phosp_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Phosp Fertiliser Mean', 'phosp_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for phosp_fertiliser_min field
            //
            $editor = new TextEdit('phosp_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Phosp Fertiliser Min', 'phosp_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for potas_fertiliser_max field
            //
            $editor = new TextEdit('potas_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Potas Fertiliser Max', 'potas_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for potas_fertiliser_mean field
            //
            $editor = new TextEdit('potas_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Potas Fertiliser Mean', 'potas_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for potas_fertiliser_min field
            //
            $editor = new TextEdit('potas_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Potas Fertiliser Min', 'potas_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for liming_max field
            //
            $editor = new TextEdit('liming_max_edit');
            $editColumn = new CustomEditColumn('Liming Max', 'liming_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for liming_mean field
            //
            $editor = new TextEdit('liming_mean_edit');
            $editColumn = new CustomEditColumn('Liming Mean', 'liming_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for liming_min field
            //
            $editor = new TextEdit('liming_min_edit');
            $editColumn = new CustomEditColumn('Liming Min', 'liming_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for bio_input_bacteria field
            //
            $editor = new TextEdit('bio_input_bacteria_edit');
            $editColumn = new CustomEditColumn('Bio Input Bacteria', 'bio_input_bacteria', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for bio_input_fungus field
            //
            $editor = new TextEdit('bio_input_fungus_edit');
            $editColumn = new CustomEditColumn('Bio Input Fungus', 'bio_input_fungus', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for bio_input_other field
            //
            $editor = new TextEdit('bio_input_other_edit');
            $editColumn = new CustomEditColumn('Bio Input Other', 'bio_input_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for biochar field
            //
            $editor = new TextEdit('biochar_edit');
            $editColumn = new CustomEditColumn('Biochar', 'biochar', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for nitro_fix_crop field
            //
            $editor = new TextEdit('nitro_fix_crop_edit');
            $editColumn = new CustomEditColumn('Nitro Fix Crop', 'nitro_fix_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for kbs_fert_others field
            //
            $editor = new TextAreaEdit('kbs_fert_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Fert Others', 'kbs_fert_others', $editor, $this->dataset);
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
            // Edit column for cropID field
            //
            $editor = new TextEdit('cropid_edit');
            $editColumn = new CustomEditColumn('CropID', 'cropID', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for location_id field
            //
            $editor = new TextEdit('location_id_edit');
            $editColumn = new CustomEditColumn('Location Id', 'location_id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_type field
            //
            $editor = new TextAreaEdit('in_organ_fertiliser_type_edit', 50, 8);
            $editColumn = new CustomEditColumn('In Organ Fertiliser Type', 'in_organ_fertiliser_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_max field
            //
            $editor = new TextEdit('in_organ_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('In Organ Fertiliser Max', 'in_organ_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_mean field
            //
            $editor = new TextEdit('in_organ_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('In Organ Fertiliser Mean', 'in_organ_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for in_organ_fertiliser_min field
            //
            $editor = new TextEdit('in_organ_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('In Organ Fertiliser Min', 'in_organ_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for nitro_fertiliser_max field
            //
            $editor = new TextEdit('nitro_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Nitro Fertiliser Max', 'nitro_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for nitro_fertiliser_mean field
            //
            $editor = new TextEdit('nitro_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Nitro Fertiliser Mean', 'nitro_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for nitro_fertiliser_min field
            //
            $editor = new TextEdit('nitro_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Nitro Fertiliser Min', 'nitro_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_max field
            //
            $editor = new TextEdit('organ_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Organ Fertiliser Max', 'organ_Fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_mean field
            //
            $editor = new TextEdit('organ_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Organ Fertiliser Mean', 'organ_Fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_min field
            //
            $editor = new TextEdit('organ_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Organ Fertiliser Min', 'organ_Fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for organ_Fertiliser_type field
            //
            $editor = new TextAreaEdit('organ_fertiliser_type_edit', 50, 8);
            $editColumn = new CustomEditColumn('Organ Fertiliser Type', 'organ_Fertiliser_type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for phosp_fertiliser_max field
            //
            $editor = new TextEdit('phosp_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Phosp Fertiliser Max', 'phosp_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for phosp_fertiliser_mean field
            //
            $editor = new TextEdit('phosp_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Phosp Fertiliser Mean', 'phosp_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for phosp_fertiliser_min field
            //
            $editor = new TextEdit('phosp_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Phosp Fertiliser Min', 'phosp_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for potas_fertiliser_max field
            //
            $editor = new TextEdit('potas_fertiliser_max_edit');
            $editColumn = new CustomEditColumn('Potas Fertiliser Max', 'potas_fertiliser_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for potas_fertiliser_mean field
            //
            $editor = new TextEdit('potas_fertiliser_mean_edit');
            $editColumn = new CustomEditColumn('Potas Fertiliser Mean', 'potas_fertiliser_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for potas_fertiliser_min field
            //
            $editor = new TextEdit('potas_fertiliser_min_edit');
            $editColumn = new CustomEditColumn('Potas Fertiliser Min', 'potas_fertiliser_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for liming_max field
            //
            $editor = new TextEdit('liming_max_edit');
            $editColumn = new CustomEditColumn('Liming Max', 'liming_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for liming_mean field
            //
            $editor = new TextEdit('liming_mean_edit');
            $editColumn = new CustomEditColumn('Liming Mean', 'liming_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for liming_min field
            //
            $editor = new TextEdit('liming_min_edit');
            $editColumn = new CustomEditColumn('Liming Min', 'liming_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for bio_input_bacteria field
            //
            $editor = new TextEdit('bio_input_bacteria_edit');
            $editColumn = new CustomEditColumn('Bio Input Bacteria', 'bio_input_bacteria', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for bio_input_fungus field
            //
            $editor = new TextEdit('bio_input_fungus_edit');
            $editColumn = new CustomEditColumn('Bio Input Fungus', 'bio_input_fungus', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for bio_input_other field
            //
            $editor = new TextEdit('bio_input_other_edit');
            $editColumn = new CustomEditColumn('Bio Input Other', 'bio_input_other', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for biochar field
            //
            $editor = new TextEdit('biochar_edit');
            $editColumn = new CustomEditColumn('Biochar', 'biochar', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for nitro_fix_crop field
            //
            $editor = new TextEdit('nitro_fix_crop_edit');
            $editColumn = new CustomEditColumn('Nitro Fix Crop', 'nitro_fix_crop', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for kbs_fert_others field
            //
            $editor = new TextAreaEdit('kbs_fert_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Fert Others', 'kbs_fert_others', $editor, $this->dataset);
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
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for location_id field
            //
            $column = new TextViewColumn('location_id', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for in_organ_fertiliser_type field
            //
            $column = new TextViewColumn('in_organ_fertiliser_type', 'In Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for in_organ_fertiliser_max field
            //
            $column = new TextViewColumn('in_organ_fertiliser_max', 'In Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for in_organ_fertiliser_mean field
            //
            $column = new TextViewColumn('in_organ_fertiliser_mean', 'In Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for in_organ_fertiliser_min field
            //
            $column = new TextViewColumn('in_organ_fertiliser_min', 'In Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for nitro_fertiliser_max field
            //
            $column = new TextViewColumn('nitro_fertiliser_max', 'Nitro Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for nitro_fertiliser_mean field
            //
            $column = new TextViewColumn('nitro_fertiliser_mean', 'Nitro Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for nitro_fertiliser_min field
            //
            $column = new TextViewColumn('nitro_fertiliser_min', 'Nitro Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for organ_Fertiliser_max field
            //
            $column = new TextViewColumn('organ_Fertiliser_max', 'Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for organ_Fertiliser_mean field
            //
            $column = new TextViewColumn('organ_Fertiliser_mean', 'Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for organ_Fertiliser_min field
            //
            $column = new TextViewColumn('organ_Fertiliser_min', 'Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for organ_Fertiliser_type field
            //
            $column = new TextViewColumn('organ_Fertiliser_type', 'Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for phosp_fertiliser_max field
            //
            $column = new TextViewColumn('phosp_fertiliser_max', 'Phosp Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for phosp_fertiliser_mean field
            //
            $column = new TextViewColumn('phosp_fertiliser_mean', 'Phosp Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for phosp_fertiliser_min field
            //
            $column = new TextViewColumn('phosp_fertiliser_min', 'Phosp Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for potas_fertiliser_max field
            //
            $column = new TextViewColumn('potas_fertiliser_max', 'Potas Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for potas_fertiliser_mean field
            //
            $column = new TextViewColumn('potas_fertiliser_mean', 'Potas Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for potas_fertiliser_min field
            //
            $column = new TextViewColumn('potas_fertiliser_min', 'Potas Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for liming_max field
            //
            $column = new TextViewColumn('liming_max', 'Liming Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for liming_mean field
            //
            $column = new TextViewColumn('liming_mean', 'Liming Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for liming_min field
            //
            $column = new TextViewColumn('liming_min', 'Liming Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for bio_input_bacteria field
            //
            $column = new TextViewColumn('bio_input_bacteria', 'Bio Input Bacteria', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for bio_input_fungus field
            //
            $column = new TextViewColumn('bio_input_fungus', 'Bio Input Fungus', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for bio_input_other field
            //
            $column = new TextViewColumn('bio_input_other', 'Bio Input Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for biochar field
            //
            $column = new TextViewColumn('biochar', 'Biochar', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for nitro_fix_crop field
            //
            $column = new TextViewColumn('nitro_fix_crop', 'Nitro Fix Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for kbs_fert_others field
            //
            $column = new TextViewColumn('kbs_fert_others', 'Kbs Fert Others', $this->dataset);
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
            // View column for cropID field
            //
            $column = new TextViewColumn('cropID', 'CropID', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for location_id field
            //
            $column = new TextViewColumn('location_id', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for in_organ_fertiliser_type field
            //
            $column = new TextViewColumn('in_organ_fertiliser_type', 'In Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for in_organ_fertiliser_max field
            //
            $column = new TextViewColumn('in_organ_fertiliser_max', 'In Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for in_organ_fertiliser_mean field
            //
            $column = new TextViewColumn('in_organ_fertiliser_mean', 'In Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for in_organ_fertiliser_min field
            //
            $column = new TextViewColumn('in_organ_fertiliser_min', 'In Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for nitro_fertiliser_max field
            //
            $column = new TextViewColumn('nitro_fertiliser_max', 'Nitro Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for nitro_fertiliser_mean field
            //
            $column = new TextViewColumn('nitro_fertiliser_mean', 'Nitro Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for nitro_fertiliser_min field
            //
            $column = new TextViewColumn('nitro_fertiliser_min', 'Nitro Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for organ_Fertiliser_max field
            //
            $column = new TextViewColumn('organ_Fertiliser_max', 'Organ Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for organ_Fertiliser_mean field
            //
            $column = new TextViewColumn('organ_Fertiliser_mean', 'Organ Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for organ_Fertiliser_min field
            //
            $column = new TextViewColumn('organ_Fertiliser_min', 'Organ Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for organ_Fertiliser_type field
            //
            $column = new TextViewColumn('organ_Fertiliser_type', 'Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for phosp_fertiliser_max field
            //
            $column = new TextViewColumn('phosp_fertiliser_max', 'Phosp Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for phosp_fertiliser_mean field
            //
            $column = new TextViewColumn('phosp_fertiliser_mean', 'Phosp Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for phosp_fertiliser_min field
            //
            $column = new TextViewColumn('phosp_fertiliser_min', 'Phosp Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for potas_fertiliser_max field
            //
            $column = new TextViewColumn('potas_fertiliser_max', 'Potas Fertiliser Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for potas_fertiliser_mean field
            //
            $column = new TextViewColumn('potas_fertiliser_mean', 'Potas Fertiliser Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for potas_fertiliser_min field
            //
            $column = new TextViewColumn('potas_fertiliser_min', 'Potas Fertiliser Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for liming_max field
            //
            $column = new TextViewColumn('liming_max', 'Liming Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for liming_mean field
            //
            $column = new TextViewColumn('liming_mean', 'Liming Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for liming_min field
            //
            $column = new TextViewColumn('liming_min', 'Liming Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for bio_input_bacteria field
            //
            $column = new TextViewColumn('bio_input_bacteria', 'Bio Input Bacteria', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for bio_input_fungus field
            //
            $column = new TextViewColumn('bio_input_fungus', 'Bio Input Fungus', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for bio_input_other field
            //
            $column = new TextViewColumn('bio_input_other', 'Bio Input Other', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for biochar field
            //
            $column = new TextViewColumn('biochar', 'Biochar', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for nitro_fix_crop field
            //
            $column = new TextViewColumn('nitro_fix_crop', 'Nitro Fix Crop', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for kbs_fert_others field
            //
            $column = new TextViewColumn('kbs_fert_others', 'Kbs Fert Others', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Agro_Fertiliser_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_Agro_FertiliserGrid');
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
            // View column for in_organ_fertiliser_type field
            //
            $column = new TextViewColumn('in_organ_fertiliser_type', 'In Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_FertiliserGrid_in_organ_fertiliser_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for organ_Fertiliser_type field
            //
            $column = new TextViewColumn('organ_Fertiliser_type', 'Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_FertiliserGrid_organ_Fertiliser_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_fert_others field
            //
            $column = new TextViewColumn('kbs_fert_others', 'Kbs Fert Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_FertiliserGrid_kbs_fert_others_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for in_organ_fertiliser_type field
            //
            $column = new TextViewColumn('in_organ_fertiliser_type', 'In Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_FertiliserGrid_in_organ_fertiliser_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for organ_Fertiliser_type field
            //
            $column = new TextViewColumn('organ_Fertiliser_type', 'Organ Fertiliser Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_FertiliserGrid_organ_Fertiliser_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_fert_others field
            //
            $column = new TextViewColumn('kbs_fert_others', 'Kbs Fert Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_FertiliserGrid_kbs_fert_others_handler_view', $column);
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
        $Page = new KBS_Agro_FertiliserPage("KBS_Agro_Fertiliser.php", "KBS_Agro_Fertiliser", GetCurrentUserGrantForDataSource("KBS_Agro_Fertiliser"), 'UTF-8');
        $Page->SetShortCaption('KBS Agro Fertiliser');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Agro Fertiliser');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Agro_Fertiliser"));
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
	

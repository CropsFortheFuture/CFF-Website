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
    
    
    
    class KBS_Global_GeoNamesPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Global_GeoNames`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new StringField('countryCode');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('countryName');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('currencyCode');
            $this->dataset->AddField($field, false);
            $field = new StringField('population');
            $this->dataset->AddField($field, false);
            $field = new StringField('fipsCode');
            $this->dataset->AddField($field, false);
            $field = new StringField('isoNumeric');
            $this->dataset->AddField($field, false);
            $field = new StringField('north');
            $this->dataset->AddField($field, false);
            $field = new StringField('south');
            $this->dataset->AddField($field, false);
            $field = new StringField('east');
            $this->dataset->AddField($field, false);
            $field = new StringField('west');
            $this->dataset->AddField($field, false);
            $field = new StringField('capital');
            $this->dataset->AddField($field, false);
            $field = new StringField('continentName');
            $this->dataset->AddField($field, false);
            $field = new StringField('continent');
            $this->dataset->AddField($field, false);
            $field = new StringField('areaInSqKm');
            $this->dataset->AddField($field, false);
            $field = new StringField('languages');
            $this->dataset->AddField($field, false);
            $field = new StringField('isoAlpha3');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('geonameId');
            $this->dataset->AddField($field, false);
            $field = new StringField('type');
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
            $result->AddGroup($this->RenderText('Default'));
            if (GetCurrentUserGrantForDataSource('ecocrop')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Ecocrop'), 'ecocrop.php', $this->RenderText('Ecocrop'), $currentPageCaption == $this->RenderText('Ecocrop'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_ID')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info ID'), 'Info_ID.php', $this->RenderText('Info ID'), $currentPageCaption == $this->RenderText('Info ID'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Agro_Agroecology')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Agro Agroecology'), 'Info_KBS_Agro_Agroecology.php', $this->RenderText('Info KBS Agro Agroecology'), $currentPageCaption == $this->RenderText('Info KBS Agro Agroecology'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Agro_Agronomic_Practices')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Agro Agronomic Practices'), 'Info_KBS_Agro_Agronomic_Practices.php', $this->RenderText('Info KBS Agro Agronomic Practices'), $currentPageCaption == $this->RenderText('Info KBS Agro Agronomic Practices'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Agro_Cropping_System')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Agro Cropping System'), 'Info_KBS_Agro_Cropping_System.php', $this->RenderText('Info KBS Agro Cropping System'), $currentPageCaption == $this->RenderText('Info KBS Agro Cropping System'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Agro_Fertiliser')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Agro Fertiliser'), 'Info_KBS_Agro_Fertiliser.php', $this->RenderText('Info KBS Agro Fertiliser'), $currentPageCaption == $this->RenderText('Info KBS Agro Fertiliser'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Agro_Pathology')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Agro Pathology'), 'Info_KBS_Agro_Pathology.php', $this->RenderText('Info KBS Agro Pathology'), $currentPageCaption == $this->RenderText('Info KBS Agro Pathology'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Agro_Resist_Tolerance')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Agro Resist Tolerance'), 'Info_KBS_Agro_Resist_Tolerance.php', $this->RenderText('Info KBS Agro Resist Tolerance'), $currentPageCaption == $this->RenderText('Info KBS Agro Resist Tolerance'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Agro_Season')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Agro Season'), 'Info_KBS_Agro_Season.php', $this->RenderText('Info KBS Agro Season'), $currentPageCaption == $this->RenderText('Info KBS Agro Season'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Biomass_Output')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Biomass Output'), 'Info_KBS_Biomass_Output.php', $this->RenderText('Info KBS Biomass Output'), $currentPageCaption == $this->RenderText('Info KBS Biomass Output'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Biomass_Proximate')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Biomass Proximate'), 'Info_KBS_Biomass_Proximate.php', $this->RenderText('Info KBS Biomass Proximate'), $currentPageCaption == $this->RenderText('Info KBS Biomass Proximate'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Biomass_Thermogravimetric')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Biomass Thermogravimetric'), 'Info_KBS_Biomass_Thermogravimetric.php', $this->RenderText('Info KBS Biomass Thermogravimetric'), $currentPageCaption == $this->RenderText('Info KBS Biomass Thermogravimetric'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Biomass_Ulitmate')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Biomass Ulitmate'), 'Info_KBS_Biomass_Ulitmate.php', $this->RenderText('Info KBS Biomass Ulitmate'), $currentPageCaption == $this->RenderText('Info KBS Biomass Ulitmate'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Biomass_Uses')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Biomass Uses'), 'Info_KBS_Biomass_Uses.php', $this->RenderText('Info KBS Biomass Uses'), $currentPageCaption == $this->RenderText('Info KBS Biomass Uses'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Food_Nutrient_Composition')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Food Nutrient Composition'), 'Info_KBS_Food_Nutrient_Composition.php', $this->RenderText('Info KBS Food Nutrient Composition'), $currentPageCaption == $this->RenderText('Info KBS Food Nutrient Composition'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Food_Nutrient_Minerals')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Food Nutrient Minerals'), 'Info_KBS_Food_Nutrient_Minerals.php', $this->RenderText('Info KBS Food Nutrient Minerals'), $currentPageCaption == $this->RenderText('Info KBS Food Nutrient Minerals'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Food_Nutrient_Vitamins')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Food Nutrient Vitamins'), 'Info_KBS_Food_Nutrient_Vitamins.php', $this->RenderText('Info KBS Food Nutrient Vitamins'), $currentPageCaption == $this->RenderText('Info KBS Food Nutrient Vitamins'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_General')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS General'), 'Info_KBS_General.php', $this->RenderText('Info KBS General'), $currentPageCaption == $this->RenderText('Info KBS General'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_General_Growth_Cycle')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS General Growth Cycle'), 'Info_KBS_General_Growth_Cycle.php', $this->RenderText('Info KBS General Growth Cycle'), $currentPageCaption == $this->RenderText('Info KBS General Growth Cycle'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_General_Growth_Habit')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS General Growth Habit'), 'Info_KBS_General_Growth_Habit.php', $this->RenderText('Info KBS General Growth Habit'), $currentPageCaption == $this->RenderText('Info KBS General Growth Habit'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_General_Parts')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS General Parts'), 'Info_KBS_General_Parts.php', $this->RenderText('Info KBS General Parts'), $currentPageCaption == $this->RenderText('Info KBS General Parts'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_General_Parts_Used')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS General Parts Used'), 'Info_KBS_General_Parts_Used.php', $this->RenderText('Info KBS General Parts Used'), $currentPageCaption == $this->RenderText('Info KBS General Parts Used'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_General_Type')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS General Type'), 'Info_KBS_General_Type.php', $this->RenderText('Info KBS General Type'), $currentPageCaption == $this->RenderText('Info KBS General Type'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_General_Usage')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS General Usage'), 'Info_KBS_General_Usage.php', $this->RenderText('Info KBS General Usage'), $currentPageCaption == $this->RenderText('Info KBS General Usage'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_Nutrient_Composition')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS Nutrient Composition'), 'Info_KBS_Nutrient_Composition.php', $this->RenderText('Info KBS Nutrient Composition'), $currentPageCaption == $this->RenderText('Info KBS Nutrient Composition'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_SocioEconomy_Human')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS SocioEconomy Human'), 'Info_KBS_SocioEconomy_Human.php', $this->RenderText('Info KBS SocioEconomy Human'), $currentPageCaption == $this->RenderText('Info KBS SocioEconomy Human'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_SocioEconomy_Infrastructure')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS SocioEconomy Infrastructure'), 'Info_KBS_SocioEconomy_Infrastructure.php', $this->RenderText('Info KBS SocioEconomy Infrastructure'), $currentPageCaption == $this->RenderText('Info KBS SocioEconomy Infrastructure'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_SocioEconomy_Market')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS SocioEconomy Market'), 'Info_KBS_SocioEconomy_Market.php', $this->RenderText('Info KBS SocioEconomy Market'), $currentPageCaption == $this->RenderText('Info KBS SocioEconomy Market'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_SocioEconomy_Price')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS SocioEconomy Price'), 'Info_KBS_SocioEconomy_Price.php', $this->RenderText('Info KBS SocioEconomy Price'), $currentPageCaption == $this->RenderText('Info KBS SocioEconomy Price'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_SocioEconomy_Subsidy')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS SocioEconomy Subsidy'), 'Info_KBS_SocioEconomy_Subsidy.php', $this->RenderText('Info KBS SocioEconomy Subsidy'), $currentPageCaption == $this->RenderText('Info KBS SocioEconomy Subsidy'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('Info_KBS_SocioEconomy_Water_Source')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Info KBS SocioEconomy Water Source'), 'Info_KBS_SocioEconomy_Water_Source.php', $this->RenderText('Info KBS SocioEconomy Water Source'), $currentPageCaption == $this->RenderText('Info KBS SocioEconomy Water Source'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Agroecology')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Agroecology'), 'KBS_Agro_Agroecology.php', $this->RenderText('KBS Agro Agroecology'), $currentPageCaption == $this->RenderText('KBS Agro Agroecology'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Agronomic_Practices')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Agronomic Practices'), 'KBS_Agro_Agronomic_Practices.php', $this->RenderText('KBS Agro Agronomic Practices'), $currentPageCaption == $this->RenderText('KBS Agro Agronomic Practices'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Cropping_System')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Cropping System'), 'KBS_Agro_Cropping_System.php', $this->RenderText('KBS Agro Cropping System'), $currentPageCaption == $this->RenderText('KBS Agro Cropping System'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Fertiliser')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Fertiliser'), 'KBS_Agro_Fertiliser.php', $this->RenderText('KBS Agro Fertiliser'), $currentPageCaption == $this->RenderText('KBS Agro Fertiliser'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Pathology')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Pathology'), 'KBS_Agro_Pathology.php', $this->RenderText('KBS Agro Pathology'), $currentPageCaption == $this->RenderText('KBS Agro Pathology'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Resist_Tolerance')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Resist Tolerance'), 'KBS_Agro_Resist_Tolerance.php', $this->RenderText('KBS Agro Resist Tolerance'), $currentPageCaption == $this->RenderText('KBS Agro Resist Tolerance'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Agro_Season')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Agro Season'), 'KBS_Agro_Season.php', $this->RenderText('KBS Agro Season'), $currentPageCaption == $this->RenderText('KBS Agro Season'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Aquacrop')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Aquacrop'), 'KBS_Aquacrop.php', $this->RenderText('KBS Aquacrop'), $currentPageCaption == $this->RenderText('KBS Aquacrop'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Output')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Output'), 'KBS_Biomass_Output.php', $this->RenderText('KBS Biomass Output'), $currentPageCaption == $this->RenderText('KBS Biomass Output'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Proximate')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Proximate'), 'KBS_Biomass_Proximate.php', $this->RenderText('KBS Biomass Proximate'), $currentPageCaption == $this->RenderText('KBS Biomass Proximate'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Thermogravimetric')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Thermogravimetric'), 'KBS_Biomass_Thermogravimetric.php', $this->RenderText('KBS Biomass Thermogravimetric'), $currentPageCaption == $this->RenderText('KBS Biomass Thermogravimetric'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Ulitmate')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Ulitmate'), 'KBS_Biomass_Ulitmate.php', $this->RenderText('KBS Biomass Ulitmate'), $currentPageCaption == $this->RenderText('KBS Biomass Ulitmate'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Biomass_Uses')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Biomass Uses'), 'KBS_Biomass_Uses.php', $this->RenderText('KBS Biomass Uses'), $currentPageCaption == $this->RenderText('KBS Biomass Uses'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_CRO_File')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop CRO File'), 'KBS_Crop_CRO_File.php', $this->RenderText('KBS Crop CRO File'), $currentPageCaption == $this->RenderText('KBS Crop CRO File'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Diseases')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Diseases'), 'KBS_Crop_Diseases.php', $this->RenderText('KBS Crop Diseases'), $currentPageCaption == $this->RenderText('KBS Crop Diseases'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Germplasm')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Germplasm'), 'KBS_Crop_Germplasm.php', $this->RenderText('KBS Crop Germplasm'), $currentPageCaption == $this->RenderText('KBS Crop Germplasm'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Institute')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Institute'), 'KBS_Crop_Institute.php', $this->RenderText('KBS Crop Institute'), $currentPageCaption == $this->RenderText('KBS Crop Institute'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Local_Name')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Local Name'), 'KBS_Crop_Local_Name.php', $this->RenderText('KBS Crop Local Name'), $currentPageCaption == $this->RenderText('KBS Crop Local Name'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Pests')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Pests'), 'KBS_Crop_Pests.php', $this->RenderText('KBS Crop Pests'), $currentPageCaption == $this->RenderText('KBS Crop Pests'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Stat')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Stat'), 'KBS_Crop_Stat.php', $this->RenderText('KBS Crop Stat'), $currentPageCaption == $this->RenderText('KBS Crop Stat'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Synonyms')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Synonyms'), 'KBS_Crop_Synonyms.php', $this->RenderText('KBS Crop Synonyms'), $currentPageCaption == $this->RenderText('KBS Crop Synonyms'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Vernacular_Name')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Vernacular Name'), 'KBS_Crop_Vernacular_Name.php', $this->RenderText('KBS Crop Vernacular Name'), $currentPageCaption == $this->RenderText('KBS Crop Vernacular Name'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Weeds')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Weeds'), 'KBS_Crop_Weeds.php', $this->RenderText('KBS Crop Weeds'), $currentPageCaption == $this->RenderText('KBS Crop Weeds'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Where_Researched')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Where Researched'), 'KBS_Crop_Where_Researched.php', $this->RenderText('KBS Crop Where Researched'), $currentPageCaption == $this->RenderText('KBS Crop Where Researched'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Crop_Where_UnderUtilised')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Crop Where UnderUtilised'), 'KBS_Crop_Where_UnderUtilised.php', $this->RenderText('KBS Crop Where UnderUtilised'), $currentPageCaption == $this->RenderText('KBS Crop Where UnderUtilised'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Nutrient_Composition')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Nutrient Composition'), 'KBS_Food_Nutrient_Composition.php', $this->RenderText('KBS Food Nutrient Composition'), $currentPageCaption == $this->RenderText('KBS Food Nutrient Composition'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Nutrient_Minerals')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Nutrient Minerals'), 'KBS_Food_Nutrient_Minerals.php', $this->RenderText('KBS Food Nutrient Minerals'), $currentPageCaption == $this->RenderText('KBS Food Nutrient Minerals'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Nutrient_Vitamins')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Nutrient Vitamins'), 'KBS_Food_Nutrient_Vitamins.php', $this->RenderText('KBS Food Nutrient Vitamins'), $currentPageCaption == $this->RenderText('KBS Food Nutrient Vitamins'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Food_Preparation')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Food Preparation'), 'KBS_Food_Preparation.php', $this->RenderText('KBS Food Preparation'), $currentPageCaption == $this->RenderText('KBS Food Preparation'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_General')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General'), 'KBS_General.php', $this->RenderText('KBS General'), $currentPageCaption == $this->RenderText('KBS General'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Growth_Cycle')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Growth Cycle'), 'KBS_General_Growth_Cycle.php', $this->RenderText('KBS General Growth Cycle'), $currentPageCaption == $this->RenderText('KBS General Growth Cycle'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Growth_Habit')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Growth Habit'), 'KBS_General_Growth_Habit.php', $this->RenderText('KBS General Growth Habit'), $currentPageCaption == $this->RenderText('KBS General Growth Habit'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Parts')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Parts'), 'KBS_General_Parts.php', $this->RenderText('KBS General Parts'), $currentPageCaption == $this->RenderText('KBS General Parts'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Parts_Used')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Parts Used'), 'KBS_General_Parts_Used.php', $this->RenderText('KBS General Parts Used'), $currentPageCaption == $this->RenderText('KBS General Parts Used'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Type')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Type'), 'KBS_General_Type.php', $this->RenderText('KBS General Type'), $currentPageCaption == $this->RenderText('KBS General Type'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_General_Usage')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS General Usage'), 'KBS_General_Usage.php', $this->RenderText('KBS General Usage'), $currentPageCaption == $this->RenderText('KBS General Usage'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Authors')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Authors'), 'KBS_Global_Authors.php', $this->RenderText('KBS Global Authors'), $currentPageCaption == $this->RenderText('KBS Global Authors'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Country_LatLong')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Country LatLong'), 'KBS_Global_Country_LatLong.php', $this->RenderText('KBS Global Country LatLong'), $currentPageCaption == $this->RenderText('KBS Global Country LatLong'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Diseasess')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Diseasess'), 'KBS_Global_Diseasess.php', $this->RenderText('KBS Global Diseasess'), $currentPageCaption == $this->RenderText('KBS Global Diseasess'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_GeoNames')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global GeoNames'), 'KBS_Global_GeoNames.php', $this->RenderText('KBS Global GeoNames'), $currentPageCaption == $this->RenderText('KBS Global GeoNames'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Institute')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Institute'), 'KBS_Global_Institute.php', $this->RenderText('KBS Global Institute'), $currentPageCaption == $this->RenderText('KBS Global Institute'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Parts_ID')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Parts ID'), 'KBS_Global_Parts_ID.php', $this->RenderText('KBS Global Parts ID'), $currentPageCaption == $this->RenderText('KBS Global Parts ID'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Pests')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Pests'), 'KBS_Global_Pests.php', $this->RenderText('KBS Global Pests'), $currentPageCaption == $this->RenderText('KBS Global Pests'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Unit')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Unit'), 'KBS_Global_Unit.php', $this->RenderText('KBS Global Unit'), $currentPageCaption == $this->RenderText('KBS Global Unit'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Global_Weeds')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Global Weeds'), 'KBS_Global_Weeds.php', $this->RenderText('KBS Global Weeds'), $currentPageCaption == $this->RenderText('KBS Global Weeds'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_localname_trial')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Localname Trial'), 'KBS_localname_trial.php', $this->RenderText('KBS Localname Trial'), $currentPageCaption == $this->RenderText('KBS Localname Trial'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Parameter_Accuracy')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Parameter Accuracy'), 'KBS_Parameter_Accuracy.php', $this->RenderText('KBS Parameter Accuracy'), $currentPageCaption == $this->RenderText('KBS Parameter Accuracy'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Parameter_Geo')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Parameter Geo'), 'KBS_Parameter_Geo.php', $this->RenderText('KBS Parameter Geo'), $currentPageCaption == $this->RenderText('KBS Parameter Geo'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Parameter_Images')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Parameter Images'), 'KBS_Parameter_Images.php', $this->RenderText('KBS Parameter Images'), $currentPageCaption == $this->RenderText('KBS Parameter Images'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Parameter_Notes')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Parameter Notes'), 'KBS_Parameter_Notes.php', $this->RenderText('KBS Parameter Notes'), $currentPageCaption == $this->RenderText('KBS Parameter Notes'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_Parameter_References')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS Parameter References'), 'KBS_Parameter_References.php', $this->RenderText('KBS Parameter References'), $currentPageCaption == $this->RenderText('KBS Parameter References'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Human')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Human'), 'KBS_SocioEconomy_Human.php', $this->RenderText('KBS SocioEconomy Human'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Human'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Infrastructure')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Infrastructure'), 'KBS_SocioEconomy_Infrastructure.php', $this->RenderText('KBS SocioEconomy Infrastructure'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Infrastructure'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Market')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Market'), 'KBS_SocioEconomy_Market.php', $this->RenderText('KBS SocioEconomy Market'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Market'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Price')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Price'), 'KBS_SocioEconomy_Price.php', $this->RenderText('KBS SocioEconomy Price'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Price'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Subsidy')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Subsidy'), 'KBS_SocioEconomy_Subsidy.php', $this->RenderText('KBS SocioEconomy Subsidy'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Subsidy'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('KBS_SocioEconomy_Water_Source')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('KBS SocioEconomy Water Source'), 'KBS_SocioEconomy_Water_Source.php', $this->RenderText('KBS SocioEconomy Water Source'), $currentPageCaption == $this->RenderText('KBS SocioEconomy Water Source'), false, $this->RenderText('Default')));
            
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
            $grid->SearchControl = new SimpleSearch('KBS_Global_GeoNamesssearch', $this->dataset,
                array('id', 'countryCode', 'countryName', 'currencyCode', 'population', 'fipsCode', 'isoNumeric', 'north', 'south', 'east', 'west', 'capital', 'continentName', 'continent', 'areaInSqKm', 'languages', 'isoAlpha3', 'geonameId', 'type'),
                array($this->RenderText('Id'), $this->RenderText('CountryCode'), $this->RenderText('CountryName'), $this->RenderText('CurrencyCode'), $this->RenderText('Population'), $this->RenderText('FipsCode'), $this->RenderText('IsoNumeric'), $this->RenderText('North'), $this->RenderText('South'), $this->RenderText('East'), $this->RenderText('West'), $this->RenderText('Capital'), $this->RenderText('ContinentName'), $this->RenderText('Continent'), $this->RenderText('AreaInSqKm'), $this->RenderText('Languages'), $this->RenderText('IsoAlpha3'), $this->RenderText('GeonameId'), $this->RenderText('Type')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Global_GeoNamesasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('id', $this->RenderText('Id')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('countryCode', $this->RenderText('CountryCode')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('countryName', $this->RenderText('CountryName')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('currencyCode', $this->RenderText('CurrencyCode')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('population', $this->RenderText('Population')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('fipsCode', $this->RenderText('FipsCode')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('isoNumeric', $this->RenderText('IsoNumeric')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('north', $this->RenderText('North')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('south', $this->RenderText('South')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('east', $this->RenderText('East')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('west', $this->RenderText('West')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('capital', $this->RenderText('Capital')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('continentName', $this->RenderText('ContinentName')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('continent', $this->RenderText('Continent')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('areaInSqKm', $this->RenderText('AreaInSqKm')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('languages', $this->RenderText('Languages')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('isoAlpha3', $this->RenderText('IsoAlpha3')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('geonameId', $this->RenderText('GeonameId')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('type', $this->RenderText('Type')));
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
            // View column for countryCode field
            //
            $column = new TextViewColumn('countryCode', 'CountryCode', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for countryName field
            //
            $column = new TextViewColumn('countryName', 'CountryName', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for currencyCode field
            //
            $column = new TextViewColumn('currencyCode', 'CurrencyCode', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for population field
            //
            $column = new TextViewColumn('population', 'Population', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for fipsCode field
            //
            $column = new TextViewColumn('fipsCode', 'FipsCode', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for isoNumeric field
            //
            $column = new TextViewColumn('isoNumeric', 'IsoNumeric', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for north field
            //
            $column = new TextViewColumn('north', 'North', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for south field
            //
            $column = new TextViewColumn('south', 'South', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for east field
            //
            $column = new TextViewColumn('east', 'East', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for west field
            //
            $column = new TextViewColumn('west', 'West', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for capital field
            //
            $column = new TextViewColumn('capital', 'Capital', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for continentName field
            //
            $column = new TextViewColumn('continentName', 'ContinentName', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for continent field
            //
            $column = new TextViewColumn('continent', 'Continent', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for areaInSqKm field
            //
            $column = new TextViewColumn('areaInSqKm', 'AreaInSqKm', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for languages field
            //
            $column = new TextViewColumn('languages', 'Languages', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Global_GeoNamesGrid_languages_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for isoAlpha3 field
            //
            $column = new TextViewColumn('isoAlpha3', 'IsoAlpha3', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for geonameId field
            //
            $column = new TextViewColumn('geonameId', 'GeonameId', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
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
            // View column for countryCode field
            //
            $column = new TextViewColumn('countryCode', 'CountryCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for countryName field
            //
            $column = new TextViewColumn('countryName', 'CountryName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for currencyCode field
            //
            $column = new TextViewColumn('currencyCode', 'CurrencyCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for population field
            //
            $column = new TextViewColumn('population', 'Population', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for fipsCode field
            //
            $column = new TextViewColumn('fipsCode', 'FipsCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for isoNumeric field
            //
            $column = new TextViewColumn('isoNumeric', 'IsoNumeric', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for north field
            //
            $column = new TextViewColumn('north', 'North', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for south field
            //
            $column = new TextViewColumn('south', 'South', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for east field
            //
            $column = new TextViewColumn('east', 'East', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for west field
            //
            $column = new TextViewColumn('west', 'West', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for capital field
            //
            $column = new TextViewColumn('capital', 'Capital', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for continentName field
            //
            $column = new TextViewColumn('continentName', 'ContinentName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for continent field
            //
            $column = new TextViewColumn('continent', 'Continent', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for areaInSqKm field
            //
            $column = new TextViewColumn('areaInSqKm', 'AreaInSqKm', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for languages field
            //
            $column = new TextViewColumn('languages', 'Languages', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Global_GeoNamesGrid_languages_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for isoAlpha3 field
            //
            $column = new TextViewColumn('isoAlpha3', 'IsoAlpha3', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for geonameId field
            //
            $column = new TextViewColumn('geonameId', 'GeonameId', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for countryCode field
            //
            $editor = new TextEdit('countrycode_edit');
            $editor->SetSize(2);
            $editor->SetMaxLength(2);
            $editColumn = new CustomEditColumn('CountryCode', 'countryCode', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for countryName field
            //
            $editor = new TextEdit('countryname_edit');
            $editor->SetSize(45);
            $editor->SetMaxLength(45);
            $editColumn = new CustomEditColumn('CountryName', 'countryName', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for currencyCode field
            //
            $editor = new TextEdit('currencycode_edit');
            $editor->SetSize(3);
            $editor->SetMaxLength(3);
            $editColumn = new CustomEditColumn('CurrencyCode', 'currencyCode', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for population field
            //
            $editor = new TextEdit('population_edit');
            $editor->SetSize(20);
            $editor->SetMaxLength(20);
            $editColumn = new CustomEditColumn('Population', 'population', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for fipsCode field
            //
            $editor = new TextEdit('fipscode_edit');
            $editor->SetSize(2);
            $editor->SetMaxLength(2);
            $editColumn = new CustomEditColumn('FipsCode', 'fipsCode', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for isoNumeric field
            //
            $editor = new TextEdit('isonumeric_edit');
            $editor->SetSize(4);
            $editor->SetMaxLength(4);
            $editColumn = new CustomEditColumn('IsoNumeric', 'isoNumeric', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for north field
            //
            $editor = new TextEdit('north_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('North', 'north', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for south field
            //
            $editor = new TextEdit('south_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('South', 'south', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for east field
            //
            $editor = new TextEdit('east_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('East', 'east', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for west field
            //
            $editor = new TextEdit('west_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('West', 'west', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for capital field
            //
            $editor = new TextEdit('capital_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('Capital', 'capital', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for continentName field
            //
            $editor = new TextEdit('continentname_edit');
            $editor->SetSize(15);
            $editor->SetMaxLength(15);
            $editColumn = new CustomEditColumn('ContinentName', 'continentName', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for continent field
            //
            $editor = new TextEdit('continent_edit');
            $editor->SetSize(2);
            $editor->SetMaxLength(2);
            $editColumn = new CustomEditColumn('Continent', 'continent', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for areaInSqKm field
            //
            $editor = new TextEdit('areainsqkm_edit');
            $editor->SetSize(20);
            $editor->SetMaxLength(20);
            $editColumn = new CustomEditColumn('AreaInSqKm', 'areaInSqKm', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for languages field
            //
            $editor = new TextEdit('languages_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Languages', 'languages', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for isoAlpha3 field
            //
            $editor = new TextEdit('isoalpha3_edit');
            $editor->SetSize(3);
            $editor->SetMaxLength(3);
            $editColumn = new CustomEditColumn('IsoAlpha3', 'isoAlpha3', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for geonameId field
            //
            $editor = new TextEdit('geonameid_edit');
            $editColumn = new CustomEditColumn('GeonameId', 'geonameId', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for type field
            //
            $editor = new TextEdit('type_edit');
            $editor->SetSize(45);
            $editor->SetMaxLength(45);
            $editColumn = new CustomEditColumn('Type', 'type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for countryCode field
            //
            $editor = new TextEdit('countrycode_edit');
            $editor->SetSize(2);
            $editor->SetMaxLength(2);
            $editColumn = new CustomEditColumn('CountryCode', 'countryCode', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for countryName field
            //
            $editor = new TextEdit('countryname_edit');
            $editor->SetSize(45);
            $editor->SetMaxLength(45);
            $editColumn = new CustomEditColumn('CountryName', 'countryName', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for currencyCode field
            //
            $editor = new TextEdit('currencycode_edit');
            $editor->SetSize(3);
            $editor->SetMaxLength(3);
            $editColumn = new CustomEditColumn('CurrencyCode', 'currencyCode', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for population field
            //
            $editor = new TextEdit('population_edit');
            $editor->SetSize(20);
            $editor->SetMaxLength(20);
            $editColumn = new CustomEditColumn('Population', 'population', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for fipsCode field
            //
            $editor = new TextEdit('fipscode_edit');
            $editor->SetSize(2);
            $editor->SetMaxLength(2);
            $editColumn = new CustomEditColumn('FipsCode', 'fipsCode', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for isoNumeric field
            //
            $editor = new TextEdit('isonumeric_edit');
            $editor->SetSize(4);
            $editor->SetMaxLength(4);
            $editColumn = new CustomEditColumn('IsoNumeric', 'isoNumeric', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for north field
            //
            $editor = new TextEdit('north_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('North', 'north', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for south field
            //
            $editor = new TextEdit('south_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('South', 'south', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for east field
            //
            $editor = new TextEdit('east_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('East', 'east', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for west field
            //
            $editor = new TextEdit('west_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('West', 'west', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for capital field
            //
            $editor = new TextEdit('capital_edit');
            $editor->SetSize(30);
            $editor->SetMaxLength(30);
            $editColumn = new CustomEditColumn('Capital', 'capital', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for continentName field
            //
            $editor = new TextEdit('continentname_edit');
            $editor->SetSize(15);
            $editor->SetMaxLength(15);
            $editColumn = new CustomEditColumn('ContinentName', 'continentName', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for continent field
            //
            $editor = new TextEdit('continent_edit');
            $editor->SetSize(2);
            $editor->SetMaxLength(2);
            $editColumn = new CustomEditColumn('Continent', 'continent', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for areaInSqKm field
            //
            $editor = new TextEdit('areainsqkm_edit');
            $editor->SetSize(20);
            $editor->SetMaxLength(20);
            $editColumn = new CustomEditColumn('AreaInSqKm', 'areaInSqKm', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for languages field
            //
            $editor = new TextEdit('languages_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Languages', 'languages', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for isoAlpha3 field
            //
            $editor = new TextEdit('isoalpha3_edit');
            $editor->SetSize(3);
            $editor->SetMaxLength(3);
            $editColumn = new CustomEditColumn('IsoAlpha3', 'isoAlpha3', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for geonameId field
            //
            $editor = new TextEdit('geonameid_edit');
            $editColumn = new CustomEditColumn('GeonameId', 'geonameId', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for type field
            //
            $editor = new TextEdit('type_edit');
            $editor->SetSize(45);
            $editor->SetMaxLength(45);
            $editColumn = new CustomEditColumn('Type', 'type', $editor, $this->dataset);
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
            // View column for countryCode field
            //
            $column = new TextViewColumn('countryCode', 'CountryCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for countryName field
            //
            $column = new TextViewColumn('countryName', 'CountryName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for currencyCode field
            //
            $column = new TextViewColumn('currencyCode', 'CurrencyCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for population field
            //
            $column = new TextViewColumn('population', 'Population', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for fipsCode field
            //
            $column = new TextViewColumn('fipsCode', 'FipsCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for isoNumeric field
            //
            $column = new TextViewColumn('isoNumeric', 'IsoNumeric', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for north field
            //
            $column = new TextViewColumn('north', 'North', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for south field
            //
            $column = new TextViewColumn('south', 'South', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for east field
            //
            $column = new TextViewColumn('east', 'East', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for west field
            //
            $column = new TextViewColumn('west', 'West', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for capital field
            //
            $column = new TextViewColumn('capital', 'Capital', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for continentName field
            //
            $column = new TextViewColumn('continentName', 'ContinentName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for continent field
            //
            $column = new TextViewColumn('continent', 'Continent', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for areaInSqKm field
            //
            $column = new TextViewColumn('areaInSqKm', 'AreaInSqKm', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for languages field
            //
            $column = new TextViewColumn('languages', 'Languages', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for isoAlpha3 field
            //
            $column = new TextViewColumn('isoAlpha3', 'IsoAlpha3', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for geonameId field
            //
            $column = new TextViewColumn('geonameId', 'GeonameId', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
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
            // View column for countryCode field
            //
            $column = new TextViewColumn('countryCode', 'CountryCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for countryName field
            //
            $column = new TextViewColumn('countryName', 'CountryName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for currencyCode field
            //
            $column = new TextViewColumn('currencyCode', 'CurrencyCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for population field
            //
            $column = new TextViewColumn('population', 'Population', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for fipsCode field
            //
            $column = new TextViewColumn('fipsCode', 'FipsCode', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for isoNumeric field
            //
            $column = new TextViewColumn('isoNumeric', 'IsoNumeric', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for north field
            //
            $column = new TextViewColumn('north', 'North', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for south field
            //
            $column = new TextViewColumn('south', 'South', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for east field
            //
            $column = new TextViewColumn('east', 'East', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for west field
            //
            $column = new TextViewColumn('west', 'West', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for capital field
            //
            $column = new TextViewColumn('capital', 'Capital', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for continentName field
            //
            $column = new TextViewColumn('continentName', 'ContinentName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for continent field
            //
            $column = new TextViewColumn('continent', 'Continent', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for areaInSqKm field
            //
            $column = new TextViewColumn('areaInSqKm', 'AreaInSqKm', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for languages field
            //
            $column = new TextViewColumn('languages', 'Languages', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for isoAlpha3 field
            //
            $column = new TextViewColumn('isoAlpha3', 'IsoAlpha3', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for geonameId field
            //
            $column = new TextViewColumn('geonameId', 'GeonameId', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Global_GeoNames_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_Global_GeoNamesGrid');
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
            // View column for languages field
            //
            $column = new TextViewColumn('languages', 'Languages', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Global_GeoNamesGrid_languages_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for languages field
            //
            $column = new TextViewColumn('languages', 'Languages', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Global_GeoNamesGrid_languages_handler_view', $column);
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
        $Page = new KBS_Global_GeoNamesPage("KBS_Global_GeoNames.php", "KBS_Global_GeoNames", GetCurrentUserGrantForDataSource("KBS_Global_GeoNames"), 'UTF-8');
        $Page->SetShortCaption('KBS Global GeoNames');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Global GeoNames');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Global_GeoNames"));
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
	

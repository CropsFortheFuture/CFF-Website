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
    
    
    
    class KBS_Agro_PathologyPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Agro_Pathology`');
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('disease_contr_agronomic');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('disease_contr_biological');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('disease_contr_chemical');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('disease_contr_integrated');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('disease_manage');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('pest_contr_agronomic');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('pest_contr_biological');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('pest_contr_chemical');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('pest_contr_integrated');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('pest_manage');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('weed_contr_agronomic');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('weed_contr_biological');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('weed_contr_chemical');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('weed_contr_integrated');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('weed_manage');
            $this->dataset->AddField($field, false);
            $field = new StringField('KBS_Pathologycol');
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
            $grid->SearchControl = new SimpleSearch('KBS_Agro_Pathologyssearch', $this->dataset,
                array('cropID', 'disease_contr_agronomic', 'disease_contr_biological', 'disease_contr_chemical', 'disease_contr_integrated', 'disease_manage', 'pest_contr_agronomic', 'pest_contr_biological', 'pest_contr_chemical', 'pest_contr_integrated', 'pest_manage', 'weed_contr_agronomic', 'weed_contr_biological', 'weed_contr_chemical', 'weed_contr_integrated', 'weed_manage', 'KBS_Pathologycol'),
                array($this->RenderText('CropID'), $this->RenderText('Disease Contr Agronomic'), $this->RenderText('Disease Contr Biological'), $this->RenderText('Disease Contr Chemical'), $this->RenderText('Disease Contr Integrated'), $this->RenderText('Disease Manage'), $this->RenderText('Pest Contr Agronomic'), $this->RenderText('Pest Contr Biological'), $this->RenderText('Pest Contr Chemical'), $this->RenderText('Pest Contr Integrated'), $this->RenderText('Pest Manage'), $this->RenderText('Weed Contr Agronomic'), $this->RenderText('Weed Contr Biological'), $this->RenderText('Weed Contr Chemical'), $this->RenderText('Weed Contr Integrated'), $this->RenderText('Weed Manage'), $this->RenderText('KBS Pathologycol')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Agro_Pathologyasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cropID', $this->RenderText('CropID')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('disease_contr_agronomic', $this->RenderText('Disease Contr Agronomic')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('disease_contr_biological', $this->RenderText('Disease Contr Biological')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('disease_contr_chemical', $this->RenderText('Disease Contr Chemical')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('disease_contr_integrated', $this->RenderText('Disease Contr Integrated')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('disease_manage', $this->RenderText('Disease Manage')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('pest_contr_agronomic', $this->RenderText('Pest Contr Agronomic')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('pest_contr_biological', $this->RenderText('Pest Contr Biological')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('pest_contr_chemical', $this->RenderText('Pest Contr Chemical')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('pest_contr_integrated', $this->RenderText('Pest Contr Integrated')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('pest_manage', $this->RenderText('Pest Manage')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('weed_contr_agronomic', $this->RenderText('Weed Contr Agronomic')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('weed_contr_biological', $this->RenderText('Weed Contr Biological')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('weed_contr_chemical', $this->RenderText('Weed Contr Chemical')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('weed_contr_integrated', $this->RenderText('Weed Contr Integrated')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('weed_manage', $this->RenderText('Weed Manage')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('KBS_Pathologycol', $this->RenderText('KBS Pathologycol')));
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
            // View column for disease_contr_agronomic field
            //
            $column = new TextViewColumn('disease_contr_agronomic', 'Disease Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for disease_contr_biological field
            //
            $column = new TextViewColumn('disease_contr_biological', 'Disease Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for disease_contr_chemical field
            //
            $column = new TextViewColumn('disease_contr_chemical', 'Disease Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for disease_contr_integrated field
            //
            $column = new TextViewColumn('disease_contr_integrated', 'Disease Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for disease_manage field
            //
            $column = new TextViewColumn('disease_manage', 'Disease Manage', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for pest_contr_agronomic field
            //
            $column = new TextViewColumn('pest_contr_agronomic', 'Pest Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for pest_contr_biological field
            //
            $column = new TextViewColumn('pest_contr_biological', 'Pest Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for pest_contr_chemical field
            //
            $column = new TextViewColumn('pest_contr_chemical', 'Pest Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for pest_contr_integrated field
            //
            $column = new TextViewColumn('pest_contr_integrated', 'Pest Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for pest_manage field
            //
            $column = new TextViewColumn('pest_manage', 'Pest Manage', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for weed_contr_agronomic field
            //
            $column = new TextViewColumn('weed_contr_agronomic', 'Weed Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for weed_contr_biological field
            //
            $column = new TextViewColumn('weed_contr_biological', 'Weed Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for weed_contr_chemical field
            //
            $column = new TextViewColumn('weed_contr_chemical', 'Weed Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for weed_contr_integrated field
            //
            $column = new TextViewColumn('weed_contr_integrated', 'Weed Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for weed_manage field
            //
            $column = new TextViewColumn('weed_manage', 'Weed Manage', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for KBS_Pathologycol field
            //
            $column = new TextViewColumn('KBS_Pathologycol', 'KBS Pathologycol', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_PathologyGrid_KBS_Pathologycol_handler_list');
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
            // View column for disease_contr_agronomic field
            //
            $column = new TextViewColumn('disease_contr_agronomic', 'Disease Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for disease_contr_biological field
            //
            $column = new TextViewColumn('disease_contr_biological', 'Disease Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for disease_contr_chemical field
            //
            $column = new TextViewColumn('disease_contr_chemical', 'Disease Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for disease_contr_integrated field
            //
            $column = new TextViewColumn('disease_contr_integrated', 'Disease Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for disease_manage field
            //
            $column = new TextViewColumn('disease_manage', 'Disease Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for pest_contr_agronomic field
            //
            $column = new TextViewColumn('pest_contr_agronomic', 'Pest Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for pest_contr_biological field
            //
            $column = new TextViewColumn('pest_contr_biological', 'Pest Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for pest_contr_chemical field
            //
            $column = new TextViewColumn('pest_contr_chemical', 'Pest Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for pest_contr_integrated field
            //
            $column = new TextViewColumn('pest_contr_integrated', 'Pest Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for pest_manage field
            //
            $column = new TextViewColumn('pest_manage', 'Pest Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for weed_contr_agronomic field
            //
            $column = new TextViewColumn('weed_contr_agronomic', 'Weed Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for weed_contr_biological field
            //
            $column = new TextViewColumn('weed_contr_biological', 'Weed Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for weed_contr_chemical field
            //
            $column = new TextViewColumn('weed_contr_chemical', 'Weed Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for weed_contr_integrated field
            //
            $column = new TextViewColumn('weed_contr_integrated', 'Weed Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for weed_manage field
            //
            $column = new TextViewColumn('weed_manage', 'Weed Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for KBS_Pathologycol field
            //
            $column = new TextViewColumn('KBS_Pathologycol', 'KBS Pathologycol', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_PathologyGrid_KBS_Pathologycol_handler_view');
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
            // Edit column for disease_contr_agronomic field
            //
            $editor = new TextEdit('disease_contr_agronomic_edit');
            $editColumn = new CustomEditColumn('Disease Contr Agronomic', 'disease_contr_agronomic', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for disease_contr_biological field
            //
            $editor = new TextEdit('disease_contr_biological_edit');
            $editColumn = new CustomEditColumn('Disease Contr Biological', 'disease_contr_biological', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for disease_contr_chemical field
            //
            $editor = new TextEdit('disease_contr_chemical_edit');
            $editColumn = new CustomEditColumn('Disease Contr Chemical', 'disease_contr_chemical', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for disease_contr_integrated field
            //
            $editor = new TextEdit('disease_contr_integrated_edit');
            $editColumn = new CustomEditColumn('Disease Contr Integrated', 'disease_contr_integrated', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for disease_manage field
            //
            $editor = new TextEdit('disease_manage_edit');
            $editColumn = new CustomEditColumn('Disease Manage', 'disease_manage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for pest_contr_agronomic field
            //
            $editor = new TextEdit('pest_contr_agronomic_edit');
            $editColumn = new CustomEditColumn('Pest Contr Agronomic', 'pest_contr_agronomic', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for pest_contr_biological field
            //
            $editor = new TextEdit('pest_contr_biological_edit');
            $editColumn = new CustomEditColumn('Pest Contr Biological', 'pest_contr_biological', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for pest_contr_chemical field
            //
            $editor = new TextEdit('pest_contr_chemical_edit');
            $editColumn = new CustomEditColumn('Pest Contr Chemical', 'pest_contr_chemical', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for pest_contr_integrated field
            //
            $editor = new TextEdit('pest_contr_integrated_edit');
            $editColumn = new CustomEditColumn('Pest Contr Integrated', 'pest_contr_integrated', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for pest_manage field
            //
            $editor = new TextEdit('pest_manage_edit');
            $editColumn = new CustomEditColumn('Pest Manage', 'pest_manage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for weed_contr_agronomic field
            //
            $editor = new TextEdit('weed_contr_agronomic_edit');
            $editColumn = new CustomEditColumn('Weed Contr Agronomic', 'weed_contr_agronomic', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for weed_contr_biological field
            //
            $editor = new TextEdit('weed_contr_biological_edit');
            $editColumn = new CustomEditColumn('Weed Contr Biological', 'weed_contr_biological', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for weed_contr_chemical field
            //
            $editor = new TextEdit('weed_contr_chemical_edit');
            $editColumn = new CustomEditColumn('Weed Contr Chemical', 'weed_contr_chemical', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for weed_contr_integrated field
            //
            $editor = new TextEdit('weed_contr_integrated_edit');
            $editColumn = new CustomEditColumn('Weed Contr Integrated', 'weed_contr_integrated', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for weed_manage field
            //
            $editor = new TextEdit('weed_manage_edit');
            $editColumn = new CustomEditColumn('Weed Manage', 'weed_manage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for KBS_Pathologycol field
            //
            $editor = new TextAreaEdit('kbs_pathologycol_edit', 50, 8);
            $editColumn = new CustomEditColumn('KBS Pathologycol', 'KBS_Pathologycol', $editor, $this->dataset);
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
            // Edit column for disease_contr_agronomic field
            //
            $editor = new TextEdit('disease_contr_agronomic_edit');
            $editColumn = new CustomEditColumn('Disease Contr Agronomic', 'disease_contr_agronomic', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for disease_contr_biological field
            //
            $editor = new TextEdit('disease_contr_biological_edit');
            $editColumn = new CustomEditColumn('Disease Contr Biological', 'disease_contr_biological', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for disease_contr_chemical field
            //
            $editor = new TextEdit('disease_contr_chemical_edit');
            $editColumn = new CustomEditColumn('Disease Contr Chemical', 'disease_contr_chemical', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for disease_contr_integrated field
            //
            $editor = new TextEdit('disease_contr_integrated_edit');
            $editColumn = new CustomEditColumn('Disease Contr Integrated', 'disease_contr_integrated', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for disease_manage field
            //
            $editor = new TextEdit('disease_manage_edit');
            $editColumn = new CustomEditColumn('Disease Manage', 'disease_manage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for pest_contr_agronomic field
            //
            $editor = new TextEdit('pest_contr_agronomic_edit');
            $editColumn = new CustomEditColumn('Pest Contr Agronomic', 'pest_contr_agronomic', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for pest_contr_biological field
            //
            $editor = new TextEdit('pest_contr_biological_edit');
            $editColumn = new CustomEditColumn('Pest Contr Biological', 'pest_contr_biological', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for pest_contr_chemical field
            //
            $editor = new TextEdit('pest_contr_chemical_edit');
            $editColumn = new CustomEditColumn('Pest Contr Chemical', 'pest_contr_chemical', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for pest_contr_integrated field
            //
            $editor = new TextEdit('pest_contr_integrated_edit');
            $editColumn = new CustomEditColumn('Pest Contr Integrated', 'pest_contr_integrated', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for pest_manage field
            //
            $editor = new TextEdit('pest_manage_edit');
            $editColumn = new CustomEditColumn('Pest Manage', 'pest_manage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for weed_contr_agronomic field
            //
            $editor = new TextEdit('weed_contr_agronomic_edit');
            $editColumn = new CustomEditColumn('Weed Contr Agronomic', 'weed_contr_agronomic', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for weed_contr_biological field
            //
            $editor = new TextEdit('weed_contr_biological_edit');
            $editColumn = new CustomEditColumn('Weed Contr Biological', 'weed_contr_biological', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for weed_contr_chemical field
            //
            $editor = new TextEdit('weed_contr_chemical_edit');
            $editColumn = new CustomEditColumn('Weed Contr Chemical', 'weed_contr_chemical', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for weed_contr_integrated field
            //
            $editor = new TextEdit('weed_contr_integrated_edit');
            $editColumn = new CustomEditColumn('Weed Contr Integrated', 'weed_contr_integrated', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for weed_manage field
            //
            $editor = new TextEdit('weed_manage_edit');
            $editColumn = new CustomEditColumn('Weed Manage', 'weed_manage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for KBS_Pathologycol field
            //
            $editor = new TextAreaEdit('kbs_pathologycol_edit', 50, 8);
            $editColumn = new CustomEditColumn('KBS Pathologycol', 'KBS_Pathologycol', $editor, $this->dataset);
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
            // View column for disease_contr_agronomic field
            //
            $column = new TextViewColumn('disease_contr_agronomic', 'Disease Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for disease_contr_biological field
            //
            $column = new TextViewColumn('disease_contr_biological', 'Disease Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for disease_contr_chemical field
            //
            $column = new TextViewColumn('disease_contr_chemical', 'Disease Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for disease_contr_integrated field
            //
            $column = new TextViewColumn('disease_contr_integrated', 'Disease Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for disease_manage field
            //
            $column = new TextViewColumn('disease_manage', 'Disease Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for pest_contr_agronomic field
            //
            $column = new TextViewColumn('pest_contr_agronomic', 'Pest Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for pest_contr_biological field
            //
            $column = new TextViewColumn('pest_contr_biological', 'Pest Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for pest_contr_chemical field
            //
            $column = new TextViewColumn('pest_contr_chemical', 'Pest Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for pest_contr_integrated field
            //
            $column = new TextViewColumn('pest_contr_integrated', 'Pest Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for pest_manage field
            //
            $column = new TextViewColumn('pest_manage', 'Pest Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for weed_contr_agronomic field
            //
            $column = new TextViewColumn('weed_contr_agronomic', 'Weed Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for weed_contr_biological field
            //
            $column = new TextViewColumn('weed_contr_biological', 'Weed Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for weed_contr_chemical field
            //
            $column = new TextViewColumn('weed_contr_chemical', 'Weed Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for weed_contr_integrated field
            //
            $column = new TextViewColumn('weed_contr_integrated', 'Weed Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for weed_manage field
            //
            $column = new TextViewColumn('weed_manage', 'Weed Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for KBS_Pathologycol field
            //
            $column = new TextViewColumn('KBS_Pathologycol', 'KBS Pathologycol', $this->dataset);
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
            // View column for disease_contr_agronomic field
            //
            $column = new TextViewColumn('disease_contr_agronomic', 'Disease Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for disease_contr_biological field
            //
            $column = new TextViewColumn('disease_contr_biological', 'Disease Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for disease_contr_chemical field
            //
            $column = new TextViewColumn('disease_contr_chemical', 'Disease Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for disease_contr_integrated field
            //
            $column = new TextViewColumn('disease_contr_integrated', 'Disease Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for disease_manage field
            //
            $column = new TextViewColumn('disease_manage', 'Disease Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for pest_contr_agronomic field
            //
            $column = new TextViewColumn('pest_contr_agronomic', 'Pest Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for pest_contr_biological field
            //
            $column = new TextViewColumn('pest_contr_biological', 'Pest Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for pest_contr_chemical field
            //
            $column = new TextViewColumn('pest_contr_chemical', 'Pest Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for pest_contr_integrated field
            //
            $column = new TextViewColumn('pest_contr_integrated', 'Pest Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for pest_manage field
            //
            $column = new TextViewColumn('pest_manage', 'Pest Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for weed_contr_agronomic field
            //
            $column = new TextViewColumn('weed_contr_agronomic', 'Weed Contr Agronomic', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for weed_contr_biological field
            //
            $column = new TextViewColumn('weed_contr_biological', 'Weed Contr Biological', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for weed_contr_chemical field
            //
            $column = new TextViewColumn('weed_contr_chemical', 'Weed Contr Chemical', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for weed_contr_integrated field
            //
            $column = new TextViewColumn('weed_contr_integrated', 'Weed Contr Integrated', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for weed_manage field
            //
            $column = new TextViewColumn('weed_manage', 'Weed Manage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for KBS_Pathologycol field
            //
            $column = new TextViewColumn('KBS_Pathologycol', 'KBS Pathologycol', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Agro_Pathology_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_Agro_PathologyGrid');
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
            // View column for KBS_Pathologycol field
            //
            $column = new TextViewColumn('KBS_Pathologycol', 'KBS Pathologycol', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_PathologyGrid_KBS_Pathologycol_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for KBS_Pathologycol field
            //
            $column = new TextViewColumn('KBS_Pathologycol', 'KBS Pathologycol', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_PathologyGrid_KBS_Pathologycol_handler_view', $column);
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
        $Page = new KBS_Agro_PathologyPage("KBS_Agro_Pathology.php", "KBS_Agro_Pathology", GetCurrentUserGrantForDataSource("KBS_Agro_Pathology"), 'UTF-8');
        $Page->SetShortCaption('KBS Agro Pathology');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Agro Pathology');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Agro_Pathology"));
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
	

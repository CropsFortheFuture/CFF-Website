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
    
    
    
    class KBS_MetadataPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Metadata`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('cropid');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('table_col_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('location_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('ref1');
            $this->dataset->AddField($field, false);
            $field = new StringField('src1');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref2');
            $this->dataset->AddField($field, false);
            $field = new StringField('src2');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref3');
            $this->dataset->AddField($field, false);
            $field = new StringField('src3');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref4');
            $this->dataset->AddField($field, false);
            $field = new StringField('src4');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref5');
            $this->dataset->AddField($field, false);
            $field = new StringField('src5');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref6');
            $this->dataset->AddField($field, false);
            $field = new StringField('src6');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref7');
            $this->dataset->AddField($field, false);
            $field = new StringField('src7');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref8');
            $this->dataset->AddField($field, false);
            $field = new StringField('src8');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref9');
            $this->dataset->AddField($field, false);
            $field = new StringField('src9');
            $this->dataset->AddField($field, false);
            $field = new StringField('ref10');
            $this->dataset->AddField($field, false);
            $field = new StringField('src10');
            $this->dataset->AddField($field, false);
            $field = new BlobField('image');
            $this->dataset->AddField($field, false);
            $field = new StringField('note');
            $this->dataset->AddField($field, false);
            $field = new BlobField('document');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('acc_flag');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('approval_flag');
            $this->dataset->AddField($field, false);
            $field = new StringField('contributor');
            $this->dataset->AddField($field, false);
            $field = new StringField('coverage');
            $this->dataset->AddField($field, false);
            $field = new StringField('creator');
            $this->dataset->AddField($field, false);
            $field = new DateField('date');
            $this->dataset->AddField($field, false);
            $field = new StringField('description');
            $this->dataset->AddField($field, false);
            $field = new StringField('format');
            $this->dataset->AddField($field, false);
            $field = new StringField('identifier');
            $this->dataset->AddField($field, false);
            $field = new StringField('language');
            $this->dataset->AddField($field, false);
            $field = new StringField('publisher');
            $this->dataset->AddField($field, false);
            $field = new StringField('relation');
            $this->dataset->AddField($field, false);
            $field = new StringField('rights');
            $this->dataset->AddField($field, false);
            $field = new StringField('source');
            $this->dataset->AddField($field, false);
            $field = new StringField('subject');
            $this->dataset->AddField($field, false);
            $field = new StringField('title');
            $this->dataset->AddField($field, false);
            $field = new StringField('type');
            $this->dataset->AddField($field, false);
            $this->dataset->AddLookupField('cropid', 'KBS_General', new IntegerField('cropID', null, null, true), new StringField('name_var_lndrce', 'cropid_name_var_lndrce', 'cropid_name_var_lndrce_KBS_General'), 'cropid_name_var_lndrce_KBS_General');
            $this->dataset->AddLookupField('location_id', 'KBS_Global_Google_PlaceID', new IntegerField('id', null, null, true), new StringField('google_address', 'location_id_google_address', 'location_id_google_address_KBS_Global_Google_PlaceID'), 'location_id_google_address_KBS_Global_Google_PlaceID');
            $this->dataset->AddLookupField('table_col_id', 'KBS_Metadata_tables_columns', new IntegerField('id', null, null, true), new StringField('table_col_name', 'table_col_id_table_col_name', 'table_col_id_table_col_name_KBS_Metadata_tables_columns'), 'table_col_id_table_col_name_KBS_Metadata_tables_columns');
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
            $grid->SearchControl = new SimpleSearch('KBS_Metadatassearch', $this->dataset,
                array('id', 'cropid_name_var_lndrce', 'location_id_google_address', 'ref1', 'src1', 'ref2', 'src2', 'ref3', 'src3', 'ref4', 'src4', 'ref5', 'src5', 'ref6', 'src6', 'ref7', 'src7', 'ref8', 'src8', 'ref9', 'src9', 'ref10', 'src10', 'note', 'acc_flag', 'approval_flag', 'contributor', 'coverage', 'creator', 'date', 'description', 'format', 'identifier', 'language', 'publisher', 'relation', 'rights', 'source', 'subject', 'title', 'type', 'image', 'document', 'table_col_id_table_col_name'),
                array($this->RenderText('Id'), $this->RenderText('Cropid'), $this->RenderText('Location Id'), $this->RenderText('Ref1'), $this->RenderText('Src1'), $this->RenderText('Ref2'), $this->RenderText('Src2'), $this->RenderText('Ref3'), $this->RenderText('Src3'), $this->RenderText('Ref4'), $this->RenderText('Src4'), $this->RenderText('Ref5'), $this->RenderText('Src5'), $this->RenderText('Ref6'), $this->RenderText('Src6'), $this->RenderText('Ref7'), $this->RenderText('Src7'), $this->RenderText('Ref8'), $this->RenderText('Src8'), $this->RenderText('Ref9'), $this->RenderText('Src9'), $this->RenderText('Ref10'), $this->RenderText('Src10'), $this->RenderText('Note'), $this->RenderText('Acc Flag'), $this->RenderText('Approval Flag'), $this->RenderText('Contributor'), $this->RenderText('Coverage'), $this->RenderText('Creator'), $this->RenderText('Date'), $this->RenderText('Description'), $this->RenderText('Format'), $this->RenderText('Identifier'), $this->RenderText('Language'), $this->RenderText('Publisher'), $this->RenderText('Relation'), $this->RenderText('Rights'), $this->RenderText('Source'), $this->RenderText('Subject'), $this->RenderText('Title'), $this->RenderText('Type'), $this->RenderText('Image'), $this->RenderText('Document'), $this->RenderText('Table Col Id')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Metadataasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
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
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref1', $this->RenderText('Ref1')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src1', $this->RenderText('Src1')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref2', $this->RenderText('Ref2')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src2', $this->RenderText('Src2')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref3', $this->RenderText('Ref3')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src3', $this->RenderText('Src3')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref4', $this->RenderText('Ref4')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src4', $this->RenderText('Src4')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref5', $this->RenderText('Ref5')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src5', $this->RenderText('Src5')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref6', $this->RenderText('Ref6')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src6', $this->RenderText('Src6')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref7', $this->RenderText('Ref7')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src7', $this->RenderText('Src7')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref8', $this->RenderText('Ref8')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src8', $this->RenderText('Src8')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref9', $this->RenderText('Ref9')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src9', $this->RenderText('Src9')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('ref10', $this->RenderText('Ref10')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('src10', $this->RenderText('Src10')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('note', $this->RenderText('Note')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('acc_flag', $this->RenderText('Acc Flag')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('approval_flag', $this->RenderText('Approval Flag')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('contributor', $this->RenderText('Contributor')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('coverage', $this->RenderText('Coverage')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('creator', $this->RenderText('Creator')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateDateTimeSearchInput('date', $this->RenderText('Date'), 'Y-m-d'));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('description', $this->RenderText('Description')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('format', $this->RenderText('Format')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('identifier', $this->RenderText('Identifier')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('language', $this->RenderText('Language')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('publisher', $this->RenderText('Publisher')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('relation', $this->RenderText('Relation')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('rights', $this->RenderText('Rights')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('source', $this->RenderText('Source')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('subject', $this->RenderText('Subject')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('title', $this->RenderText('Title')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('type', $this->RenderText('Type')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateBlobSearchInput('image', $this->RenderText('Image')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateBlobSearchInput('document', $this->RenderText('Document')));
            
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Metadata_tables_columns`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('table_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('col_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('table_col_name');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('table_col_name', GetOrderTypeAsSQL(otAscending));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateLookupSearchInput('table_col_id', $this->RenderText('Table Col Id'), $lookupDataset, 'id', 'table_col_name', false, 8));
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref1 field
            //
            $column = new TextViewColumn('ref1', 'Ref1', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref1_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src1 field
            //
            $column = new TextViewColumn('src1', 'Src1', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src1_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref2 field
            //
            $column = new TextViewColumn('ref2', 'Ref2', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref2_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src2 field
            //
            $column = new TextViewColumn('src2', 'Src2', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src2_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref3 field
            //
            $column = new TextViewColumn('ref3', 'Ref3', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref3_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src3 field
            //
            $column = new TextViewColumn('src3', 'Src3', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src3_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref4 field
            //
            $column = new TextViewColumn('ref4', 'Ref4', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref4_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src4 field
            //
            $column = new TextViewColumn('src4', 'Src4', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src4_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref5 field
            //
            $column = new TextViewColumn('ref5', 'Ref5', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref5_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src5 field
            //
            $column = new TextViewColumn('src5', 'Src5', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src5_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref6 field
            //
            $column = new TextViewColumn('ref6', 'Ref6', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref6_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src6 field
            //
            $column = new TextViewColumn('src6', 'Src6', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src6_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref7 field
            //
            $column = new TextViewColumn('ref7', 'Ref7', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref7_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src7 field
            //
            $column = new TextViewColumn('src7', 'Src7', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src7_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref8 field
            //
            $column = new TextViewColumn('ref8', 'Ref8', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref8_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src8 field
            //
            $column = new TextViewColumn('src8', 'Src8', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src8_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref9 field
            //
            $column = new TextViewColumn('ref9', 'Ref9', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref9_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src9 field
            //
            $column = new TextViewColumn('src9', 'Src9', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src9_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for ref10 field
            //
            $column = new TextViewColumn('ref10', 'Ref10', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref10_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for src10 field
            //
            $column = new TextViewColumn('src10', 'Src10', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src10_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for note field
            //
            $column = new TextViewColumn('note', 'Note', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_note_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for acc_flag field
            //
            $column = new TextViewColumn('acc_flag', 'Acc Flag', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for approval_flag field
            //
            $column = new TextViewColumn('approval_flag', 'Approval Flag', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for contributor field
            //
            $column = new TextViewColumn('contributor', 'Contributor', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_contributor_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for coverage field
            //
            $column = new TextViewColumn('coverage', 'Coverage', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_coverage_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for creator field
            //
            $column = new TextViewColumn('creator', 'Creator', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_creator_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for date field
            //
            $column = new DateTimeViewColumn('date', 'Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for description field
            //
            $column = new TextViewColumn('description', 'Description', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_description_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for format field
            //
            $column = new TextViewColumn('format', 'Format', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_format_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for identifier field
            //
            $column = new TextViewColumn('identifier', 'Identifier', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_identifier_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for language field
            //
            $column = new TextViewColumn('language', 'Language', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_language_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for publisher field
            //
            $column = new TextViewColumn('publisher', 'Publisher', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_publisher_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for relation field
            //
            $column = new TextViewColumn('relation', 'Relation', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_relation_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rights field
            //
            $column = new TextViewColumn('rights', 'Rights', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_rights_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for source field
            //
            $column = new TextViewColumn('source', 'Source', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_source_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for subject field
            //
            $column = new TextViewColumn('subject', 'Subject', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_subject_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for title field
            //
            $column = new TextViewColumn('title', 'Title', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_title_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_type_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for image field
            //
            $column = new DownloadDataColumn('image', 'Image', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for document field
            //
            $column = new DownloadDataColumn('document', 'Document', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for table_col_name field
            //
            $column = new TextViewColumn('table_col_id_table_col_name', 'Table Col Id', $this->dataset);
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
            // View column for name_var_lndrce field
            //
            $column = new TextViewColumn('cropid_name_var_lndrce', 'Cropid', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref1 field
            //
            $column = new TextViewColumn('ref1', 'Ref1', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref1_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src1 field
            //
            $column = new TextViewColumn('src1', 'Src1', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src1_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref2 field
            //
            $column = new TextViewColumn('ref2', 'Ref2', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref2_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src2 field
            //
            $column = new TextViewColumn('src2', 'Src2', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src2_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref3 field
            //
            $column = new TextViewColumn('ref3', 'Ref3', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref3_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src3 field
            //
            $column = new TextViewColumn('src3', 'Src3', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src3_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref4 field
            //
            $column = new TextViewColumn('ref4', 'Ref4', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref4_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src4 field
            //
            $column = new TextViewColumn('src4', 'Src4', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src4_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref5 field
            //
            $column = new TextViewColumn('ref5', 'Ref5', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref5_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src5 field
            //
            $column = new TextViewColumn('src5', 'Src5', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src5_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref6 field
            //
            $column = new TextViewColumn('ref6', 'Ref6', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref6_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src6 field
            //
            $column = new TextViewColumn('src6', 'Src6', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src6_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref7 field
            //
            $column = new TextViewColumn('ref7', 'Ref7', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref7_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src7 field
            //
            $column = new TextViewColumn('src7', 'Src7', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src7_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref8 field
            //
            $column = new TextViewColumn('ref8', 'Ref8', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref8_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src8 field
            //
            $column = new TextViewColumn('src8', 'Src8', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src8_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref9 field
            //
            $column = new TextViewColumn('ref9', 'Ref9', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref9_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src9 field
            //
            $column = new TextViewColumn('src9', 'Src9', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src9_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for ref10 field
            //
            $column = new TextViewColumn('ref10', 'Ref10', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_ref10_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for src10 field
            //
            $column = new TextViewColumn('src10', 'Src10', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_src10_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for note field
            //
            $column = new TextViewColumn('note', 'Note', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_note_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for acc_flag field
            //
            $column = new TextViewColumn('acc_flag', 'Acc Flag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for approval_flag field
            //
            $column = new TextViewColumn('approval_flag', 'Approval Flag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for contributor field
            //
            $column = new TextViewColumn('contributor', 'Contributor', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_contributor_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for coverage field
            //
            $column = new TextViewColumn('coverage', 'Coverage', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_coverage_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for creator field
            //
            $column = new TextViewColumn('creator', 'Creator', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_creator_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for date field
            //
            $column = new DateTimeViewColumn('date', 'Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for description field
            //
            $column = new TextViewColumn('description', 'Description', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_description_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for format field
            //
            $column = new TextViewColumn('format', 'Format', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_format_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for identifier field
            //
            $column = new TextViewColumn('identifier', 'Identifier', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_identifier_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for language field
            //
            $column = new TextViewColumn('language', 'Language', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_language_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for publisher field
            //
            $column = new TextViewColumn('publisher', 'Publisher', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_publisher_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for relation field
            //
            $column = new TextViewColumn('relation', 'Relation', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_relation_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rights field
            //
            $column = new TextViewColumn('rights', 'Rights', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_rights_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for source field
            //
            $column = new TextViewColumn('source', 'Source', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_source_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for subject field
            //
            $column = new TextViewColumn('subject', 'Subject', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_subject_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for title field
            //
            $column = new TextViewColumn('title', 'Title', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_title_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_MetadataGrid_type_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for image field
            //
            $column = new DownloadDataColumn('image', 'Image', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for document field
            //
            $column = new DownloadDataColumn('document', 'Document', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for table_col_name field
            //
            $column = new TextViewColumn('table_col_id_table_col_name', 'Table Col Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
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
            // Edit column for ref1 field
            //
            $editor = new TextAreaEdit('ref1_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref1', 'ref1', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src1 field
            //
            $editor = new TextAreaEdit('src1_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src1', 'src1', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref2 field
            //
            $editor = new TextAreaEdit('ref2_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref2', 'ref2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src2 field
            //
            $editor = new TextAreaEdit('src2_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src2', 'src2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref3 field
            //
            $editor = new TextAreaEdit('ref3_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref3', 'ref3', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src3 field
            //
            $editor = new TextAreaEdit('src3_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src3', 'src3', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref4 field
            //
            $editor = new TextAreaEdit('ref4_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref4', 'ref4', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src4 field
            //
            $editor = new TextAreaEdit('src4_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src4', 'src4', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref5 field
            //
            $editor = new TextAreaEdit('ref5_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref5', 'ref5', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src5 field
            //
            $editor = new TextAreaEdit('src5_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src5', 'src5', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref6 field
            //
            $editor = new TextAreaEdit('ref6_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref6', 'ref6', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src6 field
            //
            $editor = new TextAreaEdit('src6_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src6', 'src6', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref7 field
            //
            $editor = new TextAreaEdit('ref7_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref7', 'ref7', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src7 field
            //
            $editor = new TextAreaEdit('src7_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src7', 'src7', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref8 field
            //
            $editor = new TextAreaEdit('ref8_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref8', 'ref8', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src8 field
            //
            $editor = new TextAreaEdit('src8_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src8', 'src8', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref9 field
            //
            $editor = new TextAreaEdit('ref9_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref9', 'ref9', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src9 field
            //
            $editor = new TextAreaEdit('src9_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src9', 'src9', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for ref10 field
            //
            $editor = new TextAreaEdit('ref10_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref10', 'ref10', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for src10 field
            //
            $editor = new TextAreaEdit('src10_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src10', 'src10', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for note field
            //
            $editor = new TextAreaEdit('note_edit', 50, 8);
            $editColumn = new CustomEditColumn('Note', 'note', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for acc_flag field
            //
            $editor = new TextEdit('acc_flag_edit');
            $editColumn = new CustomEditColumn('Acc Flag', 'acc_flag', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for approval_flag field
            //
            $editor = new TextEdit('approval_flag_edit');
            $editColumn = new CustomEditColumn('Approval Flag', 'approval_flag', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for contributor field
            //
            $editor = new TextAreaEdit('contributor_edit', 50, 8);
            $editColumn = new CustomEditColumn('Contributor', 'contributor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for coverage field
            //
            $editor = new TextAreaEdit('coverage_edit', 50, 8);
            $editColumn = new CustomEditColumn('Coverage', 'coverage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for creator field
            //
            $editor = new TextAreaEdit('creator_edit', 50, 8);
            $editColumn = new CustomEditColumn('Creator', 'creator', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for date field
            //
            $editor = new DateTimeEdit('date_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Date', 'date', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for description field
            //
            $editor = new TextAreaEdit('description_edit', 50, 8);
            $editColumn = new CustomEditColumn('Description', 'description', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for format field
            //
            $editor = new TextAreaEdit('format_edit', 50, 8);
            $editColumn = new CustomEditColumn('Format', 'format', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for identifier field
            //
            $editor = new TextAreaEdit('identifier_edit', 50, 8);
            $editColumn = new CustomEditColumn('Identifier', 'identifier', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for language field
            //
            $editor = new TextAreaEdit('language_edit', 50, 8);
            $editColumn = new CustomEditColumn('Language', 'language', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for publisher field
            //
            $editor = new TextAreaEdit('publisher_edit', 50, 8);
            $editColumn = new CustomEditColumn('Publisher', 'publisher', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for relation field
            //
            $editor = new TextAreaEdit('relation_edit', 50, 8);
            $editColumn = new CustomEditColumn('Relation', 'relation', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rights field
            //
            $editor = new TextAreaEdit('rights_edit', 50, 8);
            $editColumn = new CustomEditColumn('Rights', 'rights', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for source field
            //
            $editor = new TextAreaEdit('source_edit', 50, 8);
            $editColumn = new CustomEditColumn('Source', 'source', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for subject field
            //
            $editor = new TextAreaEdit('subject_edit', 50, 8);
            $editColumn = new CustomEditColumn('Subject', 'subject', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for title field
            //
            $editor = new TextAreaEdit('title_edit', 50, 8);
            $editColumn = new CustomEditColumn('Title', 'title', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for type field
            //
            $editor = new TextAreaEdit('type_edit', 50, 8);
            $editColumn = new CustomEditColumn('Type', 'type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for image field
            //
            $editor = new ImageUploader('image_edit');
            $editor->SetShowImage(true);
            $editColumn = new FileUploadingColumn('Image', 'image', $editor, $this->dataset, false, false, 'KBS_MetadataGrid_image_handler_edit');
            $editColumn->SetAllowSetToNull(true);
            $editColumn->SetImageFilter(new NullFilter());
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for document field
            //
            $editor = new ImageUploader('document_edit');
            $editor->SetShowImage(false);
            $editColumn = new FileUploadingColumn('Document', 'document', $editor, $this->dataset, false, false, 'KBS_MetadataGrid_document_handler_edit');
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for table_col_id field
            //
            $editor = new ComboBox('table_col_id_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Metadata_tables_columns`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('table_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('col_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('table_col_name');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('table_col_name', GetOrderTypeAsSQL(otAscending));
            $editColumn = new LookUpEditColumn(
                'Table Col Id', 
                'table_col_id', 
                $editor, 
                $this->dataset, 'id', 'table_col_name', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
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
            // Edit column for ref1 field
            //
            $editor = new TextAreaEdit('ref1_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref1', 'ref1', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src1 field
            //
            $editor = new TextAreaEdit('src1_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src1', 'src1', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref2 field
            //
            $editor = new TextAreaEdit('ref2_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref2', 'ref2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src2 field
            //
            $editor = new TextAreaEdit('src2_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src2', 'src2', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref3 field
            //
            $editor = new TextAreaEdit('ref3_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref3', 'ref3', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src3 field
            //
            $editor = new TextAreaEdit('src3_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src3', 'src3', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref4 field
            //
            $editor = new TextAreaEdit('ref4_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref4', 'ref4', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src4 field
            //
            $editor = new TextAreaEdit('src4_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src4', 'src4', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref5 field
            //
            $editor = new TextAreaEdit('ref5_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref5', 'ref5', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src5 field
            //
            $editor = new TextAreaEdit('src5_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src5', 'src5', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref6 field
            //
            $editor = new TextAreaEdit('ref6_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref6', 'ref6', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src6 field
            //
            $editor = new TextAreaEdit('src6_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src6', 'src6', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref7 field
            //
            $editor = new TextAreaEdit('ref7_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref7', 'ref7', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src7 field
            //
            $editor = new TextAreaEdit('src7_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src7', 'src7', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref8 field
            //
            $editor = new TextAreaEdit('ref8_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref8', 'ref8', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src8 field
            //
            $editor = new TextAreaEdit('src8_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src8', 'src8', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref9 field
            //
            $editor = new TextAreaEdit('ref9_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref9', 'ref9', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src9 field
            //
            $editor = new TextAreaEdit('src9_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src9', 'src9', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for ref10 field
            //
            $editor = new TextAreaEdit('ref10_edit', 50, 8);
            $editColumn = new CustomEditColumn('Ref10', 'ref10', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for src10 field
            //
            $editor = new TextAreaEdit('src10_edit', 50, 8);
            $editColumn = new CustomEditColumn('Src10', 'src10', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for note field
            //
            $editor = new TextAreaEdit('note_edit', 50, 8);
            $editColumn = new CustomEditColumn('Note', 'note', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for acc_flag field
            //
            $editor = new TextEdit('acc_flag_edit');
            $editColumn = new CustomEditColumn('Acc Flag', 'acc_flag', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for approval_flag field
            //
            $editor = new TextEdit('approval_flag_edit');
            $editColumn = new CustomEditColumn('Approval Flag', 'approval_flag', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for contributor field
            //
            $editor = new TextAreaEdit('contributor_edit', 50, 8);
            $editColumn = new CustomEditColumn('Contributor', 'contributor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for coverage field
            //
            $editor = new TextAreaEdit('coverage_edit', 50, 8);
            $editColumn = new CustomEditColumn('Coverage', 'coverage', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for creator field
            //
            $editor = new TextAreaEdit('creator_edit', 50, 8);
            $editColumn = new CustomEditColumn('Creator', 'creator', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for date field
            //
            $editor = new DateTimeEdit('date_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Date', 'date', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for description field
            //
            $editor = new TextAreaEdit('description_edit', 50, 8);
            $editColumn = new CustomEditColumn('Description', 'description', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for format field
            //
            $editor = new TextAreaEdit('format_edit', 50, 8);
            $editColumn = new CustomEditColumn('Format', 'format', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for identifier field
            //
            $editor = new TextAreaEdit('identifier_edit', 50, 8);
            $editColumn = new CustomEditColumn('Identifier', 'identifier', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for language field
            //
            $editor = new TextAreaEdit('language_edit', 50, 8);
            $editColumn = new CustomEditColumn('Language', 'language', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for publisher field
            //
            $editor = new TextAreaEdit('publisher_edit', 50, 8);
            $editColumn = new CustomEditColumn('Publisher', 'publisher', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for relation field
            //
            $editor = new TextAreaEdit('relation_edit', 50, 8);
            $editColumn = new CustomEditColumn('Relation', 'relation', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rights field
            //
            $editor = new TextAreaEdit('rights_edit', 50, 8);
            $editColumn = new CustomEditColumn('Rights', 'rights', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for source field
            //
            $editor = new TextAreaEdit('source_edit', 50, 8);
            $editColumn = new CustomEditColumn('Source', 'source', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for subject field
            //
            $editor = new TextAreaEdit('subject_edit', 50, 8);
            $editColumn = new CustomEditColumn('Subject', 'subject', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for title field
            //
            $editor = new TextAreaEdit('title_edit', 50, 8);
            $editColumn = new CustomEditColumn('Title', 'title', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for type field
            //
            $editor = new TextAreaEdit('type_edit', 50, 8);
            $editColumn = new CustomEditColumn('Type', 'type', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for image field
            //
            $editor = new ImageUploader('image_edit');
            $editor->SetShowImage(true);
            $editColumn = new FileUploadingColumn('Image', 'image', $editor, $this->dataset, false, false, 'KBS_MetadataGrid_image_handler_insert');
            $editColumn->SetAllowSetToNull(true);
            $editColumn->SetImageFilter(new NullFilter());
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for document field
            //
            $editor = new ImageUploader('document_edit');
            $editor->SetShowImage(false);
            $editColumn = new FileUploadingColumn('Document', 'document', $editor, $this->dataset, false, false, 'KBS_MetadataGrid_document_handler_insert');
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for table_col_id field
            //
            $editor = new ComboBox('table_col_id_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $lookupDataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Metadata_tables_columns`');
            $field = new IntegerField('id', null, null, true);
            $field->SetIsNotNull(true);
            $lookupDataset->AddField($field, true);
            $field = new StringField('table_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('col_name');
            $lookupDataset->AddField($field, false);
            $field = new StringField('table_col_name');
            $lookupDataset->AddField($field, false);
            $lookupDataset->setOrderByField('table_col_name', GetOrderTypeAsSQL(otAscending));
            $editColumn = new LookUpEditColumn(
                'Table Col Id', 
                'table_col_id', 
                $editor, 
                $this->dataset, 'id', 'table_col_name', $lookupDataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref1 field
            //
            $column = new TextViewColumn('ref1', 'Ref1', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src1 field
            //
            $column = new TextViewColumn('src1', 'Src1', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref2 field
            //
            $column = new TextViewColumn('ref2', 'Ref2', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src2 field
            //
            $column = new TextViewColumn('src2', 'Src2', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref3 field
            //
            $column = new TextViewColumn('ref3', 'Ref3', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src3 field
            //
            $column = new TextViewColumn('src3', 'Src3', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref4 field
            //
            $column = new TextViewColumn('ref4', 'Ref4', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src4 field
            //
            $column = new TextViewColumn('src4', 'Src4', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref5 field
            //
            $column = new TextViewColumn('ref5', 'Ref5', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src5 field
            //
            $column = new TextViewColumn('src5', 'Src5', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref6 field
            //
            $column = new TextViewColumn('ref6', 'Ref6', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src6 field
            //
            $column = new TextViewColumn('src6', 'Src6', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref7 field
            //
            $column = new TextViewColumn('ref7', 'Ref7', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src7 field
            //
            $column = new TextViewColumn('src7', 'Src7', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref8 field
            //
            $column = new TextViewColumn('ref8', 'Ref8', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src8 field
            //
            $column = new TextViewColumn('src8', 'Src8', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref9 field
            //
            $column = new TextViewColumn('ref9', 'Ref9', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src9 field
            //
            $column = new TextViewColumn('src9', 'Src9', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for ref10 field
            //
            $column = new TextViewColumn('ref10', 'Ref10', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for src10 field
            //
            $column = new TextViewColumn('src10', 'Src10', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for note field
            //
            $column = new TextViewColumn('note', 'Note', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for acc_flag field
            //
            $column = new TextViewColumn('acc_flag', 'Acc Flag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for approval_flag field
            //
            $column = new TextViewColumn('approval_flag', 'Approval Flag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for contributor field
            //
            $column = new TextViewColumn('contributor', 'Contributor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for coverage field
            //
            $column = new TextViewColumn('coverage', 'Coverage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for creator field
            //
            $column = new TextViewColumn('creator', 'Creator', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for date field
            //
            $column = new DateTimeViewColumn('date', 'Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for description field
            //
            $column = new TextViewColumn('description', 'Description', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for format field
            //
            $column = new TextViewColumn('format', 'Format', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for identifier field
            //
            $column = new TextViewColumn('identifier', 'Identifier', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for language field
            //
            $column = new TextViewColumn('language', 'Language', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for publisher field
            //
            $column = new TextViewColumn('publisher', 'Publisher', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for relation field
            //
            $column = new TextViewColumn('relation', 'Relation', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rights field
            //
            $column = new TextViewColumn('rights', 'Rights', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for source field
            //
            $column = new TextViewColumn('source', 'Source', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for subject field
            //
            $column = new TextViewColumn('subject', 'Subject', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for title field
            //
            $column = new TextViewColumn('title', 'Title', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for image field
            //
            $column = new DownloadDataColumn('image', 'Image', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddPrintColumn($column);
            
            //
            // View column for document field
            //
            $column = new DownloadDataColumn('document', 'Document', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddPrintColumn($column);
            
            //
            // View column for table_col_name field
            //
            $column = new TextViewColumn('table_col_id_table_col_name', 'Table Col Id', $this->dataset);
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
            // View column for google_address field
            //
            $column = new TextViewColumn('location_id_google_address', 'Location Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref1 field
            //
            $column = new TextViewColumn('ref1', 'Ref1', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src1 field
            //
            $column = new TextViewColumn('src1', 'Src1', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref2 field
            //
            $column = new TextViewColumn('ref2', 'Ref2', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src2 field
            //
            $column = new TextViewColumn('src2', 'Src2', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref3 field
            //
            $column = new TextViewColumn('ref3', 'Ref3', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src3 field
            //
            $column = new TextViewColumn('src3', 'Src3', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref4 field
            //
            $column = new TextViewColumn('ref4', 'Ref4', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src4 field
            //
            $column = new TextViewColumn('src4', 'Src4', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref5 field
            //
            $column = new TextViewColumn('ref5', 'Ref5', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src5 field
            //
            $column = new TextViewColumn('src5', 'Src5', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref6 field
            //
            $column = new TextViewColumn('ref6', 'Ref6', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src6 field
            //
            $column = new TextViewColumn('src6', 'Src6', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref7 field
            //
            $column = new TextViewColumn('ref7', 'Ref7', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src7 field
            //
            $column = new TextViewColumn('src7', 'Src7', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref8 field
            //
            $column = new TextViewColumn('ref8', 'Ref8', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src8 field
            //
            $column = new TextViewColumn('src8', 'Src8', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref9 field
            //
            $column = new TextViewColumn('ref9', 'Ref9', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src9 field
            //
            $column = new TextViewColumn('src9', 'Src9', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for ref10 field
            //
            $column = new TextViewColumn('ref10', 'Ref10', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for src10 field
            //
            $column = new TextViewColumn('src10', 'Src10', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for note field
            //
            $column = new TextViewColumn('note', 'Note', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for acc_flag field
            //
            $column = new TextViewColumn('acc_flag', 'Acc Flag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for approval_flag field
            //
            $column = new TextViewColumn('approval_flag', 'Approval Flag', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for contributor field
            //
            $column = new TextViewColumn('contributor', 'Contributor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for coverage field
            //
            $column = new TextViewColumn('coverage', 'Coverage', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for creator field
            //
            $column = new TextViewColumn('creator', 'Creator', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for date field
            //
            $column = new DateTimeViewColumn('date', 'Date', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for description field
            //
            $column = new TextViewColumn('description', 'Description', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for format field
            //
            $column = new TextViewColumn('format', 'Format', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for identifier field
            //
            $column = new TextViewColumn('identifier', 'Identifier', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for language field
            //
            $column = new TextViewColumn('language', 'Language', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for publisher field
            //
            $column = new TextViewColumn('publisher', 'Publisher', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for relation field
            //
            $column = new TextViewColumn('relation', 'Relation', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rights field
            //
            $column = new TextViewColumn('rights', 'Rights', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for source field
            //
            $column = new TextViewColumn('source', 'Source', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for subject field
            //
            $column = new TextViewColumn('subject', 'Subject', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for title field
            //
            $column = new TextViewColumn('title', 'Title', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for image field
            //
            $column = new DownloadDataColumn('image', 'Image', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddExportColumn($column);
            
            //
            // View column for document field
            //
            $column = new DownloadDataColumn('document', 'Document', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddExportColumn($column);
            
            //
            // View column for table_col_name field
            //
            $column = new TextViewColumn('table_col_id_table_col_name', 'Table Col Id', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Metadata_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_MetadataGrid');
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
            // View column for ref1 field
            //
            $column = new TextViewColumn('ref1', 'Ref1', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref1_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src1 field
            //
            $column = new TextViewColumn('src1', 'Src1', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src1_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref2 field
            //
            $column = new TextViewColumn('ref2', 'Ref2', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref2_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src2 field
            //
            $column = new TextViewColumn('src2', 'Src2', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src2_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref3 field
            //
            $column = new TextViewColumn('ref3', 'Ref3', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref3_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src3 field
            //
            $column = new TextViewColumn('src3', 'Src3', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src3_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref4 field
            //
            $column = new TextViewColumn('ref4', 'Ref4', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref4_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src4 field
            //
            $column = new TextViewColumn('src4', 'Src4', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src4_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref5 field
            //
            $column = new TextViewColumn('ref5', 'Ref5', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref5_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src5 field
            //
            $column = new TextViewColumn('src5', 'Src5', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src5_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref6 field
            //
            $column = new TextViewColumn('ref6', 'Ref6', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref6_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src6 field
            //
            $column = new TextViewColumn('src6', 'Src6', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src6_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref7 field
            //
            $column = new TextViewColumn('ref7', 'Ref7', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref7_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src7 field
            //
            $column = new TextViewColumn('src7', 'Src7', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src7_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref8 field
            //
            $column = new TextViewColumn('ref8', 'Ref8', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref8_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src8 field
            //
            $column = new TextViewColumn('src8', 'Src8', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src8_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref9 field
            //
            $column = new TextViewColumn('ref9', 'Ref9', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref9_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src9 field
            //
            $column = new TextViewColumn('src9', 'Src9', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src9_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref10 field
            //
            $column = new TextViewColumn('ref10', 'Ref10', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref10_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src10 field
            //
            $column = new TextViewColumn('src10', 'Src10', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src10_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for note field
            //
            $column = new TextViewColumn('note', 'Note', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_note_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for contributor field
            //
            $column = new TextViewColumn('contributor', 'Contributor', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_contributor_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for coverage field
            //
            $column = new TextViewColumn('coverage', 'Coverage', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_coverage_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for creator field
            //
            $column = new TextViewColumn('creator', 'Creator', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_creator_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for description field
            //
            $column = new TextViewColumn('description', 'Description', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_description_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for format field
            //
            $column = new TextViewColumn('format', 'Format', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_format_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for identifier field
            //
            $column = new TextViewColumn('identifier', 'Identifier', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_identifier_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for language field
            //
            $column = new TextViewColumn('language', 'Language', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_language_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for publisher field
            //
            $column = new TextViewColumn('publisher', 'Publisher', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_publisher_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for relation field
            //
            $column = new TextViewColumn('relation', 'Relation', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_relation_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for rights field
            //
            $column = new TextViewColumn('rights', 'Rights', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_rights_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for source field
            //
            $column = new TextViewColumn('source', 'Source', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_source_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for subject field
            //
            $column = new TextViewColumn('subject', 'Subject', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_subject_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for title field
            //
            $column = new TextViewColumn('title', 'Title', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_title_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_type_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'image', 'image_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'document', 'document_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for ref1 field
            //
            $column = new TextViewColumn('ref1', 'Ref1', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref1_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src1 field
            //
            $column = new TextViewColumn('src1', 'Src1', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src1_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref2 field
            //
            $column = new TextViewColumn('ref2', 'Ref2', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref2_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src2 field
            //
            $column = new TextViewColumn('src2', 'Src2', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src2_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref3 field
            //
            $column = new TextViewColumn('ref3', 'Ref3', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref3_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src3 field
            //
            $column = new TextViewColumn('src3', 'Src3', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src3_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref4 field
            //
            $column = new TextViewColumn('ref4', 'Ref4', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref4_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src4 field
            //
            $column = new TextViewColumn('src4', 'Src4', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src4_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref5 field
            //
            $column = new TextViewColumn('ref5', 'Ref5', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref5_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src5 field
            //
            $column = new TextViewColumn('src5', 'Src5', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src5_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref6 field
            //
            $column = new TextViewColumn('ref6', 'Ref6', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref6_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src6 field
            //
            $column = new TextViewColumn('src6', 'Src6', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src6_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref7 field
            //
            $column = new TextViewColumn('ref7', 'Ref7', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref7_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src7 field
            //
            $column = new TextViewColumn('src7', 'Src7', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src7_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref8 field
            //
            $column = new TextViewColumn('ref8', 'Ref8', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref8_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src8 field
            //
            $column = new TextViewColumn('src8', 'Src8', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src8_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref9 field
            //
            $column = new TextViewColumn('ref9', 'Ref9', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref9_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src9 field
            //
            $column = new TextViewColumn('src9', 'Src9', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src9_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for ref10 field
            //
            $column = new TextViewColumn('ref10', 'Ref10', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_ref10_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for src10 field
            //
            $column = new TextViewColumn('src10', 'Src10', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_src10_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for note field
            //
            $column = new TextViewColumn('note', 'Note', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_note_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for contributor field
            //
            $column = new TextViewColumn('contributor', 'Contributor', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_contributor_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for coverage field
            //
            $column = new TextViewColumn('coverage', 'Coverage', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_coverage_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for creator field
            //
            $column = new TextViewColumn('creator', 'Creator', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_creator_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for description field
            //
            $column = new TextViewColumn('description', 'Description', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_description_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for format field
            //
            $column = new TextViewColumn('format', 'Format', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_format_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for identifier field
            //
            $column = new TextViewColumn('identifier', 'Identifier', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_identifier_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for language field
            //
            $column = new TextViewColumn('language', 'Language', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_language_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for publisher field
            //
            $column = new TextViewColumn('publisher', 'Publisher', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_publisher_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for relation field
            //
            $column = new TextViewColumn('relation', 'Relation', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_relation_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for rights field
            //
            $column = new TextViewColumn('rights', 'Rights', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_rights_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for source field
            //
            $column = new TextViewColumn('source', 'Source', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_source_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for subject field
            //
            $column = new TextViewColumn('subject', 'Subject', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_subject_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for title field
            //
            $column = new TextViewColumn('title', 'Title', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_title_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for type field
            //
            $column = new TextViewColumn('type', 'Type', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_MetadataGrid_type_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'image', 'image_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'document', 'document_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'image', 'KBS_MetadataGrid_image_handler_edit', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'document', 'KBS_MetadataGrid_document_handler_edit', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'image', 'KBS_MetadataGrid_image_handler_insert', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'document', 'KBS_MetadataGrid_document_handler_insert', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'image', 'image_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'document', 'document_handler', '', '', true);
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
        $Page = new KBS_MetadataPage("KBS_Metadata.php", "KBS_Metadata", GetCurrentUserGrantForDataSource("KBS_Metadata"), 'UTF-8');
        $Page->SetShortCaption('KBS Metadata');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Metadata');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Metadata"));
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
	

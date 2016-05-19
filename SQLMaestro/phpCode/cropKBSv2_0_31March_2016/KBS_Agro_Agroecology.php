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
    
    
    
    class KBS_Agro_AgroecologyPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new MyConnectionFactory(),
                GetConnectionOptions(),
                '`KBS_Agro_Agroecology`');
            $field = new IntegerField('cropID');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('agr_ecol_zone_A');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_zone_B');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_zone_C');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_zone_D');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_zone_E');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_temp_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_temp_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_temp_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_temp_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_temp_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_temp_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_rain_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_rain_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_rain_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_rain_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_rain_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abst_rain_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_lat_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_lat_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_lat_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_lat_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_lat_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_lat_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_alt_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_alt_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_alt_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_alt_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_alt_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_alt_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_ph_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_ph_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_ph_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_ph_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_ph_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_ph_min');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_li_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_li_mean');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_opt_li_min');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_li_max');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_li_mean');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_abs_li_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soildp_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soildp_medium');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soildp_deep');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soildp_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soildp_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soildp_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soiltxt_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soiltxt_med');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soiltxt_heavy');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soiltxt_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soiltxt_med');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soiltxt_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilfert_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilfert_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilfert_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilfert_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilfert_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilfert_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilAltox_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilAltox_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilAltox_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilAltox_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilAltox_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilAltox_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilsalinity_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilsalinity_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soilsalinity_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilsalinity_low');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilsalinity_moderate');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soilsalinity_high');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soildrainage_poor');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soildrainage_well');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_opt_soildrainagex_excessive');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soildrainagex_poor');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soildrainage_well');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_abs_soildrainage_excessive');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_clim_zone');
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
            $field = new IntegerField('agr_ecol_phoprod_short');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_phoprod_medium');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_phoprod_long');
            $this->dataset->AddField($field, false);
            $field = new StringField('agr_ecol_prdctn_system');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_aspect_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_aspect_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_aspect_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('water-requir_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('water-requir_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('water-requir_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_slope_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_slope_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_slope_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_clay_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_clay_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_clay_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_sand_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_sand_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_sand_min');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_silt_max');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_silt_mean');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('agr_ecol_silt_min');
            $this->dataset->AddField($field, false);
            $field = new StringField('kbs_agroecol_others');
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
            $grid->SearchControl = new SimpleSearch('KBS_Agro_Agroecologyssearch', $this->dataset,
                array('cropID', 'agr_ecol_zone_A', 'agr_ecol_zone_B', 'agr_ecol_zone_C', 'agr_ecol_zone_D', 'agr_ecol_zone_E', 'agr_ecol_opt_temp_max', 'agr_ecol_opt_temp_mean', 'agr_ecol_opt_temp_min', 'agr_ecol_abs_temp_max', 'agr_ecol_abs_temp_mean', 'agr_ecol_abs_temp_min', 'agr_ecol_opt_rain_max', 'agr_ecol_opt_rain_mean', 'agr_ecol_opt_rain_min', 'agr_ecol_abs_rain_max', 'agr_ecol_abs_rain_mean', 'agr_ecol_abst_rain_min', 'agr_ecol_opt_lat_max', 'agr_ecol_opt_lat_mean', 'agr_ecol_opt_lat_min', 'agr_ecol_abs_lat_max', 'agr_ecol_abs_lat_mean', 'agr_ecol_abs_lat_min', 'agr_ecol_opt_alt_max', 'agr_ecol_opt_alt_mean', 'agr_ecol_opt_alt_min', 'agr_ecol_abs_alt_max', 'agr_ecol_abs_alt_mean', 'agr_ecol_abs_alt_min', 'agr_ecol_opt_ph_max', 'agr_ecol_opt_ph_mean', 'agr_ecol_opt_ph_min', 'agr_ecol_abs_ph_max', 'agr_ecol_abs_ph_mean', 'agr_ecol_abs_ph_min', 'agr_ecol_opt_li_max', 'agr_ecol_opt_li_mean', 'agr_ecol_opt_li_min', 'agr_ecol_abs_li_max', 'agr_ecol_abs_li_mean', 'agr_ecol_abs_li_min', 'agr_ecol_opt_soildp_low', 'agr_ecol_opt_soildp_medium', 'agr_ecol_opt_soildp_deep', 'agr_ecol_abs_soildp_max', 'agr_ecol_abs_soildp_mean', 'agr_ecol_abs_soildp_min', 'agr_ecol_opt_soiltxt_low', 'agr_ecol_opt_soiltxt_med', 'agr_ecol_opt_soiltxt_heavy', 'agr_ecol_abs_soiltxt_low', 'agr_ecol_abs_soiltxt_med', 'agr_ecol_abs_soiltxt_high', 'agr_ecol_opt_soilfert_low', 'agr_ecol_opt_soilfert_moderate', 'agr_ecol_opt_soilfert_high', 'agr_ecol_abs_soilfert_low', 'agr_ecol_abs_soilfert_moderate', 'agr_ecol_abs_soilfert_high', 'agr_ecol_opt_soilAltox_low', 'agr_ecol_opt_soilAltox_moderate', 'agr_ecol_opt_soilAltox_high', 'agr_ecol_abs_soilAltox_low', 'agr_ecol_abs_soilAltox_moderate', 'agr_ecol_abs_soilAltox_high', 'agr_ecol_opt_soilsalinity_low', 'agr_ecol_opt_soilsalinity_moderate', 'agr_ecol_opt_soilsalinity_high', 'agr_ecol_abs_soilsalinity_low', 'agr_ecol_abs_soilsalinity_moderate', 'agr_ecol_abs_soilsalinity_high', 'agr_ecol_opt_soildrainage_poor', 'agr_ecol_opt_soildrainage_well', 'agr_ecol_opt_soildrainagex_excessive', 'agr_ecol_abs_soildrainagex_poor', 'agr_ecol_abs_soildrainage_well', 'agr_ecol_abs_soildrainage_excessive', 'agr_ecol_clim_zone', 'agr_ecol_kiltemp_rest', 'agr_ecol_kiltemp_earlygrowth', 'agr_ecol_abio_toler', 'agr_ecol_abio_suscept', 'agr_ecol_intro_risk', 'agr_ecol_phoprod_short', 'agr_ecol_phoprod_medium', 'agr_ecol_phoprod_long', 'agr_ecol_prdctn_system', 'agr_ecol_aspect_max', 'agr_ecol_aspect_mean', 'agr_ecol_aspect_min', 'water-requir_max', 'water-requir_mean', 'water-requir_min', 'agr_ecol_slope_max', 'agr_ecol_slope_mean', 'agr_ecol_slope_min', 'agr_ecol_clay_max', 'agr_ecol_clay_mean', 'agr_ecol_clay_min', 'agr_ecol_sand_max', 'agr_ecol_sand_mean', 'agr_ecol_sand_min', 'agr_ecol_silt_max', 'agr_ecol_silt_mean', 'agr_ecol_silt_min', 'kbs_agroecol_others'),
                array($this->RenderText('CropID'), $this->RenderText('Agr Ecol Zone A'), $this->RenderText('Agr Ecol Zone B'), $this->RenderText('Agr Ecol Zone C'), $this->RenderText('Agr Ecol Zone D'), $this->RenderText('Agr Ecol Zone E'), $this->RenderText('Agr Ecol Opt Temp Max'), $this->RenderText('Agr Ecol Opt Temp Mean'), $this->RenderText('Agr Ecol Opt Temp Min'), $this->RenderText('Agr Ecol Abs Temp Max'), $this->RenderText('Agr Ecol Abs Temp Mean'), $this->RenderText('Agr Ecol Abs Temp Min'), $this->RenderText('Agr Ecol Opt Rain Max'), $this->RenderText('Agr Ecol Opt Rain Mean'), $this->RenderText('Agr Ecol Opt Rain Min'), $this->RenderText('Agr Ecol Abs Rain Max'), $this->RenderText('Agr Ecol Abs Rain Mean'), $this->RenderText('Agr Ecol Abst Rain Min'), $this->RenderText('Agr Ecol Opt Lat Max'), $this->RenderText('Agr Ecol Opt Lat Mean'), $this->RenderText('Agr Ecol Opt Lat Min'), $this->RenderText('Agr Ecol Abs Lat Max'), $this->RenderText('Agr Ecol Abs Lat Mean'), $this->RenderText('Agr Ecol Abs Lat Min'), $this->RenderText('Agr Ecol Opt Alt Max'), $this->RenderText('Agr Ecol Opt Alt Mean'), $this->RenderText('Agr Ecol Opt Alt Min'), $this->RenderText('Agr Ecol Abs Alt Max'), $this->RenderText('Agr Ecol Abs Alt Mean'), $this->RenderText('Agr Ecol Abs Alt Min'), $this->RenderText('Agr Ecol Opt Ph Max'), $this->RenderText('Agr Ecol Opt Ph Mean'), $this->RenderText('Agr Ecol Opt Ph Min'), $this->RenderText('Agr Ecol Abs Ph Max'), $this->RenderText('Agr Ecol Abs Ph Mean'), $this->RenderText('Agr Ecol Abs Ph Min'), $this->RenderText('Agr Ecol Opt Li Max'), $this->RenderText('Agr Ecol Opt Li Mean'), $this->RenderText('Agr Ecol Opt Li Min'), $this->RenderText('Agr Ecol Abs Li Max'), $this->RenderText('Agr Ecol Abs Li Mean'), $this->RenderText('Agr Ecol Abs Li Min'), $this->RenderText('Agr Ecol Opt Soildp Low'), $this->RenderText('Agr Ecol Opt Soildp Medium'), $this->RenderText('Agr Ecol Opt Soildp Deep'), $this->RenderText('Agr Ecol Abs Soildp Max'), $this->RenderText('Agr Ecol Abs Soildp Mean'), $this->RenderText('Agr Ecol Abs Soildp Min'), $this->RenderText('Agr Ecol Opt Soiltxt Low'), $this->RenderText('Agr Ecol Opt Soiltxt Med'), $this->RenderText('Agr Ecol Opt Soiltxt Heavy'), $this->RenderText('Agr Ecol Abs Soiltxt Low'), $this->RenderText('Agr Ecol Abs Soiltxt Med'), $this->RenderText('Agr Ecol Abs Soiltxt High'), $this->RenderText('Agr Ecol Opt Soilfert Low'), $this->RenderText('Agr Ecol Opt Soilfert Moderate'), $this->RenderText('Agr Ecol Opt Soilfert High'), $this->RenderText('Agr Ecol Abs Soilfert Low'), $this->RenderText('Agr Ecol Abs Soilfert Moderate'), $this->RenderText('Agr Ecol Abs Soilfert High'), $this->RenderText('Agr Ecol Opt SoilAltox Low'), $this->RenderText('Agr Ecol Opt SoilAltox Moderate'), $this->RenderText('Agr Ecol Opt SoilAltox High'), $this->RenderText('Agr Ecol Abs SoilAltox Low'), $this->RenderText('Agr Ecol Abs SoilAltox Moderate'), $this->RenderText('Agr Ecol Abs SoilAltox High'), $this->RenderText('Agr Ecol Opt Soilsalinity Low'), $this->RenderText('Agr Ecol Opt Soilsalinity Moderate'), $this->RenderText('Agr Ecol Opt Soilsalinity High'), $this->RenderText('Agr Ecol Abs Soilsalinity Low'), $this->RenderText('Agr Ecol Abs Soilsalinity Moderate'), $this->RenderText('Agr Ecol Abs Soilsalinity High'), $this->RenderText('Agr Ecol Opt Soildrainage Poor'), $this->RenderText('Agr Ecol Opt Soildrainage Well'), $this->RenderText('Agr Ecol Opt Soildrainagex Excessive'), $this->RenderText('Agr Ecol Abs Soildrainagex Poor'), $this->RenderText('Agr Ecol Abs Soildrainage Well'), $this->RenderText('Agr Ecol Abs Soildrainage Excessive'), $this->RenderText('Agr Ecol Clim Zone'), $this->RenderText('Agr Ecol Kiltemp Rest'), $this->RenderText('Agr Ecol Kiltemp Earlygrowth'), $this->RenderText('Agr Ecol Abio Toler'), $this->RenderText('Agr Ecol Abio Suscept'), $this->RenderText('Agr Ecol Intro Risk'), $this->RenderText('Agr Ecol Phoprod Short'), $this->RenderText('Agr Ecol Phoprod Medium'), $this->RenderText('Agr Ecol Phoprod Long'), $this->RenderText('Agr Ecol Prdctn System'), $this->RenderText('Agr Ecol Aspect Max'), $this->RenderText('Agr Ecol Aspect Mean'), $this->RenderText('Agr Ecol Aspect Min'), $this->RenderText('Water-requir Max'), $this->RenderText('Water-requir Mean'), $this->RenderText('Water-requir Min'), $this->RenderText('Agr Ecol Slope Max'), $this->RenderText('Agr Ecol Slope Mean'), $this->RenderText('Agr Ecol Slope Min'), $this->RenderText('Agr Ecol Clay Max'), $this->RenderText('Agr Ecol Clay Mean'), $this->RenderText('Agr Ecol Clay Min'), $this->RenderText('Agr Ecol Sand Max'), $this->RenderText('Agr Ecol Sand Mean'), $this->RenderText('Agr Ecol Sand Min'), $this->RenderText('Agr Ecol Silt Max'), $this->RenderText('Agr Ecol Silt Mean'), $this->RenderText('Agr Ecol Silt Min'), $this->RenderText('Kbs Agroecol Others')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('KBS_Agro_Agroecologyasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('cropID', $this->RenderText('CropID')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_zone_A', $this->RenderText('Agr Ecol Zone A')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_zone_B', $this->RenderText('Agr Ecol Zone B')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_zone_C', $this->RenderText('Agr Ecol Zone C')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_zone_D', $this->RenderText('Agr Ecol Zone D')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_zone_E', $this->RenderText('Agr Ecol Zone E')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_temp_max', $this->RenderText('Agr Ecol Opt Temp Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_temp_mean', $this->RenderText('Agr Ecol Opt Temp Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_temp_min', $this->RenderText('Agr Ecol Opt Temp Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_temp_max', $this->RenderText('Agr Ecol Abs Temp Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_temp_mean', $this->RenderText('Agr Ecol Abs Temp Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_temp_min', $this->RenderText('Agr Ecol Abs Temp Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_rain_max', $this->RenderText('Agr Ecol Opt Rain Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_rain_mean', $this->RenderText('Agr Ecol Opt Rain Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_rain_min', $this->RenderText('Agr Ecol Opt Rain Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_rain_max', $this->RenderText('Agr Ecol Abs Rain Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_rain_mean', $this->RenderText('Agr Ecol Abs Rain Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abst_rain_min', $this->RenderText('Agr Ecol Abst Rain Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_lat_max', $this->RenderText('Agr Ecol Opt Lat Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_lat_mean', $this->RenderText('Agr Ecol Opt Lat Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_lat_min', $this->RenderText('Agr Ecol Opt Lat Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_lat_max', $this->RenderText('Agr Ecol Abs Lat Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_lat_mean', $this->RenderText('Agr Ecol Abs Lat Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_lat_min', $this->RenderText('Agr Ecol Abs Lat Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_alt_max', $this->RenderText('Agr Ecol Opt Alt Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_alt_mean', $this->RenderText('Agr Ecol Opt Alt Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_alt_min', $this->RenderText('Agr Ecol Opt Alt Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_alt_max', $this->RenderText('Agr Ecol Abs Alt Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_alt_mean', $this->RenderText('Agr Ecol Abs Alt Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_alt_min', $this->RenderText('Agr Ecol Abs Alt Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_ph_max', $this->RenderText('Agr Ecol Opt Ph Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_ph_mean', $this->RenderText('Agr Ecol Opt Ph Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_ph_min', $this->RenderText('Agr Ecol Opt Ph Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_ph_max', $this->RenderText('Agr Ecol Abs Ph Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_ph_mean', $this->RenderText('Agr Ecol Abs Ph Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_ph_min', $this->RenderText('Agr Ecol Abs Ph Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_li_max', $this->RenderText('Agr Ecol Opt Li Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_li_mean', $this->RenderText('Agr Ecol Opt Li Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_li_min', $this->RenderText('Agr Ecol Opt Li Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_li_max', $this->RenderText('Agr Ecol Abs Li Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_li_mean', $this->RenderText('Agr Ecol Abs Li Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_li_min', $this->RenderText('Agr Ecol Abs Li Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildp_low', $this->RenderText('Agr Ecol Opt Soildp Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildp_medium', $this->RenderText('Agr Ecol Opt Soildp Medium')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildp_deep', $this->RenderText('Agr Ecol Opt Soildp Deep')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildp_max', $this->RenderText('Agr Ecol Abs Soildp Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildp_mean', $this->RenderText('Agr Ecol Abs Soildp Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildp_min', $this->RenderText('Agr Ecol Abs Soildp Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soiltxt_low', $this->RenderText('Agr Ecol Opt Soiltxt Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soiltxt_med', $this->RenderText('Agr Ecol Opt Soiltxt Med')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soiltxt_heavy', $this->RenderText('Agr Ecol Opt Soiltxt Heavy')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soiltxt_low', $this->RenderText('Agr Ecol Abs Soiltxt Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soiltxt_med', $this->RenderText('Agr Ecol Abs Soiltxt Med')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soiltxt_high', $this->RenderText('Agr Ecol Abs Soiltxt High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilfert_low', $this->RenderText('Agr Ecol Opt Soilfert Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilfert_moderate', $this->RenderText('Agr Ecol Opt Soilfert Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilfert_high', $this->RenderText('Agr Ecol Opt Soilfert High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilfert_low', $this->RenderText('Agr Ecol Abs Soilfert Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilfert_moderate', $this->RenderText('Agr Ecol Abs Soilfert Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilfert_high', $this->RenderText('Agr Ecol Abs Soilfert High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilAltox_low', $this->RenderText('Agr Ecol Opt SoilAltox Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilAltox_moderate', $this->RenderText('Agr Ecol Opt SoilAltox Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilAltox_high', $this->RenderText('Agr Ecol Opt SoilAltox High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilAltox_low', $this->RenderText('Agr Ecol Abs SoilAltox Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilAltox_moderate', $this->RenderText('Agr Ecol Abs SoilAltox Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilAltox_high', $this->RenderText('Agr Ecol Abs SoilAltox High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilsalinity_low', $this->RenderText('Agr Ecol Opt Soilsalinity Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilsalinity_moderate', $this->RenderText('Agr Ecol Opt Soilsalinity Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soilsalinity_high', $this->RenderText('Agr Ecol Opt Soilsalinity High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilsalinity_low', $this->RenderText('Agr Ecol Abs Soilsalinity Low')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilsalinity_moderate', $this->RenderText('Agr Ecol Abs Soilsalinity Moderate')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soilsalinity_high', $this->RenderText('Agr Ecol Abs Soilsalinity High')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildrainage_poor', $this->RenderText('Agr Ecol Opt Soildrainage Poor')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildrainage_well', $this->RenderText('Agr Ecol Opt Soildrainage Well')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_opt_soildrainagex_excessive', $this->RenderText('Agr Ecol Opt Soildrainagex Excessive')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildrainagex_poor', $this->RenderText('Agr Ecol Abs Soildrainagex Poor')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildrainage_well', $this->RenderText('Agr Ecol Abs Soildrainage Well')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abs_soildrainage_excessive', $this->RenderText('Agr Ecol Abs Soildrainage Excessive')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_clim_zone', $this->RenderText('Agr Ecol Clim Zone')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_kiltemp_rest', $this->RenderText('Agr Ecol Kiltemp Rest')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_kiltemp_earlygrowth', $this->RenderText('Agr Ecol Kiltemp Earlygrowth')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abio_toler', $this->RenderText('Agr Ecol Abio Toler')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_abio_suscept', $this->RenderText('Agr Ecol Abio Suscept')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_intro_risk', $this->RenderText('Agr Ecol Intro Risk')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_phoprod_short', $this->RenderText('Agr Ecol Phoprod Short')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_phoprod_medium', $this->RenderText('Agr Ecol Phoprod Medium')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_phoprod_long', $this->RenderText('Agr Ecol Phoprod Long')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_prdctn_system', $this->RenderText('Agr Ecol Prdctn System')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_aspect_max', $this->RenderText('Agr Ecol Aspect Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_aspect_mean', $this->RenderText('Agr Ecol Aspect Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_aspect_min', $this->RenderText('Agr Ecol Aspect Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('water-requir_max', $this->RenderText('Water-requir Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('water-requir_mean', $this->RenderText('Water-requir Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('water-requir_min', $this->RenderText('Water-requir Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_slope_max', $this->RenderText('Agr Ecol Slope Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_slope_mean', $this->RenderText('Agr Ecol Slope Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_slope_min', $this->RenderText('Agr Ecol Slope Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_clay_max', $this->RenderText('Agr Ecol Clay Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_clay_mean', $this->RenderText('Agr Ecol Clay Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_clay_min', $this->RenderText('Agr Ecol Clay Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_sand_max', $this->RenderText('Agr Ecol Sand Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_sand_mean', $this->RenderText('Agr Ecol Sand Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_sand_min', $this->RenderText('Agr Ecol Sand Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_silt_max', $this->RenderText('Agr Ecol Silt Max')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_silt_mean', $this->RenderText('Agr Ecol Silt Mean')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('agr_ecol_silt_min', $this->RenderText('Agr Ecol Silt Min')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('kbs_agroecol_others', $this->RenderText('Kbs Agroecol Others')));
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
            // View column for agr_ecol_zone_A field
            //
            $column = new TextViewColumn('agr_ecol_zone_A', 'Agr Ecol Zone A', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_zone_B field
            //
            $column = new TextViewColumn('agr_ecol_zone_B', 'Agr Ecol Zone B', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_zone_C field
            //
            $column = new TextViewColumn('agr_ecol_zone_C', 'Agr Ecol Zone C', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_zone_D field
            //
            $column = new TextViewColumn('agr_ecol_zone_D', 'Agr Ecol Zone D', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_zone_E field
            //
            $column = new TextViewColumn('agr_ecol_zone_E', 'Agr Ecol Zone E', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_mean', 'Agr Ecol Opt Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_mean', 'Agr Ecol Abs Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_mean', 'Agr Ecol Opt Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_mean', 'Agr Ecol Abs Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_mean', 'Agr Ecol Opt Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_mean', 'Agr Ecol Abs Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_mean', 'Agr Ecol Opt Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_mean', 'Agr Ecol Abs Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
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
            // View column for agr_ecol_opt_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_mean', 'Agr Ecol Opt Ph Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
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
            // View column for agr_ecol_abs_ph_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_max', 'Agr Ecol Abs Ph Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_mean', 'Agr Ecol Abs Ph Mean', $this->dataset);
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
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_max_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_mean', 'Agr Ecol Opt Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_mean_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_min_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_max_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_mean', 'Agr Ecol Abs Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_mean_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_min_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_low', 'Agr Ecol Opt Soildp Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_deep field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_deep', 'Agr Ecol Opt Soildp Deep', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_max', 'Agr Ecol Abs Soildp Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_min', 'Agr Ecol Abs Soildp Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_low', 'Agr Ecol Opt Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_heavy field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_heavy', 'Agr Ecol Opt Soiltxt Heavy', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_low', 'Agr Ecol Abs Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_high', 'Agr Ecol Abs Soiltxt High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_low', 'Agr Ecol Opt Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_high', 'Agr Ecol Opt Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_low', 'Agr Ecol Abs Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_high', 'Agr Ecol Abs Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_low', 'Agr Ecol Opt SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_high', 'Agr Ecol Opt SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_low', 'Agr Ecol Abs SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_high', 'Agr Ecol Abs SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_low', 'Agr Ecol Opt Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_high', 'Agr Ecol Opt Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_low', 'Agr Ecol Abs Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_high', 'Agr Ecol Abs Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_poor field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_poor', 'Agr Ecol Opt Soildrainage Poor', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainagex_excessive field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainagex_excessive', 'Agr Ecol Opt Soildrainagex Excessive', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainagex_poor field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainagex_poor', 'Agr Ecol Abs Soildrainagex Poor', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_excessive field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_excessive', 'Agr Ecol Abs Soildrainage Excessive', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_clim_zone_handler_list');
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
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abio_toler_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abio_suscept_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_intro_risk_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_short field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_short', 'Agr Ecol Phoprod Short', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_long field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_long', 'Agr Ecol Phoprod Long', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_prdctn_system_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_aspect_max field
            //
            $column = new TextViewColumn('agr_ecol_aspect_max', 'Agr Ecol Aspect Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_aspect_mean field
            //
            $column = new TextViewColumn('agr_ecol_aspect_mean', 'Agr Ecol Aspect Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_aspect_min field
            //
            $column = new TextViewColumn('agr_ecol_aspect_min', 'Agr Ecol Aspect Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for water-requir_max field
            //
            $column = new TextViewColumn('water-requir_max', 'Water-requir Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for water-requir_mean field
            //
            $column = new TextViewColumn('water-requir_mean', 'Water-requir Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for water-requir_min field
            //
            $column = new TextViewColumn('water-requir_min', 'Water-requir Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_slope_max field
            //
            $column = new TextViewColumn('agr_ecol_slope_max', 'Agr Ecol Slope Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_slope_mean field
            //
            $column = new TextViewColumn('agr_ecol_slope_mean', 'Agr Ecol Slope Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_slope_min field
            //
            $column = new TextViewColumn('agr_ecol_slope_min', 'Agr Ecol Slope Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_clay_max field
            //
            $column = new TextViewColumn('agr_ecol_clay_max', 'Agr Ecol Clay Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_clay_mean field
            //
            $column = new TextViewColumn('agr_ecol_clay_mean', 'Agr Ecol Clay Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_clay_min field
            //
            $column = new TextViewColumn('agr_ecol_clay_min', 'Agr Ecol Clay Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_sand_max field
            //
            $column = new TextViewColumn('agr_ecol_sand_max', 'Agr Ecol Sand Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_sand_mean field
            //
            $column = new TextViewColumn('agr_ecol_sand_mean', 'Agr Ecol Sand Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_sand_min field
            //
            $column = new TextViewColumn('agr_ecol_sand_min', 'Agr Ecol Sand Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_silt_max field
            //
            $column = new TextViewColumn('agr_ecol_silt_max', 'Agr Ecol Silt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_silt_mean field
            //
            $column = new TextViewColumn('agr_ecol_silt_mean', 'Agr Ecol Silt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for agr_ecol_silt_min field
            //
            $column = new TextViewColumn('agr_ecol_silt_min', 'Agr Ecol Silt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for kbs_agroecol_others field
            //
            $column = new TextViewColumn('kbs_agroecol_others', 'Kbs Agroecol Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_kbs_agroecol_others_handler_list');
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
            // View column for agr_ecol_zone_A field
            //
            $column = new TextViewColumn('agr_ecol_zone_A', 'Agr Ecol Zone A', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_zone_B field
            //
            $column = new TextViewColumn('agr_ecol_zone_B', 'Agr Ecol Zone B', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_zone_C field
            //
            $column = new TextViewColumn('agr_ecol_zone_C', 'Agr Ecol Zone C', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_zone_D field
            //
            $column = new TextViewColumn('agr_ecol_zone_D', 'Agr Ecol Zone D', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_zone_E field
            //
            $column = new TextViewColumn('agr_ecol_zone_E', 'Agr Ecol Zone E', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_mean', 'Agr Ecol Opt Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_mean', 'Agr Ecol Abs Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_mean', 'Agr Ecol Opt Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_mean', 'Agr Ecol Abs Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_mean', 'Agr Ecol Opt Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_mean', 'Agr Ecol Abs Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_mean', 'Agr Ecol Opt Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_mean', 'Agr Ecol Abs Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
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
            // View column for agr_ecol_opt_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_mean', 'Agr Ecol Opt Ph Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_min', 'Agr Ecol Opt Ph Min', $this->dataset);
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
            // View column for agr_ecol_abs_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_mean', 'Agr Ecol Abs Ph Mean', $this->dataset);
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
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_max_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_mean', 'Agr Ecol Opt Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_mean_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_min_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_max_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_mean', 'Agr Ecol Abs Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_mean_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_min_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_low', 'Agr Ecol Opt Soildp Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_deep field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_deep', 'Agr Ecol Opt Soildp Deep', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_max', 'Agr Ecol Abs Soildp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_min', 'Agr Ecol Abs Soildp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_low', 'Agr Ecol Opt Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_heavy field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_heavy', 'Agr Ecol Opt Soiltxt Heavy', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_low', 'Agr Ecol Abs Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_high', 'Agr Ecol Abs Soiltxt High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_low', 'Agr Ecol Opt Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_high', 'Agr Ecol Opt Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_low', 'Agr Ecol Abs Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_high', 'Agr Ecol Abs Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_low', 'Agr Ecol Opt SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_high', 'Agr Ecol Opt SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_low', 'Agr Ecol Abs SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_high', 'Agr Ecol Abs SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_low', 'Agr Ecol Opt Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_high', 'Agr Ecol Opt Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_low', 'Agr Ecol Abs Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_high', 'Agr Ecol Abs Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_poor field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_poor', 'Agr Ecol Opt Soildrainage Poor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainagex_excessive field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainagex_excessive', 'Agr Ecol Opt Soildrainagex Excessive', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainagex_poor field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainagex_poor', 'Agr Ecol Abs Soildrainagex Poor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_excessive field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_excessive', 'Agr Ecol Abs Soildrainage Excessive', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_clim_zone_handler_view');
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
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abio_toler_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_abio_suscept_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_intro_risk_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_short field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_short', 'Agr Ecol Phoprod Short', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_phoprod_long field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_long', 'Agr Ecol Phoprod Long', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_agr_ecol_prdctn_system_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_aspect_max field
            //
            $column = new TextViewColumn('agr_ecol_aspect_max', 'Agr Ecol Aspect Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_aspect_mean field
            //
            $column = new TextViewColumn('agr_ecol_aspect_mean', 'Agr Ecol Aspect Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_aspect_min field
            //
            $column = new TextViewColumn('agr_ecol_aspect_min', 'Agr Ecol Aspect Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for water-requir_max field
            //
            $column = new TextViewColumn('water-requir_max', 'Water-requir Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for water-requir_mean field
            //
            $column = new TextViewColumn('water-requir_mean', 'Water-requir Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for water-requir_min field
            //
            $column = new TextViewColumn('water-requir_min', 'Water-requir Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_slope_max field
            //
            $column = new TextViewColumn('agr_ecol_slope_max', 'Agr Ecol Slope Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_slope_mean field
            //
            $column = new TextViewColumn('agr_ecol_slope_mean', 'Agr Ecol Slope Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_slope_min field
            //
            $column = new TextViewColumn('agr_ecol_slope_min', 'Agr Ecol Slope Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_clay_max field
            //
            $column = new TextViewColumn('agr_ecol_clay_max', 'Agr Ecol Clay Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_clay_mean field
            //
            $column = new TextViewColumn('agr_ecol_clay_mean', 'Agr Ecol Clay Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_clay_min field
            //
            $column = new TextViewColumn('agr_ecol_clay_min', 'Agr Ecol Clay Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_sand_max field
            //
            $column = new TextViewColumn('agr_ecol_sand_max', 'Agr Ecol Sand Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_sand_mean field
            //
            $column = new TextViewColumn('agr_ecol_sand_mean', 'Agr Ecol Sand Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_sand_min field
            //
            $column = new TextViewColumn('agr_ecol_sand_min', 'Agr Ecol Sand Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_silt_max field
            //
            $column = new TextViewColumn('agr_ecol_silt_max', 'Agr Ecol Silt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_silt_mean field
            //
            $column = new TextViewColumn('agr_ecol_silt_mean', 'Agr Ecol Silt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for agr_ecol_silt_min field
            //
            $column = new TextViewColumn('agr_ecol_silt_min', 'Agr Ecol Silt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for kbs_agroecol_others field
            //
            $column = new TextViewColumn('kbs_agroecol_others', 'Kbs Agroecol Others', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('KBS_Agro_AgroecologyGrid_kbs_agroecol_others_handler_view');
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
            // Edit column for agr_ecol_zone_A field
            //
            $editor = new TextEdit('agr_ecol_zone_a_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone A', 'agr_ecol_zone_A', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_B field
            //
            $editor = new TextEdit('agr_ecol_zone_b_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone B', 'agr_ecol_zone_B', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_C field
            //
            $editor = new TextEdit('agr_ecol_zone_c_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone C', 'agr_ecol_zone_C', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_D field
            //
            $editor = new TextEdit('agr_ecol_zone_d_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone D', 'agr_ecol_zone_D', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_E field
            //
            $editor = new TextEdit('agr_ecol_zone_e_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone E', 'agr_ecol_zone_E', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_temp_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_temp_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Temp Mean', 'agr_ecol_opt_temp_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_temp_max field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Max', 'agr_ecol_abs_temp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_temp_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Mean', 'agr_ecol_abs_temp_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_rain_max field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Max', 'agr_ecol_opt_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_rain_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Mean', 'agr_ecol_opt_rain_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_rain_max field
            //
            $editor = new TextEdit('agr_ecol_abs_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Rain Max', 'agr_ecol_abs_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_rain_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_rain_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Rain Mean', 'agr_ecol_abs_rain_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_lat_max field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Max', 'agr_ecol_opt_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_lat_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Mean', 'agr_ecol_opt_lat_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_lat_max field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Max', 'agr_ecol_abs_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_lat_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Mean', 'agr_ecol_abs_lat_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_alt_max field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Max', 'agr_ecol_opt_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_alt_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Mean', 'agr_ecol_opt_alt_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_alt_max field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Max', 'agr_ecol_abs_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_alt_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Mean', 'agr_ecol_abs_alt_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_ph_max field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Max', 'agr_ecol_opt_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_ph_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Mean', 'agr_ecol_opt_ph_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_ph_max field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Max', 'agr_ecol_abs_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_ph_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Mean', 'agr_ecol_abs_ph_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_li_max field
            //
            $editor = new TextEdit('agr_ecol_opt_li_max_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Max', 'agr_ecol_opt_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_li_mean_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Mean', 'agr_ecol_opt_li_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_min field
            //
            $editor = new TextEdit('agr_ecol_opt_li_min_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Min', 'agr_ecol_opt_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_max field
            //
            $editor = new TextEdit('agr_ecol_abs_li_max_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Max', 'agr_ecol_abs_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_li_mean_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Mean', 'agr_ecol_abs_li_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_min field
            //
            $editor = new TextEdit('agr_ecol_abs_li_min_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Min', 'agr_ecol_abs_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soildp_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Low', 'agr_ecol_opt_soildp_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_medium field
            //
            $editor = new TextEdit('agr_ecol_opt_soildp_medium_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Medium', 'agr_ecol_opt_soildp_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_deep field
            //
            $editor = new TextEdit('agr_ecol_opt_soildp_deep_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Deep', 'agr_ecol_opt_soildp_deep', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_max field
            //
            $editor = new TextEdit('agr_ecol_abs_soildp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Max', 'agr_ecol_abs_soildp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_soildp_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Mean', 'agr_ecol_abs_soildp_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_min field
            //
            $editor = new TextEdit('agr_ecol_abs_soildp_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Min', 'agr_ecol_abs_soildp_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soiltxt_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Low', 'agr_ecol_opt_soiltxt_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_med field
            //
            $editor = new TextEdit('agr_ecol_opt_soiltxt_med_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Med', 'agr_ecol_opt_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_heavy field
            //
            $editor = new TextEdit('agr_ecol_opt_soiltxt_heavy_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Heavy', 'agr_ecol_opt_soiltxt_heavy', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soiltxt_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt Low', 'agr_ecol_abs_soiltxt_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_med field
            //
            $editor = new TextEdit('agr_ecol_abs_soiltxt_med_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt Med', 'agr_ecol_abs_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soiltxt_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt High', 'agr_ecol_abs_soiltxt_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soilfert_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert Low', 'agr_ecol_opt_soilfert_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_moderate field
            //
            $editor = new TextEdit('agr_ecol_opt_soilfert_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert Moderate', 'agr_ecol_opt_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_high field
            //
            $editor = new TextEdit('agr_ecol_opt_soilfert_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert High', 'agr_ecol_opt_soilfert_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soilfert_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert Low', 'agr_ecol_abs_soilfert_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_moderate field
            //
            $editor = new TextEdit('agr_ecol_abs_soilfert_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert Moderate', 'agr_ecol_abs_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soilfert_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert High', 'agr_ecol_abs_soilfert_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soilaltox_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox Low', 'agr_ecol_opt_soilAltox_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_moderate field
            //
            $editor = new TextEdit('agr_ecol_opt_soilaltox_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox Moderate', 'agr_ecol_opt_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_high field
            //
            $editor = new TextEdit('agr_ecol_opt_soilaltox_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox High', 'agr_ecol_opt_soilAltox_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soilaltox_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox Low', 'agr_ecol_abs_soilAltox_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_moderate field
            //
            $editor = new TextEdit('agr_ecol_abs_soilaltox_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox Moderate', 'agr_ecol_abs_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soilaltox_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox High', 'agr_ecol_abs_soilAltox_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soilsalinity_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity Low', 'agr_ecol_opt_soilsalinity_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_moderate field
            //
            $editor = new TextEdit('agr_ecol_opt_soilsalinity_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity Moderate', 'agr_ecol_opt_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_high field
            //
            $editor = new TextEdit('agr_ecol_opt_soilsalinity_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity High', 'agr_ecol_opt_soilsalinity_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soilsalinity_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity Low', 'agr_ecol_abs_soilsalinity_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_moderate field
            //
            $editor = new TextEdit('agr_ecol_abs_soilsalinity_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity Moderate', 'agr_ecol_abs_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soilsalinity_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity High', 'agr_ecol_abs_soilsalinity_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainage_poor field
            //
            $editor = new TextEdit('agr_ecol_opt_soildrainage_poor_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainage Poor', 'agr_ecol_opt_soildrainage_poor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainage_well field
            //
            $editor = new TextEdit('agr_ecol_opt_soildrainage_well_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainage Well', 'agr_ecol_opt_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainagex_excessive field
            //
            $editor = new TextEdit('agr_ecol_opt_soildrainagex_excessive_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainagex Excessive', 'agr_ecol_opt_soildrainagex_excessive', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainagex_poor field
            //
            $editor = new TextEdit('agr_ecol_abs_soildrainagex_poor_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainagex Poor', 'agr_ecol_abs_soildrainagex_poor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainage_well field
            //
            $editor = new TextEdit('agr_ecol_abs_soildrainage_well_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainage Well', 'agr_ecol_abs_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainage_excessive field
            //
            $editor = new TextEdit('agr_ecol_abs_soildrainage_excessive_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainage Excessive', 'agr_ecol_abs_soildrainage_excessive', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clim_zone field
            //
            $editor = new TextEdit('agr_ecol_clim_zone_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Clim Zone', 'agr_ecol_clim_zone', $editor, $this->dataset);
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
            $editor = new TextEdit('agr_ecol_abio_toler_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Toler', 'agr_ecol_abio_toler', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abio_suscept field
            //
            $editor = new TextEdit('agr_ecol_abio_suscept_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Suscept', 'agr_ecol_abio_suscept', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_intro_risk field
            //
            $editor = new TextEdit('agr_ecol_intro_risk_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Intro Risk', 'agr_ecol_intro_risk', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_short field
            //
            $editor = new TextEdit('agr_ecol_phoprod_short_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Short', 'agr_ecol_phoprod_short', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_medium field
            //
            $editor = new TextEdit('agr_ecol_phoprod_medium_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Medium', 'agr_ecol_phoprod_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_long field
            //
            $editor = new TextEdit('agr_ecol_phoprod_long_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Long', 'agr_ecol_phoprod_long', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_prdctn_system field
            //
            $editor = new TextEdit('agr_ecol_prdctn_system_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Prdctn System', 'agr_ecol_prdctn_system', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_aspect_max field
            //
            $editor = new TextEdit('agr_ecol_aspect_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Aspect Max', 'agr_ecol_aspect_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_aspect_mean field
            //
            $editor = new TextEdit('agr_ecol_aspect_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Aspect Mean', 'agr_ecol_aspect_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_aspect_min field
            //
            $editor = new TextEdit('agr_ecol_aspect_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Aspect Min', 'agr_ecol_aspect_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for water-requir_max field
            //
            $editor = new TextEdit('water-requir_max_edit');
            $editColumn = new CustomEditColumn('Water-requir Max', 'water-requir_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for water-requir_mean field
            //
            $editor = new TextEdit('water-requir_mean_edit');
            $editColumn = new CustomEditColumn('Water-requir Mean', 'water-requir_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for water-requir_min field
            //
            $editor = new TextEdit('water-requir_min_edit');
            $editColumn = new CustomEditColumn('Water-requir Min', 'water-requir_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_slope_max field
            //
            $editor = new TextEdit('agr_ecol_slope_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Slope Max', 'agr_ecol_slope_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_slope_mean field
            //
            $editor = new TextEdit('agr_ecol_slope_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Slope Mean', 'agr_ecol_slope_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_slope_min field
            //
            $editor = new TextEdit('agr_ecol_slope_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Slope Min', 'agr_ecol_slope_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clay_max field
            //
            $editor = new TextEdit('agr_ecol_clay_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Clay Max', 'agr_ecol_clay_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clay_mean field
            //
            $editor = new TextEdit('agr_ecol_clay_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Clay Mean', 'agr_ecol_clay_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clay_min field
            //
            $editor = new TextEdit('agr_ecol_clay_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Clay Min', 'agr_ecol_clay_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_sand_max field
            //
            $editor = new TextEdit('agr_ecol_sand_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Sand Max', 'agr_ecol_sand_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_sand_mean field
            //
            $editor = new TextEdit('agr_ecol_sand_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Sand Mean', 'agr_ecol_sand_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_sand_min field
            //
            $editor = new TextEdit('agr_ecol_sand_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Sand Min', 'agr_ecol_sand_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_silt_max field
            //
            $editor = new TextEdit('agr_ecol_silt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Silt Max', 'agr_ecol_silt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_silt_mean field
            //
            $editor = new TextEdit('agr_ecol_silt_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Silt Mean', 'agr_ecol_silt_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for agr_ecol_silt_min field
            //
            $editor = new TextEdit('agr_ecol_silt_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Silt Min', 'agr_ecol_silt_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for kbs_agroecol_others field
            //
            $editor = new TextAreaEdit('kbs_agroecol_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Agroecol Others', 'kbs_agroecol_others', $editor, $this->dataset);
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
            // Edit column for agr_ecol_zone_A field
            //
            $editor = new TextEdit('agr_ecol_zone_a_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone A', 'agr_ecol_zone_A', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_B field
            //
            $editor = new TextEdit('agr_ecol_zone_b_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone B', 'agr_ecol_zone_B', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_C field
            //
            $editor = new TextEdit('agr_ecol_zone_c_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone C', 'agr_ecol_zone_C', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_D field
            //
            $editor = new TextEdit('agr_ecol_zone_d_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone D', 'agr_ecol_zone_D', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_zone_E field
            //
            $editor = new TextEdit('agr_ecol_zone_e_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Zone E', 'agr_ecol_zone_E', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_temp_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_temp_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Temp Mean', 'agr_ecol_opt_temp_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_temp_max field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Max', 'agr_ecol_abs_temp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_temp_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_temp_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Temp Mean', 'agr_ecol_abs_temp_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_rain_max field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Max', 'agr_ecol_opt_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_rain_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_rain_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Rain Mean', 'agr_ecol_opt_rain_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_rain_max field
            //
            $editor = new TextEdit('agr_ecol_abs_rain_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Rain Max', 'agr_ecol_abs_rain_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_rain_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_rain_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Rain Mean', 'agr_ecol_abs_rain_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_lat_max field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Max', 'agr_ecol_opt_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_lat_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_lat_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Lat Mean', 'agr_ecol_opt_lat_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_lat_max field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Max', 'agr_ecol_abs_lat_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_lat_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_lat_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Lat Mean', 'agr_ecol_abs_lat_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_alt_max field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Max', 'agr_ecol_opt_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_alt_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_alt_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Alt Mean', 'agr_ecol_opt_alt_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_alt_max field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Max', 'agr_ecol_abs_alt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_alt_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_alt_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Alt Mean', 'agr_ecol_abs_alt_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_ph_max field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Max', 'agr_ecol_opt_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_ph_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_ph_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Ph Mean', 'agr_ecol_opt_ph_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_abs_ph_max field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Max', 'agr_ecol_abs_ph_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_ph_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_ph_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Ph Mean', 'agr_ecol_abs_ph_mean', $editor, $this->dataset);
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
            // Edit column for agr_ecol_opt_li_max field
            //
            $editor = new TextEdit('agr_ecol_opt_li_max_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Max', 'agr_ecol_opt_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_mean field
            //
            $editor = new TextEdit('agr_ecol_opt_li_mean_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Mean', 'agr_ecol_opt_li_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_li_min field
            //
            $editor = new TextEdit('agr_ecol_opt_li_min_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Opt Li Min', 'agr_ecol_opt_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_max field
            //
            $editor = new TextEdit('agr_ecol_abs_li_max_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Max', 'agr_ecol_abs_li_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_li_mean_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Mean', 'agr_ecol_abs_li_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_li_min field
            //
            $editor = new TextEdit('agr_ecol_abs_li_min_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abs Li Min', 'agr_ecol_abs_li_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soildp_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Low', 'agr_ecol_opt_soildp_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_medium field
            //
            $editor = new TextEdit('agr_ecol_opt_soildp_medium_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Medium', 'agr_ecol_opt_soildp_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildp_deep field
            //
            $editor = new TextEdit('agr_ecol_opt_soildp_deep_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildp Deep', 'agr_ecol_opt_soildp_deep', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_max field
            //
            $editor = new TextEdit('agr_ecol_abs_soildp_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Max', 'agr_ecol_abs_soildp_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_mean field
            //
            $editor = new TextEdit('agr_ecol_abs_soildp_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Mean', 'agr_ecol_abs_soildp_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildp_min field
            //
            $editor = new TextEdit('agr_ecol_abs_soildp_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildp Min', 'agr_ecol_abs_soildp_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soiltxt_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Low', 'agr_ecol_opt_soiltxt_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_med field
            //
            $editor = new TextEdit('agr_ecol_opt_soiltxt_med_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Med', 'agr_ecol_opt_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soiltxt_heavy field
            //
            $editor = new TextEdit('agr_ecol_opt_soiltxt_heavy_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soiltxt Heavy', 'agr_ecol_opt_soiltxt_heavy', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soiltxt_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt Low', 'agr_ecol_abs_soiltxt_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_med field
            //
            $editor = new TextEdit('agr_ecol_abs_soiltxt_med_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt Med', 'agr_ecol_abs_soiltxt_med', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soiltxt_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soiltxt_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soiltxt High', 'agr_ecol_abs_soiltxt_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soilfert_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert Low', 'agr_ecol_opt_soilfert_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_moderate field
            //
            $editor = new TextEdit('agr_ecol_opt_soilfert_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert Moderate', 'agr_ecol_opt_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilfert_high field
            //
            $editor = new TextEdit('agr_ecol_opt_soilfert_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilfert High', 'agr_ecol_opt_soilfert_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soilfert_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert Low', 'agr_ecol_abs_soilfert_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_moderate field
            //
            $editor = new TextEdit('agr_ecol_abs_soilfert_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert Moderate', 'agr_ecol_abs_soilfert_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilfert_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soilfert_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilfert High', 'agr_ecol_abs_soilfert_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soilaltox_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox Low', 'agr_ecol_opt_soilAltox_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_moderate field
            //
            $editor = new TextEdit('agr_ecol_opt_soilaltox_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox Moderate', 'agr_ecol_opt_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilAltox_high field
            //
            $editor = new TextEdit('agr_ecol_opt_soilaltox_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt SoilAltox High', 'agr_ecol_opt_soilAltox_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soilaltox_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox Low', 'agr_ecol_abs_soilAltox_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_moderate field
            //
            $editor = new TextEdit('agr_ecol_abs_soilaltox_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox Moderate', 'agr_ecol_abs_soilAltox_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilAltox_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soilaltox_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs SoilAltox High', 'agr_ecol_abs_soilAltox_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_low field
            //
            $editor = new TextEdit('agr_ecol_opt_soilsalinity_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity Low', 'agr_ecol_opt_soilsalinity_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_moderate field
            //
            $editor = new TextEdit('agr_ecol_opt_soilsalinity_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity Moderate', 'agr_ecol_opt_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soilsalinity_high field
            //
            $editor = new TextEdit('agr_ecol_opt_soilsalinity_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soilsalinity High', 'agr_ecol_opt_soilsalinity_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_low field
            //
            $editor = new TextEdit('agr_ecol_abs_soilsalinity_low_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity Low', 'agr_ecol_abs_soilsalinity_low', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_moderate field
            //
            $editor = new TextEdit('agr_ecol_abs_soilsalinity_moderate_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity Moderate', 'agr_ecol_abs_soilsalinity_moderate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soilsalinity_high field
            //
            $editor = new TextEdit('agr_ecol_abs_soilsalinity_high_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soilsalinity High', 'agr_ecol_abs_soilsalinity_high', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainage_poor field
            //
            $editor = new TextEdit('agr_ecol_opt_soildrainage_poor_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainage Poor', 'agr_ecol_opt_soildrainage_poor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainage_well field
            //
            $editor = new TextEdit('agr_ecol_opt_soildrainage_well_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainage Well', 'agr_ecol_opt_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_opt_soildrainagex_excessive field
            //
            $editor = new TextEdit('agr_ecol_opt_soildrainagex_excessive_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Opt Soildrainagex Excessive', 'agr_ecol_opt_soildrainagex_excessive', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainagex_poor field
            //
            $editor = new TextEdit('agr_ecol_abs_soildrainagex_poor_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainagex Poor', 'agr_ecol_abs_soildrainagex_poor', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainage_well field
            //
            $editor = new TextEdit('agr_ecol_abs_soildrainage_well_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainage Well', 'agr_ecol_abs_soildrainage_well', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abs_soildrainage_excessive field
            //
            $editor = new TextEdit('agr_ecol_abs_soildrainage_excessive_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Abs Soildrainage Excessive', 'agr_ecol_abs_soildrainage_excessive', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clim_zone field
            //
            $editor = new TextEdit('agr_ecol_clim_zone_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Clim Zone', 'agr_ecol_clim_zone', $editor, $this->dataset);
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
            $editor = new TextEdit('agr_ecol_abio_toler_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Toler', 'agr_ecol_abio_toler', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_abio_suscept field
            //
            $editor = new TextEdit('agr_ecol_abio_suscept_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Abio Suscept', 'agr_ecol_abio_suscept', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_intro_risk field
            //
            $editor = new TextEdit('agr_ecol_intro_risk_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Intro Risk', 'agr_ecol_intro_risk', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_short field
            //
            $editor = new TextEdit('agr_ecol_phoprod_short_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Short', 'agr_ecol_phoprod_short', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_medium field
            //
            $editor = new TextEdit('agr_ecol_phoprod_medium_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Medium', 'agr_ecol_phoprod_medium', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_phoprod_long field
            //
            $editor = new TextEdit('agr_ecol_phoprod_long_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Phoprod Long', 'agr_ecol_phoprod_long', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_prdctn_system field
            //
            $editor = new TextEdit('agr_ecol_prdctn_system_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Agr Ecol Prdctn System', 'agr_ecol_prdctn_system', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_aspect_max field
            //
            $editor = new TextEdit('agr_ecol_aspect_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Aspect Max', 'agr_ecol_aspect_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_aspect_mean field
            //
            $editor = new TextEdit('agr_ecol_aspect_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Aspect Mean', 'agr_ecol_aspect_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_aspect_min field
            //
            $editor = new TextEdit('agr_ecol_aspect_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Aspect Min', 'agr_ecol_aspect_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for water-requir_max field
            //
            $editor = new TextEdit('water-requir_max_edit');
            $editColumn = new CustomEditColumn('Water-requir Max', 'water-requir_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for water-requir_mean field
            //
            $editor = new TextEdit('water-requir_mean_edit');
            $editColumn = new CustomEditColumn('Water-requir Mean', 'water-requir_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for water-requir_min field
            //
            $editor = new TextEdit('water-requir_min_edit');
            $editColumn = new CustomEditColumn('Water-requir Min', 'water-requir_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_slope_max field
            //
            $editor = new TextEdit('agr_ecol_slope_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Slope Max', 'agr_ecol_slope_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_slope_mean field
            //
            $editor = new TextEdit('agr_ecol_slope_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Slope Mean', 'agr_ecol_slope_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_slope_min field
            //
            $editor = new TextEdit('agr_ecol_slope_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Slope Min', 'agr_ecol_slope_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clay_max field
            //
            $editor = new TextEdit('agr_ecol_clay_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Clay Max', 'agr_ecol_clay_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clay_mean field
            //
            $editor = new TextEdit('agr_ecol_clay_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Clay Mean', 'agr_ecol_clay_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_clay_min field
            //
            $editor = new TextEdit('agr_ecol_clay_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Clay Min', 'agr_ecol_clay_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_sand_max field
            //
            $editor = new TextEdit('agr_ecol_sand_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Sand Max', 'agr_ecol_sand_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_sand_mean field
            //
            $editor = new TextEdit('agr_ecol_sand_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Sand Mean', 'agr_ecol_sand_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_sand_min field
            //
            $editor = new TextEdit('agr_ecol_sand_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Sand Min', 'agr_ecol_sand_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_silt_max field
            //
            $editor = new TextEdit('agr_ecol_silt_max_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Silt Max', 'agr_ecol_silt_max', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_silt_mean field
            //
            $editor = new TextEdit('agr_ecol_silt_mean_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Silt Mean', 'agr_ecol_silt_mean', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for agr_ecol_silt_min field
            //
            $editor = new TextEdit('agr_ecol_silt_min_edit');
            $editColumn = new CustomEditColumn('Agr Ecol Silt Min', 'agr_ecol_silt_min', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for kbs_agroecol_others field
            //
            $editor = new TextAreaEdit('kbs_agroecol_others_edit', 50, 8);
            $editColumn = new CustomEditColumn('Kbs Agroecol Others', 'kbs_agroecol_others', $editor, $this->dataset);
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
            // View column for agr_ecol_zone_A field
            //
            $column = new TextViewColumn('agr_ecol_zone_A', 'Agr Ecol Zone A', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_zone_B field
            //
            $column = new TextViewColumn('agr_ecol_zone_B', 'Agr Ecol Zone B', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_zone_C field
            //
            $column = new TextViewColumn('agr_ecol_zone_C', 'Agr Ecol Zone C', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_zone_D field
            //
            $column = new TextViewColumn('agr_ecol_zone_D', 'Agr Ecol Zone D', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_zone_E field
            //
            $column = new TextViewColumn('agr_ecol_zone_E', 'Agr Ecol Zone E', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_mean', 'Agr Ecol Opt Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_mean', 'Agr Ecol Abs Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_mean', 'Agr Ecol Opt Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_mean', 'Agr Ecol Abs Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_mean', 'Agr Ecol Opt Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_mean', 'Agr Ecol Abs Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_mean', 'Agr Ecol Opt Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_mean', 'Agr Ecol Abs Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
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
            // View column for agr_ecol_opt_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_mean', 'Agr Ecol Opt Ph Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_min', 'Agr Ecol Opt Ph Min', $this->dataset);
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
            // View column for agr_ecol_abs_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_mean', 'Agr Ecol Abs Ph Mean', $this->dataset);
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
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_mean', 'Agr Ecol Opt Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_mean', 'Agr Ecol Abs Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_low', 'Agr Ecol Opt Soildp Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_deep field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_deep', 'Agr Ecol Opt Soildp Deep', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_max', 'Agr Ecol Abs Soildp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_min', 'Agr Ecol Abs Soildp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_low', 'Agr Ecol Opt Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_heavy field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_heavy', 'Agr Ecol Opt Soiltxt Heavy', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_low', 'Agr Ecol Abs Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_high', 'Agr Ecol Abs Soiltxt High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_low', 'Agr Ecol Opt Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_high', 'Agr Ecol Opt Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_low', 'Agr Ecol Abs Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_high', 'Agr Ecol Abs Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_low', 'Agr Ecol Opt SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_high', 'Agr Ecol Opt SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_low', 'Agr Ecol Abs SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_high', 'Agr Ecol Abs SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_low', 'Agr Ecol Opt Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_high', 'Agr Ecol Opt Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_low', 'Agr Ecol Abs Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_high', 'Agr Ecol Abs Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_poor field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_poor', 'Agr Ecol Opt Soildrainage Poor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainagex_excessive field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainagex_excessive', 'Agr Ecol Opt Soildrainagex Excessive', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainagex_poor field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainagex_poor', 'Agr Ecol Abs Soildrainagex Poor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_excessive field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_excessive', 'Agr Ecol Abs Soildrainage Excessive', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
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
            // View column for agr_ecol_phoprod_short field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_short', 'Agr Ecol Phoprod Short', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_phoprod_long field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_long', 'Agr Ecol Phoprod Long', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_aspect_max field
            //
            $column = new TextViewColumn('agr_ecol_aspect_max', 'Agr Ecol Aspect Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_aspect_mean field
            //
            $column = new TextViewColumn('agr_ecol_aspect_mean', 'Agr Ecol Aspect Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_aspect_min field
            //
            $column = new TextViewColumn('agr_ecol_aspect_min', 'Agr Ecol Aspect Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for water-requir_max field
            //
            $column = new TextViewColumn('water-requir_max', 'Water-requir Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for water-requir_mean field
            //
            $column = new TextViewColumn('water-requir_mean', 'Water-requir Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for water-requir_min field
            //
            $column = new TextViewColumn('water-requir_min', 'Water-requir Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_slope_max field
            //
            $column = new TextViewColumn('agr_ecol_slope_max', 'Agr Ecol Slope Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_slope_mean field
            //
            $column = new TextViewColumn('agr_ecol_slope_mean', 'Agr Ecol Slope Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_slope_min field
            //
            $column = new TextViewColumn('agr_ecol_slope_min', 'Agr Ecol Slope Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_clay_max field
            //
            $column = new TextViewColumn('agr_ecol_clay_max', 'Agr Ecol Clay Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_clay_mean field
            //
            $column = new TextViewColumn('agr_ecol_clay_mean', 'Agr Ecol Clay Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_clay_min field
            //
            $column = new TextViewColumn('agr_ecol_clay_min', 'Agr Ecol Clay Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_sand_max field
            //
            $column = new TextViewColumn('agr_ecol_sand_max', 'Agr Ecol Sand Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_sand_mean field
            //
            $column = new TextViewColumn('agr_ecol_sand_mean', 'Agr Ecol Sand Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_sand_min field
            //
            $column = new TextViewColumn('agr_ecol_sand_min', 'Agr Ecol Sand Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_silt_max field
            //
            $column = new TextViewColumn('agr_ecol_silt_max', 'Agr Ecol Silt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_silt_mean field
            //
            $column = new TextViewColumn('agr_ecol_silt_mean', 'Agr Ecol Silt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for agr_ecol_silt_min field
            //
            $column = new TextViewColumn('agr_ecol_silt_min', 'Agr Ecol Silt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for kbs_agroecol_others field
            //
            $column = new TextViewColumn('kbs_agroecol_others', 'Kbs Agroecol Others', $this->dataset);
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
            // View column for agr_ecol_zone_A field
            //
            $column = new TextViewColumn('agr_ecol_zone_A', 'Agr Ecol Zone A', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_zone_B field
            //
            $column = new TextViewColumn('agr_ecol_zone_B', 'Agr Ecol Zone B', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_zone_C field
            //
            $column = new TextViewColumn('agr_ecol_zone_C', 'Agr Ecol Zone C', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_zone_D field
            //
            $column = new TextViewColumn('agr_ecol_zone_D', 'Agr Ecol Zone D', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_zone_E field
            //
            $column = new TextViewColumn('agr_ecol_zone_E', 'Agr Ecol Zone E', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_max', 'Agr Ecol Opt Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_mean', 'Agr Ecol Opt Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_temp_min', 'Agr Ecol Opt Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_max', 'Agr Ecol Abs Temp Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_mean', 'Agr Ecol Abs Temp Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_temp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_temp_min', 'Agr Ecol Abs Temp Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_max', 'Agr Ecol Opt Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_mean', 'Agr Ecol Opt Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_rain_min', 'Agr Ecol Opt Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_max', 'Agr Ecol Abs Rain Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_rain_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_rain_mean', 'Agr Ecol Abs Rain Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abst_rain_min field
            //
            $column = new TextViewColumn('agr_ecol_abst_rain_min', 'Agr Ecol Abst Rain Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_max', 'Agr Ecol Opt Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_mean', 'Agr Ecol Opt Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_lat_min', 'Agr Ecol Opt Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_max', 'Agr Ecol Abs Lat Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_mean', 'Agr Ecol Abs Lat Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_lat_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_lat_min', 'Agr Ecol Abs Lat Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_max', 'Agr Ecol Opt Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_mean', 'Agr Ecol Opt Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_alt_min', 'Agr Ecol Opt Alt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_max', 'Agr Ecol Abs Alt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_mean', 'Agr Ecol Abs Alt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_alt_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_alt_min', 'Agr Ecol Abs Alt Min', $this->dataset);
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
            // View column for agr_ecol_opt_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_mean', 'Agr Ecol Opt Ph Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_ph_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_ph_min', 'Agr Ecol Opt Ph Min', $this->dataset);
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
            // View column for agr_ecol_abs_ph_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_ph_mean', 'Agr Ecol Abs Ph Mean', $this->dataset);
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
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_mean', 'Agr Ecol Opt Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_mean', 'Agr Ecol Abs Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_low', 'Agr Ecol Opt Soildp Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_medium field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_medium', 'Agr Ecol Opt Soildp Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildp_deep field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildp_deep', 'Agr Ecol Opt Soildp Deep', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_max', 'Agr Ecol Abs Soildp Max', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_mean', 'Agr Ecol Abs Soildp Mean', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildp_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildp_min', 'Agr Ecol Abs Soildp Min', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_low', 'Agr Ecol Opt Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_med', 'Agr Ecol Opt Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soiltxt_heavy field
            //
            $column = new TextViewColumn('agr_ecol_opt_soiltxt_heavy', 'Agr Ecol Opt Soiltxt Heavy', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_low', 'Agr Ecol Abs Soiltxt Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_med field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_med', 'Agr Ecol Abs Soiltxt Med', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soiltxt_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soiltxt_high', 'Agr Ecol Abs Soiltxt High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_low', 'Agr Ecol Opt Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_moderate', 'Agr Ecol Opt Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilfert_high', 'Agr Ecol Opt Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_low', 'Agr Ecol Abs Soilfert Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_moderate', 'Agr Ecol Abs Soilfert Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilfert_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilfert_high', 'Agr Ecol Abs Soilfert High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_low', 'Agr Ecol Opt SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_moderate', 'Agr Ecol Opt SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilAltox_high', 'Agr Ecol Opt SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_low', 'Agr Ecol Abs SoilAltox Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_moderate', 'Agr Ecol Abs SoilAltox Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilAltox_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilAltox_high', 'Agr Ecol Abs SoilAltox High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_low', 'Agr Ecol Opt Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_moderate', 'Agr Ecol Opt Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_opt_soilsalinity_high', 'Agr Ecol Opt Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_low field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_low', 'Agr Ecol Abs Soilsalinity Low', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_moderate field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_moderate', 'Agr Ecol Abs Soilsalinity Moderate', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soilsalinity_high field
            //
            $column = new TextViewColumn('agr_ecol_abs_soilsalinity_high', 'Agr Ecol Abs Soilsalinity High', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_poor field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_poor', 'Agr Ecol Opt Soildrainage Poor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainage_well', 'Agr Ecol Opt Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_opt_soildrainagex_excessive field
            //
            $column = new TextViewColumn('agr_ecol_opt_soildrainagex_excessive', 'Agr Ecol Opt Soildrainagex Excessive', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainagex_poor field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainagex_poor', 'Agr Ecol Abs Soildrainagex Poor', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_well field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_well', 'Agr Ecol Abs Soildrainage Well', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_abs_soildrainage_excessive field
            //
            $column = new TextViewColumn('agr_ecol_abs_soildrainage_excessive', 'Agr Ecol Abs Soildrainage Excessive', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
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
            // View column for agr_ecol_phoprod_short field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_short', 'Agr Ecol Phoprod Short', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_phoprod_medium field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_medium', 'Agr Ecol Phoprod Medium', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_phoprod_long field
            //
            $column = new TextViewColumn('agr_ecol_phoprod_long', 'Agr Ecol Phoprod Long', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_aspect_max field
            //
            $column = new TextViewColumn('agr_ecol_aspect_max', 'Agr Ecol Aspect Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_aspect_mean field
            //
            $column = new TextViewColumn('agr_ecol_aspect_mean', 'Agr Ecol Aspect Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_aspect_min field
            //
            $column = new TextViewColumn('agr_ecol_aspect_min', 'Agr Ecol Aspect Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for water-requir_max field
            //
            $column = new TextViewColumn('water-requir_max', 'Water-requir Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for water-requir_mean field
            //
            $column = new TextViewColumn('water-requir_mean', 'Water-requir Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for water-requir_min field
            //
            $column = new TextViewColumn('water-requir_min', 'Water-requir Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_slope_max field
            //
            $column = new TextViewColumn('agr_ecol_slope_max', 'Agr Ecol Slope Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_slope_mean field
            //
            $column = new TextViewColumn('agr_ecol_slope_mean', 'Agr Ecol Slope Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_slope_min field
            //
            $column = new TextViewColumn('agr_ecol_slope_min', 'Agr Ecol Slope Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_clay_max field
            //
            $column = new TextViewColumn('agr_ecol_clay_max', 'Agr Ecol Clay Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_clay_mean field
            //
            $column = new TextViewColumn('agr_ecol_clay_mean', 'Agr Ecol Clay Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_clay_min field
            //
            $column = new TextViewColumn('agr_ecol_clay_min', 'Agr Ecol Clay Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_sand_max field
            //
            $column = new TextViewColumn('agr_ecol_sand_max', 'Agr Ecol Sand Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_sand_mean field
            //
            $column = new TextViewColumn('agr_ecol_sand_mean', 'Agr Ecol Sand Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_sand_min field
            //
            $column = new TextViewColumn('agr_ecol_sand_min', 'Agr Ecol Sand Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_silt_max field
            //
            $column = new TextViewColumn('agr_ecol_silt_max', 'Agr Ecol Silt Max', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_silt_mean field
            //
            $column = new TextViewColumn('agr_ecol_silt_mean', 'Agr Ecol Silt Mean', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for agr_ecol_silt_min field
            //
            $column = new TextViewColumn('agr_ecol_silt_min', 'Agr Ecol Silt Min', $this->dataset);
            $column->SetOrderable(true);
            $column = new NumberFormatValueViewColumnDecorator($column, 4, ',', '.');
            $grid->AddExportColumn($column);
            
            //
            // View column for kbs_agroecol_others field
            //
            $column = new TextViewColumn('kbs_agroecol_others', 'Kbs Agroecol Others', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'KBS_Agro_Agroecology_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'KBS_Agro_AgroecologyGrid');
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
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_max_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_mean', 'Agr Ecol Opt Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_mean_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_min_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_max_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_mean', 'Agr Ecol Abs Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_mean_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_min_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_clim_zone_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abio_toler_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abio_suscept_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_intro_risk_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_prdctn_system_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_agroecol_others field
            //
            $column = new TextViewColumn('kbs_agroecol_others', 'Kbs Agroecol Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_kbs_agroecol_others_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for agr_ecol_opt_li_max field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_max', 'Agr Ecol Opt Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_max_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_mean', 'Agr Ecol Opt Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_mean_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_opt_li_min field
            //
            $column = new TextViewColumn('agr_ecol_opt_li_min', 'Agr Ecol Opt Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_opt_li_min_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_max field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_max', 'Agr Ecol Abs Li Max', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_max_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_mean field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_mean', 'Agr Ecol Abs Li Mean', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_mean_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abs_li_min field
            //
            $column = new TextViewColumn('agr_ecol_abs_li_min', 'Agr Ecol Abs Li Min', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abs_li_min_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_clim_zone field
            //
            $column = new TextViewColumn('agr_ecol_clim_zone', 'Agr Ecol Clim Zone', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_clim_zone_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_toler field
            //
            $column = new TextViewColumn('agr_ecol_abio_toler', 'Agr Ecol Abio Toler', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abio_toler_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_abio_suscept field
            //
            $column = new TextViewColumn('agr_ecol_abio_suscept', 'Agr Ecol Abio Suscept', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_abio_suscept_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_intro_risk field
            //
            $column = new TextViewColumn('agr_ecol_intro_risk', 'Agr Ecol Intro Risk', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_intro_risk_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for agr_ecol_prdctn_system field
            //
            $column = new TextViewColumn('agr_ecol_prdctn_system', 'Agr Ecol Prdctn System', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_agr_ecol_prdctn_system_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for kbs_agroecol_others field
            //
            $column = new TextViewColumn('kbs_agroecol_others', 'Kbs Agroecol Others', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'KBS_Agro_AgroecologyGrid_kbs_agroecol_others_handler_view', $column);
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
        $Page = new KBS_Agro_AgroecologyPage("KBS_Agro_Agroecology.php", "KBS_Agro_Agroecology", GetCurrentUserGrantForDataSource("KBS_Agro_Agroecology"), 'UTF-8');
        $Page->SetShortCaption('KBS Agro Agroecology');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('KBS Agro Agroecology');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("KBS_Agro_Agroecology"));
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
	

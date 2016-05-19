<?php

require_once 'components/page.php';
require_once 'components/security/datasource_security_info.php';
require_once 'components/security/security_info.php';
require_once 'components/security/hardcoded_auth.php';
require_once 'components/security/user_grants_manager.php';

include_once 'components/security/user_identity_storage/user_identity_session_storage.php';

$users = array('admin' => 'admin818');

$usersIds = array('admin' => -1);

$dataSourceRecordPermissions = array();

$grants = array('guest' => 
        array()
    ,
    'defaultUser' => 
        array('KBS_General' => new DataSourceSecurityInfo(false, false, false, false),
        'ecocrop' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Agroecology' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Agronomic_Practices' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Cropping_System' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Fertiliser' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Pathology' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Resist_Tolerance' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Season' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Aquacrop' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Output' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Proximate' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Thermogravimetric' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Ultimate' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Uses' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_CRO_File' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Diseases' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Germplasm' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Institute' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Local_Name' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Pests' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Stat' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Synonyms' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_TTSR' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Weeds' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Where_Researched' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Where_UnderUtilised' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Composition' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Minerals' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Vitamins' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Preparation' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Growth_Cycle' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Growth_Habit' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Parts' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Parts_Used' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Type' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Usage' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Authors' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Country_LatLong' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Diseases' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_GeoNames' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Google_PlaceID' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Institute' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Parts_ID' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Pests' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Weeds' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Metadata' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Human' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Infrastructure' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Market' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Price' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Subsidy' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Water_Source' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Metadata_tables_columns' => new DataSourceSecurityInfo(false, false, false, false),
        'food_plants_international' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Accuracy_Color' => new DataSourceSecurityInfo(false, false, false, false))
    ,
    'guest' => 
        array('KBS_General' => new DataSourceSecurityInfo(false, false, false, false),
        'ecocrop' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Agroecology' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Agronomic_Practices' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Cropping_System' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Fertiliser' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Pathology' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Resist_Tolerance' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Season' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Aquacrop' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Output' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Proximate' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Thermogravimetric' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Ultimate' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Uses' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_CRO_File' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Diseases' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Germplasm' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Institute' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Local_Name' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Pests' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Stat' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Synonyms' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_TTSR' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Weeds' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Where_Researched' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Where_UnderUtilised' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Composition' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Minerals' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Vitamins' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Preparation' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Growth_Cycle' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Growth_Habit' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Parts' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Parts_Used' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Type' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Usage' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Authors' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Country_LatLong' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Diseases' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_GeoNames' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Google_PlaceID' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Institute' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Parts_ID' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Pests' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Weeds' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Metadata' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Human' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Infrastructure' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Market' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Price' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Subsidy' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Water_Source' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Metadata_tables_columns' => new DataSourceSecurityInfo(false, false, false, false),
        'food_plants_international' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Accuracy_Color' => new DataSourceSecurityInfo(false, false, false, false))
    ,
    'admin' => 
        array('KBS_General' => new DataSourceSecurityInfo(false, false, false, false),
        'ecocrop' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Agroecology' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Agronomic_Practices' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Cropping_System' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Fertiliser' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Pathology' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Resist_Tolerance' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Agro_Season' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Aquacrop' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Output' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Proximate' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Thermogravimetric' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Ultimate' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Biomass_Uses' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_CRO_File' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Diseases' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Germplasm' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Institute' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Local_Name' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Pests' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Stat' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Synonyms' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_TTSR' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Weeds' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Where_Researched' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Crop_Where_UnderUtilised' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Composition' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Minerals' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Nutrient_Vitamins' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Food_Preparation' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Growth_Cycle' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Growth_Habit' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Parts' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Parts_Used' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Type' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_General_Usage' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Authors' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Country_LatLong' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Diseases' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_GeoNames' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Google_PlaceID' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Institute' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Parts_ID' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Pests' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Weeds' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Metadata' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Human' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Infrastructure' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Market' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Price' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Subsidy' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_SocioEconomy_Water_Source' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Metadata_tables_columns' => new DataSourceSecurityInfo(false, false, false, false),
        'food_plants_international' => new DataSourceSecurityInfo(false, false, false, false),
        'KBS_Global_Accuracy_Color' => new DataSourceSecurityInfo(false, false, false, false))
    );

$appGrants = array('guest' => new DataSourceSecurityInfo(false, false, false, false),
    'defaultUser' => new DataSourceSecurityInfo(true, false, false, false),
    'guest' => new DataSourceSecurityInfo(false, false, false, false),
    'admin' => new AdminDataSourceSecurityInfo());

$tableCaptions = array('KBS_General' => 'KBS General',
'ecocrop' => 'Ecocrop',
'KBS_Agro_Agroecology' => 'KBS Agro Agroecology',
'KBS_Agro_Agronomic_Practices' => 'KBS Agro Agronomic Practices',
'KBS_Agro_Cropping_System' => 'KBS Agro Cropping System',
'KBS_Agro_Fertiliser' => 'KBS Agro Fertiliser',
'KBS_Agro_Pathology' => 'KBS Agro Pathology',
'KBS_Agro_Resist_Tolerance' => 'KBS Agro Resist Tolerance',
'KBS_Agro_Season' => 'KBS Agro Season',
'KBS_Aquacrop' => 'KBS Aquacrop',
'KBS_Biomass_Output' => 'KBS Biomass Output',
'KBS_Biomass_Proximate' => 'KBS Biomass Proximate',
'KBS_Biomass_Thermogravimetric' => 'KBS Biomass Thermogravimetric',
'KBS_Biomass_Ultimate' => 'KBS Biomass Ultimate',
'KBS_Biomass_Uses' => 'KBS Biomass Uses',
'KBS_Crop_CRO_File' => 'KBS Crop CRO File',
'KBS_Crop_Diseases' => 'KBS Crop Diseases',
'KBS_Crop_Germplasm' => 'KBS Crop Germplasm',
'KBS_Crop_Institute' => 'KBS Crop Institute',
'KBS_Crop_Local_Name' => 'KBS Crop Local Name',
'KBS_Crop_Pests' => 'KBS Crop Pests',
'KBS_Crop_Stat' => 'KBS Crop Stat',
'KBS_Crop_Synonyms' => 'KBS Crop Synonyms',
'KBS_Crop_TTSR' => 'KBS Crop TTSR',
'KBS_Crop_Weeds' => 'KBS Crop Weeds',
'KBS_Crop_Where_Researched' => 'KBS Crop Where Researched',
'KBS_Crop_Where_UnderUtilised' => 'KBS Crop Where UnderUtilised',
'KBS_Food_Nutrient_Composition' => 'KBS Food Nutrient Composition',
'KBS_Food_Nutrient_Minerals' => 'KBS Food Nutrient Minerals',
'KBS_Food_Nutrient_Vitamins' => 'KBS Food Nutrient Vitamins',
'KBS_Food_Preparation' => 'KBS Food Preparation',
'KBS_General_Growth_Cycle' => 'KBS General Growth Cycle',
'KBS_General_Growth_Habit' => 'KBS General Growth Habit',
'KBS_General_Parts' => 'KBS General Parts',
'KBS_General_Parts_Used' => 'KBS General Parts Used',
'KBS_General_Type' => 'KBS General Type',
'KBS_General_Usage' => 'KBS General Usage',
'KBS_Global_Authors' => 'KBS Global Authors',
'KBS_Global_Country_LatLong' => 'KBS Global Country LatLong',
'KBS_Global_Diseases' => 'KBS Global Diseases',
'KBS_Global_GeoNames' => 'KBS Global GeoNames',
'KBS_Global_Google_PlaceID' => 'KBS Global Google PlaceID',
'KBS_Global_Institute' => 'KBS Global Institute',
'KBS_Global_Parts_ID' => 'KBS Global Parts ID',
'KBS_Global_Pests' => 'KBS Global Pests',
'KBS_Global_Weeds' => 'KBS Global Weeds',
'KBS_Metadata' => 'KBS Metadata',
'KBS_SocioEconomy_Human' => 'KBS SocioEconomy Human',
'KBS_SocioEconomy_Infrastructure' => 'KBS SocioEconomy Infrastructure',
'KBS_SocioEconomy_Market' => 'KBS SocioEconomy Market',
'KBS_SocioEconomy_Price' => 'KBS SocioEconomy Price',
'KBS_SocioEconomy_Subsidy' => 'KBS SocioEconomy Subsidy',
'KBS_SocioEconomy_Water_Source' => 'KBS SocioEconomy Water Source',
'KBS_Metadata_tables_columns' => 'KBS Metadata Tables Columns',
'food_plants_international' => 'Food Plants International',
'KBS_Global_Accuracy_Color' => 'KBS Global Accuracy Color');

function SetUpUserAuthorization()
{
    global $usersIds;
    global $grants;
    global $appGrants;
    global $dataSourceRecordPermissions;
    $userAuthorizationStrategy = new HardCodedUserAuthorization(new UserIdentitySessionStorage(GetIdentityCheckStrategy()), new HardCodedUserGrantsManager($grants, $appGrants), $usersIds);
    GetApplication()->SetUserAuthorizationStrategy($userAuthorizationStrategy);

GetApplication()->SetDataSourceRecordPermissionRetrieveStrategy(
    new HardCodedDataSourceRecordPermissionRetrieveStrategy($dataSourceRecordPermissions));
}

function GetIdentityCheckStrategy()
{
    global $users;
    return new SimpleIdentityCheckStrategy($users, '');
}

?>
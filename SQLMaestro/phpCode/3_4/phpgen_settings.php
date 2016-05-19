<?php

//  define('SHOW_VARIABLES', 1);
//  define('DEBUG_LEVEL', 1);

//  error_reporting(E_ALL ^ E_NOTICE);
//  ini_set('display_errors', 'On');

set_include_path('.' . PATH_SEPARATOR . get_include_path());


include_once dirname(__FILE__) . '/' . 'components/utils/system_utils.php';

//  SystemUtils::DisableMagicQuotesRuntime();

SystemUtils::SetTimeZoneIfNeed('Asia/Brunei');

function GetGlobalConnectionOptions()
{
    return array(
  'server' => '127.0.0.1',
  'port' => '3306',
  'username' => 'root',
  'password' => 'yuna2UtR',
  'database' => 'cropKBSv3_4'
);
}

function HasAdminPage()
{
    return false;
}

function GetPageGroups()
{
    $result = array('GENERAL', 'Agro', 'Food', 'Biomass', 'SocioEconomy', 'Crop Specific', 'Crop Metadata', 'Global Info', 'Aquacrop', 'Ecocrop');
    return $result;
}

function GetPageInfos()
{
    $result = array();
    $result[] = array('caption' => 'KBS General', 'short_caption' => 'KBS General', 'filename' => 'KBS_General.php', 'name' => 'KBS_General', 'group_name' => 'GENERAL', 'add_separator' => false);
    $result[] = array('caption' => 'Ecocrop', 'short_caption' => 'Ecocrop', 'filename' => 'ecocrop.php', 'name' => 'ecocrop', 'group_name' => 'Ecocrop', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Agro Agroecology', 'short_caption' => 'KBS Agro Agroecology', 'filename' => 'KBS_Agro_Agroecology.php', 'name' => 'KBS_Agro_Agroecology', 'group_name' => 'Agro', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Agro Agronomic Practices', 'short_caption' => 'KBS Agro Agronomic Practices', 'filename' => 'KBS_Agro_Agronomic_Practices.php', 'name' => 'KBS_Agro_Agronomic_Practices', 'group_name' => 'Agro', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Agro Cropping System', 'short_caption' => 'KBS Agro Cropping System', 'filename' => 'KBS_Agro_Cropping_System.php', 'name' => 'KBS_Agro_Cropping_System', 'group_name' => 'Agro', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Agro Fertiliser', 'short_caption' => 'KBS Agro Fertiliser', 'filename' => 'KBS_Agro_Fertiliser.php', 'name' => 'KBS_Agro_Fertiliser', 'group_name' => 'Agro', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Agro Pathology', 'short_caption' => 'KBS Agro Pathology', 'filename' => 'KBS_Agro_Pathology.php', 'name' => 'KBS_Agro_Pathology', 'group_name' => 'Agro', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Agro Resist Tolerance', 'short_caption' => 'KBS Agro Resist Tolerance', 'filename' => 'KBS_Agro_Resist_Tolerance.php', 'name' => 'KBS_Agro_Resist_Tolerance', 'group_name' => 'Agro', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Agro Season', 'short_caption' => 'KBS Agro Season', 'filename' => 'KBS_Agro_Season.php', 'name' => 'KBS_Agro_Season', 'group_name' => 'Agro', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Aquacrop', 'short_caption' => 'KBS Aquacrop', 'filename' => 'KBS_Aquacrop.php', 'name' => 'KBS_Aquacrop', 'group_name' => 'Aquacrop', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Biomass Output', 'short_caption' => 'KBS Biomass Output', 'filename' => 'KBS_Biomass_Output.php', 'name' => 'KBS_Biomass_Output', 'group_name' => 'Biomass', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Biomass Proximate', 'short_caption' => 'KBS Biomass Proximate', 'filename' => 'KBS_Biomass_Proximate.php', 'name' => 'KBS_Biomass_Proximate', 'group_name' => 'Biomass', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Biomass Thermogravimetric', 'short_caption' => 'KBS Biomass Thermogravimetric', 'filename' => 'KBS_Biomass_Thermogravimetric.php', 'name' => 'KBS_Biomass_Thermogravimetric', 'group_name' => 'Biomass', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Biomass Ultimate', 'short_caption' => 'KBS Biomass Ultimate', 'filename' => 'KBS_Biomass_Ultimate.php', 'name' => 'KBS_Biomass_Ultimate', 'group_name' => 'Biomass', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Biomass Uses', 'short_caption' => 'KBS Biomass Uses', 'filename' => 'KBS_Biomass_Uses.php', 'name' => 'KBS_Biomass_Uses', 'group_name' => 'Biomass', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop CRO File', 'short_caption' => 'KBS Crop CRO File', 'filename' => 'KBS_Crop_CRO_File.php', 'name' => 'KBS_Crop_CRO_File', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Diseases', 'short_caption' => 'KBS Crop Diseases', 'filename' => 'KBS_Crop_Diseases.php', 'name' => 'KBS_Crop_Diseases', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Germplasm', 'short_caption' => 'KBS Crop Germplasm', 'filename' => 'KBS_Crop_Germplasm.php', 'name' => 'KBS_Crop_Germplasm', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Institute', 'short_caption' => 'KBS Crop Institute', 'filename' => 'KBS_Crop_Institute.php', 'name' => 'KBS_Crop_Institute', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Local Name', 'short_caption' => 'KBS Crop Local Name', 'filename' => 'KBS_Crop_Local_Name.php', 'name' => 'KBS_Crop_Local_Name', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Pests', 'short_caption' => 'KBS Crop Pests', 'filename' => 'KBS_Crop_Pests.php', 'name' => 'KBS_Crop_Pests', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Stat', 'short_caption' => 'KBS Crop Stat', 'filename' => 'KBS_Crop_Stat.php', 'name' => 'KBS_Crop_Stat', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Synonyms', 'short_caption' => 'KBS Crop Synonyms', 'filename' => 'KBS_Crop_Synonyms.php', 'name' => 'KBS_Crop_Synonyms', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop TTSR', 'short_caption' => 'KBS Crop TTSR', 'filename' => 'KBS_Crop_TTSR.php', 'name' => 'KBS_Crop_TTSR', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Weeds', 'short_caption' => 'KBS Crop Weeds', 'filename' => 'KBS_Crop_Weeds.php', 'name' => 'KBS_Crop_Weeds', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Where Researched', 'short_caption' => 'KBS Crop Where Researched', 'filename' => 'KBS_Crop_Where_Researched.php', 'name' => 'KBS_Crop_Where_Researched', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Crop Where UnderUtilised', 'short_caption' => 'KBS Crop Where UnderUtilised', 'filename' => 'KBS_Crop_Where_UnderUtilised.php', 'name' => 'KBS_Crop_Where_UnderUtilised', 'group_name' => 'Crop Specific', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Food Nutrient Composition', 'short_caption' => 'KBS Food Nutrient Composition', 'filename' => 'KBS_Food_Nutrient_Composition.php', 'name' => 'KBS_Food_Nutrient_Composition', 'group_name' => 'Food', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Food Nutrient Minerals', 'short_caption' => 'KBS Food Nutrient Minerals', 'filename' => 'KBS_Food_Nutrient_Minerals.php', 'name' => 'KBS_Food_Nutrient_Minerals', 'group_name' => 'Food', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Food Nutrient Vitamins', 'short_caption' => 'KBS Food Nutrient Vitamins', 'filename' => 'KBS_Food_Nutrient_Vitamins.php', 'name' => 'KBS_Food_Nutrient_Vitamins', 'group_name' => 'Food', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Food Preparation', 'short_caption' => 'KBS Food Preparation', 'filename' => 'KBS_Food_Preparation.php', 'name' => 'KBS_Food_Preparation', 'group_name' => 'Food', 'add_separator' => false);
    $result[] = array('caption' => 'KBS General Growth Cycle', 'short_caption' => 'KBS General Growth Cycle', 'filename' => 'KBS_General_Growth_Cycle.php', 'name' => 'KBS_General_Growth_Cycle', 'group_name' => 'GENERAL', 'add_separator' => false);
    $result[] = array('caption' => 'KBS General Growth Habit', 'short_caption' => 'KBS General Growth Habit', 'filename' => 'KBS_General_Growth_Habit.php', 'name' => 'KBS_General_Growth_Habit', 'group_name' => 'GENERAL', 'add_separator' => false);
    $result[] = array('caption' => 'KBS General Parts', 'short_caption' => 'KBS General Parts', 'filename' => 'KBS_General_Parts.php', 'name' => 'KBS_General_Parts', 'group_name' => 'GENERAL', 'add_separator' => false);
    $result[] = array('caption' => 'KBS General Parts Used', 'short_caption' => 'KBS General Parts Used', 'filename' => 'KBS_General_Parts_Used.php', 'name' => 'KBS_General_Parts_Used', 'group_name' => 'GENERAL', 'add_separator' => false);
    $result[] = array('caption' => 'KBS General Type', 'short_caption' => 'KBS General Type', 'filename' => 'KBS_General_Type.php', 'name' => 'KBS_General_Type', 'group_name' => 'GENERAL', 'add_separator' => false);
    $result[] = array('caption' => 'KBS General Usage', 'short_caption' => 'KBS General Usage', 'filename' => 'KBS_General_Usage.php', 'name' => 'KBS_General_Usage', 'group_name' => 'GENERAL', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Authors', 'short_caption' => 'KBS Global Authors', 'filename' => 'KBS_Global_Authors.php', 'name' => 'KBS_Global_Authors', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Country LatLong', 'short_caption' => 'KBS Global Country LatLong', 'filename' => 'KBS_Global_Country_LatLong.php', 'name' => 'KBS_Global_Country_LatLong', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Diseases', 'short_caption' => 'KBS Global Diseases', 'filename' => 'KBS_Global_Diseases.php', 'name' => 'KBS_Global_Diseases', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global GeoNames', 'short_caption' => 'KBS Global GeoNames', 'filename' => 'KBS_Global_GeoNames.php', 'name' => 'KBS_Global_GeoNames', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Google PlaceID', 'short_caption' => 'KBS Global Google PlaceID', 'filename' => 'KBS_Global_Google_PlaceID.php', 'name' => 'KBS_Global_Google_PlaceID', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Institute', 'short_caption' => 'KBS Global Institute', 'filename' => 'KBS_Global_Institute.php', 'name' => 'KBS_Global_Institute', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Parts ID', 'short_caption' => 'KBS Global Parts ID', 'filename' => 'KBS_Global_Parts_ID.php', 'name' => 'KBS_Global_Parts_ID', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Pests', 'short_caption' => 'KBS Global Pests', 'filename' => 'KBS_Global_Pests.php', 'name' => 'KBS_Global_Pests', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Global Weeds', 'short_caption' => 'KBS Global Weeds', 'filename' => 'KBS_Global_Weeds.php', 'name' => 'KBS_Global_Weeds', 'group_name' => 'Global Info', 'add_separator' => false);
    $result[] = array('caption' => 'KBS Metadata', 'short_caption' => 'KBS Metadata', 'filename' => 'KBS_Metadata.php', 'name' => 'KBS_Metadata', 'group_name' => 'Crop Metadata', 'add_separator' => false);
    $result[] = array('caption' => 'KBS SocioEconomy Human', 'short_caption' => 'KBS SocioEconomy Human', 'filename' => 'KBS_SocioEconomy_Human.php', 'name' => 'KBS_SocioEconomy_Human', 'group_name' => 'SocioEconomy', 'add_separator' => false);
    $result[] = array('caption' => 'KBS SocioEconomy Infrastructure', 'short_caption' => 'KBS SocioEconomy Infrastructure', 'filename' => 'KBS_SocioEconomy_Infrastructure.php', 'name' => 'KBS_SocioEconomy_Infrastructure', 'group_name' => 'SocioEconomy', 'add_separator' => false);
    $result[] = array('caption' => 'KBS SocioEconomy Market', 'short_caption' => 'KBS SocioEconomy Market', 'filename' => 'KBS_SocioEconomy_Market.php', 'name' => 'KBS_SocioEconomy_Market', 'group_name' => 'SocioEconomy', 'add_separator' => false);
    $result[] = array('caption' => 'KBS SocioEconomy Price', 'short_caption' => 'KBS SocioEconomy Price', 'filename' => 'KBS_SocioEconomy_Price.php', 'name' => 'KBS_SocioEconomy_Price', 'group_name' => 'SocioEconomy', 'add_separator' => false);
    $result[] = array('caption' => 'KBS SocioEconomy Subsidy', 'short_caption' => 'KBS SocioEconomy Subsidy', 'filename' => 'KBS_SocioEconomy_Subsidy.php', 'name' => 'KBS_SocioEconomy_Subsidy', 'group_name' => 'SocioEconomy', 'add_separator' => false);
    $result[] = array('caption' => 'KBS SocioEconomy Water Source', 'short_caption' => 'KBS SocioEconomy Water Source', 'filename' => 'KBS_SocioEconomy_Water_Source.php', 'name' => 'KBS_SocioEconomy_Water_Source', 'group_name' => 'SocioEconomy', 'add_separator' => false);
    return $result;
}

function GetPagesHeader()
{
    return
    '';
}

function GetPagesFooter()
{
    return
        ''; 
    }

function ApplyCommonPageSettings(Page $page, Grid $grid)
{
    $page->SetShowUserAuthBar(false);
    $page->OnCustomHTMLHeader->AddListener('Global_CustomHTMLHeaderHandler');
    $page->OnGetCustomTemplate->AddListener('Global_GetCustomTemplateHandler');
    $grid->BeforeUpdateRecord->AddListener('Global_BeforeUpdateHandler');
    $grid->BeforeDeleteRecord->AddListener('Global_BeforeDeleteHandler');
    $grid->BeforeInsertRecord->AddListener('Global_BeforeInsertHandler');
}

/*
  Default code page: 1252
*/
function GetAnsiEncoding() { return 'windows-1252'; }

function Global_CustomHTMLHeaderHandler($page, &$customHtmlHeaderText)
{

}

function Global_GetCustomTemplateHandler($part, $mode, &$result, &$params, Page $page = null)
{

}

function Global_BeforeUpdateHandler($page, &$rowData, &$cancel, &$message, $tableName)
{

}

function Global_BeforeDeleteHandler($page, &$rowData, &$cancel, &$message, $tableName)
{

}

function Global_BeforeInsertHandler($page, &$rowData, &$cancel, &$message, $tableName)
{

}

function GetDefaultDateFormat()
{
    return 'Y-m-d';
}

function GetFirstDayOfWeek()
{
    return 0;
}

function GetEnableLessFilesRunTimeCompilation()
{
    return false;
}



?>
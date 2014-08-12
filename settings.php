<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

// Background image setting
// logo image setting
$name = 'theme_htw/logo';
$title = get_string('logo','theme_htw');
$description = get_string('logodesc', 'theme_htw');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// link color setting
$name = 'theme_htw/linkcolor';
$title = get_string('linkcolor','theme_htw');
$description = get_string('linkcolordesc', 'theme_htw');
$default = '#06365b';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// link hover color setting
$name = 'theme_htw/linkhover';
$title = get_string('linkhover','theme_htw');
$description = get_string('linkhoverdesc', 'theme_htw');
$default = '#5487ad';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// main color setting
$name = 'theme_htw/maincolor';
$title = get_string('maincolor','theme_htw');
$description = get_string('maincolordesc', 'theme_htw');
$default = '#A62328'; //'#8e2800';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// main color accent setting
$name = 'theme_htw/maincolorlink';
$title = get_string('maincolorlink','theme_htw');
$description = get_string('maincolorlinkdesc', 'theme_htw');
$default = '#fff0a5';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// heading color setting
$name = 'theme_htw/headingcolor';
$title = get_string('headingcolor','theme_htw');
$description = get_string('headingcolordesc', 'theme_htw');
$default = '#5c3500';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

}

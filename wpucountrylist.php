<?php

/*
Plugin Name: WPU Country list
Description: Retrieve a list of countries
Version: 0.2.1
Author: Darklg
Author URI: http://darklg.me/
License: MIT License
License URI: http://opensource.org/licenses/MIT
Thanks: To PLSoucy - http://blog.plsoucy.com/2012/04/iso-3166-country-code-list-csv-sql/
*/

class WPUCountryList {

    public $list = array();

    function __construct() {
        add_action('init', array(&$this,
            'load_list'
        ));
        add_action('plugins_loaded', array(&$this,
            'load_plugin_textdomain'
        ));
    }

    function load_plugin_textdomain() {
        load_plugin_textdomain('wpucountrylist', false, dirname(plugin_basename(__FILE__)) . '/lang/');
    }

    function load_list() {
        $this->list = array(
            'AD' => array(
                'continent' => 'europe',
                'country' => __('Andorra', 'wpucountrylist') ,
            ) ,
            'AE' => array(
                'continent' => 'asia',
                'country' => __('United Arab Emirates', 'wpucountrylist') ,
            ) ,
            'AF' => array(
                'continent' => 'asia',
                'country' => __('Afghanistan', 'wpucountrylist') ,
            ) ,
            'AG' => array(
                'continent' => 'america',
                'country' => __('Antigua and Barbuda', 'wpucountrylist') ,
            ) ,
            'AI' => array(
                'continent' => 'america',
                'country' => __('Anguilla', 'wpucountrylist') ,
            ) ,
            'AL' => array(
                'continent' => 'europe',
                'country' => __('Albania', 'wpucountrylist') ,
            ) ,
            'AM' => array(
                'continent' => 'asia',
                'country' => __('Armenia', 'wpucountrylist') ,
            ) ,
            'AO' => array(
                'continent' => 'africa',
                'country' => __('Angola', 'wpucountrylist') ,
            ) ,
            'AQ' => array(
                'continent' => 'oceania',
                'country' => __('Antarctica', 'wpucountrylist') ,
            ) ,
            'AR' => array(
                'continent' => 'america',
                'country' => __('Argentina', 'wpucountrylist') ,
            ) ,
            'AS' => array(
                'continent' => 'oceania',
                'country' => __('American Samoa', 'wpucountrylist') ,
            ) ,
            'AT' => array(
                'continent' => 'europe',
                'country' => __('Austria', 'wpucountrylist') ,
            ) ,
            'AU' => array(
                'continent' => 'oceania',
                'country' => __('Australia', 'wpucountrylist') ,
            ) ,
            'AW' => array(
                'continent' => 'america',
                'country' => __('Aruba', 'wpucountrylist') ,
            ) ,
            'AX' => array(
                'continent' => 'europe',
                'country' => __('Åland Islands', 'wpucountrylist') ,
            ) ,
            'AZ' => array(
                'continent' => 'asia',
                'country' => __('Azerbaijan', 'wpucountrylist') ,
            ) ,
            'BA' => array(
                'continent' => 'europe',
                'country' => __('Bosnia and Herzegovina', 'wpucountrylist') ,
            ) ,
            'BB' => array(
                'continent' => 'america',
                'country' => __('Barbados', 'wpucountrylist') ,
            ) ,
            'BD' => array(
                'continent' => 'asia',
                'country' => __('Bangladesh', 'wpucountrylist') ,
            ) ,
            'BE' => array(
                'continent' => 'europe',
                'country' => __('Belgium', 'wpucountrylist') ,
            ) ,
            'BF' => array(
                'continent' => 'africa',
                'country' => __('Burkina Faso', 'wpucountrylist') ,
            ) ,
            'BG' => array(
                'continent' => 'europe',
                'country' => __('Bulgaria', 'wpucountrylist') ,
            ) ,
            'BH' => array(
                'continent' => 'asia',
                'country' => __('Bahrain', 'wpucountrylist') ,
            ) ,
            'BI' => array(
                'continent' => 'africa',
                'country' => __('Burundi', 'wpucountrylist') ,
            ) ,
            'BJ' => array(
                'continent' => 'africa',
                'country' => __('Benin', 'wpucountrylist') ,
            ) ,
            'BL' => array(
                'continent' => 'america',
                'country' => __('Saint Barthélemy', 'wpucountrylist') ,
            ) ,
            'BM' => array(
                'continent' => 'america',
                'country' => __('Bermuda', 'wpucountrylist') ,
            ) ,
            'BN' => array(
                'continent' => 'asia',
                'country' => __('Brunei Darussalam', 'wpucountrylist') ,
            ) ,
            'BO' => array(
                'continent' => 'america',
                'country' => __('Bolivia', 'wpucountrylist') ,
            ) ,
            'BQ' => array(
                'continent' => 'america',
                'country' => __('Caribbean Netherlands', 'wpucountrylist') ,
            ) ,
            'BR' => array(
                'continent' => 'america',
                'country' => __('Brazil', 'wpucountrylist') ,
            ) ,
            'BS' => array(
                'continent' => 'america',
                'country' => __('Bahamas', 'wpucountrylist') ,
            ) ,
            'BT' => array(
                'continent' => 'asia',
                'country' => __('Bhutan', 'wpucountrylist') ,
            ) ,
            'BV' => array(
                'continent' => 'oceania',
                'country' => __('Bouvet Island', 'wpucountrylist') ,
            ) ,
            'BW' => array(
                'continent' => 'africa',
                'country' => __('Botswana', 'wpucountrylist') ,
            ) ,
            'BY' => array(
                'continent' => 'europe',
                'country' => __('Belarus', 'wpucountrylist') ,
            ) ,
            'BZ' => array(
                'continent' => 'america',
                'country' => __('Belize', 'wpucountrylist') ,
            ) ,
            'CA' => array(
                'continent' => 'america',
                'country' => __('Canada', 'wpucountrylist') ,
            ) ,
            'CC' => array(
                'continent' => 'oceania',
                'country' => __('Cocos (Keeling) Islands', 'wpucountrylist') ,
            ) ,
            'CD' => array(
                'continent' => 'africa',
                'country' => __('Democratic Republic of Congo', 'wpucountrylist') ,
            ) ,
            'CF' => array(
                'continent' => 'africa',
                'country' => __('Central African Republic', 'wpucountrylist') ,
            ) ,
            'CG' => array(
                'continent' => 'africa',
                'country' => __('Congo', 'wpucountrylist') ,
            ) ,
            'CH' => array(
                'continent' => 'europe',
                'country' => __('Switzerland', 'wpucountrylist') ,
            ) ,
            'CI' => array(
                'continent' => 'africa',
                'country' => __('Côte d\'Ivoire', 'wpucountrylist') ,
            ) ,
            'CK' => array(
                'continent' => 'oceania',
                'country' => __('Cook Islands', 'wpucountrylist') ,
            ) ,
            'CL' => array(
                'continent' => 'america',
                'country' => __('Chile', 'wpucountrylist') ,
            ) ,
            'CM' => array(
                'continent' => 'africa',
                'country' => __('Cameroon', 'wpucountrylist') ,
            ) ,
            'CN' => array(
                'continent' => 'asia',
                'country' => __('China', 'wpucountrylist') ,
            ) ,
            'CO' => array(
                'continent' => 'america',
                'country' => __('Colombia', 'wpucountrylist') ,
            ) ,
            'CR' => array(
                'continent' => 'america',
                'country' => __('Costa Rica', 'wpucountrylist') ,
            ) ,
            'CU' => array(
                'continent' => 'america',
                'country' => __('Cuba', 'wpucountrylist') ,
            ) ,
            'CV' => array(
                'continent' => 'africa',
                'country' => __('Cape Verde', 'wpucountrylist') ,
            ) ,
            'CW' => array(
                'continent' => 'america',
                'country' => __('Curaçao', 'wpucountrylist') ,
            ) ,
            'CX' => array(
                'continent' => 'oceania',
                'country' => __('Christmas Island', 'wpucountrylist') ,
            ) ,
            'CY' => array(
                'continent' => 'europe',
                'country' => __('Cyprus', 'wpucountrylist') ,
            ) ,
            'CZ' => array(
                'continent' => 'europe',
                'country' => __('Czech Republic', 'wpucountrylist') ,
            ) ,
            'DE' => array(
                'continent' => 'europe',
                'country' => __('Germany', 'wpucountrylist') ,
            ) ,
            'DJ' => array(
                'continent' => 'africa',
                'country' => __('Djibouti', 'wpucountrylist') ,
            ) ,
            'DK' => array(
                'continent' => 'europe',
                'country' => __('Denmark', 'wpucountrylist') ,
            ) ,
            'DM' => array(
                'continent' => 'america',
                'country' => __('Dominica', 'wpucountrylist') ,
            ) ,
            'DO' => array(
                'continent' => 'america',
                'country' => __('Dominican Republic', 'wpucountrylist') ,
            ) ,
            'DZ' => array(
                'continent' => 'africa',
                'country' => __('Algeria', 'wpucountrylist') ,
            ) ,
            'EC' => array(
                'continent' => 'america',
                'country' => __('Ecuador', 'wpucountrylist') ,
            ) ,
            'EE' => array(
                'continent' => 'europe',
                'country' => __('Estonia', 'wpucountrylist') ,
            ) ,
            'EG' => array(
                'continent' => 'africa',
                'country' => __('Egypt', 'wpucountrylist') ,
            ) ,
            'EH' => array(
                'continent' => 'africa',
                'country' => __('Western Sahara', 'wpucountrylist') ,
            ) ,
            'ER' => array(
                'continent' => 'africa',
                'country' => __('Eritrea', 'wpucountrylist') ,
            ) ,
            'ES' => array(
                'continent' => 'europe',
                'country' => __('Spain', 'wpucountrylist') ,
            ) ,
            'ET' => array(
                'continent' => 'africa',
                'country' => __('Ethiopia', 'wpucountrylist') ,
            ) ,
            'FI' => array(
                'continent' => 'europe',
                'country' => __('Finland', 'wpucountrylist') ,
            ) ,
            'FJ' => array(
                'continent' => 'oceania',
                'country' => __('Fiji', 'wpucountrylist') ,
            ) ,
            'FK' => array(
                'continent' => 'america',
                'country' => __('Falkland Islands', 'wpucountrylist') ,
            ) ,
            'FM' => array(
                'continent' => 'oceania',
                'country' => __('Federated States of Micronesia', 'wpucountrylist') ,
            ) ,
            'FO' => array(
                'continent' => 'europe',
                'country' => __('Faroe Islands', 'wpucountrylist') ,
            ) ,
            'FR' => array(
                'continent' => 'europe',
                'country' => __('France', 'wpucountrylist') ,
            ) ,
            'GA' => array(
                'continent' => 'africa',
                'country' => __('Gabon', 'wpucountrylist') ,
            ) ,
            'GB' => array(
                'continent' => 'europe',
                'country' => __('United Kingdom', 'wpucountrylist') ,
            ) ,
            'GD' => array(
                'continent' => 'america',
                'country' => __('Grenada', 'wpucountrylist') ,
            ) ,
            'GE' => array(
                'continent' => 'asia',
                'country' => __('Georgia', 'wpucountrylist') ,
            ) ,
            'GF' => array(
                'continent' => 'america',
                'country' => __('French Guiana', 'wpucountrylist') ,
            ) ,
            'GG' => array(
                'continent' => 'europe',
                'country' => __('Guernsey', 'wpucountrylist') ,
            ) ,
            'GH' => array(
                'continent' => 'africa',
                'country' => __('Ghana', 'wpucountrylist') ,
            ) ,
            'GI' => array(
                'continent' => 'europe',
                'country' => __('Gibraltar', 'wpucountrylist') ,
            ) ,
            'GL' => array(
                'continent' => 'america',
                'country' => __('Greenland', 'wpucountrylist') ,
            ) ,
            'GM' => array(
                'continent' => 'africa',
                'country' => __('Gambia', 'wpucountrylist') ,
            ) ,
            'GN' => array(
                'continent' => 'africa',
                'country' => __('Guinea', 'wpucountrylist') ,
            ) ,
            'GP' => array(
                'continent' => 'america',
                'country' => __('Guadeloupe', 'wpucountrylist') ,
            ) ,
            'GQ' => array(
                'continent' => 'africa',
                'country' => __('Equatorial Guinea', 'wpucountrylist') ,
            ) ,
            'GR' => array(
                'continent' => 'europe',
                'country' => __('Greece', 'wpucountrylist') ,
            ) ,
            'GS' => array(
                'continent' => 'oceania',
                'country' => __('South Georgia and the South Sandwich Islands', 'wpucountrylist') ,
            ) ,
            'GT' => array(
                'continent' => 'america',
                'country' => __('Guatemala', 'wpucountrylist') ,
            ) ,
            'GU' => array(
                'continent' => 'oceania',
                'country' => __('Guam', 'wpucountrylist') ,
            ) ,
            'GW' => array(
                'continent' => 'africa',
                'country' => __('Guinea-Bissau', 'wpucountrylist') ,
            ) ,
            'GY' => array(
                'continent' => 'america',
                'country' => __('Guyana', 'wpucountrylist') ,
            ) ,
            'HK' => array(
                'continent' => 'asia',
                'country' => __('Hong Kong', 'wpucountrylist') ,
            ) ,
            'HM' => array(
                'continent' => 'oceania',
                'country' => __('Heard and McDonald Islands', 'wpucountrylist') ,
            ) ,
            'HN' => array(
                'continent' => 'america',
                'country' => __('Honduras', 'wpucountrylist') ,
            ) ,
            'HR' => array(
                'continent' => 'europe',
                'country' => __('Croatia', 'wpucountrylist') ,
            ) ,
            'HT' => array(
                'continent' => 'america',
                'country' => __('Haiti', 'wpucountrylist') ,
            ) ,
            'HU' => array(
                'continent' => 'europe',
                'country' => __('Hungary', 'wpucountrylist') ,
            ) ,
            'ID' => array(
                'continent' => 'asia',
                'country' => __('Indonesia', 'wpucountrylist') ,
            ) ,
            'IE' => array(
                'continent' => 'europe',
                'country' => __('Ireland', 'wpucountrylist') ,
            ) ,
            'IL' => array(
                'continent' => 'asia',
                'country' => __('Israel', 'wpucountrylist') ,
            ) ,
            'IM' => array(
                'continent' => 'europe',
                'country' => __('Isle of Man', 'wpucountrylist') ,
            ) ,
            'IN' => array(
                'continent' => 'asia',
                'country' => __('India', 'wpucountrylist') ,
            ) ,
            'IO' => array(
                'continent' => 'oceania',
                'country' => __('British Indian Ocean Territory', 'wpucountrylist') ,
            ) ,
            'IQ' => array(
                'continent' => 'asia',
                'country' => __('Iraq', 'wpucountrylist') ,
            ) ,
            'IR' => array(
                'continent' => 'asia',
                'country' => __('Iran', 'wpucountrylist') ,
            ) ,
            'IS' => array(
                'continent' => 'europe',
                'country' => __('Iceland', 'wpucountrylist') ,
            ) ,
            'IT' => array(
                'continent' => 'europe',
                'country' => __('Italy', 'wpucountrylist') ,
            ) ,
            'JE' => array(
                'continent' => 'europe',
                'country' => __('Jersey', 'wpucountrylist') ,
            ) ,
            'JM' => array(
                'continent' => 'america',
                'country' => __('Jamaica', 'wpucountrylist') ,
            ) ,
            'JO' => array(
                'continent' => 'asia',
                'country' => __('Jordan', 'wpucountrylist') ,
            ) ,
            'JP' => array(
                'continent' => 'asia',
                'country' => __('Japan', 'wpucountrylist') ,
            ) ,
            'KE' => array(
                'continent' => 'africa',
                'country' => __('Kenya', 'wpucountrylist') ,
            ) ,
            'KG' => array(
                'continent' => 'asia',
                'country' => __('Kyrgyzstan', 'wpucountrylist') ,
            ) ,
            'KH' => array(
                'continent' => 'asia',
                'country' => __('Cambodia', 'wpucountrylist') ,
            ) ,
            'KI' => array(
                'continent' => 'oceania',
                'country' => __('Kiribati', 'wpucountrylist') ,
            ) ,
            'KM' => array(
                'continent' => 'africa',
                'country' => __('Comoros', 'wpucountrylist') ,
            ) ,
            'KN' => array(
                'continent' => 'america',
                'country' => __('Saint Kitts and Nevis', 'wpucountrylist') ,
            ) ,
            'KP' => array(
                'continent' => 'asia',
                'country' => __('North Korea', 'wpucountrylist') ,
            ) ,
            'KR' => array(
                'continent' => 'asia',
                'country' => __('South Korea', 'wpucountrylist') ,
            ) ,
            'KW' => array(
                'continent' => 'asia',
                'country' => __('Kuwait', 'wpucountrylist') ,
            ) ,
            'KY' => array(
                'continent' => 'america',
                'country' => __('Cayman Islands', 'wpucountrylist') ,
            ) ,
            'KZ' => array(
                'continent' => 'asia',
                'country' => __('Kazakhstan', 'wpucountrylist') ,
            ) ,
            'LA' => array(
                'continent' => 'asia',
                'country' => __('Lao People\'s Democratic Republic', 'wpucountrylist') ,
            ) ,
            'LB' => array(
                'continent' => 'asia',
                'country' => __('Lebanon', 'wpucountrylist') ,
            ) ,
            'LC' => array(
                'continent' => 'america',
                'country' => __('Saint Lucia', 'wpucountrylist') ,
            ) ,
            'LI' => array(
                'continent' => 'europe',
                'country' => __('Liechtenstein', 'wpucountrylist') ,
            ) ,
            'LK' => array(
                'continent' => 'asia',
                'country' => __('Sri Lanka', 'wpucountrylist') ,
            ) ,
            'LR' => array(
                'continent' => 'africa',
                'country' => __('Liberia', 'wpucountrylist') ,
            ) ,
            'LS' => array(
                'continent' => 'africa',
                'country' => __('Lesotho', 'wpucountrylist') ,
            ) ,
            'LT' => array(
                'continent' => 'europe',
                'country' => __('Lithuania', 'wpucountrylist') ,
            ) ,
            'LU' => array(
                'continent' => 'europe',
                'country' => __('Luxembourg', 'wpucountrylist') ,
            ) ,
            'LV' => array(
                'continent' => 'europe',
                'country' => __('Latvia', 'wpucountrylist') ,
            ) ,
            'LY' => array(
                'continent' => 'africa',
                'country' => __('Libya', 'wpucountrylist') ,
            ) ,
            'MA' => array(
                'continent' => 'africa',
                'country' => __('Morocco', 'wpucountrylist') ,
            ) ,
            'MC' => array(
                'continent' => 'europe',
                'country' => __('Monaco', 'wpucountrylist') ,
            ) ,
            'MD' => array(
                'continent' => 'europe',
                'country' => __('Moldova', 'wpucountrylist') ,
            ) ,
            'ME' => array(
                'continent' => 'europe',
                'country' => __('Montenegro', 'wpucountrylist') ,
            ) ,
            'MF' => array(
                'continent' => 'america',
                'country' => __('Saint-Martin (France)', 'wpucountrylist') ,
            ) ,
            'MG' => array(
                'continent' => 'africa',
                'country' => __('Madagascar', 'wpucountrylist') ,
            ) ,
            'MH' => array(
                'continent' => 'oceania',
                'country' => __('Marshall Islands', 'wpucountrylist') ,
            ) ,
            'MK' => array(
                'continent' => 'europe',
                'country' => __('Macedonia', 'wpucountrylist') ,
            ) ,
            'ML' => array(
                'continent' => 'africa',
                'country' => __('Mali', 'wpucountrylist') ,
            ) ,
            'MM' => array(
                'continent' => 'asia',
                'country' => __('Myanmar', 'wpucountrylist') ,
            ) ,
            'MN' => array(
                'continent' => 'asia',
                'country' => __('Mongolia', 'wpucountrylist') ,
            ) ,
            'MO' => array(
                'continent' => 'asia',
                'country' => __('Macau', 'wpucountrylist') ,
            ) ,
            'MP' => array(
                'continent' => 'oceania',
                'country' => __('Northern Mariana Islands', 'wpucountrylist') ,
            ) ,
            'MQ' => array(
                'continent' => 'america',
                'country' => __('Martinique', 'wpucountrylist') ,
            ) ,
            'MR' => array(
                'continent' => 'africa',
                'country' => __('Mauritania', 'wpucountrylist') ,
            ) ,
            'MS' => array(
                'continent' => 'america',
                'country' => __('Montserrat', 'wpucountrylist') ,
            ) ,
            'MT' => array(
                'continent' => 'europe',
                'country' => __('Malta', 'wpucountrylist') ,
            ) ,
            'MU' => array(
                'continent' => 'africa',
                'country' => __('Mauritius', 'wpucountrylist') ,
            ) ,
            'MV' => array(
                'continent' => 'asia',
                'country' => __('Maldives', 'wpucountrylist') ,
            ) ,
            'MW' => array(
                'continent' => 'africa',
                'country' => __('Malawi', 'wpucountrylist') ,
            ) ,
            'MX' => array(
                'continent' => 'america',
                'country' => __('Mexico', 'wpucountrylist') ,
            ) ,
            'MY' => array(
                'continent' => 'asia',
                'country' => __('Malaysia', 'wpucountrylist') ,
            ) ,
            'MZ' => array(
                'continent' => 'africa',
                'country' => __('Mozambique', 'wpucountrylist') ,
            ) ,
            'NA' => array(
                'continent' => 'africa',
                'country' => __('Namibia', 'wpucountrylist') ,
            ) ,
            'NC' => array(
                'continent' => 'oceania',
                'country' => __('New Caledonia', 'wpucountrylist') ,
            ) ,
            'NE' => array(
                'continent' => 'africa',
                'country' => __('Niger', 'wpucountrylist') ,
            ) ,
            'NF' => array(
                'continent' => 'oceania',
                'country' => __('Norfolk Island', 'wpucountrylist') ,
            ) ,
            'NG' => array(
                'continent' => 'africa',
                'country' => __('Nigeria', 'wpucountrylist') ,
            ) ,
            'NI' => array(
                'continent' => 'america',
                'country' => __('Nicaragua', 'wpucountrylist') ,
            ) ,
            'NL' => array(
                'continent' => 'europe',
                'country' => __('The Netherlands', 'wpucountrylist') ,
            ) ,
            'NO' => array(
                'continent' => 'europe',
                'country' => __('Norway', 'wpucountrylist') ,
            ) ,
            'NP' => array(
                'continent' => 'asia',
                'country' => __('Nepal', 'wpucountrylist') ,
            ) ,
            'NR' => array(
                'continent' => 'oceania',
                'country' => __('Nauru', 'wpucountrylist') ,
            ) ,
            'NU' => array(
                'continent' => 'oceania',
                'country' => __('Niue', 'wpucountrylist') ,
            ) ,
            'NZ' => array(
                'continent' => 'oceania',
                'country' => __('New Zealand', 'wpucountrylist') ,
            ) ,
            'OM' => array(
                'continent' => 'asia',
                'country' => __('Oman', 'wpucountrylist') ,
            ) ,
            'PA' => array(
                'continent' => 'america',
                'country' => __('Panama', 'wpucountrylist') ,
            ) ,
            'PE' => array(
                'continent' => 'america',
                'country' => __('Peru', 'wpucountrylist') ,
            ) ,
            'PF' => array(
                'continent' => 'oceania',
                'country' => __('French Polynesia', 'wpucountrylist') ,
            ) ,
            'PG' => array(
                'continent' => 'oceania',
                'country' => __('Papua New Guinea', 'wpucountrylist') ,
            ) ,
            'PH' => array(
                'continent' => 'asia',
                'country' => __('Philippines', 'wpucountrylist') ,
            ) ,
            'PK' => array(
                'continent' => 'asia',
                'country' => __('Pakistan', 'wpucountrylist') ,
            ) ,
            'PL' => array(
                'continent' => 'europe',
                'country' => __('Poland', 'wpucountrylist') ,
            ) ,
            'PM' => array(
                'continent' => 'america',
                'country' => __('St. Pierre and Miquelon', 'wpucountrylist') ,
            ) ,
            'PN' => array(
                'continent' => 'oceania',
                'country' => __('Pitcairn', 'wpucountrylist') ,
            ) ,
            'PR' => array(
                'continent' => 'america',
                'country' => __('Puerto Rico', 'wpucountrylist') ,
            ) ,
            'PS' => array(
                'continent' => 'asia',
                'country' => __('State of Palestine', 'wpucountrylist') ,
            ) ,
            'PT' => array(
                'continent' => 'europe',
                'country' => __('Portugal', 'wpucountrylist') ,
            ) ,
            'PW' => array(
                'continent' => 'oceania',
                'country' => __('Palau', 'wpucountrylist') ,
            ) ,
            'PY' => array(
                'continent' => 'america',
                'country' => __('Paraguay', 'wpucountrylist') ,
            ) ,
            'QA' => array(
                'continent' => 'asia',
                'country' => __('Qatar', 'wpucountrylist') ,
            ) ,
            'RE' => array(
                'continent' => 'africa',
                'country' => __('Réunion', 'wpucountrylist') ,
            ) ,
            'RO' => array(
                'continent' => 'europe',
                'country' => __('Romania', 'wpucountrylist') ,
            ) ,
            'RS' => array(
                'continent' => 'europe',
                'country' => __('Serbia', 'wpucountrylist') ,
            ) ,
            'RU' => array(
                'continent' => 'europe',
                'country' => __('Russian Federation', 'wpucountrylist') ,
            ) ,
            'RW' => array(
                'continent' => 'africa',
                'country' => __('Rwanda', 'wpucountrylist') ,
            ) ,
            'SA' => array(
                'continent' => 'asia',
                'country' => __('Saudi Arabia', 'wpucountrylist') ,
            ) ,
            'SB' => array(
                'continent' => 'oceania',
                'country' => __('Solomon Islands', 'wpucountrylist') ,
            ) ,
            'SC' => array(
                'continent' => 'africa',
                'country' => __('Seychelles', 'wpucountrylist') ,
            ) ,
            'SD' => array(
                'continent' => 'africa',
                'country' => __('Sudan', 'wpucountrylist') ,
            ) ,
            'SE' => array(
                'continent' => 'europe',
                'country' => __('Sweden', 'wpucountrylist') ,
            ) ,
            'SG' => array(
                'continent' => 'asia',
                'country' => __('Singapore', 'wpucountrylist') ,
            ) ,
            'SH' => array(
                'continent' => 'africa',
                'country' => __('Saint Helena', 'wpucountrylist') ,
            ) ,
            'SI' => array(
                'continent' => 'europe',
                'country' => __('Slovenia', 'wpucountrylist') ,
            ) ,
            'SJ' => array(
                'continent' => 'europe',
                'country' => __('Svalbard and Jan Mayen Islands', 'wpucountrylist') ,
            ) ,
            'SK' => array(
                'continent' => 'europe',
                'country' => __('Slovakia', 'wpucountrylist') ,
            ) ,
            'SL' => array(
                'continent' => 'africa',
                'country' => __('Sierra Leone', 'wpucountrylist') ,
            ) ,
            'SM' => array(
                'continent' => 'europe',
                'country' => __('San Marino', 'wpucountrylist') ,
            ) ,
            'SN' => array(
                'continent' => 'africa',
                'country' => __('Senegal', 'wpucountrylist') ,
            ) ,
            'SO' => array(
                'continent' => 'africa',
                'country' => __('Somalia', 'wpucountrylist') ,
            ) ,
            'SR' => array(
                'continent' => 'america',
                'country' => __('Suriname', 'wpucountrylist') ,
            ) ,
            'SS' => array(
                'continent' => 'africa',
                'country' => __('South Sudan', 'wpucountrylist') ,
            ) ,
            'ST' => array(
                'continent' => 'africa',
                'country' => __('Sao Tome and Principe', 'wpucountrylist') ,
            ) ,
            'SV' => array(
                'continent' => 'america',
                'country' => __('El Salvador', 'wpucountrylist') ,
            ) ,
            'SX' => array(
                'continent' => 'america',
                'country' => __('Sint Maarten (Dutch part)', 'wpucountrylist') ,
            ) ,
            'SY' => array(
                'continent' => 'asia',
                'country' => __('Syria', 'wpucountrylist') ,
            ) ,
            'SZ' => array(
                'continent' => 'africa',
                'country' => __('Swaziland', 'wpucountrylist') ,
            ) ,
            'TC' => array(
                'continent' => 'america',
                'country' => __('Turks and Caicos Islands', 'wpucountrylist') ,
            ) ,
            'TD' => array(
                'continent' => 'africa',
                'country' => __('Chad', 'wpucountrylist') ,
            ) ,
            'TF' => array(
                'continent' => 'oceania',
                'country' => __('French Southern Territories', 'wpucountrylist') ,
            ) ,
            'TG' => array(
                'continent' => 'africa',
                'country' => __('Togo', 'wpucountrylist') ,
            ) ,
            'TH' => array(
                'continent' => 'asia',
                'country' => __('Thailand', 'wpucountrylist') ,
            ) ,
            'TJ' => array(
                'continent' => 'asia',
                'country' => __('Tajikistan', 'wpucountrylist') ,
            ) ,
            'TK' => array(
                'continent' => 'oceania',
                'country' => __('Tokelau', 'wpucountrylist') ,
            ) ,
            'TL' => array(
                'continent' => 'asia',
                'country' => __('Timor-Leste', 'wpucountrylist') ,
            ) ,
            'TM' => array(
                'continent' => 'asia',
                'country' => __('Turkmenistan', 'wpucountrylist') ,
            ) ,
            'TN' => array(
                'continent' => 'africa',
                'country' => __('Tunisia', 'wpucountrylist') ,
            ) ,
            'TO' => array(
                'continent' => 'oceania',
                'country' => __('Tonga', 'wpucountrylist') ,
            ) ,
            'TR' => array(
                'continent' => 'asia',
                'country' => __('Turkey', 'wpucountrylist') ,
            ) ,
            'TT' => array(
                'continent' => 'america',
                'country' => __('Trinidad and Tobago', 'wpucountrylist') ,
            ) ,
            'TV' => array(
                'continent' => 'oceania',
                'country' => __('Tuvalu', 'wpucountrylist') ,
            ) ,
            'TW' => array(
                'continent' => 'asia',
                'country' => __('Taiwan', 'wpucountrylist') ,
            ) ,
            'TZ' => array(
                'continent' => 'africa',
                'country' => __('Tanzania', 'wpucountrylist') ,
            ) ,
            'UA' => array(
                'continent' => 'europe',
                'country' => __('Ukraine', 'wpucountrylist') ,
            ) ,
            'UG' => array(
                'continent' => 'africa',
                'country' => __('Uganda', 'wpucountrylist') ,
            ) ,
            'UM' => array(
                'continent' => 'oceania',
                'country' => __('United States Minor Outlying Islands', 'wpucountrylist') ,
            ) ,
            'US' => array(
                'continent' => 'america',
                'country' => __('United States', 'wpucountrylist') ,
            ) ,
            'UY' => array(
                'continent' => 'america',
                'country' => __('Uruguay', 'wpucountrylist') ,
            ) ,
            'UZ' => array(
                'continent' => 'asia',
                'country' => __('Uzbekistan', 'wpucountrylist') ,
            ) ,
            'VA' => array(
                'continent' => 'europe',
                'country' => __('Vatican', 'wpucountrylist') ,
            ) ,
            'VC' => array(
                'continent' => 'america',
                'country' => __('Saint Vincent and the Grenadines', 'wpucountrylist') ,
            ) ,
            'VE' => array(
                'continent' => 'america',
                'country' => __('Venezuela', 'wpucountrylist') ,
            ) ,
            'VG' => array(
                'continent' => 'america',
                'country' => __('Virgin Islands (British)', 'wpucountrylist') ,
            ) ,
            'VI' => array(
                'continent' => 'america',
                'country' => __('Virgin Islands (U.S.)', 'wpucountrylist') ,
            ) ,
            'VN' => array(
                'continent' => 'asia',
                'country' => __('Vietnam', 'wpucountrylist') ,
            ) ,
            'VU' => array(
                'continent' => 'oceania',
                'country' => __('Vanuatu', 'wpucountrylist') ,
            ) ,
            'WF' => array(
                'continent' => 'oceania',
                'country' => __('Wallis and Futuna Islands', 'wpucountrylist') ,
            ) ,
            'WS' => array(
                'continent' => 'oceania',
                'country' => __('Samoa', 'wpucountrylist') ,
            ) ,
            'YE' => array(
                'continent' => 'asia',
                'country' => __('Yemen', 'wpucountrylist') ,
            ) ,
            'YT' => array(
                'continent' => 'africa',
                'country' => __('Mayotte', 'wpucountrylist') ,
            ) ,
            'ZA' => array(
                'continent' => 'africa',
                'country' => __('South Africa', 'wpucountrylist') ,
            ) ,
            'ZM' => array(
                'continent' => 'africa',
                'country' => __('Zambia', 'wpucountrylist') ,
            ) ,
            'ZW' => array(
                'continent' => 'africa',
                'country' => __('Zimbabwe', 'wpucountrylist') ,
            ) ,
        );
    }

    function getList() {
        if (empty($this->list)) {
            $this->load_list();
        }
        $list = apply_filters('wpucountrylist_list', $this->list);
        $current_country = explode('_', get_locale());
        $current_country = strtoupper($current_country[0]);
        $country_code = 'EN';
        if (array_key_exists($current_country, $this->list)) {
            $country_code = $current_country;
        }
        $return_list = array();
        foreach ($list as $code => $country) {
            $return_list[$code] = $country['country'];
        }
        return $return_list;
    }
}

$WPUCountryList = new WPUCountryList();

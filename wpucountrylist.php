<?php
defined('ABSPATH') || die;

/*
Plugin Name: WPU Country list
Description: Retrieve a list of countries
Version: 0.5.1
Author: Darklg
Author URI: https://darklg.me/
Text Domain: wpucountrylist
Domain Path: /lang
Requires at least: 6.2
Requires PHP: 8.0
Network: Optional
License: MIT License
License URI: https://opensource.org/licenses/MIT
Thanks: To PLSoucy - https://blog.plsoucy.com/2012/04/iso-3166-country-code-list-csv-sql/
*/

class WPUCountryList {
    public $plugin_description;

    public $list = array();

    public function __construct() {
        add_action('init', array(&$this,
            'load_plugin_textdomain'
        ));
        add_action('init', array(&$this,
            'load_list'
        ));
    }

    public function load_plugin_textdomain() {
        $lang_dir = dirname(plugin_basename(__FILE__)) . '/lang/';
        if (strpos(__DIR__, 'mu-plugins') !== false) {
            load_muplugin_textdomain('wpucountrylist', $lang_dir);
        } else {
            load_plugin_textdomain('wpucountrylist', false, $lang_dir);
        }
        $this->plugin_description = __('Retrieve a list of countries', 'wpucountrylist');
    }

    public function load_list() {
        if (!empty($this->list)) {
            return false;
        }
        $this->list = array(
            'AD' => array(
                'continent' => 'europe',
                'country' => __('Andorra', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '42.546245',
                'lng' => '1.601554'
            ),
            'AE' => array(
                'continent' => 'asia',
                'country' => __('United Arab Emirates', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '23.424076',
                'lng' => '53.847818'
            ),
            'AF' => array(
                'continent' => 'asia',
                'country' => __('Afghanistan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '33.93911',
                'lng' => '67.709953'
            ),
            'AG' => array(
                'continent' => 'america',
                'country' => __('Antigua and Barbuda', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '17.060816',
                'lng' => '-61.796428'
            ),
            'AI' => array(
                'continent' => 'america',
                'country' => __('Anguilla', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.220554',
                'lng' => '-63.068615'
            ),
            'AL' => array(
                'continent' => 'europe',
                'country' => __('Albania', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '41.153332',
                'lng' => '20.168331'
            ),
            'AM' => array(
                'continent' => 'asia',
                'country' => __('Armenia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '40.069099',
                'lng' => '45.038189'
            ),
            'AO' => array(
                'continent' => 'africa',
                'country' => __('Angola', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-11.202692',
                'lng' => '17.873887'
            ),
            'AQ' => array(
                'continent' => 'oceania',
                'country' => __('Antarctica', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-75.250973',
                'lng' => '-0.071389'
            ),
            'AR' => array(
                'continent' => 'america',
                'country' => __('Argentina', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-38.416097',
                'lng' => '-63.616672'
            ),
            'AS' => array(
                'continent' => 'oceania',
                'country' => __('American Samoa', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-14.270972',
                'lng' => '-170.132217'
            ),
            'AT' => array(
                'continent' => 'europe',
                'country' => __('Austria', 'wpucountrylist'),
                'zoom' => 7,
                'lat' => '47.516231',
                'lng' => '14.550072'
            ),
            'AU' => array(
                'continent' => 'oceania',
                'country' => __('Australia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-25.274398',
                'lng' => '133.775136'
            ),
            'AW' => array(
                'continent' => 'america',
                'country' => __('Aruba', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.52111',
                'lng' => '-69.968338'
            ),
            'AX' => array(
                'continent' => 'europe',
                'country' => __('Åland Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '60.1462035',
                'lng' => '19.8263793'
            ),
            'AZ' => array(
                'continent' => 'asia',
                'country' => __('Azerbaijan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '40.143105',
                'lng' => '47.576927'
            ),
            'BA' => array(
                'continent' => 'europe',
                'country' => __('Bosnia and Herzegovina', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '43.915886',
                'lng' => '17.679076'
            ),
            'BB' => array(
                'continent' => 'america',
                'country' => __('Barbados', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '13.193887',
                'lng' => '-59.543198'
            ),
            'BD' => array(
                'continent' => 'asia',
                'country' => __('Bangladesh', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '23.684994',
                'lng' => '90.356331'
            ),
            'BE' => array(
                'continent' => 'europe',
                'country' => __('Belgium', 'wpucountrylist'),
                'zoom' => 7,
                'lat' => '50.503887',
                'lng' => '4.469936'
            ),
            'BF' => array(
                'continent' => 'africa',
                'country' => __('Burkina Faso', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.238333',
                'lng' => '-1.561593'
            ),
            'BG' => array(
                'continent' => 'europe',
                'country' => __('Bulgaria', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '42.733883',
                'lng' => '25.48583'
            ),
            'BH' => array(
                'continent' => 'asia',
                'country' => __('Bahrain', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '25.930414',
                'lng' => '50.637772'
            ),
            'BI' => array(
                'continent' => 'africa',
                'country' => __('Burundi', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-3.373056',
                'lng' => '29.918886'
            ),
            'BJ' => array(
                'continent' => 'africa',
                'country' => __('Benin', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '9.30769',
                'lng' => '2.315834'
            ),
            'BL' => array(
                'continent' => 'america',
                'country' => __('Saint Barthélemy', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '17.8927276',
                'lng' => '-62.8334239'
            ),
            'BM' => array(
                'continent' => 'america',
                'country' => __('Bermuda', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '32.321384',
                'lng' => '-64.75737'
            ),
            'BN' => array(
                'continent' => 'asia',
                'country' => __('Brunei Darussalam', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '4.535277',
                'lng' => '114.727669'
            ),
            'BO' => array(
                'continent' => 'america',
                'country' => __('Bolivia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-16.290154',
                'lng' => '-63.588653'
            ),
            'BQ' => array(
                'continent' => 'america',
                'country' => __('Caribbean Netherlands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.1683718',
                'lng' => '-68.308183'
            ),
            'BR' => array(
                'continent' => 'america',
                'country' => __('Brazil', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-14.235004',
                'lng' => '-51.92528'
            ),
            'BS' => array(
                'continent' => 'america',
                'country' => __('Bahamas', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '25.03428',
                'lng' => '-77.39628'
            ),
            'BT' => array(
                'continent' => 'asia',
                'country' => __('Bhutan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '27.514162',
                'lng' => '90.433601'
            ),
            'BV' => array(
                'continent' => 'oceania',
                'country' => __('Bouvet Island', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-54.423199',
                'lng' => '3.413194'
            ),
            'BW' => array(
                'continent' => 'africa',
                'country' => __('Botswana', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-22.328474',
                'lng' => '24.684866'
            ),
            'BY' => array(
                'continent' => 'europe',
                'country' => __('Belarus', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '53.709807',
                'lng' => '27.953389'
            ),
            'BZ' => array(
                'continent' => 'america',
                'country' => __('Belize', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '17.189877',
                'lng' => '-88.49765'
            ),
            'CA' => array(
                'continent' => 'america',
                'country' => __('Canada', 'wpucountrylist'),
                'zoom' => 4,
                'lat' => '56.130366',
                'lng' => '-99.346771'
            ),
            'CC' => array(
                'continent' => 'oceania',
                'country' => __('Cocos (Keeling) Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-12.164165',
                'lng' => '96.870956'
            ),
            'CD' => array(
                'continent' => 'africa',
                'country' => __('Democratic Republic of Congo', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-4.038333',
                'lng' => '21.758664'
            ),
            'CF' => array(
                'continent' => 'africa',
                'country' => __('Central African Republic', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '6.611111',
                'lng' => '20.939444'
            ),
            'CG' => array(
                'continent' => 'africa',
                'country' => __('Congo', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-0.228021',
                'lng' => '15.827659'
            ),
            'CH' => array(
                'continent' => 'europe',
                'country' => __('Switzerland', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '46.818188',
                'lng' => '8.227512'
            ),
            'CI' => array(
                'continent' => 'africa',
                'country' => __('Côte d\'Ivoire', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.539989',
                'lng' => '-5.54708'
            ),
            'CK' => array(
                'continent' => 'oceania',
                'country' => __('Cook Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-21.236736',
                'lng' => '-159.777671'
            ),
            'CL' => array(
                'continent' => 'america',
                'country' => __('Chile', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-35.675147',
                'lng' => '-71.542969'
            ),
            'CM' => array(
                'continent' => 'africa',
                'country' => __('Cameroon', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.369722',
                'lng' => '12.354722'
            ),
            'CN' => array(
                'continent' => 'asia',
                'country' => __('China', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '35.86166',
                'lng' => '104.195397'
            ),
            'CO' => array(
                'continent' => 'america',
                'country' => __('Colombia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '4.570868',
                'lng' => '-74.297333'
            ),
            'CR' => array(
                'continent' => 'america',
                'country' => __('Costa Rica', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '9.748917',
                'lng' => '-83.753428'
            ),
            'CU' => array(
                'continent' => 'america',
                'country' => __('Cuba', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '21.521757',
                'lng' => '-77.781167'
            ),
            'CV' => array(
                'continent' => 'africa',
                'country' => __('Cape Verde', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '16.002082',
                'lng' => '-24.013197'
            ),
            'CW' => array(
                'continent' => 'america',
                'country' => __('Curaçao', 'wpucountrylist'),
                'zoom' => 9,
                'lat' => '12.1542459',
                'lng' => '-68.9464319'
            ),
            'CX' => array(
                'continent' => 'oceania',
                'country' => __('Christmas Island', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-10.447525',
                'lng' => '105.690449'
            ),
            'CY' => array(
                'continent' => 'europe',
                'country' => __('Cyprus', 'wpucountrylist'),
                'zoom' => 9,
                'lat' => '35.126413',
                'lng' => '33.429859'
            ),
            'CZ' => array(
                'continent' => 'europe',
                'country' => __('Czech Republic', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '49.817492',
                'lng' => '15.472962'
            ),
            'DE' => array(
                'continent' => 'europe',
                'country' => __('Germany', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '51.165691',
                'lng' => '10.451526'
            ),
            'DJ' => array(
                'continent' => 'africa',
                'country' => __('Djibouti', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '11.825138',
                'lng' => '42.590275'
            ),
            'DK' => array(
                'continent' => 'europe',
                'country' => __('Denmark', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '56.26392',
                'lng' => '9.501785'
            ),
            'DM' => array(
                'continent' => 'america',
                'country' => __('Dominica', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '15.414999',
                'lng' => '-61.370976'
            ),
            'DO' => array(
                'continent' => 'america',
                'country' => __('Dominican Republic', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.735693',
                'lng' => '-70.162651'
            ),
            'DZ' => array(
                'continent' => 'africa',
                'country' => __('Algeria', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '28.033886',
                'lng' => '1.659626'
            ),
            'EC' => array(
                'continent' => 'america',
                'country' => __('Ecuador', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-1.831239',
                'lng' => '-78.183406'
            ),
            'EE' => array(
                'continent' => 'europe',
                'country' => __('Estonia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '58.595272',
                'lng' => '25.013607'
            ),
            'EG' => array(
                'continent' => 'africa',
                'country' => __('Egypt', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '26.820553',
                'lng' => '30.802498'
            ),
            'EH' => array(
                'continent' => 'africa',
                'country' => __('Western Sahara', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '24.215527',
                'lng' => '-12.885834'
            ),
            'ER' => array(
                'continent' => 'africa',
                'country' => __('Eritrea', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '15.179384',
                'lng' => '39.782334'
            ),
            'ES' => array(
                'continent' => 'europe',
                'country' => __('Spain', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '40.463667',
                'lng' => '-3.74922'
            ),
            'ET' => array(
                'continent' => 'africa',
                'country' => __('Ethiopia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '9.145',
                'lng' => '40.489673'
            ),
            'FI' => array(
                'continent' => 'europe',
                'country' => __('Finland', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '61.92411',
                'lng' => '25.748151'
            ),
            'FJ' => array(
                'continent' => 'oceania',
                'country' => __('Fiji', 'wpucountrylist'),
                'zoom' => 9,
                'lat' => '-16.578193',
                'lng' => '179.414413'
            ),
            'FK' => array(
                'continent' => 'america',
                'country' => __('Falkland Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-51.796253',
                'lng' => '-59.523613'
            ),
            'FM' => array(
                'continent' => 'oceania',
                'country' => __('Federated States of Micronesia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.425554',
                'lng' => '150.550812'
            ),
            'FO' => array(
                'continent' => 'europe',
                'country' => __('Faroe Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '61.892635',
                'lng' => '-6.911806'
            ),
            'FR' => array(
                'continent' => 'europe',
                'country' => __('France', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '46.227638',
                'lng' => '2.213749'
            ),
            'GA' => array(
                'continent' => 'africa',
                'country' => __('Gabon', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-0.803689',
                'lng' => '11.609444'
            ),
            'GB' => array(
                'continent' => 'europe',
                'country' => __('United Kingdom', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '54.578051',
                'lng' => '-3.435973'
            ),
            'GD' => array(
                'continent' => 'america',
                'country' => __('Grenada', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.262776',
                'lng' => '-61.604171'
            ),
            'GE' => array(
                'continent' => 'asia',
                'country' => __('Georgia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '42.315407',
                'lng' => '43.356892'
            ),
            'GF' => array(
                'continent' => 'america',
                'country' => __('French Guiana', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '3.933889',
                'lng' => '-53.125782'
            ),
            'GG' => array(
                'continent' => 'europe',
                'country' => __('Guernsey', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '49.465691',
                'lng' => '-2.585278'
            ),
            'GH' => array(
                'continent' => 'africa',
                'country' => __('Ghana', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.946527',
                'lng' => '-1.023194'
            ),
            'GI' => array(
                'continent' => 'europe',
                'country' => __('Gibraltar', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '36.137741',
                'lng' => '-5.345374'
            ),
            'GL' => array(
                'continent' => 'america',
                'country' => __('Greenland', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '71.706936',
                'lng' => '-42.604303'
            ),
            'GM' => array(
                'continent' => 'africa',
                'country' => __('Gambia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '13.443182',
                'lng' => '-15.310139'
            ),
            'GN' => array(
                'continent' => 'africa',
                'country' => __('Guinea', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '9.945587',
                'lng' => '-9.696645'
            ),
            'GP' => array(
                'continent' => 'america',
                'country' => __('Guadeloupe', 'wpucountrylist'),
                'zoom' => 10,
                'lat' => '16.995971',
                'lng' => '-62.067641'
            ),
            'GQ' => array(
                'continent' => 'africa',
                'country' => __('Equatorial Guinea', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '1.650801',
                'lng' => '10.267895'
            ),
            'GR' => array(
                'continent' => 'europe',
                'country' => __('Greece', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '39.074208',
                'lng' => '21.824312'
            ),
            'GS' => array(
                'continent' => 'oceania',
                'country' => __('South Georgia and the South Sandwich Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-54.429579',
                'lng' => '-36.587909'
            ),
            'GT' => array(
                'continent' => 'america',
                'country' => __('Guatemala', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '15.783471',
                'lng' => '-90.230759'
            ),
            'GU' => array(
                'continent' => 'oceania',
                'country' => __('Guam', 'wpucountrylist'),
                'zoom' => 10,
                'lat' => '13.444304',
                'lng' => '144.793731'
            ),
            'GW' => array(
                'continent' => 'africa',
                'country' => __('Guinea-Bissau', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '11.803749',
                'lng' => '-15.180413'
            ),
            'GY' => array(
                'continent' => 'america',
                'country' => __('Guyana', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '4.860416',
                'lng' => '-58.93018'
            ),
            'HK' => array(
                'continent' => 'asia',
                'country' => __('Hong Kong', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '22.396428',
                'lng' => '114.109497'
            ),
            'HM' => array(
                'continent' => 'oceania',
                'country' => __('Heard and McDonald Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-53.08181',
                'lng' => '73.504158'
            ),
            'HN' => array(
                'continent' => 'america',
                'country' => __('Honduras', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '15.199999',
                'lng' => '-86.241905'
            ),
            'HR' => array(
                'continent' => 'europe',
                'country' => __('Croatia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '45.8069064',
                'lng' => '15.9712681'
            ),
            'HT' => array(
                'continent' => 'america',
                'country' => __('Haiti', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.971187',
                'lng' => '-72.285215'
            ),
            'HU' => array(
                'continent' => 'europe',
                'country' => __('Hungary', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '47.162494',
                'lng' => '19.503304'
            ),
            'ID' => array(
                'continent' => 'asia',
                'country' => __('Indonesia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-0.789275',
                'lng' => '113.921327'
            ),
            'IE' => array(
                'continent' => 'europe',
                'country' => __('Ireland', 'wpucountrylist'),
                'zoom' => 7,
                'lat' => '53.41291',
                'lng' => '-8.24389'
            ),
            'IL' => array(
                'continent' => 'asia',
                'country' => __('Israel', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '31.046051',
                'lng' => '34.851612'
            ),
            'IM' => array(
                'continent' => 'europe',
                'country' => __('Isle of Man', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '54.236107',
                'lng' => '-4.548056'
            ),
            'IN' => array(
                'continent' => 'asia',
                'country' => __('India', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '20.593684',
                'lng' => '78.96288'
            ),
            'IO' => array(
                'continent' => 'oceania',
                'country' => __('British Indian Ocean Territory', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-6.343194',
                'lng' => '71.876519'
            ),
            'IQ' => array(
                'continent' => 'asia',
                'country' => __('Iraq', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '33.223191',
                'lng' => '43.679291'
            ),
            'IR' => array(
                'continent' => 'asia',
                'country' => __('Iran', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '32.427908',
                'lng' => '53.688046'
            ),
            'IS' => array(
                'continent' => 'europe',
                'country' => __('Iceland', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '64.963051',
                'lng' => '-19.020835'
            ),
            'IT' => array(
                'continent' => 'europe',
                'country' => __('Italy', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '41.87194',
                'lng' => '12.56738'
            ),
            'JE' => array(
                'continent' => 'europe',
                'country' => __('Jersey', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '49.214439',
                'lng' => '-2.13125'
            ),
            'JM' => array(
                'continent' => 'america',
                'country' => __('Jamaica', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.109581',
                'lng' => '-77.297508'
            ),
            'JO' => array(
                'continent' => 'asia',
                'country' => __('Jordan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '30.585164',
                'lng' => '36.238414'
            ),
            'JP' => array(
                'continent' => 'asia',
                'country' => __('Japan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '36.204824',
                'lng' => '138.252924'
            ),
            'KE' => array(
                'continent' => 'africa',
                'country' => __('Kenya', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-0.023559',
                'lng' => '37.906193'
            ),
            'KG' => array(
                'continent' => 'asia',
                'country' => __('Kyrgyzstan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '41.20438',
                'lng' => '74.766098'
            ),
            'KH' => array(
                'continent' => 'asia',
                'country' => __('Cambodia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.565679',
                'lng' => '104.990963'
            ),
            'KI' => array(
                'continent' => 'oceania',
                'country' => __('Kiribati', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-3.370417',
                'lng' => '-168.734039'
            ),
            'KM' => array(
                'continent' => 'africa',
                'country' => __('Comoros', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-11.875001',
                'lng' => '43.872219'
            ),
            'KN' => array(
                'continent' => 'america',
                'country' => __('Saint Kitts and Nevis', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '17.357822',
                'lng' => '-62.782998'
            ),
            'KP' => array(
                'continent' => 'asia',
                'country' => __('North Korea', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '40.339852',
                'lng' => '127.510093'
            ),
            'KR' => array(
                'continent' => 'asia',
                'country' => __('South Korea', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '35.907757',
                'lng' => '127.766922'
            ),
            'KW' => array(
                'continent' => 'asia',
                'country' => __('Kuwait', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '29.31166',
                'lng' => '47.481766'
            ),
            'KY' => array(
                'continent' => 'america',
                'country' => __('Cayman Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '19.513469',
                'lng' => '-80.566956'
            ),
            'KZ' => array(
                'continent' => 'asia',
                'country' => __('Kazakhstan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '48.019573',
                'lng' => '66.923684'
            ),
            'LA' => array(
                'continent' => 'asia',
                'country' => __('Lao People\'s Democratic Republic', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '19.85627',
                'lng' => '102.495496'
            ),
            'LB' => array(
                'continent' => 'asia',
                'country' => __('Lebanon', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '33.854721',
                'lng' => '35.862285'
            ),
            'LC' => array(
                'continent' => 'america',
                'country' => __('Saint Lucia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '13.909444',
                'lng' => '-60.978893'
            ),
            'LI' => array(
                'continent' => 'europe',
                'country' => __('Liechtenstein', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '47.166',
                'lng' => '9.555373'
            ),
            'LK' => array(
                'continent' => 'asia',
                'country' => __('Sri Lanka', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.873054',
                'lng' => '80.771797'
            ),
            'LR' => array(
                'continent' => 'africa',
                'country' => __('Liberia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '6.428055',
                'lng' => '-9.429499'
            ),
            'LS' => array(
                'continent' => 'africa',
                'country' => __('Lesotho', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-29.609988',
                'lng' => '28.233608'
            ),
            'LT' => array(
                'continent' => 'europe',
                'country' => __('Lithuania', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '55.169438',
                'lng' => '23.881275'
            ),
            'LU' => array(
                'continent' => 'europe',
                'country' => __('Luxembourg', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '49.815273',
                'lng' => '6.129583'
            ),
            'LV' => array(
                'continent' => 'europe',
                'country' => __('Latvia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '56.879635',
                'lng' => '24.603189'
            ),
            'LY' => array(
                'continent' => 'africa',
                'country' => __('Libya', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '26.3351',
                'lng' => '17.228331'
            ),
            'MA' => array(
                'continent' => 'africa',
                'country' => __('Morocco', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '31.791702',
                'lng' => '-7.09262'
            ),
            'MC' => array(
                'continent' => 'europe',
                'country' => __('Monaco', 'wpucountrylist'),
                'zoom' => 14,
                'lat' => '43.7379457',
                'lng' => '7.4290784'
            ),
            'MD' => array(
                'continent' => 'europe',
                'country' => __('Moldova', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '47.411631',
                'lng' => '28.369885'
            ),
            'ME' => array(
                'continent' => 'europe',
                'country' => __('Montenegro', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '42.708678',
                'lng' => '19.37439'
            ),
            'MF' => array(
                'continent' => 'america',
                'country' => __('Saint-Martin (France)', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.0702959',
                'lng' => '-63.0819655'
            ),
            'MG' => array(
                'continent' => 'africa',
                'country' => __('Madagascar', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-18.766947',
                'lng' => '46.869107'
            ),
            'MH' => array(
                'continent' => 'oceania',
                'country' => __('Marshall Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.131474',
                'lng' => '171.184478'
            ),
            'MK' => array(
                'continent' => 'europe',
                'country' => __('Macedonia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '41.608635',
                'lng' => '21.745275'
            ),
            'ML' => array(
                'continent' => 'africa',
                'country' => __('Mali', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '17.570692',
                'lng' => '-3.996166'
            ),
            'MM' => array(
                'continent' => 'asia',
                'country' => __('Myanmar', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '21.913965',
                'lng' => '95.956223'
            ),
            'MN' => array(
                'continent' => 'asia',
                'country' => __('Mongolia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '46.862496',
                'lng' => '103.846656'
            ),
            'MO' => array(
                'continent' => 'asia',
                'country' => __('Macau', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '22.198745',
                'lng' => '113.543873'
            ),
            'MP' => array(
                'continent' => 'oceania',
                'country' => __('Northern Mariana Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '17.33083',
                'lng' => '145.38469'
            ),
            'MQ' => array(
                'continent' => 'america',
                'country' => __('Martinique', 'wpucountrylist'),
                'zoom' => 10,
                'lat' => '14.641528',
                'lng' => '-61.024174'
            ),
            'MR' => array(
                'continent' => 'africa',
                'country' => __('Mauritania', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '21.00789',
                'lng' => '-10.940835'
            ),
            'MS' => array(
                'continent' => 'america',
                'country' => __('Montserrat', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '16.742498',
                'lng' => '-62.187366'
            ),
            'MT' => array(
                'continent' => 'europe',
                'country' => __('Malta', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '35.937496',
                'lng' => '14.375416'
            ),
            'MU' => array(
                'continent' => 'africa',
                'country' => __('Mauritius', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-20.348404',
                'lng' => '57.552152'
            ),
            'MV' => array(
                'continent' => 'asia',
                'country' => __('Maldives', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '3.202778',
                'lng' => '73.22068'
            ),
            'MW' => array(
                'continent' => 'africa',
                'country' => __('Malawi', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-13.254308',
                'lng' => '34.301525'
            ),
            'MX' => array(
                'continent' => 'america',
                'country' => __('Mexico', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '23.634501',
                'lng' => '-102.552784'
            ),
            'MY' => array(
                'continent' => 'asia',
                'country' => __('Malaysia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '4.210484',
                'lng' => '101.975766'
            ),
            'MZ' => array(
                'continent' => 'africa',
                'country' => __('Mozambique', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-18.665695',
                'lng' => '35.529562'
            ),
            'NA' => array(
                'continent' => 'africa',
                'country' => __('Namibia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-22.95764',
                'lng' => '18.49041'
            ),
            'NC' => array(
                'continent' => 'oceania',
                'country' => __('New Caledonia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-20.904305',
                'lng' => '165.618042'
            ),
            'NE' => array(
                'continent' => 'africa',
                'country' => __('Niger', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '17.607789',
                'lng' => '8.081666'
            ),
            'NF' => array(
                'continent' => 'oceania',
                'country' => __('Norfolk Island', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-29.040835',
                'lng' => '167.954712'
            ),
            'NG' => array(
                'continent' => 'africa',
                'country' => __('Nigeria', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '9.081999',
                'lng' => '8.675277'
            ),
            'NI' => array(
                'continent' => 'america',
                'country' => __('Nicaragua', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.865416',
                'lng' => '-85.207229'
            ),
            'NL' => array(
                'continent' => 'europe',
                'country' => __('The Netherlands', 'wpucountrylist'),
                'zoom' => 7,
                'lat' => '52.132633',
                'lng' => '5.291266'
            ),
            'NO' => array(
                'continent' => 'europe',
                'country' => __('Norway', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '60.472024',
                'lng' => '8.468946'
            ),
            'NP' => array(
                'continent' => 'asia',
                'country' => __('Nepal', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '28.394857',
                'lng' => '84.124008'
            ),
            'NR' => array(
                'continent' => 'oceania',
                'country' => __('Nauru', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-0.522778',
                'lng' => '166.931503'
            ),
            'NU' => array(
                'continent' => 'oceania',
                'country' => __('Niue', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-19.054445',
                'lng' => '-169.867233'
            ),
            'NZ' => array(
                'continent' => 'oceania',
                'country' => __('New Zealand', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-40.900557',
                'lng' => '174.885971'
            ),
            'OM' => array(
                'continent' => 'asia',
                'country' => __('Oman', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '21.512583',
                'lng' => '55.923255'
            ),
            'PA' => array(
                'continent' => 'america',
                'country' => __('Panama', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '8.537981',
                'lng' => '-80.782127'
            ),
            'PE' => array(
                'continent' => 'america',
                'country' => __('Peru', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-9.189967',
                'lng' => '-75.015152'
            ),
            'PF' => array(
                'continent' => 'oceania',
                'country' => __('French Polynesia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-17.679742',
                'lng' => '-149.406843'
            ),
            'PG' => array(
                'continent' => 'oceania',
                'country' => __('Papua New Guinea', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-6.314993',
                'lng' => '143.95555'
            ),
            'PH' => array(
                'continent' => 'asia',
                'country' => __('Philippines', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.879721',
                'lng' => '121.774017'
            ),
            'PK' => array(
                'continent' => 'asia',
                'country' => __('Pakistan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '30.375321',
                'lng' => '69.345116'
            ),
            'PL' => array(
                'continent' => 'europe',
                'country' => __('Poland', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '51.919438',
                'lng' => '19.145136'
            ),
            'PM' => array(
                'continent' => 'america',
                'country' => __('St. Pierre and Miquelon', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '46.941936',
                'lng' => '-56.27111'
            ),
            'PN' => array(
                'continent' => 'oceania',
                'country' => __('Pitcairn', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-24.703615',
                'lng' => '-127.439308'
            ),
            'PR' => array(
                'continent' => 'america',
                'country' => __('Puerto Rico', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.220833',
                'lng' => '-66.590149'
            ),
            'PS' => array(
                'continent' => 'asia',
                'country' => __('State of Palestine', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '31.952162',
                'lng' => '35.233154'
            ),
            'PT' => array(
                'continent' => 'europe',
                'country' => __('Portugal', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '39.399872',
                'lng' => '-8.224454'
            ),
            'PW' => array(
                'continent' => 'oceania',
                'country' => __('Palau', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.51498',
                'lng' => '134.58252'
            ),
            'PY' => array(
                'continent' => 'america',
                'country' => __('Paraguay', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-23.442503',
                'lng' => '-58.443832'
            ),
            'QA' => array(
                'continent' => 'asia',
                'country' => __('Qatar', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '25.354826',
                'lng' => '51.183884'
            ),
            'RE' => array(
                'continent' => 'africa',
                'country' => __('Réunion', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-21.115141',
                'lng' => '55.536384'
            ),
            'RO' => array(
                'continent' => 'europe',
                'country' => __('Romania', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '45.943161',
                'lng' => '24.96676'
            ),
            'RS' => array(
                'continent' => 'europe',
                'country' => __('Serbia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '44.016521',
                'lng' => '21.005859'
            ),
            'RU' => array(
                'continent' => 'europe',
                'country' => __('Russian Federation', 'wpucountrylist'),
                'zoom' => 3,
                'lat' => '61.52401',
                'lng' => '105.318756'
            ),
            'RW' => array(
                'continent' => 'africa',
                'country' => __('Rwanda', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-1.940278',
                'lng' => '29.873888'
            ),
            'SA' => array(
                'continent' => 'asia',
                'country' => __('Saudi Arabia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '23.885942',
                'lng' => '45.079162'
            ),
            'SB' => array(
                'continent' => 'oceania',
                'country' => __('Solomon Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-9.64571',
                'lng' => '160.156194'
            ),
            'SC' => array(
                'continent' => 'africa',
                'country' => __('Seychelles', 'wpucountrylist'),
                'zoom' => 10,
                'lat' => '-4.679574',
                'lng' => '55.491977'
            ),
            'SD' => array(
                'continent' => 'africa',
                'country' => __('Sudan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.862807',
                'lng' => '30.217636'
            ),
            'SE' => array(
                'continent' => 'europe',
                'country' => __('Sweden', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '60.128161',
                'lng' => '18.643501'
            ),
            'SG' => array(
                'continent' => 'asia',
                'country' => __('Singapore', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '1.352083',
                'lng' => '103.819836'
            ),
            'SH' => array(
                'continent' => 'africa',
                'country' => __('Saint Helena', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-24.143474',
                'lng' => '-10.030696'
            ),
            'SI' => array(
                'continent' => 'europe',
                'country' => __('Slovenia', 'wpucountrylist'),
                'zoom' => 8,
                'lat' => '46.151241',
                'lng' => '14.995463'
            ),
            'SJ' => array(
                'continent' => 'europe',
                'country' => __('Svalbard and Jan Mayen Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '77.553604',
                'lng' => '23.670272'
            ),
            'SK' => array(
                'continent' => 'europe',
                'country' => __('Slovakia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '48.669026',
                'lng' => '19.699024'
            ),
            'SL' => array(
                'continent' => 'africa',
                'country' => __('Sierra Leone', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '8.460555',
                'lng' => '-11.779889'
            ),
            'SM' => array(
                'continent' => 'europe',
                'country' => __('San Marino', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '43.94236',
                'lng' => '12.457777'
            ),
            'SN' => array(
                'continent' => 'africa',
                'country' => __('Senegal', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '14.497401',
                'lng' => '-14.452362'
            ),
            'SO' => array(
                'continent' => 'africa',
                'country' => __('Somalia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '5.152149',
                'lng' => '46.199616'
            ),
            'SR' => array(
                'continent' => 'america',
                'country' => __('Suriname', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '3.919305',
                'lng' => '-56.027783'
            ),
            'SS' => array(
                'continent' => 'africa',
                'country' => __('South Sudan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '7.8626845',
                'lng' => '29.694923'
            ),
            'ST' => array(
                'continent' => 'africa',
                'country' => __('Sao Tome and Principe', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '0.18636',
                'lng' => '6.613081'
            ),
            'SV' => array(
                'continent' => 'america',
                'country' => __('El Salvador', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '13.794185',
                'lng' => '-88.89653'
            ),
            'SX' => array(
                'continent' => 'america',
                'country' => __('Sint Maarten (Dutch part)', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.0317197',
                'lng' => '-63.0646891'
            ),
            'SY' => array(
                'continent' => 'asia',
                'country' => __('Syria', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '34.802075',
                'lng' => '38.996815'
            ),
            'SZ' => array(
                'continent' => 'africa',
                'country' => __('Swaziland', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-26.522503',
                'lng' => '31.465866'
            ),
            'TC' => array(
                'continent' => 'america',
                'country' => __('Turks and Caicos Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '21.694025',
                'lng' => '-71.797928'
            ),
            'TD' => array(
                'continent' => 'africa',
                'country' => __('Chad', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '15.454166',
                'lng' => '18.732207'
            ),
            'TF' => array(
                'continent' => 'oceania',
                'country' => __('French Southern Territories', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-49.280366',
                'lng' => '69.348557'
            ),
            'TG' => array(
                'continent' => 'africa',
                'country' => __('Togo', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '8.619543',
                'lng' => '0.824782'
            ),
            'TH' => array(
                'continent' => 'asia',
                'country' => __('Thailand', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '15.870032',
                'lng' => '100.992541'
            ),
            'TJ' => array(
                'continent' => 'asia',
                'country' => __('Tajikistan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '38.861034',
                'lng' => '71.276093'
            ),
            'TK' => array(
                'continent' => 'oceania',
                'country' => __('Tokelau', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-8.967363',
                'lng' => '-171.855881'
            ),
            'TL' => array(
                'continent' => 'asia',
                'country' => __('Timor-Leste', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-8.874217',
                'lng' => '125.727539'
            ),
            'TM' => array(
                'continent' => 'asia',
                'country' => __('Turkmenistan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '38.969719',
                'lng' => '59.556278'
            ),
            'TN' => array(
                'continent' => 'africa',
                'country' => __('Tunisia', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '33.886917',
                'lng' => '9.537499'
            ),
            'TO' => array(
                'continent' => 'oceania',
                'country' => __('Tonga', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-21.178986',
                'lng' => '-175.198242'
            ),
            'TR' => array(
                'continent' => 'asia',
                'country' => __('Turkey', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '38.963745',
                'lng' => '35.243322'
            ),
            'TT' => array(
                'continent' => 'america',
                'country' => __('Trinidad and Tobago', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '10.691803',
                'lng' => '-61.222503'
            ),
            'TV' => array(
                'continent' => 'oceania',
                'country' => __('Tuvalu', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-7.109535',
                'lng' => '177.64933'
            ),
            'TW' => array(
                'continent' => 'asia',
                'country' => __('Taiwan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '23.69781',
                'lng' => '120.960515'
            ),
            'TZ' => array(
                'continent' => 'africa',
                'country' => __('Tanzania', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-6.369028',
                'lng' => '34.888822'
            ),
            'UA' => array(
                'continent' => 'europe',
                'country' => __('Ukraine', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '48.379433',
                'lng' => '31.16558'
            ),
            'UG' => array(
                'continent' => 'africa',
                'country' => __('Uganda', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '1.373333',
                'lng' => '32.290275'
            ),
            'UM' => array(
                'continent' => 'oceania',
                'country' => __('United States Minor Outlying Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '',
                'lng' => ''
            ),
            'US' => array(
                'continent' => 'america',
                'country' => __('United States', 'wpucountrylist'),
                'zoom' => 4,
                'lat' => '37.09024',
                'lng' => '-95.712891'
            ),
            'UY' => array(
                'continent' => 'america',
                'country' => __('Uruguay', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-32.522779',
                'lng' => '-55.765835'
            ),
            'UZ' => array(
                'continent' => 'asia',
                'country' => __('Uzbekistan', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '41.377491',
                'lng' => '64.585262'
            ),
            'VA' => array(
                'continent' => 'europe',
                'country' => __('Vatican', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '41.902916',
                'lng' => '12.453389'
            ),
            'VC' => array(
                'continent' => 'america',
                'country' => __('Saint Vincent and the Grenadines', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '12.984305',
                'lng' => '-61.287228'
            ),
            'VE' => array(
                'continent' => 'america',
                'country' => __('Venezuela', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '6.42375',
                'lng' => '-66.58973'
            ),
            'VG' => array(
                'continent' => 'america',
                'country' => __('Virgin Islands (British)', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.420695',
                'lng' => '-64.639968'
            ),
            'VI' => array(
                'continent' => 'america',
                'country' => __('Virgin Islands (U.S.)', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '18.335765',
                'lng' => '-64.896335'
            ),
            'VN' => array(
                'continent' => 'asia',
                'country' => __('Vietnam', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '14.058324',
                'lng' => '108.277199'
            ),
            'VU' => array(
                'continent' => 'oceania',
                'country' => __('Vanuatu', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-15.376706',
                'lng' => '166.959158'
            ),
            'WF' => array(
                'continent' => 'oceania',
                'country' => __('Wallis and Futuna Islands', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-13.768752',
                'lng' => '-177.156097'
            ),
            'WS' => array(
                'continent' => 'oceania',
                'country' => __('Samoa', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-13.759029',
                'lng' => '-172.104629'
            ),
            'YE' => array(
                'continent' => 'asia',
                'country' => __('Yemen', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '15.552727',
                'lng' => '48.516388'
            ),
            'YT' => array(
                'continent' => 'africa',
                'country' => __('Mayotte', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-12.8275',
                'lng' => '45.166244'
            ),
            'ZA' => array(
                'continent' => 'africa',
                'country' => __('South Africa', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-28.7366978',
                'lng' => '24.756795'
            ),
            'ZW' => array(
                'continent' => 'africa',
                'country' => __('Zimbabwe', 'wpucountrylist'),
                'zoom' => 6,
                'lat' => '-19.015438',
                'lng' => '29.154857'
            )
        );
    }

    public function get_sorted_raw_list($list) {
        uasort($list, array(&$this,
            'sort_countries'
        ));

        return $list;
    }

    public function sort_countries($a, $b) {
        $aname = $this->clean_name($a['country']);
        $bname = $this->clean_name($b['country']);
        return strcoll($aname, $bname);
    }

    public function clean_name($str) {
        $str = htmlentities($str, ENT_NOQUOTES, 'utf-8');
        $str = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
        $str = preg_replace('#&[^;]+;#', '', $str);
        $str = strtolower($str);
        return $str;
    }

    public function getList($args = false) {

        if (!is_array($args)) {
            $args = array(
                'sorted' => $args
            );
        }
        $args = array_merge(array(
            'sorted' => false,
            'lowercase' => false
        ), $args);

        if (empty($this->list)) {
            $this->load_list();
        }
        $list = $this->list;
        if ($args['sorted']) {
            $list = $this->get_sorted_raw_list($list);
        }
        if ($args['lowercase']) {
            $list = $this->convert_list_to_lower_case($list);
        }
        if (isset($args['move_first'])) {
            $list = $this->move_some_items_first($list, $args['move_first']);
        }
        $list = apply_filters('wpucountrylist_list', $list);
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

    public function convert_list_to_lower_case($list) {
        return array_change_key_case($list, CASE_LOWER);
    }

    public function move_some_items_first($list, $countries_codes = array()) {
        $first_keys = array_reverse($countries_codes);
        foreach ($first_keys as $key) {
            if (!isset($list[$key])) {
                continue;
            }
            $list = array($key => $list[$key]) + $list;
        }
        return $list;
    }

    /**
     * Get a list of country codes and names
     * Thanks to https://gist.github.com/grexlort/00cd35c9e6f6e5d2c6f2
     * Thanks to https: //gist.github.com/andyj/7108917
     * @return array
     */
    public function get_phone_prefixes($args = array()) {
        $list = [
            '44' => __('UK', 'wpucountrylist') . ' (+44)',
            '1' => __('USA', 'wpucountrylist') . ' (+1)',
            '213' => __('Algeria', 'wpucountrylist') . ' (+213)',
            '376' => __('Andorra', 'wpucountrylist') . ' (+376)',
            '244' => __('Angola', 'wpucountrylist') . ' (+244)',
            '1264' => __('Anguilla', 'wpucountrylist') . ' (+1264)',
            '1268' => __('Antigua & Barbuda', 'wpucountrylist') . ' (+1268)',
            '54' => __('Argentina', 'wpucountrylist') . ' (+54)',
            '374' => __('Armenia', 'wpucountrylist') . ' (+374)',
            '297' => __('Aruba', 'wpucountrylist') . ' (+297)',
            '61' => __('Australia', 'wpucountrylist') . ' (+61)',
            '43' => __('Austria', 'wpucountrylist') . ' (+43)',
            '994' => __('Azerbaijan', 'wpucountrylist') . ' (+994)',
            '1242' => __('Bahamas', 'wpucountrylist') . ' (+1242)',
            '973' => __('Bahrain', 'wpucountrylist') . ' (+973)',
            '880' => __('Bangladesh', 'wpucountrylist') . ' (+880)',
            '1246' => __('Barbados', 'wpucountrylist') . ' (+1246)',
            '375' => __('Belarus', 'wpucountrylist') . ' (+375)',
            '32' => __('Belgium', 'wpucountrylist') . ' (+32)',
            '501' => __('Belize', 'wpucountrylist') . ' (+501)',
            '229' => __('Benin', 'wpucountrylist') . ' (+229)',
            '1441' => __('Bermuda', 'wpucountrylist') . ' (+1441)',
            '975' => __('Bhutan', 'wpucountrylist') . ' (+975)',
            '591' => __('Bolivia', 'wpucountrylist') . ' (+591)',
            '387' => __('Bosnia Herzegovina', 'wpucountrylist') . ' (+387)',
            '267' => __('Botswana', 'wpucountrylist') . ' (+267)',
            '55' => __('Brazil', 'wpucountrylist') . ' (+55)',
            '673' => __('Brunei', 'wpucountrylist') . ' (+673)',
            '359' => __('Bulgaria', 'wpucountrylist') . ' (+359)',
            '226' => __('Burkina Faso', 'wpucountrylist') . ' (+226)',
            '257' => __('Burundi', 'wpucountrylist') . ' (+257)',
            '855' => __('Cambodia', 'wpucountrylist') . ' (+855)',
            '237' => __('Cameroon', 'wpucountrylist') . ' (+237)',
            '1' => __('Canada', 'wpucountrylist') . ' (+1)',
            '238' => __('Cape Verde Islands', 'wpucountrylist') . ' (+238)',
            '1345' => __('Cayman Islands', 'wpucountrylist') . ' (+1345)',
            '236' => __('Central African Republic', 'wpucountrylist') . ' (+236)',
            '56' => __('Chile', 'wpucountrylist') . ' (+56)',
            '86' => __('China', 'wpucountrylist') . ' (+86)',
            '57' => __('Colombia', 'wpucountrylist') . ' (+57)',
            '269' => __('Comoros', 'wpucountrylist') . ' (+269)',
            '242' => __('Congo', 'wpucountrylist') . ' (+242)',
            '682' => __('Cook Islands', 'wpucountrylist') . ' (+682)',
            '506' => __('Costa Rica', 'wpucountrylist') . ' (+506)',
            '385' => __('Croatia', 'wpucountrylist') . ' (+385)',
            '53' => __('Cuba', 'wpucountrylist') . ' (+53)',
            '90392' => __('Cyprus North', 'wpucountrylist') . ' (+90392)',
            '357' => __('Cyprus South', 'wpucountrylist') . ' (+357)',
            '42' => __('Czech Republic', 'wpucountrylist') . ' (+42)',
            '45' => __('Denmark', 'wpucountrylist') . ' (+45)',
            '253' => __('Djibouti', 'wpucountrylist') . ' (+253)',
            '1809' => __('Dominica', 'wpucountrylist') . ' (+1809)',
            '1809' => __('Dominican Republic', 'wpucountrylist') . ' (+1809)',
            '593' => __('Ecuador', 'wpucountrylist') . ' (+593)',
            '20' => __('Egypt', 'wpucountrylist') . ' (+20)',
            '503' => __('El Salvador', 'wpucountrylist') . ' (+503)',
            '240' => __('Equatorial Guinea', 'wpucountrylist') . ' (+240)',
            '291' => __('Eritrea', 'wpucountrylist') . ' (+291)',
            '372' => __('Estonia', 'wpucountrylist') . ' (+372)',
            '251' => __('Ethiopia', 'wpucountrylist') . ' (+251)',
            '500' => __('Falkland Islands', 'wpucountrylist') . ' (+500)',
            '298' => __('Faroe Islands', 'wpucountrylist') . ' (+298)',
            '679' => __('Fiji', 'wpucountrylist') . ' (+679)',
            '358' => __('Finland', 'wpucountrylist') . ' (+358)',
            '33' => __('France', 'wpucountrylist') . ' (+33)',
            '594' => __('French Guiana', 'wpucountrylist') . ' (+594)',
            '689' => __('French Polynesia', 'wpucountrylist') . ' (+689)',
            '241' => __('Gabon', 'wpucountrylist') . ' (+241)',
            '220' => __('Gambia', 'wpucountrylist') . ' (+220)',
            '7880' => __('Georgia', 'wpucountrylist') . ' (+7880)',
            '49' => __('Germany', 'wpucountrylist') . ' (+49)',
            '233' => __('Ghana', 'wpucountrylist') . ' (+233)',
            '350' => __('Gibraltar', 'wpucountrylist') . ' (+350)',
            '30' => __('Greece', 'wpucountrylist') . ' (+30)',
            '299' => __('Greenland', 'wpucountrylist') . ' (+299)',
            '1473' => __('Grenada', 'wpucountrylist') . ' (+1473)',
            '590' => __('Guadeloupe', 'wpucountrylist') . ' (+590)',
            '671' => __('Guam', 'wpucountrylist') . ' (+671)',
            '502' => __('Guatemala', 'wpucountrylist') . ' (+502)',
            '224' => __('Guinea', 'wpucountrylist') . ' (+224)',
            '245' => __('Guinea - Bissau', 'wpucountrylist') . ' (+245)',
            '592' => __('Guyana', 'wpucountrylist') . ' (+592)',
            '509' => __('Haiti', 'wpucountrylist') . ' (+509)',
            '504' => __('Honduras', 'wpucountrylist') . ' (+504)',
            '852' => __('Hong Kong', 'wpucountrylist') . ' (+852)',
            '36' => __('Hungary', 'wpucountrylist') . ' (+36)',
            '354' => __('Iceland', 'wpucountrylist') . ' (+354)',
            '91' => __('India', 'wpucountrylist') . ' (+91)',
            '62' => __('Indonesia', 'wpucountrylist') . ' (+62)',
            '98' => __('Iran', 'wpucountrylist') . ' (+98)',
            '964' => __('Iraq', 'wpucountrylist') . ' (+964)',
            '353' => __('Ireland', 'wpucountrylist') . ' (+353)',
            '972' => __('Israel', 'wpucountrylist') . ' (+972)',
            '39' => __('Italy', 'wpucountrylist') . ' (+39)',
            '1876' => __('Jamaica', 'wpucountrylist') . ' (+1876)',
            '81' => __('Japan', 'wpucountrylist') . ' (+81)',
            '962' => __('Jordan', 'wpucountrylist') . ' (+962)',
            '7' => __('Kazakhstan', 'wpucountrylist') . ' (+7)',
            '254' => __('Kenya', 'wpucountrylist') . ' (+254)',
            '686' => __('Kiribati', 'wpucountrylist') . ' (+686)',
            '850' => __('Korea North', 'wpucountrylist') . ' (+850)',
            '82' => __('Korea South', 'wpucountrylist') . ' (+82)',
            '965' => __('Kuwait', 'wpucountrylist') . ' (+965)',
            '996' => __('Kyrgyzstan', 'wpucountrylist') . ' (+996)',
            '856' => __('Laos', 'wpucountrylist') . ' (+856)',
            '371' => __('Latvia', 'wpucountrylist') . ' (+371)',
            '961' => __('Lebanon', 'wpucountrylist') . ' (+961)',
            '266' => __('Lesotho', 'wpucountrylist') . ' (+266)',
            '231' => __('Liberia', 'wpucountrylist') . ' (+231)',
            '218' => __('Libya', 'wpucountrylist') . ' (+218)',
            '417' => __('Liechtenstein', 'wpucountrylist') . ' (+417)',
            '370' => __('Lithuania', 'wpucountrylist') . ' (+370)',
            '352' => __('Luxembourg', 'wpucountrylist') . ' (+352)',
            '853' => __('Macao', 'wpucountrylist') . ' (+853)',
            '389' => __('Macedonia', 'wpucountrylist') . ' (+389)',
            '261' => __('Madagascar', 'wpucountrylist') . ' (+261)',
            '265' => __('Malawi', 'wpucountrylist') . ' (+265)',
            '60' => __('Malaysia', 'wpucountrylist') . ' (+60)',
            '960' => __('Maldives', 'wpucountrylist') . ' (+960)',
            '223' => __('Mali', 'wpucountrylist') . ' (+223)',
            '356' => __('Malta', 'wpucountrylist') . ' (+356)',
            '692' => __('Marshall Islands', 'wpucountrylist') . ' (+692)',
            '596' => __('Martinique', 'wpucountrylist') . ' (+596)',
            '222' => __('Mauritania', 'wpucountrylist') . ' (+222)',
            '269' => __('Mayotte', 'wpucountrylist') . ' (+269)',
            '52' => __('Mexico', 'wpucountrylist') . ' (+52)',
            '691' => __('Micronesia', 'wpucountrylist') . ' (+691)',
            '373' => __('Moldova', 'wpucountrylist') . ' (+373)',
            '377' => __('Monaco', 'wpucountrylist') . ' (+377)',
            '976' => __('Mongolia', 'wpucountrylist') . ' (+976)',
            '1664' => __('Montserrat', 'wpucountrylist') . ' (+1664)',
            '212' => __('Morocco', 'wpucountrylist') . ' (+212)',
            '258' => __('Mozambique', 'wpucountrylist') . ' (+258)',
            '95' => __('Myanmar', 'wpucountrylist') . ' (+95)',
            '264' => __('Namibia', 'wpucountrylist') . ' (+264)',
            '674' => __('Nauru', 'wpucountrylist') . ' (+674)',
            '977' => __('Nepal', 'wpucountrylist') . ' (+977)',
            '31' => __('Netherlands', 'wpucountrylist') . ' (+31)',
            '687' => __('New Caledonia', 'wpucountrylist') . ' (+687)',
            '64' => __('New Zealand', 'wpucountrylist') . ' (+64)',
            '505' => __('Nicaragua', 'wpucountrylist') . ' (+505)',
            '227' => __('Niger', 'wpucountrylist') . ' (+227)',
            '234' => __('Nigeria', 'wpucountrylist') . ' (+234)',
            '683' => __('Niue', 'wpucountrylist') . ' (+683)',
            '672' => __('Norfolk Islands', 'wpucountrylist') . ' (+672)',
            '670' => __('Northern Marianas', 'wpucountrylist') . ' (+670)',
            '47' => __('Norway', 'wpucountrylist') . ' (+47)',
            '968' => __('Oman', 'wpucountrylist') . ' (+968)',
            '680' => __('Palau', 'wpucountrylist') . ' (+680)',
            '507' => __('Panama', 'wpucountrylist') . ' (+507)',
            '675' => __('Papua New Guinea', 'wpucountrylist') . ' (+675)',
            '595' => __('Paraguay', 'wpucountrylist') . ' (+595)',
            '51' => __('Peru', 'wpucountrylist') . ' (+51)',
            '63' => __('Philippines', 'wpucountrylist') . ' (+63)',
            '48' => __('Poland', 'wpucountrylist') . ' (+48)',
            '351' => __('Portugal', 'wpucountrylist') . ' (+351)',
            '1787' => __('Puerto Rico', 'wpucountrylist') . ' (+1787)',
            '974' => __('Qatar', 'wpucountrylist') . ' (+974)',
            '262' => __('Reunion', 'wpucountrylist') . ' (+262)',
            '40' => __('Romania', 'wpucountrylist') . ' (+40)',
            '7' => __('Russia', 'wpucountrylist') . ' (+7)',
            '250' => __('Rwanda', 'wpucountrylist') . ' (+250)',
            '378' => __('San Marino', 'wpucountrylist') . ' (+378)',
            '239' => __('Sao Tome & Principe', 'wpucountrylist') . ' (+239)',
            '966' => __('Saudi Arabia', 'wpucountrylist') . ' (+966)',
            '221' => __('Senegal', 'wpucountrylist') . ' (+221)',
            '381' => __('Serbia', 'wpucountrylist') . ' (+381)',
            '248' => __('Seychelles', 'wpucountrylist') . ' (+248)',
            '232' => __('Sierra Leone', 'wpucountrylist') . ' (+232)',
            '65' => __('Singapore', 'wpucountrylist') . ' (+65)',
            '421' => __('Slovak Republic', 'wpucountrylist') . ' (+421)',
            '386' => __('Slovenia', 'wpucountrylist') . ' (+386)',
            '677' => __('Solomon Islands', 'wpucountrylist') . ' (+677)',
            '252' => __('Somalia', 'wpucountrylist') . ' (+252)',
            '27' => __('South Africa', 'wpucountrylist') . ' (+27)',
            '34' => __('Spain', 'wpucountrylist') . ' (+34)',
            '94' => __('Sri Lanka', 'wpucountrylist') . ' (+94)',
            '290' => __('St. Helena', 'wpucountrylist') . ' (+290)',
            '1869' => __('St. Kitts', 'wpucountrylist') . ' (+1869)',
            '1758' => __('St. Lucia', 'wpucountrylist') . ' (+1758)',
            '249' => __('Sudan', 'wpucountrylist') . ' (+249)',
            '597' => __('Suriname', 'wpucountrylist') . ' (+597)',
            '268' => __('Swaziland', 'wpucountrylist') . ' (+268)',
            '46' => __('Sweden', 'wpucountrylist') . ' (+46)',
            '41' => __('Switzerland', 'wpucountrylist') . ' (+41)',
            '963' => __('Syria', 'wpucountrylist') . ' (+963)',
            '886' => __('Taiwan', 'wpucountrylist') . ' (+886)',
            '7' => __('Tajikstan', 'wpucountrylist') . ' (+7)',
            '66' => __('Thailand', 'wpucountrylist') . ' (+66)',
            '228' => __('Togo', 'wpucountrylist') . ' (+228)',
            '676' => __('Tonga', 'wpucountrylist') . ' (+676)',
            '1868' => __('Trinidad & Tobago', 'wpucountrylist') . ' (+1868)',
            '216' => __('Tunisia', 'wpucountrylist') . ' (+216)',
            '90' => __('Turkey', 'wpucountrylist') . ' (+90)',
            '7' => __('Turkmenistan', 'wpucountrylist') . ' (+7)',
            '993' => __('Turkmenistan', 'wpucountrylist') . ' (+993)',
            '1649' => __('Turks & Caicos Islands', 'wpucountrylist') . ' (+1649)',
            '688' => __('Tuvalu', 'wpucountrylist') . ' (+688)',
            '256' => __('Uganda', 'wpucountrylist') . ' (+256)',
            '380' => __('Ukraine', 'wpucountrylist') . ' (+380)',
            '971' => __('United Arab Emirates', 'wpucountrylist') . ' (+971)',
            '598' => __('Uruguay', 'wpucountrylist') . ' (+598)',
            '7' => __('Uzbekistan', 'wpucountrylist') . ' (+7)',
            '678' => __('Vanuatu', 'wpucountrylist') . ' (+678)',
            '379' => __('Vatican City', 'wpucountrylist') . ' (+379)',
            '58' => __('Venezuela', 'wpucountrylist') . ' (+58)',
            '84' => __('Vietnam', 'wpucountrylist') . ' (+84)',
            '84' => __('Virgin Islands - British', 'wpucountrylist') . ' (+1284)',
            '84' => __('Virgin Islands - US', 'wpucountrylist') . ' (+1340)',
            '681' => __('Wallis & Futuna', 'wpucountrylist') . ' (+681)',
            '969' => __('Yemen (North', 'wpucountrylist') . ' (+969)',
            '967' => __('Yemen (South', 'wpucountrylist') . ' (+967)',
            '260' => __('Zambia', 'wpucountrylist') . ' (+260)',
            '263' => __('Zimbabwe', 'wpucountrylist') . ' (+263)'
        ];

        $defaults = array(
            'sorted' => false
        );
        if (!is_array($args)) {
            $args = array();
        }
        $args = array_merge($defaults, $args);

        if ($args['sorted']) {
            natsort($list);
        }

        if (isset($args['move_first'])) {
            $list = $this->move_some_items_first($list, $args['move_first']);
        }

        return $list;
    }
}

$WPUCountryList = new WPUCountryList();

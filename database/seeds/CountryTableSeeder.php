<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
 
        $countries = array(
            array(
                'id' => 1,
                'iso_code' => 'US',
                'name' => 'United States'
            ),
            array(
                'id' => 2,
                'iso_code' => 'CA',
                'name' => 'Canada'
            ),
            array(
                'id' => 3,
                'iso_code' => 'AF',
                'name' => 'Afghanistan'
            ),
            array(
                'id' => 4,
                'iso_code' => 'AL',
                'name' => 'Albania'
            ),
            array(
                'id' => 5,
                'iso_code' => 'DZ',
                'name' => 'Algeria'
            ),
            array(
                'id' => 6,
                'iso_code' => 'DS',
                'name' => 'American Samoa'
            ),
            array(
                'id' => 7,
                'iso_code' => 'AD',
                'name' => 'Andorra'
            ),
            array(
                'id' => 8,
                'iso_code' => 'AO',
                'name' => 'Angola'
            ),
            array(
                'id' => 9,
                'iso_code' => 'AI',
                'name' => 'Anguilla'
            ),
            array(
                'id' => 10,
                'iso_code' => 'AQ',
                'name' => 'Antarctica'
            ),
            array(
                'id' => 11,
                'iso_code' => 'AG',
                'name' => 'Antigua and/or Barbuda'
            ),
            array(
                'id' => 12,
                'iso_code' => 'AR',
                'name' => 'Argentina'
            ),
            array(
                'id' => 13,
                'iso_code' => 'AM',
                'name' => 'Armenia'
            ),
            array(
                'id' => 14,
                'iso_code' => 'AW',
                'name' => 'Aruba'
            ),
            array(
                'id' => 15,
                'iso_code' => 'AU',
                'name' => 'Australia'
            ),
            array(
                'id' => 16,
                'iso_code' => 'AT',
                'name' => 'Austria'
            ),
            array(
                'id' => 17,
                'iso_code' => 'AZ',
                'name' => 'Azerbaijan'
            ),
            array(
                'id' => 18,
                'iso_code' => 'BS',
                'name' => 'Bahamas'
            ),
            array(
                'id' => 19,
                'iso_code' => 'BH',
                'name' => 'Bahrain'
            ),
            array(
                'id' => 20,
                'iso_code' => 'BD',
                'name' => 'Bangladesh'
            ),
            array(
                'id' => 21,
                'iso_code' => 'BB',
                'name' => 'Barbados'
            ),
            array(
                'id' => 22,
                'iso_code' => 'BY',
                'name' => 'Belarus'
            ),
            array(
                'id' => 23,
                'iso_code' => 'BE',
                'name' => 'Belgium'
            ),
            array(
                'id' => 24,
                'iso_code' => 'BZ',
                'name' => 'Belize'
            ),
            array(
                'id' => 25,
                'iso_code' => 'BJ',
                'name' => 'Benin'
            ),
            array(
                'id' => 26,
                'iso_code' => 'BM',
                'name' => 'Bermuda'
            ),
            array(
                'id' => 27,
                'iso_code' => 'BT',
                'name' => 'Bhutan'
            ),
            array(
                'id' => 28,
                'iso_code' => 'BO',
                'name' => 'Bolivia'
            ),
            array(
                'id' => 29,
                'iso_code' => 'BA',
                'name' => 'Bosnia and Herzegovina'
            ),
            array(
                'id' => 30,
                'iso_code' => 'BW',
                'name' => 'Botswana'
            ),
            array(
                'id' => 31,
                'iso_code' => 'BV',
                'name' => 'Bouvet Island'
            ),
            array(
                'id' => 32,
                'iso_code' => 'BR',
                'name' => 'Brazil'
            ),
            array(
                'id' => 33,
                'iso_code' => 'IO',
                'name' => 'British lndian Ocean Territory'
            ),
            array(
                'id' => 34,
                'iso_code' => 'BN',
                'name' => 'Brunei Darussalam'
            ),
            array(
                'id' => 35,
                'iso_code' => 'BG',
                'name' => 'Bulgaria'
            ),
            array(
                'id' => 36,
                'iso_code' => 'BF',
                'name' => 'Burkina Faso'
            ),
            array(
                'id' => 37,
                'iso_code' => 'BI',
                'name' => 'Burundi'
            ),
            array(
                'id' => 38,
                'iso_code' => 'KH',
                'name' => 'Cambodia'
            ),
            array(
                'id' => 39,
                'iso_code' => 'CM',
                'name' => 'Cameroon'
            ),
            array(
                'id' => 40,
                'iso_code' => 'CV',
                'name' => 'Cape Verde'
            ),
            array(
                'id' => 41,
                'iso_code' => 'KY',
                'name' => 'Cayman Islands'
            ),
            array(
                'id' => 42,
                'iso_code' => 'CF',
                'name' => 'Central African Republic'
            ),
            array(
                'id' => 43,
                'iso_code' => 'TD',
                'name' => 'Chad'
            ),
            array(
                'id' => 44,
                'iso_code' => 'CL',
                'name' => 'Chile'
            ),
            array(
                'id' => 45,
                'iso_code' => 'CN',
                'name' => 'China'
            ),
            array(
                'id' => 46,
                'iso_code' => 'CX',
                'name' => 'Christmas Island'
            ),
            array(
                'id' => 47,
                'iso_code' => 'CC',
                'name' => 'Cocos (Keeling) Islands'
            ),
            array(
                'id' => 48,
                'iso_code' => 'CO',
                'name' => 'Colombia'
            ),
            array(
                'id' => 49,
                'iso_code' => 'KM',
                'name' => 'Comoros'
            ),
            array(
                'id' => 50,
                'iso_code' => 'CG',
                'name' => 'Congo'
            ),
            array(
                'id' => 51,
                'iso_code' => 'CK',
                'name' => 'Cook Islands'
            ),
            array(
                'id' => 52,
                'iso_code' => 'CR',
                'name' => 'Costa Rica'
            ),
            array(
                'id' => 53,
                'iso_code' => 'HR',
                'name' => 'Croatia (Hrvatska)'
            ),
            array(
                'id' => 54,
                'iso_code' => 'CU',
                'name' => 'Cuba'
            ),
            array(
                'id' => 55,
                'iso_code' => 'CY',
                'name' => 'Cyprus'
            ),
            array(
                'id' => 56,
                'iso_code' => 'CZ',
                'name' => 'Czech Republic'
            ),
            array(
                'id' => 57,
                'iso_code' => 'DK',
                'name' => 'Denmark'
            ),
            array(
                'id' => 58,
                'iso_code' => 'DJ',
                'name' => 'Djibouti'
            ),
            array(
                'id' => 59,
                'iso_code' => 'DM',
                'name' => 'Dominica'
            ),
            array(
                'id' => 60,
                'iso_code' => 'DO',
                'name' => 'Dominican Republic'
            ),
            array(
                'id' => 61,
                'iso_code' => 'TP',
                'name' => 'East Timor'
            ),
            array(
                'id' => 62,
                'iso_code' => 'EC',
                'name' => 'Ecudaor'
            ),
            array(
                'id' => 63,
                'iso_code' => 'EG',
                'name' => 'Egypt'
            ),
            array(
                'id' => 64,
                'iso_code' => 'SV',
                'name' => 'El Salvador'
            ),
            array(
                'id' => 65,
                'iso_code' => 'GQ',
                'name' => 'Equatorial Guinea'
            ),
            array(
                'id' => 66,
                'iso_code' => 'ER',
                'name' => 'Eritrea'
            ),
            array(
                'id' => 67,
                'iso_code' => 'EE',
                'name' => 'Estonia'
            ),
            array(
                'id' => 68,
                'iso_code' => 'ET',
                'name' => 'Ethiopia'
            ),
            array(
                'id' => 69,
                'iso_code' => 'FK',
                'name' => 'Falkland Islands (Malvinas)'
            ),
            array(
                'id' => 70,
                'iso_code' => 'FO',
                'name' => 'Faroe Islands'
            ),
            array(
                'id' => 71,
                'iso_code' => 'FJ',
                'name' => 'Fiji'
            ),
            array(
                'id' => 72,
                'iso_code' => 'FI',
                'name' => 'Finland'
            ),
            array(
                'id' => 73,
                'iso_code' => 'FR',
                'name' => 'France'
            ),
            array(
                'id' => 74,
                'iso_code' => 'FX',
                'name' => 'France, Metropolitan'
            ),
            array(
                'id' => 75,
                'iso_code' => 'GF',
                'name' => 'French Guiana'
            ),
            array(
                'id' => 76,
                'iso_code' => 'PF',
                'name' => 'French Polynesia'
            ),
            array(
                'id' => 77,
                'iso_code' => 'TF',
                'name' => 'French Southern Territories'
            ),
            array(
                'id' => 78,
                'iso_code' => 'GA',
                'name' => 'Gabon'
            ),
            array(
                'id' => 79,
                'iso_code' => 'GM',
                'name' => 'Gambia'
            ),
            array(
                'id' => 80,
                'iso_code' => 'GE',
                'name' => 'Georgia'
            ),
            array(
                'id' => 81,
                'iso_code' => 'DE',
                'name' => 'Germany'
            ),
            array(
                'id' => 82,
                'iso_code' => 'GH',
                'name' => 'Ghana'
            ),
            array(
                'id' => 83,
                'iso_code' => 'GI',
                'name' => 'Gibraltar'
            ),
            array(
                'id' => 84,
                'iso_code' => 'GR',
                'name' => 'Greece'
            ),
            array(
                'id' => 85,
                'iso_code' => 'GL',
                'name' => 'Greenland'
            ),
            array(
                'id' => 86,
                'iso_code' => 'GD',
                'name' => 'Grenada'
            ),
            array(
                'id' => 87,
                'iso_code' => 'GP',
                'name' => 'Guadeloupe'
            ),
            array(
                'id' => 88,
                'iso_code' => 'GU',
                'name' => 'Guam'
            ),
            array(
                'id' => 89,
                'iso_code' => 'GT',
                'name' => 'Guatemala'
            ),
            array(
                'id' => 90,
                'iso_code' => 'GN',
                'name' => 'Guinea'
            ),
            array(
                'id' => 91,
                'iso_code' => 'GW',
                'name' => 'Guinea-Bissau'
            ),
            array(
                'id' => 92,
                'iso_code' => 'GY',
                'name' => 'Guyana'
            ),
            array(
                'id' => 93,
                'iso_code' => 'HT',
                'name' => 'Haiti'
            ),
            array(
                'id' => 94,
                'iso_code' => 'HM',
                'name' => 'Heard and Mc Donald Islands'
            ),
            array(
                'id' => 95,
                'iso_code' => 'HN',
                'name' => 'Honduras'
            ),
            array(
                'id' => 96,
                'iso_code' => 'HK',
                'name' => 'Hong Kong'
            ),
            array(
                'id' => 97,
                'iso_code' => 'HU',
                'name' => 'Hungary'
            ),
            array(
                'id' => 98,
                'iso_code' => 'IS',
                'name' => 'Iceland'
            ),
            array(
                'id' => 99,
                'iso_code' => 'IN',
                'name' => 'India'
            ),
            array(
                'id' => 100,
                'iso_code' => 'ID',
                'name' => 'Indonesia'
            ),
            array(
                'id' => 101,
                'iso_code' => 'IR',
                'name' => 'Iran (Islamic Republic of)'
            ),
            array(
                'id' => 102,
                'iso_code' => 'IQ',
                'name' => 'Iraq'
            ),
            array(
                'id' => 103,
                'iso_code' => 'IE',
                'name' => 'Ireland'
            ),
            array(
                'id' => 104,
                'iso_code' => 'IL',
                'name' => 'Israel'
            ),
            array(
                'id' => 105,
                'iso_code' => 'IT',
                'name' => 'Italy'
            ),
            array(
                'id' => 106,
                'iso_code' => 'CI',
                'name' => 'Ivory Coast'
            ),
            array(
                'id' => 107,
                'iso_code' => 'JM',
                'name' => 'Jamaica'
            ),
            array(
                'id' => 108,
                'iso_code' => 'JP',
                'name' => 'Japan'
            ),
            array(
                'id' => 109,
                'iso_code' => 'JO',
                'name' => 'Jordan'
            ),
            array(
                'id' => 110,
                'iso_code' => 'KZ',
                'name' => 'Kazakhstan'
            ),
            array(
                'id' => 111,
                'iso_code' => 'KE',
                'name' => 'Kenya'
            ),
            array(
                'id' => 112,
                'iso_code' => 'KI',
                'name' => 'Kiribati'
            ),
            array(
                'id' => 113,
                'iso_code' => 'KP',
                'name' => 'Korea, Democratic People\'s Republic of'
            ),
            array(
                'id' => 114,
                'iso_code' => 'KR',
                'name' => 'Korea, Republic of'
            ),
            array(
                'id' => 115,
                'iso_code' => 'KW',
                'name' => 'Kuwait'
            ),
            array(
                'id' => 116,
                'iso_code' => 'KG',
                'name' => 'Kyrgyzstan'
            ),
            array(
                'id' => 117,
                'iso_code' => 'LA',
                'name' => 'Lao People\'s Democratic Republic'
            ),
            array(
                'id' => 118,
                'iso_code' => 'LV',
                'name' => 'Latvia'
            ),
            array(
                'id' => 119,
                'iso_code' => 'LB',
                'name' => 'Lebanon'
            ),
            array(
                'id' => 120,
                'iso_code' => 'LS',
                'name' => 'Lesotho'
            ),
            array(
                'id' => 121,
                'iso_code' => 'LR',
                'name' => 'Liberia'
            ),
            array(
                'id' => 122,
                'iso_code' => 'LY',
                'name' => 'Libyan Arab Jamahiriya'
            ),
            array(
                'id' => 123,
                'iso_code' => 'LI',
                'name' => 'Liechtenstein'
            ),
            array(
                'id' => 124,
                'iso_code' => 'LT',
                'name' => 'Lithuania'
            ),
            array(
                'id' => 125,
                'iso_code' => 'LU',
                'name' => 'Luxembourg'
            ),
            array(
                'id' => 126,
                'iso_code' => 'MO',
                'name' => 'Macau'
            ),
            array(
                'id' => 127,
                'iso_code' => 'MK',
                'name' => 'Macedonia'
            ),
            array(
                'id' => 128,
                'iso_code' => 'MG',
                'name' => 'Madagascar'
            ),
            array(
                'id' => 129,
                'iso_code' => 'MW',
                'name' => 'Malawi'
            ),
            array(
                'id' => 130,
                'iso_code' => 'MY',
                'name' => 'Malaysia'
            ),
            array(
                'id' => 131,
                'iso_code' => 'MV',
                'name' => 'Maldives'
            ),
            array(
                'id' => 132,
                'iso_code' => 'ML',
                'name' => 'Mali'
            ),
            array(
                'id' => 133,
                'iso_code' => 'MT',
                'name' => 'Malta'
            ),
            array(
                'id' => 134,
                'iso_code' => 'MH',
                'name' => 'Marshall Islands'
            ),
            array(
                'id' => 135,
                'iso_code' => 'MQ',
                'name' => 'Martinique'
            ),
            array(
                'id' => 136,
                'iso_code' => 'MR',
                'name' => 'Mauritania'
            ),
            array(
                'id' => 137,
                'iso_code' => 'MU',
                'name' => 'Mauritius'
            ),
            array(
                'id' => 138,
                'iso_code' => 'TY',
                'name' => 'Mayotte'
            ),
            array(
                'id' => 139,
                'iso_code' => 'MX',
                'name' => 'Mexico'
            ),
            array(
                'id' => 140,
                'iso_code' => 'FM',
                'name' => 'Micronesia, Federated States of'
            ),
            array(
                'id' => 141,
                'iso_code' => 'MD',
                'name' => 'Moldova, Republic of'
            ),
            array(
                'id' => 142,
                'iso_code' => 'MC',
                'name' => 'Monaco'
            ),
            array(
                'id' => 143,
                'iso_code' => 'MN',
                'name' => 'Mongolia'
            ),
            array(
                'id' => 144,
                'iso_code' => 'MS',
                'name' => 'Montserrat'
            ),
            array(
                'id' => 145,
                'iso_code' => 'MA',
                'name' => 'Morocco'
            ),
            array(
                'id' => 146,
                'iso_code' => 'MZ',
                'name' => 'Mozambique'
            ),
            array(
                'id' => 147,
                'iso_code' => 'MM',
                'name' => 'Myanmar'
            ),
            array(
                'id' => 148,
                'iso_code' => 'NA',
                'name' => 'Namibia'
            ),
            array(
                'id' => 149,
                'iso_code' => 'NR',
                'name' => 'Nauru'
            ),
            array(
                'id' => 150,
                'iso_code' => 'NP',
                'name' => 'Nepal'
            ),
            array(
                'id' => 151,
                'iso_code' => 'NL',
                'name' => 'Netherlands'
            ),
            array(
                'id' => 152,
                'iso_code' => 'AN',
                'name' => 'Netherlands Antilles'
            ),
            array(
                'id' => 153,
                'iso_code' => 'NC',
                'name' => 'New Caledonia'
            ),
            array(
                'id' => 154,
                'iso_code' => 'NZ',
                'name' => 'New Zealand'
            ),
            array(
                'id' => 155,
                'iso_code' => 'NI',
                'name' => 'Nicaragua'
            ),
            array(
                'id' => 156,
                'iso_code' => 'NE',
                'name' => 'Niger'
            ),
            array(
                'id' => 157,
                'iso_code' => 'NG',
                'name' => 'Nigeria'
            ),
            array(
                'id' => 158,
                'iso_code' => 'NU',
                'name' => 'Niue'
            ),
            array(
                'id' => 159,
                'iso_code' => 'NF',
                'name' => 'Norfork Island'
            ),
            array(
                'id' => 160,
                'iso_code' => 'MP',
                'name' => 'Northern Mariana Islands'
            ),
            array(
                'id' => 161,
                'iso_code' => 'NO',
                'name' => 'Norway'
            ),
            array(
                'id' => 162,
                'iso_code' => 'OM',
                'name' => 'Oman'
            ),
            array(
                'id' => 163,
                'iso_code' => 'PK',
                'name' => 'Pakistan'
            ),
            array(
                'id' => 164,
                'iso_code' => 'PW',
                'name' => 'Palau'
            ),
            array(
                'id' => 165,
                'iso_code' => 'PA',
                'name' => 'Panama'
            ),
            array(
                'id' => 166,
                'iso_code' => 'PG',
                'name' => 'Papua New Guinea'
            ),
            array(
                'id' => 167,
                'iso_code' => 'PY',
                'name' => 'Paraguay'
            ),
            array(
                'id' => 168,
                'iso_code' => 'PE',
                'name' => 'Peru'
            ),
            array(
                'id' => 169,
                'iso_code' => 'PH',
                'name' => 'Philippines'
            ),
            array(
                'id' => 170,
                'iso_code' => 'PN',
                'name' => 'Pitcairn'
            ),
            array(
                'id' => 171,
                'iso_code' => 'PL',
                'name' => 'Poland'
            ),
            array(
                'id' => 172,
                'iso_code' => 'PT',
                'name' => 'Portugal'
            ),
            array(
                'id' => 173,
                'iso_code' => 'PR',
                'name' => 'Puerto Rico'
            ),
            array(
                'id' => 174,
                'iso_code' => 'QA',
                'name' => 'Qatar'
            ),
            array(
                'id' => 175,
                'iso_code' => 'RE',
                'name' => 'Reunion'
            ),
            array(
                'id' => 176,
                'iso_code' => 'RO',
                'name' => 'Romania'
            ),
            array(
                'id' => 177,
                'iso_code' => 'RU',
                'name' => 'Russian Federation'
            ),
            array(
                'id' => 178,
                'iso_code' => 'RW',
                'name' => 'Rwanda'
            ),
            array(
                'id' => 179,
                'iso_code' => 'KN',
                'name' => 'Saint Kitts and Nevis'
            ),
            array(
                'id' => 180,
                'iso_code' => 'LC',
                'name' => 'Saint Lucia'
            ),
            array(
                'id' => 181,
                'iso_code' => 'VC',
                'name' => 'Saint Vincent and the Grenadines'
            ),
            array(
                'id' => 182,
                'iso_code' => 'WS',
                'name' => 'Samoa'
            ),
            array(
                'id' => 183,
                'iso_code' => 'SM',
                'name' => 'San Marino'
            ),
            array(
                'id' => 184,
                'iso_code' => 'ST',
                'name' => 'Sao Tome and Principe'
            ),
            array(
                'id' => 185,
                'iso_code' => 'SA',
                'name' => 'Saudi Arabia'
            ),
            array(
                'id' => 186,
                'iso_code' => 'SN',
                'name' => 'Senegal'
            ),
            array(
                'id' => 187,
                'iso_code' => 'SC',
                'name' => 'Seychelles'
            ),
            array(
                'id' => 188,
                'iso_code' => 'SL',
                'name' => 'Sierra Leone'
            ),
            array(
                'id' => 189,
                'iso_code' => 'SG',
                'name' => 'Singapore'
            ),
            array(
                'id' => 190,
                'iso_code' => 'SK',
                'name' => 'Slovakia'
            ),
            array(
                'id' => 191,
                'iso_code' => 'SI',
                'name' => 'Slovenia'
            ),
            array(
                'id' => 192,
                'iso_code' => 'SB',
                'name' => 'Solomon Islands'
            ),
            array(
                'id' => 193,
                'iso_code' => 'SO',
                'name' => 'Somalia'
            ),
            array(
                'id' => 194,
                'iso_code' => 'ZA',
                'name' => 'South Africa'
            ),
            array(
                'id' => 195,
                'iso_code' => 'GS',
                'name' => 'South Georgia South Sandwich Islands'
            ),
            array(
                'id' => 196,
                'iso_code' => 'ES',
                'name' => 'Spain'
            ),
            array(
                'id' => 197,
                'iso_code' => 'LK',
                'name' => 'Sri Lanka'
            ),
            array(
                'id' => 198,
                'iso_code' => 'SH',
                'name' => 'St. Helena'
            ),
            array(
                'id' => 199,
                'iso_code' => 'PM',
                'name' => 'St. Pierre and Miquelon'
            ),
            array(
                'id' => 200,
                'iso_code' => 'SD',
                'name' => 'Sudan'
            ),
            array(
                'id' => 201,
                'iso_code' => 'SR',
                'name' => 'Suriname'
            ),
            array(
                'id' => 202,
                'iso_code' => 'SJ',
                'name' => 'Svalbarn and Jan Mayen Islands'
            ),
            array(
                'id' => 203,
                'iso_code' => 'SZ',
                'name' => 'Swaziland'
            ),
            array(
                'id' => 204,
                'iso_code' => 'SE',
                'name' => 'Sweden'
            ),
            array(
                'id' => 205,
                'iso_code' => 'CH',
                'name' => 'Switzerland'
            ),
            array(
                'id' => 206,
                'iso_code' => 'SY',
                'name' => 'Syrian Arab Republic'
            ),
            array(
                'id' => 207,
                'iso_code' => 'TW',
                'name' => 'Taiwan'
            ),
            array(
                'id' => 208,
                'iso_code' => 'TJ',
                'name' => 'Tajikistan'
            ),
            array(
                'id' => 209,
                'iso_code' => 'TZ',
                'name' => 'Tanzania, United Republic of'
            ),
            array(
                'id' => 210,
                'iso_code' => 'TH',
                'name' => 'Thailand'
            ),
            array(
                'id' => 211,
                'iso_code' => 'TG',
                'name' => 'Togo'
            ),
            array(
                'id' => 212,
                'iso_code' => 'TK',
                'name' => 'Tokelau'
            ),
            array(
                'id' => 213,
                'iso_code' => 'TO',
                'name' => 'Tonga'
            ),
            array(
                'id' => 214,
                'iso_code' => 'TT',
                'name' => 'Trinidad and Tobago'
            ),
            array(
                'id' => 215,
                'iso_code' => 'TN',
                'name' => 'Tunisia'
            ),
            array(
                'id' => 216,
                'iso_code' => 'TR',
                'name' => 'Turkey'
            ),
            array(
                'id' => 217,
                'iso_code' => 'TM',
                'name' => 'Turkmenistan'
            ),
            array(
                'id' => 218,
                'iso_code' => 'TC',
                'name' => 'Turks and Caicos Islands'
            ),
            array(
                'id' => 219,
                'iso_code' => 'TV',
                'name' => 'Tuvalu'
            ),
            array(
                'id' => 220,
                'iso_code' => 'UG',
                'name' => 'Uganda'
            ),
            array(
                'id' => 221,
                'iso_code' => 'UA',
                'name' => 'Ukraine'
            ),
            array(
                'id' => 222,
                'iso_code' => 'AE',
                'name' => 'United Arab Emirates'
            ),
            array(
                'id' => 223,
                'iso_code' => 'GB',
                'name' => 'United Kingdom'
            ),
            array(
                'id' => 224,
                'iso_code' => 'UM',
                'name' => 'United States minor outlying islands'
            ),
            array(
                'id' => 225,
                'iso_code' => 'UY',
                'name' => 'Uruguay'
            ),
            array(
                'id' => 226,
                'iso_code' => 'UZ',
                'name' => 'Uzbekistan'
            ),
            array(
                'id' => 227,
                'iso_code' => 'VU',
                'name' => 'Vanuatu'
            ),
            array(
                'id' => 228,
                'iso_code' => 'VA',
                'name' => 'Vatican City State'
            ),
            array(
                'id' => 229,
                'iso_code' => 'VE',
                'name' => 'Venezuela'
            ),
            array(
                'id' => 230,
                'iso_code' => 'VN',
                'name' => 'Vietnam'
            ),
            array(
                'id' => 231,
                'iso_code' => 'VG',
                'name' => 'Virigan Islands (British)'
            ),
            array(
                'id' => 232,
                'iso_code' => 'VI',
                'name' => 'Virgin Islands (U.S.)'
            ),
            array(
                'id' => 233,
                'iso_code' => 'WF',
                'name' => 'Wallis and Futuna Islands'
            ),
            array(
                'id' => 234,
                'iso_code' => 'EH',
                'name' => 'Western Sahara'
            ),
            array(
                'id' => 235,
                'iso_code' => 'YE',
                'name' => 'Yemen'
            ),
            array(
                'id' => 236,
                'iso_code' => 'YU',
                'name' => 'Yugoslavia'
            ),
            array(
                'id' => 237,
                'iso_code' => 'ZR',
                'name' => 'Zaire'
            ),
            array(
                'id' => 238,
                'iso_code' => 'ZM',
                'name' => 'Zambia'
            ),
            array(
                'id' => 239,
                'iso_code' => 'ZW',
                'name' => 'Zimbabwe'
            )
        );
 
        DB::table('countries')->insert($countries);
    }
}
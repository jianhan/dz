<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'iso2' => 'AF',
                'name' => 'Afghanistan',
            ),
            1 => 
            array (
                'id' => 2,
                'iso2' => 'AL',
                'name' => 'Albania',
            ),
            2 => 
            array (
                'id' => 3,
                'iso2' => 'DZ',
                'name' => 'Algeria',
            ),
            3 => 
            array (
                'id' => 4,
                'iso2' => 'AS',
                'name' => 'American Samoa',
            ),
            4 => 
            array (
                'id' => 5,
                'iso2' => 'AD',
                'name' => 'Andorra',
            ),
            5 => 
            array (
                'id' => 6,
                'iso2' => 'AO',
                'name' => 'Angola',
            ),
            6 => 
            array (
                'id' => 7,
                'iso2' => 'AI',
                'name' => 'Anguilla',
            ),
            7 => 
            array (
                'id' => 8,
                'iso2' => 'AQ',
                'name' => 'Antarctica',
            ),
            8 => 
            array (
                'id' => 9,
                'iso2' => 'AG',
                'name' => 'Antigua And Barbuda',
            ),
            9 => 
            array (
                'id' => 10,
                'iso2' => 'AR',
                'name' => 'Argentina',
            ),
            10 => 
            array (
                'id' => 11,
                'iso2' => 'AM',
                'name' => 'Armenia',
            ),
            11 => 
            array (
                'id' => 12,
                'iso2' => 'AW',
                'name' => 'Aruba',
            ),
            12 => 
            array (
                'id' => 13,
                'iso2' => 'AU',
                'name' => 'Australia',
            ),
            13 => 
            array (
                'id' => 14,
                'iso2' => 'AT',
                'name' => 'Austria',
            ),
            14 => 
            array (
                'id' => 15,
                'iso2' => 'AZ',
                'name' => 'Azerbaijan',
            ),
            15 => 
            array (
                'id' => 16,
                'iso2' => 'BS',
                'name' => 'Bahamas The',
            ),
            16 => 
            array (
                'id' => 17,
                'iso2' => 'BH',
                'name' => 'Bahrain',
            ),
            17 => 
            array (
                'id' => 18,
                'iso2' => 'BD',
                'name' => 'Bangladesh',
            ),
            18 => 
            array (
                'id' => 19,
                'iso2' => 'BB',
                'name' => 'Barbados',
            ),
            19 => 
            array (
                'id' => 20,
                'iso2' => 'BY',
                'name' => 'Belarus',
            ),
            20 => 
            array (
                'id' => 21,
                'iso2' => 'BE',
                'name' => 'Belgium',
            ),
            21 => 
            array (
                'id' => 22,
                'iso2' => 'BZ',
                'name' => 'Belize',
            ),
            22 => 
            array (
                'id' => 23,
                'iso2' => 'BJ',
                'name' => 'Benin',
            ),
            23 => 
            array (
                'id' => 24,
                'iso2' => 'BM',
                'name' => 'Bermuda',
            ),
            24 => 
            array (
                'id' => 25,
                'iso2' => 'BT',
                'name' => 'Bhutan',
            ),
            25 => 
            array (
                'id' => 26,
                'iso2' => 'BO',
                'name' => 'Bolivia',
            ),
            26 => 
            array (
                'id' => 27,
                'iso2' => 'BA',
                'name' => 'Bosnia and Herzegovina',
            ),
            27 => 
            array (
                'id' => 28,
                'iso2' => 'BW',
                'name' => 'Botswana',
            ),
            28 => 
            array (
                'id' => 29,
                'iso2' => 'BV',
                'name' => 'Bouvet Island',
            ),
            29 => 
            array (
                'id' => 30,
                'iso2' => 'BR',
                'name' => 'Brazil',
            ),
            30 => 
            array (
                'id' => 31,
                'iso2' => 'IO',
                'name' => 'British Indian Ocean Territory',
            ),
            31 => 
            array (
                'id' => 32,
                'iso2' => 'BN',
                'name' => 'Brunei',
            ),
            32 => 
            array (
                'id' => 33,
                'iso2' => 'BG',
                'name' => 'Bulgaria',
            ),
            33 => 
            array (
                'id' => 34,
                'iso2' => 'BF',
                'name' => 'Burkina Faso',
            ),
            34 => 
            array (
                'id' => 35,
                'iso2' => 'BI',
                'name' => 'Burundi',
            ),
            35 => 
            array (
                'id' => 36,
                'iso2' => 'KH',
                'name' => 'Cambodia',
            ),
            36 => 
            array (
                'id' => 37,
                'iso2' => 'CM',
                'name' => 'Cameroon',
            ),
            37 => 
            array (
                'id' => 38,
                'iso2' => 'CA',
                'name' => 'Canada',
            ),
            38 => 
            array (
                'id' => 39,
                'iso2' => 'CV',
                'name' => 'Cape Verde',
            ),
            39 => 
            array (
                'id' => 40,
                'iso2' => 'KY',
                'name' => 'Cayman Islands',
            ),
            40 => 
            array (
                'id' => 41,
                'iso2' => 'CF',
                'name' => 'Central African Republic',
            ),
            41 => 
            array (
                'id' => 42,
                'iso2' => 'TD',
                'name' => 'Chad',
            ),
            42 => 
            array (
                'id' => 43,
                'iso2' => 'CL',
                'name' => 'Chile',
            ),
            43 => 
            array (
                'id' => 44,
                'iso2' => 'CN',
                'name' => 'China',
            ),
            44 => 
            array (
                'id' => 45,
                'iso2' => 'CX',
                'name' => 'Christmas Island',
            ),
            45 => 
            array (
                'id' => 46,
                'iso2' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
            ),
            46 => 
            array (
                'id' => 47,
                'iso2' => 'CO',
                'name' => 'Colombia',
            ),
            47 => 
            array (
                'id' => 48,
                'iso2' => 'KM',
                'name' => 'Comoros',
            ),
            48 => 
            array (
                'id' => 49,
                'iso2' => 'CG',
                'name' => 'Republic Of The Congo',
            ),
            49 => 
            array (
                'id' => 50,
                'iso2' => 'CD',
                'name' => 'Democratic Republic Of The Congo',
            ),
            50 => 
            array (
                'id' => 51,
                'iso2' => 'CK',
                'name' => 'Cook Islands',
            ),
            51 => 
            array (
                'id' => 52,
                'iso2' => 'CR',
                'name' => 'Costa Rica',
            ),
            52 => 
            array (
                'id' => 53,
                'iso2' => 'CI',
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
            ),
            53 => 
            array (
                'id' => 54,
                'iso2' => 'HR',
            'name' => 'Croatia (Hrvatska)',
            ),
            54 => 
            array (
                'id' => 55,
                'iso2' => 'CU',
                'name' => 'Cuba',
            ),
            55 => 
            array (
                'id' => 56,
                'iso2' => 'CY',
                'name' => 'Cyprus',
            ),
            56 => 
            array (
                'id' => 57,
                'iso2' => 'CZ',
                'name' => 'Czech Republic',
            ),
            57 => 
            array (
                'id' => 58,
                'iso2' => 'DK',
                'name' => 'Denmark',
            ),
            58 => 
            array (
                'id' => 59,
                'iso2' => 'DJ',
                'name' => 'Djibouti',
            ),
            59 => 
            array (
                'id' => 60,
                'iso2' => 'DM',
                'name' => 'Dominica',
            ),
            60 => 
            array (
                'id' => 61,
                'iso2' => 'DO',
                'name' => 'Dominican Republic',
            ),
            61 => 
            array (
                'id' => 62,
                'iso2' => 'TP',
                'name' => 'East Timor',
            ),
            62 => 
            array (
                'id' => 63,
                'iso2' => 'EC',
                'name' => 'Ecuador',
            ),
            63 => 
            array (
                'id' => 64,
                'iso2' => 'EG',
                'name' => 'Egypt',
            ),
            64 => 
            array (
                'id' => 65,
                'iso2' => 'SV',
                'name' => 'El Salvador',
            ),
            65 => 
            array (
                'id' => 66,
                'iso2' => 'GQ',
                'name' => 'Equatorial Guinea',
            ),
            66 => 
            array (
                'id' => 67,
                'iso2' => 'ER',
                'name' => 'Eritrea',
            ),
            67 => 
            array (
                'id' => 68,
                'iso2' => 'EE',
                'name' => 'Estonia',
            ),
            68 => 
            array (
                'id' => 69,
                'iso2' => 'ET',
                'name' => 'Ethiopia',
            ),
            69 => 
            array (
                'id' => 70,
                'iso2' => 'XA',
                'name' => 'External Territories of Australia',
            ),
            70 => 
            array (
                'id' => 71,
                'iso2' => 'FK',
                'name' => 'Falkland Islands',
            ),
            71 => 
            array (
                'id' => 72,
                'iso2' => 'FO',
                'name' => 'Faroe Islands',
            ),
            72 => 
            array (
                'id' => 73,
                'iso2' => 'FJ',
                'name' => 'Fiji Islands',
            ),
            73 => 
            array (
                'id' => 74,
                'iso2' => 'FI',
                'name' => 'Finland',
            ),
            74 => 
            array (
                'id' => 75,
                'iso2' => 'FR',
                'name' => 'France',
            ),
            75 => 
            array (
                'id' => 76,
                'iso2' => 'GF',
                'name' => 'French Guiana',
            ),
            76 => 
            array (
                'id' => 77,
                'iso2' => 'PF',
                'name' => 'French Polynesia',
            ),
            77 => 
            array (
                'id' => 78,
                'iso2' => 'TF',
                'name' => 'French Southern Territories',
            ),
            78 => 
            array (
                'id' => 79,
                'iso2' => 'GA',
                'name' => 'Gabon',
            ),
            79 => 
            array (
                'id' => 80,
                'iso2' => 'GM',
                'name' => 'Gambia The',
            ),
            80 => 
            array (
                'id' => 81,
                'iso2' => 'GE',
                'name' => 'Georgia',
            ),
            81 => 
            array (
                'id' => 82,
                'iso2' => 'DE',
                'name' => 'Germany',
            ),
            82 => 
            array (
                'id' => 83,
                'iso2' => 'GH',
                'name' => 'Ghana',
            ),
            83 => 
            array (
                'id' => 84,
                'iso2' => 'GI',
                'name' => 'Gibraltar',
            ),
            84 => 
            array (
                'id' => 85,
                'iso2' => 'GR',
                'name' => 'Greece',
            ),
            85 => 
            array (
                'id' => 86,
                'iso2' => 'GL',
                'name' => 'Greenland',
            ),
            86 => 
            array (
                'id' => 87,
                'iso2' => 'GD',
                'name' => 'Grenada',
            ),
            87 => 
            array (
                'id' => 88,
                'iso2' => 'GP',
                'name' => 'Guadeloupe',
            ),
            88 => 
            array (
                'id' => 89,
                'iso2' => 'GU',
                'name' => 'Guam',
            ),
            89 => 
            array (
                'id' => 90,
                'iso2' => 'GT',
                'name' => 'Guatemala',
            ),
            90 => 
            array (
                'id' => 91,
                'iso2' => 'XU',
                'name' => 'Guernsey and Alderney',
            ),
            91 => 
            array (
                'id' => 92,
                'iso2' => 'GN',
                'name' => 'Guinea',
            ),
            92 => 
            array (
                'id' => 93,
                'iso2' => 'GW',
                'name' => 'Guinea-Bissau',
            ),
            93 => 
            array (
                'id' => 94,
                'iso2' => 'GY',
                'name' => 'Guyana',
            ),
            94 => 
            array (
                'id' => 95,
                'iso2' => 'HT',
                'name' => 'Haiti',
            ),
            95 => 
            array (
                'id' => 96,
                'iso2' => 'HM',
                'name' => 'Heard and McDonald Islands',
            ),
            96 => 
            array (
                'id' => 97,
                'iso2' => 'HN',
                'name' => 'Honduras',
            ),
            97 => 
            array (
                'id' => 98,
                'iso2' => 'HK',
                'name' => 'Hong Kong S.A.R.',
            ),
            98 => 
            array (
                'id' => 99,
                'iso2' => 'HU',
                'name' => 'Hungary',
            ),
            99 => 
            array (
                'id' => 100,
                'iso2' => 'IS',
                'name' => 'Iceland',
            ),
            100 => 
            array (
                'id' => 101,
                'iso2' => 'IN',
                'name' => 'India',
            ),
            101 => 
            array (
                'id' => 102,
                'iso2' => 'ID',
                'name' => 'Indonesia',
            ),
            102 => 
            array (
                'id' => 103,
                'iso2' => 'IR',
                'name' => 'Iran',
            ),
            103 => 
            array (
                'id' => 104,
                'iso2' => 'IQ',
                'name' => 'Iraq',
            ),
            104 => 
            array (
                'id' => 105,
                'iso2' => 'IE',
                'name' => 'Ireland',
            ),
            105 => 
            array (
                'id' => 106,
                'iso2' => 'IL',
                'name' => 'Israel',
            ),
            106 => 
            array (
                'id' => 107,
                'iso2' => 'IT',
                'name' => 'Italy',
            ),
            107 => 
            array (
                'id' => 108,
                'iso2' => 'JM',
                'name' => 'Jamaica',
            ),
            108 => 
            array (
                'id' => 109,
                'iso2' => 'JP',
                'name' => 'Japan',
            ),
            109 => 
            array (
                'id' => 110,
                'iso2' => 'XJ',
                'name' => 'Jersey',
            ),
            110 => 
            array (
                'id' => 111,
                'iso2' => 'JO',
                'name' => 'Jordan',
            ),
            111 => 
            array (
                'id' => 112,
                'iso2' => 'KZ',
                'name' => 'Kazakhstan',
            ),
            112 => 
            array (
                'id' => 113,
                'iso2' => 'KE',
                'name' => 'Kenya',
            ),
            113 => 
            array (
                'id' => 114,
                'iso2' => 'KI',
                'name' => 'Kiribati',
            ),
            114 => 
            array (
                'id' => 115,
                'iso2' => 'KP',
                'name' => 'Korea North',
            ),
            115 => 
            array (
                'id' => 116,
                'iso2' => 'KR',
                'name' => 'Korea South',
            ),
            116 => 
            array (
                'id' => 117,
                'iso2' => 'KW',
                'name' => 'Kuwait',
            ),
            117 => 
            array (
                'id' => 118,
                'iso2' => 'KG',
                'name' => 'Kyrgyzstan',
            ),
            118 => 
            array (
                'id' => 119,
                'iso2' => 'LA',
                'name' => 'Laos',
            ),
            119 => 
            array (
                'id' => 120,
                'iso2' => 'LV',
                'name' => 'Latvia',
            ),
            120 => 
            array (
                'id' => 121,
                'iso2' => 'LB',
                'name' => 'Lebanon',
            ),
            121 => 
            array (
                'id' => 122,
                'iso2' => 'LS',
                'name' => 'Lesotho',
            ),
            122 => 
            array (
                'id' => 123,
                'iso2' => 'LR',
                'name' => 'Liberia',
            ),
            123 => 
            array (
                'id' => 124,
                'iso2' => 'LY',
                'name' => 'Libya',
            ),
            124 => 
            array (
                'id' => 125,
                'iso2' => 'LI',
                'name' => 'Liechtenstein',
            ),
            125 => 
            array (
                'id' => 126,
                'iso2' => 'LT',
                'name' => 'Lithuania',
            ),
            126 => 
            array (
                'id' => 127,
                'iso2' => 'LU',
                'name' => 'Luxembourg',
            ),
            127 => 
            array (
                'id' => 128,
                'iso2' => 'MO',
                'name' => 'Macau S.A.R.',
            ),
            128 => 
            array (
                'id' => 129,
                'iso2' => 'MK',
                'name' => 'Macedonia',
            ),
            129 => 
            array (
                'id' => 130,
                'iso2' => 'MG',
                'name' => 'Madagascar',
            ),
            130 => 
            array (
                'id' => 131,
                'iso2' => 'MW',
                'name' => 'Malawi',
            ),
            131 => 
            array (
                'id' => 132,
                'iso2' => 'MY',
                'name' => 'Malaysia',
            ),
            132 => 
            array (
                'id' => 133,
                'iso2' => 'MV',
                'name' => 'Maldives',
            ),
            133 => 
            array (
                'id' => 134,
                'iso2' => 'ML',
                'name' => 'Mali',
            ),
            134 => 
            array (
                'id' => 135,
                'iso2' => 'MT',
                'name' => 'Malta',
            ),
            135 => 
            array (
                'id' => 136,
                'iso2' => 'XM',
            'name' => 'Man (Isle of)',
            ),
            136 => 
            array (
                'id' => 137,
                'iso2' => 'MH',
                'name' => 'Marshall Islands',
            ),
            137 => 
            array (
                'id' => 138,
                'iso2' => 'MQ',
                'name' => 'Martinique',
            ),
            138 => 
            array (
                'id' => 139,
                'iso2' => 'MR',
                'name' => 'Mauritania',
            ),
            139 => 
            array (
                'id' => 140,
                'iso2' => 'MU',
                'name' => 'Mauritius',
            ),
            140 => 
            array (
                'id' => 141,
                'iso2' => 'YT',
                'name' => 'Mayotte',
            ),
            141 => 
            array (
                'id' => 142,
                'iso2' => 'MX',
                'name' => 'Mexico',
            ),
            142 => 
            array (
                'id' => 143,
                'iso2' => 'FM',
                'name' => 'Micronesia',
            ),
            143 => 
            array (
                'id' => 144,
                'iso2' => 'MD',
                'name' => 'Moldova',
            ),
            144 => 
            array (
                'id' => 145,
                'iso2' => 'MC',
                'name' => 'Monaco',
            ),
            145 => 
            array (
                'id' => 146,
                'iso2' => 'MN',
                'name' => 'Mongolia',
            ),
            146 => 
            array (
                'id' => 147,
                'iso2' => 'MS',
                'name' => 'Montserrat',
            ),
            147 => 
            array (
                'id' => 148,
                'iso2' => 'MA',
                'name' => 'Morocco',
            ),
            148 => 
            array (
                'id' => 149,
                'iso2' => 'MZ',
                'name' => 'Mozambique',
            ),
            149 => 
            array (
                'id' => 150,
                'iso2' => 'MM',
                'name' => 'Myanmar',
            ),
            150 => 
            array (
                'id' => 151,
                'iso2' => 'NA',
                'name' => 'Namibia',
            ),
            151 => 
            array (
                'id' => 152,
                'iso2' => 'NR',
                'name' => 'Nauru',
            ),
            152 => 
            array (
                'id' => 153,
                'iso2' => 'NP',
                'name' => 'Nepal',
            ),
            153 => 
            array (
                'id' => 154,
                'iso2' => 'AN',
                'name' => 'Netherlands Antilles',
            ),
            154 => 
            array (
                'id' => 155,
                'iso2' => 'NL',
                'name' => 'Netherlands The',
            ),
            155 => 
            array (
                'id' => 156,
                'iso2' => 'NC',
                'name' => 'New Caledonia',
            ),
            156 => 
            array (
                'id' => 157,
                'iso2' => 'NZ',
                'name' => 'New Zealand',
            ),
            157 => 
            array (
                'id' => 158,
                'iso2' => 'NI',
                'name' => 'Nicaragua',
            ),
            158 => 
            array (
                'id' => 159,
                'iso2' => 'NE',
                'name' => 'Niger',
            ),
            159 => 
            array (
                'id' => 160,
                'iso2' => 'NG',
                'name' => 'Nigeria',
            ),
            160 => 
            array (
                'id' => 161,
                'iso2' => 'NU',
                'name' => 'Niue',
            ),
            161 => 
            array (
                'id' => 162,
                'iso2' => 'NF',
                'name' => 'Norfolk Island',
            ),
            162 => 
            array (
                'id' => 163,
                'iso2' => 'MP',
                'name' => 'Northern Mariana Islands',
            ),
            163 => 
            array (
                'id' => 164,
                'iso2' => 'NO',
                'name' => 'Norway',
            ),
            164 => 
            array (
                'id' => 165,
                'iso2' => 'OM',
                'name' => 'Oman',
            ),
            165 => 
            array (
                'id' => 166,
                'iso2' => 'PK',
                'name' => 'Pakistan',
            ),
            166 => 
            array (
                'id' => 167,
                'iso2' => 'PW',
                'name' => 'Palau',
            ),
            167 => 
            array (
                'id' => 168,
                'iso2' => 'PS',
                'name' => 'Palestinian Territory Occupied',
            ),
            168 => 
            array (
                'id' => 169,
                'iso2' => 'PA',
                'name' => 'Panama',
            ),
            169 => 
            array (
                'id' => 170,
                'iso2' => 'PG',
                'name' => 'Papua new Guinea',
            ),
            170 => 
            array (
                'id' => 171,
                'iso2' => 'PY',
                'name' => 'Paraguay',
            ),
            171 => 
            array (
                'id' => 172,
                'iso2' => 'PE',
                'name' => 'Peru',
            ),
            172 => 
            array (
                'id' => 173,
                'iso2' => 'PH',
                'name' => 'Philippines',
            ),
            173 => 
            array (
                'id' => 174,
                'iso2' => 'PN',
                'name' => 'Pitcairn Island',
            ),
            174 => 
            array (
                'id' => 175,
                'iso2' => 'PL',
                'name' => 'Poland',
            ),
            175 => 
            array (
                'id' => 176,
                'iso2' => 'PT',
                'name' => 'Portugal',
            ),
            176 => 
            array (
                'id' => 177,
                'iso2' => 'PR',
                'name' => 'Puerto Rico',
            ),
            177 => 
            array (
                'id' => 178,
                'iso2' => 'QA',
                'name' => 'Qatar',
            ),
            178 => 
            array (
                'id' => 179,
                'iso2' => 'RE',
                'name' => 'Reunion',
            ),
            179 => 
            array (
                'id' => 180,
                'iso2' => 'RO',
                'name' => 'Romania',
            ),
            180 => 
            array (
                'id' => 181,
                'iso2' => 'RU',
                'name' => 'Russia',
            ),
            181 => 
            array (
                'id' => 182,
                'iso2' => 'RW',
                'name' => 'Rwanda',
            ),
            182 => 
            array (
                'id' => 183,
                'iso2' => 'SH',
                'name' => 'Saint Helena',
            ),
            183 => 
            array (
                'id' => 184,
                'iso2' => 'KN',
                'name' => 'Saint Kitts And Nevis',
            ),
            184 => 
            array (
                'id' => 185,
                'iso2' => 'LC',
                'name' => 'Saint Lucia',
            ),
            185 => 
            array (
                'id' => 186,
                'iso2' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
            ),
            186 => 
            array (
                'id' => 187,
                'iso2' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
            ),
            187 => 
            array (
                'id' => 188,
                'iso2' => 'WS',
                'name' => 'Samoa',
            ),
            188 => 
            array (
                'id' => 189,
                'iso2' => 'SM',
                'name' => 'San Marino',
            ),
            189 => 
            array (
                'id' => 190,
                'iso2' => 'ST',
                'name' => 'Sao Tome and Principe',
            ),
            190 => 
            array (
                'id' => 191,
                'iso2' => 'SA',
                'name' => 'Saudi Arabia',
            ),
            191 => 
            array (
                'id' => 192,
                'iso2' => 'SN',
                'name' => 'Senegal',
            ),
            192 => 
            array (
                'id' => 193,
                'iso2' => 'RS',
                'name' => 'Serbia',
            ),
            193 => 
            array (
                'id' => 194,
                'iso2' => 'SC',
                'name' => 'Seychelles',
            ),
            194 => 
            array (
                'id' => 195,
                'iso2' => 'SL',
                'name' => 'Sierra Leone',
            ),
            195 => 
            array (
                'id' => 196,
                'iso2' => 'SG',
                'name' => 'Singapore',
            ),
            196 => 
            array (
                'id' => 197,
                'iso2' => 'SK',
                'name' => 'Slovakia',
            ),
            197 => 
            array (
                'id' => 198,
                'iso2' => 'SI',
                'name' => 'Slovenia',
            ),
            198 => 
            array (
                'id' => 199,
                'iso2' => 'XG',
                'name' => 'Smaller Territories of the UK',
            ),
            199 => 
            array (
                'id' => 200,
                'iso2' => 'SB',
                'name' => 'Solomon Islands',
            ),
            200 => 
            array (
                'id' => 201,
                'iso2' => 'SO',
                'name' => 'Somalia',
            ),
            201 => 
            array (
                'id' => 202,
                'iso2' => 'ZA',
                'name' => 'South Africa',
            ),
            202 => 
            array (
                'id' => 203,
                'iso2' => 'GS',
                'name' => 'South Georgia',
            ),
            203 => 
            array (
                'id' => 204,
                'iso2' => 'SS',
                'name' => 'South Sudan',
            ),
            204 => 
            array (
                'id' => 205,
                'iso2' => 'ES',
                'name' => 'Spain',
            ),
            205 => 
            array (
                'id' => 206,
                'iso2' => 'LK',
                'name' => 'Sri Lanka',
            ),
            206 => 
            array (
                'id' => 207,
                'iso2' => 'SD',
                'name' => 'Sudan',
            ),
            207 => 
            array (
                'id' => 208,
                'iso2' => 'SR',
                'name' => 'Suriname',
            ),
            208 => 
            array (
                'id' => 209,
                'iso2' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
            ),
            209 => 
            array (
                'id' => 210,
                'iso2' => 'SZ',
                'name' => 'Swaziland',
            ),
            210 => 
            array (
                'id' => 211,
                'iso2' => 'SE',
                'name' => 'Sweden',
            ),
            211 => 
            array (
                'id' => 212,
                'iso2' => 'CH',
                'name' => 'Switzerland',
            ),
            212 => 
            array (
                'id' => 213,
                'iso2' => 'SY',
                'name' => 'Syria',
            ),
            213 => 
            array (
                'id' => 214,
                'iso2' => 'TW',
                'name' => 'Taiwan',
            ),
            214 => 
            array (
                'id' => 215,
                'iso2' => 'TJ',
                'name' => 'Tajikistan',
            ),
            215 => 
            array (
                'id' => 216,
                'iso2' => 'TZ',
                'name' => 'Tanzania',
            ),
            216 => 
            array (
                'id' => 217,
                'iso2' => 'TH',
                'name' => 'Thailand',
            ),
            217 => 
            array (
                'id' => 218,
                'iso2' => 'TG',
                'name' => 'Togo',
            ),
            218 => 
            array (
                'id' => 219,
                'iso2' => 'TK',
                'name' => 'Tokelau',
            ),
            219 => 
            array (
                'id' => 220,
                'iso2' => 'TO',
                'name' => 'Tonga',
            ),
            220 => 
            array (
                'id' => 221,
                'iso2' => 'TT',
                'name' => 'Trinidad And Tobago',
            ),
            221 => 
            array (
                'id' => 222,
                'iso2' => 'TN',
                'name' => 'Tunisia',
            ),
            222 => 
            array (
                'id' => 223,
                'iso2' => 'TR',
                'name' => 'Turkey',
            ),
            223 => 
            array (
                'id' => 224,
                'iso2' => 'TM',
                'name' => 'Turkmenistan',
            ),
            224 => 
            array (
                'id' => 225,
                'iso2' => 'TC',
                'name' => 'Turks And Caicos Islands',
            ),
            225 => 
            array (
                'id' => 226,
                'iso2' => 'TV',
                'name' => 'Tuvalu',
            ),
            226 => 
            array (
                'id' => 227,
                'iso2' => 'UG',
                'name' => 'Uganda',
            ),
            227 => 
            array (
                'id' => 228,
                'iso2' => 'UA',
                'name' => 'Ukraine',
            ),
            228 => 
            array (
                'id' => 229,
                'iso2' => 'AE',
                'name' => 'United Arab Emirates',
            ),
            229 => 
            array (
                'id' => 230,
                'iso2' => 'GB',
                'name' => 'United Kingdom',
            ),
            230 => 
            array (
                'id' => 231,
                'iso2' => 'US',
                'name' => 'United States',
            ),
            231 => 
            array (
                'id' => 232,
                'iso2' => 'UM',
                'name' => 'United States Minor Outlying Islands',
            ),
            232 => 
            array (
                'id' => 233,
                'iso2' => 'UY',
                'name' => 'Uruguay',
            ),
            233 => 
            array (
                'id' => 234,
                'iso2' => 'UZ',
                'name' => 'Uzbekistan',
            ),
            234 => 
            array (
                'id' => 235,
                'iso2' => 'VU',
                'name' => 'Vanuatu',
            ),
            235 => 
            array (
                'id' => 236,
                'iso2' => 'VA',
            'name' => 'Vatican City State (Holy See)',
            ),
            236 => 
            array (
                'id' => 237,
                'iso2' => 'VE',
                'name' => 'Venezuela',
            ),
            237 => 
            array (
                'id' => 238,
                'iso2' => 'VN',
                'name' => 'Vietnam',
            ),
            238 => 
            array (
                'id' => 239,
                'iso2' => 'VG',
            'name' => 'Virgin Islands (British)',
            ),
            239 => 
            array (
                'id' => 240,
                'iso2' => 'VI',
            'name' => 'Virgin Islands (US)',
            ),
            240 => 
            array (
                'id' => 241,
                'iso2' => 'WF',
                'name' => 'Wallis And Futuna Islands',
            ),
            241 => 
            array (
                'id' => 242,
                'iso2' => 'EH',
                'name' => 'Western Sahara',
            ),
            242 => 
            array (
                'id' => 243,
                'iso2' => 'YE',
                'name' => 'Yemen',
            ),
            243 => 
            array (
                'id' => 244,
                'iso2' => 'YU',
                'name' => 'Yugoslavia',
            ),
            244 => 
            array (
                'id' => 245,
                'iso2' => 'ZM',
                'name' => 'Zambia',
            ),
            245 => 
            array (
                'id' => 246,
                'iso2' => 'ZW',
                'name' => 'Zimbabwe',
            ),
        ));
        
        
    }
}
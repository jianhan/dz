<?php

use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('occupations')->delete();
        
        \DB::table('occupations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Chief Executive or Managing Director',
                'visible' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Corporate General Manager',
                'visible' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Defence Force Senior Officer',
                'visible' => 1,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Aquaculture Farmer',
                'visible' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Cotton Grower',
                'visible' => 1,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Flower Grower',
                'visible' => 1,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Fruit or Nut Grower',
                'visible' => 1,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Grain, Oilseed or Pasture Grower  ',
                'visible' => 1,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Grape Grower',
                'visible' => 1,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Mixed Crop Farmer',
                'visible' => 1,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Sugar Cane Grower',
                'visible' => 1,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Turf Grower',
                'visible' => 1,
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Vegetable Grower',
                'visible' => 1,
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Crop Farmers nec',
                'visible' => 1,
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Apiarist',
                'visible' => 1,
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Beef Cattle Farmer',
                'visible' => 1,
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Dairy Cattle Farmer',
                'visible' => 1,
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Deer Farmer',
                'visible' => 1,
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Goat Farmer',
                'visible' => 1,
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Horse Breeder',
                'visible' => 1,
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Mixed Livestock Farmer',
                'visible' => 1,
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Pig Farmer',
                'visible' => 1,
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Poultry Farmer',
                'visible' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'Sheep Farmer',
                'visible' => 1,
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'Livestock Farmers nec',
                'visible' => 1,
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'Mixed Crop and Livestock Farmer',
                'visible' => 1,
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'Sales and Marketing Manager',
                'visible' => 1,
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'Advertising Manager',
                'visible' => 1,
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'Public Relations Manager',
                'visible' => 1,
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'Corporate Services Manager',
                'visible' => 1,
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'Finance Manager',
                'visible' => 1,
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'Human Resource Manager',
                'visible' => 1,
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'Policy and Planning Manager',
                'visible' => 1,
            ),
            33 => 
            array (
                'id' => 35,
                'name' => 'Research and Development Manager',
                'visible' => 1,
            ),
            34 => 
            array (
                'id' => 36,
                'name' => 'Construction Project Manager',
                'visible' => 1,
            ),
            35 => 
            array (
                'id' => 37,
                'name' => 'Project Builder',
                'visible' => 1,
            ),
            36 => 
            array (
                'id' => 38,
                'name' => 'Engineering Manager',
                'visible' => 1,
            ),
            37 => 
            array (
                'id' => 39,
                'name' => 'Importer or Exporter',
                'visible' => 1,
            ),
            38 => 
            array (
                'id' => 40,
                'name' => 'Wholesaler',
                'visible' => 1,
            ),
            39 => 
            array (
                'id' => 41,
                'name' => 'Manufacturer',
                'visible' => 1,
            ),
            40 => 
            array (
                'id' => 42,
            'name' => 'Production Manager (Forestry)',
                'visible' => 1,
            ),
            41 => 
            array (
                'id' => 43,
            'name' => 'Production Manager (Manufacturing)',
                'visible' => 1,
            ),
            42 => 
            array (
                'id' => 44,
            'name' => 'Production Manager (Mining)',
                'visible' => 1,
            ),
            43 => 
            array (
                'id' => 45,
                'name' => 'Supply and Distribution  Manager',
                'visible' => 1,
            ),
            44 => 
            array (
                'id' => 46,
                'name' => 'Procurement Manager',
                'visible' => 1,
            ),
            45 => 
            array (
                'id' => 47,
                'name' => 'Child Care Centre Manager',
                'visible' => 1,
            ),
            46 => 
            array (
                'id' => 48,
                'name' => 'Medical Administrator',
                'visible' => 1,
            ),
            47 => 
            array (
                'id' => 49,
                'name' => 'Nursing Clinical Director',
                'visible' => 1,
            ),
            48 => 
            array (
                'id' => 50,
                'name' => 'Primary Health Organisation Manager',
                'visible' => 1,
            ),
            49 => 
            array (
                'id' => 51,
                'name' => 'Welfare Centre Manager',
                'visible' => 1,
            ),
            50 => 
            array (
                'id' => 52,
                'name' => 'Health and Welfare Serv. Managers',
                'visible' => 1,
            ),
            51 => 
            array (
                'id' => 53,
                'name' => 'School Principal',
                'visible' => 1,
            ),
            52 => 
            array (
                'id' => 54,
                'name' => 'Faculty Head',
                'visible' => 1,
            ),
            53 => 
            array (
                'id' => 55,
                'name' => 'Regional Education Manager',
                'visible' => 1,
            ),
            54 => 
            array (
                'id' => 56,
                'name' => 'Education Managers nec',
                'visible' => 1,
            ),
            55 => 
            array (
                'id' => 57,
                'name' => 'Chief Information Officer',
                'visible' => 1,
            ),
            56 => 
            array (
                'id' => 58,
                'name' => 'ICT Project Manager',
                'visible' => 1,
            ),
            57 => 
            array (
                'id' => 59,
                'name' => 'ICT Managers nec',
                'visible' => 1,
            ),
            58 => 
            array (
                'id' => 60,
                'name' => 'Commissioned Defence Force Officer',
                'visible' => 1,
            ),
            59 => 
            array (
                'id' => 61,
                'name' => 'Commissioned Fire Officer',
                'visible' => 1,
            ),
            60 => 
            array (
                'id' => 62,
                'name' => 'Commissioned Police Officer',
                'visible' => 1,
            ),
            61 => 
            array (
                'id' => 63,
                'name' => 'Senior Non-Comm. Defence Member',
                'visible' => 1,
            ),
            62 => 
            array (
                'id' => 64,
                'name' => 'Art Administrator or Manager',
                'visible' => 1,
            ),
            63 => 
            array (
                'id' => 65,
                'name' => 'Environmental Manager',
                'visible' => 1,
            ),
            64 => 
            array (
                'id' => 66,
                'name' => 'Laboratory Manager',
                'visible' => 1,
            ),
            65 => 
            array (
                'id' => 67,
                'name' => 'Quality Assurance Manager',
                'visible' => 1,
            ),
            66 => 
            array (
                'id' => 68,
                'name' => 'Sports Administrator',
                'visible' => 1,
            ),
            67 => 
            array (
                'id' => 69,
                'name' => 'Specialist Managers nec ',
                'visible' => 1,
            ),
            68 => 
            array (
                'id' => 70,
            'name' => 'Cafe or Rest Manager (excl fast food)',
                'visible' => 1,
            ),
            69 => 
            array (
                'id' => 71,
                'name' => 'Caravan Park/ Camping Manager',
                'visible' => 1,
            ),
            70 => 
            array (
                'id' => 72,
                'name' => 'Hotel or Motel Manager',
                'visible' => 1,
            ),
            71 => 
            array (
                'id' => 73,
                'name' => 'Licensed Club Manager',
                'visible' => 1,
            ),
            72 => 
            array (
                'id' => 74,
                'name' => 'Bed and Breakfast Operator',
                'visible' => 1,
            ),
            73 => 
            array (
                'id' => 75,
                'name' => 'Retirement Village Manager',
                'visible' => 1,
            ),
            74 => 
            array (
                'id' => 76,
                'name' => 'Accom. and Hospitality Managers nec',
                'visible' => 1,
            ),
            75 => 
            array (
                'id' => 77,
                'name' => 'Antique Dealer',
                'visible' => 1,
            ),
            76 => 
            array (
                'id' => 78,
                'name' => 'Betting Agency Manager',
                'visible' => 1,
            ),
            77 => 
            array (
                'id' => 79,
                'name' => 'Hair or Beauty Salon Manager',
                'visible' => 1,
            ),
            78 => 
            array (
                'id' => 80,
                'name' => 'Post Office Manager',
                'visible' => 1,
            ),
            79 => 
            array (
                'id' => 81,
                'name' => 'Travel Agency Manager',
                'visible' => 1,
            ),
            80 => 
            array (
                'id' => 82,
                'name' => 'Amusement Centre Manager',
                'visible' => 1,
            ),
            81 => 
            array (
                'id' => 83,
                'name' => 'Fitness Centre Manager',
                'visible' => 1,
            ),
            82 => 
            array (
                'id' => 84,
                'name' => 'Sports Centre Manager',
                'visible' => 1,
            ),
            83 => 
            array (
                'id' => 85,
                'name' => 'Call or Contact Centre Manager',
                'visible' => 1,
            ),
            84 => 
            array (
                'id' => 86,
                'name' => 'Customer Service Manager',
                'visible' => 1,
            ),
            85 => 
            array (
                'id' => 87,
                'name' => 'Conference and Event Organiser',
                'visible' => 1,
            ),
            86 => 
            array (
                'id' => 88,
                'name' => 'Fleet Manager',
                'visible' => 1,
            ),
            87 => 
            array (
                'id' => 89,
                'name' => 'Railway Station Manager',
                'visible' => 1,
            ),
            88 => 
            array (
                'id' => 90,
                'name' => 'Transport Company Manager',
                'visible' => 1,
            ),
            89 => 
            array (
                'id' => 91,
                'name' => 'Boarding Kennel or Cattery Operator',
                'visible' => 1,
            ),
            90 => 
            array (
                'id' => 92,
                'name' => 'Cinema or Theatre Manager',
                'visible' => 1,
            ),
            91 => 
            array (
                'id' => 93,
                'name' => 'Facilities Manager',
                'visible' => 1,
            ),
            92 => 
            array (
                'id' => 94,
                'name' => 'Financial Institution Branch Manager',
                'visible' => 1,
            ),
            93 => 
            array (
                'id' => 95,
                'name' => 'Equipment Hire Manager',
                'visible' => 1,
            ),
            94 => 
            array (
                'id' => 96,
                'name' => 'Actor',
                'visible' => 1,
            ),
            95 => 
            array (
                'id' => 97,
                'name' => 'Dancer or Choreographer',
                'visible' => 1,
            ),
            96 => 
            array (
                'id' => 98,
                'name' => 'Entertainer or Variety Artist',
                'visible' => 1,
            ),
            97 => 
            array (
                'id' => 99,
                'name' => 'Actors, Dancers and Other Entertainers nec',
                'visible' => 1,
            ),
            98 => 
            array (
                'id' => 100,
                'name' => 'Composer',
                'visible' => 1,
            ),
            99 => 
            array (
                'id' => 101,
                'name' => 'Music Director',
                'visible' => 1,
            ),
            100 => 
            array (
                'id' => 102,
            'name' => 'Musician (Instrumental)',
                'visible' => 1,
            ),
            101 => 
            array (
                'id' => 103,
                'name' => 'Singer',
                'visible' => 1,
            ),
            102 => 
            array (
                'id' => 104,
                'name' => 'Music Professionals nec',
                'visible' => 1,
            ),
            103 => 
            array (
                'id' => 105,
                'name' => 'Photographer',
                'visible' => 1,
            ),
            104 => 
            array (
                'id' => 106,
            'name' => 'Painter (Visual Arts)',
                'visible' => 1,
            ),
            105 => 
            array (
                'id' => 107,
                'name' => 'Potter or Ceramic Artist',
                'visible' => 1,
            ),
            106 => 
            array (
                'id' => 108,
                'name' => 'Sculptor',
                'visible' => 1,
            ),
            107 => 
            array (
                'id' => 109,
                'name' => 'Visual Arts and Crafts Prof. Nec',
                'visible' => 1,
            ),
            108 => 
            array (
                'id' => 110,
                'name' => 'Artistic Director',
                'visible' => 1,
            ),
            109 => 
            array (
                'id' => 111,
            'name' => 'Media Producer (Excluding Video)',
                'visible' => 1,
            ),
            110 => 
            array (
                'id' => 112,
                'name' => 'Radio Presenter',
                'visible' => 1,
            ),
            111 => 
            array (
                'id' => 113,
                'name' => 'Television Presenter',
                'visible' => 1,
            ),
            112 => 
            array (
                'id' => 114,
                'name' => 'Author',
                'visible' => 1,
            ),
            113 => 
            array (
                'id' => 115,
                'name' => 'Book or Script Editor',
                'visible' => 1,
            ),
            114 => 
            array (
                'id' => 116,
            'name' => 'Art Director (Film, Television or Stage)',
                'visible' => 1,
            ),
            115 => 
            array (
                'id' => 117,
            'name' => 'Director (Film, TV, Radio or Stage)',
                'visible' => 1,
            ),
            116 => 
            array (
                'id' => 118,
                'name' => 'Director of Photography',
                'visible' => 1,
            ),
            117 => 
            array (
                'id' => 119,
                'name' => 'Film and Video Editor',
                'visible' => 1,
            ),
            118 => 
            array (
                'id' => 120,
            'name' => 'Program Director (Television or Radio)',
                'visible' => 1,
            ),
            119 => 
            array (
                'id' => 121,
                'name' => 'Stage Manager',
                'visible' => 1,
            ),
            120 => 
            array (
                'id' => 122,
                'name' => 'Technical Director',
                'visible' => 1,
            ),
            121 => 
            array (
                'id' => 123,
                'name' => 'Video Producer',
                'visible' => 1,
            ),
            122 => 
            array (
                'id' => 124,
                'name' => 'Film, TV, Radio and Stage Directors',
                'visible' => 1,
            ),
            123 => 
            array (
                'id' => 125,
                'name' => 'Copywriter',
                'visible' => 1,
            ),
            124 => 
            array (
                'id' => 126,
                'name' => 'Newspaper or Periodical Editor',
                'visible' => 1,
            ),
            125 => 
            array (
                'id' => 127,
                'name' => 'Print Journalist',
                'visible' => 1,
            ),
            126 => 
            array (
                'id' => 128,
                'name' => 'Radio Journalist',
                'visible' => 1,
            ),
            127 => 
            array (
                'id' => 129,
                'name' => 'Technical Writer',
                'visible' => 1,
            ),
            128 => 
            array (
                'id' => 130,
                'name' => 'Television Journalist',
                'visible' => 1,
            ),
            129 => 
            array (
                'id' => 131,
                'name' => 'Journalists and Other Writers nec',
                'visible' => 1,
            ),
            130 => 
            array (
                'id' => 132,
            'name' => 'Accountant (General)',
                'visible' => 1,
            ),
            131 => 
            array (
                'id' => 133,
                'name' => 'Management Accountant',
                'visible' => 1,
            ),
            132 => 
            array (
                'id' => 134,
                'name' => 'Taxation Accountant',
                'visible' => 1,
            ),
            133 => 
            array (
                'id' => 135,
                'name' => 'Company Secretary',
                'visible' => 1,
            ),
            134 => 
            array (
                'id' => 136,
                'name' => 'Corporate Treasurer',
                'visible' => 1,
            ),
            135 => 
            array (
                'id' => 137,
                'name' => 'External Auditor',
                'visible' => 1,
            ),
            136 => 
            array (
                'id' => 138,
                'name' => 'Internal Auditor',
                'visible' => 1,
            ),
            137 => 
            array (
                'id' => 139,
                'name' => 'Commodities Trader',
                'visible' => 1,
            ),
            138 => 
            array (
                'id' => 140,
                'name' => 'Finance Broker',
                'visible' => 1,
            ),
            139 => 
            array (
                'id' => 141,
                'name' => 'Insurance Broker',
                'visible' => 1,
            ),
            140 => 
            array (
                'id' => 142,
                'name' => 'Financial Brokers nec',
                'visible' => 1,
            ),
            141 => 
            array (
                'id' => 143,
                'name' => 'Financial Market Dealer',
                'visible' => 1,
            ),
            142 => 
            array (
                'id' => 144,
                'name' => 'Futures Trader',
                'visible' => 1,
            ),
            143 => 
            array (
                'id' => 145,
                'name' => 'Stockbroking Dealer',
                'visible' => 1,
            ),
            144 => 
            array (
                'id' => 146,
                'name' => 'Financial Dealers nec',
                'visible' => 1,
            ),
            145 => 
            array (
                'id' => 147,
                'name' => 'Financial Investment Adviser',
                'visible' => 1,
            ),
            146 => 
            array (
                'id' => 148,
                'name' => 'Financial Investment Manager',
                'visible' => 1,
            ),
            147 => 
            array (
                'id' => 149,
                'name' => 'Human Resource Adviser',
                'visible' => 1,
            ),
            148 => 
            array (
                'id' => 150,
                'name' => 'Recruitment Consultant',
                'visible' => 1,
            ),
            149 => 
            array (
                'id' => 151,
                'name' => 'Workplace Relations Adviser',
                'visible' => 1,
            ),
            150 => 
            array (
                'id' => 152,
                'name' => 'ICT Trainer',
                'visible' => 1,
            ),
            151 => 
            array (
                'id' => 153,
                'name' => 'Training and Development Prof.',
                'visible' => 1,
            ),
            152 => 
            array (
                'id' => 154,
                'name' => 'Actuary',
                'visible' => 1,
            ),
            153 => 
            array (
                'id' => 155,
                'name' => 'Mathematician',
                'visible' => 1,
            ),
            154 => 
            array (
                'id' => 156,
                'name' => 'Statistician',
                'visible' => 1,
            ),
            155 => 
            array (
                'id' => 157,
                'name' => 'Archivist',
                'visible' => 1,
            ),
            156 => 
            array (
                'id' => 158,
                'name' => 'Gallery or Museum Curator',
                'visible' => 1,
            ),
            157 => 
            array (
                'id' => 159,
                'name' => 'Health Information Manager',
                'visible' => 1,
            ),
            158 => 
            array (
                'id' => 160,
                'name' => 'Records Manager',
                'visible' => 1,
            ),
            159 => 
            array (
                'id' => 161,
                'name' => 'Economist',
                'visible' => 1,
            ),
            160 => 
            array (
                'id' => 162,
                'name' => 'Intelligence Officer',
                'visible' => 1,
            ),
            161 => 
            array (
                'id' => 163,
                'name' => 'Policy Analyst',
                'visible' => 1,
            ),
            162 => 
            array (
                'id' => 164,
                'name' => 'Land Economist',
                'visible' => 1,
            ),
            163 => 
            array (
                'id' => 165,
                'name' => 'Valuer',
                'visible' => 1,
            ),
            164 => 
            array (
                'id' => 166,
                'name' => 'Librarian',
                'visible' => 1,
            ),
            165 => 
            array (
                'id' => 167,
                'name' => 'Management Consultant',
                'visible' => 1,
            ),
            166 => 
            array (
                'id' => 168,
                'name' => 'Organisation and Methods Analyst',
                'visible' => 1,
            ),
            167 => 
            array (
                'id' => 169,
                'name' => 'Electorate Officer',
                'visible' => 1,
            ),
            168 => 
            array (
                'id' => 170,
                'name' => 'Liaison Officer',
                'visible' => 1,
            ),
            169 => 
            array (
                'id' => 171,
            'name' => 'Migration Agent (Aus) ',
                'visible' => 1,
            ),
            170 => 
            array (
                'id' => 172,
                'name' => 'Patents Examiner',
                'visible' => 1,
            ),
            171 => 
            array (
                'id' => 173,
                'name' => 'Information and Org. Prof. Nec',
                'visible' => 1,
            ),
            172 => 
            array (
                'id' => 174,
                'name' => 'Advertising Specialist',
                'visible' => 1,
            ),
            173 => 
            array (
                'id' => 175,
                'name' => 'Market Research Analyst',
                'visible' => 1,
            ),
            174 => 
            array (
                'id' => 176,
                'name' => 'Marketing Specialist',
                'visible' => 1,
            ),
            175 => 
            array (
                'id' => 177,
                'name' => 'ICT Account Manager',
                'visible' => 1,
            ),
            176 => 
            array (
                'id' => 178,
                'name' => 'ICT Business Development Manager',
                'visible' => 1,
            ),
            177 => 
            array (
                'id' => 179,
                'name' => 'ICT Sales Representative',
                'visible' => 1,
            ),
            178 => 
            array (
                'id' => 180,
                'name' => 'Public Relations Professional',
                'visible' => 1,
            ),
            179 => 
            array (
                'id' => 181,
            'name' => 'Sales Representative (Ind. Products)',
                'visible' => 1,
            ),
            180 => 
            array (
                'id' => 182,
            'name' => 'Sales Rep (Medical and Pharm.)',
                'visible' => 1,
            ),
            181 => 
            array (
                'id' => 183,
                'name' => 'Technical Sales Representatives nec',
                'visible' => 1,
            ),
            182 => 
            array (
                'id' => 184,
                'name' => 'Aeroplane Pilot',
                'visible' => 1,
            ),
            183 => 
            array (
                'id' => 185,
                'name' => 'Air Traffic Controller',
                'visible' => 1,
            ),
            184 => 
            array (
                'id' => 186,
                'name' => 'Flying Instructor',
                'visible' => 1,
            ),
            185 => 
            array (
                'id' => 187,
                'name' => 'Helicopter Pilot',
                'visible' => 1,
            ),
            186 => 
            array (
                'id' => 188,
                'name' => 'Air Transport Professionals nec',
                'visible' => 1,
            ),
            187 => 
            array (
                'id' => 189,
                'name' => 'Master Fisher',
                'visible' => 1,
            ),
            188 => 
            array (
                'id' => 190,
                'name' => 'Ship\'s Engineer',
                'visible' => 1,
            ),
            189 => 
            array (
                'id' => 191,
                'name' => 'Ship\'s Master',
                'visible' => 1,
            ),
            190 => 
            array (
                'id' => 192,
                'name' => 'Ship\'s Officer',
                'visible' => 1,
            ),
            191 => 
            array (
                'id' => 193,
                'name' => 'Ship\'s Surveyor',
                'visible' => 1,
            ),
            192 => 
            array (
                'id' => 194,
                'name' => 'Marine Transport Professionals nec',
                'visible' => 1,
            ),
            193 => 
            array (
                'id' => 195,
                'name' => 'Architect',
                'visible' => 1,
            ),
            194 => 
            array (
                'id' => 196,
                'name' => 'Landscape Architect',
                'visible' => 1,
            ),
            195 => 
            array (
                'id' => 197,
                'name' => 'Surveyor',
                'visible' => 1,
            ),
            196 => 
            array (
                'id' => 198,
                'name' => 'Cartographer',
                'visible' => 1,
            ),
            197 => 
            array (
                'id' => 199,
                'name' => 'Other Spatial Scientist',
                'visible' => 1,
            ),
            198 => 
            array (
                'id' => 200,
                'name' => 'Fashion Designer',
                'visible' => 1,
            ),
            199 => 
            array (
                'id' => 201,
                'name' => 'Industrial Designer',
                'visible' => 1,
            ),
            200 => 
            array (
                'id' => 202,
                'name' => 'Jewellery Designer',
                'visible' => 1,
            ),
            201 => 
            array (
                'id' => 203,
                'name' => 'Graphic Designer',
                'visible' => 1,
            ),
            202 => 
            array (
                'id' => 204,
                'name' => 'Illustrator',
                'visible' => 1,
            ),
            203 => 
            array (
                'id' => 205,
                'name' => 'Multimedia Designer',
                'visible' => 1,
            ),
            204 => 
            array (
                'id' => 206,
                'name' => 'Web Designer',
                'visible' => 1,
            ),
            205 => 
            array (
                'id' => 207,
                'name' => 'Interior Designer',
                'visible' => 1,
            ),
            206 => 
            array (
                'id' => 208,
                'name' => 'Urban and Regional Planner',
                'visible' => 1,
            ),
            207 => 
            array (
                'id' => 209,
                'name' => 'Chemical Engineer',
                'visible' => 1,
            ),
            208 => 
            array (
                'id' => 210,
                'name' => 'Materials Engineer',
                'visible' => 1,
            ),
            209 => 
            array (
                'id' => 211,
                'name' => 'Civil Engineer',
                'visible' => 1,
            ),
            210 => 
            array (
                'id' => 212,
                'name' => 'Geotechnical Engineer',
                'visible' => 1,
            ),
            211 => 
            array (
                'id' => 213,
                'name' => 'Quantity Surveyor',
                'visible' => 1,
            ),
            212 => 
            array (
                'id' => 214,
                'name' => 'Structural Engineer',
                'visible' => 1,
            ),
            213 => 
            array (
                'id' => 215,
                'name' => 'Transport Engineer',
                'visible' => 1,
            ),
            214 => 
            array (
                'id' => 216,
                'name' => 'Electrical Engineer',
                'visible' => 1,
            ),
            215 => 
            array (
                'id' => 217,
                'name' => 'Electronics Engineer',
                'visible' => 1,
            ),
            216 => 
            array (
                'id' => 218,
                'name' => 'Industrial Engineer',
                'visible' => 1,
            ),
            217 => 
            array (
                'id' => 219,
                'name' => 'Mechanical Engineer',
                'visible' => 1,
            ),
            218 => 
            array (
                'id' => 220,
                'name' => 'Production or Plant Engineer',
                'visible' => 1,
            ),
            219 => 
            array (
                'id' => 221,
            'name' => 'Mining Engineer (Excluding Petroleum)',
                'visible' => 1,
            ),
            220 => 
            array (
                'id' => 222,
                'name' => 'Petroleum Engineer',
                'visible' => 1,
            ),
            221 => 
            array (
                'id' => 223,
                'name' => 'Aeronautical Engineer',
                'visible' => 1,
            ),
            222 => 
            array (
                'id' => 224,
                'name' => 'Agricultural Engineer',
                'visible' => 1,
            ),
            223 => 
            array (
                'id' => 225,
                'name' => 'Biomedical Engineer',
                'visible' => 1,
            ),
            224 => 
            array (
                'id' => 226,
                'name' => 'Engineering Technologist',
                'visible' => 1,
            ),
            225 => 
            array (
                'id' => 227,
                'name' => 'Environmental Engineer',
                'visible' => 1,
            ),
            226 => 
            array (
                'id' => 228,
                'name' => 'Naval Architect ',
                'visible' => 1,
            ),
            227 => 
            array (
                'id' => 229,
                'name' => 'Engineering Professional nec',
                'visible' => 1,
            ),
            228 => 
            array (
                'id' => 230,
                'name' => 'Agricultural Consultant',
                'visible' => 1,
            ),
            229 => 
            array (
                'id' => 231,
                'name' => 'Agricultural Scientist',
                'visible' => 1,
            ),
            230 => 
            array (
                'id' => 232,
                'name' => 'Forester ',
                'visible' => 1,
            ),
            231 => 
            array (
                'id' => 233,
                'name' => 'Chemist',
                'visible' => 1,
            ),
            232 => 
            array (
                'id' => 234,
                'name' => 'Food Technologist',
                'visible' => 1,
            ),
            233 => 
            array (
                'id' => 235,
                'name' => 'Wine Maker',
                'visible' => 1,
            ),
            234 => 
            array (
                'id' => 236,
                'name' => 'Conservation Officer',
                'visible' => 1,
            ),
            235 => 
            array (
                'id' => 237,
                'name' => 'Environmental Consultant',
                'visible' => 1,
            ),
            236 => 
            array (
                'id' => 238,
                'name' => 'Environmental Research Scientist',
                'visible' => 1,
            ),
            237 => 
            array (
                'id' => 239,
                'name' => 'Park Ranger',
                'visible' => 1,
            ),
            238 => 
            array (
                'id' => 240,
                'name' => 'Environmental Scientists nec',
                'visible' => 1,
            ),
            239 => 
            array (
                'id' => 241,
                'name' => 'Geologist',
                'visible' => 1,
            ),
            240 => 
            array (
                'id' => 242,
                'name' => 'Geophysicist',
                'visible' => 1,
            ),
            241 => 
            array (
                'id' => 243,
            'name' => 'Life Scientist (General)',
                'visible' => 1,
            ),
            242 => 
            array (
                'id' => 244,
                'name' => 'Biochemist',
                'visible' => 1,
            ),
            243 => 
            array (
                'id' => 245,
                'name' => 'Biotechnologist',
                'visible' => 1,
            ),
            244 => 
            array (
                'id' => 246,
                'name' => 'Botanist',
                'visible' => 1,
            ),
            245 => 
            array (
                'id' => 247,
                'name' => 'Marine Biologist',
                'visible' => 1,
            ),
            246 => 
            array (
                'id' => 248,
                'name' => 'Microbiologist',
                'visible' => 1,
            ),
            247 => 
            array (
                'id' => 249,
                'name' => 'Zoologist',
                'visible' => 1,
            ),
            248 => 
            array (
                'id' => 250,
                'name' => 'Life Scientists nec',
                'visible' => 1,
            ),
            249 => 
            array (
                'id' => 251,
                'name' => 'Medical Laboratory Scientist',
                'visible' => 1,
            ),
            250 => 
            array (
                'id' => 252,
                'name' => 'Veterinarian',
                'visible' => 1,
            ),
            251 => 
            array (
                'id' => 253,
                'name' => 'Conservator',
                'visible' => 1,
            ),
            252 => 
            array (
                'id' => 254,
                'name' => 'Metallurgist',
                'visible' => 1,
            ),
            253 => 
            array (
                'id' => 255,
                'name' => 'Meteorologist',
                'visible' => 1,
            ),
            254 => 
            array (
                'id' => 256,
                'name' => 'Physicist',
                'visible' => 1,
            ),
            255 => 
            array (
                'id' => 257,
                'name' => 'Natural and Physical Science Prof nec',
                'visible' => 1,
            ),
            256 => 
            array (
                'id' => 258,
            'name' => 'Early Childhood (Pre-Primary ) Teacher',
                'visible' => 1,
            ),
            257 => 
            array (
                'id' => 259,
                'name' => 'Primary School Teacher',
                'visible' => 1,
            ),
            258 => 
            array (
                'id' => 260,
                'name' => 'Middle School Teacher ',
                'visible' => 1,
            ),
            259 => 
            array (
                'id' => 261,
                'name' => 'Secondary School  Teacher',
                'visible' => 1,
            ),
            260 => 
            array (
                'id' => 262,
                'name' => 'Special Needs Teacher',
                'visible' => 1,
            ),
            261 => 
            array (
                'id' => 263,
                'name' => 'Teacher of the Hearing Impaired',
                'visible' => 1,
            ),
            262 => 
            array (
                'id' => 264,
                'name' => 'Teacher of the Sight Impaired',
                'visible' => 1,
            ),
            263 => 
            array (
                'id' => 265,
                'name' => 'Special Education Teachers nec',
                'visible' => 1,
            ),
            264 => 
            array (
                'id' => 266,
                'name' => 'University Lecturer (Suitable for the',
                    'visible' => 1,
                ),
                265 => 
                array (
                    'id' => 267,
                    'name' => 'University Tutor',
                    'visible' => 1,
                ),
                266 => 
                array (
                    'id' => 268,
                'name' => 'Vocational Education Teacher (Non Trades)',
                    'visible' => 1,
                ),
                267 => 
                array (
                    'id' => 269,
                'name' => 'Vocational Education Teacher (Trades)',
                    'visible' => 1,
                ),
                268 => 
                array (
                    'id' => 270,
                    'name' => 'Education Adviser',
                    'visible' => 1,
                ),
                269 => 
                array (
                    'id' => 271,
                    'name' => 'Education Reviewer',
                    'visible' => 1,
                ),
                270 => 
                array (
                    'id' => 272,
                'name' => 'Art Teacher (Private Tuition)',
                    'visible' => 1,
                ),
                271 => 
                array (
                    'id' => 273,
                'name' => 'Dance Teacher (Private Tuition)',
                    'visible' => 1,
                ),
                272 => 
                array (
                    'id' => 274,
                'name' => 'Drama Teacher (Private Tuition)',
                    'visible' => 1,
                ),
                273 => 
                array (
                    'id' => 275,
                'name' => 'Music Teacher (Private Tuition)',
                    'visible' => 1,
                ),
                274 => 
                array (
                    'id' => 276,
                    'name' => 'Private Tutors and Teachers nec',
                    'visible' => 1,
                ),
                275 => 
                array (
                    'id' => 277,
                'name' => 'Teacher (TESOL)',
                    'visible' => 1,
                ),
                276 => 
                array (
                    'id' => 278,
                    'name' => 'Dietician',
                    'visible' => 1,
                ),
                277 => 
                array (
                    'id' => 279,
                    'name' => 'Nutritionist',
                    'visible' => 1,
                ),
                278 => 
                array (
                    'id' => 280,
                    'name' => 'Medical Diagnostic Radiographer',
                    'visible' => 1,
                ),
                279 => 
                array (
                    'id' => 281,
                    'name' => 'Medical Radiation Therapist',
                    'visible' => 1,
                ),
                280 => 
                array (
                    'id' => 282,
                    'name' => 'Nuclear Medicine Technologist',
                    'visible' => 1,
                ),
                281 => 
                array (
                    'id' => 283,
                    'name' => 'Sonographer',
                    'visible' => 1,
                ),
                282 => 
                array (
                    'id' => 284,
                    'name' => 'Environmental Health Officer',
                    'visible' => 1,
                ),
                283 => 
                array (
                    'id' => 285,
                    'name' => 'Occupational Health and Safety Advisor',
                    'visible' => 1,
                ),
                284 => 
                array (
                    'id' => 286,
                    'name' => 'Optometrist',
                    'visible' => 1,
                ),
                285 => 
                array (
                    'id' => 287,
                    'name' => 'Orthoptist',
                    'visible' => 1,
                ),
                286 => 
                array (
                    'id' => 288,
                    'name' => 'Hospital Pharmacist',
                    'visible' => 1,
                ),
                287 => 
                array (
                    'id' => 289,
                    'name' => 'Industrial Pharmacist',
                    'visible' => 1,
                ),
                288 => 
                array (
                    'id' => 290,
                    'name' => 'Retail Pharmacist',
                    'visible' => 1,
                ),
                289 => 
                array (
                    'id' => 291,
                    'name' => 'Health Promotion Officer',
                    'visible' => 1,
                ),
                290 => 
                array (
                    'id' => 292,
                    'name' => 'Orthotist or Prosthetist',
                    'visible' => 1,
                ),
                291 => 
                array (
                    'id' => 293,
                    'name' => 'Health Diagnostic and Promotion Prof. ',
                    'visible' => 1,
                ),
                292 => 
                array (
                    'id' => 294,
                    'name' => 'Chiropractor',
                    'visible' => 1,
                ),
                293 => 
                array (
                    'id' => 295,
                    'name' => 'Osteopath',
                    'visible' => 1,
                ),
                294 => 
                array (
                    'id' => 296,
                    'name' => 'Acupuncturist',
                    'visible' => 1,
                ),
                295 => 
                array (
                    'id' => 297,
                    'name' => 'Homoeopath',
                    'visible' => 1,
                ),
                296 => 
                array (
                    'id' => 298,
                    'name' => 'Naturopath',
                    'visible' => 1,
                ),
                297 => 
                array (
                    'id' => 299,
                    'name' => 'Traditional Chinese Medicine Prac.',
                    'visible' => 1,
                ),
                298 => 
                array (
                    'id' => 300,
                    'name' => 'Complementary Health Therapists nec',
                    'visible' => 1,
                ),
                299 => 
                array (
                    'id' => 301,
                    'name' => 'Dental Specialist',
                    'visible' => 1,
                ),
                300 => 
                array (
                    'id' => 302,
                    'name' => 'Dentist',
                    'visible' => 1,
                ),
                301 => 
                array (
                    'id' => 303,
                    'name' => 'Occupational Therapist',
                    'visible' => 1,
                ),
                302 => 
                array (
                    'id' => 304,
                    'name' => 'Physiotherapist',
                    'visible' => 1,
                ),
                303 => 
                array (
                    'id' => 305,
                    'name' => 'Podiatrist',
                    'visible' => 1,
                ),
                304 => 
                array (
                    'id' => 306,
                    'name' => 'Audiologist',
                    'visible' => 1,
                ),
                305 => 
                array (
                    'id' => 307,
                    'name' => 'Speech Pathologist',
                    'visible' => 1,
                ),
                306 => 
                array (
                    'id' => 308,
                    'name' => 'General Medical Practitioner',
                    'visible' => 1,
                ),
                307 => 
                array (
                    'id' => 309,
                    'name' => 'Resident Medical Officer ',
                    'visible' => 1,
                ),
                308 => 
                array (
                    'id' => 310,
                    'name' => 'Anaesthetist',
                    'visible' => 1,
                ),
                309 => 
                array (
                    'id' => 311,
                'name' => 'Specialist Physician (General Medicine)',
                    'visible' => 1,
                ),
                310 => 
                array (
                    'id' => 312,
                    'name' => 'Cardiologist',
                    'visible' => 1,
                ),
                311 => 
                array (
                    'id' => 313,
                    'name' => 'Clinical Haematologist',
                    'visible' => 1,
                ),
                312 => 
                array (
                    'id' => 314,
                    'name' => 'Medical Oncologist',
                    'visible' => 1,
                ),
                313 => 
                array (
                    'id' => 315,
                    'name' => 'Endocrinologist',
                    'visible' => 1,
                ),
                314 => 
                array (
                    'id' => 316,
                    'name' => 'Gastroenterologist',
                    'visible' => 1,
                ),
                315 => 
                array (
                    'id' => 317,
                    'name' => 'Intensive Care Specialist',
                    'visible' => 1,
                ),
                316 => 
                array (
                    'id' => 318,
                    'name' => 'Neurologist',
                    'visible' => 1,
                ),
                317 => 
                array (
                    'id' => 319,
                    'name' => 'Paediatrician',
                    'visible' => 1,
                ),
                318 => 
                array (
                    'id' => 320,
                    'name' => 'Renal Medicine Specialist',
                    'visible' => 1,
                ),
                319 => 
                array (
                    'id' => 321,
                    'name' => 'Rheumatologist',
                    'visible' => 1,
                ),
                320 => 
                array (
                    'id' => 322,
                    'name' => 'Thoracic Medicine Specialist',
                    'visible' => 1,
                ),
                321 => 
                array (
                    'id' => 323,
                    'name' => 'Specialist Physicians nec',
                    'visible' => 1,
                ),
                322 => 
                array (
                    'id' => 324,
                    'name' => 'Psychiatrist',
                    'visible' => 1,
                ),
                323 => 
                array (
                    'id' => 325,
                'name' => 'Surgeon (General)',
                    'visible' => 1,
                ),
                324 => 
                array (
                    'id' => 326,
                    'name' => 'Cardiothoracic Surgeon',
                    'visible' => 1,
                ),
                325 => 
                array (
                    'id' => 327,
                    'name' => 'Neurosurgeon',
                    'visible' => 1,
                ),
                326 => 
                array (
                    'id' => 328,
                    'name' => 'Orthopaedic Surgeon',
                    'visible' => 1,
                ),
                327 => 
                array (
                    'id' => 329,
                    'name' => 'Otorhinolaryngologist',
                    'visible' => 1,
                ),
                328 => 
                array (
                    'id' => 330,
                    'name' => 'Paediatric Surgeon',
                    'visible' => 1,
                ),
                329 => 
                array (
                    'id' => 331,
                    'name' => 'Plastic and Reconstructive Surgeon',
                    'visible' => 1,
                ),
                330 => 
                array (
                    'id' => 332,
                    'name' => 'Urologist',
                    'visible' => 1,
                ),
                331 => 
                array (
                    'id' => 333,
                    'name' => 'Vascular Surgeon',
                    'visible' => 1,
                ),
                332 => 
                array (
                    'id' => 334,
                    'name' => 'Dermatologist',
                    'visible' => 1,
                ),
                333 => 
                array (
                    'id' => 335,
                    'name' => 'Emergency Medicine Specialist',
                    'visible' => 1,
                ),
                334 => 
                array (
                    'id' => 336,
                    'name' => 'Obstetrician and Gynaecologist',
                    'visible' => 1,
                ),
                335 => 
                array (
                    'id' => 337,
                    'name' => 'Ophthalmologist',
                    'visible' => 1,
                ),
                336 => 
                array (
                    'id' => 338,
                    'name' => 'Pathologist',
                    'visible' => 1,
                ),
                337 => 
                array (
                    'id' => 339,
                    'name' => 'Diagnostic and Interventional Radiologist',
                    'visible' => 1,
                ),
                338 => 
                array (
                    'id' => 340,
                    'name' => 'Radiation Oncologist',
                    'visible' => 1,
                ),
                339 => 
                array (
                    'id' => 341,
                    'name' => 'Medical Practitioners nec',
                    'visible' => 1,
                ),
                340 => 
                array (
                    'id' => 342,
                    'name' => 'Midwife',
                    'visible' => 1,
                ),
                341 => 
                array (
                    'id' => 343,
                    'name' => 'Nurse Educator',
                    'visible' => 1,
                ),
                342 => 
                array (
                    'id' => 344,
                    'name' => 'Nurse Researcher',
                    'visible' => 1,
                ),
                343 => 
                array (
                    'id' => 345,
                    'name' => 'Nurse Manager',
                    'visible' => 1,
                ),
                344 => 
                array (
                    'id' => 346,
                    'name' => 'Nurse Practitioner',
                    'visible' => 1,
                ),
                345 => 
                array (
                    'id' => 347,
                'name' => 'Registered Nurse (Aged Care)',
                    'visible' => 1,
                ),
                346 => 
                array (
                    'id' => 348,
                'name' => 'Registered Nurse (Child and Family Health)',
                    'visible' => 1,
                ),
                347 => 
                array (
                    'id' => 349,
                'name' => 'Registered Nurse (Community Health)',
                    'visible' => 1,
                ),
                348 => 
                array (
                    'id' => 350,
                'name' => 'Registered Nurse (Critical Care and Emerg.)',
                    'visible' => 1,
                ),
                349 => 
                array (
                    'id' => 351,
                'name' => 'Registered Nurse (Development Disability)',
                    'visible' => 1,
                ),
                350 => 
                array (
                    'id' => 352,
                'name' => 'Registered Nurse (Disability and Rehab.)',
                    'visible' => 1,
                ),
                351 => 
                array (
                    'id' => 353,
                'name' => 'Registered Nurse (Medical)',
                    'visible' => 1,
                ),
                352 => 
                array (
                    'id' => 354,
                'name' => 'Registered Nurse (Medical Practice)',
                    'visible' => 1,
                ),
                353 => 
                array (
                    'id' => 355,
                'name' => 'Registered Nurse (Mental Health)',
                    'visible' => 1,
                ),
                354 => 
                array (
                    'id' => 356,
                'name' => 'Registered Nurse (Perioperative)',
                    'visible' => 1,
                ),
                355 => 
                array (
                    'id' => 357,
                'name' => 'Registered Nurse (Surgical)',
                    'visible' => 1,
                ),
                356 => 
                array (
                    'id' => 358,
                'name' => 'Registered Nurse (Paedriatric)',
                    'visible' => 1,
                ),
                357 => 
                array (
                    'id' => 359,
                    'name' => 'Registered Nurse nec',
                    'visible' => 1,
                ),
                358 => 
                array (
                    'id' => 360,
                    'name' => 'ICT Business Analyst',
                    'visible' => 1,
                ),
                359 => 
                array (
                    'id' => 361,
                    'name' => 'Systems Analyst',
                    'visible' => 1,
                ),
                360 => 
                array (
                    'id' => 362,
                    'name' => 'Multimedia Specialist',
                    'visible' => 1,
                ),
                361 => 
                array (
                    'id' => 363,
                    'name' => 'Web Developer',
                    'visible' => 1,
                ),
                362 => 
                array (
                    'id' => 364,
                    'name' => 'Analyst Programmer',
                    'visible' => 1,
                ),
                363 => 
                array (
                    'id' => 365,
                    'name' => 'Developer Programmer',
                    'visible' => 1,
                ),
                364 => 
                array (
                    'id' => 366,
                    'name' => 'Software Engineer',
                    'visible' => 1,
                ),
                365 => 
                array (
                    'id' => 367,
                    'name' => 'Software Tester',
                    'visible' => 1,
                ),
                366 => 
                array (
                    'id' => 368,
                    'name' => 'Software and Applications Prog. nec',
                    'visible' => 1,
                ),
                367 => 
                array (
                    'id' => 369,
                    'name' => 'Database Administrator',
                    'visible' => 1,
                ),
                368 => 
                array (
                    'id' => 370,
                    'name' => 'ICT Security Specialist',
                    'visible' => 1,
                ),
                369 => 
                array (
                    'id' => 371,
                    'name' => 'Systems Administrator',
                    'visible' => 1,
                ),
                370 => 
                array (
                    'id' => 372,
                    'name' => 'Computer Network and Systems Engineer',
                    'visible' => 1,
                ),
                371 => 
                array (
                    'id' => 373,
                    'name' => 'Network Administrator',
                    'visible' => 1,
                ),
                372 => 
                array (
                    'id' => 374,
                    'name' => 'Network Analyst',
                    'visible' => 1,
                ),
                373 => 
                array (
                    'id' => 375,
                    'name' => 'ICT Quality Assurance Engineer',
                    'visible' => 1,
                ),
                374 => 
                array (
                    'id' => 376,
                    'name' => 'ICT Support Engineer',
                    'visible' => 1,
                ),
                375 => 
                array (
                    'id' => 377,
                    'name' => 'ICT Systems Test Engineer',
                    'visible' => 1,
                ),
                376 => 
                array (
                    'id' => 378,
                    'name' => 'ICT Support and Test Engineers nec',
                    'visible' => 1,
                ),
                377 => 
                array (
                    'id' => 379,
                    'name' => 'Telecommunications Engineer',
                    'visible' => 1,
                ),
                378 => 
                array (
                    'id' => 380,
                    'name' => 'Telecommunications Network Engineer',
                    'visible' => 1,
                ),
                379 => 
                array (
                    'id' => 381,
                    'name' => 'Barrister',
                    'visible' => 1,
                ),
                380 => 
                array (
                    'id' => 382,
                    'name' => 'Judge',
                    'visible' => 1,
                ),
                381 => 
                array (
                    'id' => 383,
                    'name' => 'Magistrate',
                    'visible' => 1,
                ),
                382 => 
                array (
                    'id' => 384,
                    'name' => 'Tribunal Member',
                    'visible' => 1,
                ),
                383 => 
                array (
                    'id' => 385,
                    'name' => 'Intellectual Property Lawyer',
                    'visible' => 1,
                ),
                384 => 
                array (
                    'id' => 386,
                    'name' => 'Judicial and Other Legal Professionals nec',
                    'visible' => 1,
                ),
                385 => 
                array (
                    'id' => 387,
                    'name' => 'Solicitor',
                    'visible' => 1,
                ),
                386 => 
                array (
                    'id' => 388,
                    'name' => 'Careers Counsellor',
                    'visible' => 1,
                ),
                387 => 
                array (
                    'id' => 389,
                    'name' => 'Drug and Alcohol Counsellor',
                    'visible' => 1,
                ),
                388 => 
                array (
                    'id' => 390,
                    'name' => 'Family and Marriage Counsellor',
                    'visible' => 1,
                ),
                389 => 
                array (
                    'id' => 391,
                    'name' => 'Rehabilitation Counsellor',
                    'visible' => 1,
                ),
                390 => 
                array (
                    'id' => 392,
                    'name' => 'Student Counsellor',
                    'visible' => 1,
                ),
                391 => 
                array (
                    'id' => 393,
                    'name' => 'Counsellors nec',
                    'visible' => 1,
                ),
                392 => 
                array (
                    'id' => 394,
                    'name' => 'Minister of Religion',
                    'visible' => 1,
                ),
                393 => 
                array (
                    'id' => 395,
                    'name' => 'Clinical Psychologist',
                    'visible' => 1,
                ),
                394 => 
                array (
                    'id' => 396,
                    'name' => 'Educational Psychologist',
                    'visible' => 1,
                ),
                395 => 
                array (
                    'id' => 397,
                    'name' => 'Organisational Psychologist',
                    'visible' => 1,
                ),
                396 => 
                array (
                    'id' => 398,
                    'name' => 'Psychotherapist',
                    'visible' => 1,
                ),
                397 => 
                array (
                    'id' => 399,
                    'name' => 'Psychologists nec',
                    'visible' => 1,
                ),
                398 => 
                array (
                    'id' => 400,
                    'name' => 'Historian',
                    'visible' => 1,
                ),
                399 => 
                array (
                    'id' => 401,
                    'name' => 'Interpreter',
                    'visible' => 1,
                ),
                400 => 
                array (
                    'id' => 402,
                    'name' => 'Translator',
                    'visible' => 1,
                ),
                401 => 
                array (
                    'id' => 403,
                    'name' => 'Archaeologist',
                    'visible' => 1,
                ),
                402 => 
                array (
                    'id' => 404,
                    'name' => 'Social Professionals nec',
                    'visible' => 1,
                ),
                403 => 
                array (
                    'id' => 405,
                    'name' => 'Social Worker',
                    'visible' => 1,
                ),
                404 => 
                array (
                    'id' => 406,
                    'name' => 'Community Arts Worker',
                    'visible' => 1,
                ),
                405 => 
                array (
                    'id' => 407,
                    'name' => 'Recreation Officer',
                    'visible' => 1,
                ),
                406 => 
                array (
                    'id' => 408,
                    'name' => 'Welfare Worker',
                    'visible' => 1,
                ),
                407 => 
                array (
                    'id' => 409,
                    'name' => 'Agricultural Technician',
                    'visible' => 1,
                ),
                408 => 
                array (
                    'id' => 410,
                    'name' => 'Anaesthetic Technician',
                    'visible' => 1,
                ),
                409 => 
                array (
                    'id' => 411,
                    'name' => 'Cardiac Technician',
                    'visible' => 1,
                ),
                410 => 
                array (
                    'id' => 412,
                    'name' => 'Medical Laboratory Technician',
                    'visible' => 1,
                ),
                411 => 
                array (
                    'id' => 413,
                    'name' => 'Operating Theatre Technician',
                    'visible' => 1,
                ),
                412 => 
                array (
                    'id' => 414,
                    'name' => 'Pharmacy Technician',
                    'visible' => 1,
                ),
                413 => 
                array (
                    'id' => 415,
                    'name' => 'Pathology Collector  ',
                    'visible' => 1,
                ),
                414 => 
                array (
                    'id' => 416,
                    'name' => 'Medical Technicians nec',
                    'visible' => 1,
                ),
                415 => 
                array (
                    'id' => 417,
                    'name' => 'Fisheries Officer',
                    'visible' => 1,
                ),
                416 => 
                array (
                    'id' => 418,
                    'name' => 'Meat Inspector',
                    'visible' => 1,
                ),
                417 => 
                array (
                    'id' => 419,
                    'name' => 'Quarantine Officer',
                    'visible' => 1,
                ),
                418 => 
                array (
                    'id' => 420,
                    'name' => 'Primary Products Inspectors nec',
                    'visible' => 1,
                ),
                419 => 
                array (
                    'id' => 421,
                    'name' => 'Chemistry Technician',
                    'visible' => 1,
                ),
                420 => 
                array (
                    'id' => 422,
                    'name' => 'Earth Science Technician',
                    'visible' => 1,
                ),
                421 => 
                array (
                    'id' => 423,
                    'name' => 'Life Science Technician',
                    'visible' => 1,
                ),
                422 => 
                array (
                    'id' => 424,
                    'name' => 'School Laboratory Technician',
                    'visible' => 1,
                ),
                423 => 
                array (
                    'id' => 425,
                    'name' => 'Hydrographer',
                    'visible' => 1,
                ),
                424 => 
                array (
                    'id' => 426,
                    'name' => 'Science Technicians nec',
                    'visible' => 1,
                ),
                425 => 
                array (
                    'id' => 427,
                    'name' => 'Architectural Draftsperson',
                    'visible' => 1,
                ),
                426 => 
                array (
                    'id' => 428,
                    'name' => 'Building Associate',
                    'visible' => 1,
                ),
                427 => 
                array (
                    'id' => 429,
                    'name' => 'Building Inspector',
                    'visible' => 1,
                ),
                428 => 
                array (
                    'id' => 430,
                    'name' => 'Construction Estimator',
                    'visible' => 1,
                ),
                429 => 
                array (
                    'id' => 431,
                    'name' => 'Plumbing Inspector',
                    'visible' => 1,
                ),
                430 => 
                array (
                    'id' => 432,
                    'name' => 'Surveying or Spatial Science Technician',
                    'visible' => 1,
                ),
                431 => 
                array (
                    'id' => 433,
                    'name' => 'Arch., Building and Surv. Technicians nec',
                    'visible' => 1,
                ),
                432 => 
                array (
                    'id' => 434,
                    'name' => 'Civil Engineering Draftsperson',
                    'visible' => 1,
                ),
                433 => 
                array (
                    'id' => 435,
                    'name' => 'Civil Engineering Technician',
                    'visible' => 1,
                ),
                434 => 
                array (
                    'id' => 436,
                    'name' => 'Electrical Engineering Draftsperson',
                    'visible' => 1,
                ),
                435 => 
                array (
                    'id' => 437,
                    'name' => 'Electrical Engineering Technician',
                    'visible' => 1,
                ),
                436 => 
                array (
                    'id' => 438,
                    'name' => 'Electronic Engineering Draftsperson',
                    'visible' => 1,
                ),
                437 => 
                array (
                    'id' => 439,
                    'name' => 'Electronic Engineering Technician',
                    'visible' => 1,
                ),
                438 => 
                array (
                    'id' => 440,
                    'name' => 'Mechanical Engineering Draftsperson',
                    'visible' => 1,
                ),
                439 => 
                array (
                    'id' => 441,
                    'name' => 'Mechanical Engineering Technician',
                    'visible' => 1,
                ),
                440 => 
                array (
                    'id' => 442,
                    'name' => 'Safety Inspector',
                    'visible' => 1,
                ),
                441 => 
                array (
                    'id' => 443,
                    'name' => 'Maintenance Planner',
                    'visible' => 1,
                ),
                442 => 
                array (
                    'id' => 444,
                    'name' => 'Metallurgical or Materials Technician',
                    'visible' => 1,
                ),
                443 => 
                array (
                    'id' => 445,
                    'name' => 'Mine Deputy',
                    'visible' => 1,
                ),
                444 => 
                array (
                    'id' => 446,
                    'name' => 'Building and Engineering Technicians nec',
                    'visible' => 1,
                ),
                445 => 
                array (
                    'id' => 447,
                    'name' => 'Hardware Technician',
                    'visible' => 1,
                ),
                446 => 
                array (
                    'id' => 448,
                    'name' => 'ICT Customer Support Officer',
                    'visible' => 1,
                ),
                447 => 
                array (
                    'id' => 449,
                    'name' => 'Web Administrator',
                    'visible' => 1,
                ),
                448 => 
                array (
                    'id' => 450,
                    'name' => 'ICT Support Technicians nec',
                    'visible' => 1,
                ),
                449 => 
                array (
                    'id' => 451,
                    'name' => 'Radio Communications Technician',
                    'visible' => 1,
                ),
                450 => 
                array (
                    'id' => 452,
                    'name' => 'Telecommunications Field Engineer',
                    'visible' => 1,
                ),
                451 => 
                array (
                    'id' => 453,
                    'name' => 'Telecommunications Network Planner',
                    'visible' => 1,
                ),
                452 => 
                array (
                    'id' => 454,
                    'name' => 'Telecommunications Technical Officer ',
                    'visible' => 1,
                ),
                453 => 
                array (
                    'id' => 455,
                    'name' => 'Automotive Electrician',
                    'visible' => 1,
                ),
                454 => 
                array (
                    'id' => 456,
                'name' => 'Motor Mechanic (General)',
                    'visible' => 1,
                ),
                455 => 
                array (
                    'id' => 457,
                    'name' => 'Diesel Motor Mechanic',
                    'visible' => 1,
                ),
                456 => 
                array (
                    'id' => 458,
                    'name' => 'Motorcycle Mechanic',
                    'visible' => 1,
                ),
                457 => 
                array (
                    'id' => 459,
                    'name' => 'Small Engine Mechanic',
                    'visible' => 1,
                ),
                458 => 
                array (
                    'id' => 460,
                    'name' => 'Blacksmith',
                    'visible' => 1,
                ),
                459 => 
                array (
                    'id' => 461,
                    'name' => 'Electroplater',
                    'visible' => 1,
                ),
                460 => 
                array (
                    'id' => 462,
                    'name' => 'Farrier',
                    'visible' => 1,
                ),
                461 => 
                array (
                    'id' => 463,
                    'name' => 'Metal Casting Trades Worker',
                    'visible' => 1,
                ),
                462 => 
                array (
                    'id' => 464,
                    'name' => 'Metal Polisher',
                    'visible' => 1,
                ),
                463 => 
                array (
                    'id' => 465,
                    'name' => 'Sheetmetal Trades Worker',
                    'visible' => 1,
                ),
                464 => 
                array (
                    'id' => 466,
                    'name' => 'Metal Fabricator',
                    'visible' => 1,
                ),
                465 => 
                array (
                    'id' => 467,
                    'name' => 'Pressure Welder',
                    'visible' => 1,
                ),
                466 => 
                array (
                    'id' => 468,
                'name' => 'Welder (First Class)',
                    'visible' => 1,
                ),
                467 => 
                array (
                    'id' => 469,
                'name' => 'Aircraft Maintenance Engineer (Avionics)',
                    'visible' => 1,
                ),
                468 => 
                array (
                    'id' => 470,
                'name' => 'Aircraft Maintenance Engineer (Mech.)',
                    'visible' => 1,
                ),
                469 => 
                array (
                    'id' => 471,
                'name' => 'Aircraft Maintenance Engineer (Structures)',
                    'visible' => 1,
                ),
                470 => 
                array (
                    'id' => 472,
                'name' => 'Fitter (General)',
                    'visible' => 1,
                ),
                471 => 
                array (
                    'id' => 473,
                    'name' => 'Fitter and Turner',
                    'visible' => 1,
                ),
                472 => 
                array (
                    'id' => 474,
                    'name' => 'Fitter-Welder',
                    'visible' => 1,
                ),
                473 => 
                array (
                    'id' => 475,
                'name' => 'Metal Machinist (First Class)',
                    'visible' => 1,
                ),
                474 => 
                array (
                    'id' => 476,
                    'name' => 'Textile, Clothing and Footwear Mechanic',
                    'visible' => 1,
                ),
                475 => 
                array (
                    'id' => 477,
                    'name' => 'Metal Fitters and Machinists nec',
                    'visible' => 1,
                ),
                476 => 
                array (
                    'id' => 478,
                    'name' => 'Engraver',
                    'visible' => 1,
                ),
                477 => 
                array (
                    'id' => 479,
                    'name' => 'Gunsmith',
                    'visible' => 1,
                ),
                478 => 
                array (
                    'id' => 480,
                    'name' => 'Locksmith',
                    'visible' => 1,
                ),
                479 => 
                array (
                    'id' => 481,
                    'name' => 'Precision Instrument Maker and Repairer',
                    'visible' => 1,
                ),
                480 => 
                array (
                    'id' => 482,
                    'name' => 'Saw Maker and Repairer',
                    'visible' => 1,
                ),
                481 => 
                array (
                    'id' => 483,
                    'name' => 'Watch and Clock Maker and Repairer',
                    'visible' => 1,
                ),
                482 => 
                array (
                    'id' => 484,
                    'name' => 'Engineering Patternmaker',
                    'visible' => 1,
                ),
                483 => 
                array (
                    'id' => 485,
                    'name' => 'Toolmaker',
                    'visible' => 1,
                ),
                484 => 
                array (
                    'id' => 486,
                    'name' => 'Panel beater',
                    'visible' => 1,
                ),
                485 => 
                array (
                    'id' => 487,
                    'name' => 'Vehicle Body Builder',
                    'visible' => 1,
                ),
                486 => 
                array (
                    'id' => 488,
                    'name' => 'Vehicle Trimmer',
                    'visible' => 1,
                ),
                487 => 
                array (
                    'id' => 489,
                    'name' => 'Vehicle Painter',
                    'visible' => 1,
                ),
                488 => 
                array (
                    'id' => 490,
                    'name' => 'Bricklayer',
                    'visible' => 1,
                ),
                489 => 
                array (
                    'id' => 491,
                    'name' => 'Stonemason',
                    'visible' => 1,
                ),
                490 => 
                array (
                    'id' => 492,
                    'name' => 'Carpenter and Joiner',
                    'visible' => 1,
                ),
                491 => 
                array (
                    'id' => 493,
                    'name' => 'Carpenter ',
                    'visible' => 1,
                ),
                492 => 
                array (
                    'id' => 494,
                    'name' => 'Joiner',
                    'visible' => 1,
                ),
                493 => 
                array (
                    'id' => 495,
                    'name' => 'Floor Finisher',
                    'visible' => 1,
                ),
                494 => 
                array (
                    'id' => 496,
                    'name' => 'Painting trades workers',
                    'visible' => 1,
                ),
                495 => 
                array (
                    'id' => 497,
                    'name' => 'Glazier',
                    'visible' => 1,
                ),
                496 => 
                array (
                    'id' => 498,
                    'name' => 'Fibrous Plasterer',
                    'visible' => 1,
                ),
                497 => 
                array (
                    'id' => 499,
                    'name' => 'Solid Plasterer',
                    'visible' => 1,
                ),
                498 => 
                array (
                    'id' => 500,
                    'name' => 'Roof Tiler',
                    'visible' => 1,
                ),
                499 => 
                array (
                    'id' => 501,
                    'name' => 'Wall and Floor Tiler',
                    'visible' => 1,
                ),
            ));
        \DB::table('occupations')->insert(array (
            0 => 
            array (
                'id' => 502,
            'name' => 'Plumber (General)',
                'visible' => 1,
            ),
            1 => 
            array (
                'id' => 503,
                'name' => 'Airconditioning and Mech. Serv. Plumber',
                'visible' => 1,
            ),
            2 => 
            array (
                'id' => 504,
                'name' => 'Drainer ',
                'visible' => 1,
            ),
            3 => 
            array (
                'id' => 505,
                'name' => 'Gasfitter',
                'visible' => 1,
            ),
            4 => 
            array (
                'id' => 506,
                'name' => 'Roof plumber',
                'visible' => 1,
            ),
            5 => 
            array (
                'id' => 507,
            'name' => 'Electrician (General)',
                'visible' => 1,
            ),
            6 => 
            array (
                'id' => 508,
            'name' => 'Electrician (Special Class)',
                'visible' => 1,
            ),
            7 => 
            array (
                'id' => 509,
                'name' => 'Lift Mechanic',
                'visible' => 1,
            ),
            8 => 
            array (
                'id' => 510,
                'name' => 'Airconditioning and Refrigeration Mechanic',
                'visible' => 1,
            ),
            9 => 
            array (
                'id' => 511,
                'name' => 'Electrical Linesworker ',
                'visible' => 1,
            ),
            10 => 
            array (
                'id' => 512,
                'name' => 'Technical Cable Jointer',
                'visible' => 1,
            ),
            11 => 
            array (
                'id' => 513,
                'name' => 'Business Machine Mechanic',
                'visible' => 1,
            ),
            12 => 
            array (
                'id' => 514,
                'name' => 'Communications Operator',
                'visible' => 1,
            ),
            13 => 
            array (
                'id' => 515,
                'name' => 'Electronic Equipment Trades Worker',
                'visible' => 1,
            ),
            14 => 
            array (
                'id' => 516,
            'name' => 'Electronic Instrument Trades (General)',
                'visible' => 1,
            ),
            15 => 
            array (
                'id' => 517,
            'name' => 'Electronic Instr.Trades (Special Class)',
                'visible' => 1,
            ),
            16 => 
            array (
                'id' => 518,
            'name' => 'Cabler (Data and Telecommunications)',
                'visible' => 1,
            ),
            17 => 
            array (
                'id' => 519,
                'name' => 'Telecommunications Cable Jointer',
                'visible' => 1,
            ),
            18 => 
            array (
                'id' => 520,
                'name' => 'Telecommunications Linesworker',
                'visible' => 1,
            ),
            19 => 
            array (
                'id' => 521,
                'name' => 'Telecommunications Technician',
                'visible' => 1,
            ),
            20 => 
            array (
                'id' => 522,
                'name' => 'Baker',
                'visible' => 1,
            ),
            21 => 
            array (
                'id' => 523,
                'name' => 'Pastry cook',
                'visible' => 1,
            ),
            22 => 
            array (
                'id' => 524,
                'name' => 'Butcher or Smallgoods Maker',
                'visible' => 1,
            ),
            23 => 
            array (
                'id' => 525,
                'name' => 'Chef',
                'visible' => 1,
            ),
            24 => 
            array (
                'id' => 526,
                'name' => 'Cook',
                'visible' => 1,
            ),
            25 => 
            array (
                'id' => 527,
                'name' => 'Dog Handler or Trainer',
                'visible' => 1,
            ),
            26 => 
            array (
                'id' => 528,
                'name' => 'Horse Trainer',
                'visible' => 1,
            ),
            27 => 
            array (
                'id' => 529,
                'name' => 'Zookeeper',
                'visible' => 1,
            ),
            28 => 
            array (
                'id' => 530,
                'name' => 'Animal Attendants and Trainers nec',
                'visible' => 1,
            ),
            29 => 
            array (
                'id' => 531,
                'name' => 'Shearer',
                'visible' => 1,
            ),
            30 => 
            array (
                'id' => 532,
                'name' => 'Veterinary Nurse',
                'visible' => 1,
            ),
            31 => 
            array (
                'id' => 533,
                'name' => 'Florist',
                'visible' => 1,
            ),
            32 => 
            array (
                'id' => 534,
            'name' => 'Gardener (General)',
                'visible' => 1,
            ),
            33 => 
            array (
                'id' => 535,
                'name' => 'Arborist',
                'visible' => 1,
            ),
            34 => 
            array (
                'id' => 536,
                'name' => 'Landscape Gardener',
                'visible' => 1,
            ),
            35 => 
            array (
                'id' => 537,
                'name' => 'Green keeper',
                'visible' => 1,
            ),
            36 => 
            array (
                'id' => 538,
                'name' => 'Nurseryperson',
                'visible' => 1,
            ),
            37 => 
            array (
                'id' => 539,
                'name' => 'Hairdresser',
                'visible' => 1,
            ),
            38 => 
            array (
                'id' => 540,
                'name' => 'Print Finisher',
                'visible' => 1,
            ),
            39 => 
            array (
                'id' => 541,
                'name' => 'Screen Printer',
                'visible' => 1,
            ),
            40 => 
            array (
                'id' => 542,
                'name' => 'Graphic Pre-press Trades Worker',
                'visible' => 1,
            ),
            41 => 
            array (
                'id' => 543,
                'name' => 'Printing Machinist',
                'visible' => 1,
            ),
            42 => 
            array (
                'id' => 544,
                'name' => 'Small Offset Printer',
                'visible' => 1,
            ),
            43 => 
            array (
                'id' => 545,
                'name' => 'Canvas Goods Fabricator',
                'visible' => 1,
            ),
            44 => 
            array (
                'id' => 546,
                'name' => 'Leather Goods Maker',
                'visible' => 1,
            ),
            45 => 
            array (
                'id' => 547,
                'name' => 'Sail Maker',
                'visible' => 1,
            ),
            46 => 
            array (
                'id' => 548,
                'name' => 'Shoemaker',
                'visible' => 1,
            ),
            47 => 
            array (
                'id' => 549,
                'name' => 'Apparel Cutter',
                'visible' => 1,
            ),
            48 => 
            array (
                'id' => 550,
                'name' => 'Clothing Patternmaker',
                'visible' => 1,
            ),
            49 => 
            array (
                'id' => 551,
                'name' => 'Dressmaker or Tailor',
                'visible' => 1,
            ),
            50 => 
            array (
                'id' => 552,
                'name' => 'Clothing Trades Workers nec',
                'visible' => 1,
            ),
            51 => 
            array (
                'id' => 553,
                'name' => 'Upholsterer',
                'visible' => 1,
            ),
            52 => 
            array (
                'id' => 554,
                'name' => 'Cabinetmaker',
                'visible' => 1,
            ),
            53 => 
            array (
                'id' => 555,
                'name' => 'Furniture Finisher',
                'visible' => 1,
            ),
            54 => 
            array (
                'id' => 556,
                'name' => 'Picture Framer',
                'visible' => 1,
            ),
            55 => 
            array (
                'id' => 557,
                'name' => 'Wood Machinist',
                'visible' => 1,
            ),
            56 => 
            array (
                'id' => 558,
                'name' => 'Wood Turner',
                'visible' => 1,
            ),
            57 => 
            array (
                'id' => 559,
                'name' => 'Wood Machinists / Wood Trades Workers',
                'visible' => 1,
            ),
            58 => 
            array (
                'id' => 560,
                'name' => 'Boat Builder and Repairer',
                'visible' => 1,
            ),
            59 => 
            array (
                'id' => 561,
                'name' => 'Shipwright',
                'visible' => 1,
            ),
            60 => 
            array (
                'id' => 562,
                'name' => 'Chemical Plant Operator',
                'visible' => 1,
            ),
            61 => 
            array (
                'id' => 563,
                'name' => 'Gas or Petroleum Operator',
                'visible' => 1,
            ),
            62 => 
            array (
                'id' => 564,
                'name' => 'Power Generation Plant Operator',
                'visible' => 1,
            ),
            63 => 
            array (
                'id' => 565,
                'name' => 'Gallery or Museum Technician',
                'visible' => 1,
            ),
            64 => 
            array (
                'id' => 566,
                'name' => 'Library Technician',
                'visible' => 1,
            ),
            65 => 
            array (
                'id' => 567,
                'name' => 'Jeweller',
                'visible' => 1,
            ),
            66 => 
            array (
                'id' => 568,
                'name' => 'Broadcast Transmitter Operator',
                'visible' => 1,
            ),
            67 => 
            array (
                'id' => 569,
            'name' => 'Camera Operator (Film, TV or Video)',
                'visible' => 1,
            ),
            68 => 
            array (
                'id' => 570,
                'name' => 'Light Technician',
                'visible' => 1,
            ),
            69 => 
            array (
                'id' => 571,
                'name' => 'Make Up Artist',
                'visible' => 1,
            ),
            70 => 
            array (
                'id' => 572,
                'name' => 'Musical Instrument Maker or Repairer',
                'visible' => 1,
            ),
            71 => 
            array (
                'id' => 573,
                'name' => 'Sound Technician',
                'visible' => 1,
            ),
            72 => 
            array (
                'id' => 574,
                'name' => 'Television Equipment Operator',
                'visible' => 1,
            ),
            73 => 
            array (
                'id' => 575,
                'name' => 'Performing Arts Technicians nec',
                'visible' => 1,
            ),
            74 => 
            array (
                'id' => 576,
                'name' => 'Sign writer',
                'visible' => 1,
            ),
            75 => 
            array (
                'id' => 577,
                'name' => 'Diver',
                'visible' => 1,
            ),
            76 => 
            array (
                'id' => 578,
                'name' => 'Interior Decorator',
                'visible' => 1,
            ),
            77 => 
            array (
                'id' => 579,
                'name' => 'Optical Dispenser',
                'visible' => 1,
            ),
            78 => 
            array (
                'id' => 580,
                'name' => 'Optical Mechanic',
                'visible' => 1,
            ),
            79 => 
            array (
                'id' => 581,
                'name' => 'Plastics Technician',
                'visible' => 1,
            ),
            80 => 
            array (
                'id' => 582,
                'name' => 'Wool Classer',
                'visible' => 1,
            ),
            81 => 
            array (
                'id' => 583,
                'name' => 'Fire Protection Equipment Technician',
                'visible' => 1,
            ),
            82 => 
            array (
                'id' => 584,
                'name' => 'Technicians and Trades Workers nec',
                'visible' => 1,
            ),
            83 => 
            array (
                'id' => 585,
                'name' => 'Ambulance Officer',
                'visible' => 1,
            ),
            84 => 
            array (
                'id' => 586,
                'name' => 'Intensive Care Ambulance Paramedic',
                'visible' => 1,
            ),
            85 => 
            array (
                'id' => 587,
                'name' => 'Dental Hygienist',
                'visible' => 1,
            ),
            86 => 
            array (
                'id' => 588,
                'name' => 'Dental Prosthetist',
                'visible' => 1,
            ),
            87 => 
            array (
                'id' => 589,
                'name' => 'Dental Technician',
                'visible' => 1,
            ),
            88 => 
            array (
                'id' => 590,
                'name' => 'Dental Therapist',
                'visible' => 1,
            ),
            89 => 
            array (
                'id' => 591,
                'name' => 'Diversional Therapist',
                'visible' => 1,
            ),
            90 => 
            array (
                'id' => 592,
                'name' => 'Enrolled Nurse',
                'visible' => 1,
            ),
            91 => 
            array (
                'id' => 593,
                'name' => 'Mothercraft Nurse',
                'visible' => 1,
            ),
            92 => 
            array (
                'id' => 594,
                'name' => 'Aboriginal and T.S Islander Health Worker',
                'visible' => 1,
            ),
            93 => 
            array (
                'id' => 595,
                'name' => 'Massage Therapist',
                'visible' => 1,
            ),
            94 => 
            array (
                'id' => 596,
                'name' => 'Community Worker',
                'visible' => 1,
            ),
            95 => 
            array (
                'id' => 597,
                'name' => 'Disabilities Services Officer',
                'visible' => 1,
            ),
            96 => 
            array (
                'id' => 598,
                'name' => 'Family Support Worker',
                'visible' => 1,
            ),
            97 => 
            array (
                'id' => 599,
                'name' => 'Parole or Probation Officer',
                'visible' => 1,
            ),
            98 => 
            array (
                'id' => 600,
                'name' => 'Residential Care Officer',
                'visible' => 1,
            ),
            99 => 
            array (
                'id' => 601,
                'name' => 'Youth Worker',
                'visible' => 1,
            ),
            100 => 
            array (
                'id' => 602,
                'name' => 'Defence Force Member  Other Ranks',
                'visible' => 1,
            ),
            101 => 
            array (
                'id' => 603,
                'name' => 'Emergency Service Worker',
                'visible' => 1,
            ),
            102 => 
            array (
                'id' => 604,
                'name' => 'Fire Fighter',
                'visible' => 1,
            ),
            103 => 
            array (
                'id' => 605,
                'name' => 'Detective',
                'visible' => 1,
            ),
            104 => 
            array (
                'id' => 606,
                'name' => 'Police Officer',
                'visible' => 1,
            ),
            105 => 
            array (
                'id' => 607,
                'name' => 'Prison Officer',
                'visible' => 1,
            ),
            106 => 
            array (
                'id' => 608,
                'name' => 'Driving Instructor',
                'visible' => 1,
            ),
            107 => 
            array (
                'id' => 609,
                'name' => 'Funeral Director',
                'visible' => 1,
            ),
            108 => 
            array (
                'id' => 610,
                'name' => 'Funeral Workers nec',
                'visible' => 1,
            ),
            109 => 
            array (
                'id' => 611,
                'name' => 'Flight Attendant',
                'visible' => 1,
            ),
            110 => 
            array (
                'id' => 612,
                'name' => 'Travel Attendants nec',
                'visible' => 1,
            ),
            111 => 
            array (
                'id' => 613,
                'name' => 'First Aid Trainer',
                'visible' => 1,
            ),
            112 => 
            array (
                'id' => 614,
            'name' => 'Diving Instructor (Open Water)',
                'visible' => 1,
            ),
            113 => 
            array (
                'id' => 615,
                'name' => 'Gymnastics Coach or Instructor',
                'visible' => 1,
            ),
            114 => 
            array (
                'id' => 616,
                'name' => 'Horse Riding Coach or Instructor',
                'visible' => 1,
            ),
            115 => 
            array (
                'id' => 617,
                'name' => 'Snowsport Instructor',
                'visible' => 1,
            ),
            116 => 
            array (
                'id' => 618,
                'name' => 'Swimming Coach or Instructor',
                'visible' => 1,
            ),
            117 => 
            array (
                'id' => 619,
                'name' => 'Tennis Coach',
                'visible' => 1,
            ),
            118 => 
            array (
                'id' => 620,
                'name' => 'Other Sports Coach or Instructor',
                'visible' => 1,
            ),
            119 => 
            array (
                'id' => 621,
                'name' => 'Dog or Horse Racing Official',
                'visible' => 1,
            ),
            120 => 
            array (
                'id' => 622,
                'name' => 'Sports Development Officer',
                'visible' => 1,
            ),
            121 => 
            array (
                'id' => 623,
                'name' => 'Sports Umpire',
                'visible' => 1,
            ),
            122 => 
            array (
                'id' => 624,
                'name' => 'Other Sports Official',
                'visible' => 1,
            ),
            123 => 
            array (
                'id' => 625,
                'name' => 'Footballer',
                'visible' => 1,
            ),
            124 => 
            array (
                'id' => 626,
                'name' => 'Golfer',
                'visible' => 1,
            ),
            125 => 
            array (
                'id' => 627,
                'name' => 'Jockey',
                'visible' => 1,
            ),
            126 => 
            array (
                'id' => 628,
                'name' => 'Sportspersons nec',
                'visible' => 1,
            ),
            127 => 
            array (
                'id' => 629,
                'name' => 'Contract Administrator',
                'visible' => 1,
            ),
            128 => 
            array (
                'id' => 630,
                'name' => 'Program or Project Administrator',
                'visible' => 1,
            ),
            129 => 
            array (
                'id' => 631,
                'name' => 'Conveyancer',
                'visible' => 1,
            ),
            130 => 
            array (
                'id' => 632,
                'name' => 'Legal Executive',
                'visible' => 1,
            ),
            131 => 
            array (
                'id' => 633,
                'name' => 'Court Bailiff or Sheriff',
                'visible' => 1,
            ),
            132 => 
            array (
                'id' => 634,
                'name' => 'Insurance Investigator',
                'visible' => 1,
            ),
            133 => 
            array (
                'id' => 635,
                'name' => 'Insurance Loss Adjuster',
                'visible' => 1,
            ),
            134 => 
            array (
                'id' => 636,
                'name' => 'Insurance Risk Surveyor',
                'visible' => 1,
            ),
            135 => 
            array (
                'id' => 637,
                'name' => 'Clinical Coder',
                'visible' => 1,
            ),
            136 => 
            array (
                'id' => 638,
                'name' => 'Auctioneer',
                'visible' => 1,
            ),
            137 => 
            array (
                'id' => 639,
                'name' => 'Stock and Station Agent',
                'visible' => 1,
            ),
            138 => 
            array (
                'id' => 640,
                'name' => 'Insurance Agent',
                'visible' => 1,
            ),
            139 => 
            array (
                'id' => 641,
                'name' => 'Business Broker',
                'visible' => 1,
            ),
            140 => 
            array (
                'id' => 642,
                'name' => 'Property Manager',
                'visible' => 1,
            ),
            141 => 
            array (
                'id' => 643,
                'name' => 'Real Estate Agency Principal',
                'visible' => 1,
            ),
            142 => 
            array (
                'id' => 644,
                'name' => 'Real Estate Agent',
                'visible' => 1,
            ),
            143 => 
            array (
                'id' => 645,
                'name' => 'Real Estate Representative',
                'visible' => 1,
            ),
            144 => 
            array (
                'id' => 646,
                'name' => 'Retail Buyer',
                'visible' => 1,
            ),
            145 => 
            array (
                'id' => 647,
                'name' => 'Wool Buyer',
                'visible' => 1,
            ),
            146 => 
            array (
                'id' => 648,
                'name' => 'Driller',
                'visible' => 1,
            ),
        ));
        
        
    }
}
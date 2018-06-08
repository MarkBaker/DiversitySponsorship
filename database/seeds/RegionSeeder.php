<?php

use Illuminate\Database\Seeder;
use App\RegionType;

class RegionSeeder extends Seeder {

    public function run()
    {
        DB::table('regions')->delete();

        RegionType::create(['id' => 2, 'region_type_id' => 1, 'name' => 'Africa']);
        RegionType::create(['id' => 9', 'region_type_id' => 1, 'name' => 'Americas']);
        RegionType::create(['id' => 142', 'region_type_id' => 1, 'name' => 'Asia']);
        RegionType::create(['id' => 150', 'region_type_id' => 1, 'name' => 'Europe']);
        RegionType::create(['id' => 9', 'region_type_id' => 1, 'name' => 'Oceania']);

        RegionType::create(['id' => 34, 'region_type_id' => 2, 'parent_id' => 142, 'name' => 'Southern Asia']);
        RegionType::create(['id' => 154, 'region_type_id' => 2, 'parent_id' => 150, 'name' => 'Northern Europe']);
        RegionType::create(['id' => 39, 'region_type_id' => 2, 'parent_id' => 150, 'name' => 'Southern Europe']);
        RegionType::create(['id' => 15, 'region_type_id' => 2, 'parent_id' => 2, 'name' => 'Northern Africa']);
        RegionType::create(['id' => 61, 'region_type_id' => 2, 'parent_id' => 9, 'name' => 'Polynesia']);
        RegionType::create(['id' => 202, 'region_type_id' => 2, 'parent_id' => 2, 'name' => 'Sub-Saharan Africa']);
        RegionType::create(['id' => 419, 'region_type_id' => 2, 'parent_id' => 19, 'name' => 'Latin America and the Caribbean']);

        RegionType::create(['id' => 17, 'region_type_id' => 3, 'parent_id' => 202, 'name' => 'Middle Africa']);
        RegionType::create(['id' => 29, 'region_type_id' => 3, 'parent_id' => 419, 'name' => 'Caribbean']);
        RegionType::create(['id' => 5, 'region_type_id' => 3, 'parent_id' => 419, 'name' => 'South America']);
        RegionType::create(['id' => 13, 'region_type_id' => 3, 'parent_id' => 419, 'name' => 'Central America']);
        RegionType::create(['id' => 11, 'region_type_id' => 3, 'parent_id' => 202, 'name' => 'Western Africa']);

        RegionType::create(['id' => 4, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Afghanistan']);
        RegionType::create(['id' => 248, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Åland Islands']);
        RegionType::create(['id' => 8, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Albania']);
        RegionType::create(['id' => 12, 'region_type_id' => 4, 'parent_id' => 15, 'name' => 'Algeria']);
        RegionType::create(['id' => 16, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'American Samoa']);
        RegionType::create(['id' => 20, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Andorra']);
        RegionType::create(['id' => 24, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Angola']);
        RegionType::create(['id' => 660, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Anguilla']);
        RegionType::create(['id' => 28, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Antigua and Barbuda']);
        RegionType::create(['id' => 32, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Argentina']);
        RegionType::create(['id' => 51, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Armenia']);
        RegionType::create(['id' => 533, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Aruba']);
        RegionType::create(['id' => 36, 'region_type_id' => 4, 'parent_id' => 53, 'name' => 'Australia']);
        RegionType::create(['id' => 40, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Austria']);
        RegionType::create(['id' => 31, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Azerbaijan']);
        RegionType::create(['id' => 44, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Bahamas']);
        RegionType::create(['id' => 48, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Bahrain']);
        RegionType::create(['id' => 50, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Bangladesh']);
        RegionType::create(['id' => 52, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Barbados']);
        RegionType::create(['id' => 112, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Belarus']);
        RegionType::create(['id' => 56, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Belgium']);
        RegionType::create(['id' => 84, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'Belize']);
        RegionType::create(['id' => 204, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Benin']);
        RegionType::create(['id' => 60, 'region_type_id' => 4, 'parent_id' => 21, 'name' => 'Bermuda']);
        RegionType::create(['id' => 64, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Bhutan']);
        RegionType::create(['id' => 68, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Bolivia (Plurinational State of)']);
        RegionType::create(['id' => 535, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Bonaire, Sint Eustatius and Saba']);
        RegionType::create(['id' => 70, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Bosnia and Herzegovina']);
        RegionType::create(['id' => 72, 'region_type_id' => 4, 'parent_id' => 18, 'name' => 'Botswana']);
        RegionType::create(['id' => 74, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Bouvet Island']);
        RegionType::create(['id' => 76, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Brazil']);
        RegionType::create(['id' => 86, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'British Indian Ocean Territory']);
        RegionType::create(['id' => 96, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Brunei Darussalam']);
        RegionType::create(['id' => 100, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Bulgaria']);
        RegionType::create(['id' => 854, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Burkina Faso']);
        RegionType::create(['id' => 108, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Burundi']);
        RegionType::create(['id' => 132, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Cabo Verde']);
        RegionType::create(['id' => 116, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Cambodia']);
        RegionType::create(['id' => 120, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Cameroon']);
        RegionType::create(['id' => 124, 'region_type_id' => 4, 'parent_id' => 21, 'name' => 'Canada']);
        RegionType::create(['id' => 136, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Cayman Islands']);
        RegionType::create(['id' => 140, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Central African Republic']);
        RegionType::create(['id' => 148, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Chad']);
        RegionType::create(['id' => 152, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Chile']);
        RegionType::create(['id' => 156, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'China']);
        RegionType::create(['id' => 162, 'region_type_id' => 4, 'parent_id' => 53, 'name' => 'Christmas Island']);
        RegionType::create(['id' => 166, 'region_type_id' => 4, 'parent_id' => 53, 'name' => 'Cocos (Keeling) Islands']);
        RegionType::create(['id' => 170, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Colombia']);
        RegionType::create(['id' => 174, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Comoros']);
        RegionType::create(['id' => 178, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Congo']);
        RegionType::create(['id' => 180, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Congo (Democratic Republic of the)']);
        RegionType::create(['id' => 184, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Cook Islands']);
        RegionType::create(['id' => 188, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'Costa Rica']);
        RegionType::create(['id' => 384, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Côte d\'Ivoire']);
        RegionType::create(['id' => 191, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Croatia']);
        RegionType::create(['id' => 192, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Cuba']);
        RegionType::create(['id' => 531, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Curaçao']);
        RegionType::create(['id' => 196, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Cyprus']);
        RegionType::create(['id' => 203, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Czechia']);
        RegionType::create(['id' => 208, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Denmark']);
        RegionType::create(['id' => 262, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Djibouti']);
        RegionType::create(['id' => 212, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Dominica']);
        RegionType::create(['id' => 214, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Dominican Republic']);
        RegionType::create(['id' => 218, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Ecuador']);
        RegionType::create(['id' => 818, 'region_type_id' => 4, 'parent_id' => 15, 'name' => 'Egypt']);
        RegionType::create(['id' => 222, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'El Salvador']);
        RegionType::create(['id' => 226, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Equatorial Guinea']);
        RegionType::create(['id' => 232, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Eritrea']);
        RegionType::create(['id' => 233, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Estonia']);
        RegionType::create(['id' => 231, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Ethiopia']);
        RegionType::create(['id' => 238, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Falkland Islands (Malvinas)']);
        RegionType::create(['id' => 234, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Faroe Islands']);
        RegionType::create(['id' => 242, 'region_type_id' => 4, 'parent_id' => 54, 'name' => 'Fiji']);
        RegionType::create(['id' => 246, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Finland']);
        RegionType::create(['id' => 250, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'France']);
        RegionType::create(['id' => 254, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'French Guiana']);
        RegionType::create(['id' => 258, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'French Polynesia']);
        RegionType::create(['id' => 260, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'French Southern Territories']);
        RegionType::create(['id' => 266, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Gabon']);
        RegionType::create(['id' => 270, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Gambia']);
        RegionType::create(['id' => 268, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Georgia']);
        RegionType::create(['id' => 276, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Germany']);
        RegionType::create(['id' => 288, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Ghana']);
        RegionType::create(['id' => 292, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Gibraltar']);
        RegionType::create(['id' => 300, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Greece']);
        RegionType::create(['id' => 304, 'region_type_id' => 4, 'parent_id' => 21, 'name' => 'Greenland']);
        RegionType::create(['id' => 308, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Grenada']);
        RegionType::create(['id' => 312, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Guadeloupe']);
        RegionType::create(['id' => 316, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'Guam']);
        RegionType::create(['id' => 320, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'Guatemala']);
        RegionType::create(['id' => 831, 'region_type_id' => 4, 'parent_id' => 830, 'name' => 'Guernsey']);
        RegionType::create(['id' => 324, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Guinea']);
        RegionType::create(['id' => 624, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Guinea-Bissau']);
        RegionType::create(['id' => 328, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Guyana']);
        RegionType::create(['id' => 332, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Haiti']);
        RegionType::create(['id' => 334, 'region_type_id' => 4, 'parent_id' => 53, 'name' => 'Heard Island and McDonald Islands']);
        RegionType::create(['id' => 336, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Holy See']);
        RegionType::create(['id' => 340, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'Honduras']);
        RegionType::create(['id' => 344, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'Hong Kong']);
        RegionType::create(['id' => 348, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Hungary']);
        RegionType::create(['id' => 352, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Iceland']);
        RegionType::create(['id' => 356, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'India']);
        RegionType::create(['id' => 360, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Indonesia']);
        RegionType::create(['id' => 364, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Iran (Islamic Republic of)']);
        RegionType::create(['id' => 368, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Iraq']);
        RegionType::create(['id' => 372, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Ireland']);
        RegionType::create(['id' => 833, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Isle of Man']);
        RegionType::create(['id' => 376, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Israel']);
        RegionType::create(['id' => 380, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Italy']);
        RegionType::create(['id' => 388, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Jamaica']);
        RegionType::create(['id' => 392, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'Japan']);
        RegionType::create(['id' => 832, 'region_type_id' => 4, 'parent_id' => 830, 'name' => 'Jersey']);
        RegionType::create(['id' => 400, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Jordan']);
        RegionType::create(['id' => 398, 'region_type_id' => 4, 'parent_id' => 143, 'name' => 'Kazakhstan']);
        RegionType::create(['id' => 404, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Kenya']);
        RegionType::create(['id' => 296, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'Kiribati']);
        RegionType::create(['id' => 408, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'Korea (Democratic People\'s Republic of)']);
        RegionType::create(['id' => 410, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'Korea (Republic of)']);
        RegionType::create(['id' => 414, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Kuwait']);
        RegionType::create(['id' => 417, 'region_type_id' => 4, 'parent_id' => 143, 'name' => 'Kyrgyzstan']);
        RegionType::create(['id' => 418, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Lao People\'s Democratic Republic']);
        RegionType::create(['id' => 428, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Latvia']);
        RegionType::create(['id' => 422, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Lebanon']);
        RegionType::create(['id' => 426, 'region_type_id' => 4, 'parent_id' => 18, 'name' => 'Lesotho']);
        RegionType::create(['id' => 430, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Liberia']);
        RegionType::create(['id' => 434, 'region_type_id' => 4, 'parent_id' => 15, 'name' => 'Libya']);
        RegionType::create(['id' => 438, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Liechtenstein']);
        RegionType::create(['id' => 440, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Lithuania']);
        RegionType::create(['id' => 442, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Luxembourg']);
        RegionType::create(['id' => 446, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'Macao']);
        RegionType::create(['id' => 807, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Macedonia (the former Yugoslav Republic of)']);
        RegionType::create(['id' => 450, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Madagascar']);
        RegionType::create(['id' => 454, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Malawi']);
        RegionType::create(['id' => 458, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Malaysia']);
        RegionType::create(['id' => 462, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Maldives']);
        RegionType::create(['id' => 466, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Mali']);
        RegionType::create(['id' => 470, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Malta']);
        RegionType::create(['id' => 584, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'Marshall Islands']);
        RegionType::create(['id' => 474, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Martinique']);
        RegionType::create(['id' => 478, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Mauritania']);
        RegionType::create(['id' => 480, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Mauritius']);
        RegionType::create(['id' => 175, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Mayotte']);
        RegionType::create(['id' => 484, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'Mexico']);
        RegionType::create(['id' => 583, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'Micronesia (Federated States of)']);
        RegionType::create(['id' => 498, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Moldova (Republic of)']);
        RegionType::create(['id' => 492, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Monaco']);
        RegionType::create(['id' => 496, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'Mongolia']);
        RegionType::create(['id' => 499, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Montenegro']);
        RegionType::create(['id' => 500, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Montserrat']);
        RegionType::create(['id' => 504, 'region_type_id' => 4, 'parent_id' => 15, 'name' => 'Morocco']);
        RegionType::create(['id' => 508, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Mozambique']);
        RegionType::create(['id' => 104, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Myanmar']);
        RegionType::create(['id' => 516, 'region_type_id' => 4, 'parent_id' => 18, 'name' => 'Namibia']);
        RegionType::create(['id' => 520, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'Nauru']);
        RegionType::create(['id' => 524, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Nepal']);
        RegionType::create(['id' => 528, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Netherlands']);
        RegionType::create(['id' => 540, 'region_type_id' => 4, 'parent_id' => 54, 'name' => 'New Caledonia']);
        RegionType::create(['id' => 554, 'region_type_id' => 4, 'parent_id' => 53, 'name' => 'New Zealand']);
        RegionType::create(['id' => 558, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'Nicaragua']);
        RegionType::create(['id' => 562, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Niger']);
        RegionType::create(['id' => 566, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Nigeria']);
        RegionType::create(['id' => 570, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Niue']);
        RegionType::create(['id' => 574, 'region_type_id' => 4, 'parent_id' => 53, 'name' => 'Norfolk Island']);
        RegionType::create(['id' => 580, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'Northern Mariana Islands']);
        RegionType::create(['id' => 578, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Norway']);
        RegionType::create(['id' => 512, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Oman']);
        RegionType::create(['id' => 586, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Pakistan']);
        RegionType::create(['id' => 585, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'Palau']);
        RegionType::create(['id' => 275, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Palestine, State of']);
        RegionType::create(['id' => 591, 'region_type_id' => 4, 'parent_id' => 13, 'name' => 'Panama']);
        RegionType::create(['id' => 598, 'region_type_id' => 4, 'parent_id' => 54, 'name' => 'Papua New Guinea']);
        RegionType::create(['id' => 600, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Paraguay']);
        RegionType::create(['id' => 604, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Peru']);
        RegionType::create(['id' => 608, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Philippines']);
        RegionType::create(['id' => 612, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Pitcairn']);
        RegionType::create(['id' => 616, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Poland']);
        RegionType::create(['id' => 620, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Portugal']);
        RegionType::create(['id' => 630, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Puerto Rico']);
        RegionType::create(['id' => 634, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Qatar']);
        RegionType::create(['id' => 638, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Réunion']);
        RegionType::create(['id' => 642, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Romania']);
        RegionType::create(['id' => 643, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Russian Federation']);
        RegionType::create(['id' => 646, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Rwanda']);
        RegionType::create(['id' => 652, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Saint Barthélemy']);
        RegionType::create(['id' => 654, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Saint Helena, Ascension and Tristan da Cunha']);
        RegionType::create(['id' => 659, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Saint Kitts and Nevis']);
        RegionType::create(['id' => 662, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Saint Lucia']);
        RegionType::create(['id' => 663, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Saint Martin (French part)']);
        RegionType::create(['id' => 666, 'region_type_id' => 4, 'parent_id' => 21, 'name' => 'Saint Pierre and Miquelon']);
        RegionType::create(['id' => 670, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Saint Vincent and the Grenadines']);
        RegionType::create(['id' => 882, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Samoa']);
        RegionType::create(['id' => 674, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'San Marino']);
        RegionType::create(['id' => 678, 'region_type_id' => 4, 'parent_id' => 17, 'name' => 'Sao Tome and Principe']);
        RegionType::create(['id' => 682, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Saudi Arabia']);
        RegionType::create(['id' => 686, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Senegal']);
        RegionType::create(['id' => 688, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Serbia']);
        RegionType::create(['id' => 690, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Seychelles']);
        RegionType::create(['id' => 694, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Sierra Leone']);
        RegionType::create(['id' => 702, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Singapore']);
        RegionType::create(['id' => 534, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Sint Maarten (Dutch part)']);
        RegionType::create(['id' => 703, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Slovakia']);
        RegionType::create(['id' => 705, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Slovenia']);
        RegionType::create(['id' => 90, 'region_type_id' => 4, 'parent_id' => 54, 'name' => 'Solomon Islands']);
        RegionType::create(['id' => 706, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Somalia']);
        RegionType::create(['id' => 710, 'region_type_id' => 4, 'parent_id' => 18, 'name' => 'South Africa']);
        RegionType::create(['id' => 239, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'South Georgia and the South Sandwich Islands']);
        RegionType::create(['id' => 728, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'South Sudan']);
        RegionType::create(['id' => 724, 'region_type_id' => 4, 'parent_id' => 39, 'name' => 'Spain']);
        RegionType::create(['id' => 144, 'region_type_id' => 4, 'parent_id' => 34, 'name' => 'Sri Lanka']);
        RegionType::create(['id' => 729, 'region_type_id' => 4, 'parent_id' => 15, 'name' => 'Sudan']);
        RegionType::create(['id' => 740, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Suriname']);
        RegionType::create(['id' => 744, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Svalbard and Jan Mayen']);
        RegionType::create(['id' => 748, 'region_type_id' => 4, 'parent_id' => 18, 'name' => 'Swaziland']);
        RegionType::create(['id' => 752, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'Sweden']);
        RegionType::create(['id' => 756, 'region_type_id' => 4, 'parent_id' => 155, 'name' => 'Switzerland']);
        RegionType::create(['id' => 760, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Syrian Arab Republic']);
        RegionType::create(['id' => 158, 'region_type_id' => 4, 'parent_id' => 30, 'name' => 'Taiwan, Province of China']);
        RegionType::create(['id' => 762, 'region_type_id' => 4, 'parent_id' => 143, 'name' => 'Tajikistan']);
        RegionType::create(['id' => 834, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Tanzania, United Republic of']);
        RegionType::create(['id' => 764, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Thailand']);
        RegionType::create(['id' => 626, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Timor-Leste']);
        RegionType::create(['id' => 768, 'region_type_id' => 4, 'parent_id' => 11, 'name' => 'Togo']);
        RegionType::create(['id' => 772, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Tokelau']);
        RegionType::create(['id' => 776, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Tonga']);
        RegionType::create(['id' => 780, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Trinidad and Tobago']);
        RegionType::create(['id' => 788, 'region_type_id' => 4, 'parent_id' => 15, 'name' => 'Tunisia']);
        RegionType::create(['id' => 792, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Turkey']);
        RegionType::create(['id' => 795, 'region_type_id' => 4, 'parent_id' => 143, 'name' => 'Turkmenistan']);
        RegionType::create(['id' => 796, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Turks and Caicos Islands']);
        RegionType::create(['id' => 798, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Tuvalu']);
        RegionType::create(['id' => 800, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Uganda']);
        RegionType::create(['id' => 804, 'region_type_id' => 4, 'parent_id' => 151, 'name' => 'Ukraine']);
        RegionType::create(['id' => 784, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'United Arab Emirates']);
        RegionType::create(['id' => 826, 'region_type_id' => 4, 'parent_id' => 154, 'name' => 'United Kingdom of Great Britain and Northern Ireland']);
        RegionType::create(['id' => 840, 'region_type_id' => 4, 'parent_id' => 21, 'name' => 'United States of America']);
        RegionType::create(['id' => 581, 'region_type_id' => 4, 'parent_id' => 57, 'name' => 'United States Minor Outlying Islands']);
        RegionType::create(['id' => 858, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Uruguay']);
        RegionType::create(['id' => 860, 'region_type_id' => 4, 'parent_id' => 143, 'name' => 'Uzbekistan']);
        RegionType::create(['id' => 548, 'region_type_id' => 4, 'parent_id' => 54, 'name' => 'Vanuatu']);
        RegionType::create(['id' => 862, 'region_type_id' => 4, 'parent_id' => 5, 'name' => 'Venezuela (Bolivarian Republic of)']);
        RegionType::create(['id' => 704, 'region_type_id' => 4, 'parent_id' => 35, 'name' => 'Viet Nam']);
        RegionType::create(['id' => 92, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Virgin Islands (British)']);
        RegionType::create(['id' => 850, 'region_type_id' => 4, 'parent_id' => 29, 'name' => 'Virgin Islands (U.S.)']);
        RegionType::create(['id' => 876, 'region_type_id' => 4, 'parent_id' => 61, 'name' => 'Wallis and Futuna']);
        RegionType::create(['id' => 732, 'region_type_id' => 4, 'parent_id' => 15, 'name' => 'Western Sahara']);
        RegionType::create(['id' => 887, 'region_type_id' => 4, 'parent_id' => 145, 'name' => 'Yemen']);
        RegionType::create(['id' => 894, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Zambia']);
        RegionType::create(['id' => 716, 'region_type_id' => 4, 'parent_id' => 14, 'name' => 'Zimbabwe']);
    }
}

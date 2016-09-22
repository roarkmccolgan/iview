<?php

use Illuminate\Database\Seeder;

class languageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();
        $languages = [
            ['name' => 'English', 'abbreviation' => 'en', 'logo' => ''],
			['name' => 'Afar', 'abbreviation' => 'aa', 'logo' => ''],
			['name' => 'Abkhazian', 'abbreviation' => 'ab', 'logo' => ''],
			['name' => 'Afrikaans', 'abbreviation' => 'af', 'logo' => ''],
			['name' => 'Amharic', 'abbreviation' => 'am', 'logo' => ''],
			['name' => 'Arabic', 'abbreviation' => 'ar', 'logo' => ''],
			['name' => 'Assamese', 'abbreviation' => 'as', 'logo' => ''],
			['name' => 'Aymara', 'abbreviation' => 'ay', 'logo' => ''],
			['name' => 'Azerbaijani', 'abbreviation' => 'az', 'logo' => ''],
			['name' => 'Bashkir', 'abbreviation' => 'ba', 'logo' => ''],
			['name' => 'Belarusian', 'abbreviation' => 'be', 'logo' => ''],
			['name' => 'Bulgarian', 'abbreviation' => 'bg', 'logo' => ''],
			['name' => 'Bihari', 'abbreviation' => 'bh', 'logo' => ''],
			['name' => 'Bislama', 'abbreviation' => 'bi', 'logo' => ''],
			['name' => 'Bengali/Bangla', 'abbreviation' => 'bn', 'logo' => ''],
			['name' => 'Tibetan', 'abbreviation' => 'bo', 'logo' => ''],
			['name' => 'Breton', 'abbreviation' => 'br', 'logo' => ''],
			['name' => 'Catalan', 'abbreviation' => 'ca', 'logo' => ''],
			['name' => 'Corsican', 'abbreviation' => 'co', 'logo' => ''],
			['name' => 'Czech', 'abbreviation' => 'cs', 'logo' => ''],
			['name' => 'Welsh', 'abbreviation' => 'cy', 'logo' => ''],
			['name' => 'Danish', 'abbreviation' => 'da', 'logo' => ''],
			['name' => 'German', 'abbreviation' => 'de', 'logo' => ''],
			['name' => 'Bhutani', 'abbreviation' => 'dz', 'logo' => ''],
			['name' => 'Greek', 'abbreviation' => 'el', 'logo' => ''],
			['name' => 'Esperanto', 'abbreviation' => 'eo', 'logo' => ''],
			['name' => 'Spanish', 'abbreviation' => 'es', 'logo' => ''],
			['name' => 'Estonian', 'abbreviation' => 'et', 'logo' => ''],
			['name' => 'Basque', 'abbreviation' => 'eu', 'logo' => ''],
			['name' => 'Persian', 'abbreviation' => 'fa', 'logo' => ''],
			['name' => 'Finnish', 'abbreviation' => 'fi', 'logo' => ''],
			['name' => 'Fiji', 'abbreviation' => 'fj', 'logo' => ''],
			['name' => 'Faeroese', 'abbreviation' => 'fo', 'logo' => ''],
			['name' => 'French', 'abbreviation' => 'fr', 'logo' => ''],
			['name' => 'Frisian', 'abbreviation' => 'fy', 'logo' => ''],
			['name' => 'Irish', 'abbreviation' => 'ga', 'logo' => ''],
			['name' => 'Scots/Gaelic', 'abbreviation' => 'gd', 'logo' => ''],
			['name' => 'Galician', 'abbreviation' => 'gl', 'logo' => ''],
			['name' => 'Guarani', 'abbreviation' => 'gn', 'logo' => ''],
			['name' => 'Gujarati', 'abbreviation' => 'gu', 'logo' => ''],
			['name' => 'Hausa', 'abbreviation' => 'ha', 'logo' => ''],
			['name' => 'Hindi', 'abbreviation' => 'hi', 'logo' => ''],
			['name' => 'Croatian', 'abbreviation' => 'hr', 'logo' => ''],
			['name' => 'Hungarian', 'abbreviation' => 'hu', 'logo' => ''],
			['name' => 'Armenian', 'abbreviation' => 'hy', 'logo' => ''],
			['name' => 'Interlingua', 'abbreviation' => 'ia', 'logo' => ''],
			['name' => 'Interlingue', 'abbreviation' => 'ie', 'logo' => ''],
			['name' => 'Inupiak', 'abbreviation' => 'ik', 'logo' => ''],
			['name' => 'Indonesian', 'abbreviation' => 'in', 'logo' => ''],
			['name' => 'Icelandic', 'abbreviation' => 'is', 'logo' => ''],
			['name' => 'Italian', 'abbreviation' => 'it', 'logo' => ''],
			['name' => 'Hebrew', 'abbreviation' => 'iw', 'logo' => ''],
			['name' => 'Japanese', 'abbreviation' => 'ja', 'logo' => ''],
			['name' => 'Yiddish', 'abbreviation' => 'ji', 'logo' => ''],
			['name' => 'Javanese', 'abbreviation' => 'jw', 'logo' => ''],
			['name' => 'Georgian', 'abbreviation' => 'ka', 'logo' => ''],
			['name' => 'Kazakh', 'abbreviation' => 'kk', 'logo' => ''],
			['name' => 'Greenlandic', 'abbreviation' => 'kl', 'logo' => ''],
			['name' => 'Cambodian', 'abbreviation' => 'km', 'logo' => ''],
			['name' => 'Kannada', 'abbreviation' => 'kn', 'logo' => ''],
			['name' => 'Korean', 'abbreviation' => 'ko', 'logo' => ''],
			['name' => 'Kashmiri', 'abbreviation' => 'ks', 'logo' => ''],
			['name' => 'Kurdish', 'abbreviation' => 'ku', 'logo' => ''],
			['name' => 'Kirghiz', 'abbreviation' => 'ky', 'logo' => ''],
			['name' => 'Latin', 'abbreviation' => 'la', 'logo' => ''],
			['name' => 'Lingala', 'abbreviation' => 'ln', 'logo' => ''],
			['name' => 'Laothian', 'abbreviation' => 'lo', 'logo' => ''],
			['name' => 'Lithuanian', 'abbreviation' => 'lt', 'logo' => ''],
			['name' => 'Latvian/Lettish', 'abbreviation' => 'lv', 'logo' => ''],
			['name' => 'Malagasy', 'abbreviation' => 'mg', 'logo' => ''],
			['name' => 'Maori', 'abbreviation' => 'mi', 'logo' => ''],
			['name' => 'Macedonian', 'abbreviation' => 'mk', 'logo' => ''],
			['name' => 'Malayalam', 'abbreviation' => 'ml', 'logo' => ''],
			['name' => 'Mongolian', 'abbreviation' => 'mn', 'logo' => ''],
			['name' => 'Moldavian', 'abbreviation' => 'mo', 'logo' => ''],
			['name' => 'Marathi', 'abbreviation' => 'mr', 'logo' => ''],
			['name' => 'Malay', 'abbreviation' => 'ms', 'logo' => ''],
			['name' => 'Maltese', 'abbreviation' => 'mt', 'logo' => ''],
			['name' => 'Burmese', 'abbreviation' => 'my', 'logo' => ''],
			['name' => 'Nauru', 'abbreviation' => 'na', 'logo' => ''],
			['name' => 'Nepali', 'abbreviation' => 'ne', 'logo' => ''],
			['name' => 'Dutch', 'abbreviation' => 'nl', 'logo' => ''],
			['name' => 'Norwegian', 'abbreviation' => 'no', 'logo' => ''],
			['name' => 'Occitan', 'abbreviation' => 'oc', 'logo' => ''],
			['name' => '(Afan)/Oromoor/Oriya', 'abbreviation' => 'om', 'logo' => ''],
			['name' => 'Punjabi', 'abbreviation' => 'pa', 'logo' => ''],
			['name' => 'Polish', 'abbreviation' => 'pl', 'logo' => ''],
			['name' => 'Pashto/Pushto', 'abbreviation' => 'ps', 'logo' => ''],
			['name' => 'Portuguese', 'abbreviation' => 'pt', 'logo' => ''],
			['name' => 'Quechua', 'abbreviation' => 'qu', 'logo' => ''],
			['name' => 'Rhaeto-Romance', 'abbreviation' => 'rm', 'logo' => ''],
			['name' => 'Kirundi', 'abbreviation' => 'rn', 'logo' => ''],
			['name' => 'Romanian', 'abbreviation' => 'ro', 'logo' => ''],
			['name' => 'Russian', 'abbreviation' => 'ru', 'logo' => ''],
			['name' => 'Kinyarwanda', 'abbreviation' => 'rw', 'logo' => ''],
			['name' => 'Sanskrit', 'abbreviation' => 'sa', 'logo' => ''],
			['name' => 'Sindhi', 'abbreviation' => 'sd', 'logo' => ''],
			['name' => 'Sangro', 'abbreviation' => 'sg', 'logo' => ''],
			['name' => 'Serbo-Croatian', 'abbreviation' => 'sh', 'logo' => ''],
			['name' => 'Singhalese', 'abbreviation' => 'si', 'logo' => ''],
			['name' => 'Slovak', 'abbreviation' => 'sk', 'logo' => ''],
			['name' => 'Slovenian', 'abbreviation' => 'sl', 'logo' => ''],
			['name' => 'Samoan', 'abbreviation' => 'sm', 'logo' => ''],
			['name' => 'Shona', 'abbreviation' => 'sn', 'logo' => ''],
			['name' => 'Somali', 'abbreviation' => 'so', 'logo' => ''],
			['name' => 'Albanian', 'abbreviation' => 'sq', 'logo' => ''],
			['name' => 'Serbian', 'abbreviation' => 'sr', 'logo' => ''],
			['name' => 'Siswati', 'abbreviation' => 'ss', 'logo' => ''],
			['name' => 'Sesotho', 'abbreviation' => 'st', 'logo' => ''],
			['name' => 'Sundanese', 'abbreviation' => 'su', 'logo' => ''],
			['name' => 'Swedish', 'abbreviation' => 'sv', 'logo' => ''],
			['name' => 'Swahili', 'abbreviation' => 'sw', 'logo' => ''],
			['name' => 'Tamil', 'abbreviation' => 'ta', 'logo' => ''],
			['name' => 'Telugu', 'abbreviation' => 'te', 'logo' => ''],
			['name' => 'Tajik', 'abbreviation' => 'tg', 'logo' => ''],
			['name' => 'Thai', 'abbreviation' => 'th', 'logo' => ''],
			['name' => 'Tigrinya', 'abbreviation' => 'ti', 'logo' => ''],
			['name' => 'Turkmen', 'abbreviation' => 'tk', 'logo' => ''],
			['name' => 'Tagalog', 'abbreviation' => 'tl', 'logo' => ''],
			['name' => 'Setswana', 'abbreviation' => 'tn', 'logo' => ''],
			['name' => 'Tonga', 'abbreviation' => 'to', 'logo' => ''],
			['name' => 'Turkish', 'abbreviation' => 'tr', 'logo' => ''],
			['name' => 'Tsonga', 'abbreviation' => 'ts', 'logo' => ''],
			['name' => 'Tatar', 'abbreviation' => 'tt', 'logo' => ''],
			['name' => 'Twi', 'abbreviation' => 'tw', 'logo' => ''],
			['name' => 'Ukrainian', 'abbreviation' => 'uk', 'logo' => ''],
			['name' => 'Urdu', 'abbreviation' => 'ur', 'logo' => ''],
			['name' => 'Uzbek', 'abbreviation' => 'uz', 'logo' => ''],
			['name' => 'Vietnamese', 'abbreviation' => 'vi', 'logo' => ''],
			['name' => 'Volapuk', 'abbreviation' => 'vo', 'logo' => ''],
			['name' => 'Wolof', 'abbreviation' => 'wo', 'logo' => ''],
			['name' => 'Xhosa', 'abbreviation' => 'xh', 'logo' => ''],
			['name' => 'Yoruba', 'abbreviation' => 'yo', 'logo' => ''],
			['name' => 'Chinese', 'abbreviation' => 'zh', 'logo' => ''],
			['name' => 'Zulu', 'abbreviation' => 'zu', 'logo' => '']
        ];

        DB::table('languages')->insert($languages);
    }
}
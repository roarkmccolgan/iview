<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name' => 'English', 'abbreviation' => 'en'], //1
            ['name' => 'Afar', 'abbreviation' => 'aa'],
            ['name' => 'Abkhazian', 'abbreviation' => 'ab'],
            ['name' => 'Afrikaans', 'abbreviation' => 'af'],
            ['name' => 'Amharic', 'abbreviation' => 'am'],
            ['name' => 'Arabic', 'abbreviation' => 'ar'],
            ['name' => 'Assamese', 'abbreviation' => 'as'],
            ['name' => 'Aymara', 'abbreviation' => 'ay'],
            ['name' => 'Azerbaijani', 'abbreviation' => 'az'],
            ['name' => 'Bashkir', 'abbreviation' => 'ba'],
            ['name' => 'Belarusian', 'abbreviation' => 'be'],
            ['name' => 'Bulgarian', 'abbreviation' => 'bg'],
            ['name' => 'Bihari', 'abbreviation' => 'bh'],
            ['name' => 'Bislama', 'abbreviation' => 'bi'],
            ['name' => 'Bengali/Bangla', 'abbreviation' => 'bn'],
            ['name' => 'Tibetan', 'abbreviation' => 'bo'],
            ['name' => 'Breton', 'abbreviation' => 'br'],
            ['name' => 'Catalan', 'abbreviation' => 'ca'],
            ['name' => 'Corsican', 'abbreviation' => 'co'],
            ['name' => 'Czech', 'abbreviation' => 'cs'],
            ['name' => 'Welsh', 'abbreviation' => 'cy'],
            ['name' => 'Danish', 'abbreviation' => 'da'],
            ['name' => 'German', 'abbreviation' => 'de'], //23
            ['name' => 'Bhutani', 'abbreviation' => 'dz'],
            ['name' => 'Greek', 'abbreviation' => 'el'],
            ['name' => 'Esperanto', 'abbreviation' => 'eo'],
            ['name' => 'Spanish', 'abbreviation' => 'es'], //27
            ['name' => 'Estonian', 'abbreviation' => 'et'],
            ['name' => 'Basque', 'abbreviation' => 'eu'],
            ['name' => 'Persian', 'abbreviation' => 'fa'],
            ['name' => 'Finnish', 'abbreviation' => 'fi'],
            ['name' => 'Fiji', 'abbreviation' => 'fj'],
            ['name' => 'Faeroese', 'abbreviation' => 'fo'],
            ['name' => 'French', 'abbreviation' => 'fr'], // 34
            ['name' => 'Frisian', 'abbreviation' => 'fy'],
            ['name' => 'Irish', 'abbreviation' => 'ga'],
            ['name' => 'Scots/Gaelic', 'abbreviation' => 'gd'],
            ['name' => 'Galician', 'abbreviation' => 'gl'],
            ['name' => 'Guarani', 'abbreviation' => 'gn'],
            ['name' => 'Gujarati', 'abbreviation' => 'gu'],
            ['name' => 'Hausa', 'abbreviation' => 'ha'],
            ['name' => 'Hindi', 'abbreviation' => 'hi'],
            ['name' => 'Croatian', 'abbreviation' => 'hr'],
            ['name' => 'Hungarian', 'abbreviation' => 'hu'],
            ['name' => 'Armenian', 'abbreviation' => 'hy'],
            ['name' => 'Interlingua', 'abbreviation' => 'ia'],
            ['name' => 'Interlingue', 'abbreviation' => 'ie'],
            ['name' => 'Inupiak', 'abbreviation' => 'ik'],
            ['name' => 'Indonesian', 'abbreviation' => 'in'],
            ['name' => 'Icelandic', 'abbreviation' => 'is'],
            ['name' => 'Italian', 'abbreviation' => 'it'], //51
            ['name' => 'Hebrew', 'abbreviation' => 'iw'],
            ['name' => 'Japanese', 'abbreviation' => 'ja'],
            ['name' => 'Yiddish', 'abbreviation' => 'ji'],
            ['name' => 'Javanese', 'abbreviation' => 'jw'],
            ['name' => 'Georgian', 'abbreviation' => 'ka'],
            ['name' => 'Kazakh', 'abbreviation' => 'kk'],
            ['name' => 'Greenlandic', 'abbreviation' => 'kl'],
            ['name' => 'Cambodian', 'abbreviation' => 'km'],
            ['name' => 'Kannada', 'abbreviation' => 'kn'],
            ['name' => 'Korean', 'abbreviation' => 'ko'],
            ['name' => 'Kashmiri', 'abbreviation' => 'ks'],
            ['name' => 'Kurdish', 'abbreviation' => 'ku'],
            ['name' => 'Kirghiz', 'abbreviation' => 'ky'],
            ['name' => 'Latin', 'abbreviation' => 'la'],
            ['name' => 'Lingala', 'abbreviation' => 'ln'],
            ['name' => 'Laothian', 'abbreviation' => 'lo'],
            ['name' => 'Lithuanian', 'abbreviation' => 'lt'],
            ['name' => 'Latvian/Lettish', 'abbreviation' => 'lv'],
            ['name' => 'Malagasy', 'abbreviation' => 'mg'],
            ['name' => 'Maori', 'abbreviation' => 'mi'],
            ['name' => 'Macedonian', 'abbreviation' => 'mk'],
            ['name' => 'Malayalam', 'abbreviation' => 'ml'],
            ['name' => 'Mongolian', 'abbreviation' => 'mn'],
            ['name' => 'Moldavian', 'abbreviation' => 'mo'],
            ['name' => 'Marathi', 'abbreviation' => 'mr'],
            ['name' => 'Malay', 'abbreviation' => 'ms'],
            ['name' => 'Maltese', 'abbreviation' => 'mt'],
            ['name' => 'Burmese', 'abbreviation' => 'my'],
            ['name' => 'Nauru', 'abbreviation' => 'na'],
            ['name' => 'Nepali', 'abbreviation' => 'ne'],
            ['name' => 'Dutch', 'abbreviation' => 'nl'], //82
            ['name' => 'Norwegian', 'abbreviation' => 'no'],
            ['name' => 'Occitan', 'abbreviation' => 'oc'],
            ['name' => '(Afan)/Oromoor/Oriya', 'abbreviation' => 'om'],
            ['name' => 'Punjabi', 'abbreviation' => 'pa'],
            ['name' => 'Polish', 'abbreviation' => 'pl'],
            ['name' => 'Pashto/Pushto', 'abbreviation' => 'ps'],
            ['name' => 'Portuguese', 'abbreviation' => 'pt'], //89
            ['name' => 'Quechua', 'abbreviation' => 'qu'],
            ['name' => 'Rhaeto-Romance', 'abbreviation' => 'rm'],
            ['name' => 'Kirundi', 'abbreviation' => 'rn'],
            ['name' => 'Romanian', 'abbreviation' => 'ro'],
            ['name' => 'Russian', 'abbreviation' => 'ru'],
            ['name' => 'Kinyarwanda', 'abbreviation' => 'rw'],
            ['name' => 'Sanskrit', 'abbreviation' => 'sa'],
            ['name' => 'Sindhi', 'abbreviation' => 'sd'],
            ['name' => 'Sangro', 'abbreviation' => 'sg'],
            ['name' => 'Serbo-Croatian', 'abbreviation' => 'sh'],
            ['name' => 'Singhalese', 'abbreviation' => 'si'],
            ['name' => 'Slovak', 'abbreviation' => 'sk'],
            ['name' => 'Slovenian', 'abbreviation' => 'sl'],
            ['name' => 'Samoan', 'abbreviation' => 'sm'],
            ['name' => 'Shona', 'abbreviation' => 'sn'],
            ['name' => 'Somali', 'abbreviation' => 'so'],
            ['name' => 'Albanian', 'abbreviation' => 'sq'],
            ['name' => 'Serbian', 'abbreviation' => 'sr'],
            ['name' => 'Siswati', 'abbreviation' => 'ss'],
            ['name' => 'Sesotho', 'abbreviation' => 'st'],
            ['name' => 'Sundanese', 'abbreviation' => 'su'],
            ['name' => 'Swedish', 'abbreviation' => 'sv'], //111
            ['name' => 'Swahili', 'abbreviation' => 'sw'],
            ['name' => 'Tamil', 'abbreviation' => 'ta'],
            ['name' => 'Telugu', 'abbreviation' => 'te'],
            ['name' => 'Tajik', 'abbreviation' => 'tg'],
            ['name' => 'Thai', 'abbreviation' => 'th'],
            ['name' => 'Tigrinya', 'abbreviation' => 'ti'],
            ['name' => 'Turkmen', 'abbreviation' => 'tk'],
            ['name' => 'Tagalog', 'abbreviation' => 'tl'],
            ['name' => 'Setswana', 'abbreviation' => 'tn'],
            ['name' => 'Tonga', 'abbreviation' => 'to'],
            ['name' => 'Turkish', 'abbreviation' => 'tr'],
            ['name' => 'Tsonga', 'abbreviation' => 'ts'],
            ['name' => 'Tatar', 'abbreviation' => 'tt'],
            ['name' => 'Twi', 'abbreviation' => 'tw'],
            ['name' => 'Ukrainian', 'abbreviation' => 'uk'],
            ['name' => 'Urdu', 'abbreviation' => 'ur'],
            ['name' => 'Uzbek', 'abbreviation' => 'uz'],
            ['name' => 'Vietnamese', 'abbreviation' => 'vi'],
            ['name' => 'Volapuk', 'abbreviation' => 'vo'],
            ['name' => 'Wolof', 'abbreviation' => 'wo'],
            ['name' => 'Xhosa', 'abbreviation' => 'xh'],
            ['name' => 'Yoruba', 'abbreviation' => 'yo'],
            ['name' => 'Chinese', 'abbreviation' => 'zh'],
            ['name' => 'Zulu', 'abbreviation' => 'zu'],
        ];

        DB::table('languages')->insert($languages);
    }
}

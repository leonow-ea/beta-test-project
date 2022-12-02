<?php
namespace app\models;

class Model_News extends \app\core\Model
{
    public function get_data()
    {
        return array(

            array(
                'Year' => '2022',
                'Title' => 'Путин объявил...',
                'Description' => 'Путин объявил о мобилизации с детсадовского возраста'
            ),
            array(
                'Year' => '2021',
                'Title' => 'Я похудел на неделю, надо все лишь...',
                'Description' => 'Я похудел на неделю, надо все лишь перестать жрать'
            ),
            // todo
        );
    }
}

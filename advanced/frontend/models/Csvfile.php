<?php

namespace frontend\models;

use yii\base\Model;

class Csvfile extends Model
{
    public $file;
    public function rules()
    {
        return [
            // [
            //     ['file'],
            //     'types' => 'csv', 'maxSize' => 5242880, 'allowEmpty' => true, 'wrongType' => 'Only csv allowed.', 'tooLarge' => 'File too large! 5MB is the limit'
            // ],
            // 'extensions' => 'csv'
            [['file'], 'file', 'checkExtensionByMimeType' => false, 'skipOnEmpty' => false],
        ];
    }

    public function attributeLabels()
    {
        return [
            'file' => 'Upload CSV File'

        ];
    }
}

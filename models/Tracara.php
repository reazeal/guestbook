<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tr_acara".
 *
 * @property string $id
 * @property string $acara
 * @property string $tanggal
 * @property string $keluarga
 * @property string $tempat
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $created_by
 * @property string $updated_by
 * @property string $deleted_by
 */
class Tracara extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_acara';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acara','tanggal'], 'required'],
            [['tanggal', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['keluarga', 'tempat', 'created_by', 'updated_by', 'deleted_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           // 'id' => 'ID',
            'acara' => 'Acara',
            'tanggal' => 'Tanggal',
            'keluarga' => 'Keluarga',
            'tempat' => 'Tempat',
            /*
			'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'deleted_by' => 'Deleted By',
			*/
        ];
    }
}

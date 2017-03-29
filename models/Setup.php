<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "setup".
 *
 * @property string $id
 * @property string $nama
 * @property string $alamat
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $created_by
 * @property string $updated_by
 * @property string $deleted_by
 */
class Setup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama','alamat'], 'required'],
            [['alamat'], 'string'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['id', 'nama', 'created_by', 'updated_by', 'deleted_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           // 'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
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

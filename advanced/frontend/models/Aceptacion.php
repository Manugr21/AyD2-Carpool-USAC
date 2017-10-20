<?php

namespace app\models;

use Yii;
use frontend\models\Historia;

/**
 * This is the model class for table "aceptacion".
 *
 * @property integer $id_aceptacion
 * @property integer $id_historia
 * @property resource $descripcion
 * @property integer $hecho
 *
 * @property Historia $idHistoria
 */
class Aceptacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aceptacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_historia'], 'required'],
            [['id_historia', 'hecho'], 'integer'],
            [['descripcion'], 'string'],
            [['id_historia'], 'exist', 'skipOnError' => true, 'targetClass' => Historia::className(), 'targetAttribute' => ['id_historia' => 'id_historia']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_aceptacion' => 'Id Aceptacion',
            'id_historia' => 'Id Historia',
            'descripcion' => 'Descripcion',
            'hecho' => 'Hecho',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistoria()
    {
        return $this->hasOne(Historia::className(), ['id_historia' => 'id_historia']);
    }
}

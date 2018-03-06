<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PUNTO_ABORDAJE".
 *
 * @property integer $ID
 * @property string $LUGAR
 * @property string $DESCRIPCION
 *
 * @property PUNTOSVIAJE[] $pUNTOSVIAJEs
 */
class PUNTOABORDAJE extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PUNTO_ABORDAJE';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['LUGAR'], 'required'],
            [['LUGAR'], 'string', 'max' => 100],
            [['DESCRIPCION'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'LUGAR' => 'Lugar',
            'DESCRIPCION' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPUNTOSVIAJEs()
    {
        return $this->hasMany(PUNTOSVIAJE::className(), ['PUNTO_ABORDAJE_ID' => 'ID']);
    }
}

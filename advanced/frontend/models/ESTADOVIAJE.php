<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ESTADO_VIAJE".
 *
 * @property integer $ID
 * @property string $ESTADO
 *
 * @property VIAJE[] $vIAJEs
 */
class ESTADOVIAJE extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ESTADO_VIAJE';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESTADO'], 'required'],
            [['ESTADO'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ESTADO' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVIAJEs()
    {
        return $this->hasMany(VIAJE::className(), ['ESTADO_VIAJE_ID' => 'ID']);
    }
}

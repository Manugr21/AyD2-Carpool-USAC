<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ABORDAJE_PASAJERO".
 *
 * @property integer $ID
 * @property integer $USUARIO_ID
 * @property integer $PUNTOS_VIAJE_ID
 *
 * @property PUNTOSVIAJE $pUNTOSVIAJE
 * @property USUARIO $uSUARIO
 */
class ABORDAJEPASAJERO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ABORDAJE_PASAJERO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USUARIO_ID', 'PUNTOS_VIAJE_ID'], 'required'],
            [['USUARIO_ID', 'PUNTOS_VIAJE_ID'], 'integer'],
            [['PUNTOS_VIAJE_ID'], 'exist', 'skipOnError' => true, 'targetClass' => PUNTOSVIAJE::className(), 'targetAttribute' => ['PUNTOS_VIAJE_ID' => 'ID']],
            [['USUARIO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => USUARIO::className(), 'targetAttribute' => ['USUARIO_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'USUARIO_ID' => 'Pasajero',
            'PUNTOS_VIAJE_ID' => 'Puntos  Viaje  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPUNTOSVIAJE()
    {
        return $this->hasOne(PUNTOSVIAJE::className(), ['ID' => 'PUNTOS_VIAJE_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIO()
    {
        return $this->hasOne(USUARIO::className(), ['ID' => 'USUARIO_ID']);
    }
}

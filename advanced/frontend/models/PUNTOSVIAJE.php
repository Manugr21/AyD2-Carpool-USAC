<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PUNTOS_VIAJE".
 *
 * @property integer $ID
 * @property string $HORA
 * @property integer $VIAJE_ID
 * @property integer $PUNTO_ABORDAJE_ID
 *
 * @property ABORDAJEPASAJERO[] $aBORDAJEPASAJEROs
 * @property PUNTOABORDAJE $pUNTOABORDAJE
 * @property VIAJE $vIAJE
 */
class PUNTOSVIAJE extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PUNTOS_VIAJE';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HORA', 'VIAJE_ID', 'PUNTO_ABORDAJE_ID'], 'required'],
            [['HORA'], 'safe'],
            [['VIAJE_ID', 'PUNTO_ABORDAJE_ID'], 'integer'],
            [['PUNTO_ABORDAJE_ID'], 'exist', 'skipOnError' => true, 'targetClass' => PUNTOABORDAJE::className(), 'targetAttribute' => ['PUNTO_ABORDAJE_ID' => 'ID']],
            [['VIAJE_ID'], 'exist', 'skipOnError' => true, 'targetClass' => VIAJE::className(), 'targetAttribute' => ['VIAJE_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'HORA' => 'Hora estimada de llegada',
            'VIAJE_ID' => 'No. Viaje',
            'PUNTO_ABORDAJE_ID' => 'Punto de Abordaje',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getABORDAJEPASAJEROs()
    {
        return $this->hasMany(ABORDAJEPASAJERO::className(), ['PUNTOS_VIAJE_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPUNTOABORDAJE()
    {
        return $this->hasOne(PUNTOABORDAJE::className(), ['ID' => 'PUNTO_ABORDAJE_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVIAJE()
    {
        return $this->hasOne(VIAJE::className(), ['ID' => 'VIAJE_ID']);
    }
}

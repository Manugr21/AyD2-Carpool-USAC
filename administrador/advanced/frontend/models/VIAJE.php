<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "VIAJE".
 *
 * @property integer $ID
 * @property string $FECHA_HORA
 * @property integer $CANTIDAD_PASAJEROS
 * @property integer $ESTADO_VIAJE_ID
 * @property integer $USUARIO_ID
 *
 * @property PUNTOSVIAJE[] $pUNTOSVIAJEs
 * @property ESTADOVIAJE $eSTADOVIAJE
 * @property USUARIO $uSUARIO
 */
class VIAJE extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'VIAJE';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FECHA_HORA','CANTIDAD_PASAJEROS', 'ESTADO_VIAJE_ID', 'USUARIO_ID'], 'required'],
            [['FECHA_HORA'], 'safe'],
            [['CANTIDAD_PASAJEROS', 'ESTADO_VIAJE_ID', 'USUARIO_ID'], 'integer'],
            [['ESTADO_VIAJE_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ESTADOVIAJE::className(), 'targetAttribute' => ['ESTADO_VIAJE_ID' => 'ID']],
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
            'FECHA_HORA' => 'Fecha y Hora',
            'CANTIDAD_PASAJEROS' => 'Cantidad de pasajeros',
            'ESTADO_VIAJE_ID' => 'Estado',
            'USUARIO_ID' => 'Piloto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPUNTOSVIAJEs()
    {
        return $this->hasMany(PUNTOSVIAJE::className(), ['VIAJE_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getESTADOVIAJE()
    {
        return $this->hasOne(ESTADOVIAJE::className(), ['ID' => 'ESTADO_VIAJE_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIO()
    {
        return $this->hasOne(USUARIO::className(), ['ID' => 'USUARIO_ID']);
    }
}

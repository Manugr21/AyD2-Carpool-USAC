<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USUARIO".
 *
 * @property integer $ID
 * @property string $CUI
 * @property string $REGISTRO
 * @property string $NOMBRE
 * @property string $APELLIDO
 * @property string $PASSWORD
 * @property integer $TIPO_USUARIO_ID
 *
 * @property ABORDAJEPASAJERO[] $aBORDAJEPASAJEROs
 * @property TIPOUSUARIO $tIPOUSUARIO
 * @property VIAJE[] $vIAJEs
 */
class USUARIO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'USUARIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CUI', 'REGISTRO', 'NOMBRE', 'APELLIDO', 'PASSWORD', 'TIPO_USUARIO_ID'], 'required'],
            [['CUI', 'REGISTRO'], 'number'],
            [['TIPO_USUARIO_ID'], 'integer'],
            [['NOMBRE', 'APELLIDO'], 'string', 'max' => 45],
            [['PASSWORD'], 'string', 'max' => 100],
            [['TIPO_USUARIO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => TIPOUSUARIO::className(), 'targetAttribute' => ['TIPO_USUARIO_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'CUI' => 'Cui',
            'REGISTRO' => 'Registro',
            'NOMBRE' => 'Nombre',
            'APELLIDO' => 'Apellido',
            'PASSWORD' => 'Password',
            'TIPO_USUARIO_ID' => 'Tipo de usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getABORDAJEPASAJEROs()
    {
        return $this->hasMany(ABORDAJEPASAJERO::className(), ['USUARIO_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIPOUSUARIO()
    {
        return $this->hasOne(TIPOUSUARIO::className(), ['ID' => 'TIPO_USUARIO_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVIAJEs()
    {
        return $this->hasMany(VIAJE::className(), ['USUARIO_ID' => 'ID']);
    }

}

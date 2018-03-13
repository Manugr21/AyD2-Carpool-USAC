<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TIPO_USUARIO".
 *
 * @property integer $ID
 * @property string $TIPO
 *
 * @property USUARIO[] $uSUARIOs
 */
class TIPOUSUARIO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TIPO_USUARIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIPO'], 'required'],
            [['TIPO'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TIPO' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIOs()
    {
        return $this->hasMany(USUARIO::className(), ['TIPO_USUARIO_ID' => 'ID']);
    }
}

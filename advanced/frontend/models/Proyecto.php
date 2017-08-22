<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "proyecto".
 *
 * @property integer $id_proyecto
 * @property integer $id_empresa
 * @property string $nombre
 * @property string $fh_creacion
 * @property resource $descripcion
 *
 * @property Historia[] $historias
 * @property Empresa $idEmpresa
 */
class Proyecto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proyecto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_empresa', 'nombre'], 'required'],
            [['id_empresa'], 'integer'],
            [['fh_creacion'], 'safe'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 25],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['id_empresa' => 'id_empresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proyecto' => 'Id Proyecto',
            'id_empresa' => 'Id Empresa',
            'nombre' => 'Nombre',
            'fh_creacion' => 'Fecha Creacion',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorias()
    {
        return $this->hasMany(Historia::className(), ['id_proyecto' => 'id_proyecto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id_empresa' => 'id_empresa']);
    }
}

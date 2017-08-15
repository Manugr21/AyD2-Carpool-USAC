<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $id_empresa
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $NIT
 * @property string $fh_creacion
 * @property resource $descripcion
 *
 * @property Proyecto[] $proyectos
 * @property User[] $users
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['fh_creacion'], 'safe'],
            [['descripcion'], 'string'],
            [['nombre', 'direccion'], 'string', 'max' => 25],
            [['telefono', 'NIT'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_empresa' => 'Id Empresa',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'NIT' => 'Nit',
            'fh_creacion' => 'Fecha Creacion',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos()
    {
        return $this->hasMany(Proyecto::className(), ['id_empresa' => 'id_empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id_empresa' => 'id_empresa']);
    }
}

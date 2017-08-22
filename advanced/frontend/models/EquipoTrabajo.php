<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "equipo_trabajo".
 *
 * @property string $nombre
 * @property string $username
 * @property string $password
 * @property string $correo
 * @property string $telefono
 * @property string $scrum_master
 * @property resource $nota
 *
 * @property AsignacionSprint[] $asignacionSprints
 */
class EquipoTrabajo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo_trabajo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'username', 'password'], 'required'],
            [['nota'], 'string'],
            [['nombre', 'correo'], 'string', 'max' => 25],
            [['username', 'password', 'telefono'], 'string', 'max' => 15],
            [['scrum_master'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'username' => 'Username',
            'password' => 'Password',
            'correo' => 'Correo',
            'telefono' => 'Telefono',
            'scrum_master' => 'Scrum Master',
            'nota' => 'Nota',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignacionSprints()
    {
        return $this->hasMany(AsignacionSprint::className(), ['responsable' => 'username']);
    }
}

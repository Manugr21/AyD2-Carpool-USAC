<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sprint_backlog".
 *
 * @property integer $id_sprint
 * @property string $velocidad
 * @property string $fh_inicio
 * @property string $fh_fin
 * @property string $fh_creacion
 * @property string $definicion_hecho
 * @property string $nota
 *
 * @property AsignacionSprint[] $asignacionSprints
 * @property Historia[] $idHistorias
 */
class SprintBacklog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sprint_backlog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['velocidad', 'fh_inicio', 'fh_fin', 'fh_creacion'], 'required'],
            [['velocidad'], 'number'],
            [['fh_inicio', 'fh_fin', 'fh_creacion'], 'safe'],
            [['definicion_hecho', 'nota'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sprint' => 'Id Sprint',
            'velocidad' => 'Velocidad',
            'fh_inicio' => 'Fecha de Inicio',
            'fh_fin' => 'Fecha de Finalización',
            'fh_creacion' => 'Fecha de Creacion',
            'definicion_hecho' => 'Definicion de Hecho',
            'nota' => 'Nota',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignacionSprints()
    {
        return $this->hasMany(AsignacionSprint::className(), ['id_sprint' => 'id_sprint']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistorias()
    {
        return $this->hasMany(Historia::className(), ['id_historia' => 'id_historia'])->viaTable('asignacion_sprint', ['id_sprint' => 'id_sprint']);
    }
}

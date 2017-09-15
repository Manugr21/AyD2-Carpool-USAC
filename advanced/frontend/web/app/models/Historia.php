<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "historia".
 *
 * @property integer $id_historia
 * @property integer $id_proyecto
 * @property string $nombre
 * @property resource $descripcion
 * @property string $fh_creacion
 * @property integer $prioridad
 * @property integer $dificultad
 * @property string $avance
 *
 * @property Aceptacion[] $aceptacions
 * @property AsignacionSprint[] $asignacionSprints
 * @property SprintBacklog[] $idSprints
 * @property Proyecto $idProyecto
 * @property Notas[] $notas
 */
class Historia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_proyecto', 'nombre'], 'required'],
            [['id_proyecto', 'prioridad', 'dificultad'], 'integer'],
            [['descripcion'], 'string'],
            [['fh_creacion'], 'safe'],
            [['avance'], 'number'],
            [['nombre'], 'string', 'max' => 25],
            [['id_proyecto'], 'exist', 'skipOnError' => true, 'targetClass' => Proyecto::className(), 'targetAttribute' => ['id_proyecto' => 'id_proyecto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_historia' => 'Id Historia',
            'id_proyecto' => 'Id Proyecto',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fh_creacion' => 'Fecha Creacion',
            'prioridad' => 'Prioridad',
            'dificultad' => 'Dificultad',
            'avance' => 'Avance',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAceptacions()
    {
        return $this->hasMany(Aceptacion::className(), ['id_historia' => 'id_historia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignacionSprints()
    {
        return $this->hasMany(AsignacionSprint::className(), ['id_historia' => 'id_historia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSprints()
    {
        return $this->hasMany(SprintBacklog::className(), ['id_sprint' => 'id_sprint'])->viaTable('asignacion_sprint', ['id_historia' => 'id_historia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProyecto()
    {
        return $this->hasOne(Proyecto::className(), ['id_proyecto' => 'id_proyecto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotas()
    {
        return $this->hasMany(Notas::className(), ['id_historia' => 'id_historia']);
    }
}

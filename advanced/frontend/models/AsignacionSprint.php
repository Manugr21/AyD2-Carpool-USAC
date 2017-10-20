<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "asignacion_sprint".
 *
 * @property integer $id_sprint
 * @property integer $id_historia
 * @property string $responsable
 *
 * @property SprintBacklog $idSprint
 * @property Historia $idHistoria
 * @property EquipoTrabajo $responsable0
 */
class AsignacionSprint extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asignacion_sprint';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sprint', 'id_historia', 'responsable'], 'required'],
            [['id_sprint', 'id_historia'], 'integer'],
            [['responsable'], 'string', 'max' => 15],
            [['id_sprint'], 'exist', 'skipOnError' => true, 'targetClass' => SprintBacklog::className(), 'targetAttribute' => ['id_sprint' => 'id_sprint']],
            [['id_historia'], 'exist', 'skipOnError' => true, 'targetClass' => Historia::className(), 'targetAttribute' => ['id_historia' => 'id_historia']],
            [['responsable'], 'exist', 'skipOnError' => true, 'targetClass' => EquipoTrabajo::className(), 'targetAttribute' => ['responsable' => 'username']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sprint' => 'Id Sprint',
            'id_historia' => 'Id Historia',
            'responsable' => 'Responsable',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSprint()
    {
        return $this->hasOne(SprintBacklog::className(), ['id_sprint' => 'id_sprint']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistoria()
    {
        return $this->hasOne(Historia::className(), ['id_historia' => 'id_historia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsable0()
    {
        return $this->hasOne(EquipoTrabajo::className(), ['username' => 'responsable']);
    }

    public function enough_space($id_sprint, $id_historia){
        $sql = "SELECT velocidad FROM sprint_backlog WHERE id_sprint = ".$id_sprint;
        $velocidad = intval(Yii::$app->db->createCommand($sql)->queryScalar());

        $sql = "SELECT SUM(dificultad) FROM historia h, asignacion_sprint a WHERE h.id_historia = a.id_historia and a.id_sprint = ".$id_sprint;
        $asignado = intval(Yii::$app->db->createCommand($sql)->queryScalar());

        $sql = "SELECT dificultad FROM historia WHERE id_historia = ".$id_historia;
        $duracion = intval(Yii::$app->db->createCommand($sql)->queryScalar());

        //file_put_contents("/tmp/prueba.txt","velocidad: ".$velocidad.", asignado: ".$asignado.", duracion: ".$duracion."\n");
        if($velocidad >= $asignado + $duracion){
            return true;
        }else{
            return false;
        }
    }
}

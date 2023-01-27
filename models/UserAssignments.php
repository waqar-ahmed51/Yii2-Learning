<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_assignments".
 *
 * @property int $id
 * @property int $type
 * @property int $feature_id
 * @property int|null $user_id
 * @property int|null $build_id
 * @property string|null $deadline_ts
 * @property int|null $assigner_id
 * @property string $creation_ts
 * @property int|null $status
 */
class UserAssignments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_assignments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'feature_id', 'user_id', 'build_id', 'assigner_id', 'status'], 'integer'],
            [['deadline_ts', 'creation_ts'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'feature_id' => 'Feature ID',
            'user_id' => 'User ID',
            'build_id' => 'Build ID',
            'deadline_ts' => 'Deadline Ts',
            'assigner_id' => 'Assigner ID',
            'creation_ts' => 'Creation Ts',
            'status' => 'Status',
        ];
    }
}

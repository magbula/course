<?php

namespace kouosl\course\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $isim
 * @property string $baslangic
 * @property string $bitis
 *
 * @property CourseContent[] $courseContents
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isim', 'baslangic', 'bitis'], 'required'],
            [['isim', 'baslangic', 'bitis'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'baslangic' => 'Baslangic',
            'bitis' => 'Bitis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseContents()
    {
        return $this->hasMany(CourseContent::className(), ['courseId' => 'id']);
    }
}

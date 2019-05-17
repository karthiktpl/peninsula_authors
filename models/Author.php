<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%authors}}".
 *
 * @property int $id
 * @property string $name
 * @property string $name_arabic
 * @property string $bio
 * @property string $position
 * @property string $avatar
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%authors}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','position','bio'], 'required'],
            [['name', 'name_arabic', 'position'], 'string', 'max' => 200],
            [['bio'], 'string', 'max' => 2000],
            //[['avatar'], 'string', 'max' => 250],
            [['avatar'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
 
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'name_arabic' => Yii::t('app', 'Name Arabic'),
            'position' => Yii::t('app', 'Position'),
            'avatar' => Yii::t('app', 'Avatar'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AuthorsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AuthorsQuery(get_called_class());
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->avatar->saveAs('uploads/' . $this->avatar->baseName . '.' . $this->avatar->extension);
            return true;
        } else {
            return false;
        }
    }  
}

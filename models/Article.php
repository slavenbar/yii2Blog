<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $image
 * @property string|null $date
 * @property int|null $user_id
 */
class Article extends \yii\db\ActiveRecord
{
    public array $links = [
            '&page=1&per-page=1',
            '&page=2&per-page=1',
            '&page=3&per-page=1',
            '&page=4&per-page=1',
            '&page=5&per-page=1',
            '&page=6&per-page=1'
        ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['user_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
            'date' => 'Date',
            'user_id' => 'User ID',
        ];
    }

    public function retLink() {

        $links = [
                '&page=1&per-page=1',
                '&page=2&per-page=1',
                '&page=3&per-page=1',
                '&page=4&per-page=1',
                '&page=5&per-page=1',
                '&page=6&per-page=1'
            ];
        foreach($links as $link) {
            if('user_id'===1) {
                echo $link=$links[0];
            }
            if('user_id'==='2') {
                echo $link=$links[1];
            }
            if('user_id'===3) {
                echo $link=$links[2];
            }
            if('user_id'===4) {
                echo $link=$links[3];
            }else{
                echo $link=$links[4];
            }

            
        }
    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : 'no-image.png';
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }
}

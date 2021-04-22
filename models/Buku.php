<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id_buku
 * @property string $judul_buku
 * @property string $kategori_buku
 * @property string $penulis
 * @property string $gambar
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_buku', 'judul_buku', 'kategori_buku', 'penulis'], 'required'],
            [['id_buku'], 'integer'],
            [['judul_buku', 'kategori_buku', 'penulis'], 'string', 'max' => 100],
            [['gambar'], 'file', 'extensions' => 'jpg,png'],
            [['id_buku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_buku' => 'Id Buku',
            'judul_buku' => 'Judul Buku',
            'kategori_buku' => 'Kategori Buku',
            'penulis' => 'Penulis',
        ];
    }
}

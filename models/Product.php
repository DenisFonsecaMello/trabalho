<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $model
 * @property integer $quantity
 * @property string $image
 * @property integer $shipping
 * @property string $price
 * @property string $date_available
 * @property string $weight
 * @property string $length
 * @property string $width
 * @property string $height
 * @property integer $sort_order
 * @property integer $status
 * @property integer $viewed
 * @property string $date_added
 * @property string $date_modified
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'date_added', 'date_modified'], 'required'],
            [['quantity', 'shipping', 'sort_order', 'status', 'viewed'], 'integer'],
            [['price', 'weight', 'length', 'width', 'height'], 'number'],
            [['date_available', 'date_added', 'date_modified'], 'safe'],
            [['model'], 'string', 'max' => 64],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Modelo',
            'quantity' => 'Quantidade',
            'image' => 'Imagem',
            'shipping' => 'Remessa',
            'price' => 'Preço',
            'date_available' => 'Data de Avaliação',
            'weight' => 'Peso',
            'length' => 'Comprimento',
            'width' => 'Largura',
            'height' => 'Altura',
            'sort_order' => 'Ordem de Classificação',
            'status' => 'Status',
            'viewed' => 'Visto',
            'date_added' => 'Data Adicionado',
            'date_modified' => 'Data de Modificação',
        ];
    }
}

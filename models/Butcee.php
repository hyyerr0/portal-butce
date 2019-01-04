<?php

namespace kouosl\butce\models;

use Yii;

/**
 * This is the model class for table "butcee".
 *
 * @property int $butcee_id
 * @property string $butcee_companyname
 * @property int $butcee_income
 * @property int $butcee_expense
 */
class Butcee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'butcee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['butcee_companyname', 'butcee_income', 'butcee_expense'], 'required'],
            [['butcee_income', 'butcee_expense'], 'integer'],
            [['butcee_companyname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'butcee_id' => 'Butcee ID',
            'butcee_companyname' => 'Butcee Companyname',
            'butcee_income' => 'Butcee Income',
            'butcee_expense' => 'Butcee Expense',
        ];
    }
}

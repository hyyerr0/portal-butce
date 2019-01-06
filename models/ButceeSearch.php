<?php

namespace kouosl\butce\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\butce\models\Butcee;

/**
 * ButceeSearch represents the model behind the search form of `backend\models\Butcee`.
 */
class ButceeSearch extends Butcee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['butcee_id', 'butcee_income', 'butcee_expense'], 'integer'],
            [['butcee_companyname'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Butcee::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'butcee_id' => $this->butcee_id,
            'butcee_income' => $this->butcee_income,
            'butcee_expense' => $this->butcee_expense,
        ]);

        $query->andFilterWhere(['like', 'butcee_companyname', $this->butcee_companyname]);

        return $dataProvider;
    }
}

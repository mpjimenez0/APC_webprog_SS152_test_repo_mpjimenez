<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trivias;

/**
 * TriviasSearch represents the model behind the search form about `app\models\Trivias`.
 */
class TriviasSearch extends Trivias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['triv_num'], 'integer'],
            [['triv_q', 'triv_ans'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Trivias::find();

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
            'triv_num' => $this->triv_num,
        ]);

        $query->andFilterWhere(['like', 'triv_q', $this->triv_q])
            ->andFilterWhere(['like', 'triv_ans', $this->triv_ans]);

        return $dataProvider;
    }
}

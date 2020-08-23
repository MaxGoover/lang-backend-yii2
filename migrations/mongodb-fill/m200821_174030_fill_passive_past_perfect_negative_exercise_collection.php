<?php

use app\models\grammar\exercise\Exercise;
use MongoDB\BSON\ObjectId;
use yii\mongodb\Migration;

class m200821_174030_fill_passive_past_perfect_negative_exercise_collection extends Migration
{
    private array $_sentences = [
        '?',
        '?',
        '?',
        '?',
        '?',
    ];

    public function up()
    {
        $translations = [
            ['?'],
            ['?'],
            ['?'],
            ['?'],
            ['?'],
        ];

        foreach ($this->_sentences as $key => $sentence) {
            $model = Exercise::create(
                new ObjectId(),
                0,
                8,
                2,
                false,
                $sentence,
                $translations[$key],
                true
            );
            $model->save();
        }
    }

    public function down()
    {
        Exercise::deleteAll([
            'in',
            'sentence',
            $this->_sentences
        ]);
    }
}

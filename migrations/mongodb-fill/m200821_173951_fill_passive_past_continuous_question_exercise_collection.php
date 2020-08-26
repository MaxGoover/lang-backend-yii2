<?php

use app\models\grammar\exercise\Exercise;
use MongoDB\BSON\ObjectId;
use yii\mongodb\Migration;

class m200821_173951_fill_passive_past_continuous_question_exercise_collection extends Migration
{
    private array $_sentences = [
        'Что обсуждалось, когда ты заметил их?',
        'В чём их обвиняли, когда ты находился там?',
        '?',
        '?',
        '?',
    ]; // L237 130.

    public function up()
    {
        $translations = [
            ['What was being discussed when you noticed them?'],
            ['What were they being accused of when you were staying there?'],
            ['?'],
            ['?'],
            ['?'],
        ];

        foreach ($this->_sentences as $key => $sentence) {
            $model = Exercise::create(
                new ObjectId(),
                0,
                5,
                3,
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

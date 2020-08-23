<?php

use app\models\grammar\exercise\Exercise;
use MongoDB\BSON\ObjectId;
use yii\mongodb\Migration;

class m200821_174029_fill_passive_past_perfect_statement_exercise_collection extends Migration
{
    private array $_sentences = [
        'Когда я пришел домой, еда уже была приготовлена.',
        '.',
        '.',
        '.',
        '.',
    ];

    public function up()
    {
        $translations = [
            ['When I came home, the food had already been cooked.'],
            ['.'],
            ['.'],
            ['.'],
            ['.'],
        ];

        foreach ($this->_sentences as $key => $sentence) {
            $model = Exercise::create(
                new ObjectId(),
                0,
                8,
                1,
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

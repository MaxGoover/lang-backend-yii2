<?php

use app\models\grammar\exercise\Exercise;
use MongoDB\BSON\ObjectId;
use yii\mongodb\Migration;

class m200725_205251_fill_302_present_simple_exercise_collection extends Migration
{
    private array $_sentences = [
        'Я хочу говорить по-английски свободно и правильно.',
        'Я очень хочу это.',
        'Я хочу сделать это.',
        'Я хочу быть счастливым.',
        'Я хочу поблагодарить тебя.',
        'Я хочу лучше знать английский.',
        'Я очень хочу это знать.',
        'Я хочу новый компьютер.',
        'Я хочу лучше говорить по-английски.',
        'Я хочу говорить по-английски правильно.',
        'Мои родители хотят жить в другом месте.',
        'Я очень хочу улучшить свой английский.',
        'Я хочу пойти в другое место.',
        'Я хочу новую квартиру.',
        'Я хочу купить новую квартиру.',
        'Мой друг хочет жить за границей.',
        'Она хочет сделать это прямо сейчас.',
        'Мой друг хочет проверить это еще раз.',
        'Я очень хочу это.',
        'Я хочу поехать за границу.',
        'Я хочу эту вещь.',
        'Я хочу иметь хорошую машину.',
        'Я хочу быстро выучить английский.',
        'Мы хотим знать английский.',
        'Мне нравится это видео.',
        'Мне нравится эта вещь.',
        'Я хотел бы выпить чашечку кофе.',
        'Мне нравится этот плейлист.',
        'Я хотел бы сделать это.',
        'Я хотел бы посетить это место.',
        'Мне бы хотелось чашку кофе.',
        'Я хотел бы стать бизнесменом.',
        'Она хотела бы стать учителем.',
        'Ему нравится это платье.',
        'Я вижу тебе действительно нравится английский.',
        'Моему другу нравится этот отель.',
        'Мне нравится английский.',
        'Мне очень нравится этот плейлист.',
        'Мне нравится этот канал.',
        'Ей нравится это место.',
        'Тебе это нравится.',
        'Это ей нравится.',
        'Я вижу ему это очень нравится.',
        'Мне очень нравится этот канал.',
        'Я хотел бы знать английский очень хорошо.',
        'Им нравится это.',
        'Это мне нравится.',
        'Я хотел бы выпить чашечку чая.',
        'Мне нравится этот метод.',
        'Нам это нравится.',
        'Мне бы хотелось чашечку чая.',
        'Мне тоже нравится этот канал.',
        'Мне нравится этот канал тоже.',
        'Мне очень нравится это место.',
        'Мне это очень нравится.',
        'Он хотел бы стать врачом.',
        'Мне нравятся те уроки.',
        'Я хотел бы стать бизнесменом.',
        'Мне очень нравятся эти уроки.',
        'Я хотел бы стать менеджером.',
        'Мне нравится эта идея.',
        'Я хотел бы поехать за границу.',
        'Она хотела бы пойти в другое место.',
        'Мне нужно говорить по-английски вовсе без каких-либо ошибок.',
        'Мне это нужно.',
        'Твоей маме нужно меньше работать.',
        'Мне нужно позвонить им.',
        'Мне нужно исправить эту ошибку.',
        'Ей нужно исправить эти ошибки.',
        'Мне нужна эта информация.',
        'Мне нужно правильно говорить по-английски.',
        'Тебе нужно запомнить это.',
        'Мне нужно улучшить свой английский.',
        'Мне нужно заниматься более усердно.',
        'Мне нужно позвонить ему.',
        'Мне действительно нужен английский.',
        'Мне нужно говорить по-английски без ошибок.',
        'Мы нужно решить эту проблему.',
        'Ему нужно найти хорошую работу.',
        'Мне нужно свободно говорить по-английски.',
        'Его отцу нужны деньги.',
        'Нам нужно больше информации.',
        'Ему нужно изменить свою жизнь.',
        'Мне очень нужны эти уроки.',
        'Мне очень нужно это знать.',
        'Мне нужно решить эти проблемы.',
        'Мне нужно проверить это.',
        'Мне нужен твой совет.',
        'Мне нужно выучить английский.',
        'Мне нужна эта вещь.',
        'Тебе нужно запомнить это правило.',
        'Мне нужно это сделать.',
        'Это нужно им.',
    ];

    public function up()
    {
        $translations = [
            ['I want to speak English fluently and correctly.'],
            ['I really want it.'],
            ['I want to do it.'],
            ['I want to be happy.'],
            ['I want to thank you.'],
            ['I want to know English better.'],
            ['I really want to know it.'],
            ['I want a new computer.'],
            ['I want to speak English better.'],
            ['I want to speak English correctly.'],
            ['My parents want to live in another place.'],
            ['I really want to improve my English.'],
            ['I want to go to another place.'],
            ['I want a new apartment.'],
            ['I want to buy a new apartment.'],
            ['My friends wants to live abroad.'],
            ['She wants to do it right now.'],
            ['My friend wants to check it one more time.'],
            ['I really want it.'],
            ['I want to go abroad.'],
            ['I want this thing.'],
            ['I want to have a good car.'],
            ['I want to learn English fast.'],
            ['We want to know English.'],
            ['I like this video.'],
            ['I like this thing.'],
            ['I`d like to drink a cup of coffee.'],
            ['I like this playlist.'],
            ['I`d like to do it.'],
            ['I`d like to visit this place.'],
            ['I`d like a cup of coffee.'],
            ['I`d like to become a businessman.'],
            ['She`d like to become a teacher.'],
            ['He likes this dress.'],
            ['I see you really like English.'],
            ['My friend likes this hotel.'],
            ['I like English.'],
            ['I really like this playlist.'],
            ['I like this channel.'],
            ['She likes this place.'],
            ['You like it.'],
            ['She likes it.'],
            ['I see he really likes it.'],
            ['I really like this channel.'],
            ['I`d like to know English very well.'],
            ['They like it.'],
            ['I like it.'],
            ['I`d like to drink a cup of tea.'],
            ['I like this method.'],
            ['We like it.'],
            ['I`d like a cup of tea.'],
            ['I also like this channel.'],
            ['I like this channel, too.'],
            ['I really like this place.'],
            ['I really like it.'],
            ['He`d like to become a doctor.'],
            ['I like those lessons.'],
            ['I`d like to become a businessman.'],
            ['I really like these lessons.'],
            ['I`d like to become a manager.'],
            ['I like this idea.'],
            ['I`d like to go abroad.'],
            ['She`d like to go to another place.'],
            ['I need to speak English without any mistakes at all.'],
            ['I need it.'],
            ['Your mom needs to work less.', 'Your mother needs to work less.'],
            ['I need to call them.'],
            ['I need to correct this mistake.', 'I need to fix this mistake.'],
            ['She needs to correct these mistakes.'],
            ['I need this information.'],
            ['I need to speak English correctly.'],
            ['You need to remember it.'],
            ['I need to improve my English.'],
            ['I need to study harder.'],
            ['I need to call him.'],
            ['I really need English.'],
            ['I need to speak English without mistakes.'],
            ['We need to solve this problem.'],
            ['He needs to find a good job.'],
            ['I need to speak English fluently.'],
            ['His father needs money.'],
            ['We need more information.'],
            ['He needs to change his life.'],
            ['I really need these lessons.'],
            ['I really need to know it.'],
            ['I need to solve these problem.'],
            ['I need to check it.'],
            ['I need your advice.'],
            ['I need to learn English.'],
            ['I need this thing.'],
            ['You need to remember this rule.'],
            ['I need to do it.'],
            ['They need it.'],
        ];

        foreach ($this->_sentences as $key => $sentence) {
            $model = Exercise::create(
                new ObjectId(),
                1,
                1,
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
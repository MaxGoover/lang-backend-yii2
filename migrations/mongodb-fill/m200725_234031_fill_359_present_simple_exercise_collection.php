<?php

use app\models\grammar\exercise\Exercise;
use MongoDB\BSON\ObjectId;
use yii\mongodb\Migration;

class m200725_234031_fill_359_present_simple_exercise_collection extends Migration
{
    private array $_sentences = [
        'Ты не пытаешься выучить английский.',
        'Это не работает.',
        'Я не хочу это знать.',
        'Я не согласен с тобой.',
        'Мне это не нравится.',
        'Она не хочет обсуждать это.',
        'Он там не работает. Он работает здесь',
        'Он не знает это.',
        'Это не кажется странным.',
        'Я не знаю.',
        'Она не помнит это.',
        'Он не хочет читать эти книги. Он хочет читать те книги.',
        'Я не хочу это говорить.',
        'У него нет этой информации.',
        'Я не хочу играть в компьютерные игры.',
        'Я не знаю этого человека.',
        'Я не хочу делать это прямо сейчас.',
        'Он не хочет попытаться найти хорошую работу.',
        'Он не пытается найти хорошую работу.',
        'Я не хочу жить в этой стране.',
        'Мой друг так не думает.',
        'Я не хочу рассказывать тебе об этой проблеме.',
        'Я не хочу там учиться.',
        'Мы не хотим жить в другом месте.',
        'Это не кажется полезным.',
        'Они мне не помогают.',
        'Я не хочу говорить тебе эту вещь.',
        'Я не хочу думать об этом.',
        'Я не понимаю этих людей.',
        'Мы это не понимаем.',
        'Я не хочу это обсуждать.',
        'У него нет машины.',
        'Я не хочу пить.',
        'Я не хочу жить в том городе.',
        'Мне это не помогает.',
        'То предложение не кажется странным.',
        'Его начальник не говорит по-английски свободно.',
        'Мои родители не обсуждают это.',
        'Эти вещи меня не привлекают.',
        'Те вещи не кажутся странными.',
        'Его сын не хочет становиться врачом.',
        'Наш учитель не верит нам.',
        'Мой партнер не знает его.',
        'Моему другу не нравится эта идея.',
        'Она думает, деньги не делают людей счастливыми.',
        'Этот человек не пытается изменить свою жизнь.',
        'Мой начальник не видит её.',
        'Меня эта вещь не привлекает.',
        'Мои друзья не рекомендуют этот отель.',
        'Моя сестра не знает этого человека.',
        'Мой брат не хочет думать о своем будущем.',
        'Я со своим другом не звоню им.',
        'Мой друг так не думает.',
        'Те уроки не кажутся полезными. Эти уроки кажутся очень полезными.',
        'Моя сестра не хочет делать это позже. Она хочет сделать это прямо сейчас.',
        'Эта вещь не интересует меня.',
        'Я знаю эту компанию. Её прибыль не кажется большой.',
        'Мой друг не пытается это делать.',
        'Их компания не пытается делать это.',
        'Та вещь не кажется интересной.',
        'Моя сестра не хочет там учиться.',
        'Тот метод не работает. Этот метод реально помогает.',
        'Их родители не чувствуют себя счастливыми.',
        'Он думает, деньги не приносят людям счастья.',
        'Это предложение не кажется таким интересным.',
        'Наша компания не хочет этого.',
        'Мой друг не согласен со мной.',
        'Они не верят ему.',
        'Мой друг не говорит по-английски свободно.',
        'Я не говорю ему эти вещи.',
        'У нас нет артикля здесь.',
        'Их учителя не объясняют это.',
        'Она не говорит мне эти вещи.',
        'Этот человек не пытается это сделать.',
        'Деньги вовсе не мотивируют ее.',
        'Деньги не привлекают ее.',
        'Я не заказываю там еду.',
        'Наши учителя не объясняют это.',
        'Его девушка не чувствует себя счастливой.',
        'Её парень не знает об этой проблеме.',
        'У нас нет каких-либо вопросов.',
        'Он не заказывает еду здесь.',
        'Их прибыль не кажется такой большой.',
        'Она не говорит это.',
        'Их учитель не объясняет это.',
        'Он не говорит по-испански.',
        'Ты не понимаешь нас.',
        'Это не мотивирует меня.',
        'Он не приходит домой поздно.',
        'Этот отель не кажется таким дешевым.',
        'Это не выглядит странно.',
        'Он не работает в другом месте.',
        'Она не согласна с нами.',
        'Деньги его не интересуют.',
        'Наш начальник не пытается изменить это.',
        'Это не происходит время от времени.',
        'Ему не нравится та идея.',
        'Та вещь его не интересует.',
        'Ей не нравится это место.',
        'Он не хочет решать те проблемы.',
        'Эти слова не мотивируют его.',
        '.',
        '.',
    ];

    public function up()
    {
        $translations = [
            [
                'You don`t try to learn English.',
                'You do not try to learn English.',
            ],
            [
                'It doesn`t work.',
                'It does not work.',
            ],
            [
                'I don`t want to know it.',
                'I do not want to know it.',
            ],
            [
                'I don`t agree with you.',
                'I do not agree with you.',
                'I disagree with you.',
            ],
            [
                'I don`t like it.',
                'I do not like it.',
            ],
            [
                'She doesn`t want to discuss it.',
                'She does not want to discuss it.',
            ],
            [
                'He doesn`t work there. He works here.',
                'He does not work there. He works here.',
            ],
            [
                'He doesn`t know it.',
                'He does not know it.',
            ],
            [
                'It doesn`t seem strange.',
                'It does not seem strange.',
            ],
            [
                'I don`t know.',
                'I do not know.',
            ],
            [
                'She doesn`t remember it.',
                'She does not remember it.',
            ],
            [
                'He doesn`t want to read these books. He wants to read those books.',
                'He does not want to read these books. He wants to read those books.',
            ],
            [
                'I don`t want to say it.',
                'I do not want to say it.',
            ],
            [
                'He doesn`t have this information.',
                'He does not have this information.',
            ],
            [
                'I don`t want to play computer games.',
                'I do not want to play computer games.',
            ],
            [
                'I don`t know this person.',
                'I do not know this person',
            ],
            [
                'I don`t want to do it right now.',
                'I do not want to do it right now.'
            ],
            [
                'He doesn`t want to try to find a good job.',
                'He does not want to try to find a good job.',
            ],
            [
                'He doesn`t try to find a good job.',
                'He does not try to find a good job.',
            ],
            [
                'I don`t want to live in this country.',
                'I do not want to live in this country.',
            ],
            [
                'My friend doesn`t think so.',
                'My friend does not think so.',
            ],
            [
                'I don`t want to tell you about this problem.',
                'I do not want to tell you about this problem.',
            ],
            [
                'I don`t want to study there.',
                'I do not want to study there.',
            ],
            [
                'We don`t want to live in another place.',
                'We do not want to live in another place.',
            ],
            [
                'It doesn`t seem useful.',
                'It does not seem useful.',
            ],
            [
                'They don`t help me.',
                'They do not help me.',
            ],
            [
                'I don`t want to tell you this thing.',
                'I do not want to tell you this thing.',
            ],
            [
                'I don`t want to think about it.',
                'I do not want to think about it.',
            ],
            [
                'I don`t understand these people.',
                'I do not understand these people.',
            ],
            [
                'We don`t understand it.',
                'We do not understand it.',
            ],
            [
                'I don`t want to discuss it.',
                'I do not want to discuss it.',
            ],
            [
                'He doesn`t have a car.',
                'He does not have a car.',
            ],
            [
                'I don`t want to drink.',
                'I do not want to drink.',
            ],
            [
                'I don`t want to live in that city.',
                'I do not want to live in that city.',
            ],
            [
                'It doesn`t help me.',
                'It does not help me.',
            ],
            [
                'That offer doesn`t seem strange.',
                'That offer does not seem strange.',
            ],
            [
                'His boss doesn`t speak English fluently.',
                'His boss does not speak English fluently.',
            ],
            [
                'My parents don`t discuss it.',
                'My parents do not discuss it.',
            ],
            [
                'These things don`t attract me.',
                'These things do not attract me.',
            ],
            [
                'Those things don`t seem strange.',
                'Those things do not seem strange.',
            ],
            [
                'His son doesn`t want to become a doctor.',
                'His son does not want to become a doctor.',
            ],
            [
                'Our teacher doesn`t believe us.',
                'Our teacher does not believe us.',
            ],
            [
                'My partner doesn`t know him.',
                'My partner does not know him.',
            ],
            [
                'My friend doesn`t like this idea.',
                'My friend does not like this idea.',
            ],
            [
                'She thinks money doesn`t make people happy.',
                'She thinks money does not make people happy.',
            ],
            [
                'This person doesn`t try to change his life.',
                'This person does not try to change his life.',
            ],
            [
                'My boss doesn`t boss see her.',
                'My boss does not boss see her.',
            ],
            [
                'This thing doesn`t attract me.',
                'This thing does not attract me.',
            ],
            [
                'My friends don`t recommend this hotel.',
                'My friends do not recommend this hotel.',
            ],
            [
                'My sister doesn`t know this person.',
                'My sister does not know this person.',
            ],
            [
                'My brother doesn`t want to think about his future.',
                'My brother does not want to think about his future.',
            ],
            [
                'My friend and I don`t call them.',
                'My friend and I do not call them.',
            ],
            [
                'My friend doesn`t think so.',
                'My friend does not think so.',
            ],
            [
                'Those lessons don`t seem useful. These lessons seem very useful.',
                'Those lessons do not seem useful. These lessons seem very useful.',
            ],
            [
                'My sister doesn`t want to do it later. She wants to do it right now.',
                'My sister does not want to do it later. She wants to do it right now.',
            ],
            [
                'This thing doesn`t interest me.',
                'This thing does not interest me.',
            ],
            [
                'I know this company. Its profit doesn`t seem big.',
                'I know this company. Its profit does not seem big.',
            ],
            [
                'My friend doesn`t try to do it.',
                'My friend does not try to do it.',
            ],
            [
                'Their company doesn`t try to do it.',
                'Their company does not try to do it.',
            ],
            [
                'That thing doesn`t seem interesting.',
                'That thing does not seem interesting.',
            ],
            [
                'My sister doesn`t want to study there.',
                'My sister does not want to study there.',
            ],
            [
                'That method doesn`t work. This method really help.',
                'That method does not work. This method really help.',
            ],
            [
                'Their parents don`t feel happy.',
                'Their parents do not feel happy.',
            ],
            [
                'He thinks money doesn`t bring people happiness.',
                'He thinks money does not bring people happiness.',
            ],
            [
                'This offer doesn`t seem so interesting.',
                'This offer does not seem so interesting.',
            ],
            [
                'Our company doesn`t want it.',
                'Our company does not want it.',
            ],
            [
                'My friend doesn`t agree with me.',
                'My friend does not agree with me.',
                'My friend disagree with me.',
            ],
            [
                'They don`t believe him.',
                'They do not believe him.',
            ],
            [
                'My friend doesn`t speak English fluently.',
                'My friend does not speak English fluently.',
            ],
            [
                'I don`t tell him these things.',
                'I do not tell him these things.',
            ],
            [
                'We don`t have an article here.',
                'We do not have an article here.',
            ],
            [
                'Their teachers don`t explain it.',
                'Their teachers do not explain it.',
            ],
            [
                'She doesn`t tell me these things.',
                'She does not tell me these things.',
            ],
            [
                'This person doesn`t try to do it.',
                'This person does not try to do it.',
            ],
            [
                'Money doesn`t motivate her at all.',
                'Money does not motivate her at all.',
            ],
            [
                'Money doesn`t attract her.',
                'Money does not attract her.',
            ],
            [
                'I don`t order food there.',
                'I do not order food there.',
            ],
            [
                'Our teachers don`t explain it.',
                'Our teachers do not explain it.',
            ],
            [
                'His girlfriend doesn`t feel happy.',
                'His girlfriend does not feel happy.',
            ],
            [
                'Her boyfriend doesn`t know about this problem.',
                'Her boyfriend does not know about this problem.',
            ],
            [
                'We don`t have any questions.',
                'We do not have any questions.',
            ],
            [
                'He doesn`t order food here.',
                'He does not order food here.',
            ],
            [
                'Their profit doesn`t seem so big.',
                'Their profit does not seem so big.',
            ],
            [
                'She doesn`t say it.',
                'She does not say it.',
            ],
            [
                'Their teacher doesn`t explain it',
                'Their teacher does not explain it',
            ],
            [
                'He doesn`t speak Spanish.',
                'He does not speak Spanish.',
            ],
            [
                'You don`t understand us.',
                'You do not understand us.',
            ],
            [
                'It doesn`t motivate me.',
                'It does not motivate me.',
            ],
            [
                'He doesn`t come home late.',
                'He does not come home late.',
            ],
            [
                'This hotel doesn`t seem so cheap.',
                'This hotel does not seem so cheap.',
            ],
            [
                'It doesn`t look strange.',
                'It does not look strange.',
            ],
            [
                'He doesn`t work in another place.',
                'He does not work in another place.',
            ],
            [
                'She doesn`t agree with us.',
                'She does not agree with us.',
            ],
            [
                'Money doesn`t interest him.',
                'Money does not interest him.',
            ],
            [
                'Our boss doesn`t try to change it.',
                'Our boss does not try to change it.',
            ],
            [
                'It doesn`t happen from time to time.',
                'It does not happen from time to time.',
            ],
            [
                'He doesn`t like that idea.',
                'He does not like that idea.',
            ],
            [
                'That thing doesn`t interest him.',
                'That thing does not interest him.',
            ],
            [
                'She doesn`t like this place.',
                'She does not like this place.',
            ],
            [
                'He doesn`t want to solve those problems.',
                'He does not want to solve those problems.',
            ],
            [
                'These words don`t motivate him.',
                'These words do not motivate him.',
            ],
            [
                '.',
            ],
            [
                '.',
            ],
        ];

        foreach ($this->_sentences as $key => $sentence) {
            $model = Exercise::create(
                new ObjectId(),
                1,
                1,
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

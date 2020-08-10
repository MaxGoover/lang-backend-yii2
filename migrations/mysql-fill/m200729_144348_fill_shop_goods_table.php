<?php

use yii\db\Migration;

class m200729_144348_fill_shop_goods_table extends Migration
{
    private string $_tableName = 'shop_goods';

    public function safeUp()
    {
        $this->batchInsert(
            $this->_tableName,
            [
                'id',
                'group_id',
                'title',
                'description',
                'price',
                'in_stock',
            ],
            [
                [
                    1,
                    1,
                    'Алгоритмы. Построение и анализ. Т. Кормен, Ч. Лейзерсон, Р. Ривест, К. Штайн.',
                    null,
                    19,
                    4,
                ],
                [
                    2,
                    1,
                    'Совершенный код. Стив Макконнелл.',
                    null,
                    1.02,
                    51,
                ],
                [
                    3,
                    1,
                    'JavaScript. Подробное руководство. Дэвид Флэнаган.',
                    null,
                    3.08,
                    12,
                ],
                [
                    7,
                    2,
                    'Овсяные пирожные с шоколадной прослойкой',
                    null,
                    1.71,
                    55,
                ],
                [
                    8,
                    2,
                    'Суп с пекинской капустой',
                    null,
                    2.17,
                    4,
                ],
                [
                    11,
                    15,
                    'Набор для рисования Пастель',
                    null,
                    2.2,
                    1,
                ],
                [
                    12,
                    15,
                    'Брелок-рулетка',
                    null,
                    2.5,
                    1,
                ],
                [
                    63,
                    15,
                    'Брелок-открывалка',
                    null,
                    1.97,
                    21,
                ],
                [
                    64,
                    15,
                    'Ручка-стилус шариковая',
                    null,
                    4,
                    1,
                ],
                [
                    85,
                    2,
                    'Вишня в коньяке',
                    null,
                    2,
                    4,
                ],
                [
                    86,
                    2,
                    'Постный фаршированный перец',
                    null,
                    4.16,
                    4,
                ],
                [
                    109,
                    2,
                    'Салат Подсолнух',
                    null,
                    1.88,
                    4,
                ],
                [
                    110,
                    2,
                    'Форель «Эрланген»',
                    null,
                    1.24,
                    4,
                ],
                [
                    111,
                    2,
                    'Салат с морепродуктами',
                    null,
                    1.88,
                    4,
                ],
                [
                    112,
                    2,
                    'Тёртый пирог',
                    null,
                    1.24,
                    4,
                ],
                [
                    184,
                    5,
                    'Беговая дорожка',
                    null,
                    4.06,
                    1,
                ],
                [
                    185,
                    5,
                    'Гантели съемные',
                    null,
                    1.24,
                    4,
                ],
                [
                    191,
                    10,
                    'Амортизатор задний CX-5',
                    null,
                    6.1,
                    4,
                ],
                [
                    192,
                    10,
                    'Пружина амортизатора',
                    null,
                    2.2,
                    42,
                ],
                [
                    193,
                    10,
                    'Корпус воздушного фильтра',
                    null,
                    1.85,
                    42,
                ],
                [
                    194,
                    10,
                    'Ремень приводной',
                    null,
                    1.13,
                    44,
                ],
                [
                    195,
                    10,
                    'Диффузор радиатора',
                    null,
                    1.74,
                    4,
                ],
                [
                    196,
                    10,
                    'Фильтр АКПП',
                    null,
                    1.97,
                    21,
                ],
            ]
        );
    }

    public function safeDown()
    {
        if (Yii::$app->db->schema->getTableSchema($this->_tableName)) {
            $this->delete($this->_tableName, ['id' => [1, 2, 3, 7, 8, 11, 12, 63, 64, 85, 86, 109, 110, 111, 112, 184, 185, 191, 192, 193, 194, 195, 196]]);
        }
    }
}

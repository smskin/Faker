<?php

namespace Faker\Provider\ru_RU;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    ];

    /**
     * This provider uses wikipedia's 250 top russian last names
     * That list of MALE last names could be safely extended to FEMALE list just by adding 'a' letter at the end
     */
    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}а',
        '{{lastName}}а {{firstNameFemale}} {{middleNameFemale}}',
    ];

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B5_%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F
     * {@link} http://masterrussian.com/aa031701a.shtml
     */
    protected static $firstNameMale = [
        'Абрам', 'Август', 'Адам', 'Адриан', 'Аким', 'Александр', 'Алексей', 'Альберт', 'Ананий', 'Анатолий', 'Андрей', 'Антон', 'Антонин',
        'Аполлон', 'Аркадий', 'Арсений', 'Артемий', 'Артур', 'Артём', 'Афанасий', 'Богдан', 'Болеслав', 'Борис', 'Бронислав', 'Вадим',
        'Валентин', 'Валериан', 'Валерий', 'Василий', 'Вениамин', 'Викентий', 'Виктор', 'Виль', 'Виталий', 'Витольд', 'Влад', 'Владимир',
        'Владислав', 'Владлен', 'Всеволод', 'Вячеслав', 'Гавриил', 'Гарри', 'Геннадий', 'Георгий', 'Герасим', 'Герман', 'Глеб', 'Гордей',
        'Григорий', 'Давид', 'Дан', 'Даниил', 'Данила', 'Денис', 'Дмитрий', 'Добрыня', 'Донат', 'Евгений', 'Егор', 'Ефим',
        'Захар', 'Иван', 'Игнат', 'Игнатий', 'Игорь', 'Илларион', 'Илья', 'Иммануил', 'Иннокентий', 'Иосиф', 'Ираклий', 'Кирилл',
        'Клим', 'Константин', 'Кузьма', 'Лаврентий', 'Лев', 'Леонид', 'Макар', 'Максим', 'Марат', 'Марк', 'Матвей', 'Милан',
        'Мирослав', 'Михаил', 'Назар', 'Нестор', 'Никита', 'Никодим', 'Николай', 'Олег', 'Павел', 'Платон', 'Прохор', 'Пётр',
        'Радислав', 'Рафаил', 'Роберт', 'Родион', 'Роман', 'Ростислав', 'Руслан', 'Сава', 'Савва', 'Святослав', 'Семён', 'Сергей',
        'Спартак', 'Станислав', 'Степан', 'Стефан', 'Тарас', 'Тимофей', 'Тимур', 'Тит', 'Трофим', 'Феликс', 'Филипп', 'Фёдор',
        'Эдуард', 'Эрик', 'Юлиан', 'Юлий', 'Юрий', 'Яков', 'Ян', 'Ярослав', 'Милан',
    ];

    /**
     * {@link} http://masterrussian.com/aa031001a.shtml
     */
    protected static $firstNameFemale = [
        'Александра', 'Алина', 'Алиса', 'Алла', 'Альбина', 'Алёна', 'Анастасия', 'Анжелика', 'Анна', 'Антонина', 'Анфиса', 'Валентина', 'Валерия',
        'Варвара', 'Василиса', 'Вера', 'Вероника', 'Виктория', 'Владлена', 'Галина', 'Дарья', 'Диана', 'Дина', 'Доминика', 'Ева',
        'Евгения', 'Екатерина', 'Елена', 'Елизавета', 'Жанна', 'Зинаида', 'Злата', 'Зоя', 'Изабелла', 'Изольда', 'Инга', 'Инесса',
        'Инна', 'Ирина', 'Искра', 'Капитолина', 'Клавдия', 'Клара', 'Клементина', 'Кристина', 'Ксения', 'Лада', 'Лариса', 'Лидия',
        'Лилия', 'Любовь', 'Людмила', 'Люся', 'Майя', 'Мальвина', 'Маргарита', 'Марина', 'Мария', 'Марта', 'Надежда', 'Наталья',
        'Нелли', 'Ника', 'Нина', 'Нонна', 'Оксана', 'Олеся', 'Ольга', 'Полина', 'Рада', 'Раиса', 'Регина', 'Рената',
        'Розалина', 'Светлана', 'Софья', 'София', 'Таисия', 'Тамара', 'Татьяна', 'Ульяна', 'Фаина', 'Федосья', 'Флорентина', 'Эльвира', 'Эмилия',
        'Эмма', 'Юлия', 'Яна', 'Ярослава',
    ];

    protected static $middleNameMale = [
        'Александрович', 'Алексеевич', 'Андреевич', 'Дмитриевич', 'Евгеньевич',
        'Сергеевич', 'Иванович', 'Фёдорович', 'Львович', 'Романович', 'Владимирович',
        'Борисович', 'Максимович',
    ];

    protected static $middleNameFemale = [
        'Александровна', 'Алексеевна', 'Андреевна', 'Дмитриевна', 'Евгеньевна',
        'Сергеевна', 'Ивановна', 'Фёдоровна', 'Львовна', 'Романовна', 'Владимировна',
        'Борисовна', 'Максимовна',
    ];

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BE%D0%B1%D1%89%D0%B5%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D1%85_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D0%B9
     */
    protected static $lastName = [
        'Смирнов', 'Иванов', 'Кузнецов', 'Соколов', 'Попов', 'Лебедев', 'Козлов',
        'Новиков', 'Морозов', 'Петров', 'Волков', 'Соловьёв', 'Васильев', 'Зайцев',
        'Павлов', 'Семёнов', 'Голубев', 'Виноградов', 'Богданов', 'Воробьёв',
        'Фёдоров', 'Михайлов', 'Беляев', 'Тарасов', 'Белов', 'Комаров', 'Орлов',
        'Киселёв', 'Макаров', 'Андреев', 'Ковалёв', 'Ильин', 'Гусев', 'Титов',
        'Кузьмин', 'Кудрявцев', 'Баранов', 'Куликов', 'Алексеев', 'Степанов',
        'Яковлев', 'Сорокин', 'Сергеев', 'Романов', 'Захаров', 'Борисов', 'Королёв',
        'Герасимов', 'Пономарёв', 'Григорьев', 'Лазарев', 'Медведев', 'Ершов',
        'Никитин', 'Соболев', 'Рябов', 'Поляков', 'Цветков', 'Данилов', 'Жуков',
        'Фролов', 'Журавлёв', 'Николаев', 'Крылов', 'Максимов', 'Сидоров', 'Осипов',
        'Белоусов', 'Федотов', 'Дорофеев', 'Егоров', 'Матвеев', 'Бобров', 'Дмитриев',
        'Калинин', 'Анисимов', 'Петухов', 'Антонов', 'Тимофеев', 'Никифоров',
        'Веселов', 'Филиппов', 'Марков', 'Большаков', 'Суханов', 'Миронов', 'Ширяев',
        'Александров', 'Коновалов', 'Шестаков', 'Казаков', 'Ефимов', 'Денисов',
        'Громов', 'Фомин', 'Давыдов', 'Мельников', 'Щербаков', 'Блинов', 'Колесников',
        'Карпов', 'Афанасьев', 'Власов', 'Маслов', 'Исаков', 'Тихонов', 'Аксёнов',
        'Гаврилов', 'Родионов', 'Котов', 'Горбунов', 'Кудряшов', 'Быков', 'Зуев',
        'Третьяков', 'Савельев', 'Панов', 'Рыбаков', 'Суворов', 'Абрамов', 'Воронов',
        'Мухин', 'Архипов', 'Трофимов', 'Мартынов', 'Емельянов', 'Горшков', 'Чернов',
        'Овчинников', 'Селезнёв', 'Панфилов', 'Копылов', 'Михеев', 'Галкин', 'Назаров',
        'Лобанов', 'Лукин', 'Беляков', 'Потапов', 'Некрасов', 'Хохлов', 'Жданов',
        'Наумов', 'Шилов', 'Воронцов', 'Ермаков', 'Дроздов', 'Игнатьев', 'Савин',
        'Логинов', 'Сафонов', 'Капустин', 'Кириллов', 'Моисеев', 'Елисеев', 'Кошелев',
        'Костин', 'Горбачёв', 'Орехов', 'Ефремов', 'Исаев', 'Евдокимов', 'Калашников',
        'Кабанов', 'Носков', 'Юдин', 'Кулагин', 'Лапин', 'Прохоров', 'Нестеров',
        'Харитонов', 'Агафонов', 'Муравьёв', 'Ларионов', 'Федосеев', 'Зимин', 'Пахомов',
        'Шубин', 'Игнатов', 'Филатов', 'Крюков', 'Рогов', 'Кулаков', 'Терентьев',
        'Молчанов', 'Владимиров', 'Артемьев', 'Гурьев', 'Зиновьев', 'Гришин', 'Кононов',
        'Дементьев', 'Ситников', 'Симонов', 'Мишин', 'Фадеев', 'Комиссаров', 'Мамонтов',
        'Носов', 'Гуляев', 'Шаров', 'Устинов', 'Вишняков', 'Евсеев', 'Лаврентьев',
        'Брагин', 'Константинов', 'Корнилов', 'Авдеев', 'Зыков', 'Бирюков', 'Шарапов',
        'Никонов', 'Щукин', 'Дьячков', 'Одинцов', 'Сазонов', 'Якушев', 'Красильников',
        'Гордеев', 'Самойлов', 'Князев', 'Беспалов', 'Уваров', 'Шашков', 'Бобылёв',
        'Доронин', 'Белозёров', 'Рожков', 'Самсонов', 'Мясников', 'Лихачёв', 'Буров',
        'Сысоев', 'Фомичёв', 'Русаков', 'Стрелков', 'Гущин', 'Тетерин', 'Колобов',
        'Субботин', 'Фокин', 'Блохин', 'Селиверстов', 'Пестов', 'Кондратьев', 'Силин',
        'Меркушев', 'Лыткин', 'Туров',
    ];

    protected static $lastNameSuffix = ['а', ''];

    /**
     * Return male middle name
     *
     * @return string Middle name
     * @example 'Иванович'
     *
     */
    public function middleNameMale()
    {
        return static::randomElement(static::$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @return string Middle name
     * @example 'Ивановна'
     *
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::$middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @param string|null $gender A gender the middle name should be generated
     *                            for. If the argument is skipped a random gender will be used.
     *
     * @return string Middle name
     */
    public function middleName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return $this->middleNameMale();
        }

        if ($gender === static::GENDER_FEMALE) {
            return $this->middleNameFemale();
        }

        return $this->middleName(static::randomElement([
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        ]));
    }

    /**
     * Return last name for the specified gender.
     *
     * @param string|null $gender A gender of the last name should be generated
     *                            for. If the argument is skipped a random gender will be used.
     *
     * @return string Last name
     */
    public function lastName($gender = null)
    {
        $lastName = static::randomElement(static::$lastName);

        if (static::GENDER_FEMALE === $gender) {
            return $lastName . 'а';
        }

        if (static::GENDER_MALE === $gender) {
            return $lastName;
        }

        return $lastName . static::randomElement(static::$lastNameSuffix);
    }

    /**
     * Generates INN Checksum
     * @see https://ru.wikipedia.org/wiki/%D0%98%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80_%D0%BD%D0%B0%D0%BB%D0%BE%D0%B3%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D1%89%D0%B8%D0%BA%D0%B0
     * Example of validation: http://www.kholenkov.ru/data-validation/inn/
     * @param string|null $areaCode
     * @return string
     */
    public static function inn12(?string $areaCode = ''): string
    {
        if ($areaCode === '' || intval($areaCode) == 0) {
            //Simple generation code for areas in Russian without check for valid
            $areaCode = static::numberBetween(1, 91);
        } else {
            $areaCode = intval($areaCode);
        }
        $areaCode = str_pad($areaCode, 2, '0', STR_PAD_LEFT);
        $innBase = $areaCode . static::numerify('########');
        return $innBase . self::inn12Checksum($innBase);
    }

    public static function inn12Checksum($inn): string
    {
        $multipliers1 = [
            1 => 7,
            2 => 2,
            3 => 4,
            4 => 10,
            5 => 3,
            6 => 5,
            7 => 9,
            8 => 4,
            9 => 6,
            10 => 8
        ];
        $sum1 = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum1 += intval(substr($inn, $i - 1, 1)) * $multipliers1[$i];
        }
        $n11 = strval(($sum1 % 11) % 10);
        $inn .= $n11;

        $multipliers2 = [
            1 => 3,
            2 => 7,
            3 => 2,
            4 => 4,
            5 => 10,
            6 => 3,
            7 => 5,
            8 => 9,
            9 => 4,
            10 => 6,
            11 => 8
        ];
        $sum2 = 0;
        for ($i = 1; $i <= 11; $i++) {
            $sum2 += intval(substr($inn, $i - 1, 1)) * $multipliers2[$i];
        }
        $n12 = strval(($sum2 % 11) % 10);
        return $n11 . $n12;
    }

    /**
     * Checks whether an INN has a valid checksum
     *
     * @param string $inn
     *
     * @return bool
     */
    public static function inn12IsValid(string $inn): bool
    {
        $checksum = self::inn12Checksum($inn);
        return
            substr($checksum, 0, 1) === substr($inn, 10, 1) &&
            substr($checksum, 1, 1) === substr($inn, 11, 1);
    }

    /**
     * Example of validation: http://www.kholenkov.ru/data-validation/ogrnip/
     * @param string|null $areaCode
     * @return string
     */
    public function ogrn15(?string $areaCode = ''): string
    {
        if ($areaCode === '' || intval($areaCode) == 0) {
            //Simple generation code for areas in Russian without check for valid
            $areaCode = static::numberBetween(1, 91);
        } else {
            $areaCode = intval($areaCode);
        }
        $year = substr(
            date(
                'Y',
                strtotime(
                    '-' . rand(1, 30) . 'years'
                )
            ),
            -2
        );
        $region = str_pad($areaCode, 2, '0', STR_PAD_LEFT);
        $tail = str_pad(static::numberBetween(1, 999999999), 9, '0', STR_PAD_LEFT);
        $result = '3' . $year . $region . $tail;
        $n14 = strval(($result % 13) % 10);
        return $result . $n14;
    }
}

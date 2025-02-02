<?php

namespace Faker\Provider\ru_RU;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Russian banks (2015-04-04), source: http://www.banki.ru/banks/
     *
     * @example "cat *.html | grep 'b-cb-list__name' | iconv --f windows-1251 --t utf-8 | grep -o '>.*<' | \
     * sed -r 's/&mdash;//' | sed -r 's/[\<\>]//g' | sed -r "s/(^|$)/'/g" | sed -r 's/$/,/' | sed -r 's/\&(laquo|raquo);/"/g' | \
     * sed -r 's/\s+/ /g'"
     */
    protected static $banks = [
        'Новый Промышленный Банк',
        'Новый Символ',
        'Нокссбанк',
        'Ноосфера',
        'Нордеа Банк',
        'Нота-Банк',
        'НС Банк',
        'НСТ-Банк',
        'Нэклис-Банк',
        'Образование',
        'Объединенный Банк Промышленных Инвестиций',
        'Объединенный Банк Республики',
        'Объединенный Капитал',
        'Объединенный Кредитный Банк',
        'Объединенный Кредитный Банк  Московский филиал',
        'Объединенный Национальный Банк',
        'Объединенный Резервный Банк',
        'Океан Банк',
        'ОЛМА-Банк',
        'Онего',
        'Оней Банк',
        'ОПМ-Банк',
        'Оргбанк',
        'Оренбург',
        'ОТП Банк',
        'ОФК Банк',
        'Охабанк',
        'Первобанк',
        'Первомайский',
        'Первоуральскбанк',
        'Первый Дортрансбанк',
        'Первый Инвестиционный банк',
        'Первый Клиентский Банк',
        'Первый Чешско-Российский Банк',
        'Пересвет',
        'Пермь',
        'Петербургский Социальный Коммерческий Банк',
        'Петрокоммерц',
        'ПИР Банк',
        'Платина',
        'Плато-Банк',
        'Плюс Банк',
        'Пойдем!',
        'Почтобанк',
        'Прайм Финанс',
        'Преодоление',
        'Приморье',
        'Примсоцбанк',
        'Примтеркомбанк',
        'Прио-Внешторгбанк',
        'Приобье',
        'Приполярный',
        'Приско Капитал Банк',
        'Пробизнесбанк',
        'Проинвестбанк',
        'Прокоммерцбанк',
        'Проминвестбанк',
        'Промрегионбанк',
        'Промсвязьбанк',
        'Промсвязьинвестбанк',
        'Промсельхозбанк',
        'Промтрансбанк',
        'Промышленно-Финансовое Сотрудничество',
        'Промэнергобанк',
        'Профессионал Банк',
        'Профит Банк',
        'Прохладный',
        'Пульс Столицы',
        'Радиотехбанк',
        'Развитие',
        'Развитие-Столица',
        'Райффайзенбанк',
        'Расчетно-Кредитный Банк',
        'Расчетный Дом',
        'РБА',
        'Региональный Банк Развития',
        'Региональный Банк Сбережений',
        'Региональный Коммерческий Банк',
        'Региональный Кредит',
        'Регионфинансбанк',
        'Регнум',
        'Резерв',
        'Ренессанс',
        'Ренессанс Кредит',
        'Рента-Банк',
        'РЕСО Кредит',
        'Республиканский Кредитный Альянс',
        'Ресурс-Траст',
        'Риабанк',
        'Риал-Кредит',
        'Ринвестбанк',
        'Ринвестбанк Московский офис',
        'РИТ-Банк',
        'РН Банк',
        'Росавтобанк',
        'Росбанк',
        'Росбизнесбанк',
        'Росгосстрах Банк',
        'Росдорбанк',
        'РосЕвроБанк',
        'РосинтерБанк',
        'Роспромбанк',
        'Россельхозбанк',
        'Российская Финансовая Корпорация',
        'Российский Капитал',
        'Российский Кредит',
        'Российский Национальный Коммерческий Банк',
        'Россита-Банк',
        'Россия',
        'Рост Банк',
        'Ростфинанс',
        'Росэксимбанк',
        'Росэнергобанк',
        'Роял Кредит Банк',
        'РСКБ',
        'РТС-Банк',
        'РУБанк',
        'Рублев',
        'Руна-Банк',
        'Рунэтбанк',
        'Рускобанк',
        'Руснарбанк',
        'Русский Банк Сбережений',
        'Русский Ипотечный Банк',
        'Русский Международный Банк',
        'Русский Национальный Банк',
        'Русский Стандарт',
        'Русский Торговый Банк',
        'Русский Трастовый Банк',
        'Русский Финансовый Альянс',
        'Русский Элитарный Банк',
        'Русславбанк',
        'Руссобанк',
        'Русстройбанк',
        'Русфинанс Банк',
        'Русь',
        'РусьРегионБанк',
        'Русьуниверсалбанк',
        'РусЮгбанк',
        'РФИ Банк',
        'Саммит Банк',
        'Санкт-Петербургский Банк Инвестиций',
        'Саратов',
        'Саровбизнесбанк',
        'Сбербанк России',
        'Связной Банк',
        'Связь-Банк',
        'СДМ-Банк',
        'Севастопольский Морской банк',
        'Северный Кредит',
        'Северный Народный Банк',
        'Северо-Восточный Альянс',
        'Северо-Западный 1 Альянс Банк',
        'Северстройбанк',
        'Севзапинвестпромбанк',
        'Сельмашбанк',
        'Сервис-Резерв',
        'Сетелем Банк',
        'СИАБ',
        'Сибирский Банк Реконструкции и Развития',
        'Сибнефтебанк',
        'Сибсоцбанк',
        'Сибэс',
        'Сибэс Московский офис',
        'Синергия',
        'Синко-Банк',
        'Система',
        'Сити Инвест Банк',
        'Ситибанк',
        'СКА-Банк',
        'СКБ-Банк',
        'Славия',
        'Славянбанк',
        'Славянский Кредит',
        'Смартбанк',
        'СМБ-Банк',
        'Смолевич',
        'СМП Банк',
        'Снежинский',
        'Собинбанк',
        'Соверен Банк',
        'Советский',
        'Совкомбанк',
        'Современные Стандарты Бизнеса',
        'Содружество',
        'Соколовский',
        'Солид Банк',
        'Солидарность (Москва)',
        'Солидарность (Самара)',
        'Социнвестбанк',
        'Социнвестбанк Московский филиал',
        'Социум-Банк',
        'Союз',
        'Союзный',
        'Спецстройбанк',
        'Спиритбанк',
        'Спурт Банк',
        'Спутник',
        'Ставропольпромстройбанк',
        'Сталь Банк',
        'Стандарт-Кредит',
        'Стар Альянс',
        'СтарБанк',
        'Старооскольский Агропромбанк',
        'Старый Кремль',
        'Стелла-Банк',
        'Столичный Кредит',
        'Стратегия',
        'Строительно-Коммерческий Банк',
        'Стройлесбанк',
        'Сумитомо Мицуи',
        'Сургутнефтегазбанк',
        'СЭБ Банк',
        'Таатта',
        'Таврический',
        'Таганрогбанк',
        'Тагилбанк',
        'Тайдон',
        'Тайм Банк',
        'Тальменка-Банк',
        'Тальменка-Банк Московский филиал',
        'Тамбовкредитпромбанк',
        'Татагропромбанк',
        'Татсоцбанк',
        'Татфондбанк',
        'Таурус Банк',
        'ТверьУниверсалБанк',
        'Тексбанк',
        'Темпбанк',
        'Тендер-Банк',
        'Терра',
        'Тетраполис',
        'Тимер Банк',
        'Тинькофф Банк',
        'Тихоокеанский Внешторгбанк',
        'Тойота Банк',
        'Тольяттихимбанк',
        'Томскпромстройбанк',
        'Торгово-Промышленный Банк Китая',
        'Торговый Городской Банк',
        'Торжокуниверсалбанк',
        'Транскапиталбанк',
        'Транснациональный Банк',
        'Транспортный',
        'Трансстройбанк',
        'Траст Капитал Банк',
        'Тройка-Д Банк',
        'Тульский Промышленник',
        'Тульский Промышленник Московский офис',
        'Тульский Расчетный Центр',
        'Турбобанк',
        'Тусар',
        'ТЭМБР-Банк',
        'ТЭСТ',
        'Углеметбанк',
        'Уздан',
        'Унифин',
        'Унифондбанк',
        'Уралкапиталбанк',
        'Уралприватбанк',
        'Уралпромбанк',
        'Уралсиб',
        'Уралтрансбанк',
        'Уралфинанс',
        'Уральский Банк Реконструкции и Развития',
        'Уральский Межрегиональный Банк',
        'Уральский Финансовый Дом',
        'Ури Банк',
        'Уссури',
        'ФДБ',
        'ФИА-Банк',
        'Финам Банк',
        'Финанс Бизнес Банк',
        'Финансово-Промышленный Капитал',
        'Финансовый Капитал',
        'Финансовый Стандарт',
        'Финарс Банк',
        'Финпромбанк (ФПБ Банк)',
        'Финтрастбанк',
        'ФК Открытие (бывш. НОМОС-Банк)',
        'Флора-Москва',
        'Фольксваген Банк Рус',
        'Фондсервисбанк',
        'Фора-Банк',
        'Форбанк',
        'Форус Банк',
        'Форштадт',
        'Фьючер',
        'Хакасский Муниципальный Банк',
        'Ханты-Мансийский банк Открытие',
        'Химик',
        'Хлынов',
        'Хованский',
        'Холдинвестбанк',
        'Холмск',
        'Хоум Кредит Банк',
        'Центр-инвест',
        'Центрально-Азиатский',
        'Центрально-Европейский Банк',
        'Центркомбанк',
        'ЦентроКредит',
        'Церих',
        'Чайна Констракшн',
        'Чайнасельхозбанк',
        'Челиндбанк',
        'Челябинвестбанк',
        'Черноморский банк развития и реконструкции',
        'Чувашкредитпромбанк',
        'Эйч-Эс-Би-Си Банк (HSBC)',
        'Эко-Инвест',
        'Экономбанк',
        'Экономикс-Банк',
        'Экси-Банк',
        'Эксперт Банк',
        'Экспобанк',
        'Экспресс-Волга',
        'Экспресс-Кредит',
        'Эл Банк',
        'Элита',
        'Эльбин',
        'Энергобанк',
        'Энергомашбанк',
        'Энерготрансбанк',
        'Эно',
        'Энтузиастбанк',
        'Эргобанк',
        'Ю Би Эс Банк',
        'ЮГ-Инвестбанк',
        'Югра',
        'Южный Региональный Банк',
        'ЮМК',
        'Юниаструм Банк',
        'ЮниКредит Банк',
        'Юнистрим',
        'Япы Креди Банк Москва',
        'ЯР-Банк',
        'Яринтербанк',
        'Ярославич',
        'K2 Банк',
        'АББ',
        'Абсолют Банк',
        'Авангард',
        'Аверс',
        'Автоградбанк',
        'АвтоКредитБанк',
        'Автоторгбанк',
        'Агроинкомбанк',
        'Агропромкредит',
        'Агророс',
        'Агросоюз',
        'Адамон Банк',
        'Адамон Банк Московский филиал',
        'Аделантбанк',
        'Адмиралтейский',
        'Азиатско-Тихоокеанский Банк',
        'Азимут',
        'Азия Банк',
        'Азия-Инвест Банк',
        'Ай-Си-Ай-Си-Ай Банк (ICICI)',
        'Айви Банк',
        'АйМаниБанк',
        'Ак Барс',
        'Акибанк',
        'Аккобанк',
        'Акрополь',
        'Аксонбанк',
        'Актив Банк',
        'АктивКапитал Банк',
        'АктивКапитал Банк Московский филиал',
        'АктивКапитал Банк Санкт-Петербургский филиал',
        'Акцент',
        'Акцепт',
        'Акция',
        'Алданзолотобанк',
        'Александровский',
        'Алеф-Банк',
        'Алжан',
        'Алмазэргиэнбанк',
        'АлтайБизнес-Банк',
        'Алтайкапиталбанк',
        'Алтынбанк',
        'Альба Альянс',
        'Альта-Банк',
        'Альтернатива',
        'Альфа-Банк',
        'АМБ Банк',
        'Америкэн Экспресс Банк',
        'Анелик РУ',
        'Анкор Банк',
        'Анталбанк',
        'Апабанк',
        'Аресбанк',
        'Арзамас',
        'Арксбанк',
        'Арсенал',
        'Аспект',
        'Ассоциация',
        'БайкалБанк',
        'БайкалИнвестБанк',
        'Байкалкредобанк',
        'Балаково-Банк',
        'Балтийский Банк',
        'Балтика',
        'Балтинвестбанк',
        'Банк "Акцент" Московский филиал',
        'Банк "МБА-Москва"',
        'Банк "Санкт-Петербург"',
        'Банк АВБ',
        'Банк БКФ',
        'Банк БФА',
        'Банк БЦК-Москва',
        'Банк Город',
        'Банк Жилищного Финансирования',
        'Банк Инноваций и Развития',
        'Банк Интеза',
        'Банк ИТБ',
        'Банк Казани',
        'Банк Китая (Элос)',
        'Банк Кредит Свисс',
        'Банк МБФИ',
        'Банк Москвы',
        'Банк на Красных Воротах',
        'Банк Оранжевый (бывш. Промсервисбанк)',
        'Банк оф Токио-Мицубиси',
        'Банк Премьер Кредит',
        'Банк ПСА Финанс Рус',
        'Банк Развития Технологий',
        'Банк Расчетов и Сбережений',
        'Банк Раунд',
        'Банк РСИ',
        'Банк Сберегательно-кредитного сервиса',
        'Банк СГБ',
        'Банк Торгового Финансирования',
        'Банк Финсервис',
        'Банк Экономический Союз',
        'Банкирский Дом',
        'Банкхаус Эрбе',
        'Башкомснаббанк',
        'Башпромбанк',
        'ББР Банк',
        'Белгородсоцбанк',
        'Бенифит-Банк',
        'Берейт',
        'Бест Эффортс Банк',
        'Бизнес для Бизнеса',
        'Бинбанк',
        'БИНБАНК кредитные карты',
        'Бинбанк Мурманск',
        'БКС  Инвестиционный Банк',
        'БМВ Банк',
        'БНП Париба Банк',
        'Богородский',
        'Богородский Муниципальный Банк',
        'Братский АНКБ',
        'БСТ-Банк',
        'Булгар Банк',
        'Бум-Банк',
        'Бумеранг',
        'БФГ-Кредит',
        'БыстроБанк',
        'Вакобанк',
        'Вега-Банк',
        'Век',
        'Великие Луки Банк',
        'Венец',
        'Верхневолжский',
        'Верхневолжский  Крымский филиал',
        'Верхневолжский  Московский филиал',
        'Верхневолжский  Невский филиал',
        'Верхневолжский  Таврический филиал',
        'Верхневолжский  Ярославский филиал',
        'Веста',
        'Вестинтербанк',
        'Взаимодействие',
        'Викинг',
        'Витабанк',
        'Витязь',
        'Вкабанк',
        'Владбизнесбанк',
        'Владпромбанк',
        'Внешпромбанк',
        'Внешфинбанк',
        'Внешэкономбанк',
        'Военно-Промышленный Банк',
        'Возрождение',
        'Вокбанк',
        'Вологдабанк',
        'Вологжанин',
        'Воронеж',
        'Восточно-Европейский Трастовый Банк',
        'Восточный Экспресс Банк',
        'ВостСибтранскомбанк',
        'ВРБ Москва',
        'Всероссийский Банк Развития Регионов',
        'ВТБ',
        'ВТБ 24',
        'ВУЗ-Банк',
        'Выборг-Банк',
        'Выборг-Банк  Московский филиал',
        'Вэлтон Банк',
        'Вятич',
        'Вятка-Банк',
        'Гагаринский',
        'Газбанк',
        'Газнефтьбанк',
        'Газпромбанк',
        'Газстройбанк',
        'Газтрансбанк',
        'Газэнергобанк',
        'Ганзакомбанк',
        'Гарант-Инвест',
        'Гаранти Банк  Москва',
        'Геленджик-Банк',
        'Генбанк',
        'Геобанк',
        'Гефест',
        'Глобус',
        'Глобэкс',
        'Голдман Сакс Банк',
        'Горбанк',
        'ГПБ-Ипотека',
        'Гранд Инвест Банк',
        'Гринкомбанк',
        'Гринфилдбанк',
        'Грис-Банк',
        'Гута-Банк',
        'Далена',
        'Далетбанк',
        'Далта-Банк',
        'Дальневосточный Банк',
        'Данске Банк',
        'Девон-Кредит',
        'ДельтаКредит',
        'Денизбанк Москва',
        'Держава',
        'Дж. П.&nbsp;Морган Банк',
        'Джаст Банк',
        'Джей энд Ти Банк',
        'Дил-Банк',
        'Динамичные Системы',
        'Дойче Банк',
        'Долинск',
        'Дом-Банк',
        'Дон-Тексбанк',
        'Донкомбанк',
        'Донхлеббанк',
        'Дорис Банк',
        'Дружба',
        'ЕАТП Банк',
        'Евразийский Банк',
        'Евроазиатский Инвестиционный Банк',
        'ЕвроАксис Банк',
        'Евроальянс',
        'Еврокапитал-Альянс',
        'Еврокоммерц',
        'Еврокредит',
        'Евромет',
        'Европейский Стандарт',
        'Европлан Банк',
        'ЕвроситиБанк',
        'Еврофинанс Моснарбанк',
        'Единственный',
        'Единый Строительный Банк',
        'Екатеринбург',
        'Екатерининский',
        'Енисей',
        'Енисейский Объединенный Банк',
        'Ермак',
        'Живаго-Банк',
        'Жилкредит',
        'Жилстройбанк',
        'Запсибкомбанк',
        'Заречье',
        'Заубер Банк',
        'Земкомбанк',
        'Земский Банк',
        'Зенит',
        'Зенит Сочи',
        'Зернобанк',
        'Зираат Банк',
        'Златкомбанк',
        'И.Д.Е.А. Банк',
        'Иваново',
        'Идеалбанк',
        'Ижкомбанк',
        'ИК Банк',
        'Икано Банк',
        'Инбанк',
        'Инвест-Экобанк',
        'Инвестиционный Банк Кубани',
        'Инвестиционный Республиканский Банк',
        'Инвестиционный Союз',
        'Инвесткапиталбанк',
        'Инвестсоцбанк',
        'Инвестторгбанк',
        'ИНГ Банк',
        'Индустриальный Сберегательный Банк',
        'Инкаробанк',
        'Интерактивный Банк',
        'Интеркоммерц Банк',
        'Интеркоопбанк',
        'Интеркредит',
        'Интернациональный Торговый Банк',
        'Интерпрогрессбанк',
        'Интерпромбанк',
        'Интехбанк',
        'Информпрогресс',
        'Ипозембанк',
        'ИпоТек Банк',
        'Иронбанк',
        'ИРС',
        'Итуруп',
        'Ишбанк',
        'Йошкар-Ола',
        'Калуга',
        'Камский Горизонт',
        'Камский Коммерческий Банк',
        'Камчаткомагропромбанк',
        'Канский',
        'Капитал',
        'Капиталбанк',
        'Кедр',
        'Кемсоцинбанк',
        'Кетовский Коммерческий Банк',
        'Киви Банк',
        'Классик Эконом Банк',
        'Клиентский',
        'Кольцо Урала',
        'Коммерцбанк (Евразия)',
        'Коммерческий Банк Развития',
        'Коммерческий Индо Банк',
        'Консервативный Коммерческий Банк',
        'Констанс-Банк',
        'Континенталь',
        'Конфидэнс Банк',
        'Кор',
        'Кореа Эксчендж Банк Рус',
        'Королевский Банк Шотландии',
        'Космос',
        'Костромаселькомбанк',
        'Кошелев-Банк',
        'Крайинвестбанк',
        'Кранбанк',
        'Креди Агриколь КИБ',
        'Кредит Европа Банк',
        'Кредит Урал Банк',
        'Кредит Экспресс',
        'Кредит-Москва',
        'Кредитинвест',
        'Кредо Финанс',
        'Кредпромбанк',
        'Кремлевский',
        'Крокус-Банк',
        'Крона-Банк',
        'Кросна-Банк',
        'Кроссинвестбанк',
        'Крыловский',
        'КС Банк',
        'Кубанский Универсальный Банк',
        'Кубань Кредит',
        'Кубаньторгбанк',
        'Кузбассхимбанк',
        'Кузнецкбизнесбанк',
        'Кузнецкий',
        'Кузнецкий Мост',
        'Курган',
        'Курскпромбанк',
        'Лада-Кредит',
        'Лайтбанк',
        'Ланта-Банк',
        'Левобережный',
        'Легион',
        'Леноблбанк',
        'Лесбанк',
        'Лето Банк',
        'Липецккомбанк',
        'Логос',
        'Локо-Банк',
        'Лэнд-Банк',
        'М2М Прайвет Банк',
        'Майкопбанк',
        'Майский',
        'МАК-Банк',
        'Максима',
        'Максимум',
        'МАСТ-Банк',
        'Мастер-Капитал',
        'МВС Банк',
        'МДМ Банк',
        'Мегаполис',
        'Международный Акционерный Банк',
        'Международный Банк Развития',
        'Международный Банк Санкт-Петербурга (МБСП)',
        'Международный Коммерческий Банк',
        'Международный Расчетный Банк',
        'Международный Строительный Банк',
        'Международный Финансовый Клуб',
        'Межотраслевая Банковская Корпорация',
        'Межрегиональный Банк Реконструкции',
        'Межрегиональный Клиринговый Банк',
        'Межрегиональный Почтовый Банк',
        'Межрегиональный промышленно-строительный банк',
        'Межрегионбанк',
        'Межтопэнергобанк',
        'Межтрастбанк',
        'Мерседес-Бенц Банк Рус',
        'Металлинвестбанк',
        'Металлург',
        'Меткомбанк (Каменск-Уральский)',
        'Меткомбанк (Череповец)',
        'Метробанк',
        'Метрополь',
        'Мидзухо Банк',
        'Мико-Банк',
        'Милбанк',
        'Миллениум Банк',
        'Мир Бизнес Банк',
        'Мираф-Банк',
        'Мираф-Банк  Московский филиал',
        'Миръ',
        'Михайловский ПЖСБ',
        'Морган Стэнли Банк',
        'Морской Банк',
        'Мосводоканалбанк',
        'Москва',
        'Москва-Сити',
        'Московский Вексельный Банк',
        'Московский Индустриальный Банк',
        'Московский Коммерческий Банк',
        'Московский Кредитный Банк',
        'Московский Национальный Инвестиционный Банк',
        'Московский Нефтехимический Банк',
        'Московский Областной Банк',
        'Московско-Парижский Банк',
        'Московское Ипотечное Агентство',
        'Москоммерцбанк',
        'Мосстройэкономбанк (М Банк)',
        'Мострансбанк',
        'Мосуралбанк',
        'МС Банк Рус',
        'МСП Банк',
        'МТИ-Банк',
        'МТС Банк',
        'Муниципальный Камчатпрофитбанк',
        'Мурманский Социальный Коммерческий Банк',
        'МФБанк',
        'Н-Банк',
        'Нальчик',
        'Наратбанк',
        'Народный Банк',
        'Народный Банк Республики Тыва',
        'Народный Доверительный Банк',
        'Народный Земельно-Промышленный Банк',
        'Народный Инвестиционный Банк',
        'Натиксис Банк',
        'Нацинвестпромбанк',
        'Национальная Факторинговая Компания',
        'Национальный Банк "Траст"',
        'Национальный Банк Взаимного Кредита',
        'Национальный Банк Сбережений',
        'Национальный Залоговый Банк',
        'Национальный Клиринговый Банк',
        'Национальный Клиринговый Центр',
        'Национальный Корпоративный Банк',
        'Национальный Резервный Банк',
        'Национальный Стандарт',
        'Наш Дом',
        'НБД-Банк',
        'НБК-Банк',
        'Невастройинвест',
        'Невский Банк',
        'Нейва',
        'Нерюнгрибанк',
        'Нефтепромбанк',
        'Нефтяной Альянс',
        'Нижневолжский Коммерческий Банк',
        'Нико-Банк',
        'НК Банк',
        'НоваховКапиталБанк',
        'Новация',
        'Новикомбанк',
        'Новобанк',
        'Новое Время',
        'Новокиб',
        'Новопокровский',
        'Новый Век',
        'Новый Кредитный Союз',
        'Новый Московский Банк',
    ];

    protected static $countryCode = 'RU';

    protected static $regionCodes = array(
        '01',
        '03',
        '04',
        '05',
        '07',
        '08',
        '10',
        '11',
        '12',
        '14',
        '15',
        '17',
        '18',
        '19',
        '20',
        '22',
        '24',
        '25',
        '26',
        '27',
        '28',
        '29',
        '30',
        '32',
        '33',
        '34',
        '35',
        '36',
        '37',
        '38',
        '40',
        '41',
        '42',
        '44',
        '45',
        '46',
        '47',
        '49',
        '50',
        '52',
        '53',
        '54',
        '56',
        '57',
        '58',
        '60',
        '61',
        '63',
        '64',
        '65',
        '66',
        '67',
        '68',
        '69',
        '70',
        '71',
        '73',
        '75',
        '76',
        '77',
        '78',
        '79',
        '80',
        '81',
        '82',
        '83',
        '84',
        '85',
        '86',
        '87',
        '88',
        '89',
        '90',
        '91',
        '92',
        '93',
        '94',
        '95',
        '96',
        '97',
        '98',
        '99'
    );

    protected static $departmentCodeFormats = array(
        '0#',
        '1#',
        '2#',
        '3#',
        '4#',
        '5#',
        '6#',
        '7#',
        '8#',
        '9#'
    );

    protected static $creditOrganizationCodeFormats = array(
        '05#',
        '06#',
        '07#',
        '08#',
        '09#',
        '1##',
        '2##',
        '3##',
        '4##',
        '5##',
        '6##',
        '7##',
        '8##',
        '9##',
    );

    protected static $organizationCodes = array(
        '01',
        '02',
        '03',
        '04'
    );

    protected static $currencyCodes = array(
        '008',
        '012',
        '032',
        '036',
        '044',
        '048',
        '050',
        '051',
        '052',
        '060',
        '064',
        '068',
        '072',
        '084',
        '090',
        '096',
        '104',
        '108',
        '116',
        '124',
        '132',
        '136',
        '144',
        '152',
        '156',
        '170',
        '174',
        '188',
        '191',
        '192',
        '203',
        '208',
        '214',
        '222',
        '230',
        '232',
        '238',
        '242',
        '262',
        '270',
        '292',
        '320',
        '324',
        '328',
        '332',
        '340',
        '344',
        '348',
        '352',
        '356',
        '360',
        '364',
        '368',
        '376',
        '388',
        '392',
        '398',
        '400',
        '404',
        '408',
        '410',
        '414',
        '417',
        '418',
        '422',
        '426',
        '430',
        '434',
        '440',
        '446',
        '454',
        '458',
        '462',
        '478',
        '480',
        '484',
        '496',
        '498',
        '504',
        '512',
        '516',
        '524',
        '532',
        '533',
        '548',
        '554',
        '558',
        '566',
        '578',
        '586',
        '590',
        '598',
        '600',
        '604',
        '608',
        '634',
        '643',
        '646',
        '654',
        '678',
        '682',
        '690',
        '694',
        '702',
        '704',
        '706',
        '710',
        '728',
        '748',
        '752',
        '756',
        '760',
        '764',
        '776',
        '780',
        '784',
        '788',
        '800',
        '807',
        '810',
        '818',
        '826',
        '834',
        '840',
        '858',
        '860',
        '882',
        '886',
        '894',
        '901',
        '931',
        '932',
        '933',
        '934',
        '936',
        '937',
        '938',
        '940',
        '941',
        '943',
        '944',
        '946',
        '947',
        '948',
        '949',
        '950',
        '951',
        '952',
        '953',
        '959',
        '960',
        '961',
        '962',
        '963',
        '964',
        '968',
        '969',
        '970',
        '971',
        '972',
        '973',
        '975',
        '976',
        '977',
        '978',
        '980',
        '981',
        '985',
        '986',
        '997',
        '998',
        '999'
    );

    protected static function getCheckingAccountCodes()
    {
        return array_merge(
            range(102, 110),
            array(
                203,
                204
            ),
            range(301, 330),
            range(401, 409),
            range(411, 426),
            array(
                430
            ),
            range(501, 527)
        );
    }

    /**
     * @example 'Новый Московский Банк'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }

    /**
     * Python project: https://github.com/joke2k/faker/blob/master/faker/providers/bank/ru_RU/__init__.py
     * Example of validation: http://www.kholenkov.ru/data-validation/bik/
     * @param string|null $region
     * @return string
     */
    public function bic($region = "")
    {
        if ($region === "") {
            $region = self::randomElement(self::$regionCodes);
        }
        $departmentCode = self::numerify(self::randomElement(self::$departmentCodeFormats));
        $creditOrganizationCode = self::numerify(self::randomElement(self::$creditOrganizationCodeFormats));
        return '04' . $region . $departmentCode . $creditOrganizationCode;
    }

    /**
     * Example of validation: http://www.kholenkov.ru/data-validation/rs/
     * @param string $bik
     * @return string
     */
    public function bankAccountNumber(string $bik): string
    {
        $account = self::randomElement(self::getCheckingAccountCodes());
        $organization = self::randomElement(self::$organizationCodes);
        $currency = self::randomElement(self::$currencyCodes);

        $accountNumber = $account . $organization . $currency . '0' . self::numerify('###########');
        $bankNumber = substr($bik, -3);
        $accountNumber[8] = self::getKey(
            $accountNumber,
            $bankNumber
        );
        return $accountNumber;
    }

    /**
     * Example of validation: http://www.kholenkov.ru/data-validation/ks/
     * @param string $bik
     * @return string
     */
    public function bankCorrAccountNumber(string $bik): string
    {
        $account = self::randomElement(self::getCheckingAccountCodes());
        $organization = self::randomElement(self::$organizationCodes);
        $currency = self::randomElement(self::$currencyCodes);

        $accountNumber = $account . $organization . $currency . '0' . self::numerify('###########');
        $bankNumber = '0' . substr($bik, 4, 2);
        $accountNumber[8] = self::getKey(
            $accountNumber,
            $bankNumber
        );
        return $accountNumber;
    }

    /**
     * @param string $accountNumber
     * @param string $bikKey
     * @return int
     */
    private static function getKey(string $accountNumber, string $bikKey): int
    {
        $source = $bikKey . $accountNumber;
        $checksum = 0;
        foreach ([7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1] as $i => $k) {
            $checksum += $k * ((int)$source[$i] % 10);
        }
        return (($checksum % 10) * 3) % 10;
    }
}

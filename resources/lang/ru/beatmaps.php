<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'discussion-posts' => [
        'store' => [
            'error' => 'Не удалось сохранить публикацию',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Не удалось обновить ответ',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'разрешить кудосу',
        'delete' => 'удалить',
        'deleted' => 'Удалено :editor в :delete_time',
        'deny_kudosu' => 'запретить кудосу',
        'edit' => 'изменить',
        'edited' => 'Последний раз изменён :editor в :update_time',
        'kudosu_denied' => 'Отказано от получения кудосу.',
        'message_placeholder' => 'Начинайте вводить здесь',
        'message_placeholder_deleted_beatmap' => 'Эта сложность была удалена и её нельзя обсуждать.',
        'message_type_select' => 'Выбрать тип комментария',
        'reply_notice' => 'Нажмите Enter для ответа.',
        'reply_placeholder' => 'Введите тут ответ',
        'require-login' => 'Войди для публикации или ответа', // Base text changed from "log" to "sign"
        'resolved' => 'Решено',
        'restore' => 'восстановить',
        'title' => 'Отзывы',

        'collapse' => [
            'all-collapse' => 'Скрыть всё',
            'all-expand' => 'Показать всё',
        ],

        'empty' => [
            'empty' => 'Нет отзывов!',
            'hidden' => 'Ни одно обсуждение не соответствует выбранному фильтру.',
        ],

        'message_hint' => [
            'in_general' => 'Этот пост пойдет в общее обсуждение. Чтобы изменить эту карту, начни своё сообщение с отметкой времени (к примеру 00:12:345).',
            'in_timeline' => 'Для изменения нескольких временных отметок, опубликуй несколько отметок (одна публикация на отметку).',
        ],

        'message_type' => [
            'hype' => 'Хайпнуть!',
            'mapper_note' => 'Заметка',
            'praise' => 'Хвала',
            'problem' => 'Проблема',
            'suggestion' => 'Запрос',
        ],

        'mode' => [
            'events' => 'История',
            'general' => 'Общее :scope', // без понятия где используется
            'timeline' => 'График',
            'scopes' => [
                'general' => 'Эта сложность',
                'generalAll' => 'Все сложности',
            ],
        ],

        'new' => [
            'timestamp' => 'Временная отметка',
            'timestamp_missing' => 'нажмите ctrl-c в режиме редактирования для получения временной отметки и добавь его!',
            'title' => 'Новый отзыв',
        ],

        'show' => [
            'title' => ':title сделанный :mapper',
        ],

        'sort' => [
            '_' => 'Отсортировано по:',
            'created_at' => 'дате создания',
            'timeline' => 'графику',
            'updated_at' => 'дате обновления',
        ],

        'stats' => [
            'deleted' => 'Удалено',
            'mapper_notes' => 'Заметки',
            'mine' => 'Мои',
            'pending' => 'Ожидающий',
            'praises' => 'Похвалы',
            'resolved' => 'Решено',
            'total' => 'Все',
        ],

        'status-messages' => [
            'approved' => 'Эта карта была одобрена :date!',
            'graveyard' => 'Эта карта не была обновлена с :date и похоже, что была заброшена создателем...',
            'loved' => 'Эта карта была признана "любимым" :date!',
            'ranked' => 'Эта карта была ранкнута :date!',
            'wip' => 'Заметьте: Эта карта была помечена незавершённой создателем.',
        ],

    ],

    'hype' => [
        'button' => 'Хайпнуть карту!',
        'button_done' => 'Уже хайпнута!',
        'confirm' => 'Вы уверены? Это действие отберёт один из :n хайпов и не может быть отменено.',
        'explanation' => 'Это сделает карту доступным для номинирования!',
        'explanation_guest' => 'Войдя в аккаунт, чтобы сделать карту доступным для номинирования!',
        'new_time' => 'Вы получите другой хайп :new_time.',
        'remaining' => 'У вас осталось :remaining хайпа.',
        'required_text' => 'Хайп: :current/:required',
        'section_title' => 'Прогресс хайпа',
        'title' => 'Хайпаните',
    ],

    'feedback' => [
        'button' => 'Оставить отзыв',
    ],

    'nominations' => [
        'disqualification_prompt' => 'Причина для дисквалификации?',
        'disqualified_at' => 'дисквалифицирован :time_ago (:reason).',
        'disqualified_no_reason' => 'причина не указана',
        'disqualify' => 'Дисквалифицировать',
        'incorrect_state' => 'Не удалось выполнить данную задачу, пробовал перезагрузить страницу?',
        'nominate' => 'Номинировать',
        'nominate_confirm' => 'Номинировать эту карту?',
        'nominated_by' => 'nominated by :users',
        'qualified' => 'Если больше не будет выявлено каких-либо проблем, карта получит рейтинговый статус примерно в :date.',
        'qualified_soon' => 'Если больше не будет выявлено каких-либо проблем, карта получит рейтинговый статус очень скоро.',
        'required_text' => 'Номинации: :current/:required',
        'reset_at' => 'Номинация сброшена :time_ago из-за новой проблемы в :discussion.',
        'reset_confirm' => 'Вы уверены? Сообщение о новой проблеме сбросит статус номинации.',
        'title' => 'Статус номинации',
        'unresolved_issues' => 'Вы должны решить все проблемы.',
    ],

    'listing' => [
        'search' => [
            'prompt' => 'начинай вводить ключевые слова ...',
            'options' => 'Больше настроек поиска',
            'not-found' => 'нет результатов',
            'not-found-quote' => '... увы, ничего не найдено.',
            'filters' => [
                'general' => 'Общее',
                'mode' => 'Режим игры',
                'status' => 'Статус',
                'genre' => 'Жанр',
                'language' => 'Язык',
                'extra' => 'Дополнительно',
                'rank' => 'Рейтинг',
            ],
        ],
        'mode' => 'Режим игры',
        'status' => 'Статус одобрения',
        'mapped-by' => 'автор :mapper',
        'source' => 'от :source',
        'load-more' => 'Загрузить ещё...',
    ],
    'general' => [
        'recommended' => 'рекомендуемая сложность',
        'converts' => 'включать конвертированные карты',
    ],
    'mode' => [
        'any' => 'Все',
        'osu' => 'osu!',
        'taiko' => 'osu!taiko',
        'fruits' => 'osu!catch',
        'mania' => 'osu!mania',
    ],
    'status' => [
        'any' => 'Все',
        'ranked-approved' => 'Рейтинговые и одобренные',
        'approved' => 'Одобренные',
        'loved' => 'Любимые',
        'faves' => 'Избранные',
        'pending' => 'Ожидающие',
        'graveyard' => 'Заброшенные', // TODO: найти перевод лучше
        'my-maps' => 'Мои карты',
    ],
    'genre' => [
        'any' => 'Все',
        'unspecified' => 'Неопределенные',
        'video-game' => 'Видео игры',
        'anime' => 'Аниме',
        'rock' => 'Рок',
        'pop' => 'Поп',
        'other' => 'Другой',
        'novelty' => 'Новый',
        'hip-hop' => 'Хип-хоп',
        'electronic' => 'Электроника', // TODO: найти перевод лучше
    ],
    'mods' => [
        '4K' => '4K',
        '5K' => '5K',
        '6K' => '6K',
        '7K' => '7K',
        '8K' => '8K',
        '9K' => '9K',
        'AP' => 'Auto Pilot',
        'DT' => 'Double Time',
        'EZ' => 'Easy Mode',
        'FI' => 'Fade In',
        'FL' => 'Flashlight',
        'HD' => 'Hidden',
        'HR' => 'Hard Rock',
        'HT' => 'Half Time',
        'NC' => 'Nightcore',
        'NF' => 'No Fail',
        'NM' => 'No mods',
        'PF' => 'Perfect',
        'Relax' => 'Relax',
        'SD' => 'Sudden Death',
        'SO' => 'Spun Out',
        'TD' => 'Touch Device',
    ],
    'language' => [
        'any' => 'Все',
        'english' => 'Английский',
        'chinese' => 'Китайский',
        'french' => 'Французский',
        'german' => 'Немецкий',
        'italian' => 'Итальянский',
        'japanese' => 'Японский',
        'korean' => 'Корейский',
        'spanish' => 'Испанский',
        'swedish' => 'Швецкий',
        'instrumental' => 'Инструментальный',
        'other' => 'Другой',
    ],
    'extra' => [
        'video' => 'Есть видео',
        'storyboard' => 'Есть сторибоард',
    ],
    'rank' => [
        'any' => 'Все',
        'XH' => 'Серебряный SS',
        'X' => 'SS',
        'SH' => 'Серебряный S',
        'S' => 'S',
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D',
    ],
];

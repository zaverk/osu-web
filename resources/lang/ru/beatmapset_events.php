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
    'event' => [
        'approve' => 'Одобрено.',
        'discussion_delete' => 'Модератор удалил обсуждение :discussion.',
        'discussion_post_delete' => 'Модератор удалил публикацию из обсуждения :discussion.',
        'discussion_post_restore' => 'Модератор восстановил публикацию в обсуждении :discussion.',
        'discussion_restore' => 'Модератор восстановил обсуждение :discussion.',
        'disqualify' => 'Дисквалифицирована :user. Причина: :text.',
        'issue_reopen' => 'Проблема в :discussion вновь решена.',
        'issue_resolve' => 'Проблема :discussion отмечена как решенная.',
        'kudosu_allow' => 'Кудосу из обсуждения :discussion были удалены.',
        'kudosu_deny' => 'Обсуждению :discussion отказано в кудосу.',
        'kudosu_gain' => 'Обсуждение :discussion от :user получило достаточно голосов для получения кудосу.',
        'kudosu_lost' => 'Обсуждение :discussion от :user потеряло голоса и присуждённые кудосу были удалены.',
        'kudosu_recalculate' => 'Кудосу за обсуждение :discussion были пересчитаны.',
        'nominate' => 'Номинировано :user.',
        'nomination_reset' => 'Новая проблема в :discussion вызвало сброс номинации.',
        'qualify' => 'Квалифицированна.',
        'rank' => 'Ранкнута.',
    ],

    'index' => [
        'title' => 'Beatmapset Events',
    ],

    'item' => [
        'content' => 'Content',
        'type' => 'Type',
    ],
];

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
    'admin' => [
        'warehouse' => 'Склад',
    ],

    'checkout' => [
        'cart_problems' => 'Ой-ой, у нас проблемы с вашей картой!',
        'cart_problems_edit' => 'Нажмите здесь, чтобы изменить это.',
        'declined' => 'Ваш платеж был отменен.',
        'error' => 'Возникла проблема с вашей покупкой :(',
        'old_cart' => 'Ваша корзина, кажется, устарела и была перезагружена, пожалуйста попробуйте еще раз.',
        'pay' => 'Оплатить с PayPal',
        'pending_checkout' => [
            'line_1' => 'Ваш предыдущий платеж был начат, но не был завершен.',
            'line_2' => 'Продолжите оформление заказа, выбрав способ оплаты, или :link чтобы отменить заказ.',
            'link_text' => 'нажмите здесь', 
        ],
        'delayed_shipping' => 'В настоящее время у нас много заказов. Ты можешь закать товар, но пожалуйста, помни, что его обработка может занять дополнительно 1-2 недели.',
    ],

    'discount' => 'вы сэкономите :percent%',

    'order' => [
        'item' => [
            'display_name' => [
                'supporter_tag' => ':name для :username (:duration)',
            ],
            'quantity' => 'Количество',
        ],
    ],

    'product' => [
        'name' => 'Название',

        'stock' => [
            'out' => 'В настоящее время товар не в наличии :(. Загляни сюда попозже.',
            'out_with_alternative' => 'Данный тип в настоящее время отсутствует на складе :(. Загляни сюда попозже.',
        ],

        'add_to_cart' => 'Добавить в корзину',
        'notify' => 'Напомнить мне о поступлении!',

        'notification_success' => 'Вы будете оповещены когда товар будет в наличии. Нажмите :link для отмены',
        'notification_remove_text' => 'сюда',

        'notification_in_stock' => 'Данный товар уже в наличии!',
    ],

    'supporter_tag' => [
        'gift' => 'подарок для игрока',
        'require_login' => [
            '_' => 'Вы должны :link для покупки osu!supporter тега!',
            'link_text' => 'войти', // Base text changed from "log" to "sign"
        ],
    ],

    'username_change' => [
        'check' => 'Введите имя, чтобы проверить его доступность!',
        'checking' => 'Проверяем доступность имени :username...',
        'require_login' => [
            '_' => 'ВЫ должны :link для смены ника!',
            'link_text' => 'войти', // Base text changed from "log" to "sign"
        ],
    ],
];

<?php

return [
    'commands' => [
        'usage' => [
            'whadd' => 'Используйте /whadd «ник юзверя»',
            'whrem' => 'Используйте /whrem «ник юзверя»',
        ],

        'info' => [
            'whadded' => 'Юзверь «{nick}» добавлен в белый список.',
            'whremoved' => 'Юзверь «{nick}» удален из белого списка',
        ],

        'error' => [
            'no-permission' => 'У Вас нет прав на «{cmd}».',
            'cmd-doesnt-exists' => 'Команда «{cmd}» не найдена!',
            'user-not-found' => 'Пользователь с ником «{nick}» не найден',
        ],
    ],
];

?>

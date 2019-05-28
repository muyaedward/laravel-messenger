<?php

return [

    'user_model' => App\User::class,

    'message_model' => Muyaedward\Messenger\Models\Message::class,

    'participant_model' => Muyaedward\Messenger\Models\Participant::class,

    'thread_model' => Muyaedward\Messenger\Models\Thread::class,

    /**
     * Define custom database table names - without prefixes.
     */
    'messages_table' => null,

    'participants_table' => null,

    'threads_table' => null,
];

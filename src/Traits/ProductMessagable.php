<?php

namespace Muyaedward\Messenger\Traits;

use Muyaedward\Messenger\Models\Message;
use Muyaedward\Messenger\Models\Models;
use Muyaedward\Messenger\Models\Participant;
use Muyaedward\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\Builder;

trait ProductMessagable
{
    /**
     * Message relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @codeCoverageIgnore
     */
    public function messages() {
        return $this->hasMany(Models::classname(Message::class));
    } 
}

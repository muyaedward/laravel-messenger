<?php

namespace Muyaedward\Messenger\Traits;

use Muyaedward\Messenger\Models\Message;
use Muyaedward\Messenger\Models\Models;

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

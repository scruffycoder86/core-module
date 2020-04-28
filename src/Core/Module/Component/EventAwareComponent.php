<?php

namespace DigitalClosuxe\Core\Module\Component
{
    interface EventAwareComponent
    {
        public function getEventDispatcher();
    }
}
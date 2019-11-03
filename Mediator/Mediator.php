<?php
interface Mediator
{
    public function notify($sender,$event);
}
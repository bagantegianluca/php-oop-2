<?php
class Pet
{
    public function __construct(public string $petType)
    {
        $this->petType = $petType;
    }
}

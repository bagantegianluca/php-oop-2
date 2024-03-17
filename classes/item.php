<?php
class Item
{
    public function __construct(public string $item, public string $description, public string $img, public float $price, public array $tags, public array $pets)
    {
        $this->item = $item;
        $this->description = $description;
        $this->img = $img;
        $this->price = $price;
        $this->tags = $tags;
        $this->pets = $pets;
    }
}

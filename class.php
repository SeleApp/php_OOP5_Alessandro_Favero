<?php

abstract class Category
{
    abstract public function getMyCategory(): string;
}

class Attualita extends Category
{
    public function getMyCategory(): string
    {
        return '<span>Attualita</span>';
    }
}

class Sport extends Category
{
    public function getMyCategory(): string
    {
        return '<span>Sport</span>';
    }
}

class Gossip extends Category
{
    public function getMyCategory(): string
    {
        return '<span>Gossip</span>';
    }
}

class Storia extends Category
{
    public function getMyCategory(): string
    {
        return '<span>Storia</span>';
    }
}

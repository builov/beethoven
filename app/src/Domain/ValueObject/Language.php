<?php

namespace App\Domain\ValueObject;

enum Language: string
{
    case RU = 'ru';
    case EN = 'en';
    case UND = 'und';
}
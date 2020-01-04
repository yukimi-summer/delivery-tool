<?php

namespace App\Enums;

use App\Balloons;
use BenSampo\Enum\Enum;
use Exception;

/**
 * @method static static Text()
 * @method static static Image()
 */
final class BalloonType extends Enum
{
    const Text =   1;
    const Image =   2;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::Text:
                return 'テキスト';
            case self::Image:
                return '画像';
            default:
                throw new Exception("Illegal argument passed. value=[{$value}]");
        }
    }

    public static function getValue($value): int
    {
        switch ($value) {
            case 'テキスト':
                return self::Text;
            case '画像':
                return self::Image;
            default:
                throw new Exception("Illegal argument passed. value=[{$value}]");
        }
    }

    public static function getDetails(Balloons $balloon)
    {
        switch ($balloon->type) {
            case self::Text:
                return $balloon->text;
            case self::Image:
                return "<div class=\"balloon-image-preview img-thumbnail\"><img src=\"{$balloon->original_contents_uri}\"></div>";
            default:
                return '';
        }
    }
}

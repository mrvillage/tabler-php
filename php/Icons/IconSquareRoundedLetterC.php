<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareRoundedLetterC extends \Tabler\Icon {
    public static function getName(): string {
        return 'square-rounded-letter-c';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 10a2 2 0 1 0 -4 0v4a2 2 0 1 0 4 0" />   <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
        SVG;
    }
}
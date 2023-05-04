<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterZ extends Tabler\Icon {
    public static function getName(): string {
        return 'letter-z';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4h10l-10 16h10" />
        SVG;
    }
}
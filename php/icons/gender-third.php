<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderThird extends Tabler\Icon {
    public static function getName(): string {
        return 'gender-third';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 12a5 5 0 1 0 10 0a5 5 0 0 0 -10 0z" />   <path d="M11 12h-3" />   <path d="M8 12l-5 -4v8z" />
        SVG;
    }
}
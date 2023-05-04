<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathOff extends Tabler\Icon {
    public static function getName(): string {
        return 'math-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 19l2.5 -2.5" />   <path d="M18.5 14.5l1.5 -1.5" />   <path d="M3 3l18 18" />   <path d="M19 5h-7l-.646 2.262" />   <path d="M10.448 10.431l-2.448 8.569l-3 -6h-2" />
        SVG;
    }
}
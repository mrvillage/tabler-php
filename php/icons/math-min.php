<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathMin extends Icon {
    public static function getName(): string {
        return 'math-min';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 17a2 2 0 1 1 0 4a2 2 0 0 1 0 -4z" />   <path d="M3 4c0 8.75 4 14 7 14.5" />   <path d="M14 18.5c3 -.5 7 -5.75 7 -14.5" />
        SVG;
    }
}
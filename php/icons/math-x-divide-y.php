<?php
require_once(__DIR__ . '/../Icon.php');

class IconMathXDivideY extends Icon {
    public static function getName(): string {
        return 'math-x-divide-y';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 3l6 6" />   <path d="M9 9l6 -6" />   <path d="M9 15l3 4.5" />   <path d="M15 15l-4.5 7" />   <path d="M5 12h14" />
        SVG;
    }
}
<?php
require_once('../Icon.php');

class IconMathFunctionY extends Icon {
    public static function getName(): string {
        return 'math-function-y';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19a2 2 0 0 0 2 2c2 0 2 -4 3 -9s1 -9 3 -9a2 2 0 0 1 2 2" />   <path d="M5 12h6" />   <path d="M15 12l3 5.063" />   <path d="M21 12l-4.8 9" />
        SVG;
    }
}
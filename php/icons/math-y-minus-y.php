<?php
require_once('../Icon.php');

class IconMathYMinusY extends Icon {
    public static function getName(): string {
        return 'math-y-minus-y';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 9l3 5.063" />   <path d="M8 9l-4.8 9" />   <path d="M16 9l3 5.063" />   <path d="M22 9l-4.8 9" />   <path d="M10 12h4" />
        SVG;
    }
}
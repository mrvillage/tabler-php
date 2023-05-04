<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathXMinusY extends \Tabler\Icon {
    public static function getName(): string {
        return 'math-x-minus-y';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 9l6 6" />   <path d="M2 15l6 -6" />   <path d="M16 9l3 5.063" />   <path d="M22 9l-4.8 9" />   <path d="M10 12h4" />
        SVG;
    }
}
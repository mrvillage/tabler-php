<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathXy extends Icon {
    public static function getName(): string {
        return 'math-xy';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 9l3 5.063" />   <path d="M4 9l6 6" />   <path d="M4 15l6 -6" />   <path d="M20 9l-4.8 9" />
        SVG;
    }
}
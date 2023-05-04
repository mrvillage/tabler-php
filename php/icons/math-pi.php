<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathPi extends Tabler\Icon {
    public static function getName(): string {
        return 'math-pi';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 20v-16" />   <path d="M17 4v16" />   <path d="M20 4h-16" />
        SVG;
    }
}
<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathNot extends \Tabler\Icon {
    public static function getName(): string {
        return 'math-not';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12h14v4" />
        SVG;
    }
}
<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconParentheses extends Tabler\Icon {
    public static function getName(): string {
        return 'parentheses';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4a12.25 12.25 0 0 0 0 16" />   <path d="M17 4a12.25 12.25 0 0 1 0 16" />
        SVG;
    }
}
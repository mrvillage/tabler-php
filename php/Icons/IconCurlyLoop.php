<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurlyLoop extends \Tabler\Icon {
    public static function getName(): string {
        return 'curly-loop';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 8c-4 0 -7 2 -7 5a3 3 0 0 0 6 0c0 -3 -2.5 -5 -8 -5s-8 2 -8 5a3 3 0 0 0 6 0c0 -3 -3 -5 -7 -5" />
        SVG;
    }
}
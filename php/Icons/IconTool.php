<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTool extends \Tabler\Icon {
    public static function getName(): string {
        return 'tool';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
        SVG;
    }
}
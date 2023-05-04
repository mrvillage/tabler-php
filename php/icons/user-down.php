<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconUserDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'user-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />   <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.342 0 .674 .043 .99 .124" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />
        SVG;
    }
}
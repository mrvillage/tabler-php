<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCrane extends \Tabler\Icon {
    public static function getName(): string {
        return 'crane';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 21h6" />   <path d="M9 21v-18l-6 6h18" />   <path d="M9 3l10 6" />   <path d="M17 9v4a2 2 0 1 1 -2 2" />
        SVG;
    }
}
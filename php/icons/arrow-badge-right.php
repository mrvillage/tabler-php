<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBadgeRight extends Icon {
    public static function getName(): string {
        return 'arrow-badge-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 7h-6l4 5l-4 5h6l4 -5z" />
        SVG;
    }
}
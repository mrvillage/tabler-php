<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowBadgeLeft extends Icon {
    public static function getName(): string {
        return 'arrow-badge-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 17h6l-4 -5l4 -5h-6l-4 5z" />
        SVG;
    }
}
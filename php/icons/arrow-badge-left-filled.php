<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowBadgeLeftFilled extends Icon {
    public static function getName(): string {
        return 'arrow-badge-left-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 6h-6a1 1 0 0 0 -.78 .375l-4 5a1 1 0 0 0 0 1.25l4 5a1 1 0 0 0 .78 .375h6l.112 -.006a1 1 0 0 0 .669 -1.619l-3.501 -4.375l3.5 -4.375a1 1 0 0 0 -.78 -1.625z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}
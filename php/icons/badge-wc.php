<?php
require_once(__DIR__ . '../Icon.php');

class IconBadgeWc extends Icon {
    public static function getName(): string {
        return 'badge-wc';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M6.5 9l.5 6l2 -4l2 4l.5 -6" />   <path d="M17 10.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" />
        SVG;
    }
}
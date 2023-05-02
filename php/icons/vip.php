<?php
require_once('../Icon.php');

class IconVip extends Icon {
    public static function getName(): string {
        return 'vip';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5h18" />   <path d="M3 19h18" />   <path d="M4 9l2 6h1l2 -6" />   <path d="M12 9v6" />   <path d="M16 15v-6h2a2 2 0 1 1 0 4h-2" />
        SVG;
    }
}
<?php
require_once('../Icon.php');

class IconDatabaseMinus extends Icon {
    public static function getName(): string {
        return 'database-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />   <path d="M4 6v6c0 1.657 3.582 3 8 3s8 -1.343 8 -3v-6" />   <path d="M4 12v6c0 1.657 3.582 3 8 3c.164 0 .328 -.002 .49 -.006" />   <path d="M20 15v-3" />   <path d="M16 19h6" />
        SVG;
    }
}
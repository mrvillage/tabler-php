<?php
require_once(__DIR__ . '../Icon.php');

class IconBadge extends Icon {
    public static function getName(): string {
        return 'badge';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 17v-13l-5 3l-5 -3v13l5 3z" />
        SVG;
    }
}
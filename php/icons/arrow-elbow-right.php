<?php
require_once('../Icon.php');

class IconArrowElbowRight extends Icon {
    public static function getName(): string {
        return 'arrow-elbow-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 14v-6h-6" />   <path d="M21 8l-9 9l-9 -9" />
        SVG;
    }
}
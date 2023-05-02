<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowElbowLeft extends Icon {
    public static function getName(): string {
        return 'arrow-elbow-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 14v-6h6" />   <path d="M3 8l9 9l9 -9" />
        SVG;
    }
}
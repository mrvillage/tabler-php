<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandDeviantart extends Icon {
    public static function getName(): string {
        return 'brand-deviantart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 3v4l-3.857 6h3.857v4h-6.429l-2.571 4h-3v-4l3.857 -6h-3.857v-4h6.429l2.571 -4z" />
        SVG;
    }
}
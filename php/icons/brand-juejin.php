<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandJuejin extends Icon {
    public static function getName(): string {
        return 'brand-juejin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12l10 7.422l10 -7.422" />   <path d="M7 9l5 4l5 -4" />   <path d="M11 6l1 .8l1 -.8l-1 -.8z" />
        SVG;
    }
}
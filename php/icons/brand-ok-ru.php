<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandOkRu extends Icon {
    public static function getName(): string {
        return 'brand-ok-ru';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M20 12c0 8 0 8 -8 8s-8 0 -8 -8s0 -8 8 -8s8 0 8 8z" />   <path d="M9.5 13c1.333 .667 3.667 .667 5 0" />   <path d="M9.5 17l2.5 -3l2.5 3" />   <path d="M12 13.5v.5" />
        SVG;
    }
}
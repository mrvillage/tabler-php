<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandXbox extends Icon {
    public static function getName(): string {
        return 'brand-xbox';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M6.5 5c7.72 2.266 10.037 7.597 12.5 12.5" />   <path d="M17.5 5c-7.72 2.266 -10.037 7.597 -12.5 12.5" />
        SVG;
    }
}
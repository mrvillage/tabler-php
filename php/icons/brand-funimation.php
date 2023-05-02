<?php
require_once('../Icon.php');

class IconBrandFunimation extends Icon {
    public static function getName(): string {
        return 'brand-funimation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M8 13h8a4 4 0 1 1 -8 0z" />
        SVG;
    }
}
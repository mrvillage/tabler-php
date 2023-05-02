<?php
require_once('../Icon.php');

class IconDiscount extends Icon {
    public static function getName(): string {
        return 'discount';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15l6 -6" />   <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />   <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        SVG;
    }
}
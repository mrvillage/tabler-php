<?php
require_once('../Icon.php');

class IconMilkshake extends Icon {
    public static function getName(): string {
        return 'milkshake';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 10a5 5 0 0 0 -10 0" />   <path d="M6 10m0 1a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />   <path d="M7 13l1.81 7.243a1 1 0 0 0 .97 .757h4.44a1 1 0 0 0 .97 -.757l1.81 -7.243" />   <path d="M12 5v-2" />
        SVG;
    }
}
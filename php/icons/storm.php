<?php
require_once('../Icon.php');

class IconStorm extends Icon {
    public static function getName(): string {
        return 'storm';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M5.369 14.236c-1.839 -3.929 -1.561 -7.616 -.704 -11.236" />   <path d="M18.63 9.76c1.837 3.928 1.561 7.615 .703 11.236" />
        SVG;
    }
}
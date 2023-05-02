<?php
require_once(__DIR__ . '../Icon.php');

class IconChessBishop extends Icon {
    public static function getName(): string {
        return 'chess-bishop';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 16l-1.447 .724a1 1 0 0 0 -.553 .894v2.382h12v-2.382a1 1 0 0 0 -.553 -.894l-1.447 -.724h-8z" />   <path d="M12 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9.5 16c-1.667 0 -2.5 -1.669 -2.5 -3c0 -3.667 1.667 -6 5 -7c3.333 1 5 3.427 5 7c0 1.284 -.775 2.881 -2.325 3l-.175 0h-5z" />   <path d="M15 8l-3 3" />   <path d="M12 5v1" />
        SVG;
    }
}
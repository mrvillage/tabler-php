<?php
require_once(__DIR__ . '../Icon.php');

class IconMasksTheaterOff extends Icon {
    public static function getName(): string {
        return 'masks-theater-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 9c.058 0 .133 0 .192 0h6.616a2 2 0 0 1 1.992 2.183l-.554 6.041m-1.286 2.718a3.99 3.99 0 0 1 -2.71 1.058h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182" />   <path d="M18 13h.01" />   <path d="M15 16.5c.657 .438 1.313 .588 1.97 .451" />   <path d="M8.632 15.982a4.05 4.05 0 0 1 -.382 .018h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 .514 -1.531a1.99 1.99 0 0 1 1.286 -.652m4 0h2.808a2 2 0 0 1 2 2" />   <path d="M6 8h.01" />   <path d="M6 12c.764 -.51 1.528 -.63 2.291 -.36" />   <path d="M3 3l18 18" />
        SVG;
    }
}
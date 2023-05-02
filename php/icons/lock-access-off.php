<?php
require_once(__DIR__ . '../Icon.php');

class IconLockAccessOff extends Icon {
    public static function getName(): string {
        return 'lock-access-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8v-2c0 -.554 .225 -1.055 .588 -1.417" />   <path d="M4 16v2a2 2 0 0 0 2 2h2" />   <path d="M16 4h2a2 2 0 0 1 2 2v2" />   <path d="M16 20h2c.55 0 1.05 -.222 1.41 -.582" />   <path d="M15 11a1 1 0 0 1 1 1m-.29 3.704a1 1 0 0 1 -.71 .296h-6a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h2" />   <path d="M10 11v-1m1.182 -2.826a2 2 0 0 1 2.818 1.826v1" />   <path d="M3 3l18 18" />
        SVG;
    }
}
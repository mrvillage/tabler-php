<?php
require_once(__DIR__ . '/../Icon.php');

class IconHeartRateMonitor extends Icon {
    public static function getName(): string {
        return 'heart-rate-monitor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />   <path d="M7 20h10" />   <path d="M9 16v4" />   <path d="M15 16v4" />   <path d="M7 10h2l2 3l2 -6l1 3h3" />
        SVG;
    }
}
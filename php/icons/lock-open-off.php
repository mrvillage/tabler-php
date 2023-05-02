<?php
require_once(__DIR__ . '/../Icon.php');

class IconLockOpenOff extends Icon {
    public static function getName(): string {
        return 'lock-open-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 11h2a2 2 0 0 1 2 2v2m0 4a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h4" />   <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M8 11v-3m.347 -3.631a4 4 0 0 1 7.653 1.631" />   <path d="M3 3l18 18" />
        SVG;
    }
}
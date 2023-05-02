<?php
require_once(__DIR__ . '/../Icon.php');

class IconPinned extends Icon {
    public static function getName(): string {
        return 'pinned';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 4v6l-2 4v2h10v-2l-2 -4v-6" />   <path d="M12 16l0 5" />   <path d="M8 4l8 0" />
        SVG;
    }
}
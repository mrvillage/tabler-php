<?php
require_once(__DIR__ . '../Icon.php');

class IconSection extends Icon {
    public static function getName(): string {
        return 'section';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 20h.01" />   <path d="M4 20h.01" />   <path d="M8 20h.01" />   <path d="M12 20h.01" />   <path d="M16 20h.01" />   <path d="M20 4h.01" />   <path d="M4 4h.01" />   <path d="M8 4h.01" />   <path d="M12 4h.01" />   <path d="M16 4l0 .01" />   <path d="M4 8m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />
        SVG;
    }
}
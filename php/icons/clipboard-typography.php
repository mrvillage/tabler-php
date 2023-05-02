<?php
require_once(__DIR__ . '/../Icon.php');

class IconClipboardTypography extends Icon {
    public static function getName(): string {
        return 'clipboard-typography';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />   <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />   <path d="M9 12v-1h6v1" />   <path d="M12 11v6" />   <path d="M11 17h2" />
        SVG;
    }
}
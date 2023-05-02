<?php
require_once(__DIR__ . '../Icon.php');

class IconMedicineSyrup extends Icon {
    public static function getName(): string {
        return 'medicine-syrup';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 21h8a1 1 0 0 0 1 -1v-10a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v10a1 1 0 0 0 1 1z" />   <path d="M10 14h4" />   <path d="M12 12v4" />   <path d="M10 7v-3a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3" />
        SVG;
    }
}
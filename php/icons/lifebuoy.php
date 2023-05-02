<?php
require_once(__DIR__ . '../Icon.php');

class IconLifebuoy extends Icon {
    public static function getName(): string {
        return 'lifebuoy';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M15 15l3.35 3.35" />   <path d="M9 15l-3.35 3.35" />   <path d="M5.65 5.65l3.35 3.35" />   <path d="M18.35 5.65l-3.35 3.35" />
        SVG;
    }
}
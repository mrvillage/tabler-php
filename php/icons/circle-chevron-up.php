<?php
require_once(__DIR__ . '/../Icon.php');

class IconCircleChevronUp extends Icon {
    public static function getName(): string {
        return 'circle-chevron-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 13l3 -3l3 3" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        SVG;
    }
}
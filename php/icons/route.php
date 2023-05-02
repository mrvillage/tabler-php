<?php
require_once(__DIR__ . '../Icon.php');

class IconRoute extends Icon {
    public static function getName(): string {
        return 'route';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 19h4.5a3.5 3.5 0 0 0 0 -7h-8a3.5 3.5 0 0 1 0 -7h3.5" />
        SVG;
    }
}
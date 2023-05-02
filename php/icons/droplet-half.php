<?php
require_once(__DIR__ . '../Icon.php');

class IconDropletHalf extends Icon {
    public static function getName(): string {
        return 'droplet-half';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.8 11a6 6 0 1 0 10.396 0l-5.197 -8l-5.2 8z" />   <path d="M12 3v17" />
        SVG;
    }
}
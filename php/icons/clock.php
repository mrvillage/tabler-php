<?php
require_once('../Icon.php');

class IconClock extends Icon {
    public static function getName(): string {
        return 'clock';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />   <path d="M12 7v5l3 3" />
        SVG;
    }
}
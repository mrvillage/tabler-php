<?php
require_once('../Icon.php');

class IconMilk extends Icon {
    public static function getName(): string {
        return 'milk';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 6h8v-2a1 1 0 0 0 -1 -1h-6a1 1 0 0 0 -1 1v2z" />   <path d="M16 6l1.094 1.759a6 6 0 0 1 .906 3.17v8.071a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8.071a6 6 0 0 1 .906 -3.17l1.094 -1.759" />   <path d="M12 16m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M10 10h4" />
        SVG;
    }
}
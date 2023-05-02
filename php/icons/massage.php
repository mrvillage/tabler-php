<?php
require_once(__DIR__ . '../Icon.php');

class IconMassage extends Icon {
    public static function getName(): string {
        return 'massage';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 17m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M4 22l4 -2v-3h12" />   <path d="M11 20h9" />   <path d="M8 14l3 -2l1 -4c3 1 3 4 3 6" />
        SVG;
    }
}
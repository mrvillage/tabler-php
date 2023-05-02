<?php
require_once(__DIR__ . '/../Icon.php');

class IconCylinder extends Icon {
    public static function getName(): string {
        return 'cylinder';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0" />   <path d="M7 6v12c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-12" />
        SVG;
    }
}
<?php
require_once(__DIR__ . '/../Icon.php');

class IconCell extends Icon {
    public static function getName(): string {
        return 'cell';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4l-4 2v5l4 2l4 -2v-5z" />   <path d="M12 11l4 2l4 -2v-5l-4 -2l-4 2" />   <path d="M8 13v5l4 2l4 -2v-5" />
        SVG;
    }
}
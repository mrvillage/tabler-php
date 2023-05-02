<?php
require_once(__DIR__ . '/../Icon.php');

class IconPresentation extends Icon {
    public static function getName(): string {
        return 'presentation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4l18 0" />   <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />   <path d="M12 16l0 4" />   <path d="M9 20l6 0" />   <path d="M8 12l3 -3l2 2l3 -3" />
        SVG;
    }
}
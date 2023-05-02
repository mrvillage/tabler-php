<?php
require_once(__DIR__ . '../Icon.php');

class IconBorderRadius extends Icon {
    public static function getName(): string {
        return 'border-radius';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12v-4a4 4 0 0 1 4 -4h4" />   <path d="M16 4l0 .01" />   <path d="M20 4l0 .01" />   <path d="M20 8l0 .01" />   <path d="M20 12l0 .01" />   <path d="M4 16l0 .01" />   <path d="M20 16l0 .01" />   <path d="M4 20l0 .01" />   <path d="M8 20l0 .01" />   <path d="M12 20l0 .01" />   <path d="M16 20l0 .01" />   <path d="M20 20l0 .01" />
        SVG;
    }
}
<?php
require_once(__DIR__ . '../Icon.php');

class IconCloudFog extends Icon {
    public static function getName(): string {
        return 'cloud-fog';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 16a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12" />   <path d="M5 20l14 0" />
        SVG;
    }
}
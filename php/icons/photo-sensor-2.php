<?php
require_once('../Icon.php');

class IconPhotoSensor2 extends Icon {
    public static function getName(): string {
        return 'photo-sensor-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 5h2a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-2" />   <path d="M7 19h-2a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
        SVG;
    }
}
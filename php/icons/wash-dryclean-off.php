<?php
require_once('../Icon.php');

class IconWashDrycleanOff extends Icon {
    public static function getName(): string {
        return 'wash-dryclean-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.048 16.033a9 9 0 0 0 -12.094 -12.075m-2.321 1.682a9 9 0 0 0 12.733 12.723" />   <path d="M3 3l18 18" />
        SVG;
    }
}
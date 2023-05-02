<?php
require_once(__DIR__ . '../Icon.php');

class IconVaccineBottleOff extends Icon {
    public static function getName(): string {
        return 'vaccine-bottle-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5v-1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-4" />   <path d="M8.7 8.705a1.806 1.806 0 0 1 -.2 .045c-.866 .144 -1.5 .893 -1.5 1.77v8.48a2 2 0 0 0 2 2h6a2 2 0 0 0 2 -2v-2m0 -4v-2.48c0 -.877 -.634 -1.626 -1.5 -1.77a1.795 1.795 0 0 1 -1.5 -1.77v-.98" />   <path d="M7 12h5m4 0h1" />   <path d="M7 18h10" />   <path d="M11 15h2" />   <path d="M3 3l18 18" />
        SVG;
    }
}
<?php
require_once('../Icon.php');

class IconGenderEpicene extends Icon {
    public static function getName(): string {
        return 'gender-epicene';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.536 15.536a5 5 0 1 0 -7.072 -7.072a5 5 0 0 0 7.072 7.072z" />   <path d="M15.536 15.535l5.464 -5.535" />   <path d="M3 14l5.464 -5.535" />   <path d="M12 12h.01" />
        SVG;
    }
}
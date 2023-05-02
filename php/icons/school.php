<?php
require_once('../Icon.php');

class IconSchool extends Icon {
    public static function getName(): string {
        return 'school';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />   <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
        SVG;
    }
}
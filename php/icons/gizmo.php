<?php
require_once('../Icon.php');

class IconGizmo extends Icon {
    public static function getName(): string {
        return 'gizmo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 19l-8 -5.5l-8 5.5" />   <path d="M12 4v9.5" />   <path d="M12 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M4 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M20 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}
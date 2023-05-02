<?php
require_once(__DIR__ . '../Icon.php');

class IconBible extends Icon {
    public static function getName(): string {
        return 'bible';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />   <path d="M19 16h-12a2 2 0 0 0 -2 2" />   <path d="M12 7v6" />   <path d="M10 9h4" />
        SVG;
    }
}
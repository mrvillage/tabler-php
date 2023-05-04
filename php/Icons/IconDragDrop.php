<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDragDrop extends \Tabler\Icon {
    public static function getName(): string {
        return 'drag-drop';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 11v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" />   <path d="M13 13l9 3l-4 2l-2 4l-3 -9" />   <path d="M3 3l0 .01" />   <path d="M7 3l0 .01" />   <path d="M11 3l0 .01" />   <path d="M15 3l0 .01" />   <path d="M3 7l0 .01" />   <path d="M3 11l0 .01" />   <path d="M3 15l0 .01" />
        SVG;
    }
}
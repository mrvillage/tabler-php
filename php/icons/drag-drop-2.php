<?php
require_once(__DIR__ . '/../Icon.php');

class IconDragDrop2 extends Icon {
    public static function getName(): string {
        return 'drag-drop-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />   <path d="M4 4l0 .01" />   <path d="M8 4l0 .01" />   <path d="M12 4l0 .01" />   <path d="M16 4l0 .01" />   <path d="M4 8l0 .01" />   <path d="M4 12l0 .01" />   <path d="M4 16l0 .01" />
        SVG;
    }
}
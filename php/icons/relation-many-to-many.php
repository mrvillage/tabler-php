<?php
require_once('../Icon.php');

class IconRelationManyToMany extends Icon {
    public static function getName(): string {
        return 'relation-many-to-many';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M15 14v-4l3 4v-4" />   <path d="M6 14v-4l3 4v-4" />   <path d="M12 10.5l0 .01" />   <path d="M12 13.5l0 .01" />
        SVG;
    }
}
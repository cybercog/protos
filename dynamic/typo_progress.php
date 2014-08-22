<?php

$item[] = array( 'tag'      => "h1",
                 'progress' => 80 );
                 
$item[] = array( 'tag'      => "h2",
                 'progress' => 80 );
                 
$item[] = array( 'tag'      => "h3",
                 'progress' => 90 );
                 
$item[] = array( 'tag'      => "h4",
                 'progress' => 64 );
                 
$item[] = array( 'tag'      => "h5",
                 'progress' => 12 );
                 
$item[] = array( 'tag'      => "h6",
                 'progress' => 32 );
                 
$item[] = array( 'tag'      => "small",
                 'progress' => 0 );

$item[] = array( 'tag'      => "dl, dt, dd",
                 'progress' => 0 );

$item[] = array( 'tag'      => "ul",
                 'progress' => 0 );

$item[] = array( 'tag'      => "ol",
                 'progress' => 0 );

$item[] = array( 'tag'      => "pre",
                 'progress' => 0 );

$item[] = array( 'tag'      => "hr",
                 'progress' => 0 );

$item[] = array( 'tag'      => "p",
                 'progress' => 0 );

$item[] = array( 'tag'      => "dfn",
                 'progress' => 0 );

$item[] = array( 'tag'      => "blockquote",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".verse",
                 'progress' => 0 );

$item[] = array( 'tag'      => "cite",
                 'progress' => 0 );

$item[] = array( 'tag'      => "figure, figcaption",
                 'progress' => 0 );

$item[] = array( 'tag'      => "form",
                 'progress' => 0 );

$item[] = array( 'tag'      => "fieldset, legend",
                 'progress' => 0 );

$item[] = array( 'tag'      => "input",
                 'progress' => 0 );

$item[] = array( 'tag'      => "button",
                 'progress' => 0 );

$item[] = array( 'tag'      => "submit",
                 'progress' => 0 );

$item[] = array( 'tag'      => "datalist",
                 'progress' => 0 );

$item[] = array( 'tag'      => "select",
                 'progress' => 0 );

$item[] = array( 'tag'      => "option",
                 'progress' => 0 );

$item[] = array( 'tag'      => "textarea",
                 'progress' => 0 );

$item[] = array( 'tag'      => "label",
                 'progress' => 0 );

$item[] = array( 'tag'      => "keygen",
                 'progress' => 0 );

$item[] = array( 'tag'      => "output",
                 'progress' => 0 );

$item[] = array( 'tag'      => "meter",
                 'progress' => 0 );

$item[] = array( 'tag'      => "progress",
                 'progress' => 0 );

$item[] = array( 'tag'      => "details, summary",
                 'progress' => 0 );

$item[] = array( 'tag'      => "menu, command",
                 'progress' => 0 );

$item[] = array( 'tag'      => "sub",
                 'progress' => 0 );

$item[] = array( 'tag'      => "sup",
                 'progress' => 0 );

$item[] = array( 'tag'      => "table, caption, tr, td, colgroup, col",
                 'progress' => 0 );

$item[] = array( 'tag'      => "? hgroup",
                 'progress' => 0 );

$item[] = array( 'tag'      => "? address",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".gigantic",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".huge",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".large",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".bigger",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".big",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".average",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".small",
                 'progress' => 0 );

$item[] = array( 'tag'      => ".tiny",
                 'progress' => 0 );

$item[] = array( 'tag'      => "---",
                 'progress' => 100 );

foreach ( $item as $value ) {
    $typo_progress .= '<li>
                           <label>' . $value['tag'] . '</label>
                           <meter high="90" low="25" max="100" min="0" optimum="75" title="' . $value['progress'] . ' percent" value="' . $value['progress'] . '">
                               <span>' . $value['progress'] . '%</span>
                               <canvas height="50" width="410" />
                           </meter>
                       </li>';
}

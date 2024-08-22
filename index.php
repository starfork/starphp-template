<?php 
include "src/template.php";
 
$template = new Template();
$template->assign([
        'title'=>'title',
        'header'=>'header area value',
        'name' => 'template',
        'data'=>[
            ['id'=>1,'name'=>'name1'],
            ['id'=>2,'name'=>'name2'],
        ],
        'footer'=>'footer area value'
    ]);
$template->fetch('index');
$template->display();


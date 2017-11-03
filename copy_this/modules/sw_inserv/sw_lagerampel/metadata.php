<?php
$aModule = array(
    'id'          => 'sw_inserv/sw_lagerampel',
    'title'       => 'Lagerampel in Listenansicht',
    'description' =>  array(
        'de'=>'Lagerampel in Listenansicht',
    ),
    'version'     => '1.0',
    'url'         => '',
    'email'       => '',
    'author'      => 'Steffen Winde',
    'extend'      => array(
    ),
    'blocks' => array(
        array('template' => 'widget/product/listitem_line.tpl', 'block'=>'widget_product_listitem_line_titlebox', 'file'=>'out/blocks/ampel_list.tpl'),
		array('template' => 'widget/product/listitem_infogrid.tpl', 'block'=>'widget_product_listitem_infogrid_titlebox', 'file'=>'out/blocks/ampel_infogrid.tpl'),
		array('template' => 'widget/product/listitem_grid.tpl', 'block'=>'widget_product_listitem_infogrid_titlebox', 'file'=>'out/blocks/ampel_grid.tpl'),
    ),
);
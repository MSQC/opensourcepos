<?php

class DbTestCase extends CIPHPUnitTestDbTestCase
{
  public function setUp()
  {
    parent::setUp();
    $this->hasInDatabase('inventory', [
      'trans_id'        => 1,
      'trans_items'     => 1,
      'trans_user'      => 1,
      'trans_date'      => '2018-07-11 15:39:46',
      'trans_comment'   => 'Manual Edit of Quantity',
      'trans_location'  => 1,
      'trans_inventory' => 10.000,
    ]);
    $this->hasInDatabase('item_quantities',[
      'item_id'     => 1,
      'location_id' => 1,
      'quantity'    => 10.000,
    ]);
    $this->hasInDatabase('items', [
      'name'                  => 'Test Item',
      'category'              => 'Test Category',
      'supplier_id'           => null,
      'item_number'           => null,
      'description'           => '',
      'cost_price'            => 10.00,
      'unit_price'            => 15.00,
      'reorder_level'         => 1.000,
      'receiving_quantity'    => 1.000,
      'item_id'               => 1,
      'pic_filename'          => null,
      'allow_alt_description' => 0,
      'is_serialized'         => 0,
      'stock_type'            => 0,
      'item_type'             => 0,
      'tax_category_id'       => 0,
      'deleted'               => 0,
      'custom1'               => '',
      'custom2'               => '',
      'custom3'               => '',
      'custom4'               => '',
      'custom5'               => '',
      'custom6'               => '',
      'custom7'               => '',
      'custom8'               => '',
      'custom9'               => '',
      'custom10'              => '',
    ]);

  }
}

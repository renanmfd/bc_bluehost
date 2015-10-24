<?php

/**
 * @file
 * Main file for bc_cart module.
 */

class CartController extends DrupalDefaultEntityController{

  public function save($cart) {
    drupal_write_record('cart', $cart);
    field_attach_insert('cart', $cart);
    module_invoke_all('entity_insert', 'cart', $cart);
    return $cart;
  }

}

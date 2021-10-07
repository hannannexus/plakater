<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'simon_post_options';

  //
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => 'My Category Options',
    'post_type' => 'page',
    'context'   => 'normal', // The context within the screen where the boxes should display. `normal`, `side`, `advanced`
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Category Title Option',
    'fields' => array(
      array(
        'id'    => 'category-title',
        'type'  => 'text',
        'title' => 'Category Title',
      ),

      array(
        'id'    => 'category-desc',
        'type'  => 'textarea',
        'title' => 'Category Description',
      ),

      array(
        'id'    => 'category-banner',
        'type'  => 'media',
        'title' => 'Upload Category Bannar',
      ),


    )
  ) );



}
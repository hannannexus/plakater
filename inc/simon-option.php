<?php 

if( class_exists( 'CSF' ) ) {

	$prefix = 'simon-options';

	CSF::createOptions( $prefix, array(

	  'framework_title' => __('Simon Option','simon'),
	  'menu_title' => __('Simon Options','simon'),
	  'menu_slug'  => 'simon-options',
	  'menu_type'  => 'submenu',
	  'menu_parent'  => 'themes.php',
	  'theme'  => 'light',
	) );

	// Desktop logo section  start here
	CSF::createSection($prefix,array(
	    'id'=>'desktop_logo',
	    'title'=>__(' Desktop Logo section ','simon'),
	));
	// logo section 
	CSF::createSection($prefix,array(
	    'parent'=>'desktop_logo',
	    'title'=> __('Desktop Logo Upload','simon'),
	    'fields'=>array(
	        array(
	            'id'=>'desktop_header_logo',
	            'type'=>'media',
	            'title'=>__('Upload Logo ','simon'),
	        ),

	    ),

	));

	// end Desktop logo section

	// mobile logo section start here 

	CSF::createSection($prefix,array(
	    'id'=>'mobile_logo',
	    'title'=>__(' Mobile Logo Section ','simon'),
	));
	// logo section 
	CSF::createSection($prefix,array(
	    'parent'=>'mobile_logo',
	    'title'=> __('Mobile Logo Upload','simon'),
	    'fields'=>array(
	        array(
	            'id'=>'mobile_header_logo',
	            'type'=>'media',
	            'title'=>__('Upload Logo','simon'),
	        ),

	    ),

	));

	// mobile logo section end here 

	// promo product info section 

	CSF::createSection($prefix,array(
	    'id'=>'promo_product_info',
	    'title'=>__(' Mobile Logo Section ','simon'),
	));
	// logo section 
	CSF::createSection($prefix,array(
	    'parent'=>'promo_product_info',
	    'title'=> __('Promo Product info Text','simon'),
	    'fields'=>array(
	        array(
	            'id'=>'promo_product_text',
	            'type'=>'text',
	            'title'=>__('Upload promo info text','simon'),
	        ),
	        array(
	            'id'=>'promo_product_url',
	            'type'=>'text',
	            'title'=>__('Upload promo product url','simon'),
	        ),

	    ),

	));
	// end promo product info section 

	// slider section start here

		CSF::createSection($prefix,array(
		    'id'=>'slider_options',
		    'title'=>__('Slider   section Options','simon'),
		));
	CSF::createSection($prefix,array(
		     'parent'=>'slider_options',
		     'title'=>__('Slider  Options Settings','simon'),
		     'fields'=>array(  
		       
		         array(
		             'id'=>'slider_block',
		             'type'=>'group',
		             'title'=>__(" Slider block Settings",'simon'),
		             'fields'=>array(

		                 array(
		                 'id'    => 'slider_image',
		                 'type'  => 'media',
		                 'title' => __('Upload Slider Image','simon'),
		               ),
		                array(
		                   'id'    => 'slider_intro_title',
		                   'type'  => 'text',
		                   'title' => __('Slider title','simon'),
		                 ),
		                array(
		                   'id'    => 'slider_intro_price',
		                   'type'  => 'text',
		                   'title' => __('Slider price text','simon'),
		                 ),
		                array(
		                   'id'    => 'slider_intro_url',
		                   'type'  => 'text',
		                   'title' => __('Slider price url','simon'),
		                 ),
		             ),

		         ),
		     
		     ),

		 ));
	// slider section end  here

	// popular category section start   here
		CSF::createSection($prefix,array(
		    'id'=>'popular_cat_head',
		    'title'=>__(' Popular Category  Section ','simon'),
		));
		// logo section 
		CSF::createSection($prefix,array(
		    'parent'=>'popular_cat_head',
		    'title'=> __('Popular category title ','simon'),
		    'fields'=>array(
		        array(
		            'id'=>'popular_cat_text',
		            'type'=>'text',
		            'title'=>__('Give Category Head Title','simon'),
		        ),
		    ),

		));
	// popular category section end  here

	//category block section start here


	CSF::createSection($prefix,array(
	    'id'=>'category_options',
	    'title'=>__('Category Block section Options','simon'),
	));

	CSF::createSection($prefix,array(
	     'parent'=>'category_options',
	     'title'=>__('Category Block  Options Settings','simon'),
	     'fields'=>array(  
	       
	          array(
	             'id'=>'category_block',
	             'type'=>'group',
	             'title'=>__(" Category block Settings",'simon'),
	             'fields'=>array(

	                 array(
	                 'id'    => 'cat_block_image',
	                 'type'  => 'media',
	                 'title' => __('Upload Category Image','simon'),
	               ),
	                array(
	                   'id'    => 'cat_block_title',
	                   'type'  => 'text',
	                   'title' => __('Category title','simon'),
	                 ),
	                array(
	                   'id'    => 'cat_desc',
	                   'type'  => 'textarea',
	                   'title' => __('Category Description ','simon'),
	                 ),
	                array(
	                   'id'    => 'cat_button_text',
	                   'type'  => 'text',
	                   'title' => __('Category Button Text','simon'),
	                 ),
	                array(
	                   'id'    => 'cat_button_url',
	                   'type'  => 'text',
	                   'title' => __('Category Button url','simon'),
	                 ),
	             ),

	         ),
	     
	     ),

	));

	//category block section start here

	// Monthly discount section start
		CSF::createSection($prefix,array(
		    'id'=>'monthly_discunt_options',
		    'title'=>__('Monthly Discount Block ','simon'),
		));

		CSF::createSection($prefix,array(
		     'parent'=>'monthly_discunt_options',
		     'title'=>__('Monthly Discount  Options Settings','simon'),
		     'fields'=>array(  
		       
		          array(
		             'id'=>'m_discount_block',
		             'type'=>'group',
		             'title'=>__(" Monthly Discount block Settings",'simon'),
		             'fields'=>array(

		                 array(
		                 'id'    => 'monthly_discount_image',
		                 'type'  => 'media',
		                 'title' => __('Upload  Product Image','simon'),
		               ),
		                array(
		                   'id'    => 'discount_product_title',
		                   'type'  => 'text',
		                   'title' => __('Product title','simon'),
		                 ),
		                array(
		                   'id'    => 'discount_product_price',
		                   'type'  => 'text',
		                   'title' => __('Product Discount Price ','simon'),
		                 ),

		             
		             ),

		         ),
		     
		     ),

		));

	// Monthly discount section end




}
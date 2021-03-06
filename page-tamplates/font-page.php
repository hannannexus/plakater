<?php
	/*
		Template Name: Font Page 
	*/
?>


<?php 
  get_header();
?>

<?php 

    $prefix = get_option('simon-options');

    $sliders = $prefix['slider_block'];
?>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <?php foreach( $sliders as $slider ): ?>

      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo $slider['slider_image']['url']?>)">
        <!--  <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      
                      <?php echo esc_html($slider['slider_intro_title']);?>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="<?php echo esc_attr($slider['slider_intro_url']);?>"><span class="price-a"> <?php echo esc_html($slider['slider_intro_price']);?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    
    </div>
  </div><!-- End Intro Section -->
 
<!--- Section Start --->
<section class="section-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="top-heading">
          <div class="heading-inner">
            <h3 class="text-center">
            BESTSELLERS
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
      <div class="content-area">
    <div id="best_carosel" class=" carosel owl-carousel owl-theme">
         <?php
        $args = array(
            'post_type' => 'product',
            'meta_key' => 'total_sales',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 10,
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
        global $product;

        ?>
        <article class="best-seller item ">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );      
            ?>
            <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">

            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p><?php echo $product->get_sku(); ?></p>
            <p><?php echo $product->get_price(); ?></p>
            <?php do_action('front_cart_button'); ?>
        </article>
        <?php
        endwhile;
        wp_reset_query();
        ?>
      </div> 

    </div>
    </div>
  </div>


  <!-- category_product display start -->
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
      <div class="content-area">
    <div id="cat_a" class=" carosel owl-carousel owl-theme">
         <?php
            $args = array(
              'post_type' => 'product',
              'post_status' => 'publish',
              'posts_per_page'=> -1,
              'paged' => get_query_var('paged'),
              'tax_query' => array(
                array(
                  'taxonomy' => 'product_cat',
                  'field' => 'slug',
                  'terms' => array( 'clothing','accessories' ),
                  'operator' => 'IN'
                  )
                )
            );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
        global $product;

        ?>
        <div class="best-seller item ">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );      
            ?>
            <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">

            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p><?php echo $product->get_sku(); ?></p>
            <p><?php echo $product->get_price(); ?></p>
            <?php do_action('front_cart_button'); ?>
          </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
      </div> 

    </div>
    </div>
  </div>

  <!-- category_product display -->
</div>
</section>
<!--- Section  End --->


<!--- Section Start --->
<section class="section-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="top-heading">
          <div class="heading-inner">
            <h3 class="text-center">
              <?php 

                $prefix = get_option('simon-options');

                $category_title = $prefix['popular_cat_text'];
                echo esc_html($category_title);
              ?>
            </h3>
          </div>
        </div>
      </div>
    </div>
   </div>

   <?php 
    $prefix = get_option('simon-options');

    $categories = $prefix['category_block'];
   ?>

    <div class="content-area">
      <div class="container-fluid">
        <div class="row">
          <?php foreach($categories as $category ):?>
          <div class="col-md-4">
            <div class="single-box text-center kokken-pla">
              <div class="content-heading">
                <h3><?php echo esc_html($category['cat_block_title']); ?></h3>
              </div>
              <div class="content-details">
                <p><?php echo esc_html($category['cat_desc']); ?></p>
              </div>
              <div class="content-image">
                <div class="img-inner-box">
                  <img src="<?php echo $category['cat_block_image']['url'] ?>" alt="">
                  <div class="content-link-btn"><a href="<?php echo esc_attr($category['cat_button_url']);?>" class="btn custome-btn"><?php echo esc_html($category['cat_button_text']); ?> </a></div>
              </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </div>
    </div>
    </div>
</section>
<!--- Section  End --->



<!--- Section Start --->
<section class="section-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="top-heading">
          <div class="heading-inner">
            <h3 class="text-center">
            M??NEDENS TILBUD
            </h3>
          </div>
        </div>
      </div>
    </div>
   </div>

   <?php 
    $prefix = get_option('simon-options');

    $dis_product_details  = $prefix['m_discount_block'];
   ?>
    <div class="content-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="promo-area">

              <?php foreach( $dis_product_details as $dis_product ): ?>

              <div class="single-promo">
                <div class="product-img">
                  <a href=""><img src="<?php echo $dis_product['monthly_discount_image']['url']; ?>" alt=""></a>
                </div>
                <div class="product-title">
                  <h5><a href=""><?php echo esc_html($dis_product['discount_product_title']); ?></a></h5>
                </div>
                <div class="product-price"><?php echo esc_html($dis_product['discount_product_price']); ?></div>
              </div>
            <?php endforeach; ?>



            </div>
          </div>
        </div>
    </div>
    </div>
</section>
<!--- Section  End --->



<!--- Section Start --->
<section class="section-wrapper">
    <div class="content-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
             <div class="more-info">
               
             <p>K??b specialdesignede og stilrene plakater online P?? SimonHolst.dk
P?? SimonHolst.dk har vi over ??rene skabt et stort antal af specialdesignede plakater, der er med til at s??tte pr??g p?? hjemmets identitet.</p>
<p>
Da vi startede plakatshoppen tilbage i 2019 var det med den vision, at g??re os til de st??rkeste indenfor plakater til k??kkenet. Derfor satte vi os for at skabe plakater, der kunne styrke k??kkenets funktionalitet, og inspirere folket til at blive den helt rigtige gastronom.</p>
<p>

Efterh??nden som ??rene er g??et, har vi udvidet vores sortiment til de resterende rum i huset, og med samme grundlag som vores k??kkenplakater: at skabe plakater der fremh??ver menneskets identitet, styrker rummets funktionalitet, og som kan inspirere folk. Med andre ord, s?? l??gger vi en dyd i at vores plakater skal kunne mere end ???bare??? at v??re p??ne.</p>
<p>

Hvem er Simon Holst?</p>
<p>

Mit navn er Simon Holst. Som du m??ske har g??ttet, s?? har jeg en stor passion for at designe plakater J D??t at kunne skabe noget flot og funktionelt, f?? det trykket p?? papir og give det liv og mening ude i folks hjem, det er lige mig. Da jeg startede med at lave plakater var det blot som et hobby projekt, hvor min passion for gastronomi kom til udtryk. Idag er det blevet til en stor del af min hverdag, hvor jeg g??r rundt og t??nker p??, hvad folk vil have gavn og gl??de af at have h??ngende p?? v??ggen. Derfor har mit sortiment ogs?? udvidet sig.</p>
<p>

Lige s?? meget som jeg kan lide at lave plakater, s?? betyder mine kunders brugeroplvelse ogs?? en stor del for mig. S?? i takt med at udvalget er blevet st??rre, s?? har jeg ogs?? inddelt kategorierne i rum. P?? den m??de er vores virvare af plakater blevet gjort lettere for dig som kunde at navigere rundt i.</p>
<p>

Jeg har i sinde at forts??tte mit plakat eventyr, indtil jeg en dag bliver oprigtig tr??t af det ??? og der er vi heldigvis langt fra J</p>
<p>

Jeg h??ber du finder de plakater du leder efter, og hvis ikke ??? s?? skriv din id?? til mig p?? kontakt@simonholst.dk
</p>
<p>
De bedste hilsner</p>
<p>

Simon Holst</p>
<p>

Plakater der matcher din v??g</p>
<p>

P?? vores webshop finder du specialdesignede og stilrene plakater, der er 100% skabt til at matche v??ggene i dit hjem. Som mennesker bor og indretter vi os forskelligt. Nogle k??rer med en hvid v??g, mens andre k??rer med farver, r?? betonv??g eller noget helt fjerde. P?? st??rstedelen af vores plakater kan du derfor v??lge mellem flere forskellige baggrunde til din plakat. Hvis du er til det sikre og simple valg, s?? har vi en blank baggrund til dig. Hvis du er til kant, s?? har vi skabt forskellige teksturbaggrunde. Her kan du finde alt fra marmor, gammelt papir, sten og kridt. Allesammen skabt med et roligt ??je, s??dan at din plakat med sikkerhed vil ???blende??? ind i rummet. P?? den m??de sikrer vi, at du som kunde kan finde plakater, der matcher din v??g.</p>
<div id="show-m"><p>
<strong>100% svanem??rket trykkeri med FSC-Certificeret kvalitetspapir</strong></p>
<p>
Vi l??gger stor v??gt p?? 3 ting: b??redygtighed, kvalitet og knaldgod service! Derfor trykkes <u>alle</u> vores plakater p?? FSC-Certificeret papir, der sikrer at papiret kommer fra b??redygtigt skovf??ldning, hvor der ikke f??ldes mere end skoven kan regenerere. P?? den m??de kan vi s??lge vores plakater med god samvittighed. Samtidig vil vi ikke g?? p?? kompromis med kvaliteten af papiret. Du som kunde skal have en ???wow-f??lelse??? n??r du f??r vores plakater i h??nden. Derfor trykker vi alle vores plakater p?? minimum 230 grams Photo Satin Papir, der b??de giver papiret en fylde, samtidig med at det giver printet en flot gl??d. For at vi kan sikre en hurtig levering, s?? trykker vi selv alle vores plakater. Derfor kan du risikere at modtage plakaten allerede dagen efter din bestilling.</p>

<strong>B??redygtige kvalitetsrammer i egetr?? og akrylglas</strong>
<p>
P?? SimonHolst.dk har vi valgt at g??re udvalget af rammer s?? godt og simpelt som muligt. Dette har vi gjort for at g??re beslutningen s?? let for dig som muligt. Samtidig spiller b??redygtighed en vigtig rolle for os. Derfor er vores rammer lavet af FSC-Certificeret egetr??, der er produceret i Europa. Her kan du v??lge mellem 3 forskellige st??rrelser (30x40cm, 50x70cm og 70x100cm), og 3 forskellige farver (hvid, sort eller r?? egetr??).</p>
<p>
Vi k??rer med kvalitetsrammer i akrylglas for at sikre, at du som kunde f??r dine indrammede plakater hjem i forsvarlig og hel stand. N??r du tilv??lger ramme til dine plakater, f??r dem hjem i indrammet stand, s??dan at det eneste du som kunde skal er, at h??nge dem op.</p>

<strong>Vores 3 mest popul??re plakat kategorier</strong>
<p>
Vi har efterh??nden f??et en masse fede kategorier der er sp??ndene at dykke ned i. P?? trods af det store udvalg, s?? har vi 3 kategorier der g??r sig s??rligt bem??rket.</p>
<p>
<strong>K??kkenplakater: </strong>Det er vist ikke nogen hemmelighed at passionen for det gastronomiske skinner igennem. Folk har taget, og tager stadigv??k, rigtig godt imod vores k??kkenplakater, og mon ikke det er fordi at visse emner for madlavning forbliver tidl??se. Vi har taget h??jde for at vi som mennesker indretter os forskelligt. Derfor kan du v??lge mellem flere?? forskellige baggrunde p?? <u>alle</u> vores k??kkenplakater. Udvalget er bredt og omfavner en masse sp??ndene gastronomiske emner, alt fra <a href="https://simonholst.dk/vare/kokkenplakater/aarstidernes-groentsager/">??rstidernes Gr??ntsager</a> til <a href="https://simonholst.dk/vare/kokkenplakater/smoothies/">Smoothie Opskrifter</a>. Klik dig ind p?? vores <a href="https://simonholst.dk/plakater/koekkenplakater/">k??kkenplakater</a> og se, hvilke emner der matcher dine behov og interesser bedst.</p>
  <p>
<strong>B??rneplakater: </strong>Vi har en stor passion for at skabe brugbare, flotte og l??rerige plakater til b??rnev??relset. Vi nyder virkelig at komme alle emner igennem indenfor b??rneplakater, og skabe noget de sm?? kan f?? gl??de af. Derfor kan du finde en masse forskellige emner lige fra abc/123 plakater til dyreplakater, motorplakater og plakater om universet. De ser ud til at hitte ret godt i folks hjem, hvilket vi selvf??lgelig er glade for.</p>
<p>
Vores b??rneplakater er ogs?? lavet med henblik p?? at kunne passe ind p?? de fleste v??gge. Derfor kan du ogs?? v??lge mellem forskellige baggrunde, rammer og st??rrelser p?? vores b??rneplakater, s??dan at du kan v??re sikker p??, at den vil passe godt ind. S??, hvis du er p?? udkig efter noget dine b??rn ikke kun vil kunne lide at kigge p??, men ogs?? kan f?? noget ud af, s?? g?? ind og kig p?? vores <a href="https://simonholst.dk/plakater/boerneplakater/">b??rneplakater</a>.</p>
  <p>
<strong>Plantavler: </strong>Aldrig f??r har vi haft s?? stort et behov for struktur som vi har idag. Uanset om du er studerende eller lever familielivet, s?? har du sikkert ogs?? en masse bolde i luften p?? samme tid. For at du kan sikre dig, at gribe de fleste af dem, hvis ikke alle, har vi skabt <a href="https://simonholst.dk/plakater/plantavler/">plantavler</a> der kan give dig overblik og struktur p?? samme tid. Alle vores <a href="https://simonholst.dk/plakater/plantavler/">plantavler</a> s??lges inklusiv tusch og ramme. Du skal blot bruge en klud til at viske tavlen ren, og s?? kan du bruge den igen og igen, uge efter uge.</p>
  <p>
Mangler du struktur i hverdagen? M??ske over hvilke aftaler og opgaver du har i l??bet af dagen, hvad dine m??l er, hvad der skal prioriteres, og hvilke vaner du vil integrere? S?? er vores <a href="https://simonholst.dk/vare/planplakater/ugeplan-tavle/">ugeplan</a> ideel for dig.</p>
<p>
Hvis du bare gerne vil cutte madbudgettet, undg?? impulsk??b og f?? et bedre overblik over dine m??ltider, s?? kan vi anbefale dig at se vores <a href="https://simonholst.dk/vare/planplakater/madplan-tavle/">madplan</a>. Hvis du blot har brug for at f??lge med i aftensmad og ingredienser, s?? kan du k??be vores <a href="https://simonholst.dk/vare/planplakater/aftensmad-plantavle-inkl-tusch/">aftensmad plan</a>. Uanset hvilken en af disse to du v??lger, s?? er der ogs?? en indk??bsliste p?? tavlen, hvor du kan notere hvad du skal k??be ind.</p>
  <p>
Selvom vi gerne ville n??vne alle vores kategorier, s?? bliver det simpelten for lang en sm??re. S?? du m?? have rigtig god jagt med at finde jeres n??ste plakater.</p>
<p>
<strong>SimonHolst.com is on its way</strong></p>
<p>
Vi er I fuld sving med at skabe en international version af vores webshop, hvor du vil kunne finde vores mest popul??re plakater p?? engelsk. Vi gl??der os rigtig meget til at byde dig velkommen til <a href="https://simonholst.com/">SimonHolst.com</a>, hvor vi vil kunne tilbyde world wide shipping. Det bliver mega fedt!</p>
<p>
Tak for at du tog dig til at l??se om os. Rigtig god dag ?</p>

</div>
<a class="btn custome-btn learn-more" target="_self" id="show">L??s mere???</a>
             </div>
          </div>
        </div>
    </div>
    </div>
</section>
<!--- Section  End --->

<?php get_footer(); ?>
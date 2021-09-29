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
    <div class=" carosel owl-carousel owl-theme">
         <?php
        $args = array(
            'post_type' => 'product',
            'meta_key' => 'total_sales',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 5,
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
    <div class=" carosel owl-carousel owl-theme">
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
            MÅNEDENS TILBUD
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
               
             <p>Køb specialdesignede og stilrene plakater online På SimonHolst.dk
På SimonHolst.dk har vi over årene skabt et stort antal af specialdesignede plakater, der er med til at sætte præg på hjemmets identitet.</p>
<p>
Da vi startede plakatshoppen tilbage i 2019 var det med den vision, at gøre os til de stærkeste indenfor plakater til køkkenet. Derfor satte vi os for at skabe plakater, der kunne styrke køkkenets funktionalitet, og inspirere folket til at blive den helt rigtige gastronom.</p>
<p>

Efterhånden som årene er gået, har vi udvidet vores sortiment til de resterende rum i huset, og med samme grundlag som vores køkkenplakater: at skabe plakater der fremhæver menneskets identitet, styrker rummets funktionalitet, og som kan inspirere folk. Med andre ord, så lægger vi en dyd i at vores plakater skal kunne mere end ”bare” at være pæne.</p>
<p>

Hvem er Simon Holst?</p>
<p>

Mit navn er Simon Holst. Som du måske har gættet, så har jeg en stor passion for at designe plakater J Dét at kunne skabe noget flot og funktionelt, få det trykket på papir og give det liv og mening ude i folks hjem, det er lige mig. Da jeg startede med at lave plakater var det blot som et hobby projekt, hvor min passion for gastronomi kom til udtryk. Idag er det blevet til en stor del af min hverdag, hvor jeg går rundt og tænker på, hvad folk vil have gavn og glæde af at have hængende på væggen. Derfor har mit sortiment også udvidet sig.</p>
<p>

Lige så meget som jeg kan lide at lave plakater, så betyder mine kunders brugeroplvelse også en stor del for mig. Så i takt med at udvalget er blevet større, så har jeg også inddelt kategorierne i rum. På den måde er vores virvare af plakater blevet gjort lettere for dig som kunde at navigere rundt i.</p>
<p>

Jeg har i sinde at fortsætte mit plakat eventyr, indtil jeg en dag bliver oprigtig træt af det – og der er vi heldigvis langt fra J</p>
<p>

Jeg håber du finder de plakater du leder efter, og hvis ikke – så skriv din idé til mig på kontakt@simonholst.dk
</p>
<p>
De bedste hilsner</p>
<p>

Simon Holst</p>
<p>

Plakater der matcher din væg</p>
<p>

På vores webshop finder du specialdesignede og stilrene plakater, der er 100% skabt til at matche væggene i dit hjem. Som mennesker bor og indretter vi os forskelligt. Nogle kører med en hvid væg, mens andre kører med farver, rå betonvæg eller noget helt fjerde. På størstedelen af vores plakater kan du derfor vælge mellem flere forskellige baggrunde til din plakat. Hvis du er til det sikre og simple valg, så har vi en blank baggrund til dig. Hvis du er til kant, så har vi skabt forskellige teksturbaggrunde. Her kan du finde alt fra marmor, gammelt papir, sten og kridt. Allesammen skabt med et roligt øje, sådan at din plakat med sikkerhed vil ”blende” ind i rummet. På den måde sikrer vi, at du som kunde kan finde plakater, der matcher din væg.</p>
<div id="show-m"><p>
<strong>100% svanemærket trykkeri med FSC-Certificeret kvalitetspapir</strong></p>
<p>
Vi lægger stor vægt på 3 ting: bæredygtighed, kvalitet og knaldgod service! Derfor trykkes <u>alle</u> vores plakater på FSC-Certificeret papir, der sikrer at papiret kommer fra bæredygtigt skovfældning, hvor der ikke fældes mere end skoven kan regenerere. På den måde kan vi sælge vores plakater med god samvittighed. Samtidig vil vi ikke gå på kompromis med kvaliteten af papiret. Du som kunde skal have en ”wow-følelse” når du får vores plakater i hånden. Derfor trykker vi alle vores plakater på minimum 230 grams Photo Satin Papir, der både giver papiret en fylde, samtidig med at det giver printet en flot glød. For at vi kan sikre en hurtig levering, så trykker vi selv alle vores plakater. Derfor kan du risikere at modtage plakaten allerede dagen efter din bestilling.</p>

<strong>Bæredygtige kvalitetsrammer i egetræ og akrylglas</strong>
<p>
På SimonHolst.dk har vi valgt at gøre udvalget af rammer så godt og simpelt som muligt. Dette har vi gjort for at gøre beslutningen så let for dig som muligt. Samtidig spiller bæredygtighed en vigtig rolle for os. Derfor er vores rammer lavet af FSC-Certificeret egetræ, der er produceret i Europa. Her kan du vælge mellem 3 forskellige størrelser (30x40cm, 50x70cm og 70x100cm), og 3 forskellige farver (hvid, sort eller rå egetræ).</p>
<p>
Vi kører med kvalitetsrammer i akrylglas for at sikre, at du som kunde får dine indrammede plakater hjem i forsvarlig og hel stand. Når du tilvælger ramme til dine plakater, får dem hjem i indrammet stand, sådan at det eneste du som kunde skal er, at hænge dem op.</p>

<strong>Vores 3 mest populære plakat kategorier</strong>
<p>
Vi har efterhånden fået en masse fede kategorier der er spændene at dykke ned i. På trods af det store udvalg, så har vi 3 kategorier der gør sig særligt bemærket.</p>
<p>
<strong>Køkkenplakater: </strong>Det er vist ikke nogen hemmelighed at passionen for det gastronomiske skinner igennem. Folk har taget, og tager stadigvæk, rigtig godt imod vores køkkenplakater, og mon ikke det er fordi at visse emner for madlavning forbliver tidløse. Vi har taget højde for at vi som mennesker indretter os forskelligt. Derfor kan du vælge mellem flere  forskellige baggrunde på <u>alle</u> vores køkkenplakater. Udvalget er bredt og omfavner en masse spændene gastronomiske emner, alt fra <a href="https://simonholst.dk/vare/kokkenplakater/aarstidernes-groentsager/">Årstidernes Grøntsager</a> til <a href="https://simonholst.dk/vare/kokkenplakater/smoothies/">Smoothie Opskrifter</a>. Klik dig ind på vores <a href="https://simonholst.dk/plakater/koekkenplakater/">køkkenplakater</a> og se, hvilke emner der matcher dine behov og interesser bedst.</p>
  <p>
<strong>Børneplakater: </strong>Vi har en stor passion for at skabe brugbare, flotte og lærerige plakater til børneværelset. Vi nyder virkelig at komme alle emner igennem indenfor børneplakater, og skabe noget de små kan få glæde af. Derfor kan du finde en masse forskellige emner lige fra abc/123 plakater til dyreplakater, motorplakater og plakater om universet. De ser ud til at hitte ret godt i folks hjem, hvilket vi selvfølgelig er glade for.</p>
<p>
Vores børneplakater er også lavet med henblik på at kunne passe ind på de fleste vægge. Derfor kan du også vælge mellem forskellige baggrunde, rammer og størrelser på vores børneplakater, sådan at du kan være sikker på, at den vil passe godt ind. Så, hvis du er på udkig efter noget dine børn ikke kun vil kunne lide at kigge på, men også kan få noget ud af, så gå ind og kig på vores <a href="https://simonholst.dk/plakater/boerneplakater/">børneplakater</a>.</p>
  <p>
<strong>Plantavler: </strong>Aldrig før har vi haft så stort et behov for struktur som vi har idag. Uanset om du er studerende eller lever familielivet, så har du sikkert også en masse bolde i luften på samme tid. For at du kan sikre dig, at gribe de fleste af dem, hvis ikke alle, har vi skabt <a href="https://simonholst.dk/plakater/plantavler/">plantavler</a> der kan give dig overblik og struktur på samme tid. Alle vores <a href="https://simonholst.dk/plakater/plantavler/">plantavler</a> sælges inklusiv tusch og ramme. Du skal blot bruge en klud til at viske tavlen ren, og så kan du bruge den igen og igen, uge efter uge.</p>
  <p>
Mangler du struktur i hverdagen? Måske over hvilke aftaler og opgaver du har i løbet af dagen, hvad dine mål er, hvad der skal prioriteres, og hvilke vaner du vil integrere? Så er vores <a href="https://simonholst.dk/vare/planplakater/ugeplan-tavle/">ugeplan</a> ideel for dig.</p>
<p>
Hvis du bare gerne vil cutte madbudgettet, undgå impulskøb og få et bedre overblik over dine måltider, så kan vi anbefale dig at se vores <a href="https://simonholst.dk/vare/planplakater/madplan-tavle/">madplan</a>. Hvis du blot har brug for at følge med i aftensmad og ingredienser, så kan du købe vores <a href="https://simonholst.dk/vare/planplakater/aftensmad-plantavle-inkl-tusch/">aftensmad plan</a>. Uanset hvilken en af disse to du vælger, så er der også en indkøbsliste på tavlen, hvor du kan notere hvad du skal købe ind.</p>
  <p>
Selvom vi gerne ville nævne alle vores kategorier, så bliver det simpelten for lang en smøre. Så du må have rigtig god jagt med at finde jeres næste plakater.</p>
<p>
<strong>SimonHolst.com is on its way</strong></p>
<p>
Vi er I fuld sving med at skabe en international version af vores webshop, hvor du vil kunne finde vores mest populære plakater på engelsk. Vi glæder os rigtig meget til at byde dig velkommen til <a href="https://simonholst.com/">SimonHolst.com</a>, hvor vi vil kunne tilbyde world wide shipping. Det bliver mega fedt!</p>
<p>
Tak for at du tog dig til at læse om os. Rigtig god dag ?</p>

</div>
<a class="btn custome-btn learn-more" target="_self" id="show">Læs mere…</a>
             </div>
          </div>
        </div>
    </div>
    </div>
</section>
<!--- Section  End --->

<?php get_footer(); ?>
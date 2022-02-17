<?php  get_header(); ?>
<section class="hero">
    <div class="hero__wrapper">
        <div class="wrapper">
            <div class="wrapper__heading">
                <span>BOUTIQUE EN LIGNE</span>
                <h1>Nature et Beauté</h1>
                <a href="/boutique">
                    <div class="button button-white">Voir Colletion</div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading"> TENDANCES</h2>
    <div class="items">
        <?php echo do_shortcode('[best_selling_products limit=4]'); ?>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading"> DES PRODUITS EN PACK</h2>
    <div class="items">
        <div class="standard-products">
            <div class="products-card  products-card--left">
                <video controls width="100" autoplay muted loop id="myVideo">
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/3.mp4" type="video/mp4">
                </video>
            </div>
            <div class="products-card products-card--gray products-card--right">  
                    <?php echo do_shortcode('[best_selling_products limit=3]');?>
            </div>
        </div>
    </div>
</section>

<section class="standard-promo">
    <div class="promo-card promo-card--gray promo-card--left">
        <img class="promo-card__img" src="<?php echo get_template_directory_uri(); ?>/images/3.png" alt="friend">
    </div>
    <div class="promo-card promo-card--gray promo-card--right">
        <h2 class="promo-card__heading">PARTAGER L'AMOUR</h2>
        <p class="promo-card__body"> Envie de vous chouchouter et aussi de faire plaisir à un ami ?Parrainez un ami
            et il bénéficiera d’une réduction de 5000 FCFA dès 20.000 FCFA d’achats en ligne. Pour vous remercier,
            nous vous offrirons également une réduction de 5000 FCFA lors de votre prochaine commande.</p>
        <a href="#" class="button button-white">inviter des amis</a>
    </div>
</section>

<section class="newsletter">
    <h5 class="newsletter__heading">
        Inscrivez-vous à la newsletter de G&C et
        recevez des informations sur nos derniers arrivages
        et des ventes exclusives
    </h5>

    <form class="form"
        action="https://raddy.us20.list-manage.com/subscribe/post?u=c12aafb941c4276911b0d5cd3&amp;id=839b42c955"
        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
        novalidate="">
        <input class="form__email" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
            placeholder="adresse mail" required="">
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                name="b_c12aafb941c4276911b0d5cd3_839b42c955" tabindex="-1" value=""></div>
        <input class="form__submit button" type="submit" value="Souscrire" name="subscribe" id="mc-embedded-subscribe">
    </form>
</section>

<section class="standard-comments">
    <a href="#" class="comments-card comments-card--gray comments-card--left">
        <h2 class="comments-card__heading">ce qu'ils en pensent</h2>
        <p class="comments-card__body"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora magnam velit,
            at tempore libero repellendus praesentium ut! Quas voluptatem quia autem maiores soluta similique possimus
            vel! Molestiae sapiente quam saepe! </p>
    </a>
    <a href="#" class="comments-card comments-card--gray comments-card--middle">
        <h2 class="comments-card__heading">Leurs avis</h2>
        <p class="comments-card__body"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae quidem ipsa
            vero voluptate ea laudantium. Doloribus cumque consequuntur quisquam perspiciatis ex doloremque unde eum
            iste nihil. Facere dignissimos fuga veniam. </p>
    </a>
    <a href="#" class="comments-card comments-card--gray comments-card--right">
        <h2 class="comments-card__heading">Leurs avis</h2>
        <p class="comments-card__body"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nulla nam eos
            eius atque hic, in itaque esse aliquid illo voluptatibus officiis quisquam architecto maiores dignissimos
            ipsum est aliquam cupiditate? </p>
    </a>
</section>
<?php  get_footer(); ?>
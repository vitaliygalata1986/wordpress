<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
</head>
<?php wp_head()?>
<body>
<div class="container">
    <div class="contacts">
        <h1 class="contacts__title">Contacts</h1>
        <div class="contacts-block">
            <?php if( have_rows('contacts') ):  ?>
                <?php  while ( have_rows('contacts') ) : the_row(); ?>
                    <?php  if( get_row_layout() == 'headquarters' ):  ?>
                        <div class="contacts-block__left">
                            <h2 class="contacts-block__title"><?php the_sub_field('headquarters_title');?></h2>
                            <div class="block-kontact">
                                <div class="block-kontact__left">
                                    <p>Global Message Services Ukraine LLC</p>
                                    <p><?php the_sub_field('address');?></p>
                                    <p><?php the_sub_field('index');?></p>
                                    <p><?php the_sub_field('country');?></p>
                                    <a href="tel:<?php the_sub_field('telephone');?>"><?php the_sub_field('telephone');?></a>
                                </div>
                                <div class="block-kontact__right">
                                    <p>Email</p>
                                    <a href="mailto:<?php the_sub_field('email');?>"><?php the_sub_field('email');?></a>
                                    <p>Send message</p>
                                    <a href="tel:<?php the_sub_field('viber');?>"><?php the_sub_field('viber');?></a>
                                    <p>Send form</p>
                                    <a href="tel:<?php the_sub_field('contact_us');?>"><?php the_sub_field('contact_us');?></a>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endwhile;?>
            <?php endif;?>
            <?php if( have_rows('contacts') ):  ?>
                <?php  while ( have_rows('contacts') ) : the_row(); ?>
                    <?php  if( get_row_layout() == 'technical_support' ):  ?>
                        <div class="contacts-block__right">
                            <h2 class="contacts-block__title"><?php the_sub_field('support_title');?></h2>
                            <p><?php the_sub_field('text');?></p>
                            <a href="tel:<?php the_sub_field('telephone_support');?>"><?php the_sub_field('telephone_support');?></a>
                        </div>
                    <?php endif;?>
                <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>

<div class="test"></div>
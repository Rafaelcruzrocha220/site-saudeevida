<?php 
define('TEXT_DOMAIN','saudeevida');
get_header()
?>

<section id="home" class="home">
    <div class="container">
        <div class="text-content">
            <h2 class="title-content"><?= __("Fique por dentros de todas as ",TEXT_DOMAIN)?><span class="highlight"><?= __(" Conferências ",TEXT_DOMAIN)?></span><?= __("ministradas pela Saúde e vida.",TEXT_DOMAIN) ?></h2>
            <p>Saiba quando será os próximos eventos clicando aqui, ou seja informado diretamente em seu email assinando nossa newsletter.</p>
        </div>
    </div>
</section>

<!-- News -->
<?= get_template_part( "Templates/newslestter" ) ?>

<!-- Events -->
<section id="eventos" class="eventos">
    <div class="container">
        <?= get_template_part( "Templates/parts/lembrete" ) ?>
        <h1 class="title-section">Próximos eventos</h1>
        <!-- Navbar -->
        <?= get_template_part( "Templates/eventos" ); ?> 
    </div>
</section>

<!-- Infos -->
<section id="contact" class="contact">
    <h1 class="title-section">Entre em contato</h1>
    <?= get_template_part( "Templates/contact" )?>
</section>

<?php get_footer()?>
    

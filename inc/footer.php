<footer>
    <section id="sitemap">
        <h2>Links</h2>
            <div class="footerNav">

                <nav class="navfooterbloc">
                    <h3>Contacts</h3>
                    <a href="info@walk.brussels">info@walk.brussels</a>
                    <a href="tel:+0470832220">+32(0)470 83 22 20</a>
                    <address>Marcqstraat 17 Rue Marcq<br> 1000 Bruxelles - Brussel</address>
                </nav>
                <nav class="navfooterbloc">
                    <h3>Menu</h3>
                    <?php echo $menuMain_view?>
                </nav>
            </div>
    </section>
    <nav id="menuRS" class="nav-rs">
        <?php 
                    foreach($menuRS as $item){
                        echo "<a href=".$item->page." title='".$item->titre."' target='_blank'><div class='rs ".$item->titre."'></div></a>";
                    }
        ?>
    </nav>
    <div class="sponsors">
        <figure class="sponsor">
            <figcaption><?=$lang=="fr"?"En collaboration  avec":($lang=="nl"?"in samenwerking met":"in collaboration with");?></figcaption>
            <a href="https://www.tousapied.be/" target="_blank" rel="noopener noreferrer"><img src="img/deco/tousapied-logo.png" alt="logo-partner"></a>
        </figure>
        <a href="https://mobilite-mobiliteit.brussels/<?=$lang?>" target="_blank" rel="noopener noreferrer">
            <img src="img/deco/logo-sponsoring_<?=$lang?>_cmyk_pos_2.png" alt="logo-partner">
        </a>
        <figure class="sponsor">
            <figcaption><?=$lang=="fr"?"En collaboration  avec":($lang=="nl"?"in samenwerking met":"in collaboration with");?></figcaption>
            <a href="https://www.dagvandetrageweg.be/programma" target="_blank" rel="noopener noreferrer"><img src="img/deco/tragewegen-logo.png" alt="logo-partner"></a>
        </figure>
    </div>
</footer>
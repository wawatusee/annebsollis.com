<footer>
    <section id="sitemap">
        <h2>Links</h2>
            <div class="footerNav">
                <nav class="navfooterbloc">
                    <h3>Contacts</h3>
                    <a href="info@annebsollis.com">info@annebsollis.com</a>
                    <a href="tel:+32484708131">+32(0)484 70 81 31</a>
                    <address>Domaine du brin, Passage de l'ambulance<br> 69400 Le Bugue - France</address>
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

</footer>
<?php get_header(); ?>

<!-- About Me -->

<main>
    <?php get_template_part('template-parts/content', 'banner'); ?>
    <section class="container">
        <p>
            <img src="<?php echo get_theme_file_uri('./src/styles/images/about-me-img.png') ?>" alt="myself"
                class="about-me-img">
            Moje ime je Dragana 😉. Inače mogu reći za sebe da sam veliki zaljubljenik u kuhanje i proizvode s domaćih polja. Osim
            kuhanja, volim prirodu, fotografiju, dizajn i životinje, a posebno moju macu Cici ❤ .
            <br>
            <br>
            Kuhanje i estetika su za mene jako povezane stvari koje ne mogu jedna bez druge, i kada sam u
            kuhinji, kada smišljam nove recepte, ideje, jednostavno uvijek pronađem način da ono što skuham ujedno i 
            dizajniram, što za tanjur, što za društvene mreže.
            <br>
            <br>
            Zaljubljenost u kuhanje nisam primila od malih nogu. Ono traje par godina, otkad sam se odselila i počela
            kuhati. Kada sam bila kući, mama je uvijek pravila „klasična“ 😶 jela koja sam voljela, ali isto tako voljela
            sam i neke druge okuse pa sam se odlučila upustiti u te kulinarske avanture. Tako sam malo po malo stvorila
            svoj svijet u kuhanju 🍜🥙🥗 .
            <br>
            <br>
            Što se tiče kuhinja, favorit su mi meksička, kineska i indijska kuhinja. Volim egzotične okuse, začine koji
            su drukčiji, imaju tu neku posebnu aromu. Volim se s njima igrati i eksperimentirati tako da kao rezultat
            uvijek na stol dođe neko fino i ukusno jelo. Svojim blogom želim ljudima pokazati kako za malo novaca i malo
            vremena mogu zaista napraviti brz, zdrav obrok te u isto vrijeme mogu biti kreativni i maštoviti 🎨🍕.
            <br>
            <br>
            Nadam se da ćete kroz moje recepte pronaći inspiraciju i otkriti nove okuse. Ukoliko probate neki od
            recepata, ostavite mi povratnu informaciju - kritiku, pohvalu ili savjet. Hvala na posjeti! Dragana
            <br>
            <br>
            Ukoliko ste raspoloženi za suradnju, ili pak dati određeni savjet, kritiku, možete mi se javiti.
        </p>
    </section>
    <?php get_template_part('template-parts/content', 'newsletter') ?>              

</main>

<?php get_footer(); ?>
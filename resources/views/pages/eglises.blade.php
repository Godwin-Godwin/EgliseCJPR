@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/eglises.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')

    <div class="church_details p-4">

        @switch($eglise)
            @case("TRN")
                <div class="pastoral_couple mb-3">
                    <img src="{{ asset("images/Couple GUIDIBI.png") }}" alt="Couple Pastoral">
                    <div>
                        <h1 class="manager-title"> Couple Pastoral  </h1>
                        <h2> Hermione et Edgard GUIDIBI </h2>
                    </div>
                </div>
                <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Refuge des Nations
                </h4>
                <div class="pastoral-couple_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Pasteur Hermione GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                    <div id="woman_pastor">
                        <h4 class="text-center">Pasteur Edgard GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Premi??re antenne implant??e des ??glises J??sus Pour R??ussir, Le Temple Refuge des Nations est situ?? ?? Cotonou derri??re le stade de l???amiti??, non loin du complexe scolaire Houphou??t Boigny. 
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="horaires d-flex flex-column justify-content-center mt-4">
                        <div class="horaires-title pb-3">
                            <h5>Horaires</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            <ul>
                                <li> Dimanche : Culte de louange et d???adoration : 06H - 09H ??? 17H </li> 
                                <li> Mercredi : Ecole de la r??ussite (19h) </li>
                                <li> Jeudi : Ecole des fondements de la foi (19h) </li>
                                <li> 1er vendredi du mois : Veill??e de pri??re (19h) </li>
                                <li> Samedi : ??cole d???ESTHER ; Campus de Mariage (15h) </li>
                            </ul>
                        </p>
                    </div>
                </div>
                @break
            @case("TBI")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple GUIDIBI.png") }}" alt="Couple Pastoral">
                <div>
                    <h1 class="manager-title"> Couple Pastoral  </h1>
                    <h2> Hermione et Edgard GUIDIBI </h2>
                </div>
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Bethsaleel Isra??l
                </h4>
                <div class="pastoral-couple_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Pasteur Hermione GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                    <div id="woman_pastor">
                        <h4 class="text-center">Pasteur Edgard GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Le Temple Refuge des Nations est situ?? ?? .............................
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="horaires d-flex flex-column justify-content-center mt-4">
                        <div class="horaires-title pb-3">
                            <h5>Horaires</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            <ul>
                                <li> Dimanche : Culte de louange et d???adoration (11h) </li> 
                                <li> Mercredi : Ecole des fondements de la foi (19h) </li>
                                <li> Jeudi : Ecole de la r??ussite (19h) </li>
                                <li> Samedi : Cour de Bapt??me et Na??tre et grandir dans le royaume </li>
                            </ul>
                        </p>
                    </div>
                </div>
                @break
            @case("TPG")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple Assani.png") }}" alt="Couple Pastoral">
                <div>
                    <h2> Pasteur ASSANI Aboubacar </h2>
                    <h2> & sa femme Blanche ASSANI</h2>
                </div>
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Porte de la Gr??ce
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="pastor">
                        <h4 class="text-center">Pasteur Aboubacar ASSANI</h4>
                        <p class="px-3">
                            Mari?? ?? l???Evang??liste Blanche ASSANI et p??re de 04 enfants, le Pst ASSANI Aboubacar est titulaire d???un baccalaur??at en comptabilit??. Ancien cadre ?? la Direction G??n??rale de Fanmilk B??nin, puis promoteur d'une entreprise de vente de produit laitier, celui-ci se consacre totalement au Seigneur suite ?? sa conversion. Apr??s avoir re??u l'appel de Dieu sur sa vie et avoir transit?? par l'??cole missionnaire, celui-ci fut  consacr?? pasteur en 2018. Aujourd'hui, Pasteur des Eglises J??sus Pour R??ussir, il est actuellement Pasteur et dirigeant de l???Antenne Porte de la Gr??ce de Bohicon.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Cinqui??me antenne, implant??e, le Temple Porte de la Gr??ce est situ?? au quartier SACLO,  dans la rue en face de la station JNP ou de l'h??tel Tennessee, juste apr??s le carrefour Dako en quittant Bohicon pour Cotonou et avant le carrefour Dako en quittant Cotonou.
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
                        </div>
                    </div>
                    <div class="horaires d-flex flex-column justify-content-center mt-4">
                        <div class="horaires-title pb-3">
                            <h5>Horaires</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            <ul>
                                <li> Jeudi et Vendredi: enseignements efficaces pour r??ussir dans tous les domaines de  la vie (18h) </li> 
                                <li> Dimanche : Culte de louange et d'adoration (09h) </li>
                            </ul>
                        </p>
                    </div>
                </div>
                @break
            @case("TAT")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Pst Agn??s.png") }}" alt="Couple Pastoral">
                <div>
                    <h2 class="text-white"> Pasteur Agn??s KINIDOHOUN </h2>
                </div>
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Arche du Triomphe
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="pastor">
                        <h4 class="text-center">Pasteur Agn??s KINIDOHOUN</h4>
                        <p class="px-3">
                            Titulaire d???une licence en sociologie, le Pasteur Agn??s KINIDOHOUN est aussi  l'assistante de direction du Pasteur Principal des ??glises J??sus Pour R??ussir. Consacr??e Pasteur en Novembre 2020, elle est ??galement le Responsable et le pasteur dirigeant de l???Antenne Arche de Triomphe de Ahozon et le coordinateur du Temple BETHSALEEL ISRA??L d'Abomey-Calavi.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Sixi??me antenne implant??e, le Temple Arche du Triomphe de  Pahou/ Ahozon est situ?? ?? trois carrefours du march?? de Pahou. Plus pr??cis??ment, dans la rue de la menuiserie et en face du Complexe Saint Davy.
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                        </div>
                    </div>
                    <div class="horaires d-flex flex-column justify-content-center mt-4">
                        <div class="horaires-title pb-3">
                            <h5>Horaires</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            <ul>
                                <li> Moments de pri??re: Vendredi 10h-12h </li> 
                                <li> Culte: Dimanche 10h - 12h </li>
                            </ul>
                        </p>
                    </div>
                </div>
                @break
            @case("TTG")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple Assani.png") }}" alt="Couple Pastoral">
                <div>
                    <h2> Pasteur Arnaud ZANNOU </h2>
                </div>
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Tr??ne de Gr??ce
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Pasteur Arnaud ZANNOU</h4>
                        <p class="px-3">
                            Titulaire d???une licence en administration des finances, option : Finance et Tr??sor publique depuis 2013, sa passion pour Christ lui ouvre les portes du monde professionnelle. Pasteur au Centre J??sus Pour R??ussir depuis Juillet 2016 et Responsable de l???Antenne Tr??ne de Gr??ce de Zoundja depuis 2018, il s'investit dans la construction et dans l'??dification des nouveaux n??s en Christ. Homme de foi, responsable financier ?? Global Service Plus, par la gr??ce de Dieu, il s'??vertue jour apr??s jour ?? d??montrer qu'avec Dieu, on ne peut accomplir que des exploits.
                        </p>
                    </div>
                </div>
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                            <div class="description-title pb-3">
                                <h5>Description</h5>
                                <div class="trait"></div> 
                            </div>
                            <p class="px-3">
                                Quatri??me antenne implant??e,  Le Temple Tr??ne de Gr??ce de  Zoundja est situ?? sur la rue pav?? KEREKOU, non loin de la prison civile.
                            </p>
                    </div>
        
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                        </div>
                    </div>
                    <div class="horaires d-flex flex-column justify-content-center mt-4">
                        <div class="horaires-title pb-3">
                            <h5>Horaires</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            <ul>
                                <li> Mercredi  19h : Cours de bapt??me. </li> 
                                <li> Samedi  08h: ??cole de fondements de la foi et r??p??tition hebdomadaire des chantres. </li>
                                <li> Dimanche 10h : Culte de louange et d???adoration. </li>
                            </ul>
                        </p>
                    </div>
                </div>
                @break
            @case("TPS")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Evang??liste Lionel.png") }}" alt="Couple Pastoral">
                <div>
                    <h2 class="text-white"> Evang??liste Lionel BITIBOTO </h2>
                </div>
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Porte de Salut
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Evang??liste Lionel BITIBOTO </h4>
                        <p class="px-3">
                            Titulaire d???un Brevet de Technicien Sup??rieur et d'une Licence en Gestion des Transports et Logistiques depuis 2012, celui-ci a pu acqu??rir des exp??riences professionnelles aussi bien dans des structures nationales qu???internationales. Sur le plan spirituel, il manifeste son attachement au Seigneur et sa d??termination pour le gain et l???affermissement des  ??mes en tant qu???Ambassadeur de l?????vangile et Responsable de l'Antenne de Porto-Novo depuis 2018.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Le Temple Porte du Salut de Porto-Novo est la 3??me Antenne implant??e des Eglises J??sus Pour R??ussir. Dirig?? par l???Evg Lionel BITIBOTO et l???Assistant Pasteur Sabin DODO, il est situ?? ?? Ouinm?? dans la von pav??e du complexe scolaire Robert Djidonou en allant vers l???h??pital, deuxi??me rue ?? gauche, premi??re maison dans l???angle de rue.
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   
                        </div>
                    </div>
                    <div class="horaires d-flex flex-column justify-content-center mt-4">
                        <div class="horaires-title pb-3">
                            <h5>Horaires</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            <ul>
                                <li> Dimanche : Culte de louange et d???adoration (10H)  </li> 
                                <li> Mercredi : Cour de bapt??me 19h </li>
                                <li> Jeudi : Ecole des fondements de la foi et Ecole de la r??ussite par quinzaine (19h) </li>
                            </ul>
                        </p>
                    </div>
                </div>
                @break
            @case("TCG")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple GUIDIBI.png") }}" alt="Couple Pastoral">
                <div>
                    <h2> Evang??liste Missionnaire Urbain ATCHOO </h2>
                </div>
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Cit?? de Gr??ce
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="pastor">
                        <h4 class="text-center"> Evang??liste Missionnaire Urbain ATCHO </h4>
                        <p class="px-3">
                            Titulaire d'une Licence en Audit interne et contr??le de gestion et d'un BTS en banques et finances. L'Evang??liste Missionnaire Urbain ATCHO int??gre l'??cole des ??vang??listes missionnaires en 2016. Apr??s avoir ??t?? consacr?? en d??cembre 2018, celui-ci est affect?? ?? l'??glise Cit?? de Gr??ce du Togo en Octobre 2019.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Septi??me Antenne implant??e, l'Eglise Cit?? de Gr??ce du Togo est dirig??e par l???Evang??liste Missionnaire Urbain ATCHO assist?? par l?????tudiant missionnaire Emmanuel ADOTO. 
                            Elle est situ??e ?? Ago?? Cacaveli, 2??me avenue ?? gauche, avant la pharmacie Shalom en quittant le carrefour Bodjoma.
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                        </div>
                    </div>
                    <div class="horaires d-flex flex-column justify-content-center mt-4">
                        <div class="horaires-title pb-3">
                            <h5>Horaires</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            <ul>
                                <li> Dimanche : Culte de louange et d???adoration : 10H </li> 
                            </ul>
                        </p>
                    </div>
                </div>
                @break

            @default
                {{ view("pages.welcome") }}
        @endswitch
        
    </div>
    
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection

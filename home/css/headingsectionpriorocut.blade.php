<section class="startpage-top-section">
    <div class="background-canvas">
        <div class="background-canvas__bg"></div>
        <div class="background-canvas__hero hero-image hero-image-campaign default" id="hero-image"></div>
    </div>

    <div class="startpage-top-section__inner">

        <div class="top-section">
                <h1 class="top-section__heading" id="campaign-heading">
                Få Offerter från Experter
                </h1>
                <label for="autocomplete" class="top-section__subheading">Få kontakt med experter redan idag!</label>
            
                <!--<div id="deepquote-app" data-worktype-id=""></div>-->
                <h3 class="h_toppofferta"><b style="font-weight:900;">Få offerter på ToppOffert från flera tjänsteföretag</b></h3>

                <div class="row toppoffert_searchbox" style="padding:10px 0 10px 0">
                        <form action="" method="POST">
                                <div class="grid_search_box">
                            <input type="text" autocomplete placeholder="Vad behöver du hjälp med?" class="input-control toppoffert_search" id="searchService" list="cat_name" onChange="fetchCategories(this.value)"/>

                                <button type="submit" class="btn_search_sok">Sök</button>

                                <datalist id="cat_name" onChange="fetchCategories(catName.value)" onClick="fetchCategories(catName.value)" style="font-weight:800;">
 <option value="">Select an option</option>
   @foreach($categories as $s)
   <option value="{{$s->cat_name}}">{{ ucfirst($s->cat_name) }}</option>
   @endforeach
</datalist> 

                                <div id="subcategories_fetcher"></div>

                            </form>
                                </div>

                                    <div class="icons_box">
                                    
                                    <div>
                                 <img src="{{asset('img/bygg.jpg')}}" class="img-responsive-cat" lazyloading/>
                                    <br/>
                                    <b>Bygg & Renovering</b></div>

                                    <div>
                                    <img src="{{asset('img/transport.jpg')}}" lazyloading class="img-responsive-cat" />
                                    <br/>
                                    <b>Flytt & Transport</b>
                                    </div>

                                    <a href=""><div>
                                    <img src="{{asset('img/stadning.jpg')}}" lazyloading class="img-responsive-cat" alt="Städning" />    
                                    <Br/>
                                    <b>Städning</b>
                                    </div></a>

                                    <div class="">
                                    <img src="{{asset('img/ovriga.jpg')}}" lazyloading class="img-responsive-cat" /><Br/>
                                        <b>Övriga</b>
                                    </div>
                                    </div>



                                        </div>
                                            </div>

           
        </div>
    </div>
</section>

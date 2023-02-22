
<form method="POST" action="{{route('skapa_request')}}">
@csrf
@method('POST')
<div class="box box-enquiry-create has-button-bar">
        <div class="media media-center block">
            <div class="media-left">
                
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.5 18.5" class="icon-round-bg">
  <path d="M5.2 5.3H12v1.1H5.2zm10.2 8.3c.5-.9.4-2.1-.4-2.9-.4-.4-1-.7-1.7-.7-.6 0-1.3.3-1.7.7-.5.5-.7 1.1-.7 1.7 0 .6.3 1.3.7 1.7.5.5 1.1.7 1.7.7.4 0 .8-.1 1.2-.3l2.7 2.7.9-.9-2.7-2.7zm-1.1-.1c-.5.5-1.5.5-2 0-.6-.6-.6-1.5 0-2 .3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1z" />
  <path d="M14.1 15.5H4.5c-.2 0-.3-.1-.3-.3V3.3c0-.2.2-.3.3-.3H14c.2 0 .3.1.3.3v6.1c.4.1.8.3 1.1.5V3.3c0-.8-.6-1.4-1.4-1.4H4.5c-.8 0-1.4.6-1.4 1.4v11.9c0 .8.6 1.4 1.4 1.4H14c.6 0 .8-.1 1-.6l-.5-.5h-.4z" />
  <path d="M5.2 8.4H12v1.1H5.2z" />
</svg>

            </div>
            <div class="media-content h4">
                Vad behöver du hjälp med?
            </div>
        </div>

<div class="block">            
<div class="row" >

<input id="WhatText" name="catName" maxlength="100" list="cat_name" value="@if(isset($catSelected)) {{$catName}} @else {{old('catName')}} @endif" onChange="fetchCategoriesForSkapa(this.value)" tabindex="1" title="Ange uppdragstyp" placeholder="Ange uppdragstyp" onClick="fetchCategoriesForSkapa(this.value)" name="cat_name" class="form-control-lg input-lg flex-input" placeholder="Ange uppdragstyp" required />

<datalist id="cat_name" onChange="fetchCategoriesForSkapa(catName.value)" onClick="fetchCategoriesForSkapa(catName.value)">

@if(isset($catSelected))
<option selected value="{{$catName}}">{{$catName}}</option>
@else
<option value="">Select an option</option>

@foreach($categories as $s)

   <option value="{{$s->cat_name}}">{{ ucfirst($s->cat_name) }}</option>

   @endforeach
   @endif

  </datalist> 

</div>

<div class="row" >
<label for='sub_category'>Välj en underkategori för din förfrågan</label>

<div class="flex-input dropdown">

@if(isset($subCatSelected) && !is_null($subCatSelected))
<input type="text" name="sub_category" value="{{$subCatNameSelected}}" />
@else
<div id="subcategories_fetcher"></div>
@endif

</div>
        </div>
            </div>
                 </div>

        <hr class="divider-full-width" />
        <div class="media media-center block block-first">
        <div class="media-left">
            

<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="icon-round-bg">
  <path d="M79.3 47.7c-1.9 0-3.5 1.6-3.5 3.5v29.3H19.5V24.2h29.3c1.9 0 3.5-1.6 3.5-3.5s-1.6-3.5-3.5-3.5H17.2c-2.6 0-4.7 2.1-4.7 4.7v60.9c0 2.6 2.1 4.7 4.7 4.7h60.9c2.6 0 4.7-2.1 4.7-4.7V51.2c0-2-1.6-3.5-3.5-3.5zm7.4-24.3L76.6 13.3c-.5-.5-1.3-.8-2-.8s-1.4.3-2 .8l-39 39v14.1h14.1l39-39c.6-.6.8-1.3.8-2s-.3-1.4-.8-2zm-41.4 36h-4.7v-4.7l34-34 4.7 4.7-34 34z" />
</svg>

        </div>
        <div class="media-content h4">
            Beskrivning
        </div>
    </div>
    <label for="request_title">Beskrivning</label>
    <textarea class="flex-input enquiry-description" cols="20" id="request_title" maxlength="4000" name="request_title" placeholder="Tips: En bra och tydlig beskrivning möjliggör fler och bättre svar" rows="2" tabindex="3" required>
</textarea>

<span class="text-black">@if($errors->has('request_title'))
              {{ $errors->first('request_title') }}
              @endif
            </span>

            <!--for territory of assignment-->
            <div class="column">
              <label for="territory">Plats</label>
            <input class="input-name full-width" id="territory" name="territory" type="text" value="{{old('territory')}}" required/>
            <span class="text-black">@if($errors->has('territory'))
              {{ $errors->first('territory') }}
              @endif
            </span>


</div>


<div class="two-columns no-margins">
            <div class="column">
                <label for="WhoId">Uppdraget ska utf&#246;ras &#229;t</label>
                <div class="flex-input dropdown">
<select id="WhoId" name="executed_for" tabindex="4">
<option value="1">Bostadsr&#228;ttsf&#246;rening</option>
<option value="2">Byggherre/Entrepren&#246;r</option>
<option value="3">F&#246;retag</option>
<option value="4">Ideell f&#246;rening</option>
<option value="5">Kommun/Myndighet</option>
<option value="6">Privatperson</option>
<option value="7">Villaf&#246;rening</option>

</select></div>
            </div>

            <div class="column">
                <label for="WhenId">N&#228;r ska uppdraget p&#229;b&#246;rjas</label>
                <div class="flex-input dropdown">
                    <select id="WhenId" name="when_to">
                    <option value="Snarast m&#246;jligt">Snarast m&#246;jligt</option>
                    <option value="Inom 1 m&#229;nad">Inom 1 m&#229;nad</option>
                    <option value="Inom 3 m&#229;nader">Inom 3 m&#229;nader</option> 
                    <option value="Inom 6 m&#229;nader">Inom 6 m&#229;nader</option>
                    <option value="Inom 12 m&#229;nader">Inom 12 m&#229;nader</option>
                    <option value="Tidpunkt mindre viktig">Tidpunkt mindre viktig</option>
                    </select>
                  </div>
            </div>
      
      </div>

      <div class="two-columns no-margins">

      <div class="column">
                <label for="fro_date">Från vilket datum </label>
                <input class="input-name full-width" id="fro_date" name="fro_date" type="date" value="{{old('fro_date')}}" required/>

                <span class="text-black">@if($errors->has('fro_date'))
              {{ $errors->first('fro_date') }}
              @endif
            </span>
</div>


<div class="column">
                <label for="to_date">Till när</label>
                <input class="input-name full-width" id="to_date" name="to_date" type="date" value="{{old('to_date')}}" required/>
            </div>

            <span class="text-black">@if($errors->has('to_date'))
              {{ $errors->first('to_date') }}
              @endif
            </span>

</div>



    <input id="ShowBygghemma" name="ShowBygghemma" type="hidden" value="False" />

    <hr class="divider-full-width" />
    <div class="media media-center block">
        <div class="media-left">
          
        </div>
        <div class="media-content h4">
            Kontaktuppgifter
            <span class="tooltipstered tooltip tooltip-small pull-right" data-tooltip="Dina kontaktuppgifter kan endast ses av sex företag">
                
            </span>
        </div>
    </div>

    <div class="two-columns grid-inputs">
        <div class="column">
            <div class="form-group form-group-half">
                <label for="Name">Namn</label>
                <input autocomplete="name" class="input-name full-width" id="Name" name="Name" tabindex="12" type="text" value="" />
            </div>
            <span class="text-black">@if($errors->has('Name'))
              {{ $errors->first('Name') }}
              @endif
            </span>

          </div>

        <div class="column">
            <div class="form-group">
                <label for="Name">E-post</label>
                <input autocomplete="email" class="full-width input-email" id="Email" name="Email" tabindex="13" type="email" value="" />
            </div>

            <span class="text-black">@if($errors->has('Email'))
              {{ $errors->first('Email') }}
              @endif
            </span>

        </div>

        <div class="column">
            <div class="form-group form-group-half">
                <label for="Name">Telefon</label>
                <div class="where-postcode-container form-group no-label ">
                <input autocomplete="tel" class="full-width input-phone" id="Phone" name="Phone" tabindex="14" type="tel" value="" />
            </div></div>
            <span class="text-black">@if($errors->has('Phone'))
              {{ $errors->first('Phone') }}
              @endif
            </span>

          </div>

            <div class="column">
                <div class="form-group form-group-whatwhere">
                    <label for="Name">Postnummer (d&#228;r uppdraget ska utf&#246;ras)</label>
    <div class="where-postcode-container form-group no-label ">
        <input autocomplete="postal-code" class="where-postcode-field input-address full-width no-validation" data-regexp="^(?:[ ]*[0-9]){5}[?:[ ]*]*$" id="PostCode" name="PostCode" placeholder="" tabIndex="16" title="Postnr." type="number" value="" />
    </div>
    <span class="text-black">@if($errors->has('PostCode'))
              {{ $errors->first('PostCode') }}
              @endif
            </span>


                </div>
            </div>

    </div>

    <div class="two-columns no-margins">
            <div class="column">
                <div class="form-group form-group-half">
                    <label for="ContactPreferencesId">N&#228;r vill du bli kontaktad</label>
                    <div class="flex-input dropdown">
                      <select id="ContactPreferencesId" name="whentobecontacted">
          <option value="N&#228;r som helst">N&#228;r som helst</option>
<option value="Omg&#229;ende">Omg&#229;ende</option>
<option value="F&#246;rmiddag">F&#246;rmiddag</option>
<option value="Eftermiddag">Eftermiddag</option>
<option value="Kv&#228;ll">Kv&#228;ll</option>
</select></div>
                </div>
            </div>

        <div class="column nolabel-input">


<div class="fileuploader-wrapper">
    
    <div class="progress-bar hidden">
        <div class="progress" style="width: 0%;"></div>
    </div>

    <div class="uploaded-files hidden">
        
    </div>
      </div>        
       </div>
          </div>


    <input class="what-selection-method-field" id="WhatSelectionMethod" name="WhatSelectionMethod" type="hidden" value="preset" />
    <p>
        Vi på {{config('app.name')}} är måna om din personliga integritet och vår <a href="{{route('integritetspolicy')}}" class="link">integritetspolicy</a> förklarar hur vi samlar in och använder dina personuppgifter. Genom att klicka på knappen '{{config('app.name')}}} mig!' skickar du in din förfrågan och godkänner våra användarvillkor för att använda {{config('app.name')}} tjänst.
    </p>

    <div class="button-bar">
        <button type="submit" id="enquiry-form-submit" class="button-large button-primary click-once button-create-enquiry button-flat" tabindex="20">
            <div class="button-spinner"></div>
            <span data-submit-text="Skapar förfrågan...">{{config('app.name')}} mig!</span>
            <span class="badge">Gratis!</span>
        </button>
    </div>
</div>
<input name="__RequestVerificationToken" type="hidden" value="my7vqT9y5FIUPq_BKjYscj3Cz0FymyG2OA3US_TKU7x-N4HJTyWwLTaEwvblCeZRMVyzlHMrYnJp4qwzuLpMX7i1ESJllIATWAPyqiNdL581" />
</form>            
</div>

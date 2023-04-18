@extends('layouts.simple_pages_header')
@section('content')


  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="bg-img-start" style="background-image: url({{ asset('svg/components/card-11.svg') }} );">
      <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
        <div class="w-md-80 w-lg-80 text-center mx-md-auto">
          <h1 style="font-family:Space Grotesk;font-weight:800;font-size:23px;">FAQs</h1>
          <p>Här har vi sammanställt några av de vanligaste frågorna vi brukar få och svaren på dessa. Hittar du inte det du söker eller vill fråga mer så får du gärna kontakta oss på info@toppoffert.se så hjälper vi dig.</p>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <!-- FAQ -->
    <div class="container content-space-2 content-space-b-lg-3">
      <div class="w-lg-75 mx-lg-auto">
        <div class="d-grid gap-10">
          <div class="d-grid gap-3">
            <!-- Accordion -->
            <div class="accordion accordion-flush accordion-lg" id="accordionFAQBasics">
              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsOne">
                  <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsOne" aria-expanded="true" aria-controls="collapseBasicsOne">
                  Kan ToppOffert hjälpa mig med min Flytt?
                  </a>
                </div>
                <div id="collapseBasicsOne" class="accordion-collapse collapse show" aria-labelledby="headingBasicsOne" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                  ToppOffert förmedlar kontakt med Flyttfirman och vi är inte själva ett Flytt företag och gör därför inga Flytt arbeten själva. Däremot kan du söka efter kvalitetssäkrade Flyttfirmor och lägga upp anbudsförfrågningar via ToppOffert. Med ToppOffert är det både enkelt och tryggt att upphandla företag.
				   </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsTwo">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsTwo" aria-expanded="false" aria-controls="collapseBasicsTwo">
                  Hur fungerar ToppOffert kvalitetssäkring?
                  </a>
                </div>
                <div id="collapseBasicsTwo" class="accordion-collapse collapse" aria-labelledby="headingBasicsTwo" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                  Vi kvalitetssäkrar alla anslutna medlemsföretag för att öka din trygghet när du upphandlar tjänster. Vi har även profilsidor på våra anslutna företag med kundomdömen på och information om referensprojekt. Läs gärna mer om hur vår kvalitetssäkring fungerar.
				  </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsThree">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsThree" aria-expanded="false" aria-controls="collapseBasicsThree">
                  Hur gör jag för att sätta omdöme på ett företag?
                  </a>
                </div>
                <div id="collapseBasicsThree" class="accordion-collapse collapse" aria-labelledby="headingBasicsThree" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                  Om du har lagt upp en förfrågan på ToppOffert kan du sätta ett omdöme på den Företaget du har anlitat för jobbet. Det gör du genom att logga in på ditt konto, gå till “Mina förfrågningar” och klicka på din anbudsförfrågan i listan varefter det finns en möjlighet att sätta ett omdöme. Har du inget konto så går det självklart bra att kontakta oss på info@toppoffert.se också.
                  </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsFour">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsFour" aria-expanded="false" aria-controls="collapseBasicsFour">
                  Varför kan inte alla få sätta omdömen på vilka företag man vill?
                  </a>
                </div>
                <div id="collapseBasicsFour" class="accordion-collapse collapse" aria-labelledby="headingBasicsFour" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                  
                  Vår policy är att man bara ska kunna sätta omdöme på ett företag man verkligen har använt för att minska risken för falska eller grundlösa omdömen, bra såväl som dåliga.
                </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsFive">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsFive" aria-expanded="false" aria-controls="collapseBasicsFive">
                  Hur stänger jag av min förfrågan på ToppOffert?
                  </a>
                </div>
                <div id="collapseBasicsFive" class="accordion-collapse collapse" aria-labelledby="headingBasicsFive" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                  Du kan maximalt få TRE svar på din förfrågan via ToppOffert. Om du vill stänga av den innan det så kan du logga in på ditt konto och gå till “Mina förfrågningar” och klicka “Inaktivera” på din anbudsförfrågan. Den är då inte längre synlig för hantverkarna i systemet. Efter tre månader inaktiveras din förfrågan automatiskt i systemet.
                </div>
                </div>
              </div>
              <!-- End Accordion Item -->

			 <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsEight">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsEight" aria-expanded="false" aria-controls="collapseBasicsEight">
                  Kostar det något att använda ToppOffert?
                  </a>
                </div>
                <div id="collapseBasicsEight" class="accordion-collapse collapse" aria-labelledby="headingBasicsEight" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">

                  ToppOffert är en gratistjänst för konsumenter och det kostar ingenting att lägga upp en förfrågan.
                 </div>
                </div>
              </div>
              <!-- End Accordion Item -->

            </div>
            <!-- End Accordion -->
          </div>
 
		  
        </div>
      </div>
    </div>
    <!-- End FAQ -->
  </main>




@endsection
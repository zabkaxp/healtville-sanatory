(function($){
this.resultsDiv = $("#search-overlay__results");
this.searchField = $("#search-term");
this.typingTimer;
this.isSpinnerVisible = false;
this.previousValue;
 
this.openButton.on("click", function openOverlay() {
    $(".search-overlay").addClass("search-overlay--active");
    $("body").addClass("body-no-scroll");
  }
   )
    
    
this.closeButton.on("click", function closeOverlay() {
    $(".search-overlay").removeClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");
  })
    
    
$("#search-term").on("keyUp", function typingLogic() {
    if (this.searchField.val() != this.previousValue) {  // zeby sie spiner nie wlanczal po nacisnieciu ctrl, strzalki..
      clearTimeout(this.typingTimer); // resetujemy czas ktory pozostal do setTimeOut, zeby nie wysylac requesta po kazdej literze tylko po 750

      if (this.searchField.val()) {
        if (!this.isSpinnerVisible) { //zeby sie na nowo nie krecil po kazdej literze
          this.resultsDiv.html('<div class="spinner-loader"></div>'); //spinerek po literze: animation: spin 1s infinite linear;
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 750); // pokazujemy wyniki tylko po 750ms, zapisujemy pozost czas w zmiennej
      } else {
        this.resultsDiv.html(''); // usuniecie spinera z htmla jesli usunelismy zapytanie
        this.isSpinnerVisible = false;
      }

    }

    this.previousValue = this.searchField.val();
  });
    
  getResults() {
    $.getJSON(universityData.root_url + '/wp-json/university/v1/search?term=' + this.searchField.val(), (results) => { // do getJSON dajemy dwie zmienne, 1wsza 'send request' konstruujemy link do JSONA, 2ga 'get request' pobieramy wyniki w zmiennej np results
      this.resultsDiv.html(`
        <div class="row">
          <div class="one-third">
            <h2 class="search-overlay__section-title">General Information</h2>
            ${results.generalInfo.length ? '<ul class="link-list min-list">' : '<p>No general information matches that search.</p>'}
              ${results.generalInfo.map(item => `<li><a href="${item.permalink}">${item.title}</a> ${item.postType == 'post' ? `by ${item.authorName}` : ''}</li>`).join('')}
            ${results.generalInfo.length ? '</ul>' : ''}
          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Programs</h2>
            ${results.programs.length ? '<ul class="link-list min-list">' : `<p>No programs match that search. <a href="${universityData.root_url}/programs">View all programs</a></p>`}
              ${results.programs.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join('')}
            ${results.programs.length ? '</ul>' : ''}

            <h2 class="search-overlay__section-title">Professors</h2>
            ${results.professors.length ? '<ul class="professor-cards">' : `<p>No professors match that search.</p>`}
              ${results.professors.map(item => `
                <li class="professor-card__list-item">
                  <a class="professor-card" href="${item.permalink}">
                    <img class="professor-card__image" src="${item.image}">
                    <span class="professor-card__name">${item.title}</span>
                  </a>
                </li>
              `).join('')}
            ${results.professors.length ? '</ul>' : ''}

          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Campuses</h2>
            ${results.campuses.length ? '<ul class="link-list min-list">' : `<p>No campuses match that search. <a href="${universityData.root_url}/campuses">View all campuses</a></p>`}
              ${results.campuses.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join('')}
            ${results.campuses.length ? '</ul>' : ''}

            <h2 class="search-overlay__section-title">Events</h2>
            ${results.events.length ? '' : `<p>No events match that search. <a href="${universityData.root_url}/events">View all events</a></p>`}
              ${results.events.map(item => `
                <div class="event-summary">
                  <a class="event-summary__date t-center" href="${item.permalink}">
                    <span class="event-summary__month">${item.month}</span>
                    <span class="event-summary__day">${item.day}</span>  
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="${item.permalink}">${item.title}</a></h5>
                    <p>${item.description} <a href="${item.permalink}" class="nu gray">Learn more</a></p>
                  </div>
                </div>
              `).join('')}

          </div>
        </div>
      `);
      this.isSpinnerVisible = false;
    });

  }
})(jQuery);
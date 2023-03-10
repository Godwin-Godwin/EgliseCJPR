@extends('layouts.template')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
  <header>
    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{ asset("images/SLIDE_1.png") }}" alt="SLIDE">
                <div class="carousel-caption">
                    <h1>
                        Bienvenue sur le portail numérique des Eglises Centre Jésus Pour Réussir
                    </h1>
                    <h5>
                        Notre mission c'est de démontrer qu'avec Christ, on  peut réussir dans tous les domaines de notre vie.
                    </h5>
                </div>
                
            </div>
            <div class="carousel-item">
                <img src="{{ asset("images/SLIDE_2.jpg") }}" alt="SLIDE">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset("images/SLIDE_3.jpg") }}" alt="SLIDE">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset("images/SLIDE_2.jpg") }}" alt="SLIDE">
            </div>
            <div class="carousel-item" data-bs-interval="41000">
                <video class="img-fluid" src="{{ asset("Videos/notre-vision.mp4") }}" autoplay loop muted></video>
            </div>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="4"></button>
        </div>            
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carousel">
            <div class="fas fa-angle-left slide-arrow"></div>
        </button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carousel">
            <div class="fas fa-angle-right slide-arrow"></div>
        </button>

    </div>
  </header>
  <div class="annonces mt-2 py-2">
    <span>
      <span class="info">
        TRN : 1er culte : 06 h - 08 h  |  2ème culte : 08 h - 10 h   |  3ème culte : 17 h - 20 h
      </span>
      
      <span class="info">
        TBI : Culte Unique : 11 h - 14 h
      </span>
    </span>
  </div>
  <div class="main px-5">
    <div class="about-us text-center mb-5">
        <div class="section-title my-3">
            <h1> A propos</h1>
            <div class="trait"></div> <br>
        </div>
        <p>
          {!! Str::limit('
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error voluptas non rerum fugit aperiam ipsa, eveniet minus ab corrupti labore quia atque eius qui illum voluptatibus quaerat architecto ut odit asperiores necessitatibus quos id. Aliquid illum praesentium voluptatibus eius sed, eum nam dicta animi est incidunt debitis! Amet laudantium praesentium, ut suscipit, modi corrupti atque nobis non exercitationem ea enim sequi sit aliquid necessitatibus alias vitae veritatis impedit consectetur rem consequatur eveniet. Sed beatae ex aut, vitae nisi dignissimos, nihil sequi veritatis commodi ipsam molestias reprehenderit inventore minima voluptatem iste molestiae quis iusto cum incidunt, voluptatum illum deserunt adipisci. Assumenda, pariatur? Molestias eligendi aut ipsam est nesciunt a, fuga quaerat. Quaerat asperiores maxime ipsum ratione deserunt blanditiis est, ipsam, beatae quae, officia neque eligendi in ad ex temporibus dolores. Beatae eos earum accusamus reprehenderit, maiores reiciendis culpa voluptatibus quasi, qui dolorum itaque! Laudantium voluptatem quam officiis quos ipsum, repellat vero tenetur in ut doloribus vel quae ad? Minus, ut cumque rerum quia a saepe, voluptate, adipisci maxime iure ea perspiciatis reprehenderit maiores odio nostrum necessitatibus vel fugit. Incidunt, amet modi maiores voluptates, molestias neque eum alias possimus eaque obcaecati dolorum libero itaque! Amet molestiae at unde. Corrupti quaerat explicabo officia?
          ', 350) !!}
            <a href="{{ url("about-us") }}">lire plus</a>                
        </p>
    </div>
    <div class="recentMessages mb-5">
        <div class="section-title">
            <h1> Récents Messages</h1>
            <div class="trait"></div> <br>
        </div>
      
        <div class="Messages pb-4">
              <div class="filter pb-3 mt-3">
                <select name="orateur">
                  <option disabled selected>Orateurs</option>
                  <option value="">Edgar</option>
                  <option value="">Marc</option>
                  <option value="">Raoul WAFO</option>
                </select>
                <select name="serie">
                  <option disabled selected>Séries</option>
                  <option value="">Croisade 2020-2021</option>
                  <option value="">Séminaire 2019-2020 (Jeune Lève toi)</option>
                  <option value="">Femmes.........</option>
                </select>
              </div>
              <div class="messagesOnMainPage mb-3">
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_1.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_4.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_2.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_3.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Ev Reynold TOKANOU </div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_4.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_1.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_2.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                @for ($i = 0; $i < 20; $i++)
                <div class="singleMessage">
                  <a href=" {{ url('video-stream', "id_video") }}" >
                    <img src="{{ asset("images/card_3.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> 
                      {!! Str::limit('
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!
                      ',100) !!} 
                    </p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Ev Reynold TOKANOU</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                @endfor
              </div>

              <div class="messages-pagination-container"></div>
              
        </div>
          
    </div>
    <div class="newInKingdom">
        <div class="section-title">
            <h1 class="text-center"> Nouveau dans le Royaume</h1>
            <div class="trait"></div> <br>
            <p>Que dois-je savoir ?</p>

        </div>
        <div class="lessons p-5 mb-5">
          <div class="lesson">
            <a href="{{ url('lessons/cours-de-bapteme') }}"> 
              <img src="{{ asset("images/lesson_1.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-objectif-de-vie') }}">
              <img src="{{ asset("images/lesson_2.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/naitre-et-grandir-dans-le-royaume') }}"> 
              <img src="{{ asset("images/lesson_3.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-de-la-reussite') }}"> 
              <img src="{{ asset("images/lesson_4.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-des-fondements-de-la-foi') }}"> 
              <img src="{{ asset("images/lesson_5.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-des-evangelistes-missionnaires') }}"> 
              <img src="{{ asset("images/lesson_6.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-esther') }}"> 
              <img src="{{ asset("images/lesson_7.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-pastorale') }}"> 
              <img src="{{ asset("images/lesson_9.png") }}" alt="LESSON"> 
            </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/campus-de-mariage') }}"> 
              <img src="{{ asset("images/lesson_8.png") }}" alt="LESSON"> 
            </a>
          </div>
        </div>
    </div>
    <div class="testimonies mb-5">
        <div class="section-title">
            <h1> Témoignages</h1>
            <div class="trait"></div> <br>
        </div>
        <div class="testimonieSpace">
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> Calavi </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              <span class="fas fa-plus-circle"></span>
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA 
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> COTONOU </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              <span class="fas fa-plus-circle"></span>
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> MENONTIN </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              <span class="fas fa-plus-circle"></span>
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> AGLA </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              <span class="fas fa-plus-circle"></span>
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> GODOMEY </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              <span class="fas fa-plus-circle"></span>
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> DJIDJE </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              <span class="fas fa-plus-circle"></span>
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> Porto-Novo </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              <span class="fas fa-plus-circle"></span>
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
        
        </div>
        <div class="testimony-pagination-container"></div>
        <div>
          <button class="testimony-button">Laisser un témoignage</button>
        </div>
    </div>
    <div class="library">
        <div class="section-title mb-3">
            <h1> Librairie RHEMA</h1>
            <div class="trait"></div> <br>
        </div>
        <div class="books-content">

          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_1.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_2.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_3.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_4.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_1.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_2.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_3.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_4.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_1.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>
          
          <div class="book">
            <a href=" {{ url('books', "id_book") }}" >
              <img src="{{ asset("images/book_2.jpg") }}" alt="IMAGE">
              <div class="book-infos">
                <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                <div class="bookPrice text-end">$24.99</div> 
              </div>
            </a>
          </div>

        </div>
        
        <div class="library-pagination-container my-5"></div>

        <a class="fas fa-angle-double-up go-top-page" href="#carousel"></a>

      </div>
  </div>

  <div class="join-us mb-5" id="join-us">
      <div class="section-title mb-3">
          <h1> Contactez-nous</h1>
          <div class="trait"></div> <br>
      </div>
      <div class="form py-5">
        <form action="{{ route('welcome.submitContactForm') }}" method="POST" class="needs-validation" novalidate>
          @csrf
          <div class="input">
            <input type="text" placeholder="Sujet" name="topic" class="form-control @error('topic') is-invalid @enderror" 
            required value="{{ old('topic') }}">
            @error('topic')
                <div class="invalid-feedback text-warning"> {{ $message }} </div>
            @enderror
          </div>
          <div class="userInfos">
            <div class="input w-50">
              <input type="text" placeholder="Nom et Prénoms" name="username" class="w-100 form-control @error('username') is-invalid @enderror" 
              required value="{{ old('username') }}">
              @error('username')
                  <div class="invalid-feedback text-warning"> {{ $message }} </div>
              @enderror
            </div>

            <div class="input w-50">
              <input type="email" placeholder="E-mail" name="userEmail" class="w-100 form-control @error('userEmail') is-invalid @enderror" 
              required value="{{ old('userEmail') }}">
              @error('userEmail')
                  <div class="invalid-feedback text-warning"> {{ $message }} </div>
              @enderror
            </div>
          </div>

          <div class="input w-100">
            <textarea name="userMessage" rows="10" placeholder="Laissez votre message ici..." class="w-100 form-control @error('userMessage') is-invalid @enderror" 
            required value="{{ old('userMessage') }}"></textarea>
            @error('userMessage')
                <div class="invalid-feedback text-warning"> {{ $message }} </div>
            @enderror
          </div>
          <input type="submit" value="Envoyer" id="join-us-submit-button">
        </form>
      </div>
  </div>
  @include('pages.newsletterpopup')
  @include('pages.testimonypopup')
  @include('pages.testimony_detail_popup')

  <script>
    (function () {
      'use strict'

      var forms = document.querySelectorAll('.needs-validation')

      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()

    $(function(){

      let userScreenWidth = screen.width;

      // if(userScreenWidth > 576){
        let testimonyperPage;
        let messageperPage;
        let bookperPage;

        // Pagination for testimoies
        let testimonies = $(".singleTestimony");
        let testimoniesNumber = testimonies.length;
        if(userScreenWidth < 576){
          testimonyperPage  = 1;
          messageperPage = 4;
          bookperPage = 1;
        }
        else if( userScreenWidth >= 576 && userScreenWidth < 768){
          testimonyperPage  = 2;
          messageperPage = 6;
          bookperPage = 2;
        }
        else{
          testimonyperPage  = 3;
          messageperPage = 6;
          bookperPage = 5;
        }

        testimonies.slice(testimonyperPage ).hide();

        $(".testimony-pagination-container").pagination({
          items : testimoniesNumber,
          itemsOnPage : testimonyperPage ,
          prevText : "<<",
          nextText : ">>",
          onPageClick : function(pageNumber)
          {
            let showFrom = testimonyperPage  * (pageNumber - 1);
            let showTo = showFrom + testimonyperPage ;
            testimonies.hide().slice(showFrom, showTo).show();
          }
        });

        // Pagination for recent messages 
        let messages = $(".singleMessage");
        let messagesNumber = messages.length;

        messages.slice(messageperPage).hide();

        $(".messages-pagination-container").pagination({
          items : messagesNumber,
          itemsOnPage : messageperPage,
          prevText : "<<",
          nextText : ">>",
          onPageClick : function(pageNumber)
          {
            let showFrom = messageperPage * (pageNumber - 1);
            let showTo = showFrom + messageperPage;
            messages.hide().slice(showFrom, showTo).show();
          }
        });

        // Pagination for books
        let books = $(".book");
        let booksNumber = books.length;

        books.slice(bookperPage).hide();

        $(".library-pagination-container").pagination({
          items : booksNumber,
          itemsOnPage : bookperPage,
          prevText : "<<",
          nextText : ">>",
          onPageClick : function(pageNumber)
          {
            let showFrom = bookperPage * (pageNumber - 1);
            let showTo = showFrom + bookperPage;
            books.hide().slice(showFrom, showTo).show();
          }
        });
      // }
      

      setTimeout(popupNewsletter, 5000);

      function popupNewsletter(){
        $("#popupNewsletter").fadeIn();
      }
      
      $("#close-popupNewsletter").click(function(){
        $("#popupNewsletter").fadeOut();
      });

      $(".testimony-button").click(function(){
        $("#testimonypopup").show();
      });

      $(".close-testimonypopup").click(function(){
        $("#testimonypopup").hide();
      });

      $(".testimonyContent span").click(function(){
        $("#testimony_detail_popup").show();
      });

      $(".close-testimony_detail_popup").click(function(){
        $("#testimony_detail_popup").hide();
      });


    });

</script>
@endsection
      
@section('footer')
  @include('layouts.partials.footer')
@endsection
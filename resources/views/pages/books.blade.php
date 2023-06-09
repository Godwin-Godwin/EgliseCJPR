@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/books.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')

    @include('pages.commandBookPopup')
    <div id="exhibition-image">
        <div> Librairie RHEMA </div>
    </div>

    <div class="book-detail">
        <div class="book-image">
            <span class="fw-bold author-name-for-mobile text-primary"> Author name</span>
            <div class="book-title-for-mobile fw-bold fs-3">Titre du livre</div>

            <div class="image-and-price">
                <img src="{{ asset("images/book_1.jpg") }}" alt="Book's picture">
                <span class="book-price-for-mobile">
                    <span class="price">
                        <span>$</span>
                        <span>24.99</span>
                    </span>
                </span>    
            </div>
        </div>
        <div class="book-detail-infos">
            <div class="d-flex justify-content-between">
                <div class="book-title fw-bold fs-3">Titre du livre</div>
                <div class="book-price fs-3">$24.99</div>
            </div>
            <div class="book-summary"> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sapiente consequuntur perferendis dolores temporibus magnam, voluptate ullam, dolor necessitatibus illo natus quod a non ipsa nostrum tempora consectetur eum odio sit nisi dolorum doloribus nesciunt. Fugiat adipisci, ea nemo quaerat excepturi consectetur vero, aspernatur, consequatur amet minima quisquam nesciunt ullam!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sapiente consequuntur perferendis dolores temporibus magnam, voluptate ullam, dolor necessitatibus illo natus quod a non ipsa nostrum tempora consectetur eum odio sit nisi dolorum doloribus nesciunt. Fugiat adipisci, ea nemo quaerat excepturi consectetur vero, aspernatur, consequatur amet minima quisquam nesciunt ullam!
            </div>
            <div class="author-name">
                <span class="fw-bold"> Author name</span>
                <button class="buy-book-button"> Passer la commande </button>
            </div>
            
        </div>
    </div>

    <div class="other-books">
        <div class="book-filter">
            <select name="authors" class="form-select">
                <option selected disabled> Auteurs </option>
                <option value="Hermione"> Pasteur Hermione GUIDIBI </option>
                <option value="Edgard"> Pasteur Edgard GUIDIBI </option>
                <option value="Reynold"> Ev Reynold TOKANOU </option>
            </select>
            <select name="categories" class="form-select">
                <option selected disabled> Catégories </option>
                <option value="foi"> Foi </option>
                <option value="Leadership"> Leadership </option>
                <option value="Couple"> Couple </option>
            </select>
        </div>

        <div class="other-books-content">
            <div class="library-book">
                
                  <img src="{{ asset("images/book_1.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_2.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_3.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_4.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_1.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_2.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_3.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_4.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_1.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
              
              <div class="library-book">
                
                  <img src="{{ asset("images/book_2.jpg") }}" alt="IMAGE">
                  <div class="book-infos">
                    <div class="bookTitle px-1 pt-2"> Lorem ipsum dolor. </div>
                    <div class="bookPrice text-end">$24.99</div> 
                  </div>
                
              </div>
        </div>
    </div>

    <div class="library-pagination-container my-5 "></div>

    <script>
        $(function(){
            $(".buy-book-button").click(function(){
                $("#commandBookPopup").show();
            });

            $(".close-commandBookPopup").click(function(){
                $("#commandBookPopup").hide();
            });

            $(".library-book").each(function(){
                $(this).click(function(){
                    let bookImageSource = $(this).children("img").prop("src");
                    $(".book-detail img").prop("src",bookImageSource);
                });
            });

            // Pagination for books
            let books = $(".library-book");
            let booksNumber = books.length;
            let bookperPage = 8;

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
        });
    </script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection
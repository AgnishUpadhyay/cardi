<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
      <meta name="description" content="New NewsM4 Theme HTML Template - Download Now!">
      <title>Cardinal Report</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/web/assets/mobirise-icons2/mobirise2.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/tether/tether.min.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/bootstrap/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/bootstrap/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/dropdown/css/style.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/socicon/css/styles.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/theme/css/style.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/recaptcha.css">
      <link rel="preload" as="style" href="https://mobirise.com/extensions/newsm4/technews/assets/mobirise/css/mbr-additional.css">
      <link rel="stylesheet" href="https://mobirise.com/extensions/newsm4/technews/assets/mobirise/css/mbr-additional.css" type="text/css">
      <style>
      .pagination-container {
        width: 120%;
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }
      .pagination-container .page-item .page-link 
      {
        background-color: black; 
        color: white; 
        border-color: #00BFFF;
        border-radius:8px;
      }
      .pagination-container .page-item .page-link {
        padding: 10px 15px; 
        margin: 5px;
      }
      .pagination-container .page-item .page-link:hover {
        background-color: #2C3539; 
      }
      .pagination-container .page-item.active .page-link {
        background-color: white;
        color: black;
        font-weight: bold;
        padding: 15px 20px; 
        margin-top: -5px; /* Adjust the margin-top to spread the box upwards */
        margin-bottom: -5px;
      }
      .navbar-login {
         margin-left: auto;
      }
      .menu_wrapper {
         display: flex;
         justify-content: space-between;
      }

      .custom-button {
         margin-left: 10px;
      }
      </style>
   </head>
   <body>
      <section class="menu1 cid-sa69dh2Rwn" once="menu" id="menu1-0">
         <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="container-fluid">
               <div class="menu_wrapper d-flex">
                  <div class="top_menu">
                     <div class="empty"></div>
                     <div class="navbar-brand">
                        <span class="navbar-caption-wrap"><a class="navbar-caption mbr-bold text-white display-7" href="../index.html">Cardinal Report</a></span>
                     </div>
                     <div class="icons-menu">
                        <a href="https://mobiri.se" target="_blank" class="icons-wrapper">
                        <span class="mbr-iconfont p-2 socicon-facebook socicon"></span>
                        </a>
                        <a href="https://mobiri.se" target="_blank" class="icons-wrapper">
                        <span class="mbr-iconfont p-2 socicon-instagram socicon"></span>
                        </a>
                        <a href="https://mobiri.se" target="_blank" class="icons-wrapper">
                        <span class="mbr-iconfont p-2 socicon-twitter socicon"></span>
                        </a>
                     </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                        </div>
                     </button>
                  </div>
                  @php
                     use App\Models\PostType;
                     $categories = PostType::select('title')->get();
                  @endphp
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                     @foreach($categories as $category)
                     <li class="nav-item">
                        <a class="nav-link link text-primary display-4" href="#">{{ $category->title }}</a>
                     </li>
                     @endforeach
                  </ul>

                  <div class="navbar-buttons">
          <a href="#" class="btn btn-sm btn-secondary display-4 custom-button">Login</a>
        </div>
                  </div>
               </div>
            </div>
         </nav>
      </section>
      <section class="features3 cid-sa69ignI5y" id="features3-2">
         <div>
            <div class="row">
               <div class="item features-image сol-12 col-lg-12">
                  <div class="item-wrapper">
                     <div class="item-img">
                        <img src="images/type.jpeg" alt="" title="">
                     </div>
                     <div class="item-content text-white">
                        <div>
                           <h5 class="item-subtitle mbr-semibold mbr-fonts-style display-4">ABOUT</h5>
                           <h4 class="item-title mb-3 mbr-fonts-style display-2"><strong><a href="#" class="text-white">What are the advantages of this product or service?</a></strong></h4>
                        </div>
                        <div>
                           <p class="mbr-text mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime inventore repudiandae odio quod nesciunt cum voluptates. Eveniet, aliquam. Accusantium, accusamus autem omnis numquam iure dolorum tempore hic, totam eum quos distinctio mollitia adipisci esse perferendis, perspiciatis nobis! Quo quam rem sed eveniet. Consequuntur officia error accusantium amet modi cum aliquam?</p>
                           <div class="mbr-section-btn"><a class="btn btn-white-outline display-4" href="#">Read More<span class="mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn"></span></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="features5 cid-sa6fpttrbS" id="features5-6">
         <div class="container-fluid">
            <div class="row align-items-end mb-4">
               <div class="col-12 col-sm-6">
                  <div class="mbr-section-head">
                     <h4 class="mbr-section-subtitle mbr-semibold mbr-fonts-style display-4">FROM ALL REALMS</h4>
                     <h3 class="mbr-section-title mb-0 mbr-fonts-style display-5"><strong>LATEST NEWS</strong></h3>
                  </div>
               </div>
               <div class="col-12 col-sm-6">
                  <div class="mbr-section-btn text-left text-sm-right"><a class="btn btn-primary display-4" href="#">Read More<span class="mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn"></span></a></div>
               </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                @if($post->released==1)
               <div class="item features-image сol-12 col-lg-4">
                  <div class="item-wrapper">
                     <div class="item-img">
                        <img src="{{asset('uploads/'.$post->image)}}" alt="" title="">
                     </div>
                     <div class="card-content text-white">
                        <div class="post_wrap">
                           <div class="card_post">
                              <div class="image_post">
                                 <img src="{{asset('uploads/'.$post->admin_avatar)}}" alt="">
                              </div>
                              <div class="author_post">
                                 <p class="author mb-0 mbr-fonts-style display-4">Posted by <strong>{{$post->admin_name}}</strong></p>
                                 <p class="date mb-0 mbr-fonts-style display-4">{{ $post->created_at->format('F j, Y') }}</p>
                              </div>
                           </div>
                        </div>
                        <div class="item-content">
                           <div>
                              <div class="card_topic">
                                 <span class="category_content mbr-fonts-style display-4"><strong>Trending</strong></span>
                                 <span class="mbr-iconfont mobi-mbri-clock mobi-mbri"></span>
                                 <span class="category_estimate mbr-medium mbr-fonts-style display-4">6 min read</span>
                              </div>
                              <h5 class="item-title mbr-fonts-style display-7"><strong><a href="/detail/{{$post->id}}" class="text-white">{{strip_tags($post->content)}}</a></strong></h5>
                           </div>
                           <div class="mbr-section-btn"><a class="btn btn-white-outline display-4" href="/detail/{{$post->id}}">Read More<span class="mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn"></span></a></div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif
               @endforeach
               <div class="pagination-container">
                  {{ $posts->links() }}
              </div>
            </div>
         </div>
      </section>
      <section class="form2 cid-sa6jIxi2XU" id="form2-c">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg">
                  <div class="image">
                     <img src="images/newsletter.jpg" alt="" title="">
                  </div>
               </div>
               <div class="col-lg-1 d-none d-lg-block"></div>
               <div class="col-12 col-lg-6">
                  <h4 class="mbr-section-subtitle mbr-semibold mbr-fonts-style display-4">Stay informed with us</h4>
                  <h3 class="mbr-section-title mbr-fonts-style display-5"><strong>Stay up to date with news from all over the world.</strong></h3>
                  <p class="mbr-text mbr-fonts-style display-4">Sign up for our Newsletter!</p>
                  <div class="subscribe_form" data-form-type="formoid">
                     <!---Formbuilder Form--->
                     <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                        <input type="hidden" name="email" data-form-email="true" value="WsR4lFawNOs3D9YxDrON0/Ch0zADLLgiuTCkh0kGciEtwJaE8/JdrxS1J8+WLz127Wo4LIupTTBuTmizeF3YL8lNsF+bqjZ3960SPknAObw5Bu6J9bj6HcJkI3DdQOmh">
                        <div class="row">
                           <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                           <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                           </div>
                        </div>
                        <div class="dragArea row">
                           <div class="form-group col-12 col-sm-8" data-for="email">
                              <input type="email" name="email" placeholder="Your email adress" data-form-field="Email" required="required" class="form-control display-4" id="email-form2-c">
                           </div>
                           <div class="col-12 col-sm-4 input-group-btn mt-3 mt-sm-0"><button type="submit" class="btn btn-primary display-4">Subscribe</button></div>
                        </div>
                     </form>
                     <!---Formbuilder Form--->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="footer1 cid-sa6jXKqAqJ" once="footer" id="footer1-d">
         <div class="align-center container-fluid">
            <div class="row justify-content-center">
            </div>
            <div class="line"></div>
            <div class="row align-items-baseline">
               <div class="col-12 col-md-6">
                  <p class="privacy mbr-fonts-style align-left display-4">Cardinal Report<br></p>
               </div>
               <div class="col-12 col-md-6">
                  <p class="privacy mbr-fonts-style align-right display-4">
                     <a href="#" onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;"><b>Go to top</b></a>
                  </p>
               </div>
            </div>
         </div>
      </section>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/web/assets/jquery/jquery.min.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/popper/popper.min.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/tether/tether.min.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/smoothscroll/smooth-scroll.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/dropdown/js/nav-dropdown.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/dropdown/js/navbar-dropdown.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/touchswipe/jquery.touch-swipe.min.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/theme/js/script.js"></script>
      <script src="https://mobirise.com/extensions/newsm4/technews/assets/formoid.min.js"></script>
      <!-- Google Tag Manager-->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-PFK425');
      </script>
      <!-- End Google Tag Manager --> 
      </head>
      <body>
         <!-- Google Tag Manager-->
         <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFK425"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
         <!-- End Google Tag Manager -->
   </body>
</html>
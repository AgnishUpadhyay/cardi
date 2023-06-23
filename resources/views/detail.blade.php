<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Article</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        body {
            background-color: #1a191d;
        }
        .spacer {
        display: inline-block;
        width: 3.5px; 
        }
        .navbar-back-button {
        display: flex;
        align-items: center;
        position: absolute;
        left: 15px;
        top: 20%;
        transform: translateY(-50%);
        background-color: #000;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        z-index: 9999;
        }
        .navbar-back-button .back-icon {
        margin-right: 3px; 
        }

        .navbar-back-button:hover {
        background-color: whitesmoke;
        color: black;
        }
        .article-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .article-image {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .article-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        .article-excerpt {
            font-size: 20px;
            color: #888;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        .article-content {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 40px;
            color: #333;
        }
        .article-meta {
            font-size: 14px;
            color: #888;
            margin-bottom: 20px;
        }
        .article-meta a {
            color: #888;
            text-decoration: none;
        }
        .article-meta a:hover {
            color: #333;
        }
    </style>
</head>
<body>
    <section class="menu1 cid-sa69dh2Rwn" once="menu" id="menu1-0">
        <nav class="navbar navbar-dropdown navbar-expand-lg"></nav>
            <div class="container-fluid">
            <div class="d-flex align-items-center">
              <a href="/" class="navbar-back-button">
                <span class="fas fa-caret-left"></span> 
                <span class="fas fa-caret-left"></span> 
                <span class="spacer"></span>
                Back
              </a>
            </div>
                <div class="menu_wrapper d-flex">
                    <div class="top_menu">
                        <div class="empty"></div>
                        <div class="navbar-brand">
                            <span class="navbar-caption-wrap"><a class="navbar-caption mbr-bold text-white display-7" href="../index.html">Cardinal Report</a></span>
                        </div>
                        <div class="icons-menu">
                            <a href="https://www.facebook.com/agnish.upadhyay.1602003/" target="_blank" class="icons-wrapper">
                            <span class="mbr-iconfont p-2 socicon-facebook socicon"></span>
                            </a>
                            <a href="https://www.instagram.com/just_call_me_dh/" target="_blank" class="icons-wrapper">
                            <span class="mbr-iconfont p-2 socicon-instagram socicon"></span>
                            </a>
                            <a href="https://www.reddit.com/user/bestest_infested/" target="_blank" class="icons-wrapper">
                            <span class="mbr-iconfont p-2 socicon-reddit socicon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="article-container" id="articleContainer">
    <h1 class="article-title text-center">{{$post->title}}</h1>
    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src = "{{asset('uploads/'.$post->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
    <br>
        <p class="article-excerpt">{{$post->excerpt}}</p>
        <p class="article-content">{{strip_tags($post->content)}}</p>
        <hr>
        <div class="article-meta">
            @php
                use Carbon\Carbon;
                $lastEdit = Carbon::parse($post->updated_at);
                $duration = $lastEdit->diffForHumans();
            @endphp
            <p>Last edit: {{$duration}}</p>
            <button id="loadNextArticleBtn" class="btn btn-primary">Next up..</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.bundle.min.js"></script>
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
     
    <!-- ajax -->
    <script>
        var currentArticleId = {{$post->id}};
        var isLoadingNextArticle = false;
        var postEnd = false;

        function loadNextArticle() {
            if (isLoadingNextArticle) {
                return;
            }
            isLoadingNextArticle = true;

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var nextArticleData = JSON.parse(xhr.responseText);
                        // console.log(111, nextArticleData);
                        if (nextArticleData.nextArticle) {
                            var nextArticle = nextArticleData.nextArticle;
                            var nextArticleContainer = document.createElement('div');
                            nextArticleContainer.innerHTML = "<h1 class='article-title text-center'>" + nextArticle.title + "</h1>" +
                                "<img class='bd-placeholder-img card-img-top' width='100%' height='auto' src='{{ asset('uploads/') }}/" + nextArticle.image + "' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'/></img>" +
                                "<br><p class='article-excerpt'>" + nextArticle.excerpt + "</p>" +
                                "<p class='article-content'>" + nextArticle.content + "</p>" +
                                "<hr><div class='article-meta'><p>Last edit: " + lastEdit(nextArticle.updated_at) + "</p><button id='loadNextArticleBtn' class='btn btn-primary'>Next up..</button></div>";

                            document.querySelector('.article-container').appendChild(nextArticleContainer);
                            currentArticleId = nextArticle.id;
                            // console.log(222, nextArticle);
                            isLoadingNextArticle = false;
                        } else {
                            alert('No more articles available.');
                            isLoadingNextArticle = false;
                            postEnd = true;
                        }
                    } else {
                        console.error('Error loading next article.');
                        isLoadingNextArticle = false;
                    }
                }
            };
            // console.log(3333, currentArticleId);

            xhr.open('GET', '/detail/'+currentArticleId+'/next-article', true);
            xhr.send();
        }

        function lastEdit(updatedAt) 
        {
            var now = new Date();
            var lastEdit = new Date(updatedAt);
            var timeDifference = now.getTime() - lastEdit.getTime();
            var seconds = Math.floor(timeDifference / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);

            if (days > 0) { return days + " days ago"; } 
            else if (hours > 0) { return hours + " hours ago"; } 
            else if (minutes > 0) { return minutes + " minutes ago"; }
            else { return seconds + " seconds ago"; }
        }

        function handleScroll() 
        {
            if(!postEnd) {
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                var windowHeight = window.innerHeight || document.documentElement.clientHeight;
                var documentHeight = document.documentElement.scrollHeight;
                var scrollPercentage = (scrollTop + windowHeight) / documentHeight * 100;
                if (scrollPercentage >= 75) {
                    loadNextArticle();
                }
            }
        }
        window.addEventListener('scroll', handleScroll);
    </script>
</body>
</html>

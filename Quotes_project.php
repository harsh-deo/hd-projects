<html>

<head>
<link rel="stylesheet" href="quotes.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>//bootstrap-ui link
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script language='javascript'>
function openURL(url){
  window.open(url, 'Share', 'width=550, height=400, toolbar=0, scrollbars=1 ,location=0 ,statusbar=0,menubar=0, resizable=0');
}
function getQuote(){ //funtion to fetch data from website
  $.ajax({
    url:'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand',cache:false,
    success: function(r) {
     var currentQuote="", currentAuthor="";
     currentQuote = r[0].content;
     currentAuthor = r[0].title;
     var display="";
     display += currentQuote + "<br>" + currentAuthor;
     $("#quote").html(display);
     $('#tweet-quote').on('click', function() {
     openURL('https://twitter.com/intent/tweet?hashtags=quotes&related=freecodecamp&text=' + encodeURIComponent('"' + currentQuote + '" ' + currentAuthor));
   });
   }
 });
}
$(document).ready(function(){ //display quote on click
  getQuote();
  $('#getMessage').on('click',getQuote);

  });

</script>
</head>


<body>

<div class="container-fluid">
  <nav class="navbar navbar-default">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Daily Quotes</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Categories</a></li>
      </ul>
  </nav>
<h1 class="white-text" align=center>Doutes</h1>
<div class="quote-box">
<div class="row">
  <div class="col-md-12">
    <div class="" id="displayQuote">
      <div class="" id='quote'></div>
        <div class="row">
          <div class="col-md-5">
              <button id="getMessage">New Doute </button>
          </div>
          <div class="col-md-offset-10">
              <button id="tweet-quote" title="Tweet this quote!" target="_blank">Tweet</button>
          </div>
          </div>
        </div>
  </div>
  </div>
</div>
</div>

<div class="footer">
<a href="http://codepen.io/hezag/">By Harsh</a>
</div>
</div>
</body>

</html>

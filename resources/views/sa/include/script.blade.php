<!-- external javascripts -->
<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
  // Function to translate the page content based on the stored language
  function translatePageTo(languageCode) {
    localStorage.setItem('lang', languageCode)
    // Function to translate text using Google Translate API
    function translateText(text, languageCode, callback) {
      var translateApiUrl = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=" + languageCode + "&dt=t&q=" + encodeURI(text);

      axios.get(translateApiUrl)
        .then(function(response) {
          var translationResult = response.data[0][0][0];
          callback(translationResult);
        })
        .catch(function(error) {
          console.error("Error translating text:", error);
        });
    }

    // Translate each text node recursively
    function translateNodes(nodes, languageCode) {
      nodes.forEach(function(node) {
        if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() !== '') {
          translateText(node.nodeValue, languageCode, function(translation) {
            node.nodeValue = translation;
          });
        } else if (node.nodeType === Node.ELEMENT_NODE) {
          // Handle nested text content inside HTML elements
          translateNodes(node.childNodes, languageCode);
        }
      });
    }

    // Translate the entire page
    translateNodes(document.body.childNodes, languageCode);
  }

  document.addEventListener('DOMContentLoaded', function() {
    var storedLang = localStorage.getItem('lang');
    if (storedLang) {
      translatePageTo(storedLang);
    }
  });
</script>
<!DOCTYPE html>
<html>
    <head>
        <title>Spot the Docs is a Lightweight Laravel Web App that finds documentation issues with GitHub's API</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel='stylesheet' href='/css/app.css' type='text/css' />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    </head>
    <body>
      <div class="wrap">
        <div class="container">
          <div class="content">
            <h1 class="title">Spot the Docs</h1>
            <h2 class="description"><a href="/github">Spot the Docs</a> is a lightweight Laravel/Heroku web app that collects finds documentation issues on GitHub.<br /><br />Browse the most recent issues and send in your contributions.</h2>
            <button name="ghdoctag" id="ghdoctag" alt="Github Documentation Tag">Go</button></a>

            <div id="ghapidata" class="clearfix"></div>
          </div>
        </div>

        <script type="text/javascript">
          $(document).ready(function() {
            var i = 0;
            var requir = 'https://api.github.com/search/issues?q=is:public+is:open+type:issue+label:documentation';

            $( function githubDocs(){
              $('#ghdoctag').on('click', function(e){
                e.preventDefault();
                $('#ghapidata').html('<div id="loader"><img src="https://i.imgur.com/UqLN6nl.gif" alt="Loading..."></div>');

                requestJSON(requir, function(json) {
                  if(json.message == "Not Found" || issue == '') {
                    $('#ghapidata').html("<h2>No Issues Found</h2>");
                  } else {
                    var items = json.items;
                    var outhtml = '';
                    var issue = '';

                    outhtml = outhtml + '<div class="repolist clearfix">';

                    $.getJSON(requir, function(json){
                      items = json.items;
                      outputPageContent();
                    });

                    function outputPageContent() {
                      if(items.length == 0) {
                        outhtml = outhtml + '<p>No issues!</p></div>';
                      } else {
                        outhtml = outhtml + '<br /><br /><ul>';
                          for (var i = 0; i < items.length; i++) {
                              var issue = json.items[i].title;
                              var issueurl = json.items[i].html_url;
                              // var repourl = json.html_url;
                              outhtml = outhtml + '<li><p style="clear:both;"><a class="link-text" href="'+issueurl+'" target="_blank">'+issue+'</a></p><div class="repo-button-wrapper"><a href="'+issueurl+'" target="_blank" class="repo"> <button>Issue</button></a></div></li>';
                          }
                          outhtml = outhtml + '</ul></div><br /><br /><div class="pagination"><button id="next">Next</button></div>';

                          $('#ghapidata').html(outhtml);

                          // $('#next').click(function(){
                          //   i = 1;
                          //   requir = requir+'&page='+i++;
                          //   console.log(requir);
                          //   $('#ghapidata').html(outhtml);
                          // });
                      }
                    }
                  }
                });
              });
            });

            function requestJSON(url, callback) {
              $.ajax({
                url: url,
                complete: function(xhr) {
                  callback.call(null, xhr.responseJSON);
                }
              });
            }
          });
        </script>

        <footer>a <strong><a href="https://github.com/billimarie/100-days-of-code" target="_blank">#100DaysofCodes</a></strong> experiment by <strong><a href="http://www.billimarie.com/portfolio" target="_blank">Billimarie</a></strong></footer>
      </div>
    </body>
</html>

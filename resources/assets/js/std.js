var i = 0;
var requir = 'https://api.github.com/search/issues?q=is:public+is:open+type:issue+label:documentation';

$( function githubDocs(){
  $( '#ghdoctag' ).on( 'click', function(e) {
    e.preventDefault();
    $( '#ghapidata' ).html( '<div id="loader"><img src="https://i.imgur.com/UqLN6nl.gif" alt="Loading..."></div>' );

    requestJSON( requir, function(json) {
      if(json.message == "Not Found" || issue == '') {
        $('#ghapidata').html("<h2>No Issues Found</h2>");
      } else {
        var items = json.items;
        var outhtml = '';
        var issue = '';

        outhtml = outhtml + '<div class="repolist clearfix">';

        $.getJSON( requir, function(json){
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
                  var issueURL = json.items[i].html_url;

                  var repoName = ''; //json.items[i].name
                  var repoURL = ''; //json.items[i].repository_url

                  var issueLink = document.createElement ( 'a' );
                  issueLink.href = issueURL;
                  var repoPathName = issueLink.pathname;
                  var repoPathNameParameters = repoPathName.split( '/' );
                  var repoURL = 'https\://github\.com/'+repoPathNameParameters[1]+'/'+repoPathNameParameters[2];
                  var repoName = repoPathNameParameters[2];

                  outhtml = outhtml + '<li><div style="clear:both"><h1 class="repo-title"><a href="'+repoURL+'">'+repoName+'</a></h1><p><a class="link-text" href="'+issueURL+'" target="_blank">'+issue+'</a></p></div><div class="repo-button-wrapper"><a href="'+issueURL+'" target="_blank" class="repo"> <button>Issue</button></a> &nbsp; <a href="'+repoURL+'" target="_blank" class="repo"> <button>Repo</button></a></div></li>';
              }
              outhtml = outhtml + '</ul></div>';

              $('#ghapidata').html(outhtml);

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

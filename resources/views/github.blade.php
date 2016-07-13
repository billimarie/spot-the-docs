<!DOCTYPE html>
<html>
    <head>
        <title>GitHub Test - Spot the Docs</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
        @import url('http://fonts.googleapis.com/css?family=Oldenburg');

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
margin: 0;
padding: 0;
border: 0;
font-size: 100%;
font: inherit;
vertical-align: baseline;
outline: none;
-webkit-font-smoothing: antialiased;
-webkit-text-size-adjust: 100%;
-ms-text-size-adjust: 100%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
html { overflow-y: scroll; }
body {
background: #fafafa url('http://i.imgur.com/l92k33u.png'); /* http://subtlepatterns.com/subtle-grey/ */
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 62.5%;
line-height: 1;
color: #616161;
padding: 35px 0;
}

br { display: block; line-height: 1.6em; }

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea {
-webkit-font-smoothing: antialiased;
-webkit-text-size-adjust: 100%;
-ms-text-size-adjust: 100%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
outline: none;
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; }

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }

h1 {
font-family: 'Oldenburg', Arial, sans-serif;
color: #646464;
font-size: 4.0em;
line-height: 1.6em;
margin-bottom: 10px;
}

h2 {
font-size: 2.8em;
line-height: 1.55em;
margin-bottom: 4px;
color: #888;
}

p {
font-size: 1.4em;
line-height: 1.55em;
margin-bottom: 12px;
}

a {
color: #8eadd2;
}
a:hover {
color: #6e91b9;
}


/* page structure */
#w {
display: block;
width: 800px;
margin: 0 auto;
background: #fff;
padding: 15px 25px;
-webkit-box-shadow: 1px 2px 3px -1px rgba(0,0,0,0.4);
-moz-box-shadow: 1px 2px 3px -1px rgba(0,0,0,0.4);
box-shadow: 1px 2px 3px -1px rgba(0,0,0,0.4);
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

#ghapidata {
display: block;
padding: 25px 0;
}

#loader {
display: block;
width: 200px;
height: 200px;
margin: 0 auto;
}


/* page content styles */
.smallname {
font-size: 0.75em;
color: #a9a9a9;
font-style: italic;
}

.avi {
float: left;
margin-right: 7px;
margin-bottom: 7px;
}
.avi img {
border: 1px solid #ccc;
padding: 3px;
}

.repolist {
display: block;
clear: both;
width: 100%;
}
.repolist ul {
font-size: 1.2em;
}
.repolist ul li {
display: block;
}
.repolist ul li a {
font-weight: bold;
padding: 6px 9px;
display: block;
float: left;
margin-right: 10px;
margin-bottom: 10px;
text-decoration: none;
border: 1px solid #356492;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #fff;
background-color: #3673af;
background-image: -webkit-gradient(linear, left top, left bottom, from(#5597d8), to(#3673af));
background-image: -webkit-linear-gradient(top, #5597d8, #3673af);
background-image: -moz-linear-gradient(top, #5597d8, #3673af);
background-image: -ms-linear-gradient(top, #5597d8, #3673af);
background-image: -o-linear-gradient(top, #5597d8, #3673af);
background-image: linear-gradient(top, #5597d8, #3673af);
}
.repolist ul li a:hover {
background-color: #396895;
background-image: -webkit-gradient(linear, left top, left bottom, from(#4b87c2), to(#396895));
background-image: -webkit-linear-gradient(top, #4b87c2, #396895);
background-image: -moz-linear-gradient(top, #4b87c2, #396895);
background-image: -ms-linear-gradient(top, #4b87c2, #396895);
background-image: -o-linear-gradient(top, #4b87c2, #396895);
background-image: linear-gradient(top, #4b87c2, #396895);
}
.repolist ul li a:active {
-webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.25);
-moz-box-shadow: inset 0 3px 5px rgba(0,0,0,0.25);
box-shadow: inset 0 3px 5px rgba(0,0,0,0.25);
}

.repolist ul li a span {
font-family: "Courier New", Courier, "Lucida Typewriter", monospace;
font-size: 0.9em;
}

/* input field */
#ghusername {
display: block;
padding: 5px 8px;
font-size: 1.4em;
color: #666;
width: 550px;
margin-bottom: 15px;
}

#ghsubmitbtn {
display: inline-block;
padding: 8px 18px;
font-size: 14px;
font-weight: bold;
color: #444;
text-decoration: none;
text-shadow: 0 1px 0 rgba(255,255,255,0.8);
background-color: #eaeaea;
background-image: -webkit-linear-gradient(#fafafa, #eaeaea);
background-image: -moz-linear-gradient(#fafafa, #eaeaea);
background-image: -ms-linear-gradient(top, #fafafa, #eaeaea);
background-image: -o-linear-gradient(top, #fafafa, #eaeaea);
background-image: linear-gradient(#fafafa, #eaeaea);
border-radius: 3px;
border: 1px solid #ddd;
border-bottom-color: #c5c5c5;
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.05);
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.05);
box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}
#ghsubmitbtn:hover {
background-color: #dadada;
background-image: -webkit-linear-gradient(#eaeaea, #dadada);
background-image: -moz-linear-gradient(#eaeaea, #dadada);
background-image: -ms-linear-gradient(top, #eaeaea, #dadada);
background-image: -o-linear-gradient(top, #eaeaea, #dadada);
background-image: linear-gradient(#eaeaea, #dadada);
border-color: #ccc #ccc #b5b5b5;
}
#ghsubmitbtn:active {
background-color:#dadada;
background-image: none;
border-color: #b5b5b5;
-webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.25);
-moz-box-shadow: inset 0 3px 5px rgba(0,0,0,0.25);
box-shadow: inset 0 3px 5px rgba(0,0,0,0.25);
}

/* clearfix */
.clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.clearfix { display: inline-block; }

html[xmlns] .clearfix { display: block; }
* html .clearfix { height: 1%; }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    </head>
    <body>
        <div class="container">
          <div id="w">
            <h1>Simple Github API Webapp</h1>
            <p>Enter a single Github username below and click the button to display profile info via JSON.</p>

            <input type="text" name="ghusername" id="ghusername" placeholder="Github username...">

            <a href="#" id="ghsubmitbtn">Pull User Data</a>

            <div id="ghapidata" class="clearfix"></div>
          </div>
        </div>

    </body>

    <script>
      $(function(){
        $('#ghsubmitbtn').on('click', function(e){
          e.preventDefault();
          $('#ghapidata').html('<div id="loader"><img src="http://i.imgur.com/UqLN6nl.gif" alt="loading..."></div>');

          var username = $('#ghusername').val();
          var requri   = 'https://api.github.com/users/'+username;
          var repouri  = 'https://api.github.com/users/'+username+'/repos';

          requestJSON(requri, function(json) {
            if(json.message == "Not Found" || username == '') {
              $('#ghapidata').html("<h2>No User Info Found</h2>");
            }

            else {
              // else we have a user and we display their info
              var fullname   = json.name;
              var username   = json.login;
              var aviurl     = json.avatar_url;
              var profileurl = json.html_url;
              var location   = json.location;
              var followersnum = json.followers;
              var followingnum = json.following;
              var reposnum     = json.public_repos;

              if(fullname == undefined) { fullname = username; }

              var outhtml = '<h2>'+fullname+' <span class="smallname">(@<a href="'+profileurl+'" target="_blank">'+username+'</a>)</span></h2>';
              outhtml = outhtml + '<div class="ghcontent"><div class="avi"><a href="'+profileurl+'" target="_blank"><img src="'+aviurl+'" width="80" height="80" alt="'+username+'"></a></div>';
              outhtml = outhtml + '<p>Followers: '+followersnum+' - Following: '+followingnum+'<br>Repos: '+reposnum+'</p></div>';
              outhtml = outhtml + '<div class="repolist clearfix">';

              var repositories;
              $.getJSON(repouri, function(json){
                repositories = json;
                outputPageContent();
              });

              function outputPageContent() {
                if(repositories.length == 0) { outhtml = outhtml + '<p>No repos!</p></div>'; }
                else {
                  outhtml = outhtml + '<p><strong>Repos List:</strong></p> <ul>';
                  $.each(repositories, function(index) {
                    outhtml = outhtml + '<li><a href="'+repositories[index].html_url+'" target="_blank">'+repositories[index].name + '</a></li>';
                  });
                  outhtml = outhtml + '</ul></div>';
                }
                $('#ghapidata').html(outhtml);
              } // end outputPageContent()
            } // end else statement
          }); // end requestJSON Ajax call
        }); // end click event handler

        function requestJSON(url, callback) {
          $.ajax({
            url: url,
            complete: function(xhr) {
              callback.call(null, xhr.responseJSON);
            }
          });
        }
      });
    });
    </script>
</html>

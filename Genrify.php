<html>
    <head>
        <?php include 'header.html';?>
    </head>
    <body>
        <div class="body-content">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading background-gradient">
                        Genrify
                    </div>
                    <div class="panel-body">
                        <div>
                            I want to do some Genre analysis on some of my playlists and maybe import some visualization libraries and do some cool stuff with that.  I saw some 'Mood analyzer' stuff in their app store, but I don't know how they work, so I'll just do it myself
                        </div>
                    </div>
                    <div class="panel-body">
                        <span style="padding-right: 15px;">Search for an artist</span><input type="text" id="_artistSearch" />
                        <button id="_artistSearchSubmit">Search</button>
                    </div>
                    <div class="panel-body">
                        <select id="_artistSearchResult" size="10" style="width:60%;">

                        </select>
                        <ul id="_genreList">
                            
                        </ul>
                    </div>
                </div>            
            </div>
        </div>
        <script type="text/javascript">
            function SpotifySearchSubmit(searchTerm) {

                var spotifySearchType = 'artist';

                var artistSearch = searchTerm.replace(' ', '+');

                var spotifyApiUrl = 'https://api.spotify.com/v1/search?' + 'type=' + spotifySearchType + '&q=' + artistSearch + '&limit=50';

               return $.ajax({
                    type: 'GET',
                    url: spotifyApiUrl,
                    async: false,
                    success: function (data) {

                    },
                    error: function (data) {
                        var bigD = data;
                    }
                });
            };

            function BuildSpotifyArtistHtml(spotifyArtists) {
                
                var artistsHtml = '';
                var genreArray = [];
                for (var i = 0; i < spotifyArtists.length; i++) {
                    artistsHtml += '<option value=' + spotifyArtists[i].name + '>' + spotifyArtists[i].name + '</option>';
                    for (var j = 0; j < spotifyArtists[i].genres.length; j++) {
                        genreArray.push(spotifyArtists[i].genres[j]);
                    }
                }


                var genreHtml = '';
                for (var i = 0; i < genreArray.length; i++) {
                    genreHtml += '<li>' + genreArray[i] + '</li>';
                }

                $('#_artistSearchResult').html(artistsHtml);
                $('#_genreList').html(genreHtml);

            };

            $('#_artistSearch').change(function () {
                if(this.value.length > 2)
                {
                    debugger;
                    
                    var artists = SpotifySearchSubmit(this.value).done(BuildSpotifyArtistHtml(result));// var sendQuery = "now";
                    BuildSpotifyArtistHtml(artists);
                }
            });

            $('#_artistSearchSubmit').on('click', function () {
                var artistQuery = $('#_artistSearch').val();

                BuildSpotifyArtistHtml(SpotifySearchSubmit(artistQuery));

            });
        </script>
    </body>
</html>
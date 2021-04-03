<html>
    <head>
        <title>My Robot</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
        <link rel="stylesheet" type="text/css" href="{{ url_for('static',filename='css/style.css') }}">
    </head>
    <body> 

        <h1 class="header">ALPHA-BRAVO CLASSIFIED SENTIENT ROBOT</h1>  

        <div>
        <div class="flex-container">
            <div class="controls-box">
                <div>
                    <table class="buttons-table">
                        <tr>
                            <td></td>
                            <td><input type="button" id="cmd-forward" class="button" value="FORWARD"/></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="button" id="cmd-left" class="button" value="LEFT"/></td>
                            <td><input type="button" id="cmd-dance" class="button" value="DANCE"/></td>
                            <td><input type="button" id="cmd-right" class="button" value="RIGHT"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="button" id="cmd-backward" class="button" value="BACKWARD"/></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="output-box" class="output-box">
                <div>> please select a command from the left</div>
            </div>
        </div> 
            <div class="link-box">
                <a href="./info.php"><b>MORE INFORMATION</b></a>
            </div>
        </div>

        <script>
            //this causes the output to be typed out slowly and looks nicer
            function typeText(text)
            {
                $('.output-box').prepend('<div id="line">> </div><br/>');
                var i = 0;
                var textSpeed = 40;
                typeWriter();
                function typeWriter() {
                  if (i < text.length) {
                    document.getElementById("line").innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, textSpeed);
                  }
                }
            }
            
            var url = "https://alphabravoclassifiedrobot.serveo.net";

            $(document).ready(function(){
                //when any button is clicked, temporarily disable buttons
                $('.button').on('click', function(){
                    $('.button').prop('disabled', true)
                    setTimeout(function(){$('.button').prop('disabled', false)}, 3000);
                });

                //FORWARD
                $('#cmd-forward').on("click", function(){
                    //send a get request to heroku
                    $.get(url+"/forward", function(response){
                        //type the response
                        typeText(response);
                    });
                });

                //LEFT
                $('#cmd-left').on("click", function(){
                    //send a get request to heroku
                    $.get(url+"/left", function(response){
                        //type the response
                        typeText(response);
                    });
                });

                //RIGHT
                $('#cmd-right').on("click", function(){
                    //send a get request to heroku
                    $.get(url+"/right", function(response){
                        //type the response
                        typeText(response);
                    });
                });
                $('#cmd-backward').on("click", function(){
                    //send a get request to heroku
                    $.get(url+"/backward", function(response){
                        //type the response
                        typeText(response);
                    });
                });
                $('#cmd-dance').on("click", function(){
                    //send a get request to heroku
                    $.get(url+"/dance", function(response){
                        //type the response
                        typeText(response);
                    });
                });
            });
        </script>   
    </body>
</html>

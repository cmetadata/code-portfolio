<html>
    <head>
        <title>My Robot</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
        <link rel="stylesheet" type="text/css" href="{{ url_for('static',filename='css/style.css') }}">
    </head>
    <body> 

        <h1 class="header">HOW IT WORKS</h1>  
        <div>
        <div class="flex-container">
            <div class="info-box">
                <h2 class="sub-header">VOICE CONTROL</h2>

                <b>Mic -> Natural Language Processing</b><br/>
                > The mic recieves the input and sends it to our Natural Language Processing software, which converts the sounds recording to data that can then be processed further.<br/><br/>

                <b>Natural Language Processing -> Natural Language Understanding</b><br/>
                > The Natural Language Understanding software uses machine learning technology that can be "trained". It receives the data string sent by the NLP, and uses that and its training knowledge to make an assumption on what the user was trying to say.<br/><br/>

                <b>Natural Language Processing -> Heroku Webserver</b><br/>
                > The NLU sends out a POST request containing the JSON data associated with the assumption it made. Our Heroku website uses a webhook to capture that data, and search it for the "action" variable (for example, "forward_action"). It then looks up that action in a dictionary, and calls the associated function.<br/><br/>

                <b>Heroku Webserver -> Robot Server</b><br/>
                > Our robot has a server running on it, and uses a tunnel service called Serveo to communicate. The function called in Heroku sends a GET request to the robot through the tunnel.<br/><br/>

                <b>Robot Server -> Movement</b><br/>
                > The robot uses web routes to determine how the hardware should react. It recieves the request, and based on what route was requested, it moves accordingly.

            </div>

            <div class="info-box">
                <h2 class="sub-header">WEBSITE CONTROL</h2>

                <b>Heroku Webpage -> Robot Server</b><br/>
                > Our webpage features buttons that can be clicked to move the robot. Our robot has a server running on it, and uses a tunnel service called Servio to communicate. When a button is clicked, a GET request is sent to the robot through the tunnel.<br/><br/>

                <b>Robot Server -> Movement</b><br/>
                > The robot uses web routes to determine how the hardware should react. It recieves the request, and based on what route was requested, it moves accordingly.<br/><br/>

                <b>Robot Server -> Heroku Webpage</b><br/>
                > The robot sends a response to the website following a click, specifying what movement it took. This response is what is printed on the website after a click (for example, "moving left...").

            </div>
        </div>
        <div class="link-box">
            <a href="/"><b>GO BACK</b></a>
        </div>
        </div>
    </body>
</html>
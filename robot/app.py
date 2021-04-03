from __future__ import print_function
from future.standard_library import install_aliases
install_aliases()

from urllib.parse import urlparse, urlencode
from urllib.request import urlopen, Request
from urllib.error import HTTPError

import json
import os
import random
import re
import time
from time import sleep
import atexit
import sys
import requests 
import threading
import asyncio
import async_timeout


from flask import Flask
from flask import request
from flask import make_response
from flask import Flask
from flask import render_template
from flask_ask import Ask, statement, question, session
from datetime import datetime


from multiprocessing.dummy import Pool as ThreadPool 

from datetime import datetime

from lxml import etree
import urllib.request

app = Flask(__name__)

# Raspberry pi url from ngrok
baseurl = "https://abcrobot.serveo.net/"  
AMAZON_RESPONSE = ""

# this is what I added!!
@app.route('/')
def index():
    return render_template('index.php')

@app.route('/info.php')
def info():
    return render_template('info.php')

@app.route('/google_webhook', methods=['POST'])
def google_webhook():   

    jsonRequest = request.get_json(silent=True, force=True, cache=False)

    print("Google request started at " + time.strftime('%X %x %Z'))
    print(json.dumps(jsonRequest, indent=4))
        
    appResult = google_process_request(jsonRequest)
    appResult = json.dumps(appResult, indent=4)

    print("Google request finished at " + time.strftime('%X %x %Z'))
   
    jsonResponse = make_response(appResult)
    jsonResponse.headers['Content-Type'] = 'application/json'
    return jsonResponse, jsonRequest
    
    
@app.route('/amazon_webhook', methods=['POST'])
def amazon_webhook():
        
    jsonRequest = request.get_json(silent=True, force=True)
    
    print("Amazon request started at " + time.strftime('%X %x %Z'))
    print(json.dumps(jsonRequest, indent=4))
    
    appResult = amazon_process_request(jsonRequest)
    appResult = json.dumps(appResult, indent=4)
        
    print("Amazon request finished at " + time.strftime('%X %x %Z'))

    jsonResponse = make_response(appResult)
    jsonResponse.headers['Content-Type'] = 'application/json'
          
    return jsonResponse, jsonRequest
        
    
def move_forward_action(req):
    url = baseurl + 'forward'
    xmlLink = urllib.request.urlopen(url)
    
    #xmlData = etree.parse(xmlLink)
    #xmlLink.close()    
    return "Forward"


def move_backward_action(req):
    url = baseurl + 'backward'
    xmlLink = urllib.request.urlopen(url)
    
    #xmlData = etree.parse(xmlLink)
    #xmlLink.close()    
    return "Backward"

def move_left_action(req):
    url = baseurl + 'left'
    xmlLink = urllib.request.urlopen(url)
    
    #xmlData = etree.parse(xmlLink)
    #xmlLink.close()    
    return "Left"

def move_right_action(req):
    url = baseurl + 'right'
    xmlLink = urllib.request.urlopen(url)
    
    #xmlData = etree.parse(xmlLink)
    #xmlLink.close()    
    return "Right"

def move_dance_action(req):
    url = baseurl + 'dance'
    xmlLink = urllib.request.urlopen(url)
    
    #xmlData = etree.parse(xmlLink)
    #xmlLink.close()    
    return "Dance"


# A dispatch table (as dict) with result.action and a function to call,
# which returns what the speech value
dispatch_table = {
    "move_forward": move_forward_action, 
    "move_right": move_right_action,
    "move_left": move_left_action,    
    "move_dance": move_dance_action,    
    "move_backward": move_backward_action
    }


# Tries to match the action name in the dictionary 
# Calls a function and then returns its value as the speech response (generally nothing)
def google_process_request(req):
    action = req.get('queryResult').get('action')  
    session = req.get('sessionId')
    if not action in dict(dispatch_table):
         return {}   

    func = dispatch_table[action]
    speech = func(req)
    
    global AMAZON_RESPONSE
    AMAZON_RESPONSE = speech
    
    print("session id is " + session)

    #global AMAZON_RESPONSE 
    #AMAZON_RESPONSE = speech
    
    return {
        "speech": speech,
        "displayText": speech,
        # "data": data,
        # "contextOut": [],
        "source": "Cloud"
    }
   

# Starts a seperate thread for our query with Amazons data to API.AI   
def amazon_process_request(req):
    # Let this sequence continue unless program is restructured   
    #amazon_process_thread(req)
    amazon_thread = threading.Thread(target=amazon_process_thread, args=[req])
    amazon_thread.daemon = True
    amazon_thread.start()
    
    # make main thread wait for whatever seconds
    # move speech into speech variable
    # return speech
    global AMAZON_RESPONSE
    
    
    return {
  "version": "1.0",
  "response": {
    "shouldEndSession": True,
    "outputSpeech": {
      "type": "PlainText",
      "text": "Ok " 
    },
    "card": {
      "type": "Simple",
      "title": " ",
      "content": "Ok"
    }
  }
}
    

def amazon_process_thread(req):
    # Get value
    dataFromAmazon = req.get('request').get('intent').get('slots').get('anything').get('value')
    print("Data received from Amazon at " + time.strftime('%X %x %Z'))

    # If compromised, must be regenerated on API.AI
    headers = {
    'Authorization': 'Bearer 69f9999079564c7ea7832708424a124e',
    }
    print("Authorization header formed at " + time.strftime('%X %x %Z'))

    params = (
        ('v', '20150910'),
        ('query', dataFromAmazon),
        ('lang', 'en'),
        ('sessionId', 'az'),
        ('timezone', '2019-02-21T18:42:42-0400'),
    )
    print("Parameters formed at " + time.strftime('%X %x %Z'))

    proxies = {
      "http": None,
      "https": None,
    }
    
    requests.get('http://api.api.ai/api/query', proxies=proxies, headers=headers, params=params)
    print("Request sent " + time.strftime('%X %x %Z'))
    
@app.route('/testcall', methods=['GET'])
def testcall():
    res = amazon_process_request({"request":{"intent":{"name":"amazon_test_intent","slots":{"anything":{"value":"forward"}}}}})
    r = make_response(json.dumps(res))
    r.headers['Content-Type'] = 'application/json'
    return r
    
# Wakes up app.
if __name__ == '__main__':
    # 	
    port = int(os.getenv('PORT', 443))

    print("Starting app on port %d" % port)

    app.run(debug=False, host='0.0.0.0', port=port)

   # app.run(debug=False, port=port, host='0.0.0.0', ssl_context=('../../fullchain.pem', '../../privkey.pem'))

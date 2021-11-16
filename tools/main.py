#!/usr/bin/env python
import requests
from time import sleep
import os


PATH_TOOLS = os.path.dirname(os.path.abspath(__file__))
PATH_CONFIG = os.path.join(PATH_TOOLS, 'config')
PATH_YML_CONFIG = os.path.join(PATH_CONFIG, 'config.yml')
PATH_JSON_CONFIG = os.path.join(PATH_CONFIG, 'config.jsons')

if os.path.isfile(PATH_YML_CONFIG):
    import yaml
    from yaml.loader import SafeLoader
    f = open(PATH_YML_CONFIG)
    config_obj = yaml.load(f, Loader=SafeLoader)

elif os.path.isfile(PATH_JSON_CONFIG):
    import json
    f = open(PATH_JSON_CONFIG)
    config_obj = json.load(f)

else:
    print('No config file found')
    print(
        'Go to '
        + PATH_CONFIG
        + ' and create a config.json or config.yml from the example configs'
        )
    exit(1)

DOMAIN = config_obj['domain']
PORT = config_obj['port']

# ENTRYPOINT
for page in config_obj['pages']:
    r = requests.get("http://" + DOMAIN + ':' + PORT + '/' + page)
    print(r.text)
    if r.status_code != 200:
        input('Press Enter')

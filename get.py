# -*- coding: utf-8 -*-
from __future__ import print_function

import subprocess

from grooveshark import Client

client = Client()
client.init()

#for song in client.favorites("hasantayyar"):
#    print(song)

playlist = client.playlist("32271770")
for song in playlist.songs:
    print("+ **" + unicode(song.artist.name)+  "** - " + unicode(song.name) + " / [" + unicode(song.album.name) + "](http://grooveshark.com/#!/album/a/" + song.album.id +")")

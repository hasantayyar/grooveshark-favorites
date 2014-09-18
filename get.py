# -*- coding: utf-8 -*-
from __future__ import print_function

import subprocess

from grooveshark import Client

client = Client()
client.init()

#for song in client.favorites("hasantayyar"):
#    print(song)

playlist = client.playlist("32271770")
print "This is a huge link of my favorite songs on grooveshark. This list is used for my own needs. But you may discover some new songs."
print "There is too many types of genres in this list, so I didn't group them by genres."
print "\n\n"
for song in playlist.songs:
    print("+ **" + unicode(song.artist.name)+  "** - " + unicode(song.name) + " / [" + unicode(song.album.name) + "](http://grooveshark.com/#!/album/a/" + song.album.id +")")

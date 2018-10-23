#!/usr/bin/python
# -*- coding: latin-1 -*-

import os
import shutil
import locations

mylist=locations.getLocationsPrimaCerchia()

def cleanHtmls():
    for file in os.listdir("."):
        if file.endswith(".html"):
            fn=os.path.join(".", file)
            print(fn)
            os.remove(fn)
pass        

def makefiles(prefix):
    tags=mylist.split(",")              # sono le locations
    
    # copia master TXT in master HTML
    masterTxtSrc=prefix + 'inverigo.php'
    masterHtmlDst=prefix + 'inverigo.html'
    shutil.copy(masterTxtSrc, masterHtmlDst)
        
    for mtag in tags[:]:
        print(mtag)
        name=mtag.strip().lower()
        fname=prefix + name + ".html"
        print(fname)
        src = prefix + 'inverigo.html'
        if(fname!=src):
            shutil.copy(src, fname)
            
            #sost. nome in file
            fr = open(fname, "r")
            text=fr.read()
            fr.close()
            
            # sostituzioni attive
            text=text.replace("Inverigo", mtag.strip())
            text=text.replace("-inverigo", "-" + name)
            text=text.replace("'inverigo'", "'" + name + "'")
            print(text)
            fw = open(fname, "w")
            fw.write(text)
            fw.close()
            
    pass
pass


if __name__== "__main__":
    # cleanHtmls()
    makefiles("assistenza-computer-")
pass

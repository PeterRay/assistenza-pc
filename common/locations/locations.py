#!/usr/bin/python
# -*- coding: latin-1 -*-

def read(filename):
    file = open(filename, "r") 
    txt=file.read() 
    file.close()
    return txt
    pass

def getLocationsPrimaCerchia():
    txt=read("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/primaCerchiaList.txt")
    return txt
    pass

def getLocationsSecondaCerchia():
    txt=read("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/secondaCerchiaList.txt")
    return txt
    pass

def getLocationsPrincipaliVicino():
    txt=read("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/principaliVicineList.txt")
    return txt
    pass


def getLocationsOldCorsoEcdl():
    txt=read("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/oldCorsoEcdl.txt")
    return txt
    pass

def getLocationsOldAssistenzaInformatica():
    txt=read("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/old-assistenza-informatica.txt")
    return txt
    pass

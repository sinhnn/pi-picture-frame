<!---
/*******************************************************************************
// Project name   :
// File name      : !!FILE
// Created date   : !!DATE
// Author         : Ngoc-Sinh Nguyen
// Last modified  : !!DATE
// Desc           :
*******************************************************************************/
-->
Introduction
============
Pi as picture frame by web browser, fbi, feh.

Files
============
        10-cache-on-ram.sh                        Set window manager, web, etc cache on RAM
        10-sislab-slideshow-fbi.sh                fbi for slideshow
        10-sislab-slideshow-feh.sh                feh for slideshow
        10-sislab-slideshow-web.sh                Web browser for slideshow

Installation
============

Web  slideshow
--------------
Most flexible and heaviest, requires window manager
1. ```
echo "xinit /path/to/script &" >> /etc/profile # auto start script after boot
```
2. Edit script to point your website

Feh slideshow
-------------
Lightweight, but no transition effect, requires window manager
1. ```
echo "xinit /path/to/script &" >> /etc/profile # auto start script after boot
```
2. Edit script to point your image folder

Fbi slideshow
-------------
Simplest, no window manager requirement.
1. ```
echo "/path/to/script &" >> /etc/profile # auto start script after boot
```
2. Edit script to point your image folder


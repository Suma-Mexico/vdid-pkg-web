# VDID User Guide

Congrats! You just saved yourself hours of work by implementing suma's service. Let’s get you oriented with what’s here and how to use it.

## Commands

To install vdid-pkg-web, use:

```bash
composer require suma-mexico/vdid-pkg-web
```

## Configuration WebVerification using PHP

1. The first step is adding the file using require like that:<br/>

   > require 'vendor/suma-mexico/vdid-pkg-web/src/WebVerification.php';

2. Once you have imported the library, you have to initialize the object like this.<br/>

   > $vdid = new VdidPkgWeb\WebVerification(api-key);

   You have to send the public api-key when you initialize it.<br/>
   api-key: string.

3. When you have [created the verification](https://documenter.getpostman.com/view/13807324/TW6xooD3#6d48e323-7466-48f5-a34e-dfb2c10588ac) and you get the uuid, you will call a function to start the process to upload files and send it, like the following line:<br/>

   > $vdid::verifyIdentity(uuid);

   uuid: string<br/>
   If you want to open a popup instead to redirect, you will call the function like the following line:<br/>

   > $vdid::verifyIdentity(uuid, 'popup')

   If you want to open a new tab instead to redirect, you will call the function like the following line:<br/>

   > $vdid::verifyIdentity(uuid, 'open')

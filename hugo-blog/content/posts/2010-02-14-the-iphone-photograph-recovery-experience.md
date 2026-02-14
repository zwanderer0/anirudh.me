---
title: "The iPhone Photograph Recovery experience"
date: 2010-02-14
tags: ["photo recovery", "iphone"]
draft: false
slug: "the-iphone-photograph-recovery-experience"
---

Around a week back while playing around with a friend, i took some photographs from my iPhone that were one of the most inseparable ones to me. Due to a stupid backup method, I happened to accidently delete and lose them in a jiffy.

The odds to recovering them were low, and i took some precautions like minimally using my iPhone so that disk Read+Write sessions do not overwrite the data permanently.

I started with Googling methods to recover the data off the iPhone, but found NONE working. The softwares that I downloaded from those keyword stuffed websites were total rip-offs.

What worked for me after several experiments was:

What worked for me after several experiments was:

- Jailbroken iPhone

- BSD Subsystem and OpenSSH installed on iPhone

- Terminal (or MobileTerminal) installed on iPhone

- An SSH server installed on computer. I tried installing OpenSSH on Windows first, it didnt work maybe since `dd` ain't natively supported on Windows. **Fedora** 12 worked fine for me. *So using Fedora/Ubuntu box is the best bet here*.

- Find the iPhone's IP address

- Find computer's IP address

![](/blog/images/blog/iphone-wifi-static.jpg)

First, make sure that your iPhone and computer are on the same LAN via WiFi. You may try pinging your computer from your iPhone (using Terminal) and vice versa.

If that worked, you should be prompted to enter a password for . If the connection times out, then you need to make sure that you have the SSH server running on your computer and make sure that port 22 (the default SSH port) isn't being blocked by your router's firewall.

Once you know that your iPhone and the computer are talking to each other, open Terminal on the iPhone and run the following command to begin transferring the iPhone's "disk" image to your computer:

NOTE: Make certain that your iPhone's screen lock is disabled first. If the screen lock comes on, it will kill the SSH connection. Also, you'll want to connect your iPhone to its charger. This transfer can take a while.

Also, be sure that you don't mix up the `if` (input-file) and `of` (output-file) in the command above. Doing so could wipe-out your iPhone.

```bash
dd if=/dev/disk0 | ssh <user>@<computer-ip> 'dd of=iphone-dump.img'
```

![PhotoRec data recovery tool in action](/blog/images/blog/photorec01.jpg)

The iPhone's image dumping process will take about 10 hours for a 8GB iPhone. The IMG file can be copied in a portable harddrive and bought to a different machine, so that recovery process can be continued using [PhotoRec](http://www.cgsecurity.org/wiki/PhotoRec) (Free and open source image recovery project)

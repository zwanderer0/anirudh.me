---
title: "Plans for the Mozilla Firefox Multitouch UX"
date: 2010-06-05
tags: ["gsoc", "ux", "firefox", "iPad", "Natural UI", "fennec"]
draft: false
slug: "plans-for-the-mozilla-firefox-multitouch-ux"
---

I am quite interested in exploring the Multitouch scenario on Mozilla Firefox for my project under [Felipe's](http://www.felipe.wordpress.com/) and [Gerv's](http://www.gerv.net/) mentorship. Working with Mozilla Team design team members ([ Alexander Limi](http://limi.net/)) and mentors is turning out to be a great experience so far. I am learning a lot of new things.

Browsing the web is a very distributed activity with a lot of interactions possible. My aim would be to design a minimalist interface, that is slick, fast, and non-obtrusive. Hence devoted past couple of weeks researching on the topic and doing some user study with Natural User Interface Group members.

## Research

![Dan Saffer's Designing Gestural Interfaces, a key reference](/blog/images/blog/gestural-interfaces-book.jpg)

Browsing through guidelines and advice by Dan Saffer in his book [ "Designing Gestural Interfaces" ](http://www.designinggesturalinterfaces.com/) was an eye opener. I'll be using the book as a ready reference before writing code portions.

## Progress so far

- Setup Mercurial (hg) repo at Google-Code at a mirror at BitBucket
- Wrote the extension skeleton: Sidebars etc.
- Recompiled Fx on Ubuntu and Win
- Checked out Fennec's and iPad Safari interactions using simulators
- User study with [NUIGroup](http://www.nuigroup.com/) members
- Planning UI in context with three primary tasks: Tabs Placement and behaviour, Natural Gestures library for common tasks etc.

## Design considerations

![Early UI mockup for Firefox multitouch tab management](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhVonI116NbeChHVGpiUCqE5PEnbOiZtBHfLq2Mp3XUxSKI_z_2EFTncGkn1nqGXigdJwN4BuJxHMVCVftO2HU6C44WWmaDn8cYXNYZSkIjvXgAsNlzmDEXqgljzIiMDbpbWeqMiid5jDE3/s1600/TUI.jpg)

The overall discussion with community proved fruitful deriving to a conclusion: most applications/tools that are designed for Horizontal table-top systems might not be a perfect fit on vertical Multitouch systems. Since the tablets' era is coming: iPad, HP Slate, NotionInk Adam etc. we've to keep a couple of other things at the back of our mind while designing applications:

- Imprecise positioning
- Possible problems with eye parallaxis (with pen, too)
- The finger may be too large for accurate pointing with small objects
- Hand movements (if used with keyboard)

In next update I'll be sharing some diagrams and code samples, right here.

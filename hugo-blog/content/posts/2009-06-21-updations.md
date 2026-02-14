---
title: "Updations"
date: 2009-06-21
draft: false
slug: "updations"
---

Got back from home after 5 days, it was probably a long gap, resumed the GSoC work now.

1. The TUIO client now appends cursor coordinates to a text file, the x_pos and y_pos, example coordinates 0.535937488079071, 0.410416662693024.
2. Writing a ruby script SketchUp plugin that reads the TUIO cursor information from the text file.

The downsides to this after discussing with Jay Morrisson:

1. it's subject to slowdown by writing to/reading from disk
2. The serialization has to be done by oneself

After this works I'll consider one more option of trying the dRB ruby gems (Distributed Queue in Ruby) since we can just focus on the sketchup integration.

Half the GSoC battle is just getting two things to talk to each other -- you try one bridge, it breaks, you try another, repeat. just wish that the Google SketchUp's API was a little more developer friendly.. but we'll get there. :)
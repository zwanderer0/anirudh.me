---
title: "Analysing an autorickshaw ride in Bangalore"
date: 2011-06-21
tags: ["bangalore", "analysis", "autorickshaw", "accelerometer"]
draft: false
slug: "analysing-an-autorickshaw-ride-in-bangalore"
---

The bumpy ride on the Bangalore streets triggered a thought the other day, why not log the data and analyse it later(whackily purposeless initially).

The desire to log is esp. a fallout of my recent stint with user studies dealing with data cleaning/analysis and deriving statistical results from it: formally two-way ANOVA tests, T-tests etc. and who doesn't love clean graphs telling a story :-)

*A Bangalore autorickshaw, the test vehicle for this experiment*

Without giving much thought, I tied my Macbook Pro equipped with SuddenMotionSensor(SMS) to the auto-rickshaw seat and used http://www.shiffman.net/p5/sms/ to log the X/Y/Z axis data in CSV format. I manually kept a record through a stopwatch about the potholes/pit occurrence during the 25 minute rick-ride.

It was interesting to the see the outliers due to the sudden relative motion triggered jerks.

![Route map of the 25-minute rickshaw ride through Bangalore](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEho8K8JnFJ88xQZML7She2hHmEEzBConbJHI2LJy8HrsFGsYbPK3WQpnUeVt3lvXkXY6nwJ-Qf0tF-S9wzQFFlyYduR0BLnn334eeu6wYeAtepyMGPJ4GTZhwp8_zu98P81bzPoAfamR0XU/s1600/map.png)

Ankit and I plotted a few **qualitative** graphs out of the sampled CSV data(6731 datalogs). I matched the spikes with the manually recorded pothole/sudden-jerk data to see the obvious but visually pleasing results :)

Red color shows the X, Orange shows the Y and Blue shows the Z displacements.

![XYZ accelerometer data with spikes at potholes and sudden jerks](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEioYG-8uO1wK8c_v4LzKok_P9Dqeq6JtEzkV4ZXqmUt3UOLvWeAJX7yxc4dLtKR4yV4vG5Abmli-O13nfT1q9pM1aDDcYtcJ4_X49PjXtqcbrLlB7j-KpQDdhOH8B-ItYH0YPbbNHSfZsax/s1600/Autorickshaw.png)

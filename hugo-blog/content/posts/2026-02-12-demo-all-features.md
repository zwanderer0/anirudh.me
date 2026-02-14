---
title: "Demo: All Features"
date: 2026-02-12
tags: ["demo"]
draft: true
slug: "demo-all-features"
---

This post demonstrates every feature available in the Journal theme — margin notes, tables, math formulas, video embeds, code blocks, and images.

## Margin Notes

You can place small annotations in the right margin, like a whispered aside to the reader.

{{< margin >}}This is a margin note — small text that sits to the right of the main content, Tufte-style.{{< /margin >}}

The margin notes appear alongside the paragraph they're placed next to. They're perfect for citations, asides, or additional context without interrupting the flow of reading.

{{< margin >}}Margin notes collapse inline on mobile screens.{{< /margin >}}

Here is another paragraph with its own margin note. The notes stack naturally as you scroll down the page.

## Tables

Tables render with clean borders matching the theme:

| Project       | Year | Category        |
|---------------|------|-----------------|
| Sparsh        | 2008 | Multitouch      |
| LeChal        | 2011 | Haptic Wearable |
| Air-Ink       | 2013 | Pollution → Art |
| Glassified    | 2014 | Smart Glass     |

## Math Formulas

Inline math works with single dollar signs: the focal length formula is $\frac{1}{f} = \frac{1}{d_o} + \frac{1}{d_i}$.

Display math uses double dollar signs:

$$
U(P) = \frac{e^{ikr}}{ir} \iint_S U(Q) \, e^{-ik\frac{r^2}{2R}} \, e^{ikr\cos(\theta)} \, dS
$$

Maxwell's equations:

$$
\nabla \times \mathbf{E} = -\frac{\partial \mathbf{B}}{\partial t}
$$

## Video Embeds

Embed a YouTube video by its ID:

{{< youtube dQw4w9WgXcQ >}}

## Code Blocks

```c
double calculateFocalLength(double d_o, double d_i) {
    double f = 1.0 / ((1.0 / d_o) + (1.0 / d_i));
    return f;
}

int main() {
    double d_o = 30.0;
    double d_i = 15.0;
    double focalLength = calculateFocalLength(d_o, d_i);
    printf("Focal length: %.2f\n", focalLength);
    return 0;
}
```

```python
import numpy as np

def focal_length(d_o, d_i):
    return 1 / ((1/d_o) + (1/d_i))

print(f"f = {focal_length(30, 15):.2f}")
```

## Images

Images scale to the content width automatically:

![Ansel Adams - Tetons and Snake River](https://upload.wikimedia.org/wikipedia/commons/2/21/Adams_The_Tetons_and_the_Snake_River.jpg)

{{< margin >}}Ansel Adams, *The Tetons and the Snake River*, 1942. Grand Teton National Park, Wyoming.{{< /margin >}}

## Blockquotes

> Diu cogita an tibi in amicitiam aliquis recipiendus sit. The best inventions come from observation, not inspiration.

---

That's everything. Margin notes, tables, math, video, code, images, and blockquotes — all working.

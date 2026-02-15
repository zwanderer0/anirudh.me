# anirudh.me — Project Documentation

## CRITICAL: Always sync before any work
**Before making ANY changes, run:**
```bash
git pull --no-rebase origin master
```
The live site may have been updated via the CMS or from another computer. Failing to pull first WILL cause merge conflicts or lost work. This is mandatory, not optional.

## Architecture
- **Local source**: Root directory (`/`) — files at repo root are the live site
- **GitHub repo**: `zwanderer0/anirudh.me` (master branch)
- **Live site**: https://anirudh.me (GitHub Pages + GoDaddy DNS)
- **Static HTML/CSS/JS** — no build step, no framework

## How to make edits
1. **Pull first:** `git pull --no-rebase origin master`
2. Edit files at repo root (HTML/CSS/JS) or in `hugo-blog/` (blog posts)
3. If blog changed, rebuild: `cd hugo-blog && hugo --baseURL="https://anirudh.me/blog/" --destination="../blog/" --cleanDestinationDir`
4. Stage and commit: `git add <files> && git commit -m "Your message"`
5. Push: `git push origin master`
6. GitHub Pages auto-deploys — site updates in ~1 minute

## MIT Redirects (all redirect to anirudh.me)
| URL | Location | File |
|-----|----------|------|
| `web.mit.edu/anirudhs/www/` | Athena AFS | `~/www/index.html` |
| `anirudhs.scripts.mit.edu/` | MIT Scripts | `~/web_scripts/index.html` |
| `sites.mit.edu/anirudhs/` | MIT Sites WordPress | 301 redirect rule in WP admin |

### To update MIT Athena files
```bash
ssh anirudhs@athena.dialup.mit.edu
# Duo 2FA required (phone call or SMS)
# edit ~/www/index.html or ~/web_scripts/index.html
```

### To upload files to MIT
```bash
scp <local-file> anirudhs@athena.dialup.mit.edu:~/www/
```

## DNS (GoDaddy)
- A records → GitHub Pages IPs (185.199.108.153, 109, 110, 111)
- www CNAME → zwanderer0.github.io
- SSL: Let's Encrypt, auto-provisioned by GitHub Pages

## SEO Setup
- `robots.txt` and `sitemap.xml` on anirudh.me
- Three .edu DA 94 redirects pointing to anirudh.me
- Homepage links back to all three MIT URLs
- JSON-LD structured data (not yet added — recommended next step)
- Wikipedia page (not yet created — biggest SEO opportunity)

---

## How to Write a New Blog Post

### 1. File & Frontmatter

Create a markdown file in `hugo-blog/content/posts/` with this naming convention:
```
YYYY-MM-DD-slug-of-post-title.md
```

Frontmatter format (YAML):
```yaml
---
title: "Your Post Title Here"
date: YYYY-MM-DD
draft: false
slug: "slug-of-post-title"
---
```

Set `draft: true` to preview without publishing. The `slug` determines the URL: `anirudh.me/blog/slug-of-post-title/`

### 2. Images

**Where they go:** `hugo-blog/static/images/<post-slug>/`
Example: `hugo-blog/static/images/ai-kiran/anirudh-speaking.jpg`

**Resize before adding** (originals are often 10-17MB):
```bash
sips --resampleWidth 1200 -s format jpeg -s formatOptions 85 \
  "source-image.jpg" --out hugo-blog/static/images/<post-slug>/output-name.jpg
```
Target: ~1200px wide, JPEG quality 85%, under 300KB each. GIFs are fine for animations (keep under 600KB).

**Markdown syntax for images:**
```markdown
![Descriptive alt text that explains what's in the image](/blog/images/<post-slug>/filename.jpg)
```
The path must start with `/blog/images/` (not relative, not the static/ path).

### 3. Writing Style (Anirudh's Voice)

- **First person, reflective.** Open with a scene or personal memory, not a thesis statement.
- **Conversational but intellectually rigorous.** Assume reader intelligence.
- **Name people.** Credit collaborators by full name with links. Use first names after initial mention.
- **Ground ideas in place and time.** Mention specific cities, years, events.
- **Varied sentence rhythm.** Short punchy sentences mixed with longer flowing ones. "Humans drop things." followed by a paragraph.
- **Use `##` section headings** to organize. `###` for subsections within longer posts.
- **Images woven into narrative**, placed right after the paragraph they relate to. Not bunched together.
- **End open-ended.** A forward-looking thought or question, not a summary. No "In conclusion."
- **Avoid:** em dashes (use commas, periods, "and"), hashtags, "stay tuned", "In this post I will", or any AI-sounding patterns.
- **Links inline:** `[Project Name](https://url.com/)` naturally within sentences, not listed at the end.

### 4. Post Structure (Typical)

1. **Opening** (~150 words): Personal anecdote or scene that sets the emotional context
2. **Context** (~100 words): What/where/when/who, with links
3. **Body** (~400 words): Walk through the subject, naming people and projects with `###` subsections
4. **Closing** (~100 words): Reflection, open question, forward-looking thought

### 5. Preview Locally

```bash
cd hugo-blog/
hugo server --baseURL="http://localhost:1313/blog/" -D
```
Open `http://localhost:<port>/blog/<slug>/` (port shown in terminal output).

### 6. Build & Deploy

```bash
# Build with production URLs
cd hugo-blog && hugo --baseURL="https://anirudh.me/blog/" --destination="../blog/" --cleanDestinationDir

# Pull first (GitHub Actions may have pushed)
git pull --no-rebase origin master

# Stage source + built output + images
git add hugo-blog/content/posts/<post-file>.md
git add hugo-blog/static/images/<post-slug>/
git add blog/

# Commit and push
git commit -m "Blog post: Your Post Title"
git push origin master
```
GitHub Pages deploys in ~1-2 minutes. If push is rejected, `git pull --no-rebase origin master` then push again.

### 7. Visual CMS (Alternative to Terminal)

Decap CMS editor is at `anirudh.me/blog/admin/`. Requires a GitHub PAT (Settings > Developer settings > Personal access tokens > Fine-grained, repo scope on `zwanderer0/anirudh.me`). Paste the token on first visit. GitHub Actions auto-rebuilds after CMS saves.

### Reference Post

See `hugo-blog/content/posts/2025-12-13-ai-kiran-physical-ai-demo-or-die.md` as the template for structure, image paths, frontmatter, and writing style.

# anirudh.me

Personal website and blog of Anirudh Sharma.

**Live site:** https://anirudh.me
**Blog:** https://anirudh.me/blog/
**CMS:** https://anirudh.me/blog/admin/

---

## Before making any changes

```bash
git pull --no-rebase origin master
```

Always. The site may have been updated via CMS or another device.

---

## Repo structure

```
/                  ← Live site (GitHub Pages serves from root)
├── assets/        ← Fonts and images
├── css/, js/      ← Stylesheets and scripts
├── projects/      ← Project pages
├── work/, cv/, info/
├── blog/          ← Built blog output (do not edit directly)
├── hugo-blog/     ← Blog source (markdown, theme, config)
│   ├── content/posts/   ← Blog post markdown files
│   ├── static/images/   ← Blog images
│   └── hugo.toml        ← Hugo config
├── CLAUDE.md      ← Coding agent instructions
├── RULES.txt      ← Quick reference rules
└── HOW-TO-WRITE-NEW-BLOG-POSTS.txt
```

## Writing a blog post

**Quick edits:** Use the CMS at https://anirudh.me/blog/admin/ (needs GitHub PAT)

**New post with images:**

1. Create `hugo-blog/content/posts/YYYY-MM-DD-slug.md` with frontmatter:
   ```yaml
   ---
   title: "Post Title"
   date: YYYY-MM-DD
   draft: false
   slug: "post-slug"
   ---
   ```

2. Resize images to 1200px wide:
   ```bash
   sips --resampleWidth 1200 -s format jpeg -s formatOptions 85 source.jpg --out hugo-blog/static/images/<slug>/name.jpg
   ```

3. Reference images in markdown as `![alt](/blog/images/<slug>/name.jpg)`

4. Build and deploy:
   ```bash
   cd hugo-blog && hugo --baseURL="https://anirudh.me/blog/" --destination="../blog/" --cleanDestinationDir
   git add hugo-blog/content/posts/<file>.md hugo-blog/static/images/<slug>/ blog/
   git commit -m "Blog post: Title"
   git push origin master
   ```

Site deploys in ~1-2 minutes via GitHub Pages.

## Writing style

First person, reflective. Open with a scene. Name people with links. Varied sentence rhythm. No em dashes. End open-ended, not with a summary. See `HOW-TO-WRITE-NEW-BLOG-POSTS.txt` for full guide.

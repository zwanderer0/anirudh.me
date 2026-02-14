# anirudh.me — Project Documentation

## Architecture
- **Local source**: `experimental-ani/` directory
- **GitHub repo**: `zwanderer0/anirudh.me` (master branch)
- **Live site**: https://anirudh.me (GitHub Pages + GoDaddy DNS)
- **Static HTML/CSS/JS** — no build step, no framework

## How to make edits
1. Edit files in `experimental-ani/`
2. Stage and commit: `git add <files> && git commit -m "Your message"`
3. Push: `git push origin master`
4. GitHub Pages auto-deploys — site updates in ~1 minute

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

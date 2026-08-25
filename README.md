# Philadelphia Pentecostal Church — Website

A PHP website for Philadelphia Pentecostal Church (Nawabshah, Sindh), with a
built-in admin panel so you can add photos and update text yourself, without
needing to ask a developer each time.

## What's included

- `index.php` — Homepage
- `pastors.php` — Pastors & Leadership
- `ministries.php` — Ministry Projects (Reach to Gentiles)
- `local-church.php` — Local Church Life (weekly schedule)
- `sunday-school.php` — Sunday School
- `conventions.php` — Conventions & Local Church Needs
- `welfare.php` — LikeChrist Welfare Organization (with a Give section)
- `admin/` — Password-protected admin panel for photos & text
- `data/*.json` — All editable page text, stored as simple JSON files
- `uploads/*` — Your uploaded photos, organized by section

## Requirements

Any standard shared hosting plan that supports **PHP 7.4+** will run this
site. No database is required — everything is stored in JSON files and an
`uploads/` folder.

## How to deploy

1. **Upload everything** in this zip to your hosting account, keeping the
   folder structure exactly as it is (usually into `public_html/` or
   `www/`, or a subfolder if you want the site at a sub-path).
2. Make sure the `uploads/` folder (and its subfolders) and the `data/`
   folder are **writable** by PHP. Most hosts allow this by default; if you
   see an upload error, set permissions to `755` (or `775`) on those two
   folders via your host's File Manager or an FTP client.
3. Visit your domain — the homepage should load immediately.
4. Go to `yourdomain.com/admin/login.php` and sign in.

## First login

- **Default password:** `PPCnawabshah1974`
- **Please change this immediately** — see "Changing the admin password"
  below. Anyone with this password can edit your site's content.

## Using the admin panel

- The left-hand menu lists every section of the site (Homepage, Pastors,
  Ministries, Local Church, Sunday School, Conventions, LikeChrist Welfare).
- Each section page lets you:
  - **Upload photos** — pick a JPG, PNG, or WEBP file (up to 8MB) and click
    "Upload Photo". It's added to that section's gallery immediately.
  - **Remove photos** — click "Remove" under any photo, then confirm.
  - **Edit text** — update the fields shown and click "Save Changes". This
    is the same text that appears on the live public page.
- You can add photos as often as you like, with no limit — just repeat the
  upload step. New photos appear at the top of the section's gallery on
  the public site.
- The **Homepage** section manages the hero photo shown behind "A Home for
  the Spirit-Filled Life" — upload one clear, wide photo there for the best
  look (a landscape photo of the church building or a service works well).

## Changing the admin password

For security, change the default password before sharing the site publicly.

1. On your own computer or in any online PHP sandbox, run:
   ```
   php -r "echo password_hash('yournewpassword', PASSWORD_DEFAULT);"
   ```
   (Replace `yournewpassword` with the password you want.)
2. Copy the long string it prints out (it starts with `$2y$`).
3. Open `includes/config.php` and replace the value of
   `ADMIN_PASSWORD_HASH` with what you copied.
4. Re-upload `includes/config.php` to your host.

If you don't have PHP available anywhere, ask any developer to run that
one command for you — it takes a few seconds and they never need to see
or know your actual site otherwise.

## Editing contact details

Church name, location, phone, email, and the pastor's name are set once in
`includes/config.php` near the top of the file, and used everywhere on the
site automatically (nav, footer, contact sections). Update them there if
they ever change.

## Notes

- The site is fully responsive (phones, tablets, desktop) and includes a
  mobile menu.
- All page copy was written as a starting point — feel free to refine the
  wording for any section directly from the admin panel to match your
  church's voice more closely.
- The "Give" section on the LikeChrist Welfare page currently points
  people to email or call the church office rather than an online payment
  form. If you'd like a bank transfer panel or online payment gateway added
  later, that can be built in as a next step.

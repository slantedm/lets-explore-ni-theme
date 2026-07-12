# Let’s Explore NI WordPress Theme

A custom WordPress block theme for **Let’s Explore NI**, a campervan rental business in Northern Ireland. The theme is designed around Booqable bookings, an editable campervan fleet, road-trip guides, campsites, customer stories and enquiry handling.

## Requirements

- WordPress 6.6 or newer
- PHP 8.0 or newer
- Gutenverse
- Gutenverse Companion
- A Booqable account for live availability and checkout

## Local installation

1. Download the latest installable ZIP from GitHub Actions or Releases.
2. In WordPress, go to **Appearance → Themes → Add New → Upload Theme**.
3. Upload the ZIP and activate it.
4. Go to **Settings → Permalinks** and click **Save Changes**.
5. Open **Appearance → Business Settings** and add the Booqable URL and business contact details.

## Content areas

The WordPress dashboard includes:

- Campervans
- Road Trips
- Campsites
- Customer Stories
- Business Settings

Starter campervans and road trips are generated on first activation. Campsite and customer-story placeholders remain drafts until verified and published.

## Development

The repository root is the WordPress theme source. Do not commit generated release ZIP files.

Run the basic checks locally:

```bash
find . -name '*.php' -not -path './vendor/*' -print0 | xargs -0 -n1 php -l
php -r '$json = json_decode(file_get_contents("theme.json"), true); exit(json_last_error() === JSON_ERROR_NONE ? 0 : 1);'
```

## Packaging

The GitHub Actions workflow creates an installable archive named:

```text
lets-explore-ni-theme.zip
```

The archive contains a single theme directory and excludes repository-only files such as `.git`, `.github`, development documentation and existing ZIP files.

## Booking configuration

Set the main Booqable storefront URL under **Appearance → Business Settings**. Booking buttons rendered by the theme use that setting.

Default storefront:

```text
https://letsexploreni.booqable.com/
```

## Licence

GPL-2.0-or-later. Third-party assets retain their respective licences.

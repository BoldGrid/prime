# Prime

- Contributors: rramo012, timph
- Requires at least: 4.8
- Tested up to: 5.0.0
- License: GNU General Public License v2 or later
- License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Description
Prime is a BoldGrid Parent Theme used to create new child themes for use in the BoldGrid system.  This theme utilizes the [BoldGrid Theme Framework](https://github.com/boldgrid/boldgrid-theme-framework).

## Changelog

### 2.1.0 ###
* Update: Updated library to 2.7.6

### 2.1.0-rc.2 ###
* Update: Updated WooCommerce templates for v3.5.2 compatibility.
* Update: Moved location of the composer vendor folder into parent theme dir.
* Update: Moved theme starter content welcome page to parent theme dir.
* Update: Changed default fonts for starter content.

### 2.1.0-rc.1 ###
* Update: Added dynamic layout for sticky headers.
* Update: Added import defaults for header/footer/sticky-header layout.
* Update: Removed the following deprecated configs:
	- bgtfw_site_title_display
	- bgtfw_tagline_display
	- boldgrid_footer_widgets
	- bgtfw_header_top_layouts
	- header_container
	- footer_container
	- bgtfw_footer_layouts

### 2.1.0-alpha.1 ###
* Update: Added dynamic layout methods to header/footer.
* Update: Changed title positions in template.
* Update: Removed a few wooCommerce templates that are no longer needed.

### 1.5.5 ###
* Bug Fix: Fixing issue with grouped products.
* Bug Fix: Fixing issue with incorrect nonces passed.

### 1.5.4 ###
* Update: Applied WooCommerce 3.4.0 template updates.

### 1.5.3 ###
* Update: Applied WooCommerce template updates.

### 1.5.2 ###
* Update: Updated wooCommerce templates for WC 3.3.0.
* Bug Fix: Fixed FOUC on button in my-account downloads template.

### 1.5.1 ###
* Update: Switch to custom method for paging navigation.
* Bug Fix: Display a wrapping column on blog posts without sidebars.

### 1.5 ###
* Update: Bump version.

### 1.4.5 ###
* Update: Added new template tag method for entry-footer template.
* Bug Fix: Fixed issue with skip links not pointing to valid ID.
* Update: Updated wooCommerce empty cart and cart templates for v3.1 and removed widget overrides.

### 1.4.4 ###
* Update: Addressing wooCommerce bugfixes for variable and grouped products' add to cart templates.
* Update: Fixing product search form classes.
* Update: Updated form-billing.php wooCommerce template for v3.0.9.

### 1.4.3 ###

* Update: Added wooCommerce v3.0+ compatibility.

### 1.4.2 ###

* Update: Added build process to provide a full theme .zip for users to download from github.
* Update: Created additional wooCommerce templates to integrate with BoldGrid Theme Framework
* Update: Prime now uses the standard header/footer "generic" templates.

### 1.4.1 ###

* Update: Improving wooCommerce integration with BoldGrid Theme Framework.

### 1.4 ###

* Bump version.

### 1.2.3 ###

* Update: Added gulp to package deps.

### 1.2.2 ###

* Update: Updating code standards.

### 1.2.1 ###

* Bug Fix: Removing search template container classes.

### 1.2 ###

* Bug Fix: Display 404 information only if it's found.
* Bug Fix: Fixing the page count for "Page Sitemap."

### 1.1.5 ###

* Bug Fix: Always print container markup in entry-header.

### 1.1.4 ###

* Bug Fix: Home page title causes duplicate H1 tags.

### 1.1.3 ###

* New feature: Framework Version in use now displayed in HTML comment for easier reference.

### 1.1.2 ###

* Bug Fix: Don't print out a link if there's no title for page or post in recent-entries template.
* Bug Fix: Sidebar not displaying correctly on search pages.

### 1.1.1 ###

* Bug Fix: Fixed issue for site with no posts or pages.
* New feature: Add empty widget area messages for sidebar.
* Bug Fix: Let variables get passed in to CTA template.

### 1.1 ###

* New feature: Added Container Configs.

### 1.0 ###

* Initial Release
